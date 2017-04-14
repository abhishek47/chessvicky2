<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;

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
