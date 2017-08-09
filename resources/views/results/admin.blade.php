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
                                <h3 class="rs-dashhead-title">Tournament Results</h3>
                                <!-- Begin Toolbar toggle button on mobile -->
                                <div class="toggle-toolbar-btn">
                                    <span class="fa fa-sort"></span>
                                </div><!-- /.toggle-toolbar-btn -->
                                <!-- End Toolbar toggle button on mobile -->
                            </div><!-- /.rs-dashhead-titles -->
                            <div class="rs-dashhead-toolbar">
                                <h6 class="rs-dashhead-subtitle text-uppercase">Add results to tournament!</h6>
                            </div><!-- /.rs-dashhead-toolbar -->
                        </div><!-- /.rs-dashhead-content -->
                        <!-- Begin Breadcrumb -->
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
                            <li><a href="javascript:void(0);">Library</a></li>
                            <li class="active">Results</li>
                        </ol>
                        <!-- End Breadcrumb -->
                    </div><!-- /.rs-dashhead -->
                    <!-- End Dashhead -->

                    <div class="container-fluid">
                    <!-- Begin Panel -->
                        <div class="panel panel-plain panel-rounded">
                            <div class="panel-heading">
                                <h3 class="panel-title">List Of Results</h3>
                                <!-- Begin Panel Toolbar -->
                                <div class="panel-toolbar">
                                    <ul class="list-inline m-a-0">
                                    <li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
                                    </ul>
                                </div><!-- /.panel-toolbar -->
                                <!-- End Panel Toolbar -->
                            </div><!-- /.panel-heading -->
                            <div class="panel-body">
                                <p  class="m-b-lg">Here you can add different tournament results!</p>
                                <table class="table table-b-t table-b-b datatable-roosa rs-table table-default">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Player 1</th>
                                            <th>Player 1 Points</th>
                                            <th>Player 2</th>
                                            <th>Player 2 Points</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     <?php foreach ($results as $key => $result) : ?>
                                        <tr>
                                            <td><?= $result->title; ?></td>
                                            <td><?= $result->date; ?></td>
                                            <td><?= $result->player_1; ?></td>
                                            <td><?= $result->player_1_points; ?></td>
                                            <td><?= $result->player_2; ?></td>
                                            <td><?= $result->player_2_points; ?></td>
                                            <td>
                                                <a href="/admin/results/edit/{{$result->id}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="/admin/results/delete/{{$result->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
                                <h3 class="panel-title">Add New Result</h3>
                             
                                <!-- Begin Panel Toolbar -->
                                <div class="panel-toolbar">
                                    <ul class="list-inline m-a-0">
                                        <li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar fa fa-chevron-up"></i></li>
                                    </ul>
                                </div><!-- /.panel-toolbar -->
                                <!-- End Panel Toolbar -->
                            </div><!-- /.panel-heading -->
                            <div class="panel-body p-t-xs">

                            
                                <form action="/admin/results" method="post">

                                  {{ csrf_field() }}

                                    
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                

                                    <div class="form-group has-feedback">
                                            <label class="control-label">Date</label>
                                            <input type="text" name="date" class="form-control rs-datepicker" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" readonly>
                                            <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label>Player 1 Name</label>
                                        <input type="text" name="player_1" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Player 1 Points</label>
                                        <input type="text" name="player_1_points" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Player 2 Name</label>
                                        <input type="text" name="player_2" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Player 2 Points</label>
                                        <input type="text" name="player_2_points" class="form-control">
                                    </div>



                                  

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" name="addEvent" value="Add Result" >
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