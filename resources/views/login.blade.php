<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Informacion de la calidad del aire en el espacio aereo de Barranquilla">
  <meta name="author" content="Developapp">
  <title>AirQ | Informacion del Aire</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <!-- Google Tag Manager -->
</head>

<body class="bg-default">

  <!-- Google Tag Manager (noscript) -->
  <div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9" style="background-image: url('{{asset('assets/img/theme/38242.jpg')}}');">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5" >
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <a href="principal">
          <div class="card bg-secondary border-0 mb-0" >
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               <img src="{{asset('assets/img/brand/blue.png')}}" width="100px">
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Correo" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Recordarme</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" style="background-image: linear-gradient(to right top, #0fd331, #14d22c, #18d228, #1cd122, #1fd01c, #1fd219, #20d315, #20d510, #1dd90e, #1ade0d, #17e20a, #12e708);" class="btn my-4 text-white">Iniciar Sesion</button>
                </div>
              </form>
            </div>
          </div>
          </a>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Olvide mi clave</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Regitsrarme</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>