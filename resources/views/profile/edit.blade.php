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

            

                <div class="row">
                    
                             
                             <div class="apply-job">
  
                              <form class="form row">
                                <div class="col col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Full name..">
                                </div>
                                
                                <div class="col col-md-6">
                                    <input type="email" class="form-control" value="{{ $user->email }}" placeholder="Email..">
                                </div>
                                 <div class="col col-xs-12">
                                    <textarea class="form-control" placeholder="Something about yourself..">{{ $user->bio }}</textarea>
                                </div>
                               
                                <div class="col col-xs-12 file-upload">
                                <input type="file" name="file" id="file" class="form-control inputfile"  />
                                    <label for="file"><i class="fa fa-file-image-o"></i> <span>Upload your profile photo...</span></label>
                                </div>
                               
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit" class="btn">Update Profile</button>
                                </div>
                            </form>
                          </div>
                           

                    </div>
                
             </div>
        </section>
     


 

<br><br><br>
@endsection
