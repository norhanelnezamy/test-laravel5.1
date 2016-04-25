@extends('layout.main')
@section('content')
    <div class="panel-heading">All Categories</div>
    <div class="panel-body">
        <?php $count=1;?>
        <a href="categories/create" style="margin-bottom: 10px;" class="btn btn-primary">Add New Category</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="1">#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($objects as $object)
                <tr>
                    <td>
                        {{$count}}
                    </td>
                    <td>{{$object->name}}</td>
                    <td>
                        <div style="display:inline;">
                            <a href="categories/category/{{$object->id}}/products" class="btn btn-info">View Products</a>
                            <a href="categories/update/{{$object->id}}" class="btn btn-purple">Update</a>
                            <a href="categories/delete/{{$object->id}}" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php $count++;?>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop