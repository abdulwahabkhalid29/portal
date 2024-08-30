<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::get();
        return view('admin.business.index',compact('businesses'));
    }

    public function create()
    {
        $users = User::where('role_as','member')->get();
        return view('admin.business.create',compact('users'));
    }

    public function store(Request $request)
    {
        $business = Business::create($request->all());
        return redirect()->route('admin.business.index');
    }

    public function approve(Request $request)
    {
        $business = Business::find($request->business_id);
        $business->is_approved = $request->is_approved;
        $business->update();
        return response()->json(['success' => 'Status Updated !']);
    }
}
