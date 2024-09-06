<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportApplication;
use App\Models\Gallery;
use App\Models\User;

class SupportApplicationController extends Controller
{
    public function index()
    {
        $support_applications = SupportApplication::all();
        return view('admin.supportapp.index',compact('support_applications'));
    }
    public function create()
    {
        $users = User::where('role_as','member')->get();
        return view('admin.supportapp.create',compact('users'));
    }
    public function store(Request $request){
        $request->validate([
            'member_id' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',

        ]);
        $store = SupportApplication::create([
            'member_id' => $request->member_id,
            'title' => $request->title,
            'description' => $request->description,

        ]);

        if($request->has('images')){
            $isFirstImage = true;
            foreach($request->file('images') as $index=>$image){
                $imageName = 'multiImage'. '-'. time().'-'.rand(1000,100). '.'. $image->getClientOriginalExtension();
                $image->move(public_path('upload/multiImage/'),$imageName);
                $isMain = $isFirstImage? 1 : 0;
                Gallery::create([
                    'support_application_id' => $store->id,
                    'images' => $imageName,
                ]);
                $isFirstImage = false;
            }
        }

        if(!empty($store->id)){
            return redirect()->route('admin.supportapplication.index')->with('success' , 'Support Application Created Successfully!');
        }else{
            return redirect()->back()->with('error' , 'Something went wrong');
        }
    }
        public function multiStoreProduct(Request $request){
        $request->validate([
            'member_id' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',

        ]);
        $store = SupportApplication::create([
            'member_id' => $request->member_id,
            'title' => $request->title,
            'description' => $request->description,

        ]);

        if($request->has('images')){
            $isFirstImage = true;
            foreach($request->file('images') as $index=>$image){
                $imageName = 'multiImage'. '-'. time().'-'.rand(1000,100). '.'. $image->getClientOriginalExtension();
                $image->move(public_path('upload/multiImage/'),$imageName);
                $isMain = $isFirstImage? 1 : 0;
                Gallery::create([
                    'support_application_id' => $store->id,
                    'images' => $imageName,
                ]);
                $isFirstImage = false;
            }
        }

        if(!empty($store->id)){
            return response()->json(['success' => true ]);
        }else{
            return response()->json(['success' => false ]);
        }
    }
    public function edit(string $id)
    {
        $users = User::where('role_as','member')->get();
        $support_application = SupportApplication::find($id);
        $galleries = Gallery::where('support_application_id',$id)->get();
        return view('admin.supportapp.edit',compact('support_application','galleries','users'));
    }
public function deleteImage($galleryId)
{

  $gallery = Gallery::find($galleryId);

  if ($gallery->image && file_exists(public_path('upload/multiImage/'. $gallery->image))) {
    unlink(public_path('upload/multiImage/'. $gallery->image));
}
  if ($gallery) {


    $gallery->delete();
    return response()->json(['success' => true]);
  } else {
    return response()->json(['error' => 'Gallery not found'], 404);
  }
}
public function update(Request $request, $id){
    $request->validate([
        'member_id' => 'required|max:255',
        'title' => 'required|max:255',
        'description' => 'required|max:8000',
    ]);
    $supportApplication = SupportApplication::where('id', $id)->first();
    $update = $supportApplication->update([
        'member_id' => $request->member_id,
        'title' => $request->title,
        'description' => $request->description,
    ]);

    if($request->has('images')){
        $isFirstImage = true;
        foreach($request->file('images') as $index=>$image){
            $imageName = 'multiImage'. '-'. time().'-'.rand(1000,100). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('upload/multiImage/'),$imageName);
            $isMain = $isFirstImage? 1 : 0;
            Gallery::create([
                'support_application_id' => $supportApplication->id,
                'images' => $imageName,
            ]);
            $isFirstImage = false;
        }
    }

    if($update > 0){
        return redirect()->route('admin.supportapplication.index')->with('success' , 'Support Application Updated Successfully!');
    }else{
        return redirect()->back()->with('error' , 'Something went wrong');
    }
}
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
