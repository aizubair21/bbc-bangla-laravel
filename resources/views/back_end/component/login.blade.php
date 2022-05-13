<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bbc-bangla | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ URL::to('/') }}"><b>BBC-Bangla</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign as Reader</p>

      <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class=" mb-3">
          <label for="name">Register Email :</label>
          <input type="email" id="name" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }}" placeholder="Your Register Email" name="email" autofocus autocomplete="off">  
          @error ('email')
            <strong class="text text-danger"> {{ $message  }}</strong>
          @enderror
        </div>


        <div class=" mb-3">
            <label for="password">Your Password :</label>
            <input type="password" id="password" class="form-control @error('email') is-invalid @enderror" placeholder="Password" name="password">
            @error('password')
              <strong class="text text-danger"> {{ $message }}</strong>
            @enderror
          </div>
        </div>

        
        <div class="row p-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember_token">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4 w-100">
            <button type="submit" class="btn  btn-primary btn-block w-100">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>
      <hr>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

     <div class="d-flex justify-content-between  align-items-center p-3"> 
        <a href="{{ route('register') }}" class="text text-primary">Have an account ?</a>
        <a href="#" class="text text-danger">Forgote password </a>
     </div>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin_lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_lte/dist/js/adminlte.min.js"></script>
</body>
</html>
