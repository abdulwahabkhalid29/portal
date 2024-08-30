@extends('layouts.app')
@section('title','Register Job Seeker')
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
                      <h4 class="fw-bold mb-4">Register Job Seeker</h4>
                      <form action="{{ route('job-seeker.store') }}" method="POST" enctype="multipart/form-data"> 
                          @csrf
                          @method('POST')
                          <div class="row">
                              <div class="col-6">
                                  <label for="" class="form-label">Job Title</label>
                                  <input type="text" class="form-control" name="title" placeholder="Enter Desire Job Title" required>
                              </div>
                
                              <div class="col-6">
                                  <label for="" class="form-label">Qualification</label>
                                <input type="text" class="form-control" placeholder="Qualification" name="qualification">
                              </div>    
                
                              <div class="col-6 mt-3">
                                  <div class="mb-3">
                                      <label for="firstNameinput" class="form-label">Expected Salary</label>
                                      <input type="number" class="form-control" name="expected_salary" placeholder="PKR.." id="firstNameinput">
                                  </div>
                              </div>
                
                              <div class="col-6 mt-3">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Skills</label>
                                    <small class="float-end">Enter Comma Separated Values</small>
                                    <input type="text" name="skills" class="form-control" placeholder="Enter Skills">
                                </div>
                            </div>
                
                            <div class="col-4 mt-3">
                              <label for="" class="form-label">City</label>
                              <input type="text" class="form-control" name="city" placeholder="City" required>
                          </div>
                
                          <div class="col-4 mt-3">
                              <label for="" class="form-label">Industry</label>
                              <input type="text" name="industry" class="form-control" placeholder="Enter your Desire Industry">
                            </div>
                
                            <div class="col-4 mt-3">
                              <label for="" class="form-label">Upload CV or Resume</label>
                              <input type="file" name="resume" class="form-control" placeholder="Enter your Desire Industry">
                            </div>
                
                          </div>
                          <div class="text-end mt-4">
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