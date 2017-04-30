<?php view("partials/header", compact('page')); ?>


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Books Store</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">An amazon affiliated Books Store!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="<?= url('books'); ?>">Books</a></li>
							<li class="active">Edit</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Edit Book</h3>
								<p class="subtitle text-uppercase m-t">Here you can add different books from amazon for affiliate program!Users can search and buy from amazon through our store!</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="<?= url('books/update/' . $book->id); ?>" method="post">

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="name" value="<?= $book->name; ?>" class="form-control">
									</div>
								

									<div class="form-group">
										<label>Description</label>
										<textarea class="summernote-fixed-height" name="description" placeholder="Describe the event" ><?= $book->description; ?></textarea>
									</div>

									<div class="form-group">
										<label>Author</label>
										<input type="text" class="form-control" value="<?= $book->author; ?>" name="author" placeholder="Akash Wani">
									</div>

									<div class="form-group">
										<label>Link</label>
										<input type="text" class="form-control" value="<?= $book->link; ?>" name="link" placeholder="www.amazn.com/a2ReX">
									</div>

									<div class="form-group">
										<label>Price (in Rs.)</label>
										<input type="text" class="form-control" value="<?= $book->price; ?>" name="price" placeholder="250">
									</div>

									<div class="form-group">
										<label>Photo (Paste Url)</label>
										<input type="text" class="form-control" value="<?= $book->photo; ?>" name="photo" placeholder="http://images.com/14">
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-success" name="updateBook" value="Update Book" >
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