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
            <form action="{{ route('admin.fees.update',$fee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="input-field">
                            <label for="" class="form-label text-body">Amount Of Fees</label>
                            <input type="number" class="form-control" name="fees" value="{{ $fee->fees }}" required>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <label for="lastNameinput" class="form-label text-body" style="font-size: 15px; padding:0px;"><b>Start Date</b></label>
                        <div class="input-field">
                            <input type="date" class="form-control" placeholder="" name="start_date" id="lastNameinput" value="{{ $fee->start_date }}" required>
                        </div>
                    </div>

                    <div class="col-6 ">
                        <label for="firstNameinput" class="form-label text-body" style="font-size: 15px;"><b>End Date</b></label>
                        <div class="input-field">
                            <input type="date" class="form-control" name="end_date" placeholder="" id="firstNameinput" value="{{ $fee->end_date }}" required>
                        </div>
                    </div>

                </div>
                <div class="text-end">
                    <button type="submit" class="btn" style="background-color: #45cb85">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endpush