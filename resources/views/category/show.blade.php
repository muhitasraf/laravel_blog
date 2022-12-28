@extends('dashboard.index')

@section('content')
<div class="row">

    <div class="col-md-6">
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
                @foreach($single_category as $category)
                <tr>
                    <td>{{$category['id']}}</td>
                    <td>{{$category['name']}}</td>
                    <td>{{$category['category_slug']}}</td>
                    <td>{{$category['status']}}</td>
                    <td><a class="btn-info mr-1" href="{{}}">Show</a>|<a href="#">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

@stop