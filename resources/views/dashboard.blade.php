@extends('laayout')
@section('content')
<h3 class="d-flex flex-row">Welcome <h1 class="text-success">{{Auth::user()->name}}</h1></h3>
{{-- @if(Gate::allows('isAdmin'))
<a href="{{route('dashboard')}}" class="btn btn-sm btn-success">Admin Panel</a>
@endif --}}
{{-- @can('isAdmin')
<a href="{{route('dashboard')}}" class="btn btn-sm btn-success">Admin Panel</a>
@endcan --}}
{{-- @if(Gate::denies('isAdmin'))
<a href="{{route('dashboard')}}" class="btn btn-sm btn-success">Admin Panel</a>
@endif --}}
{{-- @cannot('isAdmin')
<a href="{{route('dashboard')}}" class="btn btn-sm btn-success">Admin Panel</a>
@endcannot --}}
<a href="{{route('dashboard')}}" class="btn btn-sm btn-success">Admin Panel</a>
<a href="{{route('profile', Auth::id())}}" class="btn btn-sm btn-secondary">Profile</a>
<a href="{{route('post',Auth::id())}}" class="btn btn-sm btn-warning">Post</a>
<a href="{{route('logout')}}" class="btn btn-sm btn-danger">Logout</a>
@endsection