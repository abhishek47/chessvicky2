
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> ChessVicky | Chess Resources, Articles, Puzzles, Quizzes, Events, Games,Tournaments, Cash Prices</title>

    <!-- Favicon and Touch Icons -->
    <link href="/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <link href="/css/owl.transitions.css" rel="stylesheet">
    <link href="/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <link href="/css/settings.css" rel="stylesheet"  media="screen">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Custom styles for this template -->
      <link href="/css/style2.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/chessboard.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

       <script src="/js/jquery.min.js"></script>

       <script src="/js/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">

</head>

<body class="home-style2">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="site-header-style2">

            <!-- start upper-topbar -->
            <div class="upper-topbar hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-9 contact-info">
                            <ul>
                                <li><i class="fi flaticon-letter"></i> contact@chessvicky.com</li>
                                <li><i class="fi flaticon-pin"></i> Made with &nbsp;<i class="fa fa-heart" style="font-size: 14px;color: red;"></i>&nbsp; from India</li>
                             </ul>
                        </div>

                        <div class="col col-md-3">
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
            <!-- end upper-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="sub-menu">
                              <a href="/home">Library</a>
                              <ul>
                                    <li><a href="/blog">Articles/Tutorials</a></li>
                                    <li><a href="/books">Books</a></li>
                                    <li><a href="/puzzles">Puzzles</a></li>
                                    <li><a href="/quiz">Quizzes</a></li>
                                    <li><a href="/calendar">Calendar</a></li>
                                </ul>
                            </li>

                            <li><a href="/events">Events</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/forum">Forum</a></li>
                            <li><a href="/contact">Contact</a></li>

                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="sub-menu">
                                    <a href="/home" style="padding-top: 25px;">
                                     
                                        <img style="display: inline;width: 30px;height: 30px;margin-right: 5px;margin-bottom: 2px;" src="/images/testimonials/img-1.jpg" alt class="img img-responsive img-circle">
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul>
                                        <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a href="/profile"><i class="fa fa-user"></i> Profile</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                                
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->



        @yield('content');





        <!-- start footer-->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-sm-6">
                            <div class="widget about-widget">
                                <a href="#" class="footer-logo"><img src="/images/logo3d.png" alt class="img img-responsive"></a>
                                <p>ChessVicky is a one stop platfrom to learn chess in a better and an advanced way.Join now to learn and earn with chess.</p>
                               
                            </div>
                        </div>

                        <div class="col col-lg-3 col-sm-6">
                            <div class="widget news-widget">
                                <h3>Recent news</h3>
                                <ul>
                                    <li>
                                        <div class="entry-media">
                                            <img src="/images/blog/thumb/img-1.jpg" alt>
                                        </div>
                                        <div class="entry-details">
                                            <h5><a href="#">GM Vishy Anand wishes to give a video lecture on ChessVicky.</a></h5>
                                            <span class="date"><i class="fa fa-clock-o"></i> March 29, 2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="entry-media">
                                            <img src="/images/blog/thumb/img-2.jpg" alt>
                                        </div>
                                        <div class="entry-details">
                                            <h5><a href="#">ChessVicky officially working with FIDE &amp; AICF.</a></h5>
                                            <span class="date"><i class="fa fa-clock-o"></i> March 09, 2017</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-sm-6">
                            <div class="widget site-map-widget">
                                <h3>Links</h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-4 col-sm-6">
                            <div class="widget newsletter-widget">
                                <h3>Newsletter</h3>
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="email address">
                                        <button class="btn" type="submit"><i class="fa fa-send"></i></button>
                                    </div>

                                </form>
                            </div>

                            <div class="widget social-media-widget">
                                <h3>Social media</h3>
                                <ul class="">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end upperfooter -->

            <div class="copyright">
                <div class="container">
                    <div class="col col-md-6">
                        <p>2017 &copy; All rights reserved.Powered by <a href="http://trumpetstechnologies.com">Trumpets Technologies</a></p>
                    </div>
                    <div class="col col-md-6">
                        <ul>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end sectionname-->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
 
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="/js/jquery-plugin-collection.js"></script>

    <!-- Rev slider -->
    <script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/jquery.themepunch.revolution.min.js"></script>    

    <!-- Custom script for this template -->
    <script src="/js/script.js"></script>

     <script src="/js/chessboard.js"></script>

     @yield('scripts')

     @if( session('flash_title') && session('flash_message'))
             <script type="text/javascript">
                 swal({
          title: "{{ session('flash_title') }}",
          text: "{{ session('flash_message') }}",
          type: "success",
          confirmButtonText: "Cool"
        });
      </script>
     @endif

      @if( session('error_title') && session('error_message'))
             <script type="text/javascript">
                 swal({
          title: "{{ session('error_title') }}",
          text: "{{ session('error_message') }}",
          type: "error",
          confirmButtonText: "Ok"
        });
      </script>
     @endif

   
    
</body>
</html>

