@extends('master')
@section('content')
    <div class="blog-post">
    @foreach ($search_result as $post)
    <div class="card flex-md-row mb-4 box-shadow blog-post">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-right flex-auto d-none d-md-block" style="width:200px;height:215px;padding:8px;" src="{{url('uploads/post_images/'.$post->thumbnail_path)}}"  alt="Card image cap">
            </div>
            <div class="col-md-9">
                <h3 class="blog-post-title">{{$post->title}}</h3>
                <p class="blog-post-meta">{{$post->created_at}} <a href="#">{{$post->user->fullname}}</a></p>
                <p class="text-justify blog-post-meta">{!! Str::limit(strip_tags($post->content),280,'<a href="'.url('post/'.$post->post_slug).'"> Continue reading</a>') !!}</p>
            </div>
        </div>
    </div>
    @endforeach
    {{-- {!! $search_result->links('pagination::bootstrap-4') !!} --}}
    </div>
@stop
