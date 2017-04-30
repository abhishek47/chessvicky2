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