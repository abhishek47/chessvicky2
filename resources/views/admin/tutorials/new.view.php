<?php view("partials/header", compact('page')); ?>


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Add New Tutorials</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">Articles intended to teach something!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="<?= url('tutorials'); ?>">Tutorials</a></li>
							<li class="active">New</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Add New Tutorial</h3>
								<p class="subtitle text-uppercase m-t">Tutorials are the articles that are intended to teach something to the users!</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="<?= url('tutorials/store'); ?>" method="post">

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" class="form-control">
									</div>
								

									<div class="form-group">
										<textarea name="body" class="summernote-fixed-height" title="Contents"><p>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~<br>blah blah~</p></textarea>
									</div><!-- /.form-group -->


									<div class="form-group">
										<label>Author</label>
										<input type="text" class="form-control" name="author" placeholder="Akash Wani">
									</div>

									<div class="form-group">
										<label>Tags</label>
										<input type="text" name="tags" class="rs-selectize-tags" value="chess,game" placeholder="Input Tags">
									</div><!-- /.form-group -->
									
									<div class="form-group has-feedback">
										<label class="control-label">Publish Date</label>
										<input type="text" name="published_at" class="form-control rs-datepicker" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" readonly>
										<span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
									</div><!-- /.form-group -->

									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addtutorial" value="Add Tutorial" >
									</div>


									
									

									


								</form>
							</div><!-- .panel-body -->
						</div><!-- /.panel -->
						<!-- End Panel -->


					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->







<?php view("partials/footer", compact('page')); ?>