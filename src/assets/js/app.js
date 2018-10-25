import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(document).ready(function(e) {
	$("").css("display", "none");

});

$(window).on("load resize scroll", function(e) {
	if( $(document).scrollTop()>30 || $(window).width() < 1024 || $(window).height() < 600) {
    $(".top-bar").addClass("top-bar-collapsed");
    $(".hamburger-menu").addClass("mobile-menu-collapsed");
		$(".top-bar-right-menu").addClass("top-bar-right-menu-collapsed");
    $(".top-bar-right-menu-number").addClass("top-bar-right-number-collapsed");
    $(".top-bar-right-share").addClass("top-bar-right-share-collapsed");
    $(".top-bar-right-search").addClass("top-bar-right-search-collapsed");
	} else {
    $(".top-bar").removeClass("top-bar-collapsed");
		$(".top-bar-right-menu").removeClass("top-bar-right-menu-collapsed");
    $(".top-bar-right-menu-number").removeClass("top-bar-right-number-collapsed");
    $(".top-bar-right-share").removeClass("top-bar-right-share-collapsed");
    $(".top-bar-right-search").removeClass("top-bar-right-search-collapsed");
	}
});
