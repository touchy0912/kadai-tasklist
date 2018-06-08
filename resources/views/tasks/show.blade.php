@extends('layouts.app')

@section('content')

<h1>id={{$task->id}}の詳細ページ</h1>

<p>ステータス：{{$task->status}}</p>
<P>タスク：{{$task->content}}</P>

{!! link_to_route('tasks.edit','編集する',['id'=>$task->id]) !!}

{!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!} 

{!! Form::submit('削除') !!}
{!! Form::close() !!}

@endsection
