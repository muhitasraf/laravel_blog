@extends('master')
@section('content')
    <div class="blog-post">
        {{-- <img class="card-img-right flex-auto d-none d-md-block" style="width:800px;height:700px;padding:8px;" src="{{url('uploads/post_images/'.$details_post->thumbnail_path)}}"  alt="Card image cap"> --}}
        <h2 class="blog-post-title">{{$details_post->title}}</h2>
        <p class="blog-post-meta pb-2">{{$details_post->category->name}} >> By <a href="#">{{$details_post->user->fullname}} </a>at {{$details_post->created_at}}</p>
        {!! $details_post->content !!}
    </div>
@stop
