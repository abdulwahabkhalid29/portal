@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
@endpush
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success alert-top-border alert-dismissible shadow fade show alert-dismissible" style="float: right;" role="alert">
            <i class="ri-check-double-line me-3 align-middle fs-16 text-success"></i>
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><br><br><br>
    @endif
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="">Donation</h2>

            </div>
            <div class="col-md-6">
                <div class="row g-4 " style="float: right">
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{route('admin.donation.create')}}" ><button type="button" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add</button></a>
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
                            <th class="text-center">No.</th>
                            <th data-sort="name">Donation Id</th>
                            <th data-sort="name">Member Id</th>
                            <th class="text-center" data-sort="email">Amount</th>
                            <th data-sort="phone">Action</th>

                        </tr>
                    </thead>
                    <tbody class="list form-check-all ">
                        @foreach ($donations as $index=>$donation)
                            <tr>
                                <td class="text-center">{{ ++$index}}</td>
                                <td >{{ $donation->donation->name }}</td>
                                <td >{{ $donation->member->name }}</td>
                                <td class="mt-5 text-center">{{ $donation->amount }}</td>
                                <td class="mt-5">
                                  <a href="{{ route('admin.donation.edit',$donation->id) }}" class="text-success  p-1"><i class="fa fa-edit"> </i> Edit</a>&nbsp;|&nbsp;
                                  {{-- <a href="{{ route('admin.donation.destroy',$donation->id) }}" class="text-danger p-1"><i class="fa fa-trash"> Delete</i></a> --}}
                                  <button class="delete-donation text-danger" data-id="{{ $donation->id }}"
                                    style="border: none; background-color: transparent;"><i
                                        class="pointer-cursor fa fa-trash text-danger"> </i> Delete</button>
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
                        <p class="text-muted mb-0">We've searched, We did not find any for you search.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex justify-content-end">
                <div class="pagination-wrap hstack gap-2">
                    <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                        Previous
                    </a>
                    <ul class="pagination listjs-pagination mb-0"></ul>
                    <a class="page-item pagination-next" href="javascript:void(0);">
                        Next
                    </a>
                </div>
            </div> --}}
        </div>
    </div><!-- end card -->
</div>

<!-- Secondary Alert -->
<!-- Toast -->
  {{-- <button type="button" data-toast data-toast-text="Business status updated !" data-toast-gravity="top" data-toast-position="right" data-toast-className="primary" data-toast-duration="3000" data-toast-close="close" data-toast-style="style" class="btn btn-light w-xs d-none update-msg">Default</button> --}}
@endsection
@push('scripts')
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
$(document).ready(function() {
            $('.delete-donation').click(function() {
                var donationId = $(this).data('id');
                swal({
                        title: "Are you sure?",
                        text: "You want to delete this Job?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ route('admin.donation.destroy', '') }}/" + donationId,
                                type: "DELETE",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    if (response.status == 'success') {
                                        swal("Deleted!", response.message, "success");
                                        $('.donation-item-' + donationId).remove();
                                    } else {
                                        swal("Error!", response.message, "error");
                                    }
                                    window.location.reload();
                                }
                            })

                        }
                    });
            });
        });
</script>
@endpush
