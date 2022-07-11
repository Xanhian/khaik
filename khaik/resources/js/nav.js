  $(document).ready(function() {
 
var page = sessionStorage.getItem("someVarKey")

switch (page) {
    case "home":
        $("#home").addClass("selected");
        break;
      case "deal":
        $("#deals").addClass("selected");
        break;
          case "favorite":
        $("#favorite").addClass("selected");
        break;
          case "profile":
        $("#profile").addClass("selected");
        break;

    default:

        break;
}
sessionStorage.setItem("someVarKey", null);




  $("#home").click(function(){
  var someVarName = "home";
sessionStorage.setItem("someVarKey", someVarName);


  });
  $("#deals").click(function(){
  var someVarName = "deal";
sessionStorage.setItem("someVarKey", someVarName);


  });
  $("#favorite").click(function(){
  var someVarName = "favorite";
sessionStorage.setItem("someVarKey", someVarName);


  });
  $("#profile").click(function(){
  var someVarName = "profile";
sessionStorage.setItem("someVarKey", someVarName);


  });

var x =  $("#lat");
var y =  $("#lon");
  

    getLocation();
   function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
 
function showPosition(position) {
  x.val(position.coords.latitude) ;
  y.val(position.coords.longitude) ;

};
  });