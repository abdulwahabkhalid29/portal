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
            width: 100px
        }
</style>
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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
                                <a href="{{ route('admin.supportapplication.index') }}" class="btn text-light btn-lg" style="background-color: #45cb85;"><i class="	fa fa-toggle-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             <form action="{{ route('admin.supportapplication.update',$support_application->id) }}" method="POST" enctype="multipart/form-data" class="my-form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 mt-3">
                        <label for="" class="form-label"> Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $support_application->title }}" placeholder="" required>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Members</label>
                            <select name="member_id" class="select2 form-control " required>
                              <option selected disabled>--Select Member--</option>
                              @foreach ($users as $user)
                                  <option {{ ($support_application->member_id) == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                            </select>
                        </div>    
                      </div>
                    <div class="col-12 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label"> Description</label>
                            <textarea name="description" class="form-control" id="" cols="20" rows="5" required>{{ $support_application->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 mt-4">
                    <label for="image">Image</label>
                    <div class="multiple-uploader" id="multiple-uploader">
                        <div class="mup-msg">
                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                            <span class="mup-main-msg">Click to upload images.</span>
                            <label for="" style="display: none;">
                                <input type="file" name="images[]" id="" accept="image/*"
                                    class="form-control" multiple="">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        @forelse($galleries as $gallery)
                            <div class="col-md-2 m-2 text-center" style="border: 1px solid #CED4DA;">
                                <img src="{{ asset('upload/multiImage/'.$gallery->images) }}"
                                    alt="{{ $gallery->images }}" style="height: 100px; width: 200px;" class="mt-2 img-thumbnail"
                                    data-gallery-id="{{ $gallery->id }}">
                                    {{-- <b>Main image</b> --}}
                                {{-- <input type="radio" name="is_main" class="mt-2" id="is_main"
                                    @if ($gallery->is_main == 1) checked @endif> <br> --}}
                                <a href="javascript:;" class="mt-2"
                                    id="remove_image-{{ $gallery->id }}">Remove Image</a>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    {{-- <small id="image" class="text-danger">
                        @error('images[]')
                            {{ $message }}
                        @enderror
                    </small> --}}
                </div>
                {{-- <input type="file" class="filepond" name="image" multiple data-max-file-size="3MB" data-max-files="3"/> --}}

                <div class="text-end">
                    <button type="submit" class="btn btn-lg text-light" style="background-color: #45cb85  ">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script src="{{ asset('assets/js/multiple-uploader.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
         let multipleUploader = new MultipleUploader('#multiple-uploader').init({
            maxUpload: 20,
            maxSize: 1,
            filesInpName: 'images',
            formSelector: '.my-form',
        });
        $(document).on('click', '[id^="remove_image-"]', function() {
            var galleryId = $(this).attr('id').replace('remove_image-', '');

            var url = '{{ route('admin.deleteImage', ':galleryId') }}';
            url = url.replace(':galleryId', galleryId);

            var token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                success: function(data) {
                    $(`#remove_image-${galleryId}`).closest('.col-md-2').remove();
                },
                error: function(xhr, status, error) {
                    console.log('Error deleting gallery image:', error);
                }
            });
        });
</script>
@endpush
