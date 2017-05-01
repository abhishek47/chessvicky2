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
								<h3 class="rs-dashhead-title">Add Quiz Questions</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">1000s Of Questions On Chess</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="/admin/quiz/list">Quiz</a></li>
							<li class="active">Edit</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Edit Quiz</h3>
								<p class="subtitle text-uppercase m-t">Here you can edit information of the quiz!!</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-down"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs" style="display: none;">

							
								<form action="/admin/quiz/update/{{$quiz->id}}" method="post">

								   {{ csrf_field() }}

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" value="<?= $quiz->title; ?>" class="form-control">
									</div>
								

									<textarea name="description" class="summernote-fixed-height" title="Contents"><?= $quiz->description; ?></textarea>

									

								   <div class="form-group">
										<label>Quiz Level</label>
										<select class="rs-selectize-single">
											<option value="">Select A Level</option>
											<option value="0" <?= $quiz->level == 0 ? 'selected' : ''; ?> >Basic</option>
											<option value="1" <?= $quiz->level == 1 ? 'selected' : ''; ?> >Intermediate</option>
											<option value="2" <?= $quiz->level == 2 ? 'selected' : ''; ?> >Advance</option>
										</select>
									</div><!-- /.form-group -->


									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addQuiz" value="Update Quiz" >
									</div>




									
									

									


								</form>
							</div><!-- .panel-body -->
						</div><!-- /.panel -->
						<!-- End Panel -->


						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">Quiz Questions</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
									<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body">
								<p  class="m-b-lg">List of all questions belonging to this quiz!</p>
								<table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
									<thead>
							            <tr>
							                <th>Question #</th>
							                <th>Points</th>
							                <th>Time</th>
							                <th class="no-sort">Actions</th>
							            </tr>
							        </thead>
							        <tbody>

							         <?php foreach ($questions as $key => $question) : ?>
							            <tr>
							                <td><?= $question->id; ?></td>
							                <td><?= $question->points; ?></td>
							                <td><?= $question->time; ?></td>
							                <td>
							                	<a href="/admin/quiz/question/edit/{{$question->id}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							                	<a href="/admin/quiz/question/delete/{{$question->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
								<h3 class="panel-title">Add Questions</h3>
								<p class="subtitle text-uppercase m-t">Add Quiz Questions here.</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="/admin/quiz/question/store" method="post">

								 {{ csrf_field() }}

									
									<div class="form-group">
										<label>Question</label>
										<textarea name="question" class="summernote-fixed-height"></textarea> 
									</div>

									<div class="form-group">
										<label>Option A</label>
										<input type="text" name="option_a" class="form-control">
									</div>

									<div class="form-group">
										<label>Option B</label>
										<input type="text" name="option_b" class="form-control">
									</div>

									<div class="form-group">
										<label>Option C</label>
										<input type="text" name="option_c" class="form-control">
									</div>

									<div class="form-group">
										<label>Option D</label>
										<input type="text" name="option_d" class="form-control">
									</div>

									  <div class="form-group">
										<label>Answer</label>
										<select name="answer" class="rs-selectize-single">
											<option value="">Select Answer</option>
											<option value="0">Option A</option>
											<option value="1">Option B</option>
											<option value="2">Option C</option>
											<option value="3">Option D</option>
										</select>
									</div><!-- /.form-group -->

									<div class="form-group">
										<label>Hint</label>
										<textarea name="hint" class="form-control"></textarea> 
									</div>

								
									<div class="form-group">
										<label>Points</label>
										<input type="text" name="points" class="form-control">
									</div>

									<div class="form-group">
										<label>Time ( in seconds )</label>
										<input type="text" name="time" placeholder="Ex. : 10" class="form-control">
									</div>

									<div class="form-group">
										<input type="hidden" name="quiz_id" value="<?= $quiz->id; ?>" class="form-control">
									</div>
								

									

									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Add Question" >
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