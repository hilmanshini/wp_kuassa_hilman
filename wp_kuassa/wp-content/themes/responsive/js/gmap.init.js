/* Map from "contact" page */
$('#google_map').gmap3(
	{ action:'init',
		options:{
			center:[40.710443,-73.993996],
			address: "Manhattan, NY 10002 30 ft N",
			zoom: 16
		}
	},
	{ action: 'addMarkers',
		markers:[
			{lat:40.710443, lng:-73.993996, data:'Manhattan, NY 10002 30 ft N'}
		],
		marker:{
			options:{
				draggable: false,
				icon:new google.maps.MarkerImage("img/pin-location-red.png", new google.maps.Size(24, 24))
			},
			events:{
				click: function(marker, event, data){
					alert(data);
				}
			}
		}
	}
);

/* Map 1 from "media" page */
$('#google_map1').gmap3(
	{ action:'init',
		options:{
			center:[40.710443,-73.993996],
			address: "Manhattan, NY 10002 30 ft N",
			zoom: 16
		}
	},
	{ action: 'addMarkers',
		markers:[
			{lat:40.710443, lng:-73.993996, data:'Manhattan, NY 10002 30 ft N'}
		],
		marker:{
			options:{
				draggable: false,
				icon:new google.maps.MarkerImage("img/pin-location-red.png", new google.maps.Size(24, 24))
			},
			events:{
				click: function(marker, event, data){
					alert(data);
				}
			}
		}
	}
);

/* Map 2 from "media" page */
$('#google_map2').gmap3(
	{ action:'init',
		options:{
			center:[40.710443,-73.993996],
			address: "Manhattan, NY 10002 30 ft N"
		}
	},
	{ action: 'addMarkers',
		markers:[
			{lat:40.710443, lng:-73.993996, data:'Manhattan, NY 10002 30 ft N'}
		],
		marker:{
			options:{
				draggable: false,
				icon:new google.maps.MarkerImage("img/pin-location-red.png", new google.maps.Size(24, 24))
			},
			events:{
				click: function(marker, event, data){
					alert(data);
				}
			}
		},
		map:{
			center: true,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.SATELLITE
		}
	}
);
