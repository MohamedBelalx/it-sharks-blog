@extends('../../home')
@section('content2')
<h1>create new category</h1>
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="mt-3">
        <label for="">Enter title</label>

        <input type="text" name="title" class="form-control" placeholder="enter title">
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