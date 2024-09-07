@extends('layouts.master')
@section('content')

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
                                                                    <small><a href="{{ route('admin.supportapplication.edit',$support_application->id) }}" class="text-success edit-item-btn"> <i class="fa fa-edit"> </i> Edit</a></small>
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
                                                <h3 class="card-title mb-3">Info</h3>
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <div class="row">
                                                                <div class="col-md-3">
                                                                    <p><b>E-mail :</b></p>
                                                                </div>
                                                                <div class="col-md-3">
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
                                                <h3 class="card-title mb-3">Annual Membership Fee History </h3>
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
                                                <h3 class="card-title mb-3">Details Of Dependents </h3>
                                                        <table class="table table-nowrap mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Date Of Birth</th>
                                                                    <th scope="col">Relation</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="dependents">
                                                                @forelse ($dependents as $dependent)
                                                                <tr>
                                                                    <td>{{ $dependent->name }}</td>
                                                                    <td>{{ date('d M Y' , strtotime( $dependent->dob ))}}</td>
                                                                    <td>{{ $dependent->relation }}</td>
                                                                </tr>
                                                                @empty
                                                                <td colspan="3" class="text-center">No Record Found!</td>
                                                            @endforelse
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
