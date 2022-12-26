@extends('master')
@section('content')
    {{-- @dd($data['details_post'][0]['title']) --}}
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        From the Firehose hh
    </h3>
    <div class="blog-post">
        <h2 class="blog-post-title">{{$data['details_post'][0]['title']}}</h2>
        <p class="blog-post-meta">{{$data['details_post'][0]['created_at']}} by <a href="#">Mark</a></p>
        @php
            echo $data['details_post'][0]['content']
        @endphp
    </div>
@stop
