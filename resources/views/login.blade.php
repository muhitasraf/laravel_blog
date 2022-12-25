@extends('master')

@section('content')
<form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control email" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control password" id="password" name="password" value="{{old('password')}}" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection