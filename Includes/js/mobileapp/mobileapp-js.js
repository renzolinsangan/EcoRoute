// $(document).ready(function() {
    
// });

$('#ecorouteMapBtn').on('click', function(e) {
    $('#ecorouteMapBtn').addClass('active');
    $('#sendNotificationContainer').addClass('d-none');
    $('#ecorouteMapContainer').removeClass('d-none');
    $('#sendNotificationBtn').removeClass('active');
});

$('#sendNotificationBtn').on('click', function(e) {
    $('#sendNotificationBtn').addClass('active');
    $('#ecorouteMapBtn').removeClass('active');
    $('#ecorouteMapContainer').addClass('d-none');
    $('#sendNotificationContainer').removeClass('d-none');
});

// MAP
var map;

function initMap() {
  // Default location (Philippines center)
  var defaultLocation = { lat: 12.8797, lng: 121.7740 };

  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: defaultLocation,
  });

  // Use browser geolocation
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        var userLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude,
        };

        // Update map + marker with jQuery wrapper
        $(function () {
          map.setCenter(userLocation);
          map.setZoom(15);

          new google.maps.Marker({
            position: userLocation,
            map: map,
            title: "You are here",
          });
        });
      },
      function () {
        showError(true);
      }
    );
  } else {
    showError(false);
  }
}

function showError(browserHasGeolocation) {
  $(function () {
    alert(
      browserHasGeolocation
        ? "Error: Geolocation service failed."
        : "Error: Your browser does not support geolocation."
    );
  });
}