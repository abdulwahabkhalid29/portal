<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('admin.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->shift = $request->shift;
        $job->created_by = auth()->user()->id;
        $job->save();
        return redirect()->route('admin.job.index');

        if(!empty($store->id)){
            return redirect()->route('admin.job.index')->with('success','Job Created');
        }
        else{
            return redirect()->route('admin.job.create')->with('error','Something Went Wrong');
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
        $job = Job::find($id);
        return view('admin.jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::find($id);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->shift = $request->shift;
        $job->update();
        return redirect()->route('admin.job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $job = job::where('id',$id)->firstorfail();
        $delete = job::where('id', $id)->delete();
        if (!empty($delete)) {
            return response()->json([
                'status' => 'success',
                'message' => 'job deleted successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Something went wrong',
            ]);
        }
    }
}
