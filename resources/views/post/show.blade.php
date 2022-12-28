@extends('dashboard.index')

@section('content')

<div class="row">
    <div class="col-md-4">
        <a href="{{route('post.index')}}" class="btn btn-info mb-2">
            All Post
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 p-4">

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
            <div class="row mb-2">
                <div class="col-md-2"> <h4>Post Title</h4></div>
                <div class="col-md-10">
                    <h4>: {{$single_post[0]['title']}}</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><h4>Post Category</h4></div>
                <div class="col-md-10">
                    <h4>: {{$single_post[0]['category']->category_slug}}</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"> <h4>Post Image</h4> </div>
                <div class="col-md-10">
                    :<img src="{{url('uploads/post_images/'.$single_post[0]['thumbnail_path'])}}" height="300px" width="400px" alt="" >
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-2"><h4>Post Detils</h4></div>
                <div class="col-md-10">
                    : {!! $single_post[0]['content'] !!}
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-2"> <h4>Post Tag</h4></div>
                <div class="col-md-10">
                    : {{'Post post_keywords'}}
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-2"> <h4>Post Status</h4> </div>
                <div class="col-md-10">
                        @if($single_post[0]['status']==1)
                            <h4>: {{'Active'}}</h4>
                        @else
                            <h4>: {{'In-Active'}}</h4>
                        @endif
                </div>
            </div>

            <div class="row mb-4">
                
            </div>
    </div>
</div>

@stop
