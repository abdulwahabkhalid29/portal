<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobSeeker;
use App\Models\Business;
use App\Models\Membership;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['totalJob'] = Job::count();
        $data['totalBusiness'] = Business::count();
        $data['totalMembership'] = User::count();
        $data['totalJobSeeker'] = JobSeeker::count();
        $data['totalFess'] = Membership::where('end_date', '<', date('Y-m-d'))->count();
        return view('home',$data);  
    }
    public function expired(){
        $fees = Membership::get();
        return view('expired',compact('fees'));
    }
}
