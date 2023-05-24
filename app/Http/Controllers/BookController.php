<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories(){
        $categories = Category::all();
        return $categories->toarray();
    }

    public function showBooks(){
        $books = Book::paginate(5);

        $books->map(function ($item) {    
            $item['namaPublisher'] = $item->publisher->name;
            return $item;
        });    

        $categories = Category::all();       
        return view('home',[
            
            'name'=> 0,
            'categories'=>$this::getCategories(),
            'books' => $books]);
    }

    public function showBooksCategory($category_id){
        $books = Book::whereHas('categories', function ($query) use ($category_id) {
            $query->where('category_id', $category_id);
        })->with('categories')->paginate(5);

        $nama = Category::findOrFail($category_id)->category;
        return view('home',[
            'name'=> $nama,
            'categories'=>$this::getCategories(),
            'books' => $books]);
    }

    public function showPublisherDetails($publisher_id){
        $books = Book::where('publisher_id',$publisher_id)->paginate(5);
        
        $publisher = Publisher::findOrFail($publisher_id);
        return view('publisherdetail',[
            'publisher'=>  $publisher->toarray(),
            'categories'=>$this::getCategories(),
            'books' => $books]);
    }



    public function showDetail($book_id)
    {
        $book = Book::findOrFail($book_id);
        $book['namaPublisher'] = $book->publisher->name;


        return view('bookdetail',[
            'categories'=>$this::getCategories(),
            'book' => $book->toarray()]);
    }

    public function showPublisher()
    {
        $publishers = Publisher::paginate(5);
        
        return view('publisher',[
            'categories'=>$this::getCategories(),
            'publishers'=>$publishers]);
    }

    public function contact()
    {
       
        
        return view('contact',[
            'categories'=>$this::getCategories(),
            ]);
    }
}
