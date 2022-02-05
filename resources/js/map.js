// funcion para crear mapa con marcadores
function iniciarMap(){
    var center ={lat:13.705243 ,lng: -89.24231};

    var coords = [{lat:13.705243 ,lng: -89.24231},
                 {lat:13.696674 ,lng: -89.197927},
                 {lat:14.692511 ,lng: -87.86136},
                 {lat:12.022747 ,lng: -86.252007},
                 {lat:8.103289 ,lng: -80.596013}];

    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 7,
      center: center,
    });
    
    for (i = 0; i < coords.length; i++) {
      var marker = new google.maps.Marker({
        position: coords[i],
        map: map,
        title: "punto  "+ (i +1)
      });
      
    }
}
// end funcion mapa marcadores