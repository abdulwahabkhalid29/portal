@extends('layouts.app')
@section('title','Post a Job')
@section('content')

        <!-- start hero section -->

        <section class="section pb-0 hero-section" id="hero">

            <div class="bg-overlay bg-overlay-pattern"></div>

            <div class="container">

                <div class="text-start mb-3">

                    <a href="{{ route('member.dashboard') }}"><button type="button" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back</button></a>

                  </div>

                <div class="row justify-content-center">

                  <div class="card p-2">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Post a Job</h4>
                        <form action="{{ route('job.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="" required>
                                </div>
            
                                <div class="col-6">
                                    <label for="" class="form-label">Job Type</label>
                                    <select name="type" class="form-control" id="" required>
                                      <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select>
                                </div>
            
                                <div class="col-12 mt-3">
                                    <div class="mb-3">
                                        <label for="lastNameinput" class="form-label">Job Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
            
                                <div class="col-6 mt-3">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Offered Salary</label>
                                        <input type="number" class="form-control" name="salary" placeholder="PKR.." id="firstNameinput">
                                    </div>
                                </div>
            
                                <div class="col-6 mt-3">
                                  <div class="mb-3">
                                      <label for="firstNameinput" class="form-label">Shift</label>
                                      <select name="shift" class="form-control" id="">
                                        <option value="Morning">Morning</option>
                                          <option value="Afternoon">Afternoon</option>
                                          <option value="Night">Night</option>
                                      </select>
                                  </div>
                              </div>
            
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
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