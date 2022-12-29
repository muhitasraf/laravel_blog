@extends('master')
@section('content')
    <div class="blog-post">
    @foreach ($category_wise_post->posts as $all_post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{$all_post->title}}</h2>
            <p class="blog-post-meta">{!! Str::limit(strip_tags($all_post->content),280,'<a href="'.url('post/'.$all_post->post_slug).'"> Continue reading</a>') !!}</p>
            <p class="blog-post-meta">{{$all_post->created_at}} by <a href="#">Mark</a></p>
        </div>
    @endforeach
    {{-- {!! $category_wise_post->links('pagination::bootstrap-4') !!} --}}
    </div>
@stop
