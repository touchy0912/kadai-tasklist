@extends('layouts.app')

@section('content')

<h1>id={{$task->id}}の詳細ページ</h1>
<table class='table table-bordered'>

<tr>
    <td>id</td>
    <td>{{$task->id}}</td>
</tr>

<tr>
    <td>ステータス</td>
    <td>{{$task->status}}</td>
    
</tr>

<tr>
    <td>タスク</td>
    <td>{{$task->content}}</td>
</tr>


</table>

{!! link_to_route('tasks.edit','編集する',['id'=>$task->id],['class'=>'btn btn-default']) !!}

{!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!} 

{!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection
