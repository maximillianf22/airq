<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>AirQ - Barranquilla</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/cdi.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
</head>
  <body>
    <header style="background-image: linear-gradient(to right top, #75b948, #6bba3c, #5fbc30, #50bd20, #3ebe06);">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-2 text-center">
            <nav class="navbar navbar_header" style="flex-wrap: nowrap;">
              <a href="javascript:;" id="menu-toggle" style="color: #fff;font-size: 20px;">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </a>
            </nav>
          </div>
          <div class="col-lg-2">
             <select class="text-center font-weight-bold selectSearch form-control mr-2 selectCity" name="" id="">
                <option selected disabled value="">CIUDAD</option>
                <option data-lat="11.0041072" data-long="-74.8069813" value="">Barranquilla</option>
                <option data-lat="10.9171191" data-long="-74.7991506" value="">Soledad</option>
            </select>
          </div>
          <div class="col-lg-2">
            <select class="text-center font-weight-bold selectSearch" id="listCiudad" onchange="selectCiudad(this.value)" name="">
              <option selected disabled value="">BARRIO</option>
                <option value="">Andalucia</option>
                <option value="">Bellavista</option>
                <option value="">Campo Alegre</option>
                <option value="">La Floresta</option>
                <option value="">Los Andes</option>
            </select>
          </div>
          <div class="col-lg-2">
            <div id="btnConsolidado" style="display:none;">
              <a href="javascript:;" data-toggle="modal" data-target="#showConsolidado" class="btn btn-block" style="background-color: #fff;font-weight: bold;">CONSOLIDADO</a>
            </div>
          </div>
          <div class="col-lg-2 text-center">
            <div>
              <a href="javascript:;" onclick="openShowSearch()" class="btn btn-block" style="background-color: #fff;font-weight: bold;font-size: 15px;"><i class="fa fa-search" aria-hidden="true"></i> Búsqueda Avanzada</a>
            </div>
          </div>
          <div class="col-lg-2 text-center text-white">
            <a href="" class="text-white">Cerrar Sesion</a> | <a class="text-white" href="">Login</a>
          </div>
        </div>
      </div>
    </header>
    <section class="container-fluid">
    <div class="row">
            <div class=" text-center col-md-2 p-0">
                <div class="container mb-1 mt-2" >
                  <div class="row justify-content-center align-items-center">
                      <div class="card-deck flex-row flex-nowrap">
                        <div class="card" style="background-color: #760a91">
                          <div class="card-body pb-1 pt-1">
                            <h5 class="card-title p-0 m-0 text-white text-uppercase" style="font-size: 50px;">&nbsp;&nbsp;355&nbsp;&nbsp;</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="container">
                  <div class="row justify-content-center align-items-center">
                      <div class="card-deck flex-row flex-nowrap">
                        <div class="card m-0 p-0">
                          <div class="card-body" style="line-height: 1; padding: 0.8rem;">
                            <h5 class="card-title p-0 m-0 mb-1 text-dark text-uppercase" style="font-size: 30px; font-family: consolas;font-color: #760a91;">PEIGRO</h5>
                            <p class="card-text p-0 m-0"><strong>Calidad del Aire </strong><i class="text-dark fa fa-circle" aria-hidden="true"></i></p>
                            <p class="card-text p-0 m-0"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actualizado el Jueves&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </p>
                            <p class="card-text p-0 m-0"> 12:00 </p>
                            <p class="card-text p-0 m-0"> Temperatura: <strong class=text-monospace>23ºC</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container mt-2">
                   <div class="collapse show" id="tipoProyecto">
                      <div class="container align-items-center">
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>LUN 23</small></span>
                            <img src="{{ asset('images/marcadores/marcadorRojo.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>MAR 24</small></span>
                            <img src="{{ asset('images/marcadores/marcadorRojo.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 mb-1" type="button">
                          <div>
                            <span class="text-monospace "><small>MIE 25</small></span>
                            <img src="{{ asset('images/marcadores/marcadorRojo.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 bg-info" type="button">
                          <div>
                            <span class="text-monospace text-white"><small>JUE 26</small></span>
                            <img src="{{ asset('images/marcadores/marcadorMorado.png') }}" width="40px">
                            <span class="text-monospace text-white "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 mt-1" type="button">
                          <div>
                            <span class="text-monospace "><small>VIE 27</small></span>
                            <img src="{{ asset('images/marcadores/marcadorMorado.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>SAB 28</small></span>
                            <img src="{{ asset('images/marcadores/marcadorMorado.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>DOM 29</small></span>
                            <img src="{{ asset('images/marcadores/marcadorMorado.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>

                      </div>
                  </div>
                </div>
            </div>
            <div class="col-md-10 p-0">
                <div id="page-content-wrapper">
                <!-- Map container -->
                <div class="mapContainer" style="height: 83vh; width:100%">
                    <div id="map" style="height:100%"></div>
                </div>
            </div>
        </div>
    </div>
  </section> 
      <footer style="background-image: linear-gradient(to right top, #75b948, #6bba3c, #5fbc30, #50bd20, #3ebe06);padding: 2px 0;color: #fff;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-2 text-center">
            <a href="/home">
             <h1 style="color: white;"><strong><big>AirQ</big></strong></h1>
            </a>
          </div>
          <div class="col-lg-6 text-center">
            <div class="top_nav_right" style="top: 15%;">
              <ul class="top_nav_menu" style="margin:0;">
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">QUIENES SOMOS</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">SOPORTE</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">CONTACTO</a>
                </li>
                <li class="bid_lineleftHome" style="margin-left:20px;">
                  <a href="/" style="font-weight: bold;font-size: 15px;color:#fff;">INICIAR SESIÓN</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="top_nav_right" style="top: 15%;">
              <ul class="top_nav_menu" style="margin:0;">
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 15px;color:#fff;">REDES SOCIALES</a>
                </li>
                <li class="bid_lineleftHome">
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-facebook-official p-2" aria-hidden="true"></i>
                  </a>
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-instagram p-2" aria-hidden="true"></i>
                  </a>
                  <a href="#" style="font-weight: bold;font-size: 20px;color:#fff;">
                    <i class="fa fa-twitter-square p-2" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
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
                <div class="tab-content" id="myTabContent">
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

      }

    </script>
    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
  </body>
</html>