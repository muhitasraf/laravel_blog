    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <a class="text-white" style="text-decoration: none;" href="{{url('post/'.$featured_post[0]['post_slug'])}}"><h1 class=" font-italic">{!! Str::limit(strip_tags($featured_post[0]['title']), 50,'....') !!}</h1>
            <p class="my-3">{!! Str::limit(strip_tags($featured_post[0]['content']), 350,' .....') !!}</p></a>
            <p class=" mb-0"><a href="{{url('post/'.$featured_post[0]['post_slug'])}}" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$featured_post[2]['category']['name']}}</strong>
                    <h4 class="mb-0">
                        <a class="text-dark" href="{{url('post/'.$featured_post[2]['post_slug'])}}">{!! Str::limit(strip_tags($featured_post[2]['title']), 40,'.....') !!}</a>
                    </h4>
                    <div class="mb-1 text-muted">{{$featured_post[2]['created_at']}}</div>
                    <div class="text-justify">{!! Str::limit(strip_tags(trim($featured_post[2]['content'])), 120,'') !!}
                    <a class="stretched-link" href="{{url('post/'.trim($featured_post[2]['post_slug']))}}"> Continue reading</a></div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="{{url('uploads/post_images/'.$featured_post[2]['thumbnail_path'])}}" height="250px" width="200px" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">{{$featured_post[1]['category']['name']}}</strong>
                    <h4 class="mb-0">
                        <a class="text-dark" href="{{url('post/'.$featured_post[1]['post_slug'])}}">{!! Str::limit(strip_tags($featured_post[1]['title']), 40,'.....') !!}</a>
                    </h4>
                    <div class="mb-1 text-muted">{{$featured_post[1]['created_at']}}</div>
                    <div class="text-justify">{!! Str::limit(strip_tags(trim($featured_post[1]['content'])), 120,'') !!}
                    <a class="stretched-link" href="{{url('post/'.$featured_post[1]['post_slug'])}}"> Continue reading</a></div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="{{url('uploads/post_images/'.$featured_post[1]['thumbnail_path'])}}" height="250px" width="200px" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
