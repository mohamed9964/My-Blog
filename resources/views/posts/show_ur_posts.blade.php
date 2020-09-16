@extends('mylayouts.default')
@section('content')
<div class="container" style="margin: auto 60vh; color:#c3cfdc;">
@foreach ($postes as $post)
    <div class="card text-white bg-dark mb-3 text-center" style="max-width: 50%;">
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
@endforeach
{{-- <div style="margin: 0 25vh">{{$posts->links()}}</div>
</div> --}}
@endsection