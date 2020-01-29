@extends('layouts.appMain')
@section('page_title') Home @endsection
@section('page_style')
<style media="screen">
            body {
                font-family: 'Lemon/Milk Bold';
            }
            .sound-icon-container {
                top: 80px;
                right: 20px;
            }
            .m-sound-icon-container{
                display:none;
            }
            @media (max-width: 767px) {
                .sound-icon-container {
                    top: 50px;
                    right: 30px;
                }
                .hamburger-btn-container {
                    top: 10px;
                    
                }
            }

            @media (max-width: 359px) {
                .sound-icon-container {
                    top: 50px;
                    right: 5px;
                }
                .navbar-container {
                    height: 50px;
                }
            }
            @media (max-width: 360px) {
                    .total-list-container {
                        width: 100%;
                        margin-top: 60px!important;}
                        .sound-icon-container img {
                        width: 38px;
                    }
                    .sound-icon-container {
                        z-index: 1;
                    }
                    .sound-icon-container {
                        top: -5px;
                        right: 15px;
                    }
                    .m-sound-icon-container{
                        display:block;
                    }
                    .w-sound-icon-container{
                        display:none;
                    }
                }
                body{
                    height:auto;
                }
            
                .row.certain-container::-webkit-scrollbar {
                    display: none;
                }

            .certain-container{overflow: auto;}
        </style>
    @endsection
    @section('content')
        <div class="main-container home-screen">
            <div class="container background-spin-img-container" style="position: relative;">
                <div class="row navbar-container" style="border: 6px dotted #feec8c;">
                    <span class="username_nav" style="text-align: center;"><img src="{{asset('html/images/'.$style)}}" class="open_btn" style="text-align: center;width: 35%;" alt="" /></span>
                    <span class="choosegame_nav">Choose your game</span>
                    <div class="hamburger-btn-container" id="sidebar_click_btn">
                        <img src="{{asset('html/images/hamburger_btn.png')}}" class="open_btn" alt="" />
                        <img src="{{asset('html/images/hamburger_close_btn.png')}}" class="close_btn" alt="" />
                    </div>
                    <!-- <div class="sound-icon-container m-sound-icon-container">
                        <a href="#" onclick="bgm_on(true)" style="display: inline-block;cursor: pointer;">
                            <img src="{{asset('html/images/sound_icon.png')}}" alt="" />
                        </a>
                    </div> -->
                </div>
                <div class="row sidebar-container" id="sidebar_container">
                    <div class="overlay"></div>
                    <div class="menu-container" style="-webkit-overflow-scrolling:touch;">
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
                    .choosejack {
                        font-size: 14pt;
                        margin-top: 15px;
                        position: absolute;
                        width: 100%;
                        color: #fbaa18;
                        font-weight: bold;
                        text-align: center;
                        overflow: hidden;
                        top: 170px;
                        left: 0;
                        z-index: 11;
                    }

                    .token-patch {
                        position: absolute;
                        width: 29%;
                        height: 30%;
                        /*margin-right:-20px;*/
                        background: url({{asset('images/token_patch.png')}});
                        background-size: cover;
                        background-position: center;
                        right: -10%;
                        top: -10%;
                        text-align: center;
                        -webkit-transform: rotate(20deg);
                        -moz-transform: rotate(20deg);
                        -o-transform: rotate(20deg);
                        -ms-transform: rotate(20deg);
                        transform: rotate(20deg);
                        padding-top: 15px;
                        color: white;
                        font-size: 17pt;
                        font-weight: bold;
                    }

                    .cooming_soon_patch {
                        position: absolute;
                        width: 100%;
                        font-family: Impact, Charcoal, sans-serif;
                        top: 24%;
                        left:3%;
                        text-align: center;
                        -webkit-transform: rotate(-40deg);
                        -moz-transform: rotate(-40deg);
                        -o-transform: rotate(-40deg);
                        -ms-transform: rotate(-40deg);
                        transform: rotate(1deg);
                        -webkit-text-fill-color: yellow;
                        /* Will override color (regardless of order) */
                        -webkit-text-stroke-width: 1px;
                        -webkit-text-stroke-color: black;
                        font-size: 11pt;
                        font-weight: bold;
                    }

                    @media (max-width: 767px) {
                        .choosejack {
                            font-size: 14pt;
                            margin-top: 15px;
                            position: absolute;
                            width: 100%;
                            color: #fbaa18;
                            text-align: center;
                            overflow: hidden;
                            top: 90px;
                            left: 0;
                            z-index: 11;
                        }
                        .how_to_play {
                            padding-right: 15px !important;
                            padding-left: 15px !important;
                        }
                    }

                    .how_to_play {
                        padding-right: 90px;
                        padding-left: 90px;
                    }

                    .total-list-container {
                        width: 100%;
                        margin-top: 95px;
                        overflow: auto;
                        -webkit-overflow-scrolling: auto;
                    }
                    @media (max-width: 360px) and (max-height: 640px) {
                        .top_lifestyle {
                            width: 100%;
                        }
                        .lifestyle_last {
                            width: 50%;
                        }
                        .how_to_play{    font-size: 20px!important;}
                        marquee {font-size: 1rem;}
                        /* .lifestyle_end{} */
                    }
                </style>
                <div class="row certain-container">
                    <!-- <div class="sound-icon-container w-sound-icon-container">
                        <a href="#" onclick="bgm_on(true)" style="display: inline-block;cursor: pointer;">
                            <img src="{{asset('html/images/sound_icon.png')}}" alt="" />
                        </a>
                    </div> -->

                
                    <div class="total-list-container">
                        <div class="col-md-10 gamelist-container" style="overflow:hidden ;margin:0 auto">
                        @foreach ($prizes as $prize)
                        <?php $prize_id = $prize['id'];?>
                            <div class="single_game_box"
                            @if($prize['remain_winners_cash'] >= 1 || $prize['remain_winners_n500']>=1 || $prize['remain_winners_mystery_prize'] >=1 || $prize['remain_winners_jackpot'] >= 1)
                            onclick="go_spinroom({{$prize_id}},{{$prize['token_count']}})" style="cursor: pointer;"
                            @endif >
                                <div class="game-title-container">
                                    <p style="color: #f9de81;font-family: serif;"> {{$prize['prize_name']}}</p>
                                    @if(!isset($user_prize_spin_counts[$prize_id]))
                                    <p style="font-size: 18px;">Remain Spin Count: 3</p>
                                    @else
                                    <p style="font-size: 18px;">Remain Spin Count: {{$user_prize_spin_counts[$prize_id]}}</p>
                                    @endif
                                </div>
                                <div class="game-img-description-container" style="background: url('{{$prize['img_url']}}');background-size: cover;background-position: center;overflow:inherit">
                                    <div class="token-patch" style="background-size: contain;background-repeat: no-repeat;">
                                        <span class="token-patch-lable">{{$prize['token_count']}}</span>
                                    </div>
                                    @if($prize['remain_winners_cash']<1 && $prize['remain_winners_n500']<1 && $prize['remain_winners_mystery_prize']<1 && $prize['remain_winners_jackpot']<1)
                                    <span class="cooming_soon_patch"></span>
                                    @endif
                                    <!-- <div class="description-container" style="color: white; font-size: 20PX ">
                                        {{$prize['description']}}
                                    </div> -->
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="col-md-8 gamelist-container" style="overflow:hidden ;margin:0 auto;">
                            @foreach ($addprizes as $key=>$addprize)
                            <div class="single_game_box countdown-box-{{$key}}">
                                
                                <div class="game-title-container">
                                    <p>{{$addprizes[$key]['prize_name']}}</p>
                                </div>
                                <div class="game-img-description-container" style="background: ;">
                                    <div class="token-patch" style="background-size: contain;background-repeat: no-repeat;">
                                        <span class="cooming_soon_patch">{{$addprizes[$key]['token_count']}}</span>
                                    </div>
                                    <div class="down-counter">
                                        <span>coming soon</span>
                                    </div>
                                        <!-- <div class="description-container" style="color: white; font-size: 20PX ">
                                            {{$addprize['description']}}
                                        </div> -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if(empty($addprizes) && empty($prizes))
                        <div class="col-md-8 gamelist-container" style="overflow:hidden ;margin:0 auto;">
                            <div class="single_game_box">
                            <div class="game-img-description-container" style="background: ;">
                                   
                                    <div class="down-counter">
                                        <span>new game coming soon</span>
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        </div>
                        
                </div>
                <script>
                  $(document).ready(function() {
                    // @foreach ($addprizes as $key=>$addprize)
                    //     $('.<?php echo $key?>-flipTimer').flipTimer({ 

                    //     // count up or countdown
                    //     direction: 'down', 
                    //     // the target <a href="https://www.jqueryscript.net/time-clock/">date</a>
                    //     date: '{{$addprizes[$key]['start_time']}}',
                      
                    //     // callback works only with direction = "down"
                    //     callback: function() { 

                    //         $('.countdown-box-{{$key}}').attr('display', 'none');
                    //         window.location.replace("{{url('/game/lifstyle')}}");
                            
                    //      }

                    //     });
                    // @endforeach
                    });
                   
                    var user_prize_spin_counts = {
                        "53": 2,
                        "51": 2,
                        "54": 3,
                        "78": 3,
                        "57": 1,
                        "85": 2,
                        "82": 0,
                        "76": 2,
                        "86": 0
                    };

                    function go_spinroom(prize_id, token_count_for_game) {
                        if (token_count_for_game > {{$user_info->token_count}}) {
                            if (user_prize_spin_counts[prize_id] > 0) {
                                location.href='{{route('wheel.spinroom')}}?prize='+prize_id;
                                return true;
                            }
                            swal({
                                position: "top-center",
                                showConfirmButton: false,
                                timer: 1500,
                                title: "You do not have enough token to play this game",
                                type: "error"
                            });
                            location.href='{{route('buytokenview')}}';
                            return false;
                        } else {
                            location.href='{{route('wheel.spinroom')}}?prize='+prize_id;
                        }
                    }
                </script>
            </div>
        </div>
@endsection
