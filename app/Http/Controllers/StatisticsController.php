<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deployment;
use App\Models\Incident;
use App\Models\Role;
use App\Models\Organization;
use App\Models\Responder;


class StatisticsController extends Controller
{
    public function calculateStatistics(){
        $users=User::all()->count();
        $public_usercount = User::where('role_id',1)->count();
        $admincount = User::where('role_id',2)->count();
        $organization_headcount= User::where('role_id',3)->count();
        $respondercount = User::where('role_id',4)->count();


        $activeincidents=Incident::where('status','pending')->count();
        $activerespondents=Responder::where('status','available')->count();
        $solvedincidents=Incident::where('status','solved')->count();

        return view('admin.admin-dashboard',compact('activeincidents','activerespondents','solvedincidents','users','public_usercount','admincount','organization_headcount'));
    }
}
