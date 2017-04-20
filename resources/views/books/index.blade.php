@extends('layouts.app')


@section('content')


 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Books Store</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Books</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        
                
                <div class="col-xs-12">
                    @include('layouts.search', ['model' => 'books', 'data' => $books])
                </div>   
               
                <div class="row case-studies-grids">

                  @foreach($books as $book)
                    
                     @include('books.book')


                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $books->links() }}
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->



@endsection