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
		var map;	//��ͼ����	
		var mode = google.maps.DirectionsTravelMode.DRIVING;	//�ȸ��ͼ·��ָ����ģʽ
		var directionsDisplay = new google.maps.DirectionsRenderer();	//��ͼ·����ʾ����
		var directionsService = new google.maps.DirectionsService();	//��ͼ·�߷������
		var directionsVisible = false;	//�Ƿ���ʾ·��
		directionsDisplay.setMap(null);
		directionsDisplay.setMap(map);
		directionsDisplay.setPanel(document.getElementById("directionsPanel"));	//��·�ߵ��������ʾ��div��	
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

