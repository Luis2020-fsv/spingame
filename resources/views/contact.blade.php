<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contact Us | Spin Game</title>
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
<link rel="stylesheet" href="{{asset('html/font/style.css')}}" type="text/css" charset="utf-8" />
        <style media="screen">
		    body {
                font-family: 'Lemon/Milk Bold';
            }
			.input-container label {
				color: #feec8c;
				font-size: 17px;
			}
			::placeholder {
			color: red;
			opacity: 1; /* Firefox */
			font-size:14px;
			}

            @media only screen
            and (device-width : 375px)
            and (device-height : 812px)
            and (-webkit-device-pixel-ratio : 3) {
                .home_container > .circle-img-container {
                    margin-top: 75px;
                }
            }
			@media (max-width: 360px){
				.input-container textarea {
					font-size: 11px!important;
				}
				.input-container input {
					font-size: 11px;
				}
				.certain-container {
					height: unset;}
					body{
						height: unset;
					}
					.main-container {
						min-height: unset;
			            }
		     }
        </style>
        <script src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>
        <script src="{{asset('plugins/swal/sweetalert2.min.js')}}" charset="utf-8"></script>

        <script src="{{asset('js/sidebar.js')}}" charset="utf-8"></script>
        <style>
		
        	.input-container input {
			    border: 2px solid #fff;
        	}
			.form-group {
			    margin-bottom: 1rem;
			}
			.hamburger-btn-container {
				position: absolute;
				width: 30px;
				height: 24px;
				top: 13px;}
			.input-container textarea {
			    width: 350px;
			    max-width: 100%;
			    background: transparent;
			    border-radius: unset;
			    border: 2px solid #fff;
			    color: #fff;
			    font-size: 17px;
			    padding-top: 10px;
			    padding-bottom: 10px;
			}

			.input-container textarea:hover {
			    background: transparent;
			    outline: none;
			    color: #fff;
			}
			.input-container textarea:focus {
			    border-color: #fff;
			    outline: none;
			    box-shadow: unset;
			    background: transparent;
			    color: #fff;
			}
			.input-container textarea::placeholder {
			    color: #dfdfdf;
			}
			.login-container {
				z-index: 1;
			}
			.social-icon {
			    margin-top: 20px;
			    position: absolute;
				bottom: 20px;
				left: auto;
				right: auto;
				left: 0;
				right: 0;
			}
			.social-icon div {
			    text-align: center;
			}
			.social-icon img {
			    width: 100%;
			}
			
			@media screen and (max-width: 770px) {
				.login-container {
				    padding-top: 20px;
				}
				.social-icon {
					position: relative;
					/* margin-top: 12rem; */
				}
				.login-container > form {
				    margin-top: 0px;
				}
				.social-icon img {
				    width: auto;
				    height: 90px;
				}
				.button-container {
				    padding-top: 0px;
				    padding-bottom: 20px;
				}
			}
			@media screen and (max-width: 770px) and (min-width: 768px) {
				.social-icon {
					position: relative;
					margin-top: 7rem;
				}
			}
			#sidebar_click_btn{
				top: 12px;
			}
			.certain-container {
                    overflow: auto;
                }
                .row.certain-container::-webkit-scrollbar {
                    display: none;
                }
			.input-container .form-control{
				font-family: arial;
			}
		</style>
    </head>
    <body>
        <!-- <audio id="audio_bgm" loop>
            <source src="{{asset('music/bgm.mpeg')}}">
        </audio> -->
        <div class="main-container home-screen">
            <div class="container background-spin-img-container" style="position: relative;">
                <div class="row navbar-container" style="border: 6px dotted #feec8c;">
                    <span class="username_nav">Contact Us</span>
                    <span class="choosegame_nav">Choose your game</span>
					@if(isset(Auth::user()->id))
                    <div class="hamburger-btn-container" id="sidebar_click_btn">
                        <img src="{{asset('images/hamburger_btn.png')}}" class="open_btn" alt="">
                        <img src="{{asset('images/hamburger_close_btn.png')}}" class="close_btn" alt="">
                    </div>    
					@else
						<div class="hamburger-btn-container"> 
							<a href="{{route('welcome')}}">
								<img src="{{asset('images/hamburger_close_btn.png')}}" class="close_btn" style="width:100%" alt="">
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
                            <li > <a style="text-transform: none" href="{{route('faq')}}">FAQ's</a> </li>
							<li > <a style="text-transform: none" href="{{route('how_play')}}">how to play</a> </li>
							<li> <a href="{{url('invite')}}">Invite Friends</a> </li>
							<li> <a href="{{route('contact')}}">Contact Us</a> </li>
							<li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <style>
                    .certain-container::before{
                        background-image:none
                    }
                    .circle-img-container > img {
                        width:40%;
                    }
                    @media (max-width: 767px){
                        .circle-img-container > img {
                            width: 100%;
						}
						.sound-icon-container {
							width: 30px;
							height: 30px;
							top: 50px;
							right: 25px;}
							.hamburger-btn-container {
							position: absolute;
							width: 30px;
							height: 24px;
							top: 8px;
						}
                    }
					.m-sound{
						display:none;
					}
					@media (max-width: 770px){
						.login-container{padding-top: 110px;}
					}
					@media (max-width: 360px){
						.hamburger-btn-container {
							position: absolute;
							width: 30px;
							height: 24px;
							top: 7px;
						}
						.hidden_tag{
							display:none;
						}
						.w-sound{
						display:none;
					}
					.m-sound{
						display:block;
					}
						.login-container{padding-top: 20px;}
						.hamburger-btn-container {
							position: absolute;
							width: 20px;
							height: 20px;
							top: 12px;
						}
					}
                </style>
                

				    <div class="row certain-container">
				    	<!-- 
				        <img src="{{asset('images/left_certain.png')}}" class="left_blank_img" alt="">
				        <img src="{{asset('images/right_certain.png')}}" class="right_blank_img" alt=""> -->
				        	<!-- <div class="sound-icon-container w-sound" >
				            		<a href="#" onclick="bgm_on(0)" style="display: inline-block;cursor: pointer;"><img src="{{asset('images/sound_icon.png')}}" alt=""></a>
						        </div> -->


				        <div class="col-md-12 login-container background-spin-container">
						<h1 class="" style="height:40px"></h1>
							<!-- <div class="sound-icon-container m-sound" >
				            		<a href="#" onclick="bgm_on(0)" style="display: inline-block;cursor: pointer;"><img src="{{asset('images/sound_icon.png')}}" alt=""></a>
						        </div> -->

							@if(Session::has('success'))
							   <div class="alert alert-success">
							     {{ Session::get('success') }}
							   </div>
							@endif
							@if(Session::has('error'))
							   <div class="alert alert-danger">
							     {{ Session::get('error') }}
							   </div>
							@endif
							<form method="post" action="/contact-us">

							<div class="input-container form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							<label>Name:</label>
							<input type='name' name='name' class='form-control' placeholder='Enter Name' />
							<span class="text-danger">{{ $errors->first('name') }}</span>
							</div>

							<div class="input-container form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label>Email:</label>
							<input name='email' type='email' class='form-control' placeholder='Enter Email' />
							<span class="text-danger">{{ $errors->first('email') }}</span>
							</div>

							<div class="input-container form-group {{ $errors->has('message') ? 'has-error' : '' }}">
							<label>Message:</label>
							<textarea name='message' class='form-control' placeholder="Enter Message"></textarea>
							<span class="text-danger">{{ $errors->first('message') }}</span>
							</div>

							<div class="button-container">
							<button class="auth-button">send</button>
							</div>
							{{csrf_field()}}
							</form>
							
							<div class="row social-icon" style="margin-right: 0;margin-left: 0;">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="https://www.instagram.com/">
										<img src="{{asset('images/instagram.png')}}" alt="">
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="http://www.twitter.com/">
										<img src="{{asset('images/twitter.png')}}" alt="">
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="http://www.facebook.com/">
										<img src="{{asset('images/fb.png')}}" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
			


            </div>
        </div>
        <!-- <div class="loading-container" style="background: linear-gradient(#7b000d, #db0018, #7b000d)">
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
    </body>
</html>