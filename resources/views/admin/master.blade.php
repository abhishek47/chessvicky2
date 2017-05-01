<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ChessVicky | Dashboard</title>

  <!-- Site Icons -->
  <link rel="apple-touch-icon" href="/admin/img/apple-touch-icon.png">
  <link rel="icon" href="/admin/img/icon.ico">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Framework -->
  <link rel="stylesheet" href="/admin/css/bootstrap.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="/admin/icons/entypo.min.css">
  <link rel="stylesheet" href="/admin/icons/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/icons/flag-icon.min.css">
  <link rel="stylesheet" href="/admin/icons/material-icon.min.css">
  <link rel="stylesheet" href="/admin/icons/weather-icons.min.css">
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote.min.css">


  <!-- Plugins -->
  <link rel="stylesheet" href="/admin/css/plugins.css">

  <!-- Main Template CSS -->
  <link rel="stylesheet" href="/admin/css/bootstrap.custom.css">
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="/admin/css/helper.css">

  <link rel="stylesheet" href="/admin/css/chessboard.css" />
</head>


<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="rs-wrapper">

  <!-- BEGIN SIDEBAR NAV -->
    <aside class="rs-sidebar">

      <!-- Sidebar menu -->
      <ul class="rs-sidebar-nav default-sidebar-nav">
        <li class="rs-user-sidebar">
          <a href="javascript:void(0);">
            <img src="/admin/img/logo.png" alt="Avatar" class="avatar img-circle">
            Welcome
            <span class="subname text-uppercase m-t">Trumpets Technologies Pvt. Ltd.</span>
          </a>
          <ul>
            <li><a href="javascript:void(0);"><span class="fa fa-user rs-icon-menu"></span> Account Settings</a></li>
            <li><a href="javascript:void(0);"><span class="fa fa-sign-out rs-icon-menu"></span> Log Out</a></li>
          </ul>
        </li>

        <li class="menu-block-divider"></li>
        <li class="menu-header">Main menu</li>

        <li class="<?= $page == 'dashboard' ? 'active selected' : ''; ?>">
          <a href="/admin">
            <span class="fa fa-line-chart rs-icon-menu"></span>Dashboard
          </a>
        </li>

        <li class="<?= $page == 'announcements' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-bullhorn rs-icon-menu"></span>Announcements
          </a>
        </li>

        <li class="<?= $page == 'users' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-user rs-icon-menu"></span>Users
          </a>
        </li>

         <li class="<?= $page == 'leaderboard' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-user rs-icon-menu"></span>Leaderboard
          </a>
        </li>



        
       
        

        <li class="menu-block-divider"></li>
        <li class="menu-header">Site Content</li>

         <li class="<?= $page == 'calendar' ? 'active selected' : ''; ?>">
          <a href="/admin/calendar">
            <span class="fa fa-calendar rs-icon-menu"></span>Chess Calendar
          </a>
        </li>

         <li class="<?= $page == 'tutorials' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-flask rs-icon-menu"></span>Tutorials
          </a>
          <ul>
            <li><a href="/admin/tutorials">All Tutorials</a></li>
            <li><a href="admin/tutorials/new">Add New Tutorial</a></li>
          </ul>
        </li>

        <li class="<?= $page == 'blog' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-rss rs-icon-menu"></span>Blog
          </a>
          <ul>
            <li><a href="/admin/blog">All Articles</a></li>
            <li><a href="/admin/blog/new">New Article</a></li>
          </ul>
        </li>

          <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-flask rs-icon-menu"></span>Forum
          </a>
        </li>

        <li class="<?= $page == 'books' ? 'active selected' : ''; ?>">
          <a href="/admin/books">
            <span class="fa fa-book rs-icon-menu"></span>Books
          </a>
        </li>

        <li class="<?= $page == 'idols' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-star rs-icon-menu"></span>Super Idols
          </a>
        </li>

        <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-gamepad rs-icon-menu"></span>Online Game
          </a>
          <ul>
            <li><a href="component-alerts.html">Tournaments</a></li>
            <li><a href="component-buttons.html">Games History</a></li>
            <li><a href="component-buttons.html">Leaderboard</a></li>
          </ul>
        </li>

        <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-hashtag rs-icon-menu"></span>Puzzles
          </a>
          <ul>
            <li><a href="/admin/puzzles/list">All Puzzles</a></li>
            <li><a href="/admin/puzzles/events">Puzzle Events</a></li>
            <li><a href="/admin/puzzles/leaderboard">Leaderboard</a></li>
          </ul>
        </li>

        <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-check-square-o rs-icon-menu"></span>Quizzes
          </a>
          <ul>
            <li><a href="/admin/quiz/list">All Quizes</a></li>
             <li><a href="/admin/quiz/events">Quiz Events</a></li>
            <li><a href="/admin/quiz/leaderboard">Leaderboard</a></li>
          </ul>
        </li>
        

        
      </ul>
      <!-- End sidebar menu -->


      

      <!-- Custom Content -->
      <ul class="custom-content">
        <li class="menu-header">This Month Revenue</li>
        <li class="p-y p-x-md">
          <div class="radio radio-custom radio-lighten m-b-md">
            <label>
              <input type="radio" name="rs-revenue" value="" checked>
              <span class="checker bg-transparent"></span>
              Adsense Revenue
            </label>
            <span class="badge bg-darken m-a-0 p-x pull-right text-lighten">INR 36,457</span>
          </div><!-- /.radio -->
          <div class="radio radio-custom radio-lighten m-b-md">
            <label>
              <input type="radio" name="rs-revenue" value="">
              <span class="checker bg-transparent"></span>
              Online Game
            </label>
            <span class="badge bg-darken m-a-0 p-x pull-right text-lighten">INR 12,214</span>
          </div><!-- /.radio -->
          <div class="radio radio-custom radio-lighten m-b-md">
            <label>
              <input type="radio" name="rs-revenue" value="">
              <span class="checker bg-transparent"></span>
              Others
            </label>
            <span class="badge bg-darken m-a-0 p-x pull-right text-lighten">INR 10,320</span>
          </div><!-- /.radio -->
          <div>
          <!-- <a href="https://goo.gl/yWlIVx" target="_blank" class="btn btn-block btn-success m-t-lg"><i class="gcon gcon-shopping-bag icon-btn text-darken m-r"></i>Buy this template for <strong class="m-l-xs">$24</strong></a></div> -->
        </li>
        <li class="menu-block-divider"></li>
      </ul>
      <!-- End Custom content -->

    </aside><!-- /.rs-sidebar -->
    <!-- END SIDEBAR NAV -->


    @yield('content')




   <!-- BEGIN FOOTER -->
    <footer class="rs-footer absolute-footer">
      <span class="text-muted small">&copy; 2017 Powered By <a href="http://trumpetstechnologies.com">Trumpets.</a></span>
    </footer>
    <!-- END FOOTER -->


  </div><!-- /#rs-wrapper -->

  <!-- Screen overlay is required -->
  <div id="rs-screen-overlay"></div>


<!-- <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
  <script>
  window.jQuery || document.write('<script src="../dist/js/vendor/jquery.min.js"><\/script>')
  </script> -->
  <script src="/admin/js/vendor.js"></script>
  <script src="/admin/js/plugins.js"></script>
  

  <!-- Page Plugins -->
  <script src="/admin/plugins/chart-js/Chart.bundle.min.js"></script>
  <script src="/admin/plugins/easypie/jquery.easypiechart.min.js"></script>
  <script src="/admin/plugins/morris/morris.min.js"></script>
  <script src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="/admin/plugins/datatable/datatables.min.js"></script>
  <script src="/admin/plugins/datatable/datatables-example.js"></script>
  <script src="/admin/plugins/summernote/summernote.min.js"></script>
  <script src="/admin/plugins/summernote/summernote-example.js"></script>
  <script src="/admin/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="/admin/plugins/datepicker/datepicker-example.js"></script><!-- Example -->
    <script src="/admin/plugins/selectize/js/selectize.min.js"></script>
  <script src="/admin/plugins/selectize/selectize-example.js"></script><!-- Example -->

  @if($page == 'puzzles') 
    
  <script src="/admin/js/json3.min.js"></script>
  <script src="/admin/js/chessboard.js"></script>
    <script src="/admin/js/game.js"></script>

  @endif  








  <!-- Template Js -->
  <script src="/admin/js/apps.js"></script>
  <script src="/admin/js/dashboard.js"></script>
  <script src="/admin/js/layout-default.js"></script>

 

</body>
</html>