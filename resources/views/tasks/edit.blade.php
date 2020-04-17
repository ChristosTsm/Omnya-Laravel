@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <h3>Edit Task</h3>
    <a href="/tasks">Task List</a><span> | </span>
    <a href="/home">Dashboard</a>
    <div class="row py-5 justify-content-center">
      <div class="col-sm-6">
        @include('includes.messages')
        <form action="/tasks/{{$task->id}}" class="dashboard-form d-flex flex-column overview-card" method="POST">
          @method('PUT')
          @csrf
          <label for="assignedTo">Assign To</label>
          <select name="assignedTo" id="assignedTo" class="mb-3">
              <option value="{{$task->assignedTo}}">{{$task->assignedTo}}</option>
              @if ($employees->count() > 0)
                @foreach ($employees as $employee)
                  <option name="assignedTo" value="{{$employee->fullName}}">{{$employee->fullName}}</option>
                @endforeach
              @else 
                  <p>No Employees Yet</p>
              @endif
          </select>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Task Description">{{$task->description}}</textarea>
          <label class="mt-5" for="deadline">Deadline</label>
          <input type="date" name="deadline" id="deadline" class="mb-3" value="{{$task->deadline}}">
          <div class="d-flex align-items-center">
            @if ($task->isCompleted == true)
              <input class="mr-1" checked type="checkbox" name="isCompleted" id="isCompleted">
              <label for="isCompleted">Task Completed</label>
            @else 
              <input class="mr-1" type="checkbox" name="isCompleted" id="isCompleted">
              <label for="isCompleted">Task Completed</label>
            @endif
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection