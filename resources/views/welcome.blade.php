@extends('layouts.authmaster_first')
@section('page_title') Homepage @endsection
@section('page_style')
<link rel="stylesheet" href="{{asset('html/font/style.css')}}" type="text/css" charset="utf-8" />
<style>
          body {
                font-family: 'Lemon/Milk Bold';
            }
        .sound-icon-container {
            top: 45px;}
        .bgim-l {
            position: absolute;
            width: 15%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 101;
        }
        .mobile_tag{
            display:none;
        }
        .cat-l {
            position: absolute;
            width: 200px;
            height: 100%;
            top: 0;
            left: 15%;
            z-index: 101;
        }
        .m-img-right,.m-img-left{
            width:100%;
        }
        .cat-r {
            position: absolute;
            width: 200px;
            height: 100%;
            top: 0;
            right: 15%;
            z-index: 100;
        }
        .play-demo{
            margin-bottom: 30px;
        }
        .bgim-r {
            position: absolute;
            width: 15%;
            height: 100%;
            top: 0;
            right: 0;
            z-index: 100;
        }
        .nav-bar{
            margin-top:0px;
        }
        .sound__icon{
            width: 60%;
        }
        .fooerspin1{
            margin:auto;
        }
        .img-right,.img_left{
            margin-right:0px;
            margin-left:0px;
        }

        .log__sign,.how__faq{
            flex-wrap: unset;
            margin-top: -2px; 
            justify-content: center;
        }
        .table_row{
            margin-top:40px;margin-bottom: 25px;
        }
        @media (max-width: 2000px) {

            .navbar-container {
                z-index: 99;
            }
            .auth-button {
            font-size: 16px;
            }
            .nav-bar {
                height: 50px;
            }
        .scrolling_img,.static_img{
        width:426px;
        height:282px;
        }
        .web-logo {
            width: 76%;
            left: 40px;
            z-index: 99;
            top: -61px;
            height: 107px;
        }


        }
        .auth-container::-webkit-scrollbar { width: 0 !important }
        #table_scroll {
        width: 100%;
        margin-top: 100px;
        margin-bottom: 100px;
        }
        @media (max-width: 1800px) {
            .cat-l {
                left: 12%;
            }
            .navbar-container {
            height: 50px;}
            .bgim-l {
                width: 12%;
            }

            .cat-r {
                right: 12%;
            }

            .bgim-r {
                width: 12%;
            }

        }

        @media (max-width: 1650px) {
            .cat-l {
                left: 9%;
            }

            .bgim-l {
                width: 9%;
            }

            .cat-r {
                right: 9%;
            }

            .bgim-r {
                width: 9%;
            }

        }
        @media (min-width: 768px) {
            .secimg {
            width: 100%;
        }
        }
        @media (max-width: 1500px) {
            .cat-l {
                left: 5%;
            }

            .bgim-l {
                width: 5%;
            }

            .cat-r {
                right: 5%;
            }

            .bgim-r {
                width: 5%;
            }

        }

        @media (max-width: 1350px) {
            .cat-l {
                left: 0%;
            }
            .web-logo {
                width: 75%;
                left: 45px;
                z-index: 99;
                top: -65px;
            }
            .bgim-l {
                width: 0%;
            }

            .cat-r {
                right: 0%;
            }

            .bgim-r {
                width: 0%;
            }
            .navbar-container {
            height: 40px;
        }
        }
        @media (min-width: 1301px) {
            p.auth-button.sections_footer_down {
                font-size: 13px;
            }
        }
        @media (max-width: 1300px) {
            .auth-button {
            font-size: 15px;
        }
        .navbar-container {
            height: 40px;
        }
        .web-logo {
                top: -60px;
        }
        .web-logo {
            width: 73%;
            left: 45px;
            z-index: 99;
            top: -53px;
            height: 100px;
        }
        }

        @media (max-width: 1200px) {
            .auth-button {
            font-size: 13px;
        }
        .sound-icon-container {
            top: 36px;
            right: -40px;
        }.sections_footer_down{
            font-size:9px;
        }
        .web-logo {
            width: 72%;
            left: 37px;
            z-index: 99;
            top: -50px;
            height: 91px;
        }
        }
        @media (max-width: 1100px) {
        
        .sound-icon-container {
        
            right: 0px;
        }
        .sections_footer_down{
            font-size:9px;
        }

        }
        @media (max-width: 1000px) {
            .auth-button {
            font-size: 10px;
        }
        .sections_footer_down{
            font-size:9px;
        }

        }
        @media (max-width: 991px){
            .table-d {

            margin-bottom: 22px;
        }
        .footer-row {
            margin-top: -10px;
        }
        .sections_footer_down {
            font-size: 8px;
        }
        .demo-play {
            font-size: 0.9rem!important;
        }
        .web-logo {
            width: 88%;
            left: 20px;
            z-index: 99;
            top: -39px;
            height: 79px;
        }
        }

        @media (max-width: 840px) {
            .cat-r,.cat-l {
            position: absolute;
            width: 166px;}

        }
        @media (max-width: 768px) and (max-height: 1024px) {
            .button1 {
            margin-left: 12px;
        }
        }
        @media (max-width: 767px) {
            .mobile-logo{
                width: 45%;
                margin-top: -11%;
            }
            .navbar-container {
            z-index: 99;
        }
        .carousel-control-prev {
            left: 80px;
        }
        .carousel-control-next {
            right: 80px;
        }
        .carousel-control-next-icon, .carousel-control-prev-icon {
            width: 15px;
            height: 15px;}
        div#carouselExampleControls {
            padding-left: 83px;
            padding-right: 82px;
        }
        .mobile_tag{
            position: absolute;
            width: 100%;
            height: 30px;
            z-index: 1005;
            display: flex;
        
            background: #e39d4f;
            background: -moz-linear-gradient(45deg, #e39d4f 0%, #ffef8e 50%, #e39d4f 100%);
            background: -webkit-linear-gradient(45deg, #e39d4f 0%, #ffef8e 50%, #e39d4f 100%);
            background: linear-gradient(45deg, #e39d4f 0%, #ffef8e 50%, #e39d4f 100%);
            box-shadow: 0 3px 3px 2px rgba(0, 0, 0, 0.1);
            border: 4px dotted #feec8c;
            top: 35px;
        }
        .m__how,.m__log{
            margin-right: 30px;
        }
        .users,.navbar-container{
            display:none;
        }
        .title-img-container {
            margin-top: 90px;
        }
        .img_left{
            width: 100%;
            margin: unset;
        }
        .m-img-left{
            width: 50%;
        }
        .img-right{
            width: 100%;
            margin: unset;
        }
        .m-img-right{
            width: 50%;
        }
        .fooerspin1{
            margin: auto 0;
            margin-left: 85px;
        }
        .fooerspin3 {
            width: 30%;
            margin-top: 35px;
        }
        .col-md-4.sec-img{
                margin-top:20px;
            }
            .mySlides,.secimg{
                width:65%;
            }
            .cat-r,.cat-l{
                width: 200px;
            }
            .sound-icon-container {
            top: 70px;
            right: -40px;
        }
        .m-help{
            top: 6px;
            position: fixed;
            right: 50px;
        }
        }
        @media (max-width: 700px) {
            .mySlides,.secimg{
                width:65%;
            }
            .cat-r,.cat-l{
                width: 150px;
            }
            .col-md-4.sec-img{
                margin-top:20px;
            }
            .sound-icon-container {
            top: 70px;
            right: 0px;
        }
        }
        @media (max-width: 600px) {
            .mySlides,.secimg{
                width:50%;
            }
            .mobile-logo {
                width: 53%;
                margin-top: -13%;
            }
            .cat-r,.cat-l{
                width: 150px;
            }
            .col-md-4.sec-img{
                margin-top:20px;
            }
            .sound-icon-container {
            top: 70px;
            right: 55px;
        }
        .mySlides, .secimg {
            width: 65%;
        }
        }

        @media (max-width: 500px) {
            .m__how,.m__log{
            margin-right: 9px;
        }
        .sections_footer_down {
            font-size: 7px;
        }
        .mobile-logo {
            width: 60%;
            margin-top: -14%;
        }
        .mySlides,.secimg{
                width:50%;
            }
            .cat-r,.cat-l{
                width: 110px;
            }
            .col-md-4.sec-img{
                margin-top:20px;
            }
            .footer-content {
            padding-right: 5px;
            padding-left: 5px;
            width: 37%;
            margin-left: 40px;
        }
        .mySlides, .secimg {
            width: 61.6%;
        }
        }
        @media (max-width: 416px){
            .auth-button {
            font-size: 9px;
        }
        }
        @media (max-width: 400px) {
            .auth-button {
            font-size: 7px;
        }
        .sections_footer_down {
            font-size: 5px;
        }
        .footer-content {
            padding-right: 5px;
            padding-left: 5px;
            width: 37%;
            margin-left: 31px;
        }
        .mobile-logo {
            width: 80%;
            margin-top: -20%;
        }
        }
        .m-img-right,.m-img-left{
            border: 1.5px dotted #feec8c;

        }
        @media (max-width: 360px) and (max-height: 640px) {
            .m-img-right,.m-img-left{
                border: 1px dotted #feec8c;
            }
            .cat-r, .cat-l {
            width: 90px;
        }
        .mobile-logo {
            width: 76%;
            margin-top: -21%;
        }
        .carousel-control-prev {
            left: 75px;
        }
        .carousel-control-next {
            right: 75px;
        }
        .carousel-control-next-icon, .carousel-control-prev-icon {
            width: 10px;
            height: 10px;}
        #carouselExampleControls{
            padding-left: 83px;
            padding-right: 83px;
            width: 100%;
        }
        .static_img,.scrolling_img, .static_img{
            width: 165px;
            height: 110px;
        }
        .mobile_tag{
            top:30px;
        }
        .m-help {
            top: 10px;
            position: fixed;
            right: 25px;
        }
        .mobile_tag {
            height: 26px;
        }
        .log__sign,.how__faq{
            margin-top: 3px;
        }
        .sound-icon-container {
            top: 70px;
            right: 20px;
        }
        .sound-icon-container img {
            width: 30px;
        }
        .m-img-left,.m-img-right{
            font-size: 7px;
            width: 32%;
        }
        .title-img-container {
            margin-top: 68px;
            margin-bottom: 0;
        }
        .col-md-4.sec-img {
            margin-top: 0px;
        }
        .fooerspin1 {
            margin: auto 0;
            margin-left: 25px;
        }
        .table-d {
            margin-top: 7px;
        }
       
        .table_row{
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .fooerspin3 {
            width: 30%;
            margin-top: 18px;
        }
        .col-md-4.fooerspin1 {
            margin-top: 0px;
        }
        .play-demo {
            margin-bottom: 0px;
        }
        .socials {
            margin-left: 65px!important;
        }
        p.auth-button.sections_footer_down{
            margin-bottom:0px;
        }
        marquee {
            font-size: .5rem;
        }
        .social-botton {
            width: 20%;
        }
        .button1 {
            margin-left: 86px;
        }
        #table_scroll {
        width: 60%;
        margin-top: 100px;
        margin-bottom: 100px;
        }
        }
        @media (max-width: 359px) {
            .main-container {
            display:none;
        }
        }

        body {
            background: #0051ad;
        }
        /* Automatically scrolling table CSS */
        #contain {
        height: 100px;  
        overflow-y: scroll;  
        }
        #table_scroll {
        width: 100%;
        margin-top: 100px;
        margin-bottom: 100px;
        }
        #table_scroll tbody td {
        padding: 10px;
        /* background-color: #7fe55e; */
        color: #fff;
        }
        #table_fixed thead th {
        padding: 10px;
        /* background-color: #b90be0; */
        color: #fff;
        font-weight: 100;
        }
        #contain::-webkit-scrollbar { width: 0 !important }
        #table_scroll::-webkit-scrollbar { width: 0 !important }
</style>
@endsection
@section('content')

<!-- <div class="loading-container">
    <div class="spin-container">
        <img src="{{asset('html/images/try.png')}}" class="spin-bg-image"
            style="     left: 10px;   width: 100%;top:-50px" alt="" />
        <img src="{{asset('html/images/turn_bg_spin.png')}}" class="spin-bg-image" alt="" />
        <img src="{{asset('html/images/turning_spin.png')}}" class="spin-turnning-image"
            alt="" />
        <img src="{{asset('html/images/spin_pin.png')}}" class="spin-pin-image" alt="" />
        <img src="{{asset('html/images/spin-content.png')}}" class="spin-bg-image"
            style="top:270px;    left: 37px;    width: 70%;" alt="" />
    </div>
</div> -->





<div class="main-container">
    <img src="{{asset('html/images/background.png')}}" class="left_blank_img bgim-l" alt="" />
    <img src="{{asset('html/images/left_certain.png')}}" class="left_blank_img cat-l" alt="" />
    
    <div class="left_blank_img bgim-l mobile_tag">
    <div class="row m-help" >
            <a href="{{route('contact')}}" class="m__how" ><button type="submit" class="auth-button m-how" style="width:100%">Help</button></a>
    </div>
        <div class="col-md-4">
               <div class="row how__faq">

                        <a href="{{route('how_play')}}" class="m__how" ><button type="submit" class="auth-button m-how" style="width:100%">How to play</button></a>
                        <a href="{{route('faq')}}" class="m__faq" ><button type="submit" class="auth-button m-faq" style="width:100%">f.a.q</button></a>
               </div>
            </dvi>
        </div>
        <div class="col-md-4" style="text-align: center;"> 
        <img src="{{asset('/html/images/logo_d.png')}}" class="mobile-logo" alt="First slide">
        </div>
        <div class="col-md-4">
            <div class="row log__sign">
                            <a href="{{route('login')}}" class="m__log"><button type="submit" class="auth-button m-log" style="width:100%">LOGIN</button></a>
                            <a href="{{route('register')}}" class="m__sign"><button type="submit" class="auth-button m-sign" style="width:100%">SIGN UP</button></a>
            </div>     
        </div>
    </div>
    <div class="container background-spin-img-container" style="position: relative;    height: 100vh;">
        <!-- <div class="sound-icon-container">
            <a href="#" onclick="bgm_on(false)" style="display: inline-block;cursor: pointer;">
                <img src="{{asset('html/images/sound_icon.png')}}" class="sound__icon" alt="" />
            </a>
        </div> -->
        <div class="row certain-container remove-before" style="height: 100%;">
            <div class="col-md-12 auth-container background-spin-container" style="padding-top:0px;height: 100%;-webkit-overflow-scrolling:touch;">
                <div class="row users" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                <a href="{{route('login')}}" ><button type="submit" class="auth-button login" style="width:100%">LOGIN</button></a>
                                </div>
                                <div class="col-md-6">
                                <a href="{{route('register')}}" ><button type="submit" class="auth-button signup" style="width:100%">SIGN UP</button></a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row navbar-container nav-bar" style="position: unset;margin-right: 0;margin-left: 0;">
                        <div class="col-md-2"></div>
                        <div class="col-md-3" style="padding-left: 0;padding-right: 0;">
                            <div class="row">
                            <div class="col-md-7"><a href="{{route('how_play')}}" ><button type="submit" class="auth-button login" style="width:100%">How to play</button></a></div>
                            <div class="col-md-5"><a href="{{route('faq')}}" ><button type="submit" class="auth-button login" style="width:100%">f.a.q</button></a></div>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: center; margin: auto;">
                            
                                    <img src="{{asset('/html/images/logo_d.png')}}" class="web-logo" style="position: absolute;" alt="First slide">
                              
                         </div>
                        <div class="col-md-3">
                                <div class="row">
                              <div class="col-md-2"> </div>
                                <div class="col-md-9"><a href="{{route('contact')}}" ><button type="submit" class="auth-button login" style="width:100%">help</button></a></div>
                                 <div class="col-md-1"></div>
                                </div>
                        </div>
                        <div class="col-md-2"></div>
                </div>
                
                <div class="title-img-container" style="background-color: unset;">
                    <marquee style="color: #feec8c; background-color: #3374bd;padding: 2px;" scrollamount="2">{{$scroll_text}}</marquee>
                </div>
                <div class="logo-img-container">
                    <span class="spin">

                    </span>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 slide-img">
                        <div class="row img_left" >
                             <p class="auth-button signup m-img-left slide-section d-md-block" style="text-align: center;" >UP FOR GRABS TODAY</p>
                        </div>
                        

                        <!-- Image Carousel -->

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                             @foreach($imgs_array as $key=>$img_url)
                                @if($key == 0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100 scrolling_img " src="{{url('/uploads/scroll_images/'.basename($imgs_array[$key]))}}" alt="First slide">
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="d-block w-100 scrolling_img " src="{{url('/uploads/scroll_images/'.basename($imgs_array[$key]))}}" alt="Next slide">
                                </div>
                                @endif
                             @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-4 sec-img">
                        <!-- <img src="{{asset('html/images/module2.png')}}" class="img-section d-md-block" alt="" /> -->

                        <div class="row img-right">
                            <P  class="auth-button signup m-img-right img-section d-md-block" style="text-align: center;" >PLAY FOR AS LITTLE AS 200₦</P>
                        </div>
                             @foreach($staticImgs_array as $key=>$staticImg_url)
                                <img class="w3-animate-left static_img secimg" src="{{url('/uploads/static_image/'.basename($staticImgs_array[$key]))}}">
                            @endforeach
                        
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row table_row" >
                    <div class="col-md-2"></div>
                    <div class="col-md-4 table-d">
                        <table border="0" id="table_fixed">
                            <thead>
                            <tr>      
                                <th>THIS WEEK'S WINNERS</th>
                            </tr>
                            </thead>
                        </table>
                        <div id="contain">  
                            <table border="0" id="table_scroll" class="col-md-12 scrol-table">
                                <tbody>
                                    @if(isset($winners))
                                        @foreach($winners as $winner)
                                        <tr>
                                            <td>{{$winner->email}}, {{$winner->firstname}}{{$winner->lastname}}</td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <style>
                    .sections_footer{
                        background: none;
                        box-shadow: none;
                        color: #f9de80;
                                        }
                    .sections_footer_down{
                        background: none;
                        box-shadow: none;
                        color: #f9de80;
                                        }
                                        .sections_footer_down:hover{
                                            box-shadow: none;
                        color: #f9de80;
                                        }
                    .sections_footer:hover{
                        box-shadow: 0 5px 9px 0px rgba(0, 0, 0, 0.3);
                        color: #f9de80;
                    }
                    .demo-play{
                        width:60%;
                        font-size: 1.6rem;
                    }
                    @media (max-width: 767px) {
                        .demo-play {
                            width: 40%;
                            font-size: 1rem;
                        }
                        #table_scroll {
                        width: 60%;
                        margin-top: 100px;
                        margin-bottom: 100px;
                        }
                    }
                    </style>
                    
                    <div class="col-md-4 " style="    margin: auto;text-align: center;">
                    <div class="row" style="margin-bottom: 7px;">
                    <div class="col-md-12">
                    <a data-toggle="modal" data-backdrop="static" data-target="#exampleModalCenter"><button type="button" class="auth-button demo-play" id="play_demo" style="">play demo</button></a>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <a href="{{route('buytokenview')}}"><button type="submit" class="auth-button demo-play" style="">buy token</button></a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row social-icon" style="margin-right: 0;margin-left: 0;text-align: center;">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/">
                                    <img src="{{asset('images/instagram.png')}}" style="width: 55%;" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="http://www.twitter.com/">
                                    <img src="{{asset('images/twitter.png')}}" style="width: 55%;" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="http://www.facebook.com/">
                                    <img src="{{asset('images/fb.png')}}" style="width: 55%;" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row footer-row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="row footer-info" style="text-align: center;">
                                            <div class="col-md-5 footer-content">
                                            <p class="auth-button sections_footer_down" style="width:100%">PAYMENTS MADE WITHIN 24 HOURS</p>
                                            </div>
                                            <div class="col-md-1 flag">
                                            <p class="auth-button sections_footer_down" style="width:100%">|</p>
                                            </div>
                                            <div class="col-md-2 footer-content2">
                                            <p class="auth-button sections_footer_down" style="width:100%">100% SECURE</p>
                                            </div>
                                            <div class="col-md-1 flag flag_last">
                                            <p class="auth-button sections_footer_down" style="width:100%">|</p>
                                            </div>
                                            <div class="col-md-3 footer-content1">
                                            <p class="auth-button sections_footer_down" style="width:100%">Buy Token</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Modal -->
        <style>
        .modal-dialog{
            margin: auto;
           
                }
                .row.certain-container {
            background: none;
            }
            .modal-content{
                background: none;
                border: none;
            }
        </style>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " style="top: 50%;left: 50%;transform: translate(-50%, -50%);position: absolute;width: 107%;" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="display:none;">
                        <h5 class="modal-title" id="exampleModalLongTitle">Spin Game Demo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <audio id="audio_bgm" loop>
                            <source src="{{asset('music/bgm.mpeg')}}">
                            <source src="{{asset('music/bgm.mp3')}}">
                        </audio> -->
                        
                        <div class="main-container home-screen" style="min-height: unset;">
                            <div class="container" style="position: relative;">


                                <style>
                                .certain-container::before {
                                    background-image: none
                                }
                                </style>
                                <script>
                                var prize_spinremain_count = 5;
                                $(document).ready(function() {

                                    $('#spiner').click(spinwheel);
                                    $('.spin-pin-image').click(spinwheel);
                                    spin = document.getElementById("spin-turnning-image");
                                });

                                function showresult(prize) {
                                    switch (eval(prize)) {
                                        case 0:
                                            document.getElementById("audio_not_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won FREE SPIN!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 1:
                                            document.getElementById("audio_xxx").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 2:
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won money!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });

                                            document.getElementById("audio_not_jackpot").play();
                                            break;
                                        case 3:
                                            document.getElementById("audio_not_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won FREE TOKEN!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 4:
                                            document.getElementById("audio_not_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won ₦500 AIR TIME!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });

                                            break;
                                        case 5:
                                            document.getElementById("audio_xxx").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 6:
                                            document.getElementById("audio_not_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won FREE SPIN!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 7:
                                            document.getElementById("audio_not_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won Mystery_prize!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });

                                            break;
                                        case 8:
                                            document.getElementById("audio_xxx").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Click the wheel to spin again",
                                                "type": "success"
                                            });
                                            break;
                                        case 9:
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won 1/2 TOKEN!<br>Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 10:
                                            document.getElementById("audio_xxx").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Click the wheel to spin again.",
                                                "type": "success"
                                            });
                                            break;
                                        case 11:
                                            document.getElementById("audio_jackpot").play();
                                            swal({
                                                position: 'top-center',
                                                showConfirmButton: false,
                                                timer: 4000,
                                                "title": "Congratulations you won JACKPOT!",
                                                "type": "success"
                                            });

                                            break;
                                    }


                                }
                                var isspin = false;

                                function spinwheel(event) {
                                    if (isspin) {
                                        spin_stop();
                                        isspin = false;
                                    } else {
                                        // $("#spiner").css("display", "none");
                                        $("#spinboard").css("display", "block");

                                        animation_spin();
                                        isspin = true;
                                    }
                                }

                                var spin;

                                var stopat;
                                var stopatangle = 0;
                                var i = 0; //  set your counter to 1
                                //TODO remove nunecessary
                                function animation_spin() {
                                    i = i + 1;
                                    sessionStorage.setItem("count", i);
                                    $(".spin-pin-image").unbind("click");
                                    $("#spiner").unbind("click");

                                    if (i > 3) {
                                        swal({
                                            position: 'top-center',
                                            showConfirmButton: false,
                                            timer: 1500,
                                            "title": "GAME OVER. sign up to play for real now!",
                                            "type": "error"
                                        });
                                        setTimeout(function() {
                                            location.href = '{{route('welcome')}}'
                                        }, 3000);
                                        $(".spin-pin-image").click(spinwheel);
                                        $("#spiner").click(spinwheel);
                                        return;
                                    } 
                                    //spin.style.transform = 'rotate(0deg)';
                                    stopat = Math.floor(Math.random() * 10);
                                    stopatangle = (stopat) * 30 + 3260;
                                    setTimeout(function() {
                                        spin.style.webkitTransform = 'rotate(' + stopatangle + 'deg)';
                                        document.getElementById("audio_bgm").pause();
                                        document.getElementById("audio_wheel_spining").play();
                                    }, 400);
                                    setTimeout(function() {
                                        showresult(stopat);
                                        if (getCookie("bgm_on") == 1) {
                                            document.getElementById("audio_bgm").play();
                                        }

                                        $(".spin-pin-image").click(spinwheel);
                                        $("#spiner").click(spinwheel);

                                    }, 16500)


                                    //myLoop();


                                }

                                function spin_stop() {
                                    $("#spinboard").css("display", "none");
                                    $("#spiner").css("display", "");
                                    //document.getElementById("audio_bgm").play();
                                    spin.style.transform = 'rotate(0deg)';
                                }
                                </script>
                                <style>
                                .style-title-container {
                                    margin-top: -70px;
                                }

                                @media (max-width: 767px) {
                                    .style-title-container {
                                        margin-top: -30px;
                                    }
                                }

                                #spinboard {
                                    width: 30%;
                                    margin: 0 auto;
                                    /* position: relative; */
                                }

                                @media(max-width: 991px) {
                                    #spinboard {
                                        width: 60%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                }

                                @media(max-width: 767px) {
                                    #spinboard {
                                        width: 75%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                }

                                #spinboard>img.spin-bg-image {
                                    position: absolute;
                                    width: 100%;
                                    top: 0;
                                    left: 0;
                                    z-index: 1;
                                }

                                #spinboard>img.spin-turnning-image {
                                    position: absolute;
                                    width: 100%;
                                    top: 0;
                                    left: 0;
                                    z-index: 2;
                                    -webkit-transition: -webkit-transform 15s ease-out;
                                    /*-webkit-animation: rotating 1s linear infinite;
                                                -moz-animation: rotating 1s linear infinite;
                                                -ms-animation: rotating 1s linear infinite;
                                                -o-animation: rotating 1s linear infinite;
                                                animation: rotating 1s linear infinite;*/
                                }

                                #spinboard>img.spin-pin-image {
                                    position: absolute;
                                    cursor: pointer;
                                    width: 100%;
                                    top: 0;
                                    left: 0;
                                    z-index: 3;
                                }

                                .logo-container:first-child {
                                    margin-top: 140px;
                                    font-size: 18pt;
                                    color: #fff;
                                }

                                @media(max-width: 767px) {
                                    .logo-container:first-child {
                                        margin-top: 80px;
                                        font-size: 16pt;
                                        color: #fff;
                                    }
                                }

                                .spin_message {
                                    width: 50%
                                }

                                @media(max-width: 767px) {
                                    .spin_message {
                                        width: 70%
                                    }
                                }
                                </style>
                                <audio id="audio_jackpot">
                                    <source src="/music/jackpot.mpeg">
                                    <source src="/music/jackpot.mp3">
                                </audio>
                                <audio id="audio_not_jackpot">
                                    <source src="/music/not_jackpot.mpeg">
                                    <source src="/music/not_jackpot.mp3">
                                </audio>
                                <audio id="audio_wheel_spining">
                                    <source src="/music/wheel_spining.mpeg">
                                    <source src="/music/wheel_spining.mp3">
                                </audio>
                                <audio id="audio_xxx">
                                    <source src="/music/xxx.mpeg">
                                    <source src="/music/xxx.mp3">
                                </audio>
                                <div class="row certain-container" style="height:unset;">
                                    <div class="home_container">
                                        <div class="circle-img-container" style="    text-align: center;">
                                            <div id="spinboard" class="spin-container" style="display:none;width: 100%;margin: 0px auto;position: absolute;margin-left: 0px;">
                                                <img src="/images/turn_bg_spin_room.png" class="spin-bg-image" alt="">
                                                <img src="/images/turning_spin.png" id="spin-turnning-image"
                                                    class="spin-turnning-image" alt="">
                                                <img src="/images/spin_pin.png" class="spin-pin-image" alt="">
                                            </div>
                                            <img id="spiner" src="{{asset('images/spin_circle.png')}}"
                                                style="cursor:pointer; width:100%">
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <script src="{{asset('js/global.js')}}" charset="utf-8"></script>
                        <script type="text/javascript">
                        window.onload = function() {
                            setTimeout(function() {
                                $('.loading-container').fadeOut('slow');
                            }, 500);
                        }
                        </script>

                    </div>
                    <div class="modal-footer" style="padding-right: 30px;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('html/images/right_certain.png')}}" class="right_blank_img cat-r" alt="" />

    <img src="{{asset('html/images/background.png')}}" class="right_blank_img bgim-r" alt="" />

</div>

<script>
    $(document).ready(function() {
        
        pageScroll();
        $("#contain").mouseover(function() {
            clearTimeout(my_time);
        }).mouseout(function() {
            pageScroll();
        });
        
        getWidthHeader('table_fixed','table_scroll');
        
        $('#play_demo').click(function(e){
            var demoCount = sessionStorage.getItem("count");
            if(demoCount > 3){
                e.stopPropagation();
                swal({
                    position: 'top-center',
                    showConfirmButton: false,
                    timer: 4000,
                    "title": "GAME OVER. sign up to play for real now!",
                    "type": "error"
                });
            }
           
        });
    });

    var my_time;
    function pageScroll() {
        var objDiv = document.getElementById("contain");
    objDiv.scrollTop = objDiv.scrollTop + 1;  
    if ((objDiv.scrollTop + 100) == objDiv.scrollHeight) {
        objDiv.scrollTop = 0;
    }
    my_time = setTimeout('pageScroll()', 25);
    }

    function getWidthHeader(id_header, id_scroll) {
        var colCount = 0;
        $('#' + id_scroll + ' tr:nth-child(1) td').each(function () {
            if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
            } else {
            colCount++;
            }
        });
        
        for(var i = 1; i <= colCount; i++) {
            var th_width = $('#' + id_scroll + ' > tbody > tr:first-child > td:nth-child(' + i + ')').width();
            $('#' + id_header + ' > thead th:nth-child(' + i + ')').css('width',th_width + 'px');
        }
    }
    
</script>
@endsection