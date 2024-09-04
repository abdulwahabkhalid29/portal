@extends('layouts.master')
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Membership Form</h3>
            <form action="javascript:void(0)">
                <div class="row">


                    <div class="card" id="contact-view-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Name :</b></label>
                                    <p style="color: gray">{{ $user->name }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Father Name :</b></label>
                                    <p style="color: gray">{{ $user->father_name }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Email ID :</b></label>
                                    <p style="color: gray">{{ $user->email }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>CNIC NO :</b></label>
                                    <p style="color: gray">{{ $user->cnic_number }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Father CNIC NO :</b></label>
                                    <p style="color: gray">{{ $user->father_cnic }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Gender :</b></label>
                                    <p style="color: gray">{{ $user->gender }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Qualification :</b></label>
                                    <p style="color: gray">{{ $user->qualification }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Date Of Birth :</b></label>
                                    <p style="color: gray">{{ $user->dob }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Occupation :</b></label>
                                    <p style="color: gray">{{ $user->occupation }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Address :</b></label>
                                    <p style="color: gray">{{ $user->address }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Area :</b></label>
                                    <p style="color: gray">{{ $user->area }}</p>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>City :</b></label>
                                    <p style="color: gray">{{ $user->city }}</p>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for=""><b>Country :</b></label>
                                    <p style="color: gray">{{ $user->country }}</p>
                                </div>
                                <hr><hr>
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Form Recieved By :</b></label>
                                    <p style="color: gray">{{ $user->received_by }}</p>
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Verified By :</b></label>
                                    <p style="color: gray">{{ $user->verified_by }}</p>
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Recieved On :</b></label>
                                    <p style="color: gray">{{ $user->received_at }}</p>
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Membership Number :</b></label>
                                    <p style="color: gray">{{ $user->membership_number }}</p>
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Baradari Member :</b></label>
                                    <p style="color: gray">{{ $user->baradari_member }}</p>
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Mobile Numbers :</b></label>
                                    @foreach ($mobile_numbers as $number)
                                        <p style="color: gray">{{ $number->phone_number }}</p>
                                    @endforeach
                                </div>                                
                                <div class="col-md-2 mt-3">
                                    <label for=""><b>Telephone Numbers :</b></label>
                                    @foreach ($telephone_numbers as $number)
                                        <p style="color: gray">{{ $number->phone_number }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Annual Membership Fee History:</h4>   
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
                                        @foreach ($member_information as $key => $fee)
                                        <tr>
                                            <td>Rs. {{ $fee->fees }}/-</td>
                                            <td>{{ $fee->payment_type }}</td>
                                            <td>{{ date('d M Y' , strtotime( $fee->start_date ))}}</td>
                                            <td>{{ date('d M Y' , strtotime( $fee->end_date ))}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>     
                        </div>

                   
                    <div class="col-md-6 mt-3">
                        <div class="table-responsive table-card">
                            <h4>Details Of Dependents :</h4>   
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
                                    <tr>
                                        <td>{{ $dependent->name }}</td>
                                        <td>{{ date('d M Y' , strtotime( $dependent->dob ))}}</td>
                                        <td>{{ $dependent->relation }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div><!--end row-->
            </form>
        </div>
    </div>
@endsection
