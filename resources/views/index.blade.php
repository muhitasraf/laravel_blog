@extends('master')

@section('content')
    {{-- <h3 class="pb-3 mb-4 font-italic border-bottom">
        From the Firehose
    </h3> --}}
    @foreach ($all_post as $post)
        <div class="card flex-md-row mb-4 box-shadow blog-post">
            <div class="row">
                <div class="col-md-3">
                    <img class="card-img-right flex-auto d-none d-md-block" style="width:200px;height:215px;padding:8px;" src="{{url('uploads/post_images/'.$post->thumbnail_path)}}"  alt="Card image cap">
                </div>
                <div class="col-md-9">
                    <h3 class="blog-post-title">{{$post->title}}</h3>
                    <p class="blog-post-meta">{{$post->category->name}} >> By <a href="#">{{$post->user->fullname}} </a>at {{$post->created_at}}</p>
                    <p class="text-justify blog-post-meta">{!! Str::limit(strip_tags($post->content),280,'<a href="'.url('post/'.$post->post_slug).'"> Continue reading</a>') !!}</p>
                </div>
            </div>
        </div>
    @endforeach
    {!! $all_post->links('pagination::bootstrap-4') !!}
    {{-- <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav> --}}
@stop
