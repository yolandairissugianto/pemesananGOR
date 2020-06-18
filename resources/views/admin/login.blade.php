<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.templates._head') 
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('assets/images/logo-white.svg') }}" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" 
                    id="email" name="email" placeholder="Email" value="{{ old('email') }}" 
                    required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>    
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                     id="password" name="password" required autocomplete="current-password" placeholder="Password">
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  @if (Route::has('admin.password.request'))
                      <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                        <a class="auth-link text-white">Forgot password?</a>
                      </a>
                  @endif
                  {{-- <a href="#" class="auth-link text-white">Forgot password?</a> --}}
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    LOGIN
                  </button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    @include('admin.templates._footer')
    <!-- page-body-wrapper ends -->
  </div>
  @include('admin.templates._scripts')
</body>

</html>
