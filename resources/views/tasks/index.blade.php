@extends('layouts.app')
@section('content')


<h1>タスク一覧</h1>


@if(count($tasks)>0)

<table class='table table-striped'>

<thead>
    <tr>
        <td></td>
        <td>ステータス</td>
        <td>タスク</td>
        <td>posted at</td>
    </tr>
</thead>
<tbody>
@foreach($tasks as $task)
    <tr>
        
        <td>{!! link_to_route('tasks.show','Detail',['id'=>$task->id],['class'=>'btn btn-default']) !!}</td>
        <td>{{$task->status}}</td>
        <td>{{$task->content}}</td>
        <td>{{$task->created_at}}</td>
    </tr>
@endforeach
    
</tbody>    
    

</table>

@endif


{!! link_to_route('tasks.create', '新規タスク作成',null,['class'=>'btn btn-primary']) !!}

@endsection
