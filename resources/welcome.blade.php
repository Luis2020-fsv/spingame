@extends('layouts.authMaster')
@section('page_title') Welcome @endsection
@section('page_style')
  <style>
        .login,
        .signup {
            font-size: 18px;
            margin-right: 10px;
            margin-top: 4px;
        }
        @media (max-width: 360px) and (max-height: 640px) {
            .login,
            .signup {
                font-size: 6px!important;
                margin-right: 5px!important;
                margin-top: 2px!important;
            }
        }
        @media (max-width: 767px) {.login, .signup {
            font-size: 9px;
            margin-right: 10px;
            margin-top: 4px;
        }}
    </style>
@endsection
@section('content')

        <div class="main-container">
            <div class="container background-spin-img-container" style="position: relative;">
                <div class="row navbar-container nav-bar">
                    <div class="header-botton">
                        <img src="{{asset('html/images/module5.png')}}" class="how_to" alt="" />
                        <a href="{{route('faq')}}" >
                            <img src="{{asset('html/images/faq.png')}}" class="faq" alt="" />
                        </a>
                        
                        <a href="{{route('login')}}" ><button type="submit" class="auth-button login">LOGIN</button></a>

                        <a href="{{route('register')}}" ><button type="submit" class="auth-button signup">SIGN UP</button></a>
                    </div>

                    <!--<span>THRIFT GIFT</span>-->
                </div>
                <div class="row certain-container remove-before">
                    <div class="header-help">
                        <!-- <p class="auth-button">LOG IN</p> -->
                        <img src="{{asset('html/images/module6.png')}}" class="help-img d-md-block" alt="" />
                    </div>
                    <img src="{{asset('html/images/left_certain.png')}}" class="left_blank_img" alt="" />
                    <img src="{{asset('html/images/right_certain.png')}}" class="right_blank_img" alt="" />
                    <div class="sound-icon-container">
                        <a href="#" onclick="bgm_on(false)" style="display: inline-block;cursor: pointer;">
                            <img src="{{asset('html/images/sound_icon.png')}}" alt="" />
                        </a>
                    </div>
                    <div
                        class="col-md-12 auth-container background-spin-container"
                        style="-webkit-overflow-scrolling:touch;"
                    >
                        <div class="title-img-container">
                            <marquee style="color:white">Please Play a Game!</marquee>
                        </div>
                        <div class="logo-img-container">
                            <span class="spin">
                                SPIN THE WHELL TO TRY YOUR COUSE
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 slide-img">
                                <img src="{{asset('html/images/module1.png')}}" class="slide-section d-md-block" alt="" />
                                <img class="mySlides w3-animate-left" src="{{asset('html/images/img_rr_01.jpg')}}" />
                                <img class="mySlides w3-animate-left" src="{{asset('html/images/img_rr_03.jpg')}}" />
                                <img class="mySlides w3-animate-left" src="{{asset('html/images/img_rr_04.jpg')}}" />
                                <script>
                                    var myIndex = 0;
                                    carousel();

                                    function carousel() {
                                        var i;
                                        var x = document.getElementsByClassName("mySlides");
                                        for (i = 0; i < x.length; i++) {
                                            x[i].style.display = "none";
                                        }
                                        myIndex++;
                                        if (myIndex > x.length) {
                                            myIndex = 1;
                                        }
                                        x[myIndex - 1].style.display = "block";
                                        setTimeout(carousel, 2000); // Change image every 2 seconds
                                    }
                                </script>
                            </div>
                            <div class="col-md-4 sec-img">
                                <img src="{{asset('html/images/module2.png')}}" class="img-section d-md-block" alt="" />
                                <img class=" w3-animate-left secimg" src="{{asset('html/images/img_rr_01.jpg')}}" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3 table-d">
                            
                                <table>
                                    <tr>
                                        <th>THIS WEEK WINNERS</th>
                                    </tr>
                                    @if(isset($winners))
                                        @foreach($winners as $winner)
                                            <tr>
                                                <td>{{$winner->email}}, {{$winner->lastname }}</td>
                                            </tr>    
                                        @endforeach                                    
                                    @endif
                                </table>
                            </div>

                            <div class="col-md-7 footer-grup">
                                <div class="row footer-div">
                                    <div class="col-md-4 fooerspin1">
                                        <img src="{{asset('html/images/module11.png')}}" class="spin-m d-md-block" alt="" />
                                    </div>
                                    <div class="col-md-1 fooerspin2"></div>
                                    <div class="col-md-5 spin-right fooerspin3">
                                        <div class="row section-footer">
                                            <img
                                                src="{{asset('html/images/module15.png')}}"
                                                class=" d-md-block footer-signup"
                                                alt=""
                                            />
                                        </div>

                                        <div class="row buy-token">
                                            <img src="{{asset('html/images/module16.png')}}" class=" d-md-block " alt="" />
                                        </div>
                                        <div class="row footer-spin">
                                            <img src="{{asset('html/images/module17.png')}}" class=" d-md-block " alt="" />
                                        </div>
                                        <div class="row play-demo">
                                            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="{{asset('html/images/module9.png')}}" class=" d-md-block " alt="" /></a>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="col-md-2 fooerspin4"></div>
                                </div>

                                <div class="row socialicon">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4 socials">
                                        <div class="row">
                                            <div class="col-md-4 social-botton button1">
                                                <img src="{{asset('html/images/module12.png')}}" class=" d-md-block" alt="" />
                                            </div>
                                            <div class="col-md-4 social-botton button2">
                                                <img src="{{asset('html/images/module14.png')}}" class=" d-md-block" alt="" />
                                            </div>
                                            <div class="col-md-4 social-botton button3">
                                                <img src="{{asset('html/images/module13.png')}}" class=" d-md-block" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row footer-row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="row footer-info">
                                            <div class="col-md-5 footer-content">
                                                <img src="{{asset('html/images/module20.png')}}" alt="" />
                                            </div>
                                            <div class="col-md-1 flag">
                                                <img src="{{asset('html/images/module19.png')}}" alt="" />
                                            </div>
                                            <div class="col-md-2 footer-content2">
                                                <img
                                                    src="{{asset('html/images/module21.png')}}"
                                                    class="footer-content-img2"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="col-md-1 flag flag_last">
                                                <img src="{{asset('html/images/module19.png')}}" alt="" />
                                            </div>
                                            <div class="col-md-3 footer-content1">
                                                <img src="{{asset('html/images/module18.png')}}" alt="" />
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
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
                                <div><span style="color:#007bff;font-size: 2.5rem; ">Press the wheel to spin!</span></div>
                                <div class="main-container home-screen">
                                    <div class="container" style="position: relative;">
                                      
                                      
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
                                                    $("#spiner").css("display", "none");
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
                                        <div class="row certain-container" >
                                            <!--<img src="{{asset('images/left_certain.png')}}" class="left_blank_img" alt="">
                                            <img src="{{asset('images/right_certain.png')}}" class="right_blank_img" alt="">-->
                                            <div class="sound-icon-container" style="top: 0rem; left: 24rem;">
                                                <a href="#" onclick="bgm_on(1)" style="display: inline-block;cursor: pointer;"><img src="{{asset('images/sound_icon.png')}}" alt=""></a>
                                            </div>
                                            <!--<div class="col-md-12 style-title-container">
                                                <img src="/images/jackpotprize.png" alt="">
                                            </div>-->

                                            <div class="home_container">
                                                
                                                
                                                <div class="circle-img-container">
                                                    <img id="spiner" src="{{asset('images/spin_circle.png')}}" style="cursor:pointer; width:100%">
                                                    <div id="spinboard" class="spin-container" style="display:none">
                                                        <img src="/images/turn_bg_spin_room.png" class="spin-bg-image" alt="">
                                                        <img src="/images/turning_spin.png" id="spin-turnning-image" class="spin-turnning-image"  alt="">
                                                        <img src="/images/spin_pin.png" class="spin-pin-image"  alt="">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="loading-container">
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
                                </div>


                                <script src="{{asset('js/global.js')}}" charset="utf-8"></script>
                                <script type="text/javascript">
                                    window.onload = function () {
                                        setTimeout(function () {
                                            $('.loading-container').fadeOut('slow');
                                        }, 500);
                                    }
                                </script>
                                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {});
        </script>
@endsection
