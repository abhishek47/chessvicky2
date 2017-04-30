<?php view("partials/header", compact('page')); ?>


<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title">Chess Puzzles</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">Here you can add different chessboard puzzles in which the user/player will checkmate the opponent in N moves!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="<?= url('calendar'); ?>">Puzzles</a></li>
							<li class="active">Edit</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Edit Puzzle</h3>
								<p class="subtitle text-uppercase m-t">Here you can add different chessboard puzzles in which the user/player will checkmate the opponent in N moves!</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="<?= url('puzzles/update/' . $puzzle->id); ?>" method="post">

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" value="<?= $puzzle->title; ?>" class="form-control">
									</div>
								    
								    <div class="form-group">
										<label>Description</label>
										<input type="text" name="description" value="<?= $puzzle->description; ?>" class="form-control">
									</div>
								
                                     <div class="form-group">
										<label>Player Color</label>
										<select name="player" class="rs-selectize-single" disabled="true">
											<option value="0">White</option>
											<option value="1">Black</option>       
										</select>
									</div><!-- /.form-group -->

									<input type="hidden" name="color" value="0" class="form-control">

									<input type="hidden" name="fen" id="edit" value="<?= $puzzle->start_position; ?>" class="form-control">
									

									<!-- start example HTML -->
									<script src="<?= url('assets/js/chess.js'); ?>"></script>
									<div id="startboard" style="width: 400px"></div>
									<br>
									<input type="button" id="start1" value="Start Position" />
									<input type="button" id="clearInst1" value="Clear Board" />
									<input type="button" id="record" value="Record Initial Position" />
                                    
									<div class="form-group">
									<br>
										<label>Initial Board FEN</label>
										<input type="text" readonly="true" name="start_position" value="<?= $puzzle->start_position; ?>" id="startfen" class="form-control">
									</div>

									<!-- start example HTML -->
									<div id="solution" >
										<script src="<?= url('assets/js/chess.js'); ?>"></script>
										<div id="finalboard" style="width: 400px"></div>
                                  


										<div class="form-group">
										<br>
											<label>Final Board FEN</label>
											<input type="text" readonly="true" name="final_position" value="<?= $puzzle->final_position; ?>" id="finalfen" class="form-control">
										</div>

										<div class="form-group">
											<label>No. Of Moves</label>
											<input type="integer" readonly="true" name="moves" class="form-control" id="moves" value="<?= $puzzle->moves; ?>"  >
										</div>

										<div class="form-group">
											<label>Gameplay PGN</label>
											<input type="text" readonly="true" name="pgn" id="pgn" class="form-control" value="<?= $puzzle->solution; ?>" placeholder="Input PGN">
										</div><!-- /.form-group -->

									 </div>  

									   <div class="form-group">
										<label>Puzzle Level</label>
										<select name="level" class="rs-selectize-single">
											<option value="">Select A Level</option>
											<option value="0" <?= $puzzle->level == 0 ? 'selected' : ''; ?> >Basic</option>
											<option value="1" <?= $puzzle->level == 1 ? 'selected' : ''; ?> >Intermediate</option>
											<option value="2" <?= $puzzle->level == 2 ? 'selected' : ''; ?> >Advance</option>
										</select>
									</div><!-- /.form-group -->


									<div class="form-group">
										<label>Hint</label>
										<textarea name="hint" class="form-control"><?= $puzzle->hint; ?></textarea> 
									</div>

									<div class="form-group">
										<label>Points</label> 
										<input type="text" name="points" value="<?= $puzzle->points; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Time ( in seconds ) - Enter 0 for no Time</label>
										<input type="text" name="time" value="<?= $puzzle->time; ?>" placeholder="Ex. : 10" class="form-control">
									</div>

									
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Update Puzzle" >
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