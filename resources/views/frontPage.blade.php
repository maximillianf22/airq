<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AirQ | Informacion del Aire</title>
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
  <style type="text/css">
    

.contenedor {
  
  display: flex;
  width: 300px;
  height: 40px;
  color: black;
  font-size: 20px;
  line-height: 40px;
  
  position: absolute;
  top: 13;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  overflow: hidden;
  
}

.cambio {
  list-style: none;
  padding-left: 10px;
  animation: cambiar 7s infinite;
}

.cambio, p {
  margin: 0;
}

@keyframes cambiar {
  
  0%{ margin-top: 0;}
  20%{ margin-top: 0;}
  
  25% {margin-top: -40px;}
  50% {margin-top: -40px;}
  
  55% {margin-top: -80px;}
  80% {margin-top: -80px;}
  
  85% {margin-top: -40px;}
  95% {margin-top: -40px;}
  
  100% {margin-top: 0;}
}
  </style>
</head>

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom p-2" style="background-image: linear-gradient(to right top, #0fd331, #14d22c, #18d228, #1cd122, #1fd01c, #1fd219, #20d315, #20d510, #1dd90e, #1ade0d, #17e20a, #12e708);">
      <div class="container-fluid mb-0 mt-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
               <img src="{{asset('assets/img/brand/white.png')}}" width="100px">
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
                <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver todas las Notificaciones</a>
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
                <a href="#!" class="dropdown-item">
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
                          <span class="h3 font-weight-bold mb-0">
                            <div class="contenedor ml-2">
                              <ul class="cambio">
                                <li>46 </li>
                                <li>45 </li>
                                <li>48 </li>
                                <li>47 </li>
                                <li>45 </li>
                                <li>44 </li>
                                <li>49 </li>
                                <li>48 </li>
                                <li>45 </li>
                                <li>46 </li>
                              </ul>
                               &nbsp;| <strong class="text-success">EXCELENTE</strong>
                            </div>
                          </span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                            <i class="fas fa-cloud"></i>
                          </div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <p class="mt-2 mb-0 col-6 text-sm border-right">
                            <span class="text-danger mr-2"><strong><i class="fas fa-thermometer-empty"></i></strong></span>
                            <span class="text-nowrap font-weight-bold text-uppercase text-muted">13ºC</span>
                          </p>
                          <p class="mt-2 mb-0 col-6 text-sm">
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
                          <span class="nav-link-icon d-block"><i class="fas fa-chart-area"></i></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="contact" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="fas fa-map-marked-alt"></i></span>
                        </a>
                      </li>
                    </ul>
                 </div>
                  <div class="card shadow">
                      <div class="">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade  show active p-0 m-0" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                  <button type="button" class="list-group-item list-group-item-action p-1 active">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0 text-white">LUNES</h6>
                                        <span class="h5 font-weight-bold mb-0 text-white">&nbsp;
                                          <div class="contenedor ml-2 text-white" style="font-size: 15px; top: 13px">
                                              <ul class="cambio">
                                                <li>46 </li>
                                                <li>45 </li>
                                                <li>48 </li>
                                                <li>47 </li>
                                                <li>45 </li>
                                                <li>44 </li>
                                                <li>49 </li>
                                                <li>48 </li>
                                                <li>45 </li>
                                                <li>46 </li>
                                              </ul>
                                               &nbsp;| <strong class=" ">EXCELENTE</strong>
                                            </div>
                                        </span>
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
                                  <div class="card">
                                        <!-- Card header -->
                                        <div class="card-header">
                                          <!-- Title -->
                                          <h5 class="h3 mb-0">Historico del Año</h5>
                                              </div>
                                              <!-- Card body -->
                                              <div class="card-body">
                                                    <!-- Chart wrapper -->
                                                    <canvas id="chart-bars2"></canvas>
                                        </div>
                                    </div>
                              </div>
                              <div class="tab-pane fade align-items-center" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                 <div class="card ml-2 mt-2" style="width: 18rem; display: contents;">
                                    <img class="card-img-top" src="https://www.elheraldo.co/sites/default/files/styles/1180x786/public/galeriaimagenes/2018/04/06/img_1081.jpg?itok=ebBJvDu7" alt="Card image cap">
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Navegar en Ciudades
                                      <div class="form-group input-group  mb-0 input-group-merge">
                                          <select class="form-control selectCity " name="" id="">
                                           <option selected disabled value="">CIUDAD</option>
                                            <option data-lat="11.0041072" data-long="-74.8069813" value="">Barranquilla</option>
                                            <option data-lat="10.9171191" data-long="-74.7991506" value="">Soledad</option>
                                          </select>
                                        </div>
                                      </li>
                                      <li class="list-group-item">Navegar en los Barrios
                                        <div class="form-group input-group mb-0 input-group-merge ">
                                          <select class="form-control" id="listCiudad" onchange="selectCiudad(this.value)" name="">
                                            <option selected disabled value="">BARRIO</option>
                                            <option value="">Andalucia</option>
                                            <option value="">Bellavista</option>
                                            <option value="">Campo Alegre</option>
                                            <option value="">La Floresta</option>
                                            <option value="">Los Andes</option>
                                          </select>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
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
              © 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">AirQ</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a href="#/presentation" class="nav-link" target="_blank">Servicios</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Redes Sociales</a>
              </li>
              <li class="nav-item">
                <a href="#/license" class="nav-link" target="_blank">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    <div class="modal fade" id="modalOptions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dirección: Calle 80 - Cra 10 </h5>
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
                                <div class="col-sm-4 col-md-4">
                                  <div class="col-md-12 mt-2">
                                      <div class="card card-stats border">
                                        <!-- Card body -->
                                        <div class="card-body">
                                          <div class="row">
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
                                          <div class="container">
                                            <div class="row">
                                              <p class="mt-2 mb-0 col-6 text-sm border-right">
                                                <span class="text-danger mr-2"><strong><i class="fas fa-thermometer-empty"></i></strong></span>
                                                <span class="text-nowrap font-weight-bold text-uppercase text-muted">13ºC</span>
                                              </p>
                                              <p class="mt-2 mb-0 col-6 text-sm">
                                                <span class="text-info mr-2"><strong><i class="fas fa-tint"></i></strong></span>
                                                <span class="text-nowrap font-weight-bold text-uppercase text-muted">49%</span>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="#!" class="list-group-item list-group-item-action">
                                                <div class="row align-items-center">
                                                  <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder" src="{{ asset('images/marcadores/marcadorMorado.png')}}" class="">
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
                                                    <p class="text-sm mb-0">Emergencia Ambiental alcanzada</p>
                                                  </div>
                                                </div>
                                              </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <div class="card">
                                        <img class="card-img" src="http://142.154.137.29/mjpg/video.mjpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                          <div class="row">
                                          <div class="col-6">
                                              Particulas por millon PM.2.5
                                                    <canvas id="chart-bars3"></canvas>
                                           </div>
                                           <div class="col-6">
                                              CO Monoxido de Carbono
                                                    <canvas id="chart-bars4"></canvas>
                                           </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 offset-1">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                          <div class="row">
                                          <div class="col-6">
                                              NO2 Dioxido de Nitrogeno
                                                    <canvas id="chart-bars5"></canvas>
                                           </div>
                                           <div class="col-6">
                                              SOx Dioxido de Azufre
                                                    <canvas id="chart-bars6"></canvas>
                                           </div>
                                          </div>
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
  <script src="{{ asset('assets/js/components/charts/chart-bars.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
      <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Colombia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 11.0041072, lng: -74.8069813},
        });

        var amarillo = "{{asset('images/marcadores/marcadorAmarillo.png')}}";
        var verde = "{{asset('images/marcadores/marcadorVerde.png')}}";
        var morado = "{{asset('images/marcadores/marcadorMorado.png')}}";
        var anaranjado = "{{asset('images/marcadores/marcadorAnaranjado.png')}}";
        var rojo = "{{asset('images/marcadores/marcadorRojo.png')}}";
        
         var contentString = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b style="background-color: #760a91" class="text-white text-uppercase">&nbsp;Purpúra&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #760a91" class="text-white" style="font-family: consolas;">
                              <th scope="col" colspan="6">CONTAMINANTES</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <tr>
                              <th class="p-1 m-1">Pm10</th>
                              <th class="p-1 m-1">Pm2.5</th>
                              <th class="p-1 m-1">O3</th>
                              <th class="p-1 m-1">SO2</th>
                              <th class="p-1 m-1">NO2</th>
                              <th class="p-1 m-1">CO</th>
                            </tr>
                            <tr>
                              <td class="p-1 m-1">>=355</td>
                              <td class="p-1 m-1">>=151</td>
                              <td class="p-1 m-1">>=208</td>
                              <td class="p-1 m-1">>=798</td>
                              <td class="p-1 m-1">>=1.222</td>
                              <td class="p-1 m-1">>=17.688</td>
                            </tr>
                          </tbody>
                        </table>
                      <a class="justify-content-center align-items-center text-center">
                      <h5 class="card-title text-center m-0 mb-0"><small>
                      <button style="background-color: #760a91" class="text-center text-white btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      
                      <h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker1 = new google.maps.Marker({
          position: {lat:  10.985900, lng: -74.817377},
          map: map,
          icon: amarillo,
        });

         var marker2 = new google.maps.Marker({
          position: {lat: 11.010503, lng: -74.821668},
          map: map,
          icon: verde,
        });

         var marker3 = new google.maps.Marker({
          position: {lat:   11.010503, lng: -74.797464},
          map: map,
          icon: anaranjado,
        });

         var marker4 = new google.maps.Marker({
          position: {lat:   10.993315, lng: -74.806905},
          map: map,
          icon: rojo,
        });

         var marker5 = new google.maps.Marker({
          position: {lat:   10.982193, lng: -74.779611},
          map: map,
          icon: verde,
        });

         var marker6 = new google.maps.Marker({
          position: {lat:   10.964682, lng: -74.811197},
          map: map,
          icon: verde,
        });

         var marker7 = new google.maps.Marker({
          position: {lat:    10.976969, lng: -74.795576},
          map: map,
          icon: verde,
        });

         var marker8 = new google.maps.Marker({
          position: {lat:    11.000898, lng: -74.836259},
          map: map,
          icon: verde,
        });

          var marker9 = new google.maps.Marker({
          position: {lat:   11.020781, lng: -74.821668},
          map: map,
          icon: verde,
        });

         var marker10 = new google.maps.Marker({
          position: {lat: 10.9710908, lng: -74.7839236},
          map: map,
          icon: morado,
        });


        marker10.addListener('click', function() {
          infowindow.open(map, marker10);
          map.setZoom(17);
          map.setCenter({lat: 10.9710908, lng: -74.7839236});
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
          
            var map2 = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: 10.9710908, lng: -74.7839236},
          zoom: 19,
        mapTypeId: 'roadmap',
        disableDefaultUI: true,
        gestureHandling: 'none',
        zoomControl: false,
        });
        
         var marker101 = new google.maps.Marker({
          position: {lat: 10.9710908, lng: -74.7839236},
          map: map2,
          icon: morado,
        });
      }

    </script>

    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
</body>

</html>