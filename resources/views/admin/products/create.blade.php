@extends('layout.main')
@section('content')
    <div class="panel-heading">Create new product</div>
    <div class="panel-body">
        {!!Form::open(array('url'=>'products/create', 'files'=> true,'class'=>'form-horizontal validator-form bv-form'))!!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-6">
                {!!Form::text('name','',array('placeholder'=>'Name','style'=>'margin:5px;'))!!}
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
            <label class="col-lg-3 control-label">Price</label>
            <div class="col-lg-6">
                {!!Form::text('price','',array('placeholder'=>'price','style'=>'margin:5px;'))!!}
                @if($errors->has('price'))
                    <ul>
                        @foreach($errors->get('price') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Description</label>
            <div class="col-lg-6">
                {!!Form::textarea('description','',array('placeholder'=>'Description','style'=>'margin:5px;'))!!}
                @if($errors->has('description'))
                    <ul>
                        @foreach($errors->get('description') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Photo</label>
            <div class="col-lg-6">
                {!!Form::file('photo','',array('placeholder'=>'Photo','style'=>'margin:5px;'))!!}
                @if($errors->has('photo'))
                    <ul>
                        @foreach($errors->get('photo') as $er)
                            <li>{{$er}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Category</label>
            <div class="col-lg-6">
                {!!Form::select('category_id',$categories) !!}
            </div>
        </div>
        {!!Form::submit('Insert New product',array('class'=>'btn btn-primary' , 'style'=>'margin-left:29%;'))!!}
        {!!Form::close()!!}
    </div>
@stop