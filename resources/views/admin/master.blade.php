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
  <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png'); ?>">
  <link rel="icon" href="<?= url('assets/img/icon.ico'); ?>">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Framework -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.min.css'); ?>">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="<?= url('assets/icons/entypo.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/flag-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/material-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/weather-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/plugins/summernote/summernote.min.css'); ?>">


  <!-- Plugins -->
  <link rel="stylesheet" href="<?= url('assets/css/plugins.css'); ?>">

  <!-- Main Template CSS -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.custom.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/helper.css'); ?>">

  <link rel="stylesheet" href="<?= url('assets/css/chessboard.css'); ?>" />
</head>


<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="rs-wrapper">


  @yeild('content');




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
  <script src="<?= url('assets/js/vendor.js'); ?>"></script>
  <script src="<?= url('assets/js/plugins.js'); ?>"></script>
  

  <!-- Page Plugins -->
  <script src="<?= url('assets/plugins/chart-js/Chart.bundle.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/easypie/jquery.easypiechart.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/morris/morris.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/datatable/datatables.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/datatable/datatables-example.js'); ?>"></script>
  <script src="<?= url('assets/plugins/summernote/summernote.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/summernote/summernote-example.js'); ?>"></script>
  <script src="<?= url('assets/plugins/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/datepicker/datepicker-example.js'); ?>"></script><!-- Example -->
    <script src="<?= url('assets/plugins/selectize/js/selectize.min.js'); ?>"></script>
  <script src="<?= url('assets/plugins/selectize/selectize-example.js'); ?>"></script><!-- Example -->

  <?php if($page == 'puzzles') : ?> 
    
  <script src="<?= url('assets/js/json3.min.js'); ?>"></script>
  <script src="<?= url('assets/js/chessboard.js'); ?>"></script>
    <script src="<?= url('assets/js/game.js'); ?>"></script>

  <?php endif; ?>  








  <!-- Template Js -->
  <script src="<?= url('assets/js/apps.js'); ?>"></script>
  <script src="<?= url('assets/js/dashboard.js'); ?>"></script>
  <script src="<?= url('assets/js/layout-default.js'); ?>"></script>

 

</body>
</html>