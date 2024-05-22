@extends('../../home')
@section('content2')
<h1>create new category</h1>
<form action="{{route('category.update',['id' => $category->id])}}" method="POST">
    @csrf
    <div class="mt-3">
        <label for="">Enter title</label>

        <input type="text" value="{{$category->title}}" name="title" class="form-control" placeholder="enter title">
    </div>
    <div class="mt-3">
        <label for="">Enter Description</label>
        <textarea name="description" id="" class="form-control">{{$category->description}}</textarea>
    </div>

    <div class="mt-3">
        <button class="btn btn-dark w-100">Update</button>
    </div>
</form>
@endsection