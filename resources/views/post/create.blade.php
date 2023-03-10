@extends('dashboard.index')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('post.index') }}" class="btn btn-info mb-2">
                All Post
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{ route('post.save') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="row mb-2">
                    <div class="col-md-3"> Post Title </div>
                    <div class="col-md-9">
                        <input type="text" name="post_title" value="{{ old('post_title') }}" class="form-control" size="60" />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"> Post Category: </div>
                    <div class="col-md-9">
                        <select name="post_category" class="form-control" id="">
                            <option value="">Select Category</option>
                            @foreach ($all_category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"> Post Image: </div>
                    <div class="col-md-9">
                        <input type="file" class="form-control post_image" id="post_image" name="post_image" onchange="PreviewImage()">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <img class="d-none" id="uploadPreview" src="" height="300px" width="400px" alt="">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3"> Post Detils: </div>
                    <div class="col-md-9">
                        <textarea name="post_content" id="summernote">{{ old('post_content') }}</textarea>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-3"> Post Tag: </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="post_keywords"
                            value="{{ old('post_keywords') }}" />
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-3"> Post Status: </div>
                    <div class="col-md-9">
                        <select name="status" class="form-control" id="">
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <button class="btn btn-secondary float-left" type="submit" id="">Save Post</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <script type="text/javascript">
        function PreviewImage() {
            var oFReader = new FileReader();
            var element = document.getElementById("uploadPreview");
            oFReader.readAsDataURL(document.getElementById("post_image").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
                element.classList.remove("d-none");
            };
            console.log(oFReader);
        };
    </script>

@stop
