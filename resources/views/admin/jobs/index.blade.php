@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
@endpush
@section('content')
  @if(Session::has('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <span class="alert-icon text-success me-2">
          <i class="fa fa-check"></i>
        </span>
        {{Session::get('success')}}
      </div>
      @endif
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="">Jobs</h2>

            </div>
            <div class="col-md-6">
                <div class="row g-4 " style="float: right">
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{ route('admin.job.create') }}" ><button type="button" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add</button></a>
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
                            <th data-sort="name">Job Title</th>
                            <th data-sort="email">Job Type</th>
                            <th data-sort="phone">Job Shift</th>
                            <th class="text-center" data-sort="phone">Salary</th>
                            <th data-sort="phone">Posted at</th>
                            <th data-sort="phone">Posted at</th>
                           
                        </tr>
                    </thead>
                    <tbody class="list form-check-all ">
                        @foreach ($jobs as $index=>$job)
                            <tr>
                                <td class="text-center">{{ ++$index}}</td>
                                <td class="mt-5">{{ $job->title }}</td>
                                <td class="mt-5">{{ $job->type }}</td>
                                <td class="mt-5">{{ $job->shift }}</td>
                                <td class="text-center mt-5">{{ $job->salary }}</td>
                                <td class="mt-5">{{ $job->created_at->diffForhumans() }}</td>
                                <td class="mt-5">
                                  <a href="{{ route('admin.job.edit',$job->id) }}" class="text-success  p-1"><i class="fa fa-edit"> Edit</i></a>&nbsp;|&nbsp;
                                  {{-- <a href="{{ route('admin.job.destroy',$job->id) }}" class="text-danger p-1"><i class="fa fa-trash"> Delete</i></a> --}}
                                  <button class="delete-job" data-id="{{ $job->id }}"
                                    style="border: none; background-color: transparent;"><i
                                        class="pointer-cursor fa fa-trash text-danger"> Delete</i> </button>
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
            $('.delete-job').click(function() {
                var jobId = $(this).data('id');
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
                                url: "{{ route('admin.job.destroy', '') }}/" + jobId,
                                type: "DELETE",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    if (response.status == 'success') {
                                        swal("Deleted!", response.message, "success");
                                        $('.job-item-' + jobId).remove();
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