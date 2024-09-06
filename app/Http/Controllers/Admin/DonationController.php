<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\DonationType;
use App\Models\User;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('admin.donation.index',compact('donations'));
    }

    public function create()
    {
        $users = User::where('role_as','member')->get();
        $donation_types = DonationType::get();
        return view('admin.donation.create',compact('users','donation_types'));
    }
    public function store(Request $request)
    {
        $donation = new Donation();
        $donation->type_id = $request->type_id;
        $donation->amount = $request->amount;
        $donation->member_id = $request->member_id;
        $donation->save();
        try {
            return redirect()->route('admin.donation.index')->with('success' , 'Donation Created Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error' , 'Something went wrong');
               throw $th;
       }
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
        $donation = Donation::find($id);
        $donation_types = DonationType::get();
        $users = User::where('role_as','member')->get();
        return view('admin.donation.edit',compact('donation_types','users','donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donation = Donation::find($id);
        $donation->type_id = $request->type_id;
        $donation->amount = $request->amount;
        $donation->member_id = $request->member_id;
        $donation->update();
        try {
            return redirect()->route('admin.donation.index')->with('success' , 'Donation Updated Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error' , 'Something went wrong');
               throw $th;
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $donation = donation::where('id',$id)->firstorfail();
        $delete = donation::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'donation deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }

}
