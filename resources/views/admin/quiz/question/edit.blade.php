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
								<h3 class="rs-dashhead-title">Edit Quiz Question</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">Edit a quiz question here!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="/admin/quiz">Quiz</a></li>
							<li class="active">Edit</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Edit Question</h3>
								<p class="subtitle text-uppercase m-t">Edit a quiz question here!!</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="/admin/quiz/question/update/{{$question->id}}" method="post">

								  {{ csrf_field() }}

									
									
									<div class="form-group">
										<label>Question</label>
										<textarea name="question" class="summernote-fixed-height"><?= $question->question; ?></textarea> 
									</div>

									<div class="form-group">
										<label>Option A</label>
										<input type="text" name="option_1" value="<?= $question->option_1; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Option B</label>
										<input type="text" name="option_2" value="<?= $question->option_2; ?>"  class="form-control">
									</div>

									<div class="form-group">
										<label>Option C</label>
										<input type="text" name="option_3" value="<?= $question->option_3; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Option D</label>
										<input type="text" name="option_4" value="<?= $question->option_4; ?>" class="form-control">
									</div>

									
								   <div class="form-group">
										<label>Answer</label>
										<select name="answer" class="rs-selectize-single">
											<option value="">Select Answer</option>
											<option value="0" <?= $quiz->answer == 0 ? 'selected' : ''; ?> >Option A</option>
											<option value="1" <?= $quiz->answer == 0 ? 'selected' : ''; ?> >Option B</option>
											<option value="2" <?= $quiz->answer == 0 ? 'selected' : ''; ?> >Option C</option>
											<option value="3" <?= $quiz->answer == 0 ? 'selected' : ''; ?> >Option D</option>
										</select>
									</div><!-- /.form-group -->

									<div class="form-group">
										<label>Hint</label>
										<textarea name="hint" class="form-control"><?= $question->hint != null ? $question->hint : '--'; ?></textarea> 
									</div>

								
									<div class="form-group">
										<label>Points</label>
										<input type="text" name="points" value="<?= $question->points; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Time ( in seconds )</label>
										<input type="text" name="time" value="<?= $question->time; ?>" placeholder="Ex. : 10" class="form-control">
									</div>

									<div class="form-group">
										<input type="hidden" name="quiz_id" value="<?= $question->quiz_id; ?>" class="form-control">
									</div>
								

									

									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Update Question" >
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