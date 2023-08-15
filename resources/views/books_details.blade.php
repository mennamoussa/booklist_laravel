@extends('book-layout')

@section('content')
    <h1>{{ $page }}</h1>
    <title>Book Details</title>
    @isset($book)
    <div class="card" style="width:200px; text-align:center;">
        <div class="card-body">
            <h4 class="card-title">title: {{ $book->title }}</h4>
            <p class="card-text">description: {{ $book->description }}</p>
            <p class="card-text">category: {{ $book->category->name ?? '-' }}</p>
            <p class="card-text" style="font-weight:bold;">price: {{ $book->price }}$</p>
        </div>
    </div>

    @else
        <p>No Book Found</p>
    @endisset
@endsection
