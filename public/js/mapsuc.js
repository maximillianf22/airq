$(document).ready(function () {

  var markers3 = [
    {
      id: 'santoTomas',
      position: new google.maps.LatLng(10.6350, -74.93)
    }

  ]
  var latlng = new google.maps.LatLng(10.6350, -74.93);
  var mapOptions1 = {
    zoom: 18,
    center: latlng,
    draggable: false,
    mapTypeId: 'roadmap',
    disableDefaultUI: true,
    zoomControl: false,
    streetViewControl: true
  }

  map_p = new google.maps.Map(document.getElementById('map_p'), mapOptions1);
  setMarkers(map_p, markers3, true)

  function setMarkers(map, markers, info) {

    var infowindow

    markers.map(m => {
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: m.position,
        draggable: false,
        icon: 'assets/img/markers/shop.svg'
      });
      (function (marker) {
        google.maps.event.addListener(marker, 'click', function () {
          if (!infowindow) {
            infowindow = new google.maps.InfoWindow();
          }
          if (info) {
             var contentString = `
            <div class="container-fluid">
            <h4 class="m-0"> <small>Direccion: Calle 84 - Cra 20 - 158 </small></h4>
            <div class="row justify-content-center align-items-center mt-4">
                <div class="card-deck flex-row flex-nowrap mb-3">
                  <div class="card">
                    <div class="card-body pb-1"> 
                      <h5 class="card-title m-0 mb-2"><small>Codigo Sucursal: 025665 </small></h5>
                      <p class="card-text m-0"><small><strong>Sucursal:</strong> Abierta </small> <i class="text-success fa fa-circle" aria-hidden="true"></i></p>
                      <p class="card-text m-0"><small><strong>Encargado:</strong> John Jairo Snow  </small><i class="text-success fa fa-circle" aria-hidden="true"></i></p>
                      <p class="card-text m-0"><small><strong>Reservas:</strong> 45  </small><i class=" text-success fa fa-circle" aria-hidden="true"></i></p>
                      <p class="card-text m-0"><small><strong>Reservas Canceladas:</strong> 3  </small><i class=" text-danger fa fa-circle" aria-hidden="true"></i></p>
                      <p class="card-text m-0"><small><strong>Reservas Caducadas:</strong> 3  </small><i class=" text-dark fa fa-circle" aria-hidden="true"></i></p>
                      <a class="justify-content-center" href="sucursal">
                      <button class="text-center btn btn-sm btn-primary btnDetail mt-3 mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> Detalles</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>` 
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
          }
        });

      })(marker);
    })
  }
});