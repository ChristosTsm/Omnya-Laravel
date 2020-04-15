@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Employee Management</h3>
    <a href="/employees/create">Add Employee</a>
    <div class="row py-5">
        @if ($employees->count() > 0)
            @foreach ($employees as $employee)
            <div class="col-sm-6">
                <div class="overview-card">
                  <h3>{{$employee->fullName}}</h3>
                  <p>{{$employee->role}}</p>
                  <ul class="mb-5">
                  <li><i class="success fas fa-check-circle"></i> Completed Tasks: {{$employee->completedTasks}}</li>
                    <li><i class="on-progress fas fa-spinner"></i> On Progress Tasks: {{$employee->onProgressTasks}}</li>
                    <li><i class="danger fas fa-times-circle"></i> Deadlines Missed: {{$employee->missedDeadline}}</li>
                  </ul>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Contact</h5>
                    <a href="mailto:{{$employee->email}}">{{$employee->email}}</a>
                  </div>
                  <div class="icons d-flex">
                    <a href="/employees/{{$employee->id}}/edit"><i class="fas fa-edit"></i></a>
                    {{-- <a href="#"  
                    onclick="event.preventDefault();
                    document.getElementById('employee-delete').submit();"><i class="fas fa-trash-alt"></i></a> --}}
                    <form id="employee-delete" action="/employees/{{$employee->id}}" method="POST" class="mx-auto">
                      @csrf
                      @method('DELETE')
                      <button class="btn-delete" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            @endforeach
        @else 
            <p>No Employees Yet</p>
        @endif
    </div>
  </div>
@endsection