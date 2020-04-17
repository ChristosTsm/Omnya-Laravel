@extends('layouts.app')

@section('content')
  <div class="container text-center">
    <h3>Add Employee</h3>
    <a href="/employees">Employee List</a><span> | </span>
    <a href="/home">Dashboard</a>
    <div class="row py-5 justify-content-center">
      <div class="col-sm-6">
        @include('includes.messages')
        <form action="/employees" class="dashboard-form d-flex flex-column overview-card" method="POST">
          @csrf
          <input class="mb-3" type="text" name="fullName" id="fullName" placeholder="Employee's Fullname">
          <input class="mb-3" type="text" name="role" id="role" placeholder="Employee's Role">
          <input class="mb-3" type="text" name="email" id="email" placeholder="Employee's Email">
          <label for="completedTasks">Completed Tasks</label>
          <input class="mb-3" type="number" name="completedTasks" id="completedTasks" placeholder="0 for new employees">
          <label for="onProgressTasks">On Progress Tasks</label>
          <input class="mb-3" type="number" name="onProgressTasks" id="onProgressTasks" placeholder="0 for new employees">
          <label for="missedDeadline">Deadlines Missed</label>
          <input class="mb-3" type="number" name="missedDeadline" id="missedDeadline" placeholder="0 for new employees">
          <input class="mb-3" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
@endsection