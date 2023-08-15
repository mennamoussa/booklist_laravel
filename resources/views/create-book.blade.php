@extends('book-layout')
@section('project-name')
    manmon
@endsection
@section('title')
    Create Book
@endsection
@section('content')
    <h1>{{ $page }}</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputText">title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="number" name= "price" class="form-control" placeholder="Enter price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputText">description</label>
            <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Enter description" value="{{ old('description') }}"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputText">categories</label>
            <select name="category" class="form-select" aria-label="Default select example" value="{{ old('category') }}>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="mb-3">
            <label for="formFile" class="form-label">upload book cover</label>
            <input class="form-control" name="pic" type="file" id="formFile">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
