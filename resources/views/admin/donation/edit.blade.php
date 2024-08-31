@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Edit Donation</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.donation.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             <form action="{{ route('admin.donation.update',$donation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label">Amount</label>
                        <input type="number" class="form-control" name="amount" value="{{ $donation->amount }}" placeholder="" required>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Donation Type</label>
                            <select name="type_id" class="select2 form-control p-3" required>
                              <option selected disabled>--Select Member--</option>
                              @foreach ($donation_types as $donation_types)
                                  <option {{ ($donation->type_id) == $donation_types->id ? 'selected' : '' }} value="{{ $donation_types->id }}">{{ $donation_types->name }}</option>
                              @endforeach
                            </select>
                        </div>    
                      </div>
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Members</label>
                            <select name="member_id" class="select2 form-control p-3" required>
                              <option selected disabled>--Select Member--</option>
                              @foreach ($users as $user)
                                  <option {{ ($donation->member_id) == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                            </select>
                        </div>    
                      </div>


                </div>
                <div class="text-end">
                    <button type="submit" class="btn" style="background-color: #45cb85  ">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endpush