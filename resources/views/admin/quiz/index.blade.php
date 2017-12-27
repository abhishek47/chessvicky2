@extends('admin.master')

@section('content')


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Quizzes</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">Add up 1000's Of Questions!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Quiz</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">List Of Quizzes</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
									<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body">
								<p  class="m-b-lg">Here you can add different Quizzes with different levels and badges!</p>
								<table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
									<thead>
							            <tr>
							                <th>Title</th>
							                <th>No. Of Questions</th>
							                <th>Level</th>
							                <th class="no-sort">Actions</th>
							            </tr>
							        </thead>
							        <tbody>

							         <?php foreach ($quizzes as $key => $quiz) : ?>
							            <tr>
							                <td><?= $quiz->title; ?></td>
							                <td><?= count($quiz->questions); ?></td>
							                <td><?= $quiz->level; ?></td>
							                <td>
							                	<a href="/admin/quiz/edit/{{$quiz->id}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							                	<a href="/admin/quiz/delete/{{$quiz->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
								<h3 class="panel-title">Add New Quiz</h3>
								<p class="subtitle text-uppercase m-t">Add quizzes here.</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="/admin/quiz/store" method="post">

								{{ csrf_field() }}

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" class="form-control">
									</div>
								

									<textarea name="description" class="summernote-fixed-height" title="Contents"></textarea>

									<input type="hidden" value="0" name="coins" class="form-control">

								   <div class="form-group">
										<label>Quiz Level</label>
										<select name="level" class="rs-selectize-single">
											<option value="">Select A Level</option>
											<option value="0">Basic</option>
											<option value="1">Intermediate</option>
											<option value="2">Advance</option>
										</select>
									</div><!-- /.form-group -->


									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Create Quiz" >
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




@endsection