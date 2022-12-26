@extends('master')

@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        From the Firehose
    </h3>
    @foreach ($all_post as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{!! \Illuminate\Support\Str::limit(strip_tags($post->content),280,'<a href="'.url('post/details/'.$post->id).'"> Continue reading</a>') !!}</p>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
        </div>
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
