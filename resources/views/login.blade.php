@extends('layout.form_css')
@yield('form')
{{bcrypt("supernour")}}
<div style=" margin: 15%;">
    {!!Form::open(array('url'=>'/login','class'=>'form-horizontal validator-form bv-form'))!!}
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-7">
            {!!Form::text('email','',array('placeholder'=>'E-mail','style'=>'margin:5px;', 'class'=>'form-control') )!!}
            @if($errors->has('email'))
                <ul style="float: left">
                    @foreach($errors->get('email') as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-7">
            {!!Form::password('password',array('placeholder'=>'password','style'=>'margin:5px;', 'class'=>'form-control') )!!}
            @if($errors->has('password'))
                <ul style="float: left">
                    @foreach($errors->get('password') as $er)
                        <li>{{$er}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-7">
            {!!Form::submit('Sign in',array('class'=>'btn btn-primary' , 'style'=>'margin-left:29%;'))!!}
        </div>
    </div>

    {!!Form::close()!!}
</div>
