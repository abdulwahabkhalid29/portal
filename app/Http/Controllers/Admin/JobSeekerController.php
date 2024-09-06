<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSeeker;
use App\Models\User;
use File;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seekers = JobSeeker::get();
        return view('admin.job-seeker.index',compact('seekers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role_as','member')->get();
        return view('admin.job-seeker.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $seeker = new JobSeeker();
        if ($request->has('resume')) {
            $file = $request->resume;
            $filename = time().'.'.$file->getClientOriginalName();
            $file->move(public_path('job-seeker-resume'), $filename);
            $seeker->resume = $filename;
        }
        $seeker->title = $request->title;
        $seeker->expected_salary = $request->expected_salary;
        $seeker->qualification = $request->qualification;
        $seeker->skills = $request->skills;
        $seeker->industry = $request->industry;
        $seeker->city = $request->city;
        $seeker->member_id = $request->member_id;
        $seeker->save();
    try {
            return redirect()->route('admin.job-seeker.index')->with('success' , 'Job Seeker Created Successfully!');
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
    public function edit($id)
    {
        $seeker = JobSeeker::find($id);
        $users = User::where('role_as','member')->get();
        return view('admin.job-seeker.edit',compact('seeker','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $seeker = JobSeeker::find($id);
        if ($request->has('resume')) {
            $path = public_path('job-seeker-resume/'.$seeker->resume);
            if (File::exists($path)) {
                    File::delete($path);
            }
            $file = $request->resume;
            $filename = time().'.'.$file->getClientOriginalName();
            $file->move(public_path('job-seeker-resume'), $filename);
            $seeker->resume = $filename;
        }
        $seeker->title = $request->title;
        $seeker->expected_salary = $request->expected_salary;
        $seeker->qualification = $request->qualification;
        $seeker->skills = $request->skills;
        $seeker->industry = $request->industry;
        $seeker->city = $request->city;
        $seeker->member_id = $request->member_id;
        $seeker->update();
        try {
            return redirect()->route('admin.job-seeker.index')->with('success' , 'Job Seeker Updated Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error' , 'Something went wrong');
               throw $th;
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $seeker = JobSeeker::where('id',$id)->firstorfail();
        $delete = JobSeeker::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Job Seeker deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }
}
