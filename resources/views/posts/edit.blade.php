@extends('mylayouts.default')
@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-8">
            <h1>Updata Your post</h1>
            <form method="post" action="{{ route('posts.update',$post->id) }}">

                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="name" value="{{$post->title}}">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" name="body" id="message" rows="4">{{$post->body}}</textarea>
                    @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>

                <input type="submit" name="update" value="Update" class="btn btn-dark btn-block">
            </form>
        </div>
    </div>
</div>
@endsection