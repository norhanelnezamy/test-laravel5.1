@extends('layout.main')
@section('content')
    {{--{{'iam here ' .$product->id}}--}}
    <div class="panel-heading">Update Product</div>
    <div class="panel-body">
        {!!Form::open(array('url'=>'products/update/'.$product->id,'class'=>'form-horizontal validator-form bv-form'))!!}
        {!!Form::hidden('id',$product->id) !!}
        <div class="form-group has-feedback has-error">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-6">
                {!!Form::text('name',$product->name,array('placeholder'=>'Name','style'=>'margin:5px;'))!!}
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
                {!!Form::text('price',$product->price,array('placeholder'=>'price','style'=>'margin:5px;'))!!}
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
                {!!Form::textarea('description',$product->description,array('placeholder'=>'Description','style'=>'margin:5px;'))!!}
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
            <label class="col-lg-3 control-label" style="margin-top: 15px;">Photo</label>
            <div class="col-lg-6">
                {!!Form::file('photo',array('style'=>'margin-top:15px;float:left;width:250px;'))!!}
                <img src="{{'/'.$product->photo}}" style="margin: 5px;width: 55px;height: 50px;float: left;">
                @if($errors->has('photo'))
                    <ul style="float: left">
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
                {!!Form::select('category_id',$categories)!!}
            </div>
        </div>
        {!!Form::submit('Update product',array('class'=>'btn btn-primary' , 'style'=>'margin-left:26%;'))!!}
        {!!Form::close()!!}
    </div>
@stop