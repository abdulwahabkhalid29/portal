@extends('layouts.app')
@section('title','Profile Edit')
@section('content')

        <!-- start hero section -->

        <section class="section pb-0 hero-section" id="hero">

            <div class="bg-overlay bg-overlay-pattern"></div>

            <div class="container">

                <div class="text-start mb-3">

                    <a href="{{ route('member.dashboard') }}"><button type="button" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back</button></a>

                  </div>

                <div class="row justify-content-center">

                    <div class="card">

                        <div class="card-body">

                            <h4 class="fw-bold">Profile Edit</h4>

                            <hr>

                            <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST">

                                @csrf

                                @method('PUT')

                                <div class="row">

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="firstNameinput" class="form-label">Name</label>

                                            <input type="text" class="form-control" name="name" placeholder="Enter Name" id="firstNameinput" value="{{ auth()->user()->name }}">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="lastNameinput" class="form-label">Email</label>

                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ auth()->user()->email }}" id="lastNameinput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="phonenumberInput" class="form-label">CNIC Number</label>

                                            <input type="number" class="form-control" name="cnic_number" value="{{ auth()->user()->cnic_number }}" placeholder="Enter CNIC" id="phonenumberInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="emailidInput" class="form-label">Father CNIC Number</label>

                                            <input type="number" class="form-control" name="father_cnic" value="{{ auth()->user()->father_cnic }}" placeholder="Enter Father CNIC Number" id="emailidInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-12">

                                        <div class="mb-3">

                                            <label for="address1ControlTextarea" class="form-label">Address</label>

                                            <input type="text" class="form-control" name="address" value="{{ auth()->user()->address }}" placeholder="Address" id="address1ControlTextarea">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="citynameInput" class="form-label">City</label>

                                            <input type="text" class="form-control" name="city" value="{{ auth()->user()->city }}" placeholder="Enter your city" id="citynameInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="citynameInput" class="form-label">Country</label>

                                            <input type="text" class="form-control" name="country" value="{{ auth()->user()->country }}" placeholder="Enter your Country" id="citynameInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="citynameInput" class="form-label">Area</label>

                                            <input type="text" class="form-control" name="area" value="{{ auth()->user()->area }}" placeholder="Enter your Country" id="citynameInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="ForminputState" class="form-label">Gender</label>

                                            <select id="ForminputState" class="form-select" name="gender">

                                                <option selected>Choose...</option>

                                                <option {{ (auth()->user()->gender) == 'Male' ? 'selected' : '' }} value="Male">Male</option>

                                                <option {{ (auth()->user()->gender) == 'Female' ? 'selected' : '' }} value="Female">Female</option>

                                            </select>

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

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
                
                                    <div class="col-6">
                
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


                                    <div class="col-lg-12 mt-5">

                                        <div class="text-center">

                                            <button type="submit" class="btn btn-success w-25">Update</button>

                                        </div>

                                    </div><!--end col-->

                                </div><!--end row-->

                            </form>

                        </div>

                    </div>

                </div>

                <!-- end row -->

            </div>

            <!-- end container -->

        </section>

        <!-- end hero section -->

@endsection
@section('scripts')
{{-- Dependents Actions --}}
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

            '        <button class="btn btn-outline-info shadow-none store_dependent" data-id="{{ auth()->user()->id }}" type="button" id="button-addon2">✓</button>         ' + 

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

{{-- Telephone or Phone Number Action --}}
<script>

    $(document).on("click","#add_number", function () {


        var input = '' + 

            '<div class="input-group mt-1">' + 

            '    <input type="number" class="form-control" data-id="{{ auth()->user()->id }}" placeholder="Enter Mobile Number" aria-label="Recipient\'s username" aria-describedby="button-addon2">' + 

            '    <button class="btn btn-outline-danger shadow-none" type="button" onclick="$(this).parent().remove();" id="button-addon2">X</button>' + 

            '    <button class="btn btn-outline-info shadow-none add_number" data-type="Mobile" type="button" id="button-addon2">✓</button>' + 

            '</div>' + 

            '';



        $('.extra_number').append(input);

    });

</script>

<script>

    $(document).on("click","#add_tel", function () {
    
        var input = '' + 
    
                '<div class="input-group mt-1">' + 
    
                '    <input type="number" class="form-control" data-id="{{ auth()->user()->id }}" placeholder="Enter Telephone Number" aria-label="Recipient\'s username" aria-describedby="button-addon2">' + 
    
                '    <button class="btn btn-outline-danger shadow-none" type="button" onclick="$(this).parent().remove();" id="button-addon2">X</button>' + 
    
                '    <button class="btn btn-outline-info shadow-none add_number" data-type="Telephone" type="button" id="button-addon2">✓</button>' + 
    
                '</div>' + 
    
                '';
    
    
    
        $('.extra_tel').append(input);
    
    });
    
    </script>

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

@endsection