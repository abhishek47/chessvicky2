@extends('layouts.app')



@section('content')

 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Tournament Results</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Results</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

  <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        

               
                <div class="row case-studies-grid">


                  @foreach($results as $key => $resultGroup)

                  <div class="page-header">
                    <h1>Round {{ $key }}</h1>
                  </div>

                  	@foreach($resultGroup  as $result)
                    
                      <div class="col col-md-4 col-xs-12" style="padding: 10px;padding-top: 0px;margin-bottom: 10px;">
						    <div class="grid panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #f5f5f5;height: 160px;">
						        <div class="panel-heading" style="background: #460063">
						        </div>
						        <div class="details" style="padding: 0px 10px 10px 10px;font-size: 18px;">
						           <p style="padding-top: 12px;"><b>Player 1 : </b> {{ $result->player_1 }}</p>
						           <p><b>Player 2 : </b> {{ $result->player_2 }}</p>
						           <p><b>Result : </b> {{ $result->result }}</p>
						           
						        </div>
						    </div>
						</div>

						@endforeach




                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->


@endsection