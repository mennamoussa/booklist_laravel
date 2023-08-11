@extends('book-layout')
@section('content')
    <h1>{{ $page }}</h1>
    @isset($books)
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <!-- <th scope="row">{{ $book["id"] }}</th> -->
                        <td>{{ $book['title'] }}</td>
                        <td>{{ $book['author'] }}</td>
                        <!-- <td><button type="button" class="btn btn-danger">X</button></td> -->
                        <td>
                            <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('delete', $book->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">X</button>
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
