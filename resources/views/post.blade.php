@extends('master')
@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        From the Firehose
    </h3>
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post['title']}}</h2>
        <p class="blog-post-meta">{{$post['created_at']}} by <a href="#">Mark</a></p>
        @php
            echo $post['description']
        @endphp
    </div>
@stop