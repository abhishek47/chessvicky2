
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    @yield('meta')

    <!-- Page Title -->
    <title> ChessVicky | Chess Resources, Articles, Puzzles, Quizzes, Events, Games,Tournaments, Cash Prices</title>

    <!-- Favicon and Touch Icons -->
   <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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

      @yield('css')

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
                                <li><a target="_blank" href="https://www.facebook.com/Chessvicky/"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/chessvicky"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/chessvicky/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCI9Egzqx_ntmfK4cEM3O8wA"><i class="fa fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/chessvickyofficial/"><i class="fa fa-instagram"></i></a></li>
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
                        <a class="navbar-brand" href="/"><img src="/images/logo2.png" alt></a>
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

                          <!--  <li><a href="/events">Events</a></li> -->
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

                                     @if( Auth::user()->profile->photo)
                                      <img class="img img-responsive" style="display: inline;width: 30px;height: 30px;margin-right: 5px;margin-bottom: 2px;" src="/{{  Auth::user()->profile->photo }}" alt="" class="img img-responsive img-circle">
                                    @else
                                     <span class="chatter_avatar_circle small" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode( Auth::user()->name) ?>;width: 30px;height: 30px;font-size: 18px;line-height: 28px;">
                                          {{ ucfirst(substr( Auth::user()->name, 0, 1)) }}
                                      </span>
                                     @endif 
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul>
                                        <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a href="/user/edit"><i class="fa fa-user"></i> Profile</a></li>
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
                                            <h5><a href="#">GM Vishy Anand showed interest to give a video lecture on ChessVicky.</a></h5>
                                            <span class="date"><i class="fa fa-clock-o"></i> March 29, 2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="entry-media">
                                            <img src="/images/blog/thumb/img-2.jpg" alt>
                                        </div>
                                        <div class="entry-details">
                                            <h5><a href="#">ChessVicky is soon going to officially work with FIDE &amp; AICF.</a></h5>
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
                                    <li><a target="_blank" href="https://www.facebook.com/Chessvicky/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/chessvicky"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/chessvicky/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCI9Egzqx_ntmfK4cEM3O8wA"><i class="fa fa-youtube"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/chessvickyofficial/"><i class="fa fa-instagram"></i></a></li>
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
 

    <!-- Plugins for this template -->
    <script src="/js/jquery-plugin-collection.js"></script>

    <!-- Rev slider -->
    <script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/jquery.themepunch.revolution.min.js"></script>    

    <!-- Custom script for this template -->
    <script src="/js/script.js"></script>

     <script src="/js/chessboard.js"></script>

     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

     
    <script src="/js/bootstrap.min.js"></script>

    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1867657833480788',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

     @yield('scripts')

     @if( session('flash_title') && session('flash_message'))
             <script type="text/javascript">
                 swal({
          title: "{{ session('flash_title') }}",
          html: true,
          text: "<span style='color:#0a0a0a;font-weight:400'>{!! session('flash_message') !!}</span>",
          type: "success",
          confirmButtonColor: "#0048bc",
          confirmButtonText: "Cool"
        });
      </script>
     @endif

      @if( session('error_title') && session('error_message'))
             <script type="text/javascript">
                 swal({
          title: "{{ session('error_title') }}",
          html: true,
          text: "<span style='color:#0a0a0a;font-weight:400'>{!! session('error_message') !!}</span>",
          type: "error",
          confirmButtonColor: "#0048bc",
          confirmButtonText: "Ok"
        });
      </script>
     @endif

      <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=udlmn059umrh6h02jyxtcyslj0xed1gbqz1g6s1h2xe4062e"></script>
    <script>tinymce.init({
      selector: '#body',
      height: 200,
      plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
      content_css: [
        '//www.tinymce.com/css/codepen.min.css'
      ]
    });</script>

   
    @yield('js')
</body>
</html>

