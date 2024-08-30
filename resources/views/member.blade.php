<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>BAWS | Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}assets/images/baws-favicon.png">

    <!-- Layout config Js -->
    <script src="{{ asset('') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('') }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <style>
        a.active {
            color:#212529;
        }
        .navbar-landing .navbar-nav .nav-item .nav-link:hover {
            color:#212529 !important;
        }
    </style>

</head>

<body>

        {{-- MAIN CONTENT --}}          
          <div class="container py-md-3 py-3">
            {{-- <div class="card p-3"> --}}
              <div class="row justify-content-center">
                <div class="col-md-5">
                  <div class="card p-3">
                  <img src="{{ asset('') }}assets/images/baws-hdr-logo.png" class="card-logo card-logo-dark" style="max-width: 300px; margin:auto;" alt="logo dark" height="">
                  <hr>
                  <h3 class="text-uppercase fw-bold text-center h4 mb-3" style="letter-spacing: 1px">Membership Details</h3>
                  <table class="pb-5">
                    <tr class="pb-2">
                      <td class="fw-bold fs-5">Name</td>
                      <td class="fw-bold fs-5">{{ $user->name }}</td>
                    </tr>
                    <tr class="pb-2">
                      <td class="fw-bold fs-5 pe-3">Father Name</td>
                      <td class="fw-bold fs-5">{{ $user->father_name }}</td>
                    </tr class="pb-2">
                      <!--<td class="fw-bold fs-5">Validity Till</td>-->
                      <!--<td class="fw-bold fs-5">{{ $fees_validity }}</td>-->
                    </tr>
                  </table>
                  <ul class="list-group">
                    <li class="mt-4 text-uppercase fw-bold h5 list-group-item bg-light">Dependents</li>
                  @forelse ($user->dependents as $key => $dependent)
                    <li class="fs-5 mb-1 list-group-item" style="font-weight: 500">{{ $dependent->name }}</li>
                  @empty
                  <li class="fw-bold h5 list-group-item">No Dependents</li>
                  @endforelse 
                  </ul>
                </div>
                </div>
              </div>
            {{-- </div>   --}}
          </div>  

        {{-- END MAIN CONTENT --}}


    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('') }}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('') }}assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ asset('') }}assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('') }}assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{ asset('') }}assets/js/pages/password-addon.init.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>