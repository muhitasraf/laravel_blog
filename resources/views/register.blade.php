@extends('master')

@section('content')
<form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
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
    <div class="text-center">
        <h2>Account Registration</h2>
    </div>
    <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" class="form-control fullname" id="fullname" name="fullname" value="{{old('fullname')}}" placeholder="Enter fullname">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control email" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="mobile_number">Phone Number</label>
        <input type="text" class="form-control mobile_number" id="mobile_number" name="mobile_number" value="{{old('mobile_number')}}" placeholder="Enter Phone Number">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control address" id="address" name="address" value="{{old('address')}}" placeholder="Enter Address">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control password" id="password" name="password" value="{{old('password')}}" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" class="form-control cpassword" id="cpassword" name="cpassword" value="{{old('cpassword')}}" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <label for="Image">Image</label>
        <input type="file" class="form-control photo" id="photo" name="photo" placeholder="Upload Photo">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection