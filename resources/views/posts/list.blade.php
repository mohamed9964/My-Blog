@extends('mylayouts.default')
@section('content')

<table class="table table-hover table-dark" style="text-align: center">
  <thead>
    <tr style="background-color: #1e2529">
      <th scope="col">#Post</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">User Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->User->name}}</td>
      <td>{{$post->User->email}}</td>
      <td>{{$post->user_id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td><a href="{{route("posts.show",$post->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-eye" aria-hidden="true" style="color: #212c69"></i></a></td>
      <td><a href="{{route("posts.edit",$post->id)}}" class="btn btn-success btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-edit"></i></a></td>
      <td>
        <form action="{{route("posts.destroy",$post->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
             <button type="submit" class="btn btn-danger btn-simple btn-xs">
            <i class="fa fa-times fa"></i></button>
        </form>
      </td>
    </tr>
      @endforeach
    <tr>
        <td colspan="9" style="padding: 0"><a href="{{ route('posts.create') }}"><button class="btn btn-dark" type="submit" style="width: 100%; border: 0;">Add Post</button></a></td>
    </tr>  
  </tbody>
</table>    
@endsection