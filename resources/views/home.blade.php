@extends('layouts.app')

@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>{{ Auth::user()->name }} | Home</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Profile</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

    <!-- start team-single-content -->
        <section class="team-single-content section-padding" style="padding-bottom: 3px;">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12 col-md-12">
                        <div class="row member">
                            <div class="col col-sm-2">
                                <div class="member-pic">
                                    <img src="images/team-s2/img-5.jpg" style="width: 140px;height: 140px;" alt class="img img-responsive img-circle">
                                </div>
                            </div>
                            <div class="col col-sm-10">
                                <div class="member-details">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <span>Founder &amp; CEO</span>
                                    <p>Hasib has over 15 years of consulting experience in the US, Europe, Japan, and across the Asia Pacific region. He advises clients on strategy formulation, strategic M&amp;A, turnaround &amp; restructuring, market and channel development improvement issues.</p>
                                    <ul class="member-info">
                                        <li><i class="fa fa-envelope"></i> hasibsharif@consultcare.info</li>
                                        <li><i class="fa fa-phone"></i> +91 222 911 981</li>
                                        <li><i class="fa fa-share"></i>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                       <hr> 
                    </div>
                
             </div>
        </section>
        


 <!-- start featured -->
        <section class="featured section-padding">
            <div class="container">
                <div class="row content">
                    <a href="/blog" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-1.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Chess Articles <i class="fi flaticon-letter"></i></h3>
                                <p>We have hundreds of different articles from various well known identities in the chess world.Either you want gain some news or learn new tactics, these are for you.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/puzzles" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-2.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Checkmate Puzzles <i class="fi flaticon-network"></i></h3>
                                <p>Learning is no fun when you can't apply and test it somewhere.So we have brought up thousands of chess puzzles and quizzes for you.Solve and gain points to compete with your friends.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/quiz" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Solve Quizzes <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/books" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Buy Books <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/forum" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Visit Forum <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/chess" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Play Chess <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>

                    <a href="/chess" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Puzzle Events <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>

                     <a href="/chess" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Quiz Events <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>

                     <a href="/chess" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Online Tournaments <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end featured -->

<br><br><br>
@endsection
