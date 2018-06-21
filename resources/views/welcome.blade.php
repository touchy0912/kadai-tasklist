@extends('layouts.app')

@section('content')
@if(Auth::check())
<?php $user=Auth::user(); ?>
{{$user->name}}

@else
<div class='center jumbotron'>
    <div class='text-center'>
        <h1>Welcome to the TaskList</h1>
        
        {!! Form::open(['route'=>'signup.get']) !!}
        {!! Form::submit('signup now!',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        
    </div>
    
</div>

@endif
@endsection