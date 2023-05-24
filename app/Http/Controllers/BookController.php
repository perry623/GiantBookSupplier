<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function getCategories(){
        $categories = Category::all();
        return $categories->toarray();
    }
    public function showBooks()
    {
        $books = Book::paginate(5);

        $books->map(function ($item) {    
            $item['namaPublisher'] = $item->publisher->name;
            return $item;
        });    

        $categories = Category::all();
        // dd($categories->toarray());
        // dd($books->toarray());


        
        return view('home',[
            'categories'=>$this::getCategories(),
            'books' => $books]);
    }
    public function showDetail($book_id)
    {
        $book = Book::findOrFail($book_id);
        // dd($book->toarray());
        
        return view('bookdetail',[
            'categories'=>$this::getCategories(),
            'book' => $book->toarray()]);
    }
}
