@extends('layout.main')
@section('content')
    <div class="panel-heading">Update Category Name</div>
    <div class="panel-body">
        {!!Form::open(array('url'=>'categories/update','class'=>'form-horizontal validator-form bv-form'))!!}
        {!!Form::hidden('id',$category->id)!!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-6">
                {!!Form::text('name',$category->name,array('placeholder'=>'New Name','style'=>'margin:5px;'))!!}<br>
                @if($errors->has('name'))
                    <ul>
                        @foreach($errors->get('name') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            {!!Form::submit('Update Category Name',array('class'=>'btn btn-primary','style'=>'margin-left:28%;'))!!}
            {!!Form::close()!!}
        </div>
    </div>
@stop