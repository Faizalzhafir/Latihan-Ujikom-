<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />

  <!-- Core Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

  <title>Login</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper" class="p-0 bg-info">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="auth-login-shape-box position-relative">
        <div class="d-flex align-items-center justify-content-center w-100 z-1 position-relative">
          <div class="card auth-card mb-0 mx-3">
            <div class="card-body pt-5">
              <a href="index.html" class="text-nowrap logo-img text-center d-flex align-items-center justify-content-center mb-5 w-100">
                <!-- <img src="assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-Dark" /> -->
                <img src="assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-light" />
              </a>
              <div class="row">
                <div class="col-6 mb-2 mb-sm-0">
                  <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none">
                    <img src="assets/images/svgs/google-icon.svg" alt="spike-img" class="img-fluid me-2" width="18" height="18">
                    <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                  </a>
                </div>
                <div class="col-6">
                  <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none">
                    <img src="assets/images/svgs/facebook-icon.svg" alt="spike-img" class="img-fluid me-2" width="18" height="18">
                    <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                  </a>
                </div>
              </div>
              <div class="position-relative text-center my-4">
                <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-1 position-relative">or sign in with</p>
                <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
              </div>
              <form action="{{ route('login_proses') }}" method="post">
                @csrf
                <!-- <p class="text-primary fs-3  align-items-center mb-0 fw-medium">Masukkan Password dan Email mu!</p>
                <br> -->
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <div class="form-check">
                    <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label text-dark" for="flexCheckChecked">
                      Ingatkan Perangkat!
                    </label>
                  </div>
                  <a class="text-primary fw-medium" href="authentication-forgot-password.html">Lupa Password ?</a>
                </div>
                <button type="submit" class="btn btn-info w-100 mb-4 rounded-pill">Masuk</button>
                <!-- <a href="index.html" class="btn btn-primary w-100 mb-4 rounded-pill">Masuk</a> -->
                <!-- <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-4 mb-0 fw-medium">Masukkan Password dan Email mu!</p>
                  <a class="text-primary fw-medium ms-2" href="authentication-register2.html">Create an account</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
  </div>
  <!-- Import Js Files -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.init.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/feather.min.js') }}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
</head>
<body>
  <h1 align="center">Ini halaman Login</h1>
  <form align="center" action="{{ route('login_proses')}}" method="post">
    @csrf

    <input type="email" name="email" placeholder="Email">
    @error('email')
      <small>{{ $message }}</small>
    @enderror
    <br>
    <br>

    <input type="password" name="password" placeholder="Password">
    @error('password')
      <small>{{ $message }}</small>
    @enderror
    <br>
    <br>

    <button type="submit">Log In</button>
    <br>
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
  </form>
</body>
</html> -->