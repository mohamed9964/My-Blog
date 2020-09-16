@extends('mylayouts.default')
@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-8">
            <h1>Create a new post</h1>
            {{-- {!! Form::open(['url' => 'posts', 'method' => 'post']) !!}
            <div class="form-group">
            {{!! Form::label('Title') !!}}
            {{!! Form::text('title',"",['placeholder' => 'Write Ur Title...'])!!}}
            </div>
            <div class="form-group">
            {{!! Form::label('Body') !!}}
            {{!! Form::textarea('body',"",['placeholder' => ''])!!}}
            </div>
            {{!! Form::submite('Save')!!}}
            {!! Form::close() !!} --}}

        <form method="post" action="{{ route('posts.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" id="name" placeholder="Write Ur Title...">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br>

            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" name="body" id="message" rows="4" placeholder="Write Ur Post..."></textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br>

            <input type="submit" name="send" value="Publish" class="btn btn-dark btn-block">
        </form>
        </div>
    </div>
</div>
@endsection