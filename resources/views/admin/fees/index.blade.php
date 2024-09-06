@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
@endpush
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success alert-top-border alert-dismissible shadow fade show alert-dismissible" id="my-app" style="float: right;" role="alert">
            <i class="ri-check-double-line me-3 align-middle fs-16 text-success"></i>
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><br><br><br>
    @endif
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="">Fees History</h2>

            </div>
            <div class="col-md-6">
                <div class="row g-4 " style="float: right">
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{ route('admin.fees.create') }}" ><button type="button" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add</button></a>
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
                            <th data-sort="customer_name">Member Name</th>
                            <th data-sort="email">CNIC NO.</th>
                            <th data-sort="email">Amount Of Fees</th>
                            <th data-sort="email">Payment Type</th>
                            <th data-sort="email">Start Date</th>
                            <th data-sort="email">End Date</th>
                            <th data-sort="email">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="list form-check-all">
                        @foreach ($fees as $index=>$fee)
                            <tr>
                                <td class="text-center">{{ ++$index}}</td>
                                <td class="phone">{{ $fee->user->name }}</td>
                                <td class="date">{{ $fee->user->cnic_number }}</td>
                                <td class="date text-center">{{ $fee->fees }}</td>
                                <td class="date">{{ $fee->payment_type }}</td>
                                <td class="date">{{ date('d M Y' , strtotime( $fee->start_date ))}}</td>
                                <td class="date">{{ date('d M Y' , strtotime( $fee->end_date ))}}</td>
                                <td class="date">{!! ($fee->end_date) > date('Y-m-d') ? '<span class="badge rounded-pill bg-success">Remaining Date</span>' : '<span class="badge rounded-pill bg-danger">Past Due</span>' !!}</td>
                                <td>
                                    <a href="{{ route('admin.fees.edit',$fee->id) }}" class="text-success "><i class="fa fa-edit">  </i> Edit</a>&nbsp;|&nbsp;
                                    {{-- <a href="{{ route('admin.job-fee.destroy',$fee->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <button class="delete-fee text-danger" data-id="{{ $fee->id }}"
                                      style="border: none; background-color: transparent;"><i
                                          class="pointer-cursor fa fa-trash text-danger"> </i> Delete </button>
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
@endsection
@push('scripts')
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

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    $(document).ready(function() {
                $('.delete-fee').click(function() {
                    var feeId = $(this).data('id');
                    swal({
                            title: "Are you sure?",
                            text: "You want to delete this fees?",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    url: "{{ route('admin.fees.destroy', '') }}/" + feeId,
                                    type: "DELETE",
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                    },
                                    success: function(response) {
                                        if (response.status == 'success') {
                                            swal("Deleted!", response.message, "success");
                                            $('.fee-item-' + feeId).remove();
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
