    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
            <h1 class=" font-italic">Title of a longer featured blog post</h1>
            <p class="my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            <p class=" mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{$all_post[0]['title']}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    {!! \Illuminate\Support\Str::limit($all_post[0]['content'], 150, ' <a href="'.url('post/details/'.$all_post[0]['id']).'">Continue reading</a>') !!}
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{$all_post[3]['title']}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    {!! \Illuminate\Support\Str::limit(strip_tags($all_post[3]['content']), 150, ' <a href="'.url('post/details/'.$all_post[3]['id']).'">Continue reading</a>') !!}
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
