<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Verify Email - Properton</title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="{{asset('admin-asset/vendors/mdi/css/materialdesignicons.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin-asset/vendors/base/vendor.bundle.base.css')}}">
 <!-- endinject -->
 <!-- inject:css -->
 <link rel="stylesheet" href="{{asset('admin-asset/css/style.css')}}">
 <!-- endinject -->
 <link rel="shortcut icon" href="{{asset('admin-asset/images/favicon.png')}}" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                {{-- <img src="../../images/logo.svg" alt="logo"> --}}
                PROPERTON LOGO 
              </div>
              <h4>{{ __('Verify Your Email Address') }}</h4>
              <h6 class="font-weight-light">{{ __('Properton requires that you verify your email address to proceed.') }}</h6>
              @if (session('resent'))
              <div class="alert alert-success" role="alert">
                  {{ __('A fresh verification link has been sent to your email address.') }}
              </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin-asset/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin-asset/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin-asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin-asset/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>

