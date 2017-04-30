<!-- BEGIN SIDEBAR NAV -->
    <aside class="rs-sidebar">

      <!-- Sidebar menu -->
      <ul class="rs-sidebar-nav default-sidebar-nav">
        <li class="rs-user-sidebar">
          <a href="javascript:void(0);">
            <img src="<?= url('assets/img/logo.png'); ?>" alt="Avatar" class="avatar img-circle">
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
          <a href="<?= url('/'); ?>">
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
          <a href="<?= url('calendar'); ?>">
            <span class="fa fa-calendar rs-icon-menu"></span>Chess Calendar
          </a>
        </li>

         <li class="<?= $page == 'tutorials' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-flask rs-icon-menu"></span>Tutorials
          </a>
          <ul>
            <li><a href="<?= url('tutorials'); ?>">All Tutorials</a></li>
            <li><a href="<?= url('tutorials/new'); ?>">Add New Tutorial</a></li>
          </ul>
        </li>

        <li class="<?= $page == 'blog' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-rss rs-icon-menu"></span>Blog
          </a>
          <ul>
            <li><a href="<?= url('blog'); ?>">All Articles</a></li>
            <li><a href="<?= url('blog/new'); ?>">New Article</a></li>
          </ul>
        </li>

          <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="index.html">
            <span class="fa fa-flask rs-icon-menu"></span>Forum
          </a>
        </li>

        <li class="<?= $page == 'books' ? 'active selected' : ''; ?>">
          <a href="<?= url('books'); ?>">
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
            <li><a href="<?= url('puzzles/list'); ?>">All Puzzles</a></li>
            <li><a href="<?= url('puzzles/events'); ?>">Puzzle Events</a></li>
            <li><a href="<?= url('puzzles/leaderboard'); ?>">Leaderboard</a></li>
          </ul>
        </li>

        <li class="<?= $page == 'forum' ? 'active selected' : ''; ?>">
          <a href="javascript:void(0);">
            <span class="fa fa-check-square-o rs-icon-menu"></span>Quizzes
          </a>
          <ul>
            <li><a href="<?= url('quiz/list'); ?>">All Quizes</a></li>
             <li><a href="<?= url('quiz/events'); ?>">Quiz Events</a></li>
            <li><a href="<?= url('quiz/leaderboard'); ?>">Leaderboard</a></li>
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