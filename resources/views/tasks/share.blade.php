@extends('layouts.app')
@section('content')

<div class='text-center'>
    <div class='bg-primary'>
<h1>共有タスク一覧</h1>
</div>
</div>
@if(count($tasks)>0)

<table class='table table-striped'>

<thead>
    <tr>
        <td>タスクNO.</td>
        <td>ステータス</td>
        <td>タスク</td>
        <td>posted at</td>
        <td>投稿者</td>
        <td>Detail</td>
    </tr>
</thead>
<tbody>
    <?php $i=1; ?>
@foreach($tasks as $task)

    <tr>
        
        <td>{{$i}}</td>
        <td>{{$task->status}}</td>
        <td>{{$task->content}}</td>
        <td>{{$task->created_at}}</td>
        <td>{{$task->user->name}}</td>
        <td>{!! link_to_route('tasks.show','Detail',['id'=>$task->id],['class'=>'btn btn-default']) !!}</td>
    </tr>
<?php $i++ ?>
@endforeach
    
</tbody>    
    

</table>

@endif


{!! link_to_route('tasks.create', '新規タスク作成',null,['class'=>'btn btn-primary']) !!}

@endsection
