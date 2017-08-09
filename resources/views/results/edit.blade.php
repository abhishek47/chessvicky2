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
								<h3 class="rs-dashhead-title">Edit Result</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<h6 class="rs-dashhead-subtitle text-uppercase">Editing Result!</h6>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="/admin/results">Results</a></li>
							<li class="active">Edit</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<div class="container-fluid">
					
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Edit Result</h3>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

							
								<form action="/admin/results/{{$result->id}}" method="post">

								{{ csrf_field() }}

									  <div class="form-group">
                                        <label>Round</label>
                                        <select class="form-control" name="round">
                                            @for($i = 1; $i < 20; $i++)
                                                <option value="{{ $i }}" >Round {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                


                                    <div class="form-group">
                                        <label>Player 1 Name</label>
                                        <input type="text" name="player_1" class="form-control" value="{{ old('player_1')?:$result->player_1 }}">
                                    </div>

                                   
                                    <div class="form-group">
                                        <label>Player 2 Name</label>
                                        <input type="text" name="player_2" class="form-control" value="{{ old('player_2')?:$result->player_2 }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Result</label>
                                        <input type="text" name="result" class="form-control" value="{{ old('result')?:$result->result }}">
                                    </div>



                                  

                                    

								


									<div class="form-group">
										<input type="submit" class="btn btn-success" name="updateBook" value="Update Result" >
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