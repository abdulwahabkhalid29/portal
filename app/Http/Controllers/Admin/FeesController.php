<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\User;

class FeesController extends Controller
{
    public function index()
    {
        $fees = Membership::get();
        return view('admin.fees.index',compact('fees'));
    }

    public function create()
    {
        $members = User::get();
        return view('admin.fees.create',compact('members'));
    }

    public function store(Request $request)
    {
        $fee = new Membership();
        $fee->fees = $request->fees;
        $fee->refno = $request->refno;
        $fee->chq_number = $request->chq_number;
        $fee->payment_type = $request->payment_type;
        $fee->start_date = $request->start_date;
        $fee->end_date = $request->end_date;
        $fee->member_id = $request->member_id;
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
            $fee->image = $imageName;
        }
        $fee->save();
        return redirect()->route('admin.fees.index')->with('success' , 'Fees Created Successfully!');
        return redirect()->back()->with('error' , 'Something went wrong');
    }
    public function edit($id)
    {
        $fee = Membership::find($id);
        return view('admin.fees.edit',compact('fee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fee = Membership::find($id);
        $fee->fees = $request->fees;
        $fee->start_date = $request->start_date;
        $fee->end_date = $request->end_date;
        $fee->update();
        return redirect()->route('admin.fees.index')->with('success' , 'Fees Updated Successfully!');
        return redirect()->back()->with('error' , 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $fee = Membership::where('id',$id)->firstorfail();
        $delete = Membership::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Fees deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }

}
