@extends('layouts.master')

@section('content')

    <div class="card p-2">

        <div class="card-body p-4">

            <div class="row">
                <div class="col-md-6">
                  <h2 class="fw-bold mb-4">Edit Membership Form</h2>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('member.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('member.update',$user->id) }}" id="member-inform" method="POST">

                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Name</label>

                            <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Enter your Name" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Father Name</label>

                            <input type="text" class="form-control" placeholder="Enter your Father Name" name="father_name" value="{{ $user->father_name }}" id="lastNameinput">

                        </div>

                    </div><!--end col-->
                    
                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Husband Name</label>

                            <input type="text" class="form-control" placeholder="Enter your Husband Name" name="husband_name" value="{{ $user->husband_name }}" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">CNIC NO.</label>

                            <input type="text" class="form-control" name="cnic_number" value="{{ $user->cnic_number }}" placeholder="Enter CNIC NO." id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Father CNIC NO.</label>

                            <input type="text" class="form-control" placeholder="Enter your Father CNIC NO." name="father_cnic" value="{{ $user->father_cnic }}" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Date Of Birth</label>

                            <input type="date" class="form-control" placeholder="Enter Date Of Birth" value="{{ $user->dob }}" name="dob" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <label class="" for="specificSizeSelect">Gender</label>

                        <select class="form-select" name="gender" data-choices="" data-choices-sorting="true" id="specificSizeSelect">

                            <option selected>Male</option>

                            <option value="Female">Female</option>

                        </select>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Qualification</label>

                            <input type="text" class="form-control" name="qualification" value="{{ $user->qualification }}" placeholder="Enter Last Qualification" id="firstNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Occupation</label>

                            <input type="text" class="form-control" placeholder="Enter Occupation or Profession" value="{{ $user->occupation }}" name="occupation" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Complete Address</label>

                            <input type="text" class="form-control" name="address" placeholder="Enter Complete Address" value="{{ $user->address }}" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Area</label>

                            <input type="text" class="form-control" name="area" value="{{ $user->area }}" placeholder="Enter Area" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">City</label>

                            <input type="text" class="form-control" name="city" value="{{ $user->city }}" placeholder="Enter City" id="compnayNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="compnayNameinput" class="form-label">Country</label>

                            <input type="text" class="form-control" name="country" value="{{ $user->country }}" placeholder="Enter Country" id="compnayNameinput">

                        </div>

                    </div><!--end col-->



                    <hr>



                    <div class="col-6">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Baradari Member Verified By :</label>

                            <input type="text" class="form-control" name="verified_by" value="{{ $user->verified_by }}" placeholder="" id="">

                        </div>

                    </div><!--end col-->

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="lastNameinput" class="form-label">Form Received By:</label>

                            <input type="text" class="form-control" placeholder="" name="received_by" value="{{ $user->received_by }}" id="lastNameinput">

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Form Received On:</label>

                            <input type="date" class="form-control" name="received_at" placeholder="" value="{{ $user->received_at }}" id="firstNameinput">

                        </div>

                    </div><!--end col-->



                    <div class="col-4">

                        <div class="mb-3">

                            <label for="firstNameinput" class="form-label">Membership Number:</label>

                            <input type="text" class="form-control" name="membership_number" value="{{ $user->membership_number }}" placeholder="" id="firstNameinput">

                        </div>

                    </div><!--end col-->



                    <div class="col-4 d-flex mt-4">

                        <label for="" class="form-label">Baradari Member</label>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="baradari_member" {{ ($user->baradari_member) ==  'Yes' ? 'checked' : '' }} value="Yes" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                Yes

                            </label>

                        </div>

                        <div class="form-check mx-2">

                            <input class="form-check-input" name="baradari_member" {{ ($user->baradari_member) ==  'No' ? 'checked' : '' }} value="No" type="radio" id="gridCheck">

                            <label class="form-check-label" for="gridCheck">

                                No

                            </label>

                        </div>

                    </div>



                    <div class="col-12 text-center">

                        <button type="submit" class="btn btn-primary">Update</button>

                    </div>

                </form>

                <div class="col-12 mt-4 mb-4">&nbsp;</div>

                    <div class="col-4">

                        <label for="lastNameinput" class="form-label">Phone Number</label>

                        <div class="mb-3">

                            @foreach ($mobile_numbers as $number)

                                <div class="input-group mt-1">

                                    <input type="number" class="form-control" data-id="{{ $number->member_id }}" value="{{ $number->phone_number }}" placeholder="Enter Mobile Number" aria-label="Recipient's username" aria-describedby="button-addon2">

                                    <button class="btn btn-outline-danger shadow-none delete_number" data-route="{{ route('phone.destroy',$number->id) }}" type="button" id="button-addon2">X</button>

                                    <button class="btn btn-outline-info shadow-none update_number" data-route="{{ route('phone.update',$number->id) }}" type="button" id="button-addon2">✓</button>

                                </div>

                            @endforeach

                            <div class="extra_number">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_number">Add Another Number +</button>

                        </div>

                    </div><!--end col-->

                    <div class="col-4">

                        <label for="lastNameinput" class="form-label">Telephone Number</label>

                        <div class="mb-3">

                            @foreach ($telephone_numbers as $number)

                                <div class="input-group mt-1">

                                    <input type="number" class="form-control" data-id="{{ $number->member_id }}" value="{{ $number->phone_number }}" placeholder="Enter Telephone Number" aria-label="Recipient's username" aria-describedby="button-addon2">

                                    <button class="btn btn-outline-danger shadow-none delete_number" data-route="{{ route('phone.destroy',$number->id) }}" type="button" id="button-addon2">X</button>

                                    <button class="btn btn-outline-info shadow-none update_number" data-route="{{ route('phone.update',$number->id) }}" type="button" id="button-addon2">✓</button>

                                </div>

                            @endforeach

                            <div class="extra_tel">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_tel">Add Another Number +</button>

                        </div>

                    </div>

                    <div class="col-4">

                        <label for="lastNameinput" class="form-label">Emails</label>

                        <div class="mb-3">

                            @foreach ($emails as $email)

                                <div class="input-group mt-1">

                                    <input type="email" class="form-control" data-id="{{ $email->member_id }}" value="{{ $email->email }}" placeholder="Email @" aria-label="Recipient's username" aria-describedby="button-addon2">

                                    <button class="btn btn-outline-danger shadow-none delete_email" data-route="{{ route('email.destroy',$email->id) }}" type="button" id="button-addon2">X</button>

                                    <button class="btn btn-outline-info shadow-none update_email" data-route="{{ route('email.update',$email->id) }}" type="button" id="button-addon2">✓</button>

                                </div>

                            @endforeach

                            <div class="extra_emails">

                            </div>

                            <button class="btn btn-primary mt-2" type="button" id="add_additional_email">Add Another Email +</button>

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

                                        <th scope="col">Action</th>

                                    </tr>

                                </thead>

                                <tbody class="dependents">

                                    @foreach ($dependents as $dependent)

                                    <tr class="single-dependent">

                                        <td><input type="text" value="{{ $dependent->name }}" name="dependent_name" class="form-control"></td>

                                        <td><input type="date" value="{{ $dependent->dob }}" name="dependent_dob" class="form-control"></td>

                                        <td>
                                            <select name="dependent_relation" class="form-control">
                                                <option value="">Select</option>
                                                <option {{ ($dependent->relation) == 'Father' ? 'selected' : '' }} value="Father">Father</option>
                                                <option {{ ($dependent->relation) == 'Mother' ? 'selected' : '' }} value="Mother">Mother</option>
                                                <option {{ ($dependent->relation) == 'Brother' ? 'selected' : '' }} value="Brother">Brother</option>
                                                <option {{ ($dependent->relation) == 'Sister' ? 'selected' : '' }} value="Sister">Sister</option>
                                                <option {{ ($dependent->relation) == 'Son' ? 'selected' : '' }} value="Son">Son</option>
                                                <option {{ ($dependent->relation) == 'Daughter' ? 'selected' : '' }} value="Daughter">Daughter</option>
                                            </select>
                                        </td>

                                        <td>

                                            <button class="btn btn-outline-danger shadow-none delete_dependent" data-route="{{ route('dependent.destroy',$dependent->id) }}" type="button" id="button-addon2">X</button>

                                            <button class="btn btn-outline-info shadow-none update_dependent" data-route="{{ route('dependent.update',$dependent->id) }}" type="button" id="button-addon2">✓</button>

                                        </td>

                                    </tr>

                                   @endforeach

                                </tbody>

                            </table>

                            <button class="btn btn-primary ms-5 float-end mt-3" type="button" id="add_dependent">Add Another Dependent +</button>

                        </div>

                    </div>





                </div><!--end row-->

            </form>

        </div>

    </div>

@endsection

@section('scripts')

<script>

    $(document).on("click","#add_number", function () {


        var input = '' +

            '<div class="input-group mt-1">' +

            '    <input type="number" class="form-control" data-id="{{ $user->id }}" placeholder="Enter Mobile Number" aria-label="Recipient\'s username" aria-describedby="button-addon2">' +

            '    <button class="btn btn-outline-danger shadow-none" type="button" onclick="$(this).parent().remove();" id="button-addon2">X</button>' +

            '    <button class="btn btn-outline-info shadow-none add_number" data-type="Mobile" type="button" id="button-addon2">✓</button>' +

            '</div>' +

            '';



        $('.extra_number').append(input);

    });

</script>

<script>

    $(document).on("click","#add_additional_email", function () {


        var input = '' +

            '<div class="input-group mt-1">' +

            '    <input type="email" class="form-control" data-id="{{ $user->id }}" placeholder="Email @" aria-label="Recipient\'s username" aria-describedby="button-addon2">' +

            '    <button class="btn btn-outline-danger shadow-none" type="button" onclick="$(this).parent().remove();" id="button-addon2">X</button>' +

            '    <button class="btn btn-outline-info shadow-none add_additional_email" type="button" id="button-addon2">✓</button>' +

            '</div>' +

            '';



        $('.extra_emails').append(input);

    });

</script>



<script>

$(document).on("click","#add_tel", function () {



    var input = '' +

            '<div class="input-group mt-1">' +

            '    <input type="number" class="form-control" data-id="{{ $user->id }}" placeholder="Enter Telephone Number" aria-label="Recipient\'s username" aria-describedby="button-addon2">' +

            '    <button class="btn btn-outline-danger shadow-none" type="button" onclick="$(this).parent().remove();" id="button-addon2">X</button>' +

            '    <button class="btn btn-outline-info shadow-none add_number" data-type="Telephone" type="button" id="button-addon2">✓</button>' +

            '</div>' +

            '';



    $('.extra_tel').append(input);

});

</script>



<script>

    $(document).on("click","#add_dependent", function () {

        var tr = '' +

            '<tr class="single-dependent">' +

            '    <td><input type="text" value="" name="dependent_name" class="form-control"></td>' +

            '    <td><input type="date" value="" name="dependent_dob" class="form-control"></td>' +
            '     <td>' +
            '    <select name="dependent_relation" class="form-control">' +
            '        <option value="">Select</option>' +
            '        <option value="Father">Father</option>' +
            '        <option value="Mother">Mother</option>' +
            '        <option value="Brother">Brother</option>' +
            '        <option value="Sister">Sister</option>' +
            '        <option value="Son">Son</option>' +
            '        <option value="Daughter">Daughter</option>' +
            '    </select>' +

            '     </td>' +

            '    <td>' +

            '        <button class="btn btn-outline-danger shadow-none remove_dependent" type="button" id="button-addon2">X</button>' +

            '        <button class="btn btn-outline-info shadow-none store_dependent" data-id="{{ $user->id }}" type="button" id="button-addon2">✓</button>         ' +

            '    </td>' +

            '</tr>' +

            '';



        $('.dependents').append(tr);

    });

</script>

<script>
    $(document).on("click",".remove_dependent", function () {
        $(this).closest("tr").remove();
    });
</script>


<script type="text/javascript">



    $(document).on("click",".store_dependent",function(){



        var name = $(this).closest("tr").find("input[name='dependent_name']").val();

        var dob = $(this).closest("tr").find("input[name='dependent_dob']").val();

        var relation = $(this).closest("tr").find("select[name='dependent_relation']").val();

        var member_id = $(this).attr('data-id');

        var url = "{{ route('dependent.store') }}";



        $.ajax({

           type:'POST',

           url: url,

           data:{

            name: name,
            dob: dob,
            relation: relation,
            member_id: member_id,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>





<script type="text/javascript">



    $(document).on("click",".update_dependent",function(){



        var name = $(this).closest("tr").find("input[name='dependent_name']").val();

        var dob = $(this).closest("tr").find("input[name='dependent_dob']").val();

        var relation = $(this).closest("tr").find("select[name='dependent_relation']").val();

        var url = $(this).attr('data-route');



        $.ajax({

           type:'GET',

           url: url,

           data:{

            name: name,

            dob: dob,

            relation: relation,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>



<script type="text/javascript">



    $(document).on("click",".delete_dependent",function(){

        swal({
            title: "Are you sure remove?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                var name = $(this).closest("tr").find("input[name='dependent_name']").val();

                var url = $(this).attr('data-route');

                $(this).closest("tr").remove();



                $.ajax({

                    type:'GET',

                    url: url,

                    data:{

                        name: name,

                        _token:"{{ csrf_token() }}"

                    },

                    success:function(data){

                        swal("Your Dependent has been removed!", {
                            icon: "success",
                            });

                    }

                    });


            }

            else {
                swal("Your Dependent is safe!");
            }
        });


    });

</script>


{{-- TELEPHONE AND PHONE ACTIONS --}}
<script type="text/javascript">



    $(document).on("click",".add_number",function(){



        var number = $(this).closest(".input-group").find("input[type='number']").val();

        var member_id = $(this).closest(".input-group").find("input[type='number']").attr('data-id');

        var type = $(this).attr('data-type');

        var url = "{{ route('phone.store') }}";



        $.ajax({

           type:'POST',

           url: url,

           data:{

            number:number,

            member_id:member_id,

            type:type,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>



<script type="text/javascript">



    $(document).on("click",".update_number",function(){



        var number = $(this).closest(".input-group").find("input[type='number']").val();

        var member_id = $(this).closest(".input-group").find("input[type='number']").attr('data-id');

        var url = $(this).attr('data-route');



        $.ajax({

           type:'PUT',

           url: url,

           data:{

            number:number,

            member_id:member_id,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>



<script type="text/javascript">



    $(document).on("click",".delete_number",function(){


        swal({
            title: "Are you sure you want to delete?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var member_id = $(this).closest("input").attr('data-id');

                var url = $(this).attr('data-route');

                $(this).parent().remove();

                $.ajax({

                    type:'DELETE',

                    url: url,

                    data:{

                    member_id: member_id,

                    _token:"{{ csrf_token() }}",

                },

                success:function(data){

                    swal("Your Number has been deleted!", {
                    icon: "success",
                     });

                }

                });

            }


            else {
                swal("Your Number is safe!");
            }
        });






    });

</script>

{{-- ADDITIONAL EMAIL ACTIONS --}}
<script type="text/javascript">



    $(document).on("click",".add_additional_email",function(){



        var email = $(this).closest(".input-group").find("input[type='email']").val();

        var member_id = $(this).closest(".input-group").find("input[type='email']").attr('data-id');

        var url = "{{ route('email.store') }}";



        $.ajax({

           type:'POST',

           url: url,

           data:{

            email:email,

            member_id:member_id,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>



<script type="text/javascript">



    $(document).on("click",".update_email",function(){



        var email = $(this).closest(".input-group").find("input[type='email']").val();

        var member_id = $(this).closest(".input-group").find("input[type='email']").attr('data-id');

        var url = $(this).attr('data-route');



        $.ajax({

           type:'PUT',

           url: url,

           data:{

            email:email,

            member_id:member_id,

            _token:"{{ csrf_token() }}"

        },

           success:function(data){

                //

           }

        });



    });

</script>



<script type="text/javascript">

    $(document).on("click",".delete_email",function(){


        swal({
            title: "Are you sure you want to delete?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var member_id = $(this).closest("input").attr('data-id');

                var url = $(this).attr('data-route');

                $(this).parent().remove();

                $.ajax({

                    type:'DELETE',

                    url: url,

                    data:{

                    member_id: member_id,

                    _token:"{{ csrf_token() }}",

                },

                success:function(data){

                    swal("Your Email has been deleted!", {
                    icon: "success",
                     });

                }

                });

            }


            else {
                swal("Your Email is safe!");
            }
        });

    });

</script>
@endsection
