@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Add Donation Type</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.donationtype.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                <form action="{{ route('admin.donationtype.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-12">
                        <div class="input-field col s12">
                            <label for="firstNameinput" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="firstNameinput">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
@endpush