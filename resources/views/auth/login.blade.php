@extends('layouts.app')

@section('content')

<div class='text-center'>
    <h1>Login</h1>
</div>


<div class='row'>
<div class='col-md-6 col-md-offset-3'>
    {!! Form::open(['route'=>'login.post']) !!}
    
        <div class='form-group'>
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
    </div>
        <div class='form-group'>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    
    {!! Form::submit('Login',['class'=>'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    
    <p>new user?  {!! link_to_route('signup.get','Sign up now!')!!}</p>
</div>
</div>

@endsection