@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-around my-5">
        <div class="overview-card col-sm-4">
            <h3>Assign new task</h3>
            <form action="#" class="dashboard-form d-flex flex-column">
                <label for="employees">To</label>
                <select name="employees" id="employees" class="mb-3">
                    <option value="">--Please select an employee--</option>
                    @if ($employees->count() > 0)
                    @foreach ($employees as $employee)
                    <option value="{{$employee->fullName}}">{{$employee->fullName}}</option>
                    @endforeach
                @else 
                    <p>No Employees Yet</p>
                @endif
                </select>
                <textarea class="mb-3" placeholder="Task Description" name="job-description" id="job-description" cols="35" rows="5">
                </textarea>
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="mb-3">
                <input type="submit" value="Submit">
            </form>
        </div>
        @include('includes.messages')
        <div class="overview-card col-sm-7">
            <h3>Tasks Overview</h3>
            <section class="pt-3 row justify-content-start">
                @if ($tasks->count() > 0)
                    @foreach ($tasks as $task)
                    <ul>
                        @if ($task->isCompleted)
                            <li><h5 class="li-header" style="text-decoration: line-through; text-decoration-color:green;">{{$task->description}} <span class="success"><i class="fas fa-check"></i></span></h5></li>
                        @else
                            <li><h5 class="li-header">{{$task->description}}</h5></li>
                        @endif
                        <li>Assigned To: {{$task->assignedTo}}</li>
                        <li>Deadline: {{$task->deadline}}</li>
                        <hr>
                    </ul>
                    @endforeach
                @else
                <div class="container">
                    <p>No Tasks Yet</p>
                </div> 
                @endif
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-around my-5">
        <div class="col-sm-7 overview-card d-flex flex-column justify-content-between">
            <div>
                <h3>Client Management & Details</h3>
                <div class="pt-4">
                    @if ($clients->count() > 0)
                        @foreach ($clients as $client)
                            <div class="pb-2">
                                <h5>Client Brand: {{$client->clientName}}</h5>
                                <div>
                                    <h6>Project Summary</h6>
                                    <p>{{$client->notes}}</p>
                                </div>
                                <div class="d-flex justify-content-between mt-5">
                                    <div>
                                    <h5>Contact</h5>
                                    <a href="mailto:{{$client->clientMail}}">{{$client->clientMail}}</a>
                                    </div>
                                    <div class="icons d-flex">
                                    <a href="/clients/{{$client->id}}/edit"><i class="fas fa-edit"></i></a>
                                    <a href="/clients/{{$client->id}}"><i class="fas fa-info-circle"></i></a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    @else 
                        <p>No clients Yet</p>
                    @endif
                </div>
            </div>
            <a class="add-icon mt-auto" href="/clients/create"><i class="fas fa-user-plus"></i></a>
        </div>
        <div class="col-sm-4 overview-card d-flex flex-column justify-content-between">
            <div>
                <h3>Employee List & Details</h3>
                <div class="pt-4">
                    @if ($employees->count() > 0)
                        @foreach ($employees as $employee)
                            <div class="pb-2">
                                <h5>Fullname: {{$employee->fullName}}</h5>
                                <p>Role: {{$employee->role}}</p>
                                <div class="d-flex justify-content-between mt-2">
                                    <div>
                                    <h5>Contact</h5>
                                    <a href="mailto:{{$employee->email}}">{{$employee->email}}</a>
                                    </div>
                                    <div class="icons d-flex">
                                    <a href="/employees/{{$employee->id}}/edit"><i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    @else 
                        <p>No Employees Yet</p>
                    @endif
                </div>
            </div>
            <a class="add-icon" href="/employees/create"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>
@endsection