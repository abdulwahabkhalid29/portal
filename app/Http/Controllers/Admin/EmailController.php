<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MemberEmail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $email = new MemberEmail();
        $email->email = $request->email;
        $email->member_id = $request->member_id;
        $email->save();
        return response()->json(['success' => 'Got saved Succesfully !']);
    }

    public function update(Request $request,$id)
    {
        $email = MemberEmail::find($id);
        $email->email = $request->email;
        $email->member_id = $request->member_id;
        $email->update();
        return response()->json(['success' => 'Got updated Succesfully !']);
    }

    public function destroy($id)
    {
        $email = MemberEmail::find($id);
        $email->delete();
        return response()->json(['success' => 'Deleted Successfully !']);
    }
}
