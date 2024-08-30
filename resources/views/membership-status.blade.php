@extends('layouts.app')
@section('title','Membership Status')
@section('content')



    <div class="auth-page-wrapper pt-5">



        <!-- auth page content -->

        <div class="auth-page-content mt-5">

            <div class="container">



                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="card mt-5">

                            <div class="card-body p-4">

                                <h4 class="fw-bold">Membership Status</h4>

                                <div class="p-2 mt-4">

                                        <div class="mb-3">

                                            <label for="email" class="form-label">CNIC</label>

                                            <input type="text" name="email" class="form-control nic_number" id="cnic" placeholder="Enter your CNIC Number">

                                            <small>Please enter CNIC Number without any hyphens or dashes</small>

                                        </div>



                                        <div class="mt-4">

                                            <button class="btn btn-success w-100  check-status" type="submit">Check</button>

                                        </div>



                                        <div class="mt-4 text-center">

                                            

                                            <div>

                                                

                                                <div>

                                                    <p class="fw-bold text-success mt-2 membership-status"></p>

                                                </div>

                                                <div class="spinner-border text-dark mt-3 d-none loader" role="status">

                                                    <span class="sr-only">Loading...</span>

                                                </div>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                            <!-- end card body -->

                        </div>

                        <!-- end card -->





                    </div>

                </div>

                <!-- end row -->

            </div>

            <!-- end container -->

        </div>

        <!-- end auth page content -->



        <!-- footer -->

@endsection

 @section('scripts')
 <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
 <script>
     $(":input").inputmask();
 
     $(".nic_number").inputmask({"mask": "99999-9999999-9"});
 </script>

 <script>

    $(document).on("click",".check-status", function () {

        var cnic = $('#cnic').val();
            $('.loader').removeClass('d-none');
       
            $.ajax({
                type:'GET',
                url: "{{ route('check.membership') }}",
                data:{
                    cnic: cnic,
                    },
                success:function(data){
                    if(data.result == 'Not Registered !'){
                        $('.membership-status').text(data.result);
                        $('.membership-status').removeClass('text-success');
                        $('.membership-status').addClass('text-danger');
                    }
                    else {
                        $('.membership-status').text(data.result);
                        $('.membership-status').removeClass('text-danger');
                        $('.membership-status').addClass('text-success');
                    }
                $('.loader').addClass('d-none');
            }
        });
    });
</script>

 @endsection