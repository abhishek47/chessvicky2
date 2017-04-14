@extends('layouts.app')

@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>{{ Auth::user()->name }} | Home</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Profile</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>
@endsection
