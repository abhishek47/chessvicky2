@extends('layouts.app')

@section('content')

@if(request()->has('platform'))

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
@endif

    <!-- start team-single-content -->
        <section class="careers-vacancy-content section-padding" style="padding-bottom: 0px;">
           <div class="container">
    
    <div class="row panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">

      <div class="panel-heading"></div>
      <!-- left column -->
      <div class="col-md-3" style="padding-top: 20px;">
        <div class="text-center">
          <img  style="width: 100px;height: 100px;" 
            src="{{ Auth::user()->profile->photo != null ? Storage::url(Auth::user()->profile->photo) :  '//placehold.it/100' }}" 
            class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <form method="post" action="/profile/photo" enctype="multipart/form-data">
           {{ csrf_field() }}
            <input type="file" name="photo" class="form-control">
           <br>
            <input type="submit" class="btn btn-info" value="Update Image">
          </form>
          <form method="post" action="/profile/photo/remove" enctype="multipart/form-data">
           {{ csrf_field() }}
            <br>
            <input type="submit" class="btn btn-social" value="Remove Image">
          </form>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info" style="padding-top: 20px;">
       
       
        
        <form class="form-horizontal" role="form" method="post" action="/profile/update">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="col-lg-2 control-label">Full name:</label>
            <div class="col-lg-10">
              <input class="form-control" name="name" type="text" value="{{ $user->name }}">
            </div>
          </div>

           <div class="form-group">
            <label class="col-lg-2 control-label">Email:</label>
            <div class="col-lg-10">
              <input class="form-control" name="email" type="text" value="{{ $user->email }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">City:</label>
            <div class="col-lg-10">
              <input class="form-control" name="city" type="text" value="{{ $user->profile->city }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">State:</label>
            <div class="col-lg-10">
              <input class="form-control" name="state" type="text" value="{{ $user->profile->state }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Country:</label>
            <div class="col-lg-10">
              <input class="form-control" name="country" type="text" value="{{ $user->profile->country }}">
            </div>
          </div>

           <div class="form-group">
            <label class="col-lg-2 control-label">Rating:</label>
            <div class="col-lg-10">
              <input class="form-control" name="rating" type="text" value="{{ $user->profile->rating }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Bio:</label>
            <div class="col-lg-10">
              <textarea name="bio" class="form-control">{{ $user->profile->bio }}</textarea> 
            </div>
          </div>
          
         
         
          <div class="form-group">
            <label class="col-md-2 control-label">Username:</label>
            <div class="col-md-10">
              <input class="form-control" name="username" type="text" value="{{ $user->username }}" disabled="true">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
              <input type="submit" class="btn btn-success" value="Save Changes">
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
