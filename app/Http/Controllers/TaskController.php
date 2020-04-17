<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;
use App\Employee;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('tasks.index')->with('tasks',$user->tasks);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('tasks.create')->with('employees',$user->employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'assignedTo' => 'required',
            'description' => 'required',
            'deadline' => 'required'
        ]);

        $task = new Task;
        $task->assignedTo = $request->input('assignedTo');
        $task->description = $request->input('description');
        $task->deadline = $request->input('deadline');
        $task->isCompleted = false;
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect('/tasks')->with('success','Task Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        // return view('tasks.edit')->with('task',$task);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('tasks.edit',compact('task'))->with('employees',$user->employees);
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
     
        $this->validate($request , [
            'assignedTo' => 'required',
            'description' => 'required',
            'deadline' => 'required'
        ]);

        $task = Task::find($id);
        $task->assignedTo = $request->input('assignedTo');
        $task->description = $request->input('description');
        $task->deadline = $request->input('deadline');
        if($request->input('isCompleted')) {
            $task->isCompleted = true;
        } else {
            $task->isCompleted = false;
        }
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect('/tasks')->with('success','Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('success','Task Deleted');
    }
}
