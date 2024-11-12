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

  <title>Masuk</title>
</head>

<body>
  <!-- Preloader -->
  <div id="main-wrapper" class="p-0 bg-primary">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="auth-login-shape-box position-relative">
        <div class="d-flex align-items-center justify-content-center w-100 z-1 position-relative">
          <div class="card auth-card mb-0 mx-3">
            <div class="card-body pt-5">
             <h1 align="center" class="mb-4 text-primary">Login</h1>
              <div class="row">
                <div class="col-12 mb-2 mb-sm-0">
                  <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-6 shadow-none mb-3">
                    <span class="d-none d-sm-block me-1 flex-shrink-0">Masukkan Email dan Passwod disini!</span> 
                  </a>
                </div>
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
                <button type="submit" class="btn btn-primary w-100 mb-4 rounded-pill">Masuk</button>
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