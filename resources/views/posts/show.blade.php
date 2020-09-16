@extends('mylayouts.default')
@section('content')
<div class="card text-white bg-dark mb-3 text-center" style="margin: 20vh auto; color:#c3cfdc; height:50vh">
    <div class="card-header">
        <h5>Post #{{$post->id}}</h5>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{$post->title}}</h4>
        <p class="card-text">{{$post->body}}.</p>
    </div>
    <div class="card-footer text-muted">
        <p>Created at : {{$post->created_at}}</p>
    </div>
</div>
@endsection