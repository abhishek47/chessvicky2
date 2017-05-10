@extends('layouts.app')

@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>{{ $user->name }} | Profile</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Profile</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

    <!-- start team-single-content -->
        <section class="team-single-content section-padding" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12 col-md-12">
                        <div class="row member panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">
                           <div class="panel-heading"></div>
                            <div class="col col-sm-2" id="upic">
                                <div class="member-pic">
                                    @if( $user->profile->photo)
                                      <img class="img img-responsive" style="width: 140px;height: 140px;border-radius: 50%;" src="/{{  $user->profile->photo }}" alt="">
                                    @else
                                     <span class="chatter_avatar_circle large" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode( $user->name) ?>">
                                          {{ ucfirst(substr( $user->name, 0, 1)) }}
                                      </span>
                                     @endif 
                                </div>
                            </div>
                            <div class="col col-sm-10" id="udetails">
                                <div class="member-details">
                                    <h3>{{ $user->name }} <span style="font-size: 16px;"></span></h3>
                                    <span>@  {{ $user->username }}</span>
                                    <p>{{ empty($user->profile->bio) ? 'Bio not added!' : $user->profile->bio }}</p>
                                     <div class="row">
                                      <div class="col col-md-6">
                                        <ul class="member-info">
                                         
                                            <li><i class="fa fa-envelope"></i> {{ $user->email }}</li>
                                          
                                              <li><i class="fa fa-map-marker"></i> {{ $user->profile->city . ',' .  $user->profile->state . ',' .  $user->profile->country }}</li>
                                            <li><i class="fa fa-clock-o"></i> Member Since <b>{{ $user->created_at->toFormattedDateString() }} </b></li>

                                            <li><i class="fa fa-thumbs-up"></i><b>Games Won :</b>  {{ $user->profile->games_won }}</li>

                                            <li><i class="fa fa-gamepad"></i><b>Games Drawn :</b>  {{ $user->profile->games_drawn }}</li>

                                             <li><i class="fa fa-language"></i><b>Quizzes Solved :</b>  {{ count($user->solvedQuizzes) }}</li>
                                           
                                        </ul>
                                       </div> 
                                       <div class="col col-md-6">
                                        <ul class="member-info">
                                           
                                            <li><i class="fa fa-user"></i> <b>Leaderboard Rank :</b> 
                                            {{  getRankOfGivenUser($user->id) }} &nbsp; <span style="font-size: 14px;"><a href="/leaderboard"><i class="fa fa-bars"></i>  View Leaderboard</a></span></li>
                                            <li><i class="fa fa-tasks"></i> <b>Points :</b> {{ $user->profile->points }}</li>
                                          <!--  <li><i class="fa fa-money"></i> <b>Coins :</b> {{ $user->profile->coins }} &nbsp; <span style="font-size: 14px;"><a href="#" data-toggle="modal" data-target="#buyCoins"><i class="fa fa-shopping-cart"></i>  Buy Coins</a> &nbsp;|&nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-bank"></i>  Redeem Coins</a></span></span></li> -->
                                          <li><i class="fa fa-star-half-empty"></i><b>Rating :</b>  {{ $user->profile->rating }}</li>

                                          <li><i class="fa fa-thumbs-down"></i><b>Games Lost :</b>  {{ $user->profile->games_lost }}</li>

                                           <li><i class="fa fa-hashtag"></i><b>Puzzles Solved :</b>  {{ count($user->solvedPuzzles) }}</li>
 

                                           
                                        </ul>
                                       </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                
             </div>
        </section>

      
     


@endsection
