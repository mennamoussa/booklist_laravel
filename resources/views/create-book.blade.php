@extends('book-layout')
@section('project-name')
    manmon
@endsection
@section('title')
    Create Book
@endsection
@section('content')
    <h1>{{ $page }}</h1>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputText">title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="number" name= "price" class="form-control" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="exampleInputText">description</label>
            <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Enter description"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
