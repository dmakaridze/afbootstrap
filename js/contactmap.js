function initialize() {
  var myOptions = {
    zoom : 17,
    center : new google.maps.LatLng(41.702439496372, 44.798388218528),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'),
      myOptions);
  var marker = new google.maps.Marker({
    position : map.getCenter(),
    map : map,
    title : 'Click to zoom'
  });
  google.maps.event.addListener(map, 'center_changed', function() {
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });
  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);