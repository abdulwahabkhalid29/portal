<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\MemberPhone;
use App\Models\MemberEmail;
use App\Models\Dependent;
use App\Models\User;
use Auth;
use Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.member.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        
        $request->validate([
            'membership_number' => 'unique:users',
        ]);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->father_name = $request->father_name;
        $user->cnic_number = $request->cnic_number;
        $user->father_cnic = $request->father_cnic;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->area = $request->area;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->qualification = $request->qualification;
        $user->occupation = $request->occupation;
        $user->verified_by = $request->verified_by;
        $user->received_by = $request->received_by;
        $user->created_by = Auth::user()->id;
        $user->received_at = $request->received_at;
        $user->baradari_member = $request->baradari_member;
        $user->membership_number = $request->membership_number;
        $user->save();

        $member_information = new Membership();
        if ($request->other_fees != '') {
            $member_information->fees = $request->other_fees;
        }
        else {
            $member_information->fees = $request->fees;
        }
        $member_information->payment_type = $request->payment_type;
        $member_information->start_date = $request->start_date;
        $member_information->end_date = $request->end_date;
        $member_information->member_id = $user->id;
        $member_information->save();
        

        foreach ($request->phone_number as $key => $phone) {
            $phone_numbers = new MemberPhone();
            $phone_numbers->phone_number = $phone;
            $phone_numbers->type = 'Mobile';
            $phone_numbers->member_id = $user->id;
            $phone_numbers->save();
        }

        foreach ($request->telephone_number as $key => $phone) {
            $phone_numbers = new MemberPhone();
            $phone_numbers->phone_number = $phone;
            $phone_numbers->type = 'Telephone';
            $phone_numbers->member_id = $user->id;
            $phone_numbers->save();
        }

        foreach ($request->additional_email as $key => $email) {
            $emails = new MemberEmail();
            $emails->email = $email;
            $emails->member_id = $user->id;
            $emails->save();
        }


        foreach ($request->dependent_name as $key => $name) {
            $dependent = new Dependent();
            $dependent->name = $name;
            $dependent->dob = $request->dependent_dob[$key];
            $dependent->relation = $request->dependent_relation[$key];
            $dependent->parent_id = $user->id;
            $dependent->save();
        }

        return redirect()->route('member.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $member_information = Membership::where('member_id',$user->id)->get();
        $mobile_numbers = MemberPhone::where('member_id',$user->id)->where('type','Mobile')->get();
        $telephone_numbers = MemberPhone::where('member_id',$user->id)->where('type','Telephone')->get();
        $dependents = Dependent::where('parent_id',$user->id)->get();
        return view('admin.member.show',compact('user','member_information','mobile_numbers','telephone_numbers','dependents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $emails = MemberEmail::where('member_id',$user->id)->get();
        $member_information = Membership::where('member_id',$user->id)->get();
        $mobile_numbers = MemberPhone::where('member_id',$user->id)->where('type','Mobile')->get();
        $telephone_numbers = MemberPhone::where('member_id',$user->id)->where('type','Telephone')->get();
        $dependents = Dependent::where('parent_id',$user->id)->get();
        return view('admin.member.edit',compact('emails','user','member_information','telephone_numbers','mobile_numbers','dependents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->father_name = $request->father_name;
        $user->cnic_number = $request->cnic_number;
        $user->father_cnic = $request->father_cnic;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->qualification = $request->qualification;
        $user->occupation = $request->occupation;
        $user->verified_by = $request->verified_by;
        $user->received_by = $request->received_by;
        $user->received_at = $request->received_at;
        $user->baradari_member = $request->baradari_member;
        $user->membership_number = $request->membership_number;
        $user->update();
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function check_membership(Request $request)
    {
        $user = User::where('cnic_number',$request->cnic)->first();
        if($user){
            $phone_numbers = MemberPhone::select('phone_number')->where('member_id',$user->id)->where('type','Mobile')->get();
            return response()->json(['result'=>'Registered !','email' => $user->email]);
        }
        else{
            return response()->json(['result'=>'Not Registered !']);
        }
    }

    // DEPENDENTS AJAX ADD,UPDATE AND DELETE

    public function dependent_store(Request $request)
    {
        $dependent = new Dependent();
        $dependent->name = $request->name;
        $dependent->dob = $request->dob;
        $dependent->relation = $request->relation;
        $dependent->parent_id = $request->member_id;
        $dependent->save();
        return response()->json(['success'=>'Dependent Added Succesfully']);
    }

    public function dependent_update(Request $request,$id)
    {
        $dependent = Dependent::find($id);
        $dependent->name = $request->name;
        $dependent->dob = $request->dob;
        $dependent->relation = $request->relation;
        $dependent->update();
        return response()->json(['success'=>'Dependent Updated Succesfully']); 
    }

    public function dependent_destroy($id)
    {
        $dependent = Dependent::find($id);
        $dependent->delete();
        return response()->json(['success'=>'Dependent Deleted Succesfully']);
    }


}
