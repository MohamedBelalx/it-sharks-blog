@extends('../../home')
@section('content2')
<h1>show category</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td><a href="{{route('category.edit',['id' => $category->id])}}"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="{{route('category.destroy',['id' => $category->id])}}"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection