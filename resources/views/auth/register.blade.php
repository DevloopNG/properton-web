<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Properton Dashboard</title>
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
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                {{-- <img src="{{asset('admin-asset/images/logo.svg')}}" alt="logo">
                 --}}
                 Properton Logo
              </div>
              <h4>Welcome to properton!</h4>
              <h6 class="font-weight-light">Happy to see you!</h6>
              <form class="pt-5" method="POST" action="">
                @csrf
                <div class="form-group">
                  <label for="first_name">First name</label>
                  <small style="color:#e96b58;">@error('first_name'){{$message}}@enderror </small>

                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                   
                    <input type="text" class="form-control form-control-lg border-left-0 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" id="first_name" placeholder=""  required autocomplete="first_name" autofocus>
                    
                  </div>
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <small style="color:#e96b58;">@error('last_name'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                     
                      <input type="text" class="form-control form-control-lg border-left-0 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" id="last_name" placeholder=""  required autocomplete="last_name" autofocus>
                      
                    </div>
                </div>
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <small style="color:#e96b58;">@error('phone_number'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                     
                      <input type="text" class="form-control form-control-lg border-left-0 @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" placeholder=""  required autocomplete="phone_number" autofocus>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <small style="color:#e96b58;">@error('nationality'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                     
                      <input type="text" class="form-control form-control-lg border-left-0 @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" id="nationality" placeholder=""  required autocomplete="phone_number" autofocus>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <small style="color:#e96b58;">@error('occupation'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                     
                      <input type="text" class="form-control form-control-lg border-left-0 @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" id="occupation" placeholder=""  required autocomplete="phone_number" autofocus>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control form-control-lg" id="gender" name="gender">
                      <option>Male</option>
                      <option>Female</option>
                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail Address</label>
                    <small style="color:#e96b58;">@error('email'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                     
                      <input type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder=""  required autocomplete="email" autofocus>
                      
                    </div>
                  </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <small style="color:#e96b58;">@error('password'){{$message}}@enderror </small>

                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="">                        

                </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <small style="color:#e96b58;">@error('password_confirmation'){{$message}}@enderror </small>
  
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-lock-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control form-control-lg border-left-0 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" id="password_confirmation" placeholder="">                        
  
                  </div>
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        I agree to all Terms & Conditions
                      </label>
                    </div>
                  </div>
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Create Account</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="" class="text-primary">Login</a>
                  </div>
                {{-- <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div> --}}
                
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2029  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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

                
                                      
                                                  
                                              
                