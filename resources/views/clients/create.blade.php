@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Add Client</h3>
    <a href="/clients">Client List</a><span> | </span>
    <a href="/home">Dashboard</a>
    <div class="row py-5">
      <div class="col-sm-6">
        @include('includes.messages')
        <form action="/clients" class="dashboard-form d-flex flex-column overview-card" method="POST">
          @csrf
          <input class="mb-3" type="text" name="clientName" id="clientName" placeholder="Client's Fullname">
          <input class="mb-3" type="text" name="clientMail" id="clientMail" placeholder="Client's Email">
          <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Service Description"></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection