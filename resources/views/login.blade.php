<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="{{ asset('css/style-login-form.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<a href="/" class="div"><i class="bi bi-arrow-left-circle-fill"></i>Kembali</a>
<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form action="{{ route('register') }}" method="POST" id="logForm">
			{{ csrf_field() }}
			<h2>Buat Akun</h2>
			<input type="text" name="name" placeholder="Nama" required/>
			<input type="email" name="email" placeholder="Email" />
			<input type="text" name="username" placeholder="Username(NPM)" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<button>Daftar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{url('proses_login')}}" method="POST" id="logForm">
          {{ csrf_field() }}
			<h2>Login</h2>
				@if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                @endif
			<input type="text" name="username" placeholder="Username" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<a href="forget_password">Lupa password?</a>
			<button>Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2>Sudah Punya Akun?</h2>
				<p>Silahkan Login</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h2>Belum Punya Akun?</h2>
				<p>Silahkan Daftar Terlebih Dahulu</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>


<script src="js/form-login-register.js"></script>
</body>
</html>