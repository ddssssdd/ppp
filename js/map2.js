(function(){
	var map, geocoder, marker,inforwindow;
	window.onload = function(){
		var mapDiv = document.getElementById("map");
		var latlng= new google.maps.LatLng(37.09,-95.71);
		var options = {
				center:latlng,
				zoom:3,
				mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(mapDiv,options);
		var form = document.getElementById("addressForm");
		form.onsubmit= function(){
			var address = document.getElementById("address").value;
			getCoordinates(address);
			return false;
		}
		function getCoordinates(address){
//			alert(address);
			if (!geocoder){
				geocoder= new google.maps.Geocoder();
				
			}
			var geocoderRequest = {
					address:address
			}
			geocoder.geocode(geocoderRequest,function(results,status){
				if (status==google.maps.GeocoderStatus.OK){
					map.setCenter(results[0].geometry.location);
					map.setZoom(15);
					if (!marker){
						maker= new  google.maps.Marker({
							map:map
						});
					}
					maker.setPosition(results[0].geometry.location);
				}
			});
		}
		/*
		var map;	//地图对象	
		var mode = google.maps.DirectionsTravelMode.DRIVING;	//谷歌地图路线指引的模式
		var directionsDisplay = new google.maps.DirectionsRenderer();	//地图路线显示对象
		var directionsService = new google.maps.DirectionsService();	//地图路线服务对象
		var directionsVisible = false;	//是否显示路线
		directionsDisplay.setMap(null);
		directionsDisplay.setMap(map);
		directionsDisplay.setPanel(document.getElementById("directionsPanel"));	//将路线导航结果显示到div中	
		var request = {origin: findLatLng, destination: marker.position, travelMode: mode, optimizeWaypoints: true, avoidHighways: false,avoidTolls: false};
		directionsService.route
		(
			request,
			function(response, status)
			{
		   		if (status == google.maps.DirectionsStatus.OK)
		   		{
		       			directionsDisplay.setDirections(response);
		   		}
		   	}
		);
		directionsVisible = true;
		*/
				
	}
})();

