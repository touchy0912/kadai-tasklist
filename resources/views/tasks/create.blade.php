@extends('layouts.app')

@section('content')

<h1>新規メッセージ作成</h1>


{!! Form::model($task,['route'=>'tasks.store']) !!}

{!! Form::label('staus','ステータス:') !!}
{!! Form::text('status') !!}

{!! Form::label('content','タスク:') !!}
{!! Form::text('content') !!}
{!! Form::submit('投稿') !!}

{!! Form::close() !!}




@endsection
