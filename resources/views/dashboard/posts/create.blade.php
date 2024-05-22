@extends('../../home')
@section('content2')
<h1>create new post</h1>
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <label for="">Enter title</label>

        <input type="text" name="title" class="form-control" placeholder="enter title">
    </div>
    <div class="mt-3">
        <label for="">upload image</label>

        <input type="file" name="image" class="form-control" placeholder="enter title">
    </div>
    <div class="mt-3">
        <label for="">Enter category</label>
        <select name="category" class="form-select" aria-label="Default select example">
            <option selected disabled>Open this select menu</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <label for="">Enter Description</label>
        <textarea name="description" id="" class="form-control"></textarea>
    </div>

    <div class="mt-3">
        <button class="btn btn-dark w-100">Create</button>
    </div>
</form>
@endsection