/**
 * Home Page Scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	
	// Clicking on the accordion header title
	$(".accordions").on("click", ".accordions_title", function() {
	// will (slide) toggle the related panel.
		$(this).toggleClass("active").next().slideToggle();
		
	});

	$("#div20 .accordions .acc-container:nth-child(1) .accordions_title, #div21 .accordions .acc-container:nth-child(1) .accordions_title").addClass('active');
	$("#div20 .accordions .acc-container:nth-child(1) .accordions_content, #div21 .accordions .acc-container:nth-child(1) .accordions_content").css("display", "block");


	/* Home Page Show annd Hide */
	jQuery(function() {
	jQuery(".cases-sidebar div:nth-child(2) .btn").addClass('btn-effects');
	jQuery('.showSingle').click(function() {
		jQuery('.showSingle').removeClass('btn-effects');
		jQuery((this)).addClass('btn-effects');
		jQuery('.targetDiv').hide();
		jQuery('#div' + $(this).attr('target')).show();
	});
	});


	/* Case We Handle Section */
	jQuery(function() {
		jQuery('.accused-para').click(function() {
			jQuery('.accused-para').removeClass('active-accused');
			jQuery((this)).addClass('active-accused');
			jQuery('.accused-container-show').hide();
			jQuery('#div' + $(this).attr('target')).show();
		});
		});


});