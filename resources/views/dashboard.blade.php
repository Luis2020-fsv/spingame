@extends('layouts.appMain')
@section('page_title') Home @endsection
@section('page_style')

 
<!-- <script src="{{asset('html/js/sidebar.js')}}" charset="utf-8"></script> -->
<style media="screen">
        .total-list-container {
            margin-top: 125px;
            margin-bottom: 40px;
            -webkit-overflow-scrolling: touch;
        }
        body {
                font-family: 'Lemon/Milk Bold';
            }
        table {
            font-size: 1.2rem;
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
        @media (max-width: 767px) {
            .total-list-container {
                margin-top: 120px;
                -webkit-overflow-scrolling: touch;
            }
        }
        body{height: unset;}
        .text-container {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 20px;
            /* position: absolute; */
            width: 100%;
            left: 0;
            bottom: 20px;
        }
        
        .sound-icon-container {
            top: 80px;
            right: 20px;
        }
        
        @media (max-width: 767px) {
            .sound-icon-container {
                top: 60px;
                right: 20px;
            }
        }
        
        @media (max-width: 359px) {
            .sound-icon-container {
                top: 50px;
                right: 5px;
            }
        }
        @media (min-width: 992px) {
            .sound_icon_da{
                width: 65%;
            }
        }
        
        .style-title-container {
            margin-top: -60px;
        }
        
        @media (max-width: 767px) {
            .style-title-container {
                margin-top: -30px;
            }
        }
        @media (min-width: 768px) {
            .sound-icon-container {
                top: 60px;
                right: 20px;
            }
        }
       
        .subtitle {
            font-size: 20pt;
            margin-top: 15px;
            margin-left: auto;
            margin-right: auto;
            /*position: absolute;
        top: 190px;*/
            width: 100%;
            color: #fff;
            text-align: center;
            overflow: hidden;
            left: 0;
        }
        
        @media (max-width: 767px) {
            .subtitle {
                /*top: 130px;*/
                left: 0;
            }
        }
        .hamburger-btn-container {
             top: 10px;}
        .prize-info-container {
            font-size: 18pt;
            color: #fff;
        }
        
        .prize-title {
            text-transform: capitalize;
            font-size: 20pt;
            text-decoration: underline;
        }
        
        .prize-remain-spins {
            width: 80%;
            margin-left: 5%;
            font-size: 16pt;
            color: #fff;
        }
        
        .prize-wons {
            width: 80%;
            margin-left: 5%;
            font-size: 16pt;
            text-transform: capitalize;
            color: #fff;
        }
        
        .username_nav {
            text-align: center;
        }
        
        .username_nav>img {
            width: 65%;
        }
        
        @media (max-width:767px) {
            table {
                width: 85%;
                margin: auto;
            }
            th,
            td {
                padding: 8px;
            }
        }
        
        @media (max-width:360px) and (max-height:640px) {
            .total-list-container {
                margin-top: 70px!important;
            }
            table {
                font-size: .9rem;
            }
            .half_token_img{
                width: 40%!important;
                margin-top: 0px!important;
                
            }
            .hamburger-btn-container {
             top: 10px!important;
             }
            .one_token_text{
                font-size: 1.3rem!important;
            }
            .half_token_text{
                font-size: 1.2rem!important;
            }
            .token_av {
                margin-top: 3px!important;
                width: 41%;
            }
            .sound-icon-container img {
                    width: 35px;
                }
            .username_nav>img {
                width: 60%;
            }
            .prize-title {
                text-transform: capitalize;
                font-size: 10pt!important;
                text-decoration: underline;
            }
            .prize-remain-spins {
                width: 80%;
                margin-left: 5%;
                font-size: 10pt!important;
                color: #fff;
            }
            .prize-wons {
                width: 80%;
                margin-left: 5%;
                font-size: 10pt!important;
                text-transform: capitalize;
                color: #fff;
            }
            .desc {
                font-size: 10pt!important;
            }
            .w3-container>img {
                width: 30%;
            }
            th,
            td {
                padding: 8px;
                text-align: center;
                color: #feee8d;
                border-bottom: 1px solid #0051ad;
            }
            table {
                width: 90%;
                margin: auto;
            }.sound-icon-container {
                top: 3px;
                z-index: 3344;
                right: 15px;
            }
        }ul.pagination {
    padding-left: 45%;
}
.hamburger-btn-container {
    top: 13px;
}
        @media (max-width:2100px){  ul.pagination {
    width: 100%;
    padding-left: 43%;
        }}
        @media (max-width:1900px){  ul.pagination {
    width: 100%;
    padding-left: 43%;
        }}
        @media (max-width:1700px){  ul.pagination {
    width: 100%;
    padding-left: 43%;
        }}
        @media (max-width:991px){  ul.pagination {
    width: 100%;
    padding-left: 38%;
        }}
        @media (max-width:760px){  ul.pagination {
    width: 100%;
    padding-left: 36%;
        }}
        @media (max-width:460px){  ul.pagination {
    width: 100%;
    padding-left: 33%;
        }}
        @media (max-width:400px){  ul.pagination {
    width: 100%;
    padding-left: 30%;
        }}
dl, ol, ul {
    margin-top: 5px;}
    
    @media (max-width:359px){
        body{
            display:none;
        }
    }
    </style>
@endsection
@section('content')

<div class="main-container home-screen">
        <div class="container background-spin-img-container" style="position: relative;">
            <div class="row navbar-container" style="border: 6px dotted #feec8c;">
                <span class="username_nav"><img src="{{asset('html/images/darshboard.png')}}" class="open_btn" alt="" /></span>
                <span class="choosegame_nav">Choose your game</span>
                <div class="hamburger-btn-container" id="sidebar_click_btn">
                    <img src="{{asset('html/images/hamburger_btn.png')}}" class="open_btn" alt=""/>
                    <img src="{{asset('html/images/hamburger_close_btn.png')}}" class="close_btn" alt=""/>
                </div>
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
                            <li> <a href="{{route('invite')}}">Invite Friends</a> </li>
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

            <div class="row certain-container-darshboard">
                <div class="sound-icon-container">
                    <!-- <a href="#" onclick="bgm_on(true)" style="display: inline-block;cursor: pointer;">
                        <img src="{{asset('html/images/sound_icon.png')}}" class="sound_icon_da" alt="" />
                    </a> -->
                </div>

                <div class="total-list-container">
                    @foreach(Auth::user()->unreadNotifications as $notification)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> You received {{$notification->data['thread']}} from admin.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="markNotificationAsRead()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                    <div class="col-md-12 ">
                        <div class="subtitle">
                            <img src="{{asset('html/images/for_darshboard.png')}}" class="open_btn token_av one_token" alt="" /> &nbsp;
                            <span class="one_token_text" style="font-weight: bold; font-size: 2.2rem;">{{$token_count}}</span>&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">

                        @foreach ($add_prizes as $prize)
                        <?php $prize_id = $prize['id'];?>
                        <div class="col-md-4" style="justify-content: center;display: flex;">
                            <div class="single_game_box"
                            @if($prize['remain_winners_cash'] >= 1 || $prize['remain_winners_n500']>=1 || $prize['remain_winners_mystery_prize'] >=1 || $prize['remain_winners_jackpot'] >= 1)
                            onclick="go_spinroom({{$prize_id}},{{$prize['token_count']}})" style="cursor: pointer;"
                            @endif >
                                <div class="game-title-container">
                                    <p style="color: #f9de81;font-family: serif;"> Active Game</p>
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
                        </div>
                        @endforeach




                        </div>
                    </div>
                </div>


                

                <div class="table-container" style="width: 100%;">
                    <div class="w3-container" style="text-align: center;">
                        <caption>
                        <!-- <img src="{{asset('html/images/for_darshboard_table.png')}}" style="    margin-bottom: 5px;
                            border-bottom: 2px solid #fff;" alt="" /> -->
                           <span style="color: #feee8d; font-size: 1.2rem">Prizes Won</span>
                        </caption>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <table class="w3-table-all w3-hoverable">
                                    <thead>
                                        <tr class="w3-light-grey">
                                            <th>Date</th>
                                            <th>prize</th>
                                            <th>Received</th>
                                          
                                        </tr>
                                    </thead>
                                    <?php
                                        $spin_indexs = config('constants.spin_indexs');
                                    ?>
                                    <tboard>
                                        @foreach($prize_wons as $prize_won)
                                        <?$spin_index = $prize_won->spin_index; ?>
                                            <tr>
                                            <?php $os = array(0,3,6,9)?>
                                                <td>{{$prize_won->created_at}}</td>
                                                @if(in_array($prize_won->spin_index, $os))
                                                <td>{{$spin_indexs[$prize_won->spin_index][0]}}</td>
                                                @elseif($prize_won->spin_index == 2)
                                                <td>{{$spin_indexs[$prize_won->spin_index][0]}}(₦{{$prize_won->cash_price}})</td>
                                                @elseif($prize_won->spin_index == 4)
                                                <td>{{$spin_indexs[$prize_won->spin_index][0]}}(₦500 AIR TIME)</td>
                                                @elseif($prize_won->spin_index == 7)
                                                <td>{{$spin_indexs[$prize_won->spin_index][0]}}({{$prize_won->mystery_prize}})</td>
                                                @elseif($prize_won->spin_index == 11)
                                                <td>{{$spin_indexs[$prize_won->spin_index][0]}}({{$prize_won->prize_name}})</td>
                                                @endif
                                                <td>
                                                    @if(in_array($prize_won->spin_index, $os) || $prize_won->present_flag)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tboard>
                                </table>
                                {{ $prize_wons->links() }}
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="text-container">
                            <img src="{{asset('html/images/home_bottom_text.png')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    </div>
    <script>
        function markNotificationAsRead(){
            
            addr_url="{{url('/markAsRead')}}";
            $.ajax({
               type:'get',
               url: addr_url,
               
               success:function(data) {
                  
               }
            });
         
        }
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
@endsection
