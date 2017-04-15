<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;
use App\ForumQuestion;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('posts.sidebar', function($view) {

             $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                          ->groupBy('year', 'month')
                          ->orderByRaw('min(created_at) desc')
                          ->get()
                          ->toArray();


             $latestPosts = Post::latest()->limit(3)->get();             

             $view->with(compact('archives', 'latestPosts'));             
        });

         view()->composer('forum.sidebar', function($view) {

             $latestQues = ForumQuestion::latest()->limit(3)->get();             

             $view->with(compact('latestQues'));             
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
