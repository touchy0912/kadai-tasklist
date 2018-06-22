<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
        $tasks=\Auth::user()->tasks();
        $user=\Auth::user();
        return redirect()->route('users.show',['id'=>$user->id]);
    }else{
        return view('welcome');
        
    }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task=new Task;
        return view('tasks.create',['task'=>$task]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $id=\Auth::id();
        $this->validate($request,['status'=>'required|max:10','content'=>'required|max:191']);
        $task=new Task;
        $task->status=$request->status;
        $task->content=$request->content;
        $task->user_id=$id;
        $task->save();
        return redirect()->route('users.show',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Task::find($id);
         if (\Auth::id() === $task->user_id){
        return view('tasks.show',['task'=>$task]);
    }else{
        return redirect('/');
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $task=Task::find($id);
        if (\Auth::id() === $task->user_id){
        return view('tasks.edit',['task'=>$task]);
    }else{
        return redirect('/');   
    }
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id=\Auth::id();
        $this->validate($request,['status'=>'required|max:10','content'=>'required|max:191']);
        $task=Task::find($id);
        $task->status=$request->status;
        $task->content=$request->content;
        $task->save();
        
        return redirect()->route('users.show',['id'=>$user_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $user_id=\Auth::id();    
    $task=Task::find($id);
    if (\Auth::id() === $task->user_id){
    $task->delete();
    
    return redirect()->route('users.show',['id'=>$user_id]);
    }else{
        return redirect('/');
    }
}
}
