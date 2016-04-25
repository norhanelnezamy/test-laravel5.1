@extends('layout.main')
@section('content')
    <div class="panel-heading">Create new Category</div>
    <div class="panel-body">
        {!!Form::open(array('url'=>'categories/create','class'=>'form-horizontal validator-form bv-form'))!!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-6">
                {!!Form::text('name','',array('placeholder'=>'New Name','style'=>'margin:5px;'))!!}
                @if($errors->has('name'))
                    <ul>
                        @foreach($errors->get('name') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        {!!Form::submit('create New Category',array('class'=>'btn btn-primary' , 'style'=>'margin-left:29%;'))!!}
        {!!Form::close()!!}
    </div>
@stop