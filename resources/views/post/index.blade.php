@extends('dashboard.index')

@section('content')
<div class="row">

    <div class="col-md-12">
        <a href="{{route('post.create')}}" class="btn btn-info mb-2">
            Create Post
        </a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Title</th>
                        <th>Slug</th>
                        <th>Post Image</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_post as $post)
                    <tr>
                        <td>{{$post['id']}}</td>
                        <td class="col-md-1">{{$post['title']}}</td>
                        <td class="col-md-1">{{$post['post_slug']}}</td>
                        <td>
                            <img src="{{url('uploads/post_images/'.$post['thumbnail_path'])}}" height="80px" width="100px" alt="Image"/>
                        </td>
                        <td class="col-md-2">{!! Str::limit(strip_tags($post['content']), 100, ' ......') !!}</td>
                        <td>{{$post['status']==1 ? 'Active' : 'De-Active'}}</td>
                        <td>
                            <a class="btn btn-info mr-1" href="{{route('post.show',$post['id'])}}">Details</a>
                            <a class="btn btn-info mr-1" href="{{route('post.edit',$post['id'])}}">Edit</a>
                            <a class="btn btn-info mr-1" href="{{route('post.delete',$post['id'])}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
