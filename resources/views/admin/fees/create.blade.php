@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Enter Membership Fees</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.fees.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
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
                        <div class="input-field">
                            <label for="" class="form-label text-body">Amount Of Fees</label>
                            <input type="number" class="form-control" name="fees" required>
                        </div>
                    </div>

                    

                    <p class="mt-3"><b>Payment Mode </b></p>
                    <div class="col-6 d-flex mb-5">
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
                            <div class="form-check mx-2" id="inp3">
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="margin-top: -30px">
                        <label for="" class="form-label text-body" style="font-size: 15px;"><b>Members</b></label>
                        <select name="member_id" class="form-control" id="" required>
                            <option>-- Select Member --</option>
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">{{ $member->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 ">
                        <label for="lastNameinput" class="form-label text-body" style="font-size: 15px; padding:0px;"><b>Start Date</b></label>
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
                    <button type="submit" class="btn" style="background-color: #45cb85">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
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