@extends('master')
@section('content')
    <div class="blog-post">
        @if ($category_wise_post->posts->isNotEmpty())
            @foreach ($category_wise_post->posts as $post)
                <div class="card flex-md-row mb-4 box-shadow blog-post">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="card-img-right flex-auto d-none d-md-block"
                                style="width:200px;height:215px;padding:8px;"
                                src="{{ url('uploads/post_images/' . $post->thumbnail_path) }}" alt="Card image cap">
                        </div>
                        <div class="col-md-9">
                            <h3 class="blog-post-title">{{ $post->title }}</h3>
                            <p class="blog-post-meta">{{ $post->created_at }} <a
                                    href="#">{{ $post->user->fullname }}</a></p>
                            <p class="text-justify blog-post-meta">{!! Str::limit(
                                strip_tags($post->content),
                                280,
                                '<a href="' . url('post/' . $post->post_slug) . '"> Continue reading</a>',
                            ) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="card flex-md-row mb-4 box-shadow blog-post">
                <div class="row">
                    <div class="col-md-12 text-center p-4">
                        <h5 class="">There is no posts in this category</h5>
                    </div>
                </div>
            </div>
        @endif

        {{-- {!! $category_wise_post->links('pagination::bootstrap-4') !!} --}}
    </div>
@stop
