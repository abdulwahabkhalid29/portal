@extends('layouts.master')
@push('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> --}}
<style>

    #multiple-uploader {
        width: 100%;
        border: 2px dashed #CED4DA;
    }
    .image-container {
        margin: 10px;
        width: 100px;
        height: 100px;
        position: relative;
        cursor: auto;
        pointer-events: unset;
    }
    .image-preview {
        height: 100px;
        width : 100px
    }
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #CED4DA !important;
        background-color: #2A3042;
        border-radius: 3px;
        padding: 0.2rem;
    }
    .bootstrap-tagsinput{
        width: 100%;
    }
    </style>
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
@endpush
@section('content')
<div class="card p-2">
    <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                  <h5 class="fw-bold mb-4">Add Support Applications</h5>
                </div>
                <div class="col-md-6">
                    <div class="row g-4 " style="float: right">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('admin.supportapplication.index') }}" class="btn text-light btn-lg" style="background-color: #45cb85;"><i class="	fa fa-toggle-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       <form action="{{ route('admin.supportapplication.store') }}" method="POST" enctype="multipart/form-data" class="my-form">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-6 mt-3">
                        <div class="input-field col s12">
                            <label for="firstNameinput" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="firstNameinput" required>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Members</label>
                            <select name="member_id" class="select2 form-control " required>
                              <option selected disabled>--Select Member--</option>
                              @foreach ($users as $user)
                                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                            </select>
                        </div>    
                      </div>
                    <div class="col-12 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="" cols="20" rows="5" ></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mt-4">
                        <label for="image">Image</label>
                        <div class="multiple-uploader" id="multiple-uploader">
                            <div class="mup-msg">
                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                <span class="mup-main-msg">Click to upload images.</span>
                                <label for="" style="display: none;">
                                <input type="file" name="images[]" id="" accept="image/*" class="form-control" multiple="">
                            </label>
                        </div>
                    </div>
                    {{-- <small id="image" class="text-danger">@error ('images[]') {{ $message }} @enderror</small> --}}
                </div>
                    {{-- <input type="file" name="image[]" id=""  multiple > --}}
            {{-- <input type="file" class="filepond" id="filepond" name="image[]" multiple data-max-file-size="3MB" data-max-files="3"/> --}}
                <div class="text-end">
                    <button type="submit" class="btn text-light btn-lg" style="background-color: #45cb85">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script src="{{asset('assets/js/multiple-uploader.js')}}"></script>

<script>
let multipleUploader = new MultipleUploader('#multiple-uploader').init({
                maxUpload: 20,
                maxSize: 1,
                filesInpName: 'images',
                formSelector: '.my-form',
            });

</script>
@endpush
