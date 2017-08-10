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

                   <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>Table No.</th>
                                            <th>Player 1 </th>
                                            <th>Player 2 </th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                  	    @foreach($resultGroup  as $result)
                    
                       		<tr>
                       			<td>{{ $result->table }}</td>
                       			<td>{{ $result->player_1 }}</td>
                       			<td>{{ $result->player_2 }}</td>
                       			<td>{{ $result->result }}</td>	
                       		</tr>

						@endforeach
   

                  </tbody>

                  </table>

                  </div>



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