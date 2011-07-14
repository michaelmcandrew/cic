<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript"> 
<!--//--><![CDATA[//><!--
$(document).ready(function(){

	var centerLatLong = new google.maps.LatLng(53.223541,-2.520399);

	var bounds = new google.maps.LatLngBounds();

	var options = {
		zoom: 5,
		center: centerLatLong,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map_canvas"), options);
	
	var infoWindows = [];

	function clearOverlays() {
    if (infoWindows) {
      for (i in infoWindows) {
        infoWindows[i].setMap(null);
      }
    }
  }
<?php
	//need to repeat for each Church or project
	foreach($churches as $church){
	echo "	var church{$church['id']}LatLong = new google.maps.LatLng({$church['lat']},{$church['long']});\n\n";
	echo "	bounds.extend (church{$church['id']}LatLong);\n\n";
	echo "	var church{$church['id']}infowindow = new google.maps.InfoWindow({
        content: '<div >'+
	        '<p><img src=\"/sites/default/files/church%20icon.jpg\" alt=\"Church\"/> <a href=\"/directory/view/{$church['id']}\"><b>{$church['name']}</b></a></p>'+
	        '<p>{$church['address']}</p>'+
	        '</div>'
    });\n\n";
	echo "	infoWindows.push(church{$church['id']}infowindow);\n\n";

	echo "	var church{$church['id']}Marker = new google.maps.Marker({
		position: church{$church['id']}LatLong,
		map: map,
		title: '{$church['name']}'
	});\n\n";

	echo "	google.maps.event.addListener(church{$church['id']}Marker, 'click', function() {
		clearOverlays();
		church{$church['id']}infowindow.open(map,church{$church['id']}Marker);
    });\n\n";
	//end of PHP foreach loop
	}
	?>
	
	map.fitBounds (bounds);
	// alert(google.maps.LatLngBounds())


})
//--><!]]></script> 

<div id="map_canvas"></div> 



<!-- The church name is <? print_r($church['name']);?>. -->
<!-- The church id is <? print_r($church['id']);?>. -->
	
