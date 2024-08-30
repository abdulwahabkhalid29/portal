@extends('layouts.app')
@section('title','Business Registration')
@section('content')

        <!-- start hero section -->

        <section class="section pb-0 hero-section" id="hero">

            <div class="bg-overlay bg-overlay-pattern"></div>

            <div class="container">

                <div class="text-start mb-3">

                    <a href="{{ route('member.dashboard') }}"><button type="button" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back</button></a>

                  </div>

                <div class="row justify-content-center">

                    <div class="card">

                        <div class="card-body">

                            <h4 class="fw-bold">Business Registration</h4>

                            <hr>

                            <form action="{{ route('business.store') }}" method="POST">

                                @csrf

                                @method('POST')

                                <div class="row">

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="firstNameinput" class="form-label">Business Name<span class="text-danger">*</span></label>

                                            <input type="text" class="form-control" name="name" placeholder="Business Name" id="firstNameinput" value="" required>

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-6">

                                        <div class="mb-3">

                                            <label for="lastNameinput" class="form-label">Business Email<span class="text-danger">*</span></label>

                                            <input type="email" class="form-control" name="email" placeholder="Business Email" value="" id="lastNameinput" required>

                                        </div>

                                    </div><!--end col-->
                                    <input type="hidden" name="member_id" value="{{ auth()->user()->id }}">
                                    <div class="col-6">

                                      <div class="mb-3">

                                          <label for="lastNameinput" class="form-label">Business Phone</label>

                                          <input type="number" class="form-control" name="phone_number" placeholder="Business Phone" value="" id="lastNameinput">

                                      </div>

                                  </div><!--end col-->

                                  <div class="col-6">

                                    <div class="mb-3">

                                        <label for="lastNameinput" class="form-label">Business Website</label>

                                        <input type="text" class="form-control" name="website" placeholder="Business Website" value="" id="lastNameinput">

                                    </div>

                                </div><!--end col-->


                                    <div class="col-12">

                                        <div class="mb-3">

                                            <label for="address1ControlTextarea" class="form-label">Business Introduction</label>

                                            <input type="text" class="form-control" name="introduction" value="" placeholder="Business Introduction" id="address1ControlTextarea">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-12">

                                      <div class="mb-3">

                                          <label for="address1ControlTextarea" class="form-label">Address</label>

                                          <input type="text" class="form-control" name="address" value="" placeholder="Address" id="address1ControlTextarea">

                                      </div>

                                  </div><!--end col-->


                                    <div class="col-4">

                                        <div class="mb-3">

                                            <label for="citynameInput" class="form-label">Facebook Link</label>

                                            <input type="text" class="form-control" name="fb_link" value="" placeholder="Facebook Link" id="citynameInput">

                                        </div>

                                    </div><!--end col-->

                                    <div class="col-4">

                                      <div class="mb-3">

                                          <label for="citynameInput" class="form-label">Instagram Link</label>

                                          <input type="text" class="form-control" name="insta_link" value="" placeholder="Instagram Link" id="citynameInput">

                                      </div>

                                  </div><!--end col-->

                                  <div class="col-4">

                                    <div class="mb-3">

                                        <label for="citynameInput" class="form-label">Linkedin Link</label>

                                        <input type="text" class="form-control" name="linkedin_link" value="" placeholder="Linkedin Link" id="citynameInput">

                                    </div>

                                </div><!--end col-->

                                    <div class="col-lg-12">

                                        <div class="text-end">

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </div>

                                    </div><!--end col-->

                                </div><!--end row-->

                            </form>

                        </div>

                    </div>

                </div>

                <!-- end row -->

            </div>

            <!-- end container -->

        </section>

        <!-- end hero section -->

@endsection