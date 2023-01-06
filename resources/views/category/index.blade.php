@extends('dashboard.index')

@section('content')
<div class="row">

    <div class="col-md-8">
        <a href="{{route('categories.add')}}" class="btn btn-info mb-2">
            Create Category
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_category as $category)
                <tr>
                    <td>{{$category['id']}}</td>
                    <td>{{$category['name']}}</td>
                    <td>{{$category['category_slug']}}</td>
                    <td>{{$category['status']==1 ? 'Active' : 'In-Active'}}</td>
                    <td>
                        <a class="btn btn-info mr-1" href="{{route('categories.show',$category['id'])}}">Details</a>
                        <a class="btn btn-info mr-1" href="{{route('categories.edit',$category['id'])}}">Edit</a>
                        <a class="btn btn-info mr-1" href="{{route('categories.delete',$category['id'])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $all_category->links('pagination::bootstrap-4') !!}
    </div>
</div>

@stop
