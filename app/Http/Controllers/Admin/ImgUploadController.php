<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\UploadImg;
use Illuminate\Support\Facades\DB;
use Image;
class ImgUploadController extends Controller
{
    

    public function showImgupload(){
        $dir = public_path().'/uploads/scroll_images/';
        $staticImg_dir = public_path().'/uploads/static_image/';
        $myfile = fopen("scroll_text.txt", "r") or die("Unable to open file!");
        $data['scroll_text'] = fread($myfile,filesize("scroll_text.txt"));
        fclose($myfile);

        $data['imgs_array'] = glob($dir.'*.*');
        $data['staticImg_array'] = glob($staticImg_dir .'*.*');
        return view('admin/imgupload', $data);
    }

    public function dynamicImgupload(Request $request){
        request()->validate([
            'scroll_img.*' => 'required|image',
        ]);
        

        foreach($request->file('scroll_img') as $image)
        {
            $name=$image->getClientOriginalName();
           
            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(150, 150, function($constraint){
                $constraint->aspectRatio();
               })->save(public_path().'/uploads/scroll_images/'.$name);

        }
        $dir = public_path().'/uploads/scroll_images/';
        $imgs_array = glob($dir.'*.*');
        return back()

        ->with('success','You have successfully upload static image.')

        ->with(['imgs_array' => $imgs_array]);

    }

    public function staticImgupload(Request $request){
        
        request()->validate([
            'static_img' => 'required|image',
        ]);
        
        $file = $request->file('static_img');
        $static_name=$file->getClientOriginalName();
        $myFile = public_path().('/uploads/static_image/'.$static_name);
        $resize_image = Image::make($file->getRealPath());

        $resize_image->resize(150, 150, function($constraint){
            $constraint->aspectRatio();
           })->save($myFile);
        
        return back()

        ->with('success','You have successfully upload static image.')

        ->with('image','static_img.jpg');
    }

    public function deletImage(Request $request){
        $deletfile = $request->file;
        unlink($deletfile);
        $msg = 'successful!';
        return response()->json($msg);
    }

    public function changeText(Request $request){
        if($fb = fopen('scroll_text.txt', 'w')){
            fwrite($fb, print_r($request->text_content, true));
            fclose($fb);
        }
        return 'succusful!';
    }
    
}
