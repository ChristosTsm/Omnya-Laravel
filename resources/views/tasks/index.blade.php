@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tasks Management</h3>
    <a href="/tasks/create">New Task</a><span> | </span>
    <a href="/home">Dashboard</a>
    <div class="my-2">
      @include('includes.messages')
    </div>
      <div class="row py-5">
        @if ($tasks->count() > 0)
            @foreach ($tasks as $task)
            <div class="col-sm-6">
                <div class="overview-card">
                  <h3>{{$task->description}}</h3>
                  <p>Assigned to: {{$task->assignedTo}}</p>
                  <p>Deadline: {{$task->deadline}}</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Progress</h5>
                      @if ($task->isCompleted)
                          <p class="success">Completed</p>
                      @else
                          <p class="on-progress">On Progress</p>
                      @endif
                    </div>
                    <div class="icons d-flex">
                      <a href="/tasks/{{$task->id}}/edit"><i class="fas fa-edit"></i></a>
                      <form id="task-delete" action="/tasks/{{$task->id}}" method="POST" class="mx-auto">
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
          <div class="container">
            <p>No Tasks Yet</p>
          </div>
        @endif
    </div>
</div>
@endsection