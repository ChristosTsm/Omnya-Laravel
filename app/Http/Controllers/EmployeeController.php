<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;

class EmployeeController extends Controller
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
        return view('employees.index')->with('employees',$user->employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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
            'fullName' => 'required',
            'role' => 'required',
            'email' => 'required',
            'completedTasks' => 'required',
            'onProgressTasks' => 'required',
            'missedDeadline' => 'required'
        ]);
        
        $employee = new Employee;
        $employee->fullName = $request->input('fullName');
        $employee->role = $request->input('role');
        $employee->email = $request->input('email');
        $employee->completedTasks = $request->input('completedTasks');
        $employee->onProgressTasks = $request->input('onProgressTasks');
        $employee->missedDeadline = $request->input('missedDeadline');
        $employee->user_id = auth()->user()->id;
        $employee->save();
        return redirect('/employees')->with('success','Employee Added');
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
        $employee = Employee::find($id);
        return view('employees.edit',compact('employee'));
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
        $employee = Employee::find($id);

        $this->validate($request , [
            'fullName' => 'required',
            'role' => 'required',
            'email' => 'required',
            'completedTasks' => 'required',
            'onProgressTasks' => 'required',
            'missedDeadline' => 'required'
        ]);
        $employee->fullName = $request->input('fullName');
        $employee->role = $request->input('role');
        $employee->email = $request->input('email');
        $employee->completedTasks = $request->input('completedTasks');
        $employee->onProgressTasks = $request->input('onProgressTasks');
        $employee->missedDeadline = $request->input('missedDeadline');
        $employee->user_id = auth()->user()->id;
        $employee->save();
        return redirect('/employees')->with('success','Employee Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees')->with('success','Employee Deleted');
    }
}
