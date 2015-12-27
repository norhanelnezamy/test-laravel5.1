@extends('layout.main')
@section('content')
    <div class="panel-heading">All Products</div>
    <div class="panel-body">
        <?php $count=1;?>
        <a href="/products/create" style="margin-bottom: 10px;" class="btn btn-primary">Add New Product</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="1">#</th>
                <th>Name</th>
                <th>Description</th>
                <th>price</th>
                <th>photo</th>
                <th>Category</th>
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
                    <td><?php echo $object->description;?></td>
                    <td>{{$object->price}}</td>
                    <td><img src="/{{$object->photo}}" style="width: 55px;height: 50px;"></td>
                    <td>{{$category[$object->id]}}</td>
                    <td>
                        <div style="display:inline;">
                            <a href="products/update/{{$object->id}}" class="btn btn-purple">Update</a>
                            <a href="products/delete/{{$object->id}}" class="btn btn-danger">Delete</a>
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