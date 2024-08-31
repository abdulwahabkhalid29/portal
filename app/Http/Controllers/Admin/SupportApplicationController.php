<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportApplication;
use App\Models\Gallery;

class SupportApplicationController extends Controller
{
    public function index()
    {
        $support_applications = SupportApplication::all();
        return view('admin.supportapp.index',compact('support_applications'));
    }
    public function create()
    {
        return view('admin.supportapp.create');
    }   
    public function store(Request $request)
    {
        $support_applications = new SupportApplication();
        $support_applications->title = $request->title;
        $support_applications->description = $request->description;
        if($request->has('image')){
            foreach($request->file('image') as $index=>$image){
                $imageName = 'support' . '-' . time() .'-'.rand(1000,100). '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/support'),$imageName);
                $support_applications->image = $imageName;
            }
        }
        $support_applications->save();
        return redirect()->route('admin.supportapplication.index');

        if(!empty($store->id)){
            return redirect()->route('admin.supportapp.index')->with('success','Support Application Created');
        }
        else{
            return redirect()->route('admin.supportapp.create')->with('error','Something Went Wrong');
        }
    } 
    
    public function edit(string $id)
    {
        $support_application = SupportApplication::find($id);
        return view('admin.supportapp.edit',compact('support_application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $support_application = SupportApplication::find($id);
        $support_application->title = $request->title;
        $support_application->description = $request->description;
        if($request->has('image')){
            foreach($request->file('image') as $index=>$image){
                $imageName = 'support' . '-' . time() .'-'.rand(1000,100). '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/support'),$imageName);
                Gallery::create([
                    'support_id' => $support->id,
                    'image' => $imageName,
                    'is_main' => $index==1 ? 1 : 0,
                ]);
            }
        }
        $support_application->update();
        return redirect()->route('admin.supportapplication.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $support_application = SupportApplication::where('id',$id)->firstorfail();
        $delete = SupportApplication::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Suppor Application deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }


}
