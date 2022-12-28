@extends('master')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{$data['details_post'][0]['title']}}</h2>
        <p class="blog-post-meta">{{$data['details_post'][0]['created_at']}} by <a href="#">Mark</a></p>
        {!! $data['details_post'][0]['content'] !!}
    </div>
@stop
