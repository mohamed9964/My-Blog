@extends('mylayouts.default')

@section('content')
<div style="margin: 20vh auto;">
    <div class="jumbotron">
        <div class="container text-center">
            <h3>Welome <span style="font-weight: normal; color: #00BCD4;">{{ Auth::user()->name }}</span> in My Blog</h3><br>
            <p>Add Your Post And Read Posts of Other Members</p><br>
            <a href="{{ route('posts.create') }}" type="button" class="btn btn-info" style="color: #fdf9f9;">Add Post</a>
            <a href="{{ route('show_all') }}" type="button" class="btn btn-info" style="color: #fdf9f9;">List Posts</a>
            <a href="{{ route('posts.index') }}" type="button" class="btn btn-info" style="color: #fdf9f9;">DashBoard</a>
        </div>
    </div>
</div @endsection