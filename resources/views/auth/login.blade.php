
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2D</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">


<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      	<a href="" class="h1"><b>2D</b>Live</a>
    </div>
    <form action="{{route('login')}}" method="POST">
        @csrf
    <div class="card-body card-outline card-primary">
      	<p class="login-box-msg">The Myanmar Dream</p>

		<div id="frame">
				<div class="input-group mb-3">
                    <input type="text"  name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="input-group mb-3">
				    <input type="password" name="password" placeholder="Password"   class="form-control @error('password') is-invalid @enderror"  autocomplete="current-password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                       <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                           {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-primary col-12">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </div> 
        </div>
                
        <div class="card-footer card-outline card-primary">
            <div class="float-right">
                @if (Route::has('password.request'))
                <p class="mb-1 float-right">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </p>
                @endif
                
            </div>
        </form>
    </div>
    
  </div>
  <!-- /.card -->
</div>

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>



</body>
</html>
