@extends('dashboard.index')

@section('content')
<div class="row">
    <div class="col-md-4">
        <a href="{{route('post.index')}}" class="btn btn-info mb-2">
            All Post
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="{{route('post.update')}}" method="post" enctype="multipart/form-data">
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
                {{session('message')}}
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-md-3"> Post Title </div>
                <div class="col-md-9">
                    <input type="text" name="post_title" value="{{$single_post[0]['title']}}" class="form-control" size="60" />
                    <input type="hidden" name="id" value="{{$single_post[0]['id']}}" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"> Post Category: </div>
                <div class="col-md-9">
                    <select name="post_category" class="form-control" id="">
                        <option value="">Select Category</option>
                        @foreach($all_category as $category)
                            @if($single_post[0]['category_id']==$category->id)
                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3"> Post Image: </div>
                <div class="col-md-9">
                    <input type="file" class="form-control post_image" id="post_image" name="post_image">
                    <input type="hidden" name="prev_post_image" value="{{$single_post[0]['thumbnail_path']}}">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3"> Post Detils: </div>
                <div class="col-md-9">
                    <textarea name="post_content" id="summernote">{{$single_post[0]['content']}}</textarea>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3"> Post Tag: </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="post_keywords" value="{{old('post_keywords')}}" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3"> Post Status: </div>
                <div class="col-md-9">
                    <select name="status" class="form-control" id="">
                        @if($single_post[0]['status']==1)
                            <option value="1" selected>Active</option>
                            <option value="0">In-Active</option>
                        @else
                            <option value="1">Active</option>
                            <option value="0" selected>In-Active</option>
                        @endif
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

@stop