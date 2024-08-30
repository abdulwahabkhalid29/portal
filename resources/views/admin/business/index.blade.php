@extends('layouts.master')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css" />
@endpush
@section('content')
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="">Businesses</h2>

            </div>
            <div class="col-md-6">
                <div class="row g-4 " style="float: right">
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{ route('admin.business.create') }}" ><button type="button" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Add</button></a>
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
                            <th data-sort="name">Business Name</th>
                            <th data-sort="email">Business Email</th>
                            <th class="text-center" data-sort="phone">Business Phone</th>
                            <th data-sort="phone">Member Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="list form-check-all">
                        @foreach ($businesses as $index=>$business)
                            <tr>
                                <td class="text-center">{{ ++$index}}</td>
                                <td>{{ $business->name }}</td>
                                <td>{{ $business->email }}</td>
                                <td class="text-center">{{ $business->phone_number }}</td>
                                <td>{{ $business->member->name }}</td>
                                <td>
                                  <select data-id="{{ $business->id }}" class="form-control update-status">
                                    <option value="1" {{ ($business->is_approved) == 1 ? 'selected' : '' }}>Approved</option>
                                    <option value="0" {{ ($business->is_approved) == 0 ? 'selected' : '' }}>Rejected</option>
                                  </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="noresult" style="display: none">
                    <div class="text-center">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                        </lord-icon>
                        <h5 class="mt-2">Sorry! No Res  ult Found</h5>
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
  <button type="button" data-toast data-toast-text="Business status updated !" data-toast-gravity="top" data-toast-position="right" data-toast-className="primary" data-toast-duration="3000" data-toast-close="close" data-toast-style="style" class="btn btn-light w-xs d-none update-msg">Default</button>
@endsection
@section('scripts')
    <script>
      $(document).on("change",".update-status", function () {
          var is_approved = $(this).val();        
          var business_id = $(this).attr('data-id');
          
        $.ajax({
           type:'GET',
           url:"{{ route('approve.business') }}",
           data:{
            is_approved:is_approved,
            business_id:business_id
          },

           success:function(data){
            $('.update-msg').trigger('click');
           }
        });

      });
    </script>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush
