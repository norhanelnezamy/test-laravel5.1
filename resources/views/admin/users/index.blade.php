@extends('layout.main')
@section('content')
    <div class="panel-heading">All Users</div>
    <div class="panel-body">
        <?php $count=1;?>
        <a href="users/create" style="margin-bottom: 10px;" class="btn btn-primary">Add New User</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="1">#</th>
                <th>Email</th>
                <th>Mob No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
             @foreach($objects as $object)
            <tr>
                <td>
                    {{$count}}
                </td>
                <td>{{$object->email}}</td>
                <td>{{$object->telephone}}</td>
                <td>{{$object->first_name}}</td>
                <td>{{$object->last_name}}</td>
                <td>{{$object->admin}}</td>
                <td>
                    <div style="display:inline;">
                        <a href="users/update/{{$object->id}}" class="btn btn-purple">Update</a>
                        <a href="users/delete/{{$object->id}}" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            <?php $count++;?>
            @endforeach
            </tbody>
        </table>
        {!! $objects->render() !!}
    </div>
    </div>
@stop
