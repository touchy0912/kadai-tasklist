@extends('layouts.app')

@section('content')

<h1>新規メッセージ作成</h1>

<div class='row'>
    <div class='col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6'>
{!! Form::model($task,['route'=>'tasks.store']) !!}
<div class='format-group'>
{!! Form::label('staus','ステータス:') !!}
{!! Form::text('status',null,['class'=>'form-control']) !!}
</div>

<div class='format-group'>
{!! Form::label('content','タスク:') !!}
{!! Form::text('content',null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('share','共有') !!}
{!! Form::hidden('share', 0) !!}
{!! Form::checkbox('share', 1 ,["class"=>'form-control']) !!}

</div>

{!! Form::submit('投稿',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
</div>

@endsection
