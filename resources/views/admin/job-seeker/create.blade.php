@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
<div class="card p-2">
  <div class="card-body p-4">
    <div class="row">
      <div class="col-md-6">
        <h5 class="fw-bold mb-4">Add Job Seeker</h5>
      </div>
      <div class="col-md-6">
          <div class="row g-4 " style="float: right">
              <div class="col-sm-auto">
                  <div>
                      <a href="{{ route('admin.job-seeker.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
      <form action="{{ route('admin.job-seeker.store') }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          @method('POST')
          <div class="row">
              <div class="col-4">
                <div class="input-field">
                  <label for="" class="form-label">Job Title</label>
                  <input type="text" class="form-control" name="title"  required>
                </div>
              </div>

              <div class="col-4">
                <div class="input-field">
                  <label for="" class="form-label">Qualification</label>
                  <input type="text" class="form-control"  name="qualification">
                </div>
              </div>
              <div class="col-4">
                <div class="input-field">
                  <label for="" class="form-label">Industry</label>
                  <input type="text" name="industry" class="form-control" >
                </div>
              </div>
              

              <div class="col-4 mt-3">
                  <div class="input-field">
                      <label for="firstNameinput" class="form-label">Expected Salary</label>
                      <input type="number" class="form-control" name="expected_salary"  id="firstNameinput">
                  </div>
              </div>

              
              <div class="col-4 mt-3">
                <div class="input-field">
                  <label for="" class="form-label">City</label>
                  <input type="text" class="form-control" name="city" required>
                </div>
              </div>
              
              <div class="col-4 ">
                <div class="input-field">
                  <label for="firstNameinput" class="form-label">Skills</label>
                    <small class="float-end">Enter Comma Separated Values</small>
                    <input type="text" name="skills" class="form-control">
                </div>
            </div>
              
            
            <div class="col-6 mt-3">
              <label for="" class="form-label">Upload CV or Resume</label>
              <input type="file" name="resume" class="form-control" style="padding: 13px" >
            </div>
            
            <div class="col-6 mt-3">
              <div class="mb-3">
                  <label for="lastNameinput" class="form-label">Members</label>
                  <select name="member_id" class="select2 form-control p-3" required>
                    <option selected disabled>--Select Member--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
              </div>    
            </div><!--end col-->

          </div>
          <div class="text-end mt-4">
            <button type="submit" class="btn" style="background-color: #45cb85">Submit</button>
          </div>
      </form>
  </div>
</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function () {
    $('.select2').select2();
  });
</script>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endpush