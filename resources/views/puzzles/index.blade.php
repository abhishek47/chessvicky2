@extends('layouts.app')


@section('content')


 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Checkmate Puzzles</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Puzzles</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        

               <div class="row">
                    <div class="col col-sm-10">
                        
                            {{ $puzzles->links() }}
                      
                    </div>

                    <div class="col col-sm-2">
                        
                            <a class="btn btn-primary" style="margin-top: 19px;" href="/puzzles/random"><b>Solve Random Puzzles</b></a>
                      
                    </div>
                </div>
                <div class="row case-studies-grids">

                  @foreach($puzzles as $puzzle)
                    
                     @include('puzzles.puzzle')


                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $puzzles->links() }}
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->



@endsection