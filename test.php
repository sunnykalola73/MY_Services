<h3>My Google Maps Demo</h3>
<!--The div element for the map -->
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcv217to_EJ6vmu8Aiqe3rpnDFqHiVK9M&callback=initMap">
</script>
<style>
/* Set the size of the div element that contains the map */
#map {
  height: 400px;  /* The height is 400 pixels */
  width: 100%;  /* The width is the width of the web page */
 }
 </style>
 // Initialize and add the map
 <script>
function initMap() {
  // The location of Uluru
  var uluru = {lat: 23.0043, lng: 72.6216};
  var uluru1 = {lat: 21.0043, lng: 71.6216};
  
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 3, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  var marker1 = new google.maps.Marker({position: uluru1, map: map});
  
}
</script>
