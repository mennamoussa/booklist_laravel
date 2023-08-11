@extends('book-layout')

@section('content')
    <h1>{{ $page }}</h1>
    <title>Book Details</title>
    @isset($book)
    <div class="card" style="width:200px; text-align:center;">
        <div class="card-body">
            <h4 class="card-title">{{ $book->title }}</h4>
            <p class="card-text">{{ $book->description }}</p>
            <p class="card-text" style="font-weight:bold;">{{ $book->price }}</p>
        </div>
    </div>

    @else
        <p>No Book Found</p>
    @endisset
@endsection
