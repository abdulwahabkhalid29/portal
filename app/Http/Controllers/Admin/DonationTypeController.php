<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonationType;

class DonationTypeController extends Controller
{
    public function index()
    {
        $donation_types = DonationType::all();
        return view('admin.donationtype.index',compact('donation_types'));
    }

    public function create()
    {
        return view('admin.donationtype.create');
    }
    public function store(Request $request)
    {
        $donation_type = new DonationType();
        $donation_type->name = $request->name;
        $donation_type->slug = $request->slug;
        $donation_type->save();
        return redirect()->route('admin.donationtype.index')->with('success' , 'Donation Type Created Successfully!');
        return redirect()->back()->with('error' , 'Something went wrong');
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
        $donation_type = DonationType::find($id);
        return view('admin.donationtype.edit',compact('donation_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $donation_type = DonationType::find($slug);
        $donation_type->name = $request->name;
        $donation_type->slug = $request->slug;
        $donation_type->update();
        return redirect()->route('admin.donationtype.index')->with('success' , 'Donation Type Updated Successfully!');
        return redirect()->back()->with('error' , 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $donation_types = donationType::where('id',$id)->firstorfail();
        $delete = donationType::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Donation Types deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }

}
