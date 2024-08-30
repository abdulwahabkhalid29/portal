@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Post Job Seeker</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.job.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                       <form action="{{ route('admin.job.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-6">
                        <div class="input-field col s12">
                            <label for="">Job Title</label>
                            <input name="title" type="text" class="validate" required>
                            <span class="help-block" ng-show="errorFname"></span> 
                        </div>
                        {{-- <label for="" class="form-label">Job Title</label>
                        <input type="text" class="form-control" name="title" placeholder="" required> --}}
                    </div>
                    <div class="col-6">
                        <div class="input-field col s12">
                            <label for="firstNameinput" class="form-label">Offered Salary</label>
                            <input type="number" class="form-control" name="salary" id="firstNameinput">
                        </div>
                    </div>
                    
                    <div class="col-12 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Job Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
                        </div>
                    </div>

                    <div class="col-6 mt-3">
                        <label for="" class="form-label">Job Type</label>
                        <select name="type" class="form-control" id="" required>
                          <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>


                    <div class="col-6 mt-3">
                      <div class="mb-3">
                          <label for="firstNameinput" class="form-label">Shift</label>
                          <select name="shift" class="form-control" id="">
                            <option value="Morning">Morning</option>
                              <option value="Afternoon">Afternoon</option>
                              <option value="Night">Night</option>
                          </select>
                      </div>
                  </div>

                </div>
                <div class="text-end">
                    <button type="submit" class="btn" style="background-color: #45cb85">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endpush