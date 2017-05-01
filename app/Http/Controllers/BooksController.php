<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
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
           $books = Book::latest();
           $words = explode(' ', $q);
           
           foreach ($words as $key => $word) {
               $books = $books->orWhere('name', 'LIKE', '%' . $word . '%')->orWhere('description', 'LIKE',  '%' . $word . '%')->orWhere('author', 'LIKE',  '%' . $word . '%');
           }

           $books = $books->paginate(10);
        
        }
         else {
        $books = Book::latest()->paginate(9);
         }
        return view('books.index', compact('books', 'q'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin(Request $request)
    {
        
        $books = Book::all();
        $page = 'books';
        
        return view('admin.books.index', compact('books', 'q', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'books';
       return view('books.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect('/admin/books');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $page = 'books';
        return view('admin.books.edit', compact('book', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return redirect('/admin/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/admin/books');
    }
}
