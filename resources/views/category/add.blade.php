@extends('dashboard.index')

@section('content')
<div class="row">
    <div class="col-md-6">
        <a href="{{route('categories.index')}}" class="btn btn-info mb-2 float-right">
            Show Category
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{route('categories.save')}}" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-md-3"> Category Name: </div>
                <div class="col-md-9">
                <input type="text" name="category" class="form-control category mr-2" placeholder="Category Name">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3"> Category Status: </div>
                <div class="col-md-9">
                    <select name="status" class="form-control" id="">
                        <option value="1">Active</option>
                        <option value="0">In-Active</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <button class="col-3 btn btn-secondary float-right" type="submit" id="">Save Post</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop