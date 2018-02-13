import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(document).ready( function() {

	// Use responsive image mapping tool on activities page template only
	if ( $(".page-template-activities").length ) {
		$("img.map-1").rwdImageMaps();
		$("img.map-2").rwdImageMaps();
	}

	// Add Foundation's order class to alternate text and image placement on activity page
	if ( $(".page-template-activities").length ) {
		$(".activity:odd .cell:first-child").addClass("large-order-2");
		$(".activity:odd .cell:last-child").addClass("large-order-1");
	}

	// Smooth scrolling on activity page
	// Select all links with hashes
	if ( $(".page-template-activities").length ) {
		$('[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });	
	}

});  
