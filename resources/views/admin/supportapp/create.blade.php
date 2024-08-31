@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
<style>
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}

</style>
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
                                <a href="{{ route('admin.supportapplication.index') }}" class="btn btn-sm" style="background-color: #45cb85;"><i class="	fa fa-toggle-left align-bottom me-1"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                       <form action="{{ route('admin.supportapplication.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-6">
                        <div class="input-field col s12">
                            <label for="firstNameinput" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="firstNameinput">
                        </div>
                    </div>
                    
                    <div class="col-6 mt-3">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <input type="file" name="image[]"  multiple data-max-file-size="3MB" data-max-files="3">
            {{-- <input type="file" class="filepond" id="filepond" name="image[]" multiple data-max-file-size="3MB" data-max-files="3"/> --}}
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
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
<script>
            FilePond.registerPlugin(
	
	// encodes the file as base64 data
  FilePondPluginFileEncode,
	
	// validates the size of the file
	FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	FilePondPluginImageExifOrientation,
	
	// previews dropped images
  FilePondPluginImagePreview
);

// Select the file input and use create() to turn it into a pond
FilePond.create(
	document.querySelector('#filepond')
);
</script>
@endpush