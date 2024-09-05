<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | BAWS</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container mt-5" style="width: 30%">
      <div class="authentication-wrapper authentication-basic container-p-y">
         <div class="authentication-inner py-4">
            <div class="card">
               <div class="card-body">
                  <div class="app-brand justify-content-center mb-4 mt-2">
                     <a href="#" class="app-brand-link gap-2 text-center">
                        <div>
                            <img src="{{ asset('assets/images/baws-hdr-logo.png') }}" alt="" height="80px">
                        </div>
                     </a>
                  </div>
                  @if(Session::has('Error'))
                  <div class="alert alert-danger">{{ Session::get('Error') }}</div>
                  @endif
                  <form id="formAuthentication" class="mb-3" action="" method="POST">
                     @csrf
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
                        <small class="text-danger">@error ('email') {{ $message }} @enderror</small>
                     </div>
                     <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                           <label class="form-label" for="password">Password</label>

                        </div>
                        <div class="">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                           <small class="text-danger">@error ('password') {{ $message }} @enderror</small>
                        </div>
                        <div class="mt-3">
                            <input type="checkbox" onclick="MyFunction()">
                             Show Password
                        </div>
                     </div>
                     <div class="mb-3">
                        <button class="btn d-grid w-100 hover text-light" style="background-color:#45cb85;" type="submit">Sign in</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<script type="text/javascript">
    function MyFunction(){
        var show = document.getElementById('password');
        if(show.type == 'password'){
            show.type = 'text';
        }
        else{
            show.type = 'password';
        }
    }
</script>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script></html>
</html>