function initMap() {
  // The location of Uluru
  // -, -
  var university = {lat: -23.664373, lng: -46.678076};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 18, center: university});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: university, map: map});
}
 