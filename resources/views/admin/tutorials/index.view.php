<?php view("partials/header", compact('page')); ?>


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Tutorials</h3>
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
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Tutorials</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">All Tutorials</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
									<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body">
								<p  class="m-b-lg">Tutorials are the articles that are intended to teach something to the users!</p>
								<table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
									<thead>
							            <tr>
							                <th>Title</th>
							                <th>Author</th>
							                <th>Date</th>
							                <th>Published</th>
							                <th class="no-sort">Actions</th>
							            </tr>
							        </thead>
							        <tbody>

							         <?php foreach ($tutorials as $tutorial) : ?>
							            <tr>
							                <td><?= $tutorial->title; ?></td>
							                <td><?= $tutorial->author; ?></td>
							                <td>Created <?= $tutorial->created_at; ?></td>
							                <td>Published <?= $tutorial->published_at; ?></td>
							                <td>
							                    <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View</a>
							                	<a href="<?= url('tutorials/edit/' . $tutorial->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							                	<a href="<?= url('tutorials/delete/' . $tutorial->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
							                </td>
							            </tr>
							          <?php endforeach; ?>  
							        </tbody>
								</table>
							</div><!-- .panel-body -->
						</div><!-- /.panel -->
						<!-- End Panel -->

						


					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->







<?php view("partials/footer", compact('page')); ?>