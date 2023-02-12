<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Reset Password</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
              <a href="/"><span class="col-md-9"><i class="bi bi-house-door-fill"></i></span></a> 
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                  </div>
                  
                  <form action="{{ route('password_reset') }}" method="POST">
                    {{ csrf_field() }}
                      @if (session('sukses'))
                          <div class="alert alert-success">
                              {{ session('sukses') }}
                          </div>
                      @endif
                      @if (session('eror'))
                          <div class="alert alert-danger">
                              {{ session('eror') }}
                          </div>
                      @endif

                      <input type="hidden" name="token" value="{{ $token }}">
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ $email ?? old('email') }}">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="password">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password" value="{{ old('password_confirmation') }}">
                        <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                    </div>

                      <button class="btn btn-primary btn-block mb-4">Ubah</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>