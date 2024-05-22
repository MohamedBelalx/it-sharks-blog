@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{route('category.index')}}">show Category</a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('category.create')}}">Create Category</a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('posts.index')}}">show posts</a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('posts.create')}}">Create posts</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @yield('content2')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection