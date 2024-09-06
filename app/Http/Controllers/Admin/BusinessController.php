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
        $request->validate([
            'member_id' => 'required|max:191',
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'address' => 'required',
            'introduction' => 'required',
            'phone_number' => 'required',
            'website' => 'required',
            'fb_link' => 'required',
            'insta_link' => 'required',
            'linkedin_link' => 'required',
            'logo' => 'required',
        ]);
        if($request->file('logo')){
            $image = $request->file('logo');
            $imageName = 'Business' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/logo/', $imageName);
        }
        // dd($request->all());
        $store = Business::create([
        'member_id' => $request->member_id,
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'introduction' => $request->introduction,
        'phone_number' => $request->phone_number,
        'website' => $request->website,
        'fb_link' => $request->fb_link,
        'insta_link' => $request->address,
        'linkedin_link' => $request->linkedin_link,
        'logo' => $imageName,
    ]);
    if(!empty($store->id)){
        return redirect()->route('admin.business.index')->with('success' , 'Business Created Successfully!');
    }
    return redirect()->back()->with('error' , 'Something went wrong');
    }
    public function edit($id)
    {
        $business = Business::find($id);
        $users = User::where('role_as','member')->get();
        return view('admin.business.edit',compact('business','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'member_id' => 'required|max:191',
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'address' => 'required',
            'introduction' => 'required',
            'phone_number' => 'required',
            'website' => 'required',
            'fb_link' => 'required',
            'insta_link' => 'required',
            'linkedin_link' => 'required',
        ]);

        $imageData = Business::where('id',$id)->first();
        if($request->file('logo')){
            $image = $request->file('logo');
            $imageName = 'Business' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/logo/', $imageName);
        }
        else{
            $imageName = $imageData->logo;
        }

    $update = Business::where('id',$id)->update([
        'member_id' => $request->member_id,
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'introduction' => $request->introduction,
        'phone_number' => $request->phone_number,
        'website' => $request->website,
        'fb_link' => $request->fb_link,
        'insta_link' => $request->address,
        'linkedin_link' => $request->linkedin_link,
        'logo' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('admin.business.index')->with('success' , 'Business Updated Successfully!');
    }
    return redirect()->back()->with('error' , 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function approve(Request $request)
    {
        $business = Business::find($request->business_id);
        $business->is_approved = $request->is_approved;
        $business->update();
        return response()->json(['success' => 'Status Updated !']);
    }
    public function destroy($id){
        $business = Business::where('id',$id)->firstorfail();
        $delete = Business::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Business deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }
}
