/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('.testimonials-slides').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		prevArrow: $('.prev-arrow'),
		nextArrow: $('.next-arrow'),
		responsive: [
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
			  }
			},
			{
				breakpoint: 667,
				settings: {
					prevArrow: false,
					nextArrow: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			  },
		]
	});

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	  });

	  $('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		focusOnSelect: true,
		centerMode: true,
		prevArrow: $('.prev-arrow-awards'),
		nextArrow: $('.next-arrow-awards'),
		
		responsive: [
			{
			  breakpoint: 1200,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true
			  }
			},
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
				centerMode: false
			  }
			},
			{
				breakpoint: 667,
				settings: {
					slidesToShow: 1,
					centerMode: false,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 10000
				}
			  },
		]
	  });

	  $('.single-article-container').slick({
		infinite: true,
		dots: false,
		slidesToShow:3,
		slidesToScroll: 1,
		prevArrow: $('.prev-arrow-single'),
		nextArrow: $('.next-arrow-single'),

		responsive: [
			{
			  breakpoint: 1500,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				variableWidth: true,
				infinite: true
			  }
			},
			{
				breakpoint: 667,
				settings: {
					prevArrow: false,
					nextArrow: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			  },
		]
		});


		

});