@extends('admin/layouts/default')
    @section('custom_css')
        <style>
        .img_style{
            height: 135px;
        }
        .thumbnail{
            background-color: #ddd;
        }
        </style>
    @stop

    @section('content')

    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Images Uploads</li>
            </ol>
            <h6 class="slim-pagetitle">Images Upload</h6>

            
        </div><!-- slim-pageheader -->
        @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                </div>

        @endif

        @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif
        <div class="section-wrapper">
            <!-- Button trigger modal -->
            <div class="row" style="margin-bottom: 20px; text-align:center">
                <div class="col-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dynamicModal">
                        Scroll Image Upload
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticModal">
                        Static Image Upload
                    </button>    
                </div>
            </div>
         <div class="row"> 
            <div class="col-md-6" style="background-color:#ddd;">
                <div class="row" style="padding-top:20px;">
                    @foreach($imgs_array as $img_array)
                        <div class="col-md-4">
                            <div class="thumbnail" style="text-align:center;">
                                <a href="{{url('/uploads/scroll_images/'.basename($img_array))}}">
                                    <img class="img_style" src="{{url('/uploads/scroll_images/'.basename($img_array))}}" alt="Lights" style="width:100%">
                                </a>
                                <div class="caption">
                                <button class="btn btn-danger" onclick="removeImg('{{basename($img_array)}}')" style="margin-top:20px">Remove</button>
                                </div>
                            
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6" style="text-align:center; background-color:#eee;">
                <div class="col-md-12" style="padding-top:20px;">
                    <div style="text-align:center;">
                        @foreach($staticImg_array as $staticImg)
                            <a href="{{url('/uploads/static_image/'.basename($staticImg))}}">
                                <img class="img_style" src="{{url('/uploads/static_image/'.basename($staticImg))}}" style="width:40%">
                            </a>
                            <div class="caption">
                                <button class="btn btn-danger" onclick="deleteImg('{{basename($staticImg)}}')" style="margin-top:20px">Remove</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-5 col-md-6">
                <input class="form-control input-lg" type="text" id= "scroll_text" value="{{$scroll_text}}">
                <button type="button" class="btn btn-primary" onclick="changeText()" placeholder="scroll text" style="float: right;"> 
                        Scroll Text Change
                </button>
            </div>
        </div>      



            <!--Static Image Modal -->
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="StaticImageTitle">Static Image Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('admin/imgupload/static')}}" method="post" enctype="multipart/form-data">
                                @csrf

                               
                                <input type="file" name="static_img" id="staticImg_upload">

                                <input type="hidden" name="static_imgurl" id="static_imgurl" value=""> 
                                <button type="submit" class="btn btn-primary">Upload Image</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!--Dynamic Modal -->
            <div class="modal fade" id="dynamicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DynamicImageTitle">Scroll Image Upload</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.imguploadDynamic')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group control-group increment" >
                                    <input type="file" name="scroll_img[]" class="form-control">
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-success" id="add_button" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                </div>
                                <div class="clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="scroll_img[]" class="form-control">
                                        <div class="input-group-btn"> 
                                        <button class="btn btn-danger" id="remove_button" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit"> Upload Image </button>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- MODAL ALERT MESSAGE -->
            <div id="successmodal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body tx-center pd-y-20 pd-x-20">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                            <h4 class="tx-success tx-semibold mg-b-20">The prize information is registered successfully.</h4>
                            <p class="mg-b-20 mg-x-20">Saving Changes</p>
                            <button type="button" class="btn btn-success pd-x-25" onclick="location.href = '{{route('admin.prizes')}}'" data-dismiss="modal">OK</button>
                        </div><!-- modal-body -->
                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div><!-- modal -->
            <!-- MODAL ALERT MESSAGE -->
            <div id="errormodal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body tx-center pd-y-20 pd-x-20">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                            <h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
                            <p class="mg-b-20 mg-x-20">Please check all input field.</p>
                            <button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
                        </div><!-- modal-body -->
                    </div><!-- modal-content -->
                </div><!-- modal-dialog -->
            </div><!-- modal -->

        </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#add_button").click(function(){ 
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){ 
                $(this).parents(".control-group").remove();
            });
        }); 

        function removeImg(filename){
            var ajax_url = '{{route('admin.imgdelete')}}';
            var r = confirm("Are you sure you want to delete this Image?");
            if(r == true)
            {
                $.ajax({
                    type:'POST',
                    url: ajax_url,
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{ file: '<?php echo public_path().'/uploads/scroll_images'?>'+'/' + filename },
                    success:function(data) {
                        console.log(data);
                    },
                    error: function(){
                        console.log('deleting failed');
                    }
                
                });
            }
            window.location.replace('{{route('admin.imgupload')}}');
        }
        
        function deleteImg(filename){
            var ajax_url = '{{route('admin.imgdelete')}}';
            var r = confirm("Are you sure you want to delete this Image?");
            if(r == true)
            {
                $.ajax({
                    type:'POST',
                    url: ajax_url,
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{file: '<?php echo public_path().'/uploads/static_image/'?>' + filename},
                    success:function(data) {
                        console.log(data);
                    },
                    error: function(){
                        console.log('deleting failed');
                    }
                
                });
            }
            setTimeout(function(){ 
                
                window.location.replace('{{route('admin.imgupload')}}');
            
            }, 500);
           
        }

        function changeText(){
            var textValue = $('#scroll_text').val();
            
            if(textValue){
                    $.ajax({
                        type:"POST",
                        url: "{{route('admin.changeText')}}",
                        headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{text_content: textValue},
                        success:function(data) {
                            console.log(data);
                        },
                        error: function(){
                            console.log('deleting failed');
                        }
                });
                swal({
                    position: "top-center",
                    showConfirmButton: false,
                    timer: 2500,
                    title: "Successful!",
                    type: "success"
                });
            }
            else{
                swal({
                    position: "top-center",
                    showConfirmButton: false,
                    timer: 2500,
                    title: "Failed!",
                    type: "error"
                });
            }
        }
    </script>
@stop
