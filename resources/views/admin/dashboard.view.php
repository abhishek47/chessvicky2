<?php view("partials/header", compact('page')); ?>



    <!-- BEGIN MAIN CONTENT -->
    <article class="rs-content-wrapper">
      <div class="rs-content">
        <div class="rs-inner">

          <!-- Begin Dashhead -->
          <div class="rs-dashhead m-b-lg">
            <div class="rs-dashhead-content">
              <div class="rs-dashhead-titles">
                <h6 class="rs-dashhead-subtitle text-uppercase">Dashboard</h6>
                <h3 class="rs-dashhead-title m-t">Good Day, ChessMaster!</h3>
                <!-- Begin Toolbar toggle button on mobile -->
                <div class="toggle-toolbar-btn">
                  <span class="fa fa-sort"></span>
                </div><!-- /.toggle-toolbar-btn -->
                <!-- End Toolbar toggle button on mobile -->
              </div><!-- /.rs-dashhead-titles -->
            
            </div><!-- /.rs-dashhead-content -->
            <!-- Begin Breadcrumb -->
            <ol class="breadcrumb">
              <li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol>
            <!-- End Breadcrumb -->
          </div><!-- /.rs-dashhead -->
          <!-- End Dashhead -->

          <!-- Begin default content width -->
          <div class="container-fluid">

            <!-- <div class="alert alert-success alert-simple alert-dismissible fade in iconic-alert m-b-lg" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span class="mcon mcon-close"></span></span></button>
              <div class="alert-icon">
                <span class="gcon gcon-emoji-happy centered-xy"></span>
              </div>
              <p><strong>You have received a payment</strong>. Click <a href="javascript:void(0);" class="alert-link">here</a> to review your payment page.</p>
            </div> -->

            <div class="row">

                  <div class="col-sm-3">
                    <!-- Begin Panel -->
                    <div class="quick-stat panel panel-rounded bg-grad bg-grad-05 borderless">
                      <div class="panel-heading borderless">
                        <p class="subtitle text-lighten text-uppercase m-b-xs">Site Visits</p>
                        <h3 class="m-a-0 p-a-0">254K</h3>
                        <div class="panel-toolbar">
                          <span class="badge bg-lightest text-white p-x"><i class="fa fa-chevron-up m-r-xs"></i>2.5%</span>
                        </div><!-- /.panel-toolbar -->
                        <!-- End Panel Toolbar -->
                      </div><!-- /.panel-heading -->
                      <div class="panel-body p-a">
                        <span class="spark-dash-01"></span>
                      </div><!-- .panel-body -->
                    </div><!-- /.panel -->
                    <!-- End Panel -->
                  </div><!-- /.col-sm-4 -->
                  <div class="col-sm-3">
                    <!-- Begin Panel -->
                    <div class="quick-stat panel panel-rounded bg-grad bg-grad-03 borderless">
                      <div class="panel-heading borderless">
                        <p class="subtitle text-lighten text-uppercase m-b-xs">Total Revenue</p>
                        <h3 class="m-a-0 p-a-0">&#8377 50,254</h3>
                        <div class="panel-toolbar">
                          <span class="badge bg-lightest text-white p-x"><i class="fa fa-chevron-up m-r-xs"></i>0.5%</span>
                        </div><!-- /.panel-toolbar -->
                        <!-- End Panel Toolbar -->
                      </div><!-- /.panel-heading -->
                      <div class="panel-body p-a">
                        <span class="spark-dash-02"></span>
                      </div><!-- .panel-body -->
                    </div><!-- /.panel -->
                    <!-- End Panel -->
                  </div><!-- /.col-sm-4 -->
                  <div class="col-sm-3">
                    <!-- Begin Panel -->
                    <div class="quick-stat panel panel-rounded bg-grad bg-grad-15 borderless">
                      <div class="panel-heading borderless">
                        <p class="subtitle text-lighten text-uppercase m-b-xs">Monthly Revenue</p>
                        <h3 class="m-a-0 p-a-0">&#8377 1,548</h3>
                        <div class="panel-toolbar">
                          <span class="badge bg-lightest text-white p-x"><i class="fa fa-chevron-up m-r-xs"></i>3.68%</span>
                        </div><!-- /.panel-toolbar -->
                        <!-- End Panel Toolbar -->
                      </div><!-- /.panel-heading -->
                      <div class="panel-body p-a">
                        <span class="spark-dash-03"></span>
                      </div><!-- .panel-body -->
                    </div><!-- /.panel -->
                    <!-- End Panel -->
                  </div><!-- /.col-sm-4 -->

                   <div class="col-sm-3">
                    <!-- Begin Panel -->
                    <div class="quick-stat panel panel-rounded bg-grad bg-grad-15 borderless">
                      <div class="panel-heading borderless">
                        <p class="subtitle text-lighten text-uppercase m-b-xs">Registered Users</p>
                        <h3 class="m-a-0 p-a-0">100K</h3>
                        <div class="panel-toolbar">
                          <span class="badge bg-lightest text-white p-x"><i class="fa fa-chevron-up m-r-xs"></i>3.68%</span>
                        </div><!-- /.panel-toolbar -->
                        <!-- End Panel Toolbar -->
                      </div><!-- /.panel-heading -->
                      <div class="panel-body p-a">
                        <span class="spark-dash-03"></span>
                      </div><!-- .panel-body -->
                    </div><!-- /.panel -->
                    <!-- End Panel -->
                  </div><!-- /.col-sm-4 -->

                


            </div><!-- /.row -->

            

          </div><!-- /.container-fluid -->

        </div><!-- /.rs-inner -->
      </div><!-- /.rs-content -->
    </article><!-- /.rs-content-wrapper -->
    <!-- END MAIN CONTENT -->






<?php view("partials/footer"); ?>