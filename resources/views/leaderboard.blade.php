@extends('layouts.app')


@section('content')

@if(!request()->has('platform'))
<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>ChessVicky Leaderboards</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Leaderboard</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
@endif
        <div class="page-wrapper blog-single-page">

        <!-- start blog-with-sidebar-section -->
        <section class="blog-with-sidebar-section section-padding">
            <div class="container">

                <div class="row blog-with-sidebar">

                    <div class="blog-content col col-lg-9 col-md-8">

                       @include('layouts.search', ['model' => 'user', 'data' => $profiles])


                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th class="hidden-xs">#</th>
                                            <th>Name</th>
                                            <th class="hidden-xs">Email</th>
                                            <th class="hidden-xs">Member Since</th>
                                            <th>Skillometer</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      

                                     @foreach($profiles as $key => $p)
              
                                        
                                      
                                        <tr class="{{ $p->user == \Auth::user() ? 'active' : '' }}" style="color: #000;">
                                            
                                           
                                            <td>
                                                
                                                <p>{{ ($key+1) + ($perpage * ($pno-1))  }}</p>
                                                
                                            </td>
                                             
                                             <td class="hidden-xs">

                                                  @if($p->photo)
                                                    <img style="width: 30px;height: 30px;" src="{{ $p->photo }}" alt="" class="img-circle thumb-sm">
                                                  @else
                                                   <span class="chatter_avatar_circle" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($p->user->name) ?>;width: 30px;height: 30px;font-size: 18px;line-height: 28px;">
                                                        {{ ucfirst(substr($p->user->name, 0, 1)) }}
                                                    </span>
                                                  @endif  
                                            </td>
                                             
                                            <td>
                                               <a href="{{ url('/profile/' . $p->user->username) }}">
                                                <p><b>{{ $p->user->name }}</b></p>
                                               </a> 
                                            </td>

                                            <td class="hidden-xs">
                                               
                                                <p>{{ $p->user->email }}</p>
                                              
                                            </td>

                                            <td class="hidden-xs">
                                             
                                                <p>{{ $p->user->created_at->diffForHumans() }}</p>
                                            
                                            </td>
                                            <td>
                                               <p>{{ $p->points }}</p>
                                            </td>
                                        </tr>
                                      
                                      @endforeach
                                       


                                    </tbody>
                                </table>

                            </div>


                       
   
 

                        <div class="row page-pagination-wrapper">
                            <div class="col col-xs-12">
                                    @if(isset($q))
                                 {{ $profiles->appends(['query' => $q])->links() }}
                                @else 
                                    {{ $profiles->links() }}
                                @endif
                                
                            </div>
                        </div>    
                        
                        

                                     
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                        
                        @include('forum.sidebar')
                        
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-sidebar-section -->

        </div>

@endsection