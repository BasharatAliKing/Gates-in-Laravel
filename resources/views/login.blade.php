@extends('laayout')
@section('content')
    <div class="col-md-4 m-5 p-4 border">
        <h3>Login</h3>
        <form action="{{route('loginmatch')}}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="" class="form-label">Email:</label>
                <input type="text" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror">
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="" class="form-label">Password:</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <button class="btn btn-sm btn-success mt-2">Submit</button>
        </form>
    </div>
@endsection