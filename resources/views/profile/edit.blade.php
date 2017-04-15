@extends('layouts.app')

@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>{{ Auth::user()->name }} | Edit</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Edit Profile</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

    <!-- start team-single-content -->
        <section class="careers-vacancy-content section-padding" style="padding-bottom: 0px;">
           <div class="container">
    
    <div class="row panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">

      <div class="panel-heading"></div>
      <!-- left column -->
      <div class="col-md-3" style="padding-top: 20px;">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <form>
            <input type="file" class="form-control">
           <br>
            <input type="button" class="btn btn-info" value="Update Image">
          </form>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info" style="padding-top: 20px;">
       
       
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-2 control-label">Full name:</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" value="{{ $user->name }}">
            </div>
          </div>

           <div class="form-group">
            <label class="col-lg-2 control-label">Email:</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" value="{{ $user->email }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">City:</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">State:</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Country:</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Bio:</label>
            <div class="col-lg-10">
              <textarea class="form-control">{{ $user->profile->bio }}</textarea> 
            </div>
          </div>
          
         
         
          <div class="form-group">
            <label class="col-md-2 control-label">Username:</label>
            <div class="col-md-10">
              <input class="form-control" type="text" value="{{ $user->username }}" disabled="true">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
              <input type="button" class="btn btn-success" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>

        </section>
     


 

<br><br><br>
@endsection
