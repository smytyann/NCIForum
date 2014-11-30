$(document).ready(function(){
			
var myCenter=new google.maps.LatLng(53.351422799999990000 ,-6.254892100000006000);
var marker;
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap1"),mapProp);
marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

});

