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
	function initMap() {
		map = new google.maps.Map(document.getElementById('pokemon-go-map'), {
			center: {lat: 40.5050187, lng: -74.3666668},
			zoom: 18,
			styles: [
				{
				    "featureType": "water",
				    "stylers": [
				      { "visibility": "on" },
				      { "color": "#1A87D6" }
				    ]
				},{
				    "featureType": "landscape",
				    "stylers": [
				      { "color": "#AFFFA0" }
				    ]
				},{
				    "featureType": "road",
				    "elementType": "geometry",
				    "stylers": [
				      { "color": "#59A499" }
				    ]
				},{
				    "featureType": "poi",
				    "stylers": [
				      { "color": "#EAFFE5" }
				    ]
				},{
				},{
				    "featureType": "road",
				    "elementType": "geometry.stroke",
				    "stylers": [
				      { "color": "#F0FF8D" },
				      { "weight": 2.2 }
				    ]
				},{
				    "featureType": "poi.business",
				    "stylers": [
				      { "visibility": "off" }
				    ]
				},{
				    "featureType": "poi.government",
				    "stylers": [
				      { "visibility": "off" }
				    ]
				},{
				    "featureType": "administrative.locality",
				    "stylers": [
				      { "visibility": "off" }
				    ]
				}
			]
		});
	}
}