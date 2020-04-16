@extends('layouts.app')

@section('content')
    <div class="container text-center">
      <div class="client-project-header">
        <h3>{{$client->clientName}} - Report & Details</h3>
        <span style="color: #333;">Contact: </span><a href="mailto:{{$client->clientMail}}">{{$client->clientMail}}</a>
      </div>
      <div class="pt-5 client-project-details">
        <h5>Project Summary</h5>
        <p>{{$client->notes}}</p>
      </div>
      <div class="pt-5 client-project-details">
        <h5>Project Progress</h5>
        <div class="d-flex client-project align-items-center justify-content-center">
          @if ($client->serviceOffered == false)
            <p>On Progress..</p>
            <img src="{{asset('assets/onprogress.svg')}}" alt="project on progress">
          @else 
            <p>Completed</p>
            <i class="fas fa-clipboard-check"></i>
          @endif
        </div>
      </div>
      <div class="pt-5 client-project-details">
        <h5>Payment Status</h5>
        <div class="d-flex client-project align-items-center justify-content-center">
        @if ($client->paidOff == false)
            <p>On Hold.</p>
            <img src="{{asset('assets/onprogress.svg')}}" alt="project on progress">
          @else 
            <p>Charged</p>
            <i class="fas fa-clipboard-check"></i>
          @endif
        </div>
      </div>
    </div>
@endsection