@extends('laayout')
@section('content')
  <div class="col-md-4 mt-5">
    <table class="table table-bordered">
      <thead class="table-striped">
        <tr><th><h2>Profile</h2></th></tr>
      </thead>
        <tr><td>Name: <b>{{$user->name}}</b> </td></tr>
        <tr><td>Email: <b>{{$user->email}}</b> </td></tr>
        <tr><td><a href="{{route('dashboard')}}" class="bg-secondary text-white btn btn-sm">Back</a></td></tr>
      </table>
  </div>
@endsection