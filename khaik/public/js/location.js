    $(document).ready(function () {
      
    });

var x = document.getElementById("lat");
var y = document.getElementById("lon");


function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.value =  position.coords.latitude;
 y.value = position.coords.longitude;
}