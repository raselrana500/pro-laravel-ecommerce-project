<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.partials.meta')

    <title>Admin Login</title>

    @include('admin.partials.styles')
  </head>

  <body>
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><span class="tx-info tx-normal">Admin Login</span></div>
        <div class="tx-center mg-b-60">Professional laravel Ecommerce</div>
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
        <div class="form-group">
          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror    
        </div><!-- form-group -->
        
        <div class="form-group">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <a href="{{ route('admin.password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>

        </form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    @include('admin.partials.scripts')
    
    </body>
  </html>
