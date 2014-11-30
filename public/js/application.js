$(document).ready(function(){
//Shining Image
$(window).load(function()
{ 
    $("#imgID").shiningImage(); 
	$("#about").shiningImage(); 
	$("#Gallery").shiningImage(); 
	$("#Gallery1").shiningImage(); 
	$("#Gallery2").shiningImage(); 
	$("#Service").shiningImage();
});
	//FLICKR API
var apiKey = '033077274dd7e3befc0a1541b90e772f';

//var flickrRequest =
//	"http://api.flickr.com/services/rest/?jsoncallback=?&method=flickr.photos.search&api_key="+apiKey+"&user_id=29096781@N02&format=json";
var flickrRequest =
	"http://api.flickr.com/services/rest/?jsoncallback=?&method=flickr.photos.search&api_key="+apiKey+"&text=Novelty,Cakes&per_page=14&min_upload_data=01/11/2013&format=json";

$.getJSON(flickrRequest,function(data){
	
	$.each(data.photos.photo, function(i, val){
		var photoURL = "http://farm"+val['farm']+".staticflickr.com/"+val['server']+"/"+val['id']+"_"+val['secret']+"_q.jpg";
		
		$('#photos').append("<img src =\'"+photoURL+"\'/ class=\'img-square  \'>");
	});
});
	//TWEETER 
// call the tweeFeed function and write to the #tweet-feed-widget div
$('#tweet-feed-widget').tweetFeed({
    widgetId: '411476563515817984'
});


	//GOOGLE MAP
// when a user clicks on the li with a div of googleClick draw a new map.
//$('#googleMap').empty(); .html('')
$('#googleClick').on('click', function(){
	//$('#googleClick').empty();
	var myCenter=new google.maps.LatLng(53.351422799999990000 ,-6.254892100000006000);
	var marker;

	var mapProp = {
	  center:myCenter,
	  zoom:15,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	marker=new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE
	  });
	marker.setMap(map);
	
})
//GOOGLE MAP 2 
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
