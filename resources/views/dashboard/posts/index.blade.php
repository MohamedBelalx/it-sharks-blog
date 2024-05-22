@extends('../../home')
@section('content2')
<h1>show posts</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td><img width="50" src="{{asset($post->image)}}" alt=""></td>
            <td><a href="{{route('posts.edit',['id' => $post->id])}}"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="{{route('posts.destroy',['id' => $post->id])}}"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection