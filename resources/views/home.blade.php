@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start my-5">
        <div class="overview-card col-sm-4 mx-3">
            <h3>Assign new task</h3>
            <form action="#" class="dashboard-form d-flex flex-column">
                <label for="employees">To</label>
                <select name="employees" id="employees" class="mb-3">
                    <option value="">--Please select an employee--</option>
                    <option value="James Johnson">James Johnson</option>
                    <option value="Mary Popkins">Mary Popkins</option>
                    <option value="Harry Don">Harry Don</option>
                    <option value="Conor Maley">Conor Maley</option>
                    <option value="Steff Williams">Steff Williams</option>
                </select>
                <textarea class="mb-3" placeholder="Task Description" name="job-description" id="job-description" cols="35" rows="5">
                </textarea>
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="mb-3">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="overview-card col-sm-7">
            <h3>Tasks Overview</h3>
            <section class="pt-3 row justify-content-between">
                @if ($employees->count() > 0)
                    @foreach ($employees as $employee)
                    <ul class="col-sm-4 mb-5">
                        <li><h5 class="li-header">{{$employee->fullName}}</h5></li>
                        <li><i class="success fas fa-check-circle"></i> Completed: {{$employee->completedTasks}}</li>
                        <li><i class="on-progress fas fa-spinner"></i> On Progress: {{$employee->onProgressTasks}}</li>
                        <li><i class="danger fas fa-times-circle"></i> Missed Deadline: {{$employee->missedDeadline}}</li>
                    </ul> 
                    @endforeach
                @else 
                        <p>No Tasks Yet</p>
                @endif
            </section>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="container">
            <div class="col-sm-6 overview-card">
                <h3>Employee List & Details</h3>
                @if ($employees->count() > 0)
                    @foreach ($employees as $employee)
                        <div class="py-5">
                            <h5>Fullname: {{$employee->fullName}}</h5>
                            <p>Contact: <a href="mailto:{{$employee->email}}">{{$employee->email}}</a><br>
                            Role: {{$employee->role}}</p>
                        </div>
                       
                    @endforeach
                @else 
                        <p>No Employees Yet</p>
                @endif
                <hr>
                <a href="/employees">Manage Employees</a>
            </div>
        </div>
    </div>
</div>
@endsection
