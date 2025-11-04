/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */


jQuery( function ( $ ) {
	"use strict";

	$(window).on('resize', function(){
		var win = $(this); //this = window
		if (win.width() >= 992) { 
			$("#header-top_menu.mobile-nav.toggle-nav").css("display", "block");
			$("#menu-icon").removeClass('active');
			$('body').removeClass('menu-open');
		}
		if (win.width() <= 992) { 
			$("#header-top_menu.mobile-nav.toggle-nav").css("display", "none");
		}
	});

    //Hamburger animation
	$('#menu-icon').click(function() {
		$(this).toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.toggle-nav').click(function() {
		$('#menu-primary-nav').slideToggle(300);
	});
	 
	//Close navigation on anchor tap
	$('.toggle-nav.active').click(function() {	
		$('#menu-primary-nav').slideUp(300);
	});	

	//Mobile menu accordion toggle for sub pages
	$('#menu-primary-nav > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="fa fa-angle-down"></span></div>');
    $('#menu-primary-nav > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="fa fa-angle-down"></span></div>');

	$('#menu-primary-nav .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(300);
		$(this).toggleClass('toggle-background');
		$(this).find('.fa fa-angle-down').toggleClass('toggle-rotate');
	});


	$(document).ready(function(){

		// Add smooth scrolling to all links
		$("a").on('click', function(event) {
		
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();
		
			// Store hash
			var hash = this.hash;
		
			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 136
			}, function(){
			
				// Add hash (#) to URL when done scrolling (default click behavior)
				
			});
			} // End if
		});

		
	});
		
	$(window).scroll(function(){
		var sticky = $('.sticky'),
			scroll = $(window).scrollTop();
		if (scroll >= 150) sticky.addClass('fixed'), $('.fake-header').show();
		else sticky.removeClass('fixed'), $('.fake-header').hide();
	});

	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > 800) {
			$('#scroll_mobile').fadeIn();
		} else {
			$('#scroll_mobile').fadeOut();
		}
	});

    //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
    $(document).ready(function() {
        $('.menu-item-has-children').on('focusin', function() {
            var subMenu = $(this).find('.sub-menu');
            subMenu.addClass('show');

            $(this).find('.sub-menu > li:last-child').on('focusout', function() {
                subMenu.removeClass('show');
            });
            $(this).find('.sub-menu').on('mouseout', function() {
                subMenu.addClass('remove');
            });
        });
    });


});