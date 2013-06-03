(function(){
	
	window.onload = function(){
		var mapDiv = document.getElementById("map");
		var latlng= new google.maps.LatLng(37.09,-95.71);
		var options = {
				center:latlng,
				zoom:7,
				mapTypeId:google.maps.MapTypeId.ROADMAP,
				disableDefaultUI:true,
				mapTypeControl:true,
				mapTypeControlOptions:{
//									style:google.maps.MapTypeControlStyle.DROPDOWN_MENU,
									position:google.maps.ControlPosition.BOTTOM,
									maptypeIds:[google.maps.MapTypeId.ROADMAP,
									            google.maps.MapTypeId.SATELLITE
									            ]
									},
				navigationControl:true,
				navigationControlOptions:{
										position:google.maps.ControlPosition.RIGHT,
										style:google.maps.NavigationControlStyle.ZOOM_PAN
									},
		};
		var map = new google.maps.Map(mapDiv,options);
		
		var markOptions = {
			position:new google.maps.LatLng(37.09,-95.00),
			map:map,
			title:"Click me",
			//icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/blue/blank.png'
			icon:'http://gmaps-samples.googlecode.com/svn/trunk/markers/green/marker19.png'

		};
		var inforWindow = new google.maps.InfoWindow({
			content:"hello, this is a mark"
		});
		var marker = new google.maps.Marker(markOptions);
		google.maps.event.addListener(marker,'click',function(){
			inforWindow.open(map,marker);
		});
		// Creating an array that will contain the coordinates
		// for New York, San Francisco, and Seattle
		var places = [];
		// Adding a LatLng object for each city
		places.push(new google.maps.LatLng(40.756, -73.986));
		places.push(new google.maps.LatLng(37.775, -122.419));
		places.push(new google.maps.LatLng(47.620, -122.347));
		// Looping through the places array
		
		var bounds = new google.maps.LatLngBounds();
		for (var i = 0; i < places.length; i++) {
			// Creating a new marker
			var marker1 = new google.maps.Marker({
				position: places[i],
				map: map,
				title: 'Place number ' + i
			});
			// Adding an event-listener
			/*
			google.maps.event.addListener(marker1, 'click', function() {
				//alert(this);
				var title = this.title;
				// Creating a new infowindow
				var infowindow1 = new google.maps.InfoWindow({
					content: title
				});
				infowindow1.open(map, this);
			});
			*/
			(function(i,marker){
				google.maps.event.addListener(marker, 'click', function() {
				
					// Creating a new infowindow
					var infowindow1 = new google.maps.InfoWindow({
						content: "Place name"+ i
					});
					infowindow1.open(map, marker);
				});
			})(i,marker1);
			bounds.extend(places[i]);
		}
		map.fitBounds(bounds);
		
		// Creating an array that will contain the points for the polyline
		var route = [
		  new google.maps.LatLng(37.7671, -122.4206),
		  new google.maps.LatLng(34.0485, -118.2568)
		];
		// Creating the polyline object
		var polyline = new google.maps.Polyline({
			path: places,
			strokeColor: "#ff0000",
			strokeOpacity: 0.6,
			strokeWeight: 5
		});
		// Adding the polyline to the map
		polyline.setMap(map);
		
	}
})();
function searching(){
	alert("i am here");
}

