@extends('layouts.master')
@push('style')
    <style>
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin-left:270px;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;

}
.modals1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contents1 {
  position: relative;
  background-color: #fefefe;
  margin-left:270px;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* The Close Button */
.closes1 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;

}
.modals2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contents2 {
  position: relative;
  background-color: #fefefe;
  margin-left:270px;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* The Close Button */
.closes2 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;

}
.modals3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contents3 {
  position: relative;
  background-color: #fefefe;
  margin-left:270px;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* The Close Button */
.closes3 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;

}

#multiple-uploader {
        width: 100%;
        border: 2px dashed #CED4DA;
    }
    .image-container {
        margin: 10px;
        width: 100px;
        height: 100px;
        position: relative;
        cursor: auto;
        pointer-events: unset;
    }
    .image-preview {
        height: 100px;
        width : 100px
    }
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #CED4DA !important;
        background-color: #2A3042;
        border-radius: 3px;
        padding: 0.2rem;
    }
    .bootstrap-tagsinput{
        width: 100%;
    }
    </style>
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
@endpush
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success alert-top-border alert-dismissible shadow fade show alert-dismissible" id="my-app" style="float: right;" role="alert">
        <i class="ri-check-double-line me-3 align-middle fs-16 text-success"></i>
    {{Session::get('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br><br><br>
@endif
    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="{{ url('assets/images/profile-bg.jpg') }}" alt="" class="profile-wid-img">
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    {{-- <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle">
                        </div>
                    </div> --}}
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{ $user->name }}</h3>
                            <p class="text-white text-opacity-75">S/O {{ $user->father_name }}</p>
                            <p class="text-white text-opacity-75">{{ $user->husband_name }}</p>
                            <div class="hstack text-white-50 gap-1">
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <!--end col-->

                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex profile-wrapper" style="float: right;">
                            <!-- Nav tabs -->
                            <div class="flex-shrink-0">
                                <a href="{{ route('member.edit',$user->id) }}" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-5 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-5">Complete Your Profile</h5>
                                                <div class="progress animated-progress custom-progress progress-label">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="label">30%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <strong class="mt-3">Member No #</strong>
                                                            <p>{{$user->membership_number}}</p>
                                                            <img style="border-radius:10px; margin-left:40px;" height="150px" width="170px" src="{{ asset('storage/QrCodes/'.$user->membership_number.'.png') }}" alt="">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Job Applications</h5>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <a href="Javascript:;" id="myBtn">
                                                         <span class="btn btn-soft-success btn-sm rounded fs-4 w-100">
                                                             <i class="ri-add-line align-bottom"></i>
                                                         </span>
                                                        </a>
                                                     </div>
                                                     <!-- The Modal -->
                                                <div id="myModal" class="modal">

                                                    <!-- Modal content -->
                                                    <div class="modal-content p-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                              <h4 class="fw-bold mb-4">Add Job Application</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row g-4 " style="float: right">
                                                                    <div class="col-sm-auto">
                                                                        <div>
                                                                            <span class="close text-body">&times;</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('admin.job-seeker.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="row">
                                                                <input type="hidden" name="member_id" value="{{$user->id}}">

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
                                                                <div class="col-4 mt-3">
                                                                  <div class="input-field">
                                                                    <label for="firstNameinput" class="form-label">Skills</label>
                                                                      <small class="float-end">Enter Comma Separated Values</small>
                                                                      <input type="text" name="skills" class="form-control">
                                                                  </div>
                                                              </div>


                                                              <div class="col-12 mt-3">
                                                                <label for="" class="form-label">Upload CV or Resume</label>
                                                                <input type="file" name="resume" class="form-control" style="padding: 13px" >
                                                              </div>
                                                            </div>
                                                            <div class="text-end mt-4">
                                                              <button type="submit" class="btn text-light" style="background-color: #45cb85">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center py-3">
                                                        {{-- <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{asset('assets/images/user.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
                                                        </div> --}}
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                @forelse ($jobs as  $key => $seeker)
                                                                <h5 class="fs-14 mb-1">{{$seeker->title}}</h5>
                                                                <p style="color: gray">Applied on : {{ date('d M Y' , strtotime( $seeker->created_at ))}}</p>
                                                                @empty
                                                            <td colspan="3" class="text-center">No Record Found!</td>
                                                            @endforelse
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Businesses</h5>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <a href="Javascript:;" id="mybtns1">
                                                         <span class="btn btn-soft-success btn-sm rounded fs-4 w-100">
                                                             <i class="ri-add-line align-bottom"></i>
                                                         </span>
                                                        </a>
                                                     </div>
                                                     <div id="mymodals1" class="modals1">

                                                        <!-- Modal content -->
                                                        <div class="modal-contents1 p-3">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                  <h4 class="fw-bold mb-4">Add Businesses</h4>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row g-4 " style="float: right">
                                                                        <div class="col-sm-auto">
                                                                            <div>
                                                                                <span class="closes1 text-body">&times;</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="{{ route('admin.business.store') }}" method="POST" enctype="multipart/form-data">

                                                                @csrf

                                                                @method('POST')

                                                                <div class="row">

                                                                    <div class="col-6">
                                                                          <div class="input-field col s12">
                                                                            <label for="firstNameinput">Business Name</label>
                                                                          <input name="name" type="text" class="validate form-control" id="firstNameinput" value="" required>
                                                                          <span class="help-block" ng-show="errorFname"></span>
                                                                          </div>
                                                                    </div>

                                                                    <div class="col-6">

                                                                      <div class="input-field col s12">
                                                                          <label for="lastNameinput">Business Email</label>
                                                                        <input type="email" name="email" class="validate form-control" value="" id="lastNameinput" required>
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="member_id" value="{{ $user->id }}">
                                                                    <div class="col-6">
                                                                      <div class="input-field col s12">
                                                                          <label for="lastNameinput">Business Phone</label>
                                                                        <input type="number" name="phone_number" class="validate form-control" value="" id="lastNameinput">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>

                                                                  </div>

                                                                  <div class="col-6">

                                                                      <div class="input-field col s12">
                                                                          <label for="lastNameinput">Business Website</label>
                                                                        <input type="text" name="website" class="validate form-control" value="" id="lastNameinput">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                </div>

                                                                <div class="col-6 mb-4">

                                                                    <label for="lastNameinput" class="form-label ml-5"style="margin-left:13px; margin-bottom:0px; font-size:15px;">Business Logo</label>
                                                                    <div class="input-field col s12">

                                                                     <input type="file" class="form-control" name="logo" >

                                                                  </div>
                                                                </div>

                                                                    <div class="col-6">

                                                                      <div class="input-field col s12">
                                                                          <label for="address1ControlTextarea">Business Introduction</label>
                                                                        <input type="text" name="introduction" class="validate form-control" value="" id="address1ControlTextarea">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-12">

                                                                      <div class="input-field col s12">
                                                                          <label for="address1ControlTextarea">Address</label>
                                                                        <input type="text" name="address" class="validate form-control" value="" id="address1ControlTextarea">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                  </div>


                                                                    <div class="col-4">

                                                                      <div class="input-field col s12">
                                                                          <label for="citynameInput">Facebook Link</label>
                                                                        <input type="text" name="fb_link" class="validate form-control" value="" id="citynameInput">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4">

                                                                      <div class="input-field col s12">
                                                                          <label for="citynameInput">Instagram Link</label>
                                                                        <input type="text" name="insta_link" class="validate form-control" value="" id="citynameInput">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                  </div>

                                                                  <div class="col-4">

                                                                      <div class="input-field col s12">
                                                                          <label for="citynameInput">Linkedin Link</label>
                                                                        <input type="text" name="linkedin_link" class="validate form-control" value="" id="citynameInput">
                                                                        <span class="help-block" ng-show="errorFname"></span>
                                                                        </div>
                                                                </div>

                                                                    <div class="col-lg-12">

                                                                        <div class="text-end">

                                                                            <button type="submit" class="btn text-light mt-3" style="background-color: #45cb85">Submit</button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center py-3">
                                                        {{-- <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{asset('assets/images/user.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
                                                        </div> --}}
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                @forelse ($businesses as $business)
                                                                <div class="row">
                                                                    <div class="col-md-2 mb-4">
                                                                        <img src="{{asset('upload/logo/'.$business->logo)}}" alt="" style="height: 30px; width:30px;" class="rounded-circle shadow"></td>
                                                                    </div>
                                                                    <div class="col-md-7 mt-1 mb-2">
                                                                        <h5 class="fs-14">{{$business->name}}</h5>
                                                                        <small><a href="{{ route('admin.business.edit',$business->id) }}" class="text-success edit-item-btn"> <i class="fa fa-edit"> </i> Edit</a></small></td>
                                                                    </div>
                                                                </div>
                                                                @empty
                                                                    <td colspan="3" class="text-center">No Record Found!</td>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Support Application</h5>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <a href="Javascript:;" id="mybtns2">
                                                         <span class="btn btn-soft-success btn-sm rounded fs-4 w-100">
                                                             <i class="ri-add-line align-bottom"></i>
                                                         </span>
                                                        </a>
                                                     </div>
                                                     <div id="mymodals2" class="modals2">

                                                        <!-- Modal content -->
                                                        <div class="modal-contents2 p-3">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                  <h4 class="fw-bold mb-4">Add Support Application</h4>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row g-4 " style="float: right">
                                                                        <div class="col-sm-auto">
                                                                            <div>
                                                                                <span class="closes2 text-body">&times;</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="{{ route('admin.supportapplication.store') }}" method="POST" enctype="multipart/form-data" class="my-form">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="row">
                                                                    <input type="hidden" name="member_id" value="{{ $user->id }}">
                                                                    <div class="col-12 mt-3">
                                                                        <div class="input-field col s12">
                                                                            <label for="firstNameinput" class="form-label">Title</label>
                                                                            <input type="text" class="form-control" name="title" id="firstNameinput" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <div class="mb-3">
                                                                            <label for="lastNameinput" class="form-label">Description</label>
                                                                            <textarea name="description" class="form-control" id="" cols="20" rows="5" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12 mt-4">
                                                                        <label for="image">Image</label>
                                                                        <div class="multiple-uploader" id="multiple-uploader">
                                                                            <div class="mup-msg">
                                                                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                                <span class="mup-main-msg">Click to upload images.</span>
                                                                                <label for="" style="display: none;">
                                                                                <input type="file" name="images[]" id="" accept="image/*" class="form-control" multiple="">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn text-light btn-lg" style="background-color: #45cb85">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
<<<<<<< HEAD

=======

>>>>>>> c4c39ded29f7c8262394a1c87371c2cc68a08bf0
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center py-3">
                                                        {{-- <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{asset('assets/images/user.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
                                                        </div> --}}
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                @forelse ($support_applications as $support_application)
                                                                    <h5 class="fs-14 mb-1">{{$support_application->title}}</h5>
                                                                    <small><a href="{{ route('admin.supportapplication.edit',$support_application->id) }}" class="text-success edit-item-btn mt-1"> <i class="fa fa-edit"> </i> Edit</a></small>
                                                                @empty
                                                                    <td colspan="3" class="text-center">No Record Found!</td>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                        <!--end card-->
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="fw-bold mb-4">Info</h4>
                                                <table class="table table-borderless">
                                                            <tbody>
                                                                <div class="row">
                                                                <div class="col-md-2">
                                                                    <p><b>E-mail :</b></p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p>{{$user->email}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>CNIC NO :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->cnic_number}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Father CNIC NO :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->father_cnic}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Date Of Birth :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{ date('d M Y' , strtotime( $user->dob ))}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Gender :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->gender}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Qualification :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->qualification}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Occupation :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->occupation}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>City :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->city}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Location :</b></p>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <p>{{$user->address}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Area :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->area}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Country :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->country}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Telephone Number :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    @foreach ($telephone_numbers as $number)
                                                                        <p>{{ $number->phone_number }}</p>
                                                                    @endforeach
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Mobile Number :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    @foreach ($mobile_numbers as $number)
                                                                        <p>{{ $number->phone_number }}</p>
                                                                    @endforeach
                                                                </div>
                                                                <hr class="mt-3 mb-3">
                                                                <div class="col-md-3">
                                                                    <p><b>Received By :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->received_by}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Verified By :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->verified_by}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Recieved On :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{ date('d M Y' , strtotime( $user->received_at ))}}</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p><b>Baradari Member :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->baradari_member}}</p>
                                                                </div>

                                                            </div>
                                                            </tbody>
                                                        </table>
                                                    <!--end row-->
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                      <h5 class="fw-bold mb-4">Enter Membership Fees</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row g-4 " style="float: right">
                                                            <div class="col-sm-auto">
                                                                <div>
                                                                    <div class="avatar-sm flex-shrink-0">
                                                                        <a href="Javascript:;" id="mybtns3">
                                                                         <span class="btn btn-soft-success btn-sm rounded fs-4 w-100">
                                                                             <i class="ri-add-line align-bottom"></i>
                                                                         </span>
                                                                        </a>
                                                                     </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mymodals3" class="modals3">

                                                    <!-- Modal content -->
                                                    <div class="modal-contents3 p-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                              <h4 class="fw-bold mb-4">Add Support Application</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row g-4 " style="float: right">
                                                                    <div class="col-sm-auto">
                                                                        <div>
                                                                            <span class="closes3 text-body">&times;</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('admin.fees.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <input type="hidden" name="member_id" value="{{ $user->id }}">

                                                                    <div class="input-field">
                                                                        <label for="" class="form-label text-body">Amount Of Fees</label>
                                                                        <input type="number" class="form-control" name="fees" required>
                                                                    </div>
                                                                </div>



                                                                <p class="mt-3"><b>Payment Mode </b></p>
                                                                <div class="col-12 d-flex mb-5">
                                                                    <div class="form-check mx-2 ml-5">
                                                                        <input class="form-check-input" name="payment_type" value="Cash" type="radio" id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Cash
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mx-2 ml-5">
                                                                        <input class="form-check-input" name="payment_type" value="Online Transfer" type="radio" id="gridCheck2">
                                                                        <label class="form-check-label" for="gridCheck2">
                                                                            Online Transfer
                                                                        </label>
                                                                        <div class="form-check col-md-12" id="inp2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-check mx-2 ml-5">
                                                                        <input class="form-check-input" name="payment_type" value="Cheque" type="radio" id="gridCheck3">
                                                                        <label class="form-check-label" for="gridCheck3">
                                                                            Cheque
                                                                        </label>
                                                                        <div class="form-check col-md-12" id="inp3">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 ">
                                                                    <label for="lastNameinput" class="form-label text-body" style="font-size: 15px;"><b>Start Date</b></label>
                                                                    <div class="input-field">
                                                                        <input type="date" class="form-control" placeholder="" name="start_date" id="lastNameinput" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 ">
                                                                    <label for="firstNameinput" class="form-label text-body" style="font-size: 15px;"><b>End Date</b></label>
                                                                    <div class="input-field">
                                                                        <input type="date" class="form-control" name="end_date" placeholder="" id="firstNameinput" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="submit" class="btn text-light mt-3" style="background-color: #45cb85">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <table class="table table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Fees</th>
                                                            <th>Payment Mode</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($member_information as $key => $fee)
                                                        <tr>
                                                            <td>Rs. {{ $fee->fees }}/-</td>
                                                            <td>{{ $fee->payment_type }}</td>
                                                            <td>{{ date('d M Y' , strtotime( $fee->start_date ))}}</td>
                                                            <td>{{ date('d M Y' , strtotime( $fee->end_date ))}}</td>
                                                        </tr>
                                                        @empty
                                                        <td colspan="3" class="text-center">No Record Found!</td>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                                    <!--end row-->
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                      <h5 class="fw-bold mb-4">Details Of Dependents</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row " style="float: right">
                                                            <a href="{{route('member.edit',$user->id)}}">
                                                                <span class="btn btn-soft-success rounded w-100">
                                                                    Edit
                                                                </span>                                                                         </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <table class="table table-nowrap mb-0">

                                                    <thead class="table-light">

                                                        <tr>

                                                            <th scope="col">Name</th>

                                                            <th scope="col">Date Of Birth</th>

                                                            <th scope="col">Relation</th>


                                                        </tr>

                                                    </thead>

                                                    <tbody class="dependents">

                                                        @foreach ($dependents as $dependent)

                                                        <tr class="single-dependent">

                                                            <td>{{ $dependent->name }}</td>
                                                            <td>{{ $dependent->dob }}</td>
                                                            <td>{{ $dependent->relation }}</td>
                                                        </tr>

                                                       @endforeach

                                                    </tbody>

                                                </table>
                                                    <!--end row-->
                                            </div>
                                            <!--end card-body-->
                                        </div><!-- end card -->

                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div>
<!-- End Page-content -->
@endsection
@push('scripts')
<script src="{{asset('assets/js/multiple-uploader.js')}}"></script>
<script>
    var milliseconds = 2000;

    setTimeout(function () {
        document.getElementById('my-app').remove();
    }, milliseconds);
    </script>
<script>
let multipleUploader = new MultipleUploader('#multiple-uploader').init({
                maxUpload: 20,
                maxSize: 1,
                filesInpName: 'images',
                formSelector: '.my-form',
            });

    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    var modals1 = document.getElementById("mymodals1");

// Get the button that opens the modal
var btn = document.getElementById("mybtns1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes1")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modals1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modals1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modals1) {
    modals1.style.display = "none";
  }
}
    var modals2 = document.getElementById("mymodals2");

// Get the button that opens the modal
var btn = document.getElementById("mybtns2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes2")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modals2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modals2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modals2) {
    modals2.style.display = "none";
  }
}
    var modals3 = document.getElementById("mymodals3");

// Get the button that opens the modal
var btn = document.getElementById("mybtns3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes3")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modals3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modals3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modals3) {
    modals3.style.display = "none";
  }
}
    $(document).ready(function(){
      $("#gridCheck2").click(function(){
        $('#inp2').html('<div class="row">'+
                    '<div class="col-md-12">'+
                        '<div class="input-field">'+
                            '<input type="number" class="form-control" name="refno" placeholder="Ref No.">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-12">'+
                        '<div class="input-field">'+
                            '<lable>Payment Receipt</lable>'+
                            '<input type="file" class="form-control" name="image"'+
                        '</div>'+
                    '</div>'+
                        '</div>');
        $('#inp3').html('');
      });
      $("#gridCheck3").click(function(){
          $('#inp3').html('<div class="col-md-12">'+
                        '<div class="input-field">'+
                            '<input type="number" class="form-control" name="chq_number" placeholder="Cheque Number">'+
                        '</div>'+
                    '</div>');
        $('#inp2').html('');
      });
      $("#gridCheck").click(function(){
        $('#inp2').html('');
        $('#inp3').html('');
      });
    });
</script>
@endpush
