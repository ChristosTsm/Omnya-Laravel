@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Clients Management</h3>
    <a href="/clients/create">Add Client</a>
    <div class="row py-5">
        @if ($clients->count() > 0)
            @foreach ($clients as $client)
            <div class="col-sm-6">
                <div class="overview-card">
                  <div class="d-flex justify-content-between align-items-center ">
                    <h3>{{$client->clientName}}</h3>
                    <div class="d-flex flex-column client-project">
                      <div class="d-flex client-project justify-content-left mb-2">
                        @if ($client->serviceOffered == false)
                          <img src="{{asset('assets/onprogress.svg')}}" alt="project on progress">
                          <p class="pt-1">Project On Progress</p>
                        @else 
                          <i style="color:green; line-height: 1.2; margin-right:2px;" class="fas fa-clipboard-check"></i>
                          <p>Project Completed</p>
                        @endif
                      </div>
                      <div class="d-flex client-project">
                        @if ($client->paidOff == false)
                          <img src="{{asset('assets/onprogress.svg')}}" alt="project on progress">
                          <p class="pt-1">Payment on hold</p>
                        @else 
                          <i style="color:green; line-height: 1.2; margin-right:2px;" class="fas fa-clipboard-check"></i>
                          <p>Payment Completed</p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="mb-5">
                    <h5>Project Summary</h5>
                    <p>{{$client->notes}}</p>
                  </div>
                  
                  {{-- <ul class="mb-5">
                  <li><i class="success fas fa-check-circle"></i> Paid Off: {{$client->paidOff}}</li>
                    <li><i class="on-progress fas fa-spinner"></i> Service Offered: {{$client->serviceOffered}}</li>
                    <li><i class="danger fas fa-times-circle"></i> Project Summary: {{$client->notes}}</li>
                  </ul> --}}
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Contact</h5>
                    <a href="mailto:{{$client->clientMail}}">{{$client->clientMail}}</a>
                  </div>
                  <div class="icons d-flex">
                    <a href="/clients/{{$client->id}}/edit"><i class="fas fa-edit"></i></a>
                    <a href="/clients/{{$client->id}}"><i class="fas fa-info-circle"></i></a>
                    <form action="/clients/{{$client->id}}" method="POST" class="mx-auto">
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
          <p>No Clients Yet</p>
        </div>
        @endif
    </div>
  </div>
@endsection