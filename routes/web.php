<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/// method -> http request -> get , post
Route::get('/', function () {
    return view('welcome');
});

// create route /profile
Route::middleware(['auth', 'check-age'])->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('books');

    Route::post('/create-book', [BookController::class, 'create']);
    
    Route::get('/create-book', [BookController::class, 'show'])->name('create-book');
    
    Route::get('/books/{book}', [BookController::class, 'show_book'])->name('books-details');
    
    Route::delete('/books/{book}', [BookController::class, 'delete'])->name('delete');    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
