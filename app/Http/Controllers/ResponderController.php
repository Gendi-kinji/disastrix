<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responder;
use App\Models\User;
use App\Models\Head;
use Illuminate\Support\Facades\Auth;
use App\Models\Incident;
use App\Models\Deployer;
use App\Models\Deployment;
use App\Notifications\DispatchNotification;

class ResponderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        $responders=Responder::all();
        return view('organization/responder-view', compact('responders'), compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function showOnlineResponders($id){
        $head = Head::where('user_id', Auth::user()->id)->first();
        if ($head) {
            $organization = $head->organization;
            $responders = Responder::where('organization', $organization)->get();
        } else {
            // Handle the case where the authenticated user is not a head of any organization
            $responders = collect();
        }
        return view('organization.dispatch-responders',compact('responders'));
    }

    public function dispatchResponders(Request $request,$id){
        $incident = Incident::findOrFail($id);
        $responders = $request->input('responders', []);
        foreach($responders as $responder){
           $deployer=Deployer::create([
              'responder_id' => $responder,
              'incident_id'=>$id
           ]);
           $responderperson=Responder::where('id',$responder);
           $responderperson->status='dispatched';
           $responderperson->save();
           $responderperson->notify(new DispatchNotification($incident));

          
        }
        $deployment=Deployment::create([
            'incident_id' => $id,
            'response_organization'=>Responder::where('id',$responder)->organization,
            'time_responded'=>now(),
            'deployment_force_number' => count($responders),
         ]);
        
        $incident->status="solved";
        $incident->save();

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
