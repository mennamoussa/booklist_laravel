<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CreateBookRequest;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        //dd(Auth::user());
        $books = Book::orderBy('id', 'desc')->paginate(5);
        $page = "books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]);
    }

    public function show (){
        $page = "create book";
        $categories = Category::all();
        return view('create-book', ['page' => $page, 'categories' => $categories]);
    }

    public function create(CreateBookRequest $request){
        //dd($request->all());
        //dd($request->file('pic'));
        $fileName = Book::uploadFile($request, $request->pic);
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
            "cat_id" => $request->category,
            "pic" => $fileName
        ]);
        return redirect()->route('books');
    }

    public function show_book($book){
        // dd($book);
        $book = Book::findOrFail($book);
        $page = "book details";
        return view('books_details', [
            "page" => $page,
            "book" => $book
        ]);
    }

    public function delete($book){
        $book = Book::find($book);
        $book->delete();
        return redirect()->route('books');
    }
}
