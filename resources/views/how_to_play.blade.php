<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>How To Play | Spin Game</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/swal/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('html/css/font.css')}}" />
    <link rel="stylesheet" href="{{asset('html/font/style.css')}}" type="text/css" charset="utf-8" />
    <style media="screen">
    @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
        .home_container>.circle-img-container {
            margin-top: 75px;
        }
    }
    </style>
    <script src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('plugins/swal/sweetalert2.min.js')}}" charset="utf-8"></script>

    <script src="{{asset('js/sidebar.js')}}" charset="utf-8"></script>
    <style>
    .hamburger-btn-container {
        top: 12px;
    }
    body {
         font-family: 'Lemon/Milk Bold';
    }
    @media (max-width: 360px) and (max-height: 640px) {
        
    }
    </style>
</head>

<body>
    <audio id="audio_bgm" loop>
        <source src="{{asset('music/bgm.mpeg')}}">
    </audio>
    
    <div class="main-container home-screen">
        <div class="container background-spin-img-container" style="position: relative;">
            <div class="row navbar-container" style="border: 6px dotted #feec8c;">
                <span class="username_nav">How To Play</span>
                <span class="choosegame_nav">Choose your game</span>
                @if(isset(Auth::user()->id))
                <div class="hamburger-btn-container" id="sidebar_click_btn">
                    <img src="{{asset('images/hamburger_btn.png')}}" class="open_btn" alt="">
                    <img src="{{asset('images/hamburger_close_btn.png')}}" class="close_btn" alt="">
                </div>
                @else
                <div class="hamburger-btn-container">
                    <a href="{{route('welcome')}}">
                        <img src="{{asset('images/hamburger_close_btn.png')}}" class="close_btn" style="width:100%"
                            alt="">
                    </a>
                </div>
                @endif

            </div>
            <div class="row sidebar-container" id="sidebar_container">
                <div class="overlay"></div>
                <div class="menu-container" style='-webkit-overflow-scrolling:touch;'>
                    <ul>
                        <li> <a href="{{route('dashboard')}}">dashboard</a> </li>
                        <li> <a href="{{url('game/lifestyle')}}">lifestyle</a> </li>
                        <li> <a href="{{url('game/electronics')}}">electronics</a> </li>
                        <li> <a href="{{url('game/eating')}}">eating and drinking</a> </li>
                        <li> <a href="{{route('buytokenview')}}">buy tokens</a> </li>
                        <li> <a style="text-transform: none" href="{{route('faq')}}">FAQ's</a> </li>
                        <li > <a style="text-transform: none" href="{{route('how_play')}}">how to play</a> </li>
                        <li> <a href="{{route('contact')}}">Contact Us</a> </li>
                        <li>
                            <a href="{{route('logout')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <style>
                        .certain-container::before {
                            background-image: none
                        }

                        .circle-img-container>img {
                            width: 40%;
                        }

                        /* .how_play_content {
                                padding-top: 150px;
                            } */
                           
                        .how-content{
                            margin-top:5%;
                            color: #FFF;
                            font-weight: bold;
                        }
                         .first-content{
                                margin-top:11%;
                            }
                        body {
                            height: unset;
                        }

                        .help-contents {
                            margin-top: 60px !important;
                            margin-bottom: 60px !important;
                        }

                        @media (max-width: 767px) {
                            .circle-img-container>img {
                                width: 100%;
                            }

                            .sound-icon-container {
                                top: 60px;
                            }

                            .how_play_content {
                                padding-top: 100px;
                            }

                            .help-contents {
                                margin-top: 45px !important;
                                margin-bottom: 35px !important;
                            }

                            .text-body {
                                text-align: center;
                            }

                            .button-first {
                                margin-bottom: 30px;
                            }

                            .spin-m {
                                width: 75%;
                            }

                        }

                        .m-sound {
                            display: none;
                        }

                        @media (max-width: 360px) and (max-height: 640px) {
                            .hamburger-btn-container {
                                top: 9px;
                            }

                            .col-md-6.text-body {
                                margin-top: 30px;
                            }

                            .w-sound {
                                display: none;
                            }

                            .m-sound {
                                display: block;
                            }
                            .how_play_content {
                                padding-top: 0;
                            }
                            .text-body {
                                text-align: left;
                            }
                            .how-content{
                                font-size: 10pt;
                                margin-top:5%;
                                color: #FFF;
                                font-weight: bold;
                            }
                            .footer{
                                font-size: 7pt;
                                margin-top: 2%;
                                margin-left: 0;
                            }
                        }
            </style>
            <script>
           
            </script>
           
            <div class="row certain-container" style="    height: unset;">
               
                <div class="home_container how_play_content" style='-webkit-overflow-scrolling:touch;'>
                    
                    <!-- <div class="col-md-10" style="text-align:center;margin:0 auto">
                        <p style="font-size: 16pt;margin-top:5%;color: #FFF;font-weight: bold;">How can I play Spin the
                            Wheel?</p>
                        <p style="font-size: 12pt;margin-top:2%;margin-left:5%;color: #FFF;">Get 10x more subscribers
                            with Spin the Wheel Game! <br>Everything old is new again—including this cherished
                            coming-of-age tradition.</p>
                    </div> -->

                    <div class="col-md-11 help-contents" style="margin:0 auto">
                        <div class="row">
                            
                            <div class="col-md-6 text-body">
                                <p class="how-content first-content" style="color:white;">Step 1 - Sign up and create an Awoof Spins account</p>
                               
                                <p class="how-content" style="color:white;">Step 2 - Top up your Awoof Spins wallet by buying tokens, using the BUY TOKENS tab.</p>

                                <p class="how-content" style="color:white;">Step 3 - Choose the game you wish to play from the categories.</p>
                                <p class="how-content" style="color:white;">Step 4 - Click on the Awoof Spins prize wheel to see if it’s your lucky day! (You have 3 spins per game)</p>
                                <p class="how-content" style="color:white;">Step 5 - Check your DASHBOARD to see all the prizes you have won and if they have been redeemed!</p>

                                <p class="how-content">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 button-first"><a data-toggle="modal"
                                                data-target="#exampleModalCenter"><button type="submit"
                                                    class="auth-button help-last"
                                                    style="width:100%;    font-size: 20px;">Demo Play</button></a></div>
                                        <div class="col-md-3"></div>
                                        
                                        <!-- <div class="col-md-6"><a href="{{route('contact')}}"><button type="submit"
                                                    class="auth-button help-last"
                                                    style="width:100%;    font-size: 20px;">Contact Us</button></a>
                                        </div> -->
                                    </div>



                                </p>

                            </div>
                            <div class="col-md-6" style="margin: auto;">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align:center;">
                                            <img src="{{asset('html/images/spin_circle.png')}}" class="spin-m d-md-block"
                                                style="margin: unset;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <style>
                        a:hover {
                        color: yellow;
                        }
                    </style>
                    <div class="col-md-12" style="text-align:center;">
                        <!--<div style="margin-top:10%;font-size: 18pt;color: #FBAA18;font-weight: bold; ">FAQ's</div>-->
                        <p style="font-size: 16pt;margin-top:5%;color: #FFF;font-weight: bold;">TRY YOUR LUCK NOW!</p>
                        <p class="footer" style="color:white;">For any other questions visit the <a href="{{route('faq')}}" class="m__faq" >FAQ</a> page or <a href="{{route('contact')}}" >Help</a> page.</p>
                    </div>
                </div>

            </div>

        </div>


        
        <style>
                    .modal-dialog{
                    margin: auto;
                    position: absolute;
                    top: 50%!important;
                    left: 50%!important;
                    transform: translate(-50%, -50%) !important;
                    width: 52vh;
                    }
                    .m-home-screen{
                    
                        min-height:unset;
                    }
                    .modal-container{
                        height:unset;
                    }
                    .m-spin-img-container{
                        width:100%!important;
                    }
                    .modal-container {
                        background: none;
                        }
                        .modal-content{
                            background: none;
                            border: none;
                        }
                        .m-home_container{
                            min-height:unset!important;
                            padding-top:unset!important;
                            overflow:unset!important;
                            
                        }
                        .circle-img-container>img{
                            z-index:1;
                           
                        }
                        .home_container>.circle-img-container{
                             margin-top: 0!important;
                        }
                        .modal-body {
                            padding: 0!important;
                        }
                </style>
                 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="display:none;">
                                <h5 class="modal-title" id="exampleModalLongTitle">Spin Game Demo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <audio id="audio_bgm" loop>
                                    <source src="{{asset('music/bgm.mpeg')}}">
                                    <source src="{{asset('music/bgm.mp3')}}">
                                </audio>
                                <div class="main-container m-home-screen">
                                    <div class="" style="position: relative;margin-right: 0;margin-left: 0;">
                                      
                                      
                                        <style>
                                            .certain-container::before{
                                                background-image:none
                                            }
                                        </style>
                                        <script>

                                        var prize_spinremain_count= 5;
                                            $(document).ready(function () {

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
                                                            "title": "Congratulations you won ₦500!<br>Click the wheel to spin again.",
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
                                                            "title": "Congratulations you won ₦1000 AIR TIME!<br>Click the wheel to spin again.",
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
                                                
                                                    $("#spinboard").css("display", "block");

                                                    animation_spin();
                                                    isspin = true;
                                                }
                                            }

                                            var spin;

                                            var stopat;
                                            var stopatangle = 0;
                                            var i = 0;                     //  set your counter to 1
                                            //TODO remove nunecessary
                                            function animation_spin() {
                                                i = 0;
                                                $( ".spin-pin-image").unbind( "click" );
                                                $( "#spiner").unbind( "click" );
                                        


                                                if (stopat == 'token_limited') {
                                                    swal({
                                                        position: 'top-center',
                                                        showConfirmButton: false,
                                                        timer: 1500,
                                                        "title": "You do not have enough tokens to play this game",
                                                        "type": "error"
                                                    });
                                                    setTimeout(function(){
                                                        location.href='{{route('home')}}'
                                                    },3000);
                                                    $( ".spin-pin-image").click(spinwheel);
                                                    $( "#spiner").click(spinwheel);
                                                    return;
                                                }else if (stopat == 'spin_limited') {
                                                    swal({
                                                        position: 'top-center',
                                                        showConfirmButton: false,
                                                        timer: 1500,
                                                        "title": "You do not have enough token to play this game",
                                                        "type": "error"
                                                    });
                                                    setTimeout(function(){
                                                        location.href='{{route('home')}}'
                                                    },3000);
                                                    $( ".spin-pin-image").click(spinwheel);
                                                    $( "#spiner").click(spinwheel);
                                                    return;
                                                }
                                                //spin.style.transform = 'rotate(0deg)';
                                                stopat = Math.floor(Math.random() * 10);
                                                stopatangle = (stopat) * 30 + 3260;
                                                setTimeout(function(){
                                                    spin.style.webkitTransform = 'rotate('+stopatangle+'deg)';
                                                    document.getElementById("audio_bgm").pause();
                                                    document.getElementById("audio_wheel_spining").play();
                                                },400);
                                                setTimeout(function(){
                                                    showresult(stopat);
                                                    if(getCookie("bgm_on")==1){
                                                    document.getElementById("audio_bgm").play();
                                                    }

                                                    $( ".spin-pin-image").click(spinwheel);
                                                    $( "#spiner").click(spinwheel);

                                                },16500)


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
                                            .style-title-container{
                                                margin-top: -70px;
                                            }
                                            @media (max-width: 767px) {
                                                .style-title-container{
                                                    margin-top: -30px;
                                                }
                                            }
                                            #spinboard {
                                                width: 30%;
                                                margin:0 auto;
                                                /* position: relative; */
                                            }
                                            @media(max-width: 991px) {
                                                #spinboard {
                                                    width: 60%;
                                                    margin:0 auto;
                                                    position: relative;
                                                }
                                            }
                                            @media(max-width: 767px) {
                                                #spinboard {
                                                    width: 75%;
                                                    margin:0 auto;
                                                    position: relative;
                                                }
                                            }
                                            #spinboard > img.spin-bg-image {
                                                position: absolute;
                                                width: 100%;
                                                top: 0;
                                                left: 0;
                                                z-index: 1;
                                            }

                                            #spinboard > img.spin-turnning-image {
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

                                            #spinboard > img.spin-pin-image {
                                                position: absolute;
                                                cursor:pointer;
                                                width: 100%;
                                                top: 0;
                                                left: 0;
                                                z-index: 3;
                                            }
                                            .logo-container:first-child{
                                                margin-top: 140px;
                                                font-size: 18pt;
                                                color: #fff;
                                            }
                                            @media(max-width: 767px) {
                                                .logo-container:first-child{
                                                    margin-top: 80px;
                                                    font-size: 16pt;
                                                    color: #fff;
                                                }
                                            }
                                            .spin_message{
                                                width:50%
                                            }
                                            @media(max-width: 767px) {
                                                .spin_message{
                                                    width:70%
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
                                        <div class="row certain-container modal-container" >
                                            <!--<img src="{{asset('images/left_certain.png')}}" class="left_blank_img" alt="">
                                            <img src="{{asset('images/right_certain.png')}}" class="right_blank_img" alt="">-->
                                            
                                            <!--<div class="col-md-12 style-title-container">
                                                <img src="/images/jackpotprize.png" alt="">
                                            </div>-->

                                            <div class="home_container m-home_container ">
                                                
                                                
                                                <div class="circle-img-container">
                                                    <div id="spinboard" class="spin-container m-spin-img-container" style="display:none">
                                                        <img src="/images/turn_bg_spin_room.png" class="spin-bg-image" alt="">
                                                        <img src="/images/turning_spin.png" id="spin-turnning-image" class="spin-turnning-image"  alt="">
                                                        <img src="/images/spin_pin.png" class="spin-pin-image"  alt="">
                                                    </div>
                                                        
                                                        <img id="spiner" src="{{asset('images/spin_circle.png')}}" style="cursor:pointer; width:100%">
                                                      
                                                    
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="loading-container">
                                    <div class="spin-container">
                                        <img
                                            src="{{asset('html/images/try.png')}}"
                                            class="spin-bg-image"
                                            style="     left: 10px;   width: 100%;top:-50px"
                                            alt=""
                                        />
                                        <img src="{{asset('html/images/turn_bg_spin.png')}}" class="spin-bg-image" alt="" />
                                        <img src="{{asset('html/images/turning_spin.png')}}" class="spin-turnning-image" alt="" />
                                        <img src="{{asset('html/images/spin_pin.png')}}" class="spin-pin-image" alt="" />
                                        <img
                                            src="{{asset('html/images/spin-content.png')}}"
                                            class="spin-bg-image"
                                            style="top:270px;    left: 37px;    width: 70%;"
                                            alt=""
                                        />
                                    </div>
                                </div> -->


                                <script src="{{asset('js/global.js')}}" charset="utf-8"></script>
                                <script type="text/javascript">
                                    window.onload = function () {
                                        setTimeout(function () {
                                            $('.loading-container').fadeOut('slow');
                                        }, 500);
                                    }
                                </script>
                                                
                            </div>
                            <div class="modal-footer" style="display:none;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

    </div>




    <script type="text/javascript">
    window.onload = function() {
        setTimeout(function() {
            $('.loading-container').fadeOut('slow');
        }, 500);
    }
    </script>
</body>

</html>