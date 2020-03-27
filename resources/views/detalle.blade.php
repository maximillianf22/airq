<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AirQ | Iformacion del Aire</title>
    <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom p-2" style="background-image: linear-gradient(to right top, #0fd331, #14d22c, #18d228, #1cd122, #1fd01c, #1fd219, #20d315, #20d510, #1dd90e, #1ade0d, #17e20a, #12e708);">
      <div class="container-fluid mb-0 mt-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-toggle="collapse" data-target="#navbarText">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <div class="container mb-0 ">
            <div class="row mb-0">
              <div class="form-group input-group  col-md-6 mb-0 input-group-merge">
                  <select class="form-control selectCity " name="" id="">
                   <option selected disabled value="">CIUDAD</option>
                    <option data-lat="11.0041072" data-long="-74.8069813" value="">Barranquilla</option>
                    <option data-lat="10.9171191" data-long="-74.7991506" value="">Soledad</option>
                  </select>
                </div>
                <div class="form-group input-group  col-md-6 mb-0 input-group-merge ">
                  <select class="form-control" id="listCiudad" onchange="selectCiudad(this.value)" name="">
                    <option selected disabled value="">BARRIO</option>
                    <option value="">Andalucia</option>
                    <option value="">Bellavista</option>
                    <option value="">Campo Alegre</option>
                    <option value="">La Floresta</option>
                    <option value="">Los Andes</option>
                  </select>
                </div>
            </div>
          </div>
            <form class="navbar-search navbar-search-light form-inline mr-5" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Buscar" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">13</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('images/marcadores/marcadorAmarillo.png')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Medidor ID 61651 Barranquilla, Atlantico</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 8 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Alerta Amarilla alcanzada</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('images/marcadores/marcadorAnaranjado.png')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Medidor ID 61651 Barranquilla, Atlantico</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 30 minutos</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Alerta Anaranjada alcanzada</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('images/marcadores/marcadorRojo.png')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Medidor ID 61651 Barranquilla, Atlantico</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 6 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Alerta Roja alcanzada</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="notificaciones" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver todas las Notificaciones</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5.jpg')}}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Administrador</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenido</h6>
                </div>
                <a href="perfil" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi perfil</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Soprte</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar Sesion</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <section class="container-fluid" style="padding-right: 16px !important; padding-left: 10px !important;}">
    <div class="row">
            <div class="col-md-3 p-0">
                <div class="col-md-12 mt-2">
                  <div class="card card-stats border">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h6 class="card-title text-uppercase text-muted mb-0">CALIDAD DEL AIRE</h6>
                          <span class="h3 font-weight-bold mb-0">46 | <strong class="text-success">EXCELENTE</strong></span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                            <i class="fas fa-cloud"></i>
                          </div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <p class="mt-2 mb-0 col-md-6 text-sm border-right">
                            <span class="text-danger mr-2"><strong><i class="fas fa-thermometer-empty"></i></strong></span>
                            <span class="text-nowrap font-weight-bold text-uppercase text-muted">13ºC</span>
                          </p>
                          <p class="mt-2 mb-0 col-md-6 text-sm">
                            <span class="text-info mr-2"><strong><i class="fas fa-tint"></i></strong></span>
                            <span class="text-nowrap font-weight-bold text-uppercase text-muted">49%</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                <div class="nav-wrapper mt-0 pt-0 text-center">
                  <ul class=" align-items-center justify-content-center nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="home" aria-selected="true">
                          <span class="nav-link-icon d-block"><i class="fas fa-calendar-day"></i></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="profile" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="contact" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>
                        </a>
                      </li>
                    </ul>
                 </div>
                  <div class="card shadow">
                      <div class="">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active p-0 m-0" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                  <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">LUNES</h6>
                                        <span class="h5 font-weight-bold mb-0">54 | <strong class="text-success text-uppercase">BUENO</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape bg-gradient-success text-white rounded-circle shadow">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                 <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">Martes</h6>
                                        <span class="h5 font-weight-bold mb-0">55 | <strong class="text-yellow text-uppercase">REGULAR</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape text-white rounded-circle shadow" style="background-image: linear-gradient(to right top, #cce909, #d9ec03, #e5ef00, #f2f100, #fff400);">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                  <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">miercoles</h6>
                                        <span class="h5 font-weight-bold mb-0">155 | <strong class="text-warning text-uppercase">MALO</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape bg-gradient-warning text-white rounded-circle shadow">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                  <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0 ">jueves</h6>
                                        <span class="h5 font-weight-bold mb-0">155 | <strong class="text-danger  text-uppercase">MUY MALO</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape bg-gradient-danger text-white rounded-circle shadow">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                  <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">viernes</h6>
                                        <span class="h5 font-weight-bold mb-0">46 | <strong class="text-success text-uppercase">EXCELENTE</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape bg-gradient-success text-white rounded-circle shadow">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                    <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">sabado</h6>
                                        <span class="h5 font-weight-bold mb-0">355 | <strong class="text-uppercase" style="color: #9000FF">PELIGRO</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape text-white rounded-circle shadow" style="background-image: linear-gradient(to right top, #ed0000, #ff0042, #ff007d, #e100bf, #9000ff);">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                                  <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">domingo</h6>
                                        <span class="h5 font-weight-bold mb-0">46 | <strong class="text-success text-uppercase">EXCELENTE</strong></span>
                                      </div>
                                      <div class="col-auto">
                                        <div class="icon-sm icon-shape bg-gradient-success text-white rounded-circle shadow">
                                          <i class="fas fa-cloud"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </button>
                              </div>
                              <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                  <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                              </div>
                              <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                  <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>

            </div>
              <div class="col-md-9 p-0">
                <div id="page-content-wrapper">
                <!-- Map container -->
                <div class="mapContainer" style="height: 90vh; width:100%">
                    <div id="map" style="height:100%"></div>
                </div>
            </div>
            </div>      
      </section> 
      <footer class="footer pt-3 pb-2 container-fluid" >
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              © 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    <div class="modal fade" id="modalOptions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dirección: Calle x - Cra x</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="home" aria-selected="true">Detalle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="contact" aria-selected="false">Graficas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mapDetail-tab" data-toggle="tab" href="#mapDetail" role="tab" aria-controls="contact" aria-selected="false">Mapa</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container p-0 mt-3">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="m-0">ID: SM1</h3>
                                            <p class="m-0">Cruce: 3</p>
                                            <p class="m-0">Grupo: 2</p>
                                            <p class="m-0">Dirección: Calle x - Cra x</p>
                                            <p class="m-0">Principal: Sí</p>
                                        </div>
                                    </div>
                                    <div class="btn-group-vertical btn-group-toggle w-100 mt-3" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option1" autocomplete="off"> Grupo 1
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Grupo 2
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Grupo 3
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Grupo 4
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="card">
                                        <img class="card-img" src="https://lh3.googleusercontent.com/proxy/BiNP_GuBvktjXtPtyNcBnGbJVV4gkDPz4PajOAAHCaWsamu7FfFhN_PPSouQVkcBUTD-3Jwi-c2rXl64ouFz0Hh2R6eGUbxFpobkgcX2ZDnmGdclUh17cgUbBCC-UkIYBkpxzbtRGLbvWObw9fsB1jkBXQU-eOYzX2Iwwykjvs3DvnwWtyfCyouF4lY" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="btn-group-vertical btn-group-toggle w-100 mt-3" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option0" autocomplete="off"> Cruce
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option1" autocomplete="off"> Grupo 1
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Grupo 2
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Grupo 3
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Grupo 4
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mapDetail" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="mapContainer" style="height: 70vh">
                            <div id="map2" style="height:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
      <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Colombia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: 10.9710908, lng: -74.7839236},
        });

        var amarillo = "{{asset('images/marcadores/marcadorAmarillo.png')}}";
        var verde = "{{asset('images/marcadores/marcadorVerde.png')}}";
        var morado = "{{asset('images/marcadores/marcadorMorado.png')}}";
        var anaranjado = "{{asset('images/marcadores/marcadorAnaranjado.png')}}";
        var rojo = "{{asset('images/marcadores/marcadorRojo.png')}}";
        
         var contentString = `
            <div class="container-fluid">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img id="image0" height="180" width="180" class="mt-4 ml-3" src="http://142.154.137.29/mjpg/video.mjpg" class="" alt="" title="Click here to enter the camera located in Colombia, region Antioquia, Medellin" />
                  </div>
                  <div class="col-md-8 p-2">
                    <div class="card-body">
                      <h5 class="card-title text-dark" ><strong>Medidor:</strong> Parque Almendra</h5> 
                      <a href="principal">
                        <button class="btn btn-icon-clipboard p-1 mb-1" type="button">
                          <div>
                            <img src="{{ asset('images/marcadores/marcadorMorado.png') }}" width="40px">
                          </div>
                        </button>
                        </a>
                      <hr>
                      <p class="card-text">Este espacio esta contaminado gravemente efecto de la contaminacion ambiental y los quimicos de las industrias de los alrededores.</p>
                      <p class="card-text"><small class="text-muted">Barranquilla, Atlantico</small></p>
                       <button style="background-color: #760a91" class="text-center text-white btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                    </div>
                  </div>
                </div>
              </div>`;

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

         var marker10 = new google.maps.Marker({
          position: {lat: 10.9710908, lng: -74.7839236},
          map: map,
          icon: morado,
        });


        marker10.addListener('click', function() {
          infowindow.open(map, marker10);
        });

       $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });

        $('body').on('click', '.btnDetail', function () {
          $('#detail-tab').tab('show')
          $('#respuesta').html('Ventana de comandos. <br> Escribe "Help" para ver la lista de comandos disponibles.')
          $('#modalOptions').modal()
        })

        $('#commands-tab').on('shown.bs.tab', function () {
          $('.inputUser').focus()
        })

        $('.selectCity').on('change', function () {
          var latitud = $(this).children("option:selected").data("lat");
          var longitud = $(this).children("option:selected").data("long");
          // alert(latitud + ' - ' + longitud);
          var cityMap = new google.maps.LatLng(latitud, longitud);
          map.panTo(cityMap);
          map.setZoom(15);
        })
          var markers2 = [
    {
          id: 'sem1',
          position: new google.maps.LatLng(10.995357, -74.802205)
        },
        {
          id: 'sem2',
          position: new google.maps.LatLng(10.995352, -74.802290)
        }
      ]
      var mapOptions2 = {
        zoom: 21,
        center: new google.maps.LatLng(10.9953151, -74.8022596),
        mapTypeId: 'roadmap',
        disableDefaultUI: true,
        gestureHandling: 'none',
          icon: morado,
        zoomControl: false,
      }
      map2 = new google.maps.Map(document.getElementById('map2'), mapOptions2);
      setMarkers(map2, markers2, false)

      }

    </script>
    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
</body>

</html>