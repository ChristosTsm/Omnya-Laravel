@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Edit Client's Details</h3>
    <a href="/clients">Back</a>
    <div class="row py-5">
      <div class="col-sm-6">
        @include('includes.messages')
        <form action="/clients/{{$client->id}}" class="dashboard-form d-flex flex-column overview-card" method="POST">
          @method('PUT')
          @csrf
          <input class="mb-3" type="text" name="clientName" id="clientName" placeholder="Client's Fullname" value="{{$client->clientName}}">
          <input class="mb-3" type="text" name="clientMail" id="clientMail" placeholder="Client's Email" value="{{$client->clientMail}}">
          <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Service Description">{{$client->notes}}</textarea>
          <p class="pt-3">Payment Status</p>
          <div class="d-flex align-items-center">
            @if ($client->paidOff == true)
              <input class="mr-1" checked type="checkbox" name="payment-status" id="payment-status">
              <label for="payment-status">Client charged</label>
            @else 
              <input class="mr-1" type="checkbox" name="payment-status" id="payment-status">
              <label for="payment-status">Client charged</label>
            @endif
          </div>

          <p class="pt-5">Project Status</p>
          <div class="d-flex pb-5 align-items-center">
            @if ($client->serviceOffered == true)
              <input class="mr-1" checked type="checkbox" name="project-status" id="project-status">
              <label for="project-status">Project Finished</label>
            @else 
              <input class="mr-1" type="checkbox" name="project-status" id="project-status">
              <label for="project-status">Project Finished</label>
            @endif
            
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection