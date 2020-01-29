@extends('layouts.authMaster')
@section('page_title') Welcome @endsection
@section('page_style')
<link rel="stylesheet" href="{{asset('html/font/style.css')}}" type="text/css" charset="utf-8" />
<style>
/* .login,
.signup {
    font-size: 18px;
    margin-right: 10px;
    margin-top: 4px;
} */
    body {
            font-family: 'Lemon/Milk Bold';
        }
    .sound-icon-container {
        top: 45px;
    }
    .auth-button{
        min-height: 3rem;
    }
    .hamburger-btn-container{
        margin-left: -42rem;
        width: 15%;
    }
    img.right_blank_img.cat-r,img.left_blank_img.cat-l {
        height: 100vh;
    }
    .login-tag {
        font-size: 1.2rem;
        text-align: center;
        color: white;
    }
                
    .facebook {
        height: 3rem;
    }
    .bgim-l {
        position: absolute;
        width: 15%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 101;
    }

    .mobile_tag {
        display: none;
    }

    .cat-l {
        position: absolute;
        width: 200px;
        height: 100%;
        top: 0;
        left: 15%;
        z-index: 101;
    }

    .m-img-right,
    .m-img-left {
        width: 100%;
    }

    .cat-r {
        position: absolute;
        width: 200px;
        height: 100%;
        top: 0;
        right: 15%;
        z-index: 100;
    }

    .play-demo {
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

    .nav-bar {
        margin-top: 0px;
    }

    .sound__icon {
        width: 60%;
    }

    .fooerspin1 {
        margin: auto;
    }

    .img-right,
    .img_left {
        margin-right: 0px;
        margin-left: 0px;
    }

    .log__sign,
    .how__faq {
        flex-wrap: unset;
        margin-top: -2px;
        justify-content: center;
    }

    .table_row {
        margin-top: 40px;
        margin-bottom: 25px;
    }

    @media (max-width: 2000px) {
        .register-img{
            width: 60%!important;
        }
        .navbar-container {
            z-index: 99;
        }

        .auth-button {
            font-size: 23px;
        }

        .nav-bar {
            height: 50px;
        }

        .scrolling_img,
        .static_img {
            width: 426px;
            height: 282px;
        }
        .logo{
            width: 25%;
        }
        .col-md-12.register-container.background-spin-container {
            margin-bottom: 19px;
        }


    }

    .auth-container::-webkit-scrollbar {
        width: 0 !important
    }

    @media (max-width: 1800px) {
        .cat-l {
            left: 12%;
        }

        .navbar-container {
            height: 50px;
        }

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
            height: 50px;
        }
    }

    @media (max-width: 1300px) {
        .auth-button {
            font-size: 23px;
        }
        .row.tag-bottom {
            margin-top: 85px;
        }
        .navbar-container {
            height: 50px;
        }
    }

    @media (max-width: 1200px) {
        .auth-button {
            font-size: 23px;
        }

        .sound-icon-container {
            top: 36px;
            
        }

        .sections_footer_down {
            font-size: 9px;
        }

    }



    @media (max-width: 991px) {

        img.register-img{
            width: 75%!important;
        }
        .logo{
            width: 33%;
        }

    }


    @media (max-width: 768px) and (max-height: 1024px) {
        .button1 {
            margin-left: 12px;
        }
        img.register-img{
        width: 100%!important;
    }
    }

    @media (max-width: 767px) {
        .row.tag-bottom {
        margin-top: 250px;
    }
    img.register-img{
        width: 65%;
    }
    .logo{
            width: 50%;
        }
    .login-tag {
        text-align: right;
        font-size: 1rem;
        padding-right: 19px;
        color: white;
    }
    .register-container .auth-button {
        width: 60%;
        font-size: 20px;
    }

    }


    @media (max-width: 700px) {

        .mySlides,
        .secimg {
            width: 65%;
        }

        .cat-r,
        .cat-l {
            width: 150px;
        }

        .col-md-4.sec-img {
            margin-top: 20px;
        }

        .sound-icon-container {
            top: 70px;
            right: 0px;
        }
    }

    @media (max-width: 600px) {

        .mySlides,
        .secimg {
            width: 50%;
        }

        .cat-r,
        .cat-l {
            width: 150px;
        }

        .col-md-4.sec-img {
            margin-top: 20px;
        }

        .sound-icon-container {
            top: 70px;
            right: 55px;
        }

        .mySlides,
        .secimg {
            width: 65%;
        }
    }
    @media (max-width: 535px) {

    img.register-img{
        width: 90%!important;
    }
    .login-tag {
        text-align: right;
        font-size: 15px;
        padding-right: 15px;
        color: white;
    }
    .row.tag-bottom {
        margin-top: 180px!important;
    }
    .register-container {
        
        padding-top: 125px!important;
    }
    }
    @media (max-width: 510px) {

    img.register-img{
        width: 90%!important;
    }
    .register-container{
        padding-top: 70px!important;
    }
    }
    @media (max-width: 510px) {

    img.register-img{
        width: 85%!important;
    }

    }
    @media (max-width: 500px) {

        .m__how,
        .m__log {
            margin-right: 9px;
        }

        .sections_footer_down {
            font-size: 7px;
        }

        .mySlides,
        .secimg {
            width: 50%;
        }

        .cat-r,
        .cat-l {
            width: 110px;
        }

        .col-md-4.sec-img {
            margin-top: 20px;
        }

        .footer-content {
            padding-right: 5px;
            padding-left: 5px;
            width: 37%;
            margin-left: 40px;
        }

        .mySlides,
        .secimg {
            width: 61.6%;
        }
    }
    @media (max-width: 411px) {
        .facebook {
            height: 2rem;
        }
        .button-container.sign-login {
        padding-top: 0;
        }
        .button-container>p {
            margin-top: 10px;
            margin-bottom: 0px;
        }
        .login-tag {
            text-align: right;
            font-size: 12px;
            padding-right: 13px;
            color: white;
        }
    }
    @media (max-width: 400px) {
        .auth-button {
            font-size: 9px;
        }
        .facebook {
        height: 1.8rem;
        }
        .login-tag {
            text-align: right;
            font-size: 11px;
            padding-right: 8px;
            color: white;
        }
        .sections_footer_down {
            font-size: 6px;
        }

        .footer-content {
            padding-right: 5px;
            padding-left: 5px;
            width: 37%;
            margin-left: 31px;
        }
    }


    @media (max-width: 360px) and (max-height: 640px) {
        .hamburger-btn-container{
            margin-left: -1rem;
            width: 47%;
        }
        .register-container .input-container input {
            font-size: 10px;
        }
        .register-container .input-container label {
            font-size: 11px;
        }
        .register-img{
            width: 100%!important;
        }
        .button-container>p {
            margin-top: 0px;
            margin-bottom: 5px;
        }
        .register-container .auth-button {
            width: 60%;
            font-size: 17px!important;
        }
        .facebook{
            padding-top: 17px;
        }
        .sign-login{
            padding-top: 0px;
        }
        .cat-r,
        .cat-l {
            width: 90px;
        }

        body {
            width: 100%;
            height: 100%;
        }

        .modal-dialog {
            margin: auto;
            /* margin-top: 100px!important; */
            margin: auto;
            position: absolute;
            top: 50% !important;
            left: 50%;
            transform: translate(-50%, -50%) !important;
        }

        .carousel-control-prev {
            left: 75px;
        }

        .carousel-control-next {
            right: 75px;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            width: 10px;
            height: 10px;
        }

        #carouselExampleControls {
            padding-left: 83px;
            padding-right: 83px;
            width: 100%;
        }

        .static_img,
        .scrolling_img,
        .static_img {
            width: 165px;
            height: 110px;
        }

        .mobile_tag {
            top: 30px;
        }

        .m-help {
            top: 10px;
            position: fixed;
            right: 25px;
        }

        .log__sign,
        .how__faq {
            margin-top: 4px;
        }

        .sound-icon-container {
            top: 70px;
            right: 20px;
        }

        .sound-icon-container img {
            width: 30px;
        }

        .m-img-left,
        .m-img-right {
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

        table {
            margin-left: 60px;
            width: 70%;
        }

        .table_row {
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
            margin-left: 65px !important;
        }

        p.auth-button.sections_footer_down {
            margin-bottom: 0px;
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
    }

    @media (max-width: 359px) {
        .main-container {
            display: none;
        }
    }


    body {
        background: #0051ad;
    }

    .title-img-container {
        background: none;
    }
    .register-container{
        padding-bottom:0px!important;
        padding-top:50px!important;
    }
    @media (max-width: 535px) {

    img.register-img{
        width: 100%!important;
    }
    .row.tag-bottom {
        margin-top: 200px!important;
    }
    .register-container {
        
        padding-top: 125px!important;
    }
    }
    @media (max-width: 360px) and (max-height: 640px) {
        .row.tag-bottom {
        margin-top: 0px!important;
    }
    .register-container .button-container {
        padding-top: 20px;
    }
    .register-container {
        padding-top: 65px!important;
    }
    .register-container {
        min-height: 70vh;
    }
    img.register-img {
         width: 88%!important;
    }
    }
    @media (max-width: 767px){
        .navbar-container {
        height: 40px;
    }
    }
    a {
        color: #fde989;
    }
    p {
        color: white;
    }
    a:hover{
        color: white;
    }

</style>
@endsection
@section('content')
<div class="main-container">
    <img src="{{asset('html/images/background.png')}}" class="left_blank_img bgim-l" alt="" />
    <img src="{{asset('html/images/left_certain.png')}}" class="left_blank_img cat-l" alt="" />

    <div class="left_blank_img bgim-l mobile_tag">

        <div class="col-md-4">
            <div class="row how__faq">

                <a href="{{route('how_play')}}" class="m__how"><button type="submit" class="auth-button m-how"
                        style="width:100%">How to play</button></a>
                <a href="{{route('faq')}}" class="m__faq"><button type="submit" class="auth-button m-faq"
                        style="width:100%">f.a.q</button></a>
            </div>
            </dvi>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row log__sign">
                <a href="{{route('login')}}" class="m__log"><button type="submit" class="auth-button m-log"
                        style="width:100%">LOGIN</button></a>
                <a href="{{route('register')}}" class="m__sign"><button type="submit" class="auth-button m-sign"
                        style="width:100%">SIGN UP</button></a>
            </div>
        </div>
    </div>
    <div class="container background-spin-img-container" style="position: relative;    height: 100vh;">
       
        <div class="row certain-container remove-before" style="height: 100%;">
            <div class="col-md-12 auth-container background-spin-container"
                style="padding-top:0px;height: 100%;-webkit-overflow-scrolling:touch;">

                <div class="row navbar-container nav-bar" style="position: unset;margin-right: 0;margin-left: 0;">
                    <div class="hamburger-btn-container"> 
                        <a href="{{route('welcome')}}">
                            <img src="{{asset('images/hamburger_close_btn.png')}}" class="close_btn" style="width:15%" alt="">
                        </a>
                    </div>
                </div>


                <div class="col-md-12 register-container background-spin-container">
                    <div class="logo-img-container">
                        <a href="{{route('welcome')}}">
                            <img src="./html/images/logo_d.png" class="logo" alt="">
                        </a>
                    </div>
                    <form class="" action="{{route('lostpass')}}" method="post" id="lostpass_form">
                {{ csrf_field() }}
                <div class="input-container">
                    <div class="form-group">
                        <label for="email">*Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="">
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit" class="auth-button" >Reset Password</button>
                </div>
            </form>
                   

                </div>
                
                
              


            </div>

        </div>
        <!-- Modal -->


    </div>

    <img src="{{asset('html/images/right_certain.png')}}" class="right_blank_img cat-r" alt="" />

    <img src="{{asset('html/images/background.png')}}" class="right_blank_img bgim-r" alt="" />

</div>
<script>
         $(document).ready(function(){
            @if(Session::has('success_message'))
            swal({
                position: 'top-center',
                showConfirmButton: false,
                timer: 3000,
                "title": '{{ Session::get('success_message') }}',
                "type": "success"
            });
            @elseif(Session::has('fail_message'))
            swal({
                position: 'top-center',
                showConfirmButton: false,
                timer: 3000,
                "title": '{{ Session::get('fail_message') }}',
                "type": "error"
            });
            @endif
        });  
    </script>

@endsection