@extends('../../home')
@section('content2')
<h1>edit post</h1>
<form action="{{route('posts.update',['id' => $post->id])}}" method="POST">
    @csrf
    <div class="mt-3">
        <label for="">Enter title</label>

        <input type="text" value="{{$post->title}}" name="title" class="form-control" placeholder="enter title">
    </div>
    <div class="mt-3">
        <label for="">Enter Description</label>
        <textarea name="description" id="" class="form-control">{{$post->description}}</textarea>
    </div>

    <div class="mt-3">
        <button class="btn btn-dark w-100">Update</button>
    </div>
</form>
@endsection