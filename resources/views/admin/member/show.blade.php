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
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{ $user->name }}</h3>
                            <p class="text-white text-opacity-75">{{ $user->father_name }}</p>
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
                                                                <p style="color: gray">{{ date('d M Y' , strtotime( $seeker->created_at ))}}</p>
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
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="{{asset('assets/images/user.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                @forelse ($businesses as $business)
                                                                    <h5 class="fs-14 mb-1">{{$business->name}}</h5>
                                                                    <small><a href="javascript:;" class="text-success edit-item-btn"> <i class="fa fa-edit"> </i> Edit</a></small>
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
                                                                    <p>E-mail :</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->email}}</p>
                                                                </div>
                                                                <div class="col-md-12"></div>
                                                                <div class="col-md-3">
                                                                    <p>CNIC NO :</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->cnic_number}}</p>
                                                                </div>
                                                                <div class="col-md-12"></div>
                                                                <div class="col-md-3">
                                                                    <p>Membership Number :</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->membership_number}}</p>
                                                                </div>
                                                                <div class="col-md-12"></div>
                                                                <div class="col-md-3">
                                                                    <p>City :</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->city}}</p>
                                                                </div>
                                                                <div class="col-md-12"></div>
                                                                <div class="col-md-3">
                                                                    <p>Location :</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p>{{$user->address}}</p>
                                                                </div>
                                                            </div>
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
    </div><!-- End Page-content -->
@endsection
