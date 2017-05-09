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
                    <div class="col col-xs-12">
                        
                           
                            <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                <h4>Filter Quizzes</h4>
                            </div>
                            <div class="panel-body">
                             <form class="form-inline" method="get" action="/puzzles"> 
                               <div class="form-group"> 
                                <label>Difficulty Level : </label> &nbsp;
                                  <select class="form-control" name="level">
                                  <option value="0" {{ $level == 0 ? 'selected' : '' }}>All</option>
                                  <option value="1" {{ $level == 1 ? 'selected' : '' }}>Level 1</option>
                                  <option value="2" {{ $level == 2 ? 'selected' : '' }}>Level 2</option>
                                  <option value="3" {{ $level == 3 ? 'selected' : '' }}>Level 3</option>
                                  <option value="4" {{ $level == 4 ? 'selected' : '' }}>Level 4</option>
                                </select>
                               </div>  &nbsp; | &nbsp;
                               <button type="submit" class="btn btn-success">Filter</button> &nbsp; | &nbsp;
                                <a href="/puzzles/random" class="btn btn-social">Solve Random Puzzle</a>
                            </form>

                            </div>
                        </div> 
                      
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

@section('scripts')

<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://developers.facebook.com/docs/',
  }, function(response){});
}
</script>

@endsection