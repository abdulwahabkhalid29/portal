@extends('layouts.app')
@section('title','Member Dashboard')
@push('style')
  <style>
    .card{
   background-image:url("welfear.jpg"); 
   /* background-image: url("paper.gif")/; */
  }
  </style>
@endpush
@section('content')


<section class="section" style="min-height: 100%">

  <div class="container">
    <div class="row justify-content-center">
      {{-- <div class="col-md-10"> --}}
        <div class="card">
          <div class="card-header">
            <div class="col-12">
              <h2 class="fw-400 mb-3 text-center">Welcome <span class="fw-bold">{{ auth()->user()->name; }}</span></h2>
            </div>
          </div>
          <div class="card-body">
    <div class="row justify-content-center">
      <div class="col-md-3">
            <div class="mt-4">        

              <a href="{{ route('profile.edit') }}"><button type="button" class="btn btn-label text-light waves-effect waves-light" style="width: 79%; background-color:#74ba49;"><i class="ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit Profile</button></a>
    
          </div>
    
          <div class="mt-5 ">        
    
            <a href="{{ route('business.create') }}"><button type="button" class="btn btn-label text-light waves-effect waves-light" style=" background-color:#74ba49;"><i class="ri-file-edit-fill label-icon align-middle fs-16 me-2"></i>Register your Business</button></a>
    
          </div>      
    
          
          <div class="mt-5">        
    
            <a href="{{ route('job.create') }}"><button type="button" class="btn btn-label text-light waves-effect waves-light" style="width: 79%; background-color:#74ba49;"><i class=" ri-briefcase-fill label-icon align-middle fs-16 me-2"></i>Post a Job</button></a>
    
          </div>
    
          <div class="mt-5">        
    
            <a href="{{ route('job-seeker.create') }}"><button type="button" class="btn btn-label text-light waves-effect waves-light" style="width: 79%; background-color:#74ba49;"><i class="ri-file-edit-fill label-icon align-middle fs-16 me-2"></i><small>Job Seeker Registration</small></button></a>
    
          </div>
    
          {{-- <div class="col-4 mt-4">&nbsp;</div> --}}
    
          
          <div class="mt-5">
    
            <a href="{{ route('member.fees.history') }}"><button type="button" class="btn btn-label text-light waves-effect waves-light" style="width: 79%; background-color:#74ba49;"><i class="ri-money-dollar-box-fill label-icon align-middle fs-16 me-2"></i>Fees History</button></a>
    
          </div>
          </div>
          <div class="col-md-9 mt-4">
            <img src="{{asset('assets/images/welfear.jpg')}}" alt="" style="width: 100% ;height 75%">
          </div>
        </div>
    </div>

        </div>

      

      



      {{-- </div> --}}
    </div>

  </div>

</section>

{{-- Create Password Modal --}}
<button type="button" class="btn btn-primary d-none password-modal" data-bs-toggle="modal" data-bs-target="#fullscreeexampleModal">Create Password</button>

<div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
          <div class="modal-body">
            <div class="text-center my-5">
              <h6 class="fs-16 my-3">Create Account Password</h6>
                <form action="{{ route('password.create',auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="text-center w-50" style="margin: auto;">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>
                  <small>Password should be atleast 8 character</small><br>
                  <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
              </div>
          </div>
          <div class="modal-footer">
              <a href="javascript:void(0);" class="btn btn-link link-success fw-medium shadow-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Skip</a>
          </div>
      </div>
  </div>
</div>
{{-- End Create Password --}}
@endsection
@section('scripts')
      @if (!auth()->user()->password)
        <script>
          $(document).ready(function () {
            $('.password-modal').trigger('click');
          });
        </script>
      @endif
@endsection