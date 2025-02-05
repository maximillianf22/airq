<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Informacion de la calidad del aire en el espacio aereo de Barranquilla">
  <meta name="author" content="Developapp">
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
  <script Language="JavaScript">
    function DameLaFechaHora() {
      var hora = new Date()
      var hrs = hora.getHours();
      var min = hora.getMinutes();
      var hoy = new Date();
      var m = new Array();
      var d = new Array()
      var an= hoy.getYear();
      m[0]="Enero";  m[1]="Febrero";  m[2]="Marzo";
      m[3]="Abril";   m[4]="Mayo";  m[5]="Junio";
      m[6]="Julio";    m[7]="Agosto";   m[8]="Septiembre";
      m[9]="Octubre";   m[10]="Noviembre"; m[11]="Diciembre";
      document.write(hoy.getDate());
      document.write(" de ");
      document.write(m[hoy.getMonth()]);
    }
  </script>

  <style type="text/css">

.contenedor {
  
  display: flex;
  width: 300px;
  height: 40px;
  color: black;
  font-size: 20px;
  line-height: 40px;
  
  position: absolute;
  top: 17px;
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
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">4</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
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
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
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
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
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
                  <a href="#!" class="list-group-item list-group-item-action btnDetail">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('images/marcadores/marcadorMorado.png')}}" class="">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Medidor ID 61351 Barranquilla, Atlantico</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>hace 9 horas</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Emergencia Ambiental Alcanzada</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
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
                <div class="dropdown-divider"></div>
                <a href="login" class="dropdown-item">
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
                    <img src="{{asset('assets/img/brand/alcaldia.jpg')}}" width="150px" class="rounded mx-auto d-block"> 
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h6 class="card-title text-uppercase text-muted mb-0">CALIDAD DEL AIRE <strong><script>DameLaFechaHora();</script></strong></h6>                           
                          <span class="h3 font-weight-bold mb-0">
                            <div class="contenedor ml-2">
                              <ul class="cambio">
                                <li>46 </li>
                                <li>45 </li>
                                <li>48 </li>
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
                            <span class="text-nowrap font-weight-bold text-uppercase text-muted">27ºC</span>
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
                      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Calendario">
                        <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="home" aria-selected="true">
                          <span class="nav-link-icon d-block"><i class="fas fa-calendar-day"></i></span>
                        </a>
                      </li>
                      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Grafica">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="profile" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="fas fa-chart-area"></i></span>
                        </a>
                      </li>
                      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Navegacion">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="contact" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="fas fa-map-marked-alt"></i></span>
                        </a>
                      </li>
                      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Medidores Peligrosos">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="contact" aria-selected="false">
                          <span class="nav-link-icon d-block"><i class="fas fa-exclamation-triangle"></i></span>
                        </a>
                      </li>
                    </ul>
                 </div>
               

                  <div class="card shadow">
                      <div class="">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade  show active p-0 m-0" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                 <button type="button" class="list-group-item list-group-item-action p-1">
                                      <div class="row ml-2 mr-2">
                                      <div class="col">
                                        <h6 class="card-title text-uppercase text-muted mb-0">LUNES</h6>
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
                                        <h6 class="card-title text-uppercase text-muted mb-0">MARTES</h6>
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
                              <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="card-header p-1 mt-2 mb-1">
                                          <h6 class="h4 mb-0 p-0 text-center">Medidores potencialmente <br><strong class="text-danger">PELIGROSOS</strong></h6>
                                        </div>
                                  <a href="#!" class="btnDetail">
                                  <div class="col-md-12 mt-2">
                                      <div class="card card-stats border">
                                        <!-- Card body -->
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col">
                                                 <h6 class="card-title text-uppercase text-muted mb-0">CALIDAD DEL AIRE <strong><script>DameLaFechaHora();</script></strong></h6>
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
                                              <p class="mb-0 text-sm">
                                                <span class="text-danger mr-2"><strong><i class="fas fa-exclamation-triangle"></i></strong></span>
                                                <span class="text-nowrap font-weight-bold text-uppercase text-muted"><small>Medidor ID <b>65651</b></small> </span>
                                              </p>
                                              <div class="text-right text-muted">
                                                     <small>hace 8 minutos Barranquilla, Atlantico</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                      <div class="card card-stats border">
                                        <!-- Card body -->
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col">
                                                 <h6 class="card-title text-uppercase text-muted mb-0">CALIDAD DEL AIRE <strong><script>DameLaFechaHora();</script></strong></h6>
                                                <span class="h5 font-weight-bold mb-0">255 | <strong class="text-uppercase" style="color: #9000FF">MUY MALO</strong></span>
                                              </div>
                                            <div class="col-auto">
                                              <div class="icon-sm icon-shape text-white bg-gradient-danger rounded-circle shadow">
                                                <i class="fas fa-cloud"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="container">
                                            <div class="row">
                                              <p class=" mb-0 text-sm">
                                                <span class="text-danger mr-2"><strong><i class="fas fa-exclamation-triangle"></i></strong></span>
                                                <span class="text-nowrap font-weight-bold text-uppercase text-muted"><small>Medidor ID <b>65461</b></small> </span>
                                              </p>
                                              <div class="text-right text-muted">
                                                     <small>hace 8 minutos Barranquilla, Atlantico</small>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
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
                <h5 class="modal-title" id="exampleModalLabel">Dirección: Carrera 10 - Calle 80 #50 </h5>
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
                                              <h6 class="card-title text-uppercase text-muted mb-0">CALIDAD DEL AIRE <strong><script>DameLaFechaHora();</script></strong></h6>
                                              <span class="h3 font-weight-bold mb-0">
                                                <div class="contenedor ml-2">
                                                  <ul class="cambio">
                                                    <li>
                                                      <span class="h5 font-weight-bold mb-0">46 | <strong class="text-success text-uppercase">EXCELENTE</strong></span>
                                                    </li>
                                                    <li>
                                                      <span class="h5 font-weight-bold mb-0">155 | <strong class="text-warning text-uppercase">MALO</strong></span>
                                                    </li>
                                                    <li>
                                                      <span class="h5 font-weight-bold mb-0">355 | <strong class="text-uppercase" style="color: #9000FF">PELIGRO</strong></span>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </span>
                                            </div>
                                            <div class="col-auto">
                                              <div class="icon-sm icon-shape text-white rounded-circle shadow bg-default">
                                                <i class="fas fa-cloud"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="container">
                                            <div class="row">
                                              <p class="mt-2 mb-0 col-6 text-sm border-right">
                                                <span class="text-danger mr-2"><strong><i class="fas fa-thermometer-empty"></i></strong></span>
                                                <span class="text-nowrap font-weight-bold text-uppercase text-muted">27ºC</span>
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
                                                    <img alt="Image placeholder" src="{{ asset('images/marcadores/mark.png')}}" class="">
                                                  </div>
                                                  <div class="col ml--2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                      <div>
                                                        <h4 class="mb-0 text-sm">Medidor ID 61651 Barranquilla, Atlantico</h4>
                                                      </div>
                                                      <div class="text-right text-muted">
                                                        <small>hace 15 minutos</small>
                                                      </div>
                                                    </div>
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
                              <div class="form-group  mx-auto d-block">
                                <h4 class="mt-4 text-center">Historico</h4>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                      </div>
                                      <input class="form-control datepicker" placeholder="Selecciona la Fecha" type="text">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                          <div class="row">
                                          <div class="col-md-6">
                                              Particulas por millon PM.2.5
                                                    <canvas id="chart-bars3"></canvas>
                                           </div>
                                           <div class="col-md-6">
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
                                          <div class="col-md-6">
                                              NO2 Dioxido de Nitrogeno
                                                    <canvas id="chart-bars5"></canvas>
                                           </div>
                                           <div class="col-md-6">
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
  <script src="{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
      <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Colombia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat:   10.993315, lng: -74.806905},
        });

        var amarillo = "{{asset('images/marcadores/marcadorAmarillo.png')}}";
        var verde = "{{asset('images/marcadores/marcadorVerde.png')}}";
        var morado = "{{asset('images/marcadores/marcadorMorado.png')}}";
        var anaranjado = "{{asset('images/marcadores/marcadorAnaranjado.png')}}";
        var rojo = "{{asset('images/marcadores/marcadorRojo.png')}}";
        
         var contentStringMorado = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b style="background-color: #760a91" class="text-white text-uppercase">&nbsp;Purpúra&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #760a91" class="text-white" >
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


            var contentStringVerde = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b class="text-success text-uppercase">&nbsp;Verde&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr class="text-white bg-success">
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
                              <td class="p-1 m-1"><=55</td>
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
                      <button class="text-center text-white btn-success btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      
                      <h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;

            var contentStringAmarillo = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b style="background-color: #F8F800" class="text-white text-uppercase">&nbsp;Amarillo&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #F8F800" class="text-white" >
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
                              <td class="p-1 m-1">>=55</td>
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
                      <button style="background-color: #F8F800" class="text-center text-white btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      
                      <h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
            
            var contentStringAnaranjado = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b style="background-color: #FF5900" class="text-white text-uppercase">&nbsp;Anaranjado&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #FF5900" class="text-white" >
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
                              <td class="p-1 m-1">>=155</td>
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
                      <button style="background-color: #FF5900" class="text-center text-white btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      
                      <h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;

            var contentStringRojo = `<div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0">Nivel iv </h5>
                      <h5 class="card-title text-center m-0 mb-1">Emegencia:  <b style="background-color:#EB0000" class="text-white text-uppercase">&nbsp;Rojo&nbsp;</b></h5>
                        <table class="table-sm text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #EB0000" class="text-white" >
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
                              <td class="p-1 m-1">>=255</td>
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
                      <button style="background-color: #EB0000" class="text-center text-white btn btn-sm btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      
                      <h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;

        var infowindowVerde = new google.maps.InfoWindow({
          content: contentStringVerde
        });
        var infowindowAmarillo = new google.maps.InfoWindow({
          content: contentStringAmarillo
        });
        var infowindowAnaranjado = new google.maps.InfoWindow({
          content: contentStringAnaranjado
        });
        var infowindowRojo = new google.maps.InfoWindow({
          content: contentStringRojo
        });
        var infowindowMorado = new google.maps.InfoWindow({
          content: contentStringMorado
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
          position: {lat: 10.956775, lng: -74.762537},
          map: map,
          icon: morado,
        });


        marker1.addListener('click', function() {
          infowindowAmarillo.open(map, marker1);
          map.setCenter(marker1.getPosition());
          map.setZoom(17);
        });
        marker2.addListener('click', function() {
          infowindowVerde.open(map, marker2);
          map.setCenter(marker2.getPosition());
          map.setZoom(17);
        });
        marker3.addListener('click', function() {
          infowindowAnaranjado.open(map, marker3);
          map.setCenter(marker3.getPosition());
          map.setZoom(17);
        });
        marker4.addListener('click', function() {
          infowindowRojo.open(map, marker4);
          map.setCenter(marker4.getPosition());
          map.setZoom(17);
        });
        marker5.addListener('click', function() {
          infowindowVerde.open(map, marker5);
          map.setCenter(marker5.getPosition());
          map.setZoom(17);
        });
        marker6.addListener('click', function() {
          infowindowVerde.open(map, marker6);
          map.setCenter(marker6.getPosition());
          map.setZoom(17);
        });
        marker7.addListener('click', function() {
          infowindowVerde.open(map, marker7);
          map.setCenter(marker7.getPosition());
          map.setZoom(17);
        });
        marker8.addListener('click', function() {
          infowindowVerde.open(map, marker8);
          map.setCenter(marker8.getPosition());
          map.setZoom(17);
        });
        marker9.addListener('click', function() {
          infowindowVerde.open(map, marker9);
          map.setCenter(marker9.getPosition());
          map.setZoom(17);
        });
        marker10.addListener('click', function() {
          infowindowMorado.open(map, marker10);
          map.setCenter(marker10.getPosition());
          map.setZoom(17);
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
          map.setZoom(13);
        })

        $('.selectBarrio').on('change', function () {
          var latitud = $(this).children("option:selected").data("lat");
          var longitud = $(this).children("option:selected").data("long");
          // alert(latitud + ' - ' + longitud);
          var cityMap = new google.maps.LatLng(latitud, longitud);
          map.panTo(cityMap);
          map.setZoom(15);
        })
          

         var map2 = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: 10.956775, lng: -74.762537},
          zoom: 18,
        mapTypeId: 'roadmap',
        disableDefaultUI: true,
        gestureHandling: 'none',
        zoomControl: false,
        });

         var marker010 = new google.maps.Marker({
          position: {lat: 10.956775, lng: -74.762537},
          map: map2,
        });
      }

    </script>

    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
</body>

</html>