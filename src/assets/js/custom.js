// Background video script in home page
if ( $(".page-template-home").length ) {
	var tag = document.createElement('script');
			tag.src = 'https://www.youtube.com/player_api';
	var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var tv,
			playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
	var vid = [
				{'videoId': 'NCunjdUqKu4', 'startSeconds': 8.75, 'endSeconds': 114.5, 'suggestedQuality': 'hd720'},
				// {'videoId': '9ge5PzHSS0Y', 'startSeconds': 465, 'endSeconds': 657, 'suggestedQuality': 'hd720'},
				// {'videoId': 'OWsCt7B-KWs', 'startSeconds': 0, 'endSeconds': 240, 'suggestedQuality': 'hd720'},
				// {'videoId': 'qMR-mPlyduE', 'startSeconds': 19, 'endSeconds': 241, 'suggestedQuality': 'hd720'}
			],
			// randomVid = Math.floor(Math.random() * vid.length),
			// currVid = randomVid;
			currVid = 0;

	$('.hi em:last-of-type').html(vid.length);

	function onYouTubePlayerAPIReady(){
	  tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
	}

	function onPlayerReady(){
	  tv.loadVideoById(vid[currVid]);
	  tv.mute();
	}

	function onPlayerStateChange(e) {
	  if (e.data === 1){
	    $('#tv').addClass('active');
	    $('.hi em:nth-of-type(2)').html(currVid + 1);
	  } else if (e.data === 2){
	    $('#tv').removeClass('active');
	    if(currVid === vid.length - 1){
	      currVid = 0;
	    } else {
	      currVid++;  
	    }
	    tv.loadVideoById(vid[currVid]);
	    tv.seekTo(vid[currVid].startSeconds);
	  }
	}

	function vidRescale(){

	  var w = $(window).width()+200,
	    h = $(window).height()+200;

	  if (w/h > 16/9){
	    tv.setSize(w, w/16*9);
	    $('.video .screen').css({'left': '0px'});
	  } else {
	    tv.setSize(h/9*16, h);
	    $('.video .screen').css({'left': -($('.video .screen').outerWidth()-w)/2});
	  }
	}

	$(window).on('load resize', function(){
	  vidRescale();
	});

	$('.hi span:first-of-type').on('click', function(){
	  $('#tv').toggleClass('mute');
	  $('.hi em:first-of-type').toggleClass('hidden');
	  if($('#tv').hasClass('mute')){
	    tv.mute();
	  } else {
	    tv.unMute();
	  }
	});

	$('.hi span:last-of-type').on('click', function(){
	  $('.hi em:nth-of-type(2)').html('~');
	  tv.pauseVideo();
	});
}

// Script for Pokemon Go map
if ( $(".page-id-89").length ) {
	var map;
	var conBuilding 	  = {lat: 40.5050187, lng: -74.3666668};
	var pokeStopLocation1 = {lat: 40.5046428, lng: -74.3678728};
	var pokeStopIcon = '/wp-content/themes/KogaraPress/src/assets/images/pokemon-go/stop-icon.png';

	function initMap() {
		map = new google.maps.Map(document.getElementById('pokemon-go-map'), {
			center: conBuilding,
			zoom: 18,
			// Style 1 - Pokemon Go Theme - Comes with text on streets, buildings, etc.
			styles: [
			    {
			        "featureType": "administrative",
			        "elementType": "geometry.stroke",
			        "stylers": [
			            {
			                "color": "#e4e1e1"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#3f3f3f"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.land_parcel",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative.land_parcel",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#ff0000"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#f2f2f2"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "hue": "#ff0000"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape.man_made",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#82fd88"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape.natural",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#46eba7"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#caffd2"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "geometry.stroke",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "all",
			        "stylers": [
			            {
			                "saturation": -100
			            },
			            {
			                "lightness": 45
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#4da39a"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "labels.text",
			        "stylers": [
			            {
			                "color": "#ff0000"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.text",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "visibility": "on"
			            },
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "elementType": "labels.text.fill",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "elementType": "labels.text.stroke",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "elementType": "all",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "all",
			        "stylers": [
			            {
			                "color": "#5abbec"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#2594e4"
			            },
			            {
			                "weight": "1"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    }
			]
			// Style 2 - Pokemon Go Theme - Cleaner look without text on any streets, buildings, etc.
			// styles: [
			// 	{
			// 	    "featureType": "administrative",
			// 	    "elementType": "labels.text.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        },
			// 	        {
			// 	            "weight": "2.29"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "administrative.land_parcel",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "landscape.man_made",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#a1f199"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "landscape.man_made",
			// 	    "elementType": "labels.text",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "hue": "#ff0000"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "landscape.natural.landcover",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#37bda2"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "landscape.natural.terrain",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#37bda2"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi",
			// 	    "elementType": "labels",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#afa0a0"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi",
			// 	    "elementType": "labels.text.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.attraction",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.business",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.business",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#e4dfd9"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.business",
			// 	    "elementType": "labels.icon",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.government",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.medical",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.park",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#37bda2"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.place_of_worship",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.school",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "poi.sports_complex",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#84b09e"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road",
			// 	    "elementType": "geometry.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#fafeb8"
			// 	        },
			// 	        {
			// 	            "weight": "1.25"
			// 	        },
			// 	        {
			// 	            "visibility": "on"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road",
			// 	    "elementType": "labels.text.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road.highway",
			// 	    "elementType": "labels.icon",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road.arterial",
			// 	    "elementType": "geometry.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road.arterial",
			// 	    "elementType": "labels.text.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road.local",
			// 	    "elementType": "geometry.stroke",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "on"
			// 	        },
			// 	        {
			// 	            "color": "#f1ffb8"
			// 	        },
			// 	        {
			// 	            "weight": "1.48"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "road.local",
			// 	    "elementType": "labels",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "transit",
			// 	    "elementType": "all",
			// 	    "stylers": [
			// 	        {
			// 	            "visibility": "off"
			// 	        }
			// 	    ]
			// 	},
			// 	{
			// 	    "featureType": "water",
			// 	    "elementType": "geometry.fill",
			// 	    "stylers": [
			// 	        {
			// 	            "color": "#5ddad6"
			// 	        }
			// 	    ]
			// 	}
			// ]
		});

		var marker = new google.maps.Marker({
			position: pokeStopLocation1,
			map: map,
			icon: pokeStopIcon
		});
	}
}