import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(document).ready(function(e) {


});

$(window).on("load resize scroll", function(e) {
	if( $(window).scrollTop()>30 || $(window).width() < 1024 || $(window).height() < 600) {
    $(".top-bar").addClass("top-bar-collapsed");
    $(".hamburger-menu").addClass("mobile-menu-collapsed");
		$(".top-bar-right-menu").addClass("top-bar-right-menu-collapsed");
    $(".top-bar-right-menu-number").addClass("top-bar-right-number-collapsed");
    $(".top-bar-right-share").addClass("top-bar-right-share-collapsed");
    $(".top-bar-right-search").addClass("top-bar-right-search-collapsed");
		$(".top-bar").addClass("top-bar-fade-in");
	} else {
    $(".top-bar").removeClass("top-bar-collapsed");
		$(".top-bar-right-menu").removeClass("top-bar-right-menu-collapsed");
    $(".top-bar-right-menu-number").removeClass("top-bar-right-number-collapsed");
    $(".top-bar-right-share").removeClass("top-bar-right-share-collapsed");
    $(".top-bar-right-search").removeClass("top-bar-right-search-collapsed");
	}
});

// Find all YouTube videos
var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $("body");


// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();
