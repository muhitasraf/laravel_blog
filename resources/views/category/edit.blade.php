@extends('dashboard.index')

@section('content')
<div class="row">
    <div class="col-md-8">
        <form action="{{route('categories.update')}}" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-md-3"> Category Name: </div>
                <div class="col-md-9">
                    <input type="text" name="category" value="{{$single_category[0]['name']}}" class="form-control category mr-2" placeholder="Category Name">
                    <input type="hidden" name="id" value="{{$single_category[0]['id']}}">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3"> Category Status: </div>
                <div class="col-md-9">
                    <select name="status" class="form-control" id="">
                        @if($single_category[0]['status']==1)
                            <option selected value="1">Active</option>
                            <option value="0">In-Active</option>
                        @else
                            <option value="1">Active</option>
                            <option selected value="0">In-Active</option>
                        @endif
                        
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