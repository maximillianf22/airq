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
                        <div class="card" style="background-image: linear-gradient(to right top, #75b948, #6bba3c, #5fbc30, #50bd20, #3ebe06);">
                          <div class="card-body pb-1 pt-1">
                            <h5 class="card-title p-0 m-0 text-white text-uppercase" style="font-size: 50px;">&nbsp;&nbsp;45&nbsp;&nbsp;</h5>
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
                            <h5 class="card-title p-0 m-0 mb-1 text-primary text-uppercase" style="font-size: 30px; font-family: consolas;">Bueno</h5>
                            <p class="card-text p-0 m-0"><strong>Calidad del Aire </strong><i class="text-success fa fa-circle" aria-hidden="true"></i></p>
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
                            <img src="{{ asset('images/marcadores/marcadorAnaranjado.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>MAR 24</small></span>
                            <img src="{{ asset('images/marcadores/marcadorAmarillo.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 mb-1" type="button">
                          <div>
                            <span class="text-monospace "><small>MIE 25</small></span>
                            <img src="{{ asset('images/marcadores/marcadorAmarillo.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 bg-info" type="button">
                          <div>
                            <span class="text-monospace text-white"><small>JUE 26</small></span>
                            <img src="{{ asset('images/marcadores/marcadorVerde.png') }}" width="40px">
                            <span class="text-monospace text-white "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1 mt-1" type="button">
                          <div>
                            <span class="text-monospace "><small>VIE 27</small></span>
                            <img src="{{ asset('images/marcadores/marcadorVerde.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>SAB 28</small></span>
                            <img src="{{ asset('images/marcadores/marcadorVerde.png') }}" width="40px">
                            <span class="text-monospace "><small>3ºC - 12ºC</small></span>
                          </div>
                        </button>
                        <button class="btn btn-icon-clipboard p-1" type="button">
                          <div>
                            <span class="text-monospace "><small>DOM 29</small></span>
                            <img src="{{ asset('images/marcadores/marcadorAmarillo.png') }}" width="40px">
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
          zoom: 13,
          center: {lat: 11.0041072, lng: -74.8069813},
        });

        var amarillo = "{{asset('images/marcadores/marcadorAmarillo.png')}}";
        var verde = "{{asset('images/marcadores/marcadorVerde.png')}}";
        var morado = "{{asset('images/marcadores/marcadorMorado.png')}}";
        var anaranjado = "{{asset('images/marcadores/marcadorAnaranjado.png')}}";
        var rojo = "{{asset('images/marcadores/marcadorRojo.png')}}";
        
         var contentString = `
            <div class="container-fluid">
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1">
                      <h5 class="card-title text-center m-0 mb-0"><small>Nivel iv </small></h5>
                      <h5 class="card-title text-center m-0 mb-1"><small>Emegencia:  <b style="background-color: #760a91" class="text-white text-uppercase">&nbsp;Purpúra&nbsp;</b></small></h5>
                        <table class="text-center table-bordered table table-hover table-responsive p-0 m-0" style="font-size: 12px;">
                          <thead>
                            <tr style="background-color: #760a91" class="text-white" style="font-family: consolas;">
                              <th scope="col" colspan="6">CONTAMINANTES</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <tr>
                              <th>Pm10</th>
                              <th>Pm2.5</td>
                              <th>O3</td>
                              <th>SO2</td>
                              <th>NO2</td>
                              <th>CO</td>
                            </tr>
                            <tr>
                              <td>>=355</td>
                              <td>>=151</td>
                              <td>>=208</td>
                              <td>>=798</td>
                              <td>>=1.222</td>
                              <td>>=17.688</td>
                            </tr>
                          </tbody>
                        </table>
                      <a class="justify-content-center align-items-center text-center" href="detalle">
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

      }

    </script>
    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
  </body>
</html>