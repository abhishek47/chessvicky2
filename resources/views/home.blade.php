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
       @include('layouts.ucard')
     


 <!-- start featured -->
        <section class="featured section-padding">
            <div class="container">
                
                <div class="row content">
                    <a href="/blog" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img  src="images/featured/img-1.jpg" alt class="img img-responsive">
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
                                <img src="images/featured/img-4.jpeg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Solve Quizzes <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <br><br>
                     <div class="row content">
                    <a href="/books" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-5.jpg" alt class="img img-responsive">
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
                                <img src="images/featured/img-7.png" alt class="img img-responsive">
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
                    </div>
                    <br><br>
                     <div class="row content">

                   <!-- <a href="/puzzles/contests" class="col col-lg-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="images/featured/img-8.jpg" alt class="img img-responsive">
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
                                <img src="images/featured/img-9.jpg" alt class="img img-responsive">
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
                                <img src="images/featured/img-10.jpg" alt class="img img-responsive">
                            </div>
                            <div class="details">
                                <h3>Online Tournaments <i class="fi flaticon-money-2"></i></h3>
                                <p>Well, we feel just learning and comparing with friends is no cool.So we bring up online chess tournaments as well as puzzle and quiz events where you can earn real money.</p>
                            </div>
                        </div>
                    </a> -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end featured -->

<br><br><br>

  @include('layouts.buycoins')
@endsection
