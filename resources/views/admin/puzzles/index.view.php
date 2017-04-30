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
								<h6 class="rs-dashhead-subtitle text-uppercase">Checkmate in N moves puzzles!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Puzzles</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">List Of All Puzzles</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
									<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body">
								<p  class="m-b-lg">Here you can add different chessboard puzzles in which the user/player will checkmate the opponent in N moves!</p>
								<table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
									<thead>
							            <tr>
							                <th>Title</th>
							                <th>Description</th>
							                <th>Moves</th>
							                <th class="no-sort">Actions</th>
							            </tr>
							        </thead>
							        <tbody>

							         <?php foreach ($puzzles as $key => $puzzle) : ?>
							            <tr>
							                <td><?= $puzzle->title; ?></td>
							                <td><?= $puzzle->description; ?></td>
							                <td><?= $puzzle->moves; ?></td>
							                <td>
							                	<a href="<?= url('puzzles/edit/' . $puzzle->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							                	<a href="<?= url('puzzles/delete/' . $puzzle->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
								<h3 class="panel-title">Add New Puzzle</h3>
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

							
								<form action="<?= url('puzzles/store'); ?>" method="post">

									
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" class="form-control">
									</div>
								    
								    <div class="form-group">
										<label>Description</label>
										<input type="text" name="description" class="form-control">
									</div>
								
                                     <div class="form-group">
										<label>Player Color</label>
										<select name="player" class="rs-selectize-single" disabled="true">
											<option value="0">White</option>
											<option value="1">Black</option>       
										</select>
									</div><!-- /.form-group -->

									<input type="hidden" name="color" value="0" class="form-control">
									

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
										<input type="text" readonly="true" name="start_position" id="startfen" class="form-control">
									</div>

									<!-- start example HTML -->
									<div id="solution" >
										<script src="<?= url('assets/js/chess.js'); ?>"></script>
										<div id="finalboard" style="width: 400px"></div>
                                  


										<div class="form-group">
										<br>
											<label>Final Board FEN</label>
											<input type="text" readonly="true" name="final_position" id="finalfen" class="form-control">
										</div>

										<div class="form-group">
											<label>No. Of Moves</label>
											<input type="integer" readonly="true" name="moves" class="form-control" id="moves" value="0"  >
										</div>

										<div class="form-group">
											<label>Gameplay PGN</label>
											<input type="text" readonly="true" name="pgn" id="pgn" class="form-control" placeholder="Input PGN">
										</div><!-- /.form-group -->

									 </div>  

									   <div class="form-group">
										<label>Puzzle Level</label>
										<select name="level" class="rs-selectize-single">
											<option value="">Select A Level</option>
											<option value="0">Basic</option>
											<option value="1">Intermediate</option>
											<option value="2">Advance</option>
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
										<label>Time ( in seconds ) - Enter 0 for no Time</label>
										<input type="text" name="time" placeholder="Ex. : 10" class="form-control">
									</div>

									
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="addEvent" value="Create Puzzle" >
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