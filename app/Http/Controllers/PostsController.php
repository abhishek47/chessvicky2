<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        if($request->has('query')) {
           $q = $request->get('query');
           $posts = Post::latest();
           $words = explode(' ', $q);
           
           foreach ($words as $key => $word) {
               $posts = $posts->orWhere('title', 'LIKE', '%' . $word . '%')->orWhere('tags', 'LIKE',  '%' . $word . '%')->orWhere('body', 'LIKE',  '%' . $word . '%')->orWhere('author', 'LIKE',  '%' . $word . '%');
           }

           $posts = $posts->paginate(10);
        
        }
         else {
            
             $posts = Post::latest()
                       ->filter(request(['month', 'year']))
                       ->latest()->paginate(20);

         }              

       

        return view('posts.index', compact('posts', 'q'));
    }

     public function admin(Request $request)
    {   

        $articles = Post::all();

       
       $page = 'blog';

        return view('admin.blog.index', compact('articles', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $page = 'blog';
        return view('admin.blog.new', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $data = $request->all();

        dd($data);

        $data['slug'] = str_slug($data['title'], '-');
        $data['category_id'] = 0;

        auth()->user()->posts()->create($data);
        


        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $article = Post::find($id);
         $page = 'blog';
         return view('admin.blog.edit', compact('article', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $post = Post::find($id);
        
        $data = $request->all();
        $data['slug'] = str_slug($data['title'], '-');
        $data['category_id'] = 0;

        $post->update($data);
        


        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect('/blog');
    }
}
