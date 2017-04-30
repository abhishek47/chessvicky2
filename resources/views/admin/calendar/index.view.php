<?php view("partials/header", compact('page')); ?>


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Chess Calendar</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">A calendar about all chess events and happenings!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Calendar</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">List Of Calendar Events</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
									<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body">
								<p  class="m-b-lg">Here you can add different events that are to be shown on calendar!For single day events the start date and end dates are same!</p>
								<table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
									<thead>
							            <tr>
							                <th>Title</th>
							                <th>Start date</th>
							                <th>End Date</th>
							                <th class="no-sort">Actions</th>
							            </tr>
							        </thead>
							        <tbody>

							         <?php foreach ($events as $key => $event) : ?>
							            <tr>
							                <td><?= $event->title; ?></td>
							                <td><?= $event->start_date; ?></td>
							                <td><?= $event->end_date; ?></td>
							                <td>
							                	<a href="<?= url('calendar/edit/' . $event->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							                	<a href="<?= url('calendar/delete/' . $event->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
							                </td>
							            </tr>
							          <?php endforeach; ?>  
							        </tbody>
								</table>
							</div><!-- .panel-body -->
						</div><!-- /.panel -->
						<!-- End Panel -->

						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Add New Event</h3>
								<p class="subtitle text-uppercase m-t">For single day event keep the start and end dates same.</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="<?= url('calendar/store'); ?>" method="post">

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" class="form-control">
									</div>
								

									<textarea name="description" class="summernote-fixed-height" title="Contents"></textarea>

									<div class="form-group has-feedback">
											<label class="control-label">Start Date</label>
											<input type="text" name="start_date" class="form-control rs-datepicker" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" readonly>
											<span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
									</div><!-- /.form-group -->


									<div class="form-group has-feedback">
											<label class="control-label">End Date</label>
											<input type="text" name="end_date" class="form-control rs-datepicker" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" readonly>
											<span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
									</div><!-- /.form-group -->

									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Create Event" >
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