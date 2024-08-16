@extends('laayout')
@section('content')
  <div class="col-md-10 mt-5 border p-3">
    <h3 class="p-3">Posts</h3>
    <table class="table table-bordered">
     <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td><a href="{{route('updatepost', $post->id)}}" class="btn btn-sm btn-success">Update</a></td>
            <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>
    @endforeach
    </table>
  </div>
@endsection