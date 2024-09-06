@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
<div class="card p-2">
    <div class="card-body">
        

      <div class="row">
        <div class="col-md-6">
          <h5 class="fw-bold mb-4">Business Registration</h5>
        </div>
        <div class="col-md-6">
            <div class="row g-4 " style="float: right">
                <div class="col-sm-auto">
                    <div>
                        <a href="{{ route('admin.business.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
      <hr>

      <form action="{{ route('admin.business.store') }}" method="POST" enctype="multipart/form-data">

          @csrf

          @method('POST')

          <div class="row">

              <div class="col-6">
                    <div class="input-field col s12">
                      <label for="firstNameinput">Business Name</label>
                    <input name="name" type="text" class="validate" id="firstNameinput" value="" required>
                    <span class="help-block" ng-show="errorFname"></span> 
                    </div>  
              </div>

              <div class="col-6">

                <div class="input-field col s12">
                    <label for="lastNameinput">Business Email</label>
                  <input type="email" name="email" class="validate" value="" id="lastNameinput" required>
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
              </div>
              <input type="hidden" name="member_id" value="{{ auth()->user()->id }}">
              <div class="col-6">
                <div class="input-field col s12">
                    <label for="lastNameinput">Business Phone</label>
                  <input type="number" name="phone_number" class="validate" value="" id="lastNameinput">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>

            </div>

            <div class="col-6">

                <div class="input-field col s12">
                    <label for="lastNameinput">Business Website</label>
                  <input type="text" name="website" class="validate" value="" id="lastNameinput">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
          </div>

          <div class="col-6 mb-4 mt-3">

                <label for="lastNameinput" class="form-label ml-5"style="margin-left:13px; margin-bottom:0px; font-size:15px;">Members</label>
                <div class="input-field col s12">

                <select name="member_id" class="select2" style="padding: 30px" required>
                  <option selected disabled>--Select Member--</option>
                  @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>

            </div>

          </div>
          <div class="col-6 mb-4 mt-3">

              <label for="lastNameinput" class="form-label ml-5"style="margin-left:13px; margin-bottom:0px; font-size:15px;">Business Logo</label>
              <div class="input-field col s12">

               <input type="file" class="form-control" name="logo" >

            </div>
          </div>

              <div class="col-12">

                <div class="input-field col s12">
                    <label for="address1ControlTextarea">Business Introduction</label>
                  <input type="text" name="introduction" class="validate" value="" id="address1ControlTextarea">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>

              </div>

              <div class="col-12">

                <div class="input-field col s12">
                    <label for="address1ControlTextarea">Address</label>
                  <input type="text" name="address" class="validate" value="" id="address1ControlTextarea">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
            </div>


              <div class="col-4">

                <div class="input-field col s12">
                    <label for="citynameInput">Facebook Link</label>
                  <input type="text" name="fb_link" class="validate" value="" id="citynameInput">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
              </div>

              <div class="col-4">

                <div class="input-field col s12">
                    <label for="citynameInput">Instagram Link</label>
                  <input type="text" name="insta_link" class="validate" value="" id="citynameInput">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
            </div>

            <div class="col-4">

                <div class="input-field col s12">
                    <label for="citynameInput">Linkedin Link</label>
                  <input type="text" name="linkedin_link" class="validate" value="" id="citynameInput">
                  <span class="help-block" ng-show="errorFname"></span> 
                  </div>
          </div>

              <div class="col-lg-12">

                  <div class="text-end">

                      <button type="submit" class="btn" style="background-color: #45cb85">Submit</button>

                  </div>

              </div>

          </div>

      </form>

  </div>

</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endsection
@push('scripts')

  
  <script>
      $(document).ready(function () {
        $('.select2').select2();
      });
  </script>
@endpush