function iniciarMap(){
    /* Data points defined as an array of LatLng objects */
var heatmapData = [
    new google.maps.LatLng(13.705243, -89.24231),
    new google.maps.LatLng(13.696674, -89.197927),
    new google.maps.LatLng(14.692511, -87.86136),
    new google.maps.LatLng(12.022747 , -86.252007),
    new google.maps.LatLng(8.103289, -80.596013)
  ];
  
  var sanFrancisco = new google.maps.LatLng(14.692511, -87.86136);
  
  map = new google.maps.Map(document.getElementById('map'), {
    center: sanFrancisco,
    zoom: 5.5,
    mapTypeId: 'satellite'
  });
  
  var heatmap = new google.maps.visualization.HeatmapLayer({
    data: heatmapData
  });
  heatmap.setMap(map);
  
  
      
}