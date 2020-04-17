<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('clients.index')->with('clients',$user->clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'clientName' => 'required',
            'notes' => 'required',
            'clientMail' => 'required',
        ]);
        
        $client = new Client;
        $client->clientName = $request->input('clientName');
        $client->clientMail = $request->input('clientMail');
        $client->notes = $request->input('notes');
        $client->paidOff = false;
        $client->serviceOffered = false;
        $client->user_id = auth()->user()->id;
        $client->save();
        return redirect('/clients')->with('success','Client Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('client',$client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $this->validate($request , [
            'clientName' => 'required',
            'notes' => 'required',
            'clientMail' => 'required',
        ]);

        $client->clientName = $request->input('clientName');
        $client->clientMail = $request->input('clientMail');
        $client->notes = $request->input('notes');
        if($request->input('payment-status')) {
            $client->paidOff = true;
        } else {
            $client->paidOff = false;
        }
        if($request->input('project-status')) {
            $client->serviceOffered = true;
        } else {
            $client->serviceOffered = false;
        }
        $client->user_id = auth()->user()->id;
        $client->save();
        return redirect('/clients')->with('success','Client Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success','Client Deleted');
    }
}
