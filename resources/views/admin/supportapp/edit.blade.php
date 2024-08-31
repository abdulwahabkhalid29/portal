@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endpush
@section('content')
    <div class="card p-2">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Edit Support Applications</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.supportapplication.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             <form action="{{ route('admin.supportapplication.update',$support_application->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <label for="" class="form-label"> Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $support_application->title }}" placeholder="" required>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label"> Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10" required>{{ $support_application->description }}</textarea>
                        </div>
                    </div>
                </div>
            <input type="file" class="filepond" name="image" multiple data-max-file-size="3MB" data-max-files="3"/>

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