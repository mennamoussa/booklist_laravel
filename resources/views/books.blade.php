@extends('book-layout')
@section('content')
    <h1>{{ $page }}</h1>
    @isset($books)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <th scope="row">{{ $book["id"] }}</th>
                        <td>{{ $book['title'] }}</td>
                        <td>{{ $book['price'] }}</td>
                        <td>{{ $book->category->name ?? '-' }}</td>
                        <td><img width="40px" height="60px" src="{{ asset('storage/books/') ."/". $book->pic}}" alt=""></td>
                        <td>
                        <form action="{{route('books-details', $book['id'])}}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success">👀</button>
                        </form>
                        <form action="{{route('delete', $book['id'])}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{$books->links()}}
    @else
        <p> No Books</p>
        @endif
@endsection
