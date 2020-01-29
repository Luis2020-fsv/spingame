@extends('admin/layouts/default')
@section('content')
<?php
$spin_indexs = config('constants.spin_indexs');
?>

<style type="text/css">

.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav-tabs {
    border-bottom: 1px solid #ddd;
}
.nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a.active, .nav-tabs > li > a.active:focus, .nav-tabs > li > a.active:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
        border-bottom-color: rgb(221, 221, 221);
    border-bottom-color: transparent;
}

</style>
<link href="/plugins/jquery/jquery.datetimepicker.min.css" rel="stylesheet">
<script src="/plugins/jquery/jquery.datetimepicker.min.js"></script>
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Prize Winners</li>
            <li class="breadcrumb-item">
                <a href="{{route('winnerExport')}}">
                    Export Winners
                </a>
            </li>
        </ol>
        <h6 class="slim-pagetitle">Prize Winners</h6>
    </div><!-- slim-pageheader -->

    <ul class="nav nav-tabs">
        <li><a class="active" data-toggle="tab" href="#div1">Prize</a></li>
        <li><a data-toggle="tab" href="#div2">User played this month</a></li>
    </ul>
    <div class="tab-content">
        <div id="div1" class="section-wrapper tab-pane fade in active show">
            <label class="section-title">Prize And Winners</label>
            <div class="row mg-b-20">
                <div class="col-lg-4">
                    <select class="form-control select2-show-search" onchange="filtergo()" id="select_user" data-placeholder="Choose User">
                        <option value="0">*</option>
                        @foreach ($users as $user)
                        <option value="{{$user->id}}" {{$user->id==$selected_user?'selected':''}}>{{$user->lastname}}({{$user->email}})</option>
                        @endforeach
                    </select>
                </div><!-- col-4 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <select class="form-control select2-show-search" onchange="filtergo()" id="select_prize" data-placeholder="Choose Prize">
                        <option value="0">*</option>
                        @foreach ($prizes as $prize)
                        <option value="{{$prize->id}}" {{$prize->id==$selected_prize?'selected':''}}>{{$prize->prize_name}}</option>
                        @endforeach
                    </select>
                </div><!-- col-4 -->
                <!--<div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <select class="form-control select2-show-search" data-placeholder="Choose Prize">
                        <option label="Choose Prize"></option>
                        @foreach ($spin_indexs as $key=>$spin_index)
                        <option value="{{$key}}">{{$spin_index['0']}}</option>
                        @endforeach
                    </select>
                </div>--><!-- col-4 -->
            </div><!-- row -->


            <div class="table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead>
                        <tr>
                            <!-- <th>No</th> -->
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Prize</th>
                            <th>Win</th>
                            <th>date</th>
                            <th>Paid Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prize_winners as $prize_winner)
                        <tr>
                            <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                            <td>{{$prize_winner->firstname, $prize_winner->lastname}} </td>
                            <td>{{$prize_winner->email}}</td>
                            <td>
                                {{$prize_winner->prize_name}}       
                            </td>
                              <?php $os = array(0,3,6,9)?>
                            @if(in_array($prize_winner->spin_index, $os))
                            <td>{{$spin_indexs[$prize_winner->spin_index][0]}}</td>
                            @elseif($prize_winner->spin_index == 2)
                            <td>{{$spin_indexs[$prize_winner->spin_index][0]}}(₦{{$prize_winner->cash_price}})</td>
                            @elseif($prize_winner->spin_index == 4)
                            <td>{{$spin_indexs[$prize_winner->spin_index][0]}}(₦500 AIR TIME)</td>
                            @elseif($prize_winner->spin_index == 7)
                            <td>{{$spin_indexs[$prize_winner->spin_index][0]}}({{$prize_winner->mystery_prize}})</td>
                            @elseif($prize_winner->spin_index == 11)
                            <td>{{$spin_indexs[$prize_winner->spin_index][0]}}</td>
                            @endif

                            <td>{{$prize_winner->created_at}}</td>
                            <td>
                              
                                @if(in_array($prize_winner->spin_index, $os) || $prize_winner->present_flag)
                                <input type="checkbox" name="prize_confirm" class= "prize_confirm"  value="{{$prize_winner->id}}" disabled checked data-on="YES" data-off="NO"  data-toggle="toggle">
                                @else
                                <input type="checkbox" name="prize_confirm" class= "prize_confirm"  value="{{$prize_winner->id}}" data-on="YES" data-off="NO"  data-toggle="toggle">
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             
            </div><!-- bd -->
        </div><!-- section-wrapper -->

       <div id="result"></div>  <!-- div to hold results from ajax -->
        
        <div id="div2" class="section-wrapper tab-pane fade">
            <label class="section-title">Users in this month</label>
            <div class="table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_month as $um)
                        <tr>
                            <td>{{$um->lastname}}</td>
                            <td>{{$um->email}}</td>
                            <td>{{$um->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div>
    </div>
    <script>

        $.ajaxSetup({

        
        });
        function filtergo(){
            location.href="{{route('admin.prizewinners')}}?user="+document.getElementById('select_user').value+"&prize="+document.getElementById('select_prize').value;
        }

      
        $('.prize_confirm').change(function() {
            var checked = $(this).prop('checked');
            var prizeWonID = $(this).val();
            console.log('button');
            if(checked == true){
                var ajax_url = "{{route('prize.winners')}}";
                $.ajax({
                    type:'POST',
                    url: ajax_url,
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{id: prizeWonID},
                    success:function(data) {
                        $("#result").html(data.message);
                    }
                });
            }
        })
  
        $(document).ready(function () {
            $('.select2-show-search').select2({
                minimumResultsForSearch: ''
            });

        });
    </script>
</div><!-- container -->
@stop