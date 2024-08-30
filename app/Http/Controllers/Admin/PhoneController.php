<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MemberPhone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $phone = new MemberPhone();
        $phone->phone_number = $request->number;
        $phone->type = $request->type;
        $phone->member_id = $request->member_id;
        $phone->save();
        return response()->json(['success'=>'Number Added Succesfully']);
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
        $phone = MemberPhone::find($id);
        $phone->phone_number = $request->number;
        $phone->member_id = $request->member_id;
        $phone->update();
        return response()->json(['success'=>'Number Updated Succesfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $phone = MemberPhone::find($id);
        $phone->delete();
        return response()->json(['success'=>'Number Deleted Succesfully']);
    }
    
    public function delete($id)
    {
        $phone = MemberPhone::find($id);
        $phone->delete();
        return response()->json(['success'=>'Number Deleted Succesfully']);
    }
}
