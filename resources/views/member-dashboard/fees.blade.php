@extends('layouts.app')
@section('title','Fees History')
@section('content')

    <!-- start hero section -->

    <section class="section hero-section" id="hero">

      <div class="bg-overlay bg-overlay-pattern"></div>

      <div class="container">

          <div class="row justify-content-center">

            <div class="text-start mb-3">

              <a href="{{ route('member.dashboard') }}"><button type="button" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back</button></a>

            </div>

              <div class="card">

                <div class="card-body">

                  <div class="listjs-table" id="customerList">

                      <div class="row g-4 mb-3">

                          <div class="col-sm-auto">

                              <div>

                                  <h4 class="fw-bold">Your Fees History</h4>

                              </div>

                          </div>

                          <div class="col-sm">

                              <div class="d-flex justify-content-sm-end">

                                  <div class="search-box ms-2">

                                      <input type="text" class="form-control search" placeholder="Search...">

                                      <i class="ri-search-line search-icon"></i>

                                  </div>

                              </div>

                          </div>

                      </div>

          

                      <div class="table-responsive table-card mt-3 mb-1">

                          <table class="table align-middle table-nowrap" id="customerTable">

                              <thead class="table-light">

                                  <tr>

                                      <th></th>

                                      <th class="sort" data-sort="customer_name">Member Name</th>

                                      <th class="sort" data-sort="email">CNIC NO.</th>

                                      <th class="sort" data-sort="email">Amount Of Fees</th>

                                      <th class="sort" data-sort="email">Payment Type</th>

                                      <th class="sort" data-sort="email">Start Date</th>

                                      <th class="sort" data-sort="email">End Date</th>

                                      <th class="sort" data-sort="email">Status</th>

                                  </tr>

                              </thead>

                              <tbody class="list form-check-all">

                                  @foreach ($fees as $fee)

                                      <tr>

                                          <td></td>

                                          <td class="phone">{{ $fee->user->name }}</td>

                                          <td class="date">{{ $fee->user->cnic_number }}</td>

                                          <td class="date">{{ $fee->fees }}</td>

                                          <td class="date">{{ $fee->payment_type }}</td>

                                          <td class="date">{{ $fee->start_date }}</td>

                                          <td class="date">{{ $fee->end_date }}</td>

                                          <td class="date">{!! ($fee->end_date) > date('Y-m-d') ? '<span class="badge rounded-pill bg-success">Remaining Date</span>' : '<span class="badge rounded-pill bg-danger">Past Due</span>' !!}</td>

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

          

                      <div class="d-flex justify-content-end">

                          <div class="pagination-wrap hstack gap-2">

                              <a class="page-item pagination-prev disabled" href="javascript:void(0);">

                                  Previous

                              </a>

                              <ul class="pagination listjs-pagination mb-0"></ul>

                              <a class="page-item pagination-next" href="javascript:void(0);">

                                  Next

                              </a>

                          </div>

                      </div>

                  </div>

              </div><!-- end card -->

              </div>

          </div>

          <!-- end row -->

      </div>

      <!-- end container -->

  </section>

  <!-- end hero section -->

@endsection