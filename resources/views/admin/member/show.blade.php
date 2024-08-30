@extends('layouts.master')
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4">Membership Form</h3>
            <form action="javascript:void(0)">
                <div class="row">
                    

                    <div class="card" id="contact-view-detail">
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="fw-medium" scope="row">Name :</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Father Name :</td>
                                            <td>{{ $user->father_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Email ID :</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">CNIC NO. :</td>
                                            <td>{{ $user->cnic_number }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Father CNIC NO. :</td>
                                            <td>{{ $user->father_cnic }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Gender :</td>
                                            <td>{{ $user->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Qualification :</td>
                                            <td>{{ $user->qualification }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Date Of Birth :</td>
                                            <td>{{ $user->dob }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Occupation :</td>
                                            <td>{{ $user->occupation }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Address :</td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Area :</td>
                                            <td>{{ $user->area }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">City :</td>
                                            <td>{{ $user->city }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Country :</td>
                                            <td>{{ $user->country }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row"><hr></td>
                                            <td><hr></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="fw-medium" scope="row">Form Recieved By :</td>
                                            <td>{{ $user->received_by }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Verified By :</td>
                                            <td>{{ $user->verified_by }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Recieved On :</td>
                                            <td>{{ $user->received_at }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Membership Number :</td>
                                            <td>{{ $user->membership_number }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Baradari Member :</td>
                                            <td>{{ $user->baradari_member }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Mobile Numbers :</td>
                                            <td>
                                                @foreach ($mobile_numbers as $number)
                                                    <span class="badge bg-primary-subtle text-primary">{{ $number->phone_number }}</span>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium" scope="row">Telephone Numbers :</td>
                                            <td>
                                                @foreach ($telephone_numbers as $number)
                                                    <span class="badge bg-primary-subtle text-primary">{{ $number->phone_number }}</span>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p class="fw-bold h4">Annual Membership Fee History: </p>
                     @foreach ($member_information as $key => $fee)
                   <div class="col-12 d-flex">
                    
                    {{ $key+1 }}. <div class="form-check mx-2">
                        <input class="form-check-input" name="fees{{ $key }}" value="1200" type="radio" checked>
                        <label class="form-check-label" for="gridCheck">
                            Rs. {{ $fee->fees }}/-
                        </label>
                    </div>

                   </div>
                
                  

                    <p class="fw-bold mt-4">Payment Mode</p>
                    <div class="col-12 d-flex">
                        <div class="form-check mx-2">
                            <input class="form-check-input" name="payment_type{{ $key }}" value="Online Transfer" checked type="radio" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                {{ $fee->payment_type }}
                            </label>
                        </div>
                    </div>


                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Start Date</label>
                            <p class="border p-2">{{ $fee->start_date }}</p>
                            {{-- <input type="date" class="form-control" placeholder="" value="{{ $fee->start_date }}" name="start_date" id="lastNameinput"> --}}
                        </div>
                    </div><!--end col-->
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="firstNameinput" class="form-label">End Date</label>
                            <p class="border p-2">{{ $fee->end_date }}</p>
                            {{-- <input type="date" class="form-control" name="end_date" value="{{ $fee->end_date }}" placeholder="" id="firstNameinput"> --}}
                        </div>
                    </div><!--end col-->
                @endforeach

                    <hr>

                    <div class="col-12">
                        <div class="table-responsive table-card mt-4">
                            <div class="d-flex mb-2">
                                <p class="fw-bold fs-15">Details Of Dependents :</p>
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
                                    <tr>
                                        <td>{{ $dependent->name }}</td>
                                        <td>{{ $dependent->dob }}</td>
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