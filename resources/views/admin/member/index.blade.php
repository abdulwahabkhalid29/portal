@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
@endpush
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{route('download.zip')}}" method="GET" id="qrcode-zip-form">
            @csrf
            <button type="submit" class="btn text-light" style="background-color: #45cb85; margin-left:20px;" id="export_ids">Export File</button>
        </form>
    </div>
    <div class="col-md-6">@if(Session::has('success'))
        <div class="alert alert-success alert-top-border alert-dismissible shadow fade show alert-dismissible" id="my-app" style="float: right;" role="alert">
                <i class="ri-check-double-line me-3 align-middle fs-16 text-success"></i>
            {{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br><br><br>
        @endif
    </div>
</div>
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="">Members</h2>

            </div>
            <div class="col-md-6">
                <div class="row g-4 " style="float: right">
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{ route('member.create') }}" ><button type="button"   class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end card header -->

    <div class="card-body">
        <div class="listjs-table" id="customerList">
                <table class="table align-middle border table-hover mt-3 mb-3"  id="myTable">
                    <thead  style=" background-color:#45cb85;  color:white;">
                        <tr>
                            <th><input type="checkbox" class="text-center" id="select_all_ids"></th>
                            <th class="text-center">No.</th>
                            <th data-sort="customer_name">Member Name</th>
                            <th data-sort="email">CNIC NO.</th>
                            <th data-sort="action">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list form-check-all">
                        @foreach ($users as $index=>$user)
                            <tr>
                                <td><input type="checkbox" class="checkbox_ids text-center" form="qrcode-zip-form" name="ids[]" value="{{ $user->id }}"></td>
                                <td class="text-center">{{++$index}}</td>
                                <td class="phone">{{ $user->name }}</td>
                                <td class="date">{{ $user->cnic_number }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div class="edit">
                                            <a href="{{ route('member.show',$user->id) }}" class=" text-info edit-item-btn"> <i class="fa fa-eye"> </i> Show</a>
                                        </div>|
                                        <div class="edit">
                                            <a href="{{ route('member.edit',$user->id) }}" class="text-success edit-item-btn"> <i class="fa fa-edit"> </i> Edit</a>
                                        </div>
                                        {{-- <div class="remove">
                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                        </div> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="noresult" style="display: none">
                    <div class="text-center">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                        </lord-icon>
                        <h5 class="mt-2">Sorry! No Result Found</h5>
                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                            orders for you search.</p>
                    </div>
                </div>
            </div>



    </div><!-- end card -->
</div>
@endsection

@push('scripts')

@if (Session::has('error'))
    <script>
        swal("{{ Session::get('error') }}","","warning");
    </script>
@endif

<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script>
var milliseconds = 3000;

setTimeout(function () {
    document.getElementById('my-app').remove();
}, milliseconds);
</script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
$('#myTable').DataTable({
    "columnDefs": [ {
        "targets": 0,
        "orderable": false
        } ]
});
$( function (e) {
    $("#select_all_ids").click(function(){
        $(".checkbox_ids").prop('checked',$(this).prop('checked'));
    });
   
});
</script>
@endpush
