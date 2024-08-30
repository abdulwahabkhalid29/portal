@extends('layouts.master')

@section('content')

    <div class="card p-2">

        <div class="card-body p-4">

            <h3 class="fw-bold mb-4">Membership Form</h3>

            <form action="{{ route('member.store') }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Name</label>

                            <input type="text" class="form-control" name="name" placeholder="Enter your Name" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Father Name</label>

                            <input type="text" class="form-control" placeholder="Enter your Father Name" name="father_name" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Email</label>

                            <input type="text" class="form-control" name="email" placeholder="Enter Email" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Password</label>

                            <input type="password" class="form-control" placeholder="Enter Password" name="password" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">CNIC NO.</label>

                            <input type="text" class="form-control" name="cnic_number" placeholder="Enter CNIC NO." id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Father CNIC NO.</label>

                            <input type="text" class="form-control" placeholder="Enter your Father CNIC NO." name="father_cnic" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Date Of Birth</label>

                            <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="dob" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <label class="" for="specificSizeSelect">Gender</label>

                        <select class="form-select" name="gender" data-choices="" data-choices-sorting="true" id="specificSizeSelect">

                            <option selected="">Choose...</option>

                            <option value="Male">Male</option>

                            <option value="Female">Female</option>

                        </select>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Qualification</label>

                            <input type="text" class="form-control" name="qualification" placeholder="Enter Last Qualification" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Occupation</label>

                            <input type="text" class="form-control" placeholder="Enter Occupation or Profession" name="occupation" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-12">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Address</label>

                            <input type="text" class="form-control" name="address" placeholder="Enter Complete Address" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Area</label>

                            <input type="text" class="form-control" name="area" placeholder="Enter Area" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">City</label>

                            <input type="text" class="form-control" name="city" placeholder="Enter City" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Country</label>

                            <input type="text" class="form-control" name="country" placeholder="Enter Country" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Mobile Number</label>

                            <input type="number" class="form-control" placeholder="Enter Mobile Number" name="phone_number[]" id="member_phone">

                            <div class="extra_number">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_number">Add Another Number +</button>

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Telephone Number</label>

                            <input type="number" class="form-control" placeholder="Enter Telephone Number" name="telephone_number[]" id="member_tel">

                            <div class="extra_tel">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_tel">Add Another Number +</button>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Addtional Emails</label>

                            <input type="email" class="form-control" placeholder="Email @" name="additional_email[]" id="member_additional_email">

                            <div class="extra_emails">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_additional_email">Add Another Email +</button>

                        </div>

                    </div>

                    

                    <hr>

                    

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Baradari Member Verified By :</label>

                            <input type="text" class="form-control" name="verified_by" placeholder="" id="">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Form Received By:</label>

                            <input type="text" class="form-control" placeholder="" name="received_by" id="lastNameinput">

                        </div>

                    </div><!--end col-->



                    <div class="col-4">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Form Received On:</label>

                            <input type="date" class="form-control" name="received_at" placeholder="" id="firstNameinput">

                        </div>

                    </div><!--end col-->



                    <div class="col-4">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Membership Number:</label>

                            <input type="number" class="form-control" name="membership_number" placeholder="" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    

                    <div class="col-4 d-flex mt-4">

                        <label for="" class="form-label">Baradari Member</label>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="baradari_member" value="Yes" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                Yes

                            </label>

                        </div>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="baradari_member" value="No" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                No

                            </label>

                        </div>

                    </div>



                    <hr>

                    

                    <p class="fw-bold">Annual Membership Fee: (Kindly select your choice of annual fee)</p>



                   <div class="col-12 mb-3">

                        <label for="compnayNameinput" class="form-label">Fees</label>

                        <input type="number" class="form-control w-50" name="fees" placeholder="" id="compnayNameinput">

                   </div>

                

                   {{-- <div class="col-6 mt-2">

                        <input type="number" class="form-control" name="other_fee" placeholder="Any Other Amount" id="">

                    </div> --}}



                    <p class="fw-bold mt-4">Payment Mode</p>

                    <div class="col-12 d-flex">

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="payment_type" value="Cash" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                Cash

                            </label>

                        </div>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="payment_type" value="Online Transfer" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                Online Transfer

                            </label>

                        </div>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="payment_type" value="Cheque" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                Cheque

                            </label>

                        </div>

                    </div>





                    <div class="col-6 mt-5">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Start Date</label>

                            <input type="date" class="form-control" placeholder="" name="start_date" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6 mt-5">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">End Date</label>

                            <input type="date" class="form-control" name="end_date" placeholder="" id="firstNameinput">

                        </div>

                    </div><!--end col-->



                    <hr>



                    <div class="col-12">

                        <div class="table-responsive table-card mt-4">

                                <p class="fw-bold fs-15">Details Of Dependents :</p>

                            <table class="table table-nowrap mb-0">

                                <thead class="table-light">

                                    <tr>

                                        <th scope="col">Name</th>

                                        <th scope="col">Date Of Birth</th>

                                        <th scope="col">Relation</th>

                                        <th scope="col">Remove</th>

                                    </tr>

                                </thead>

                                <tbody class="dependents">

                                    <tr>

                                        <td><input type="text" name="dependent_name[]" class="form-control"></td>

                                        <td><input type="date" name="dependent_dob[]" class="form-control"></td>

                                        <td>
                                            <select name="dependent_relation[]" class="form-control">
                                                <option value="">Select</option>
                                                <option value="Father">Father</option>
                                                <option value="Mother">Mother</option>
                                                <option value="Brother">Brother</option>
                                                <option value="Sister">Sister</option>
                                                <option value="Son">Son</option>
                                                <option value="Daughter">Daughter</option>
                                            </select>
                                            {{-- <input type="text" name="dependent_relation[]" class="form-control"> --}}
                                        </td>

                                        <td><button type="button" class="btn remove-dependent">X</button></td>

                                    </tr>

                                </tbody>

                            </table>



                            <button class="btn btn-primary ms-5 float-end mt-3" type="button" id="add_dependent">Add Another Dependent +</button>



                        </div>

                    </div>



                    <div class="col-lg-12 mt-4">

                        <div class="text-center">

                            <button type="submit" class="btn btn-primary w-25">Submit</button>

                        </div>

                    </div><!--end col-->

                </div><!--end row-->

            </form>

        </div>

    </div>

@endsection

@section('scripts')

    <script>

        $(document).on("click","#add_number", function () {



            var input = '' + 

            '<input type="number" class="form-control mt-2" placeholder="Enter Mobile Number" name="phone_number[]" id="member_phone" required>' + 

            '' + 

            '';



            $('.extra_number').append(input);

        });

    </script>


<script>

    $(document).on("click","#add_additional_email", function () {

        var input = '' + 

        '<input type="email" class="form-control mt-2" placeholder="Email @" name="additional_email[]" id="member_additional_email" required>' + 
        '' + 
        '';

        $('.extra_emails').append(input);

    });

</script>



<script>

    $(document).on("click","#add_tel", function () {



        var input = '' + 

        '<input type="number" class="form-control mt-2" placeholder="Enter Telephone Number" name="telephone_number[]" id="member_telephone" required>' + 

        '' + 

        '';



        $('.extra_tel').append(input);

    });

</script>



    <script>

        $(document).on("click","#add_dependent", function () {

            var tr = '' + 

            '<tr>' + 

            '   <td><input type="text" name="dependent_name[]" class="form-control"></td>' + 

            '   <td><input type="date" name="dependent_dob[]" class="form-control"></td>' + 

            '   <td>' +
            '    <select name="dependent_relation[]" class="form-control">' + 
            '        <option value="">Select</option>' + 
            '        <option value="Father">Father</option>' + 
            '        <option value="Mother">Mother</option>' + 
            '        <option value="Brother">Brother</option>' + 
            '        <option value="Sister">Sister</option>' + 
            '        <option value="Son">Son</option>' + 
            '        <option value="Daughter">Daughter</option>' + 
            '    </select>' + 
            '   </td>' + 

            '   <td><button type="button" class="btn remove-dependent">X</button></td>' +

            ' </tr>' + 

            '';

            $('.dependents').append(tr);

        });

    </script>

    <script>

        $(document).on("click",".remove-dependent", function () {

            $(this).closest("tr").remove();

        });

    </script>

@endsection