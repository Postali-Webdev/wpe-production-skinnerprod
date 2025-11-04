<?php
/**
 * Contact Template
 * Template Name: Delaware
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>


<div id="contact-page">

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="contact-page-cta" class="cta-container" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">

            <div id="yoast-breadcrumbs">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
            
            <div class="cta-content">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h1>Contact Skinner Law Firm</h1>
                        <div class="contact-cta-content"><?php the_content(); ?></div>
                    <?php endwhile; ?>
                <?php endif; ?> 
            </div>

            <div class="contact-cta-footer-info">
                <div>
                    <span class="icon-footer-icon-location-pin-img"></span>
                    <p>200 W. Baltimore Ave., 2nd Floor <br>Media, PA 19063-3151</p>
                    <p><a id="driving" title="Google My Business" href="https://goo.gl/maps/5ySU5gqEB7b1tcEV7" target="_blank">Driving Directions &gt;</a></p>
                </div>

                <div>
                    <span class="icon-footer-icon-phone-img"></span>
                    <p><strong>Phone:</strong> <a href="tel:610-565-3320">610-565-3320</a></p>
                    <p><strong>Fax:</strong> 267-388-3477</p>
                </div>


                <div>
                    <span class="icon-footer-icon-clock-img"></span>
                    <p></p><p>Available: 24/7</p>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-cta-form-container" id='delaware-contact'>
        <div class="container">
            <div class="contact-cta-form">
                <p class="contact-cta-form-header">Get In Touch</p>
                <p class="contact-cta-form-text">Attorney Michael Skinner will personally discuss your situation and explain how he can help in a 100% free consultation.</p>
                <?php echo do_shortcode( '[gravityform id="1" title="false"]' ); ?>
            </div>

        </div>
    </section>


    <section class="contact-page-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12240.350129624223!2d-75.3925728!3d39.9170573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe24fe2bde08f68b4!2sSkinner%20Law%20Firm!5e0!3m2!1sen!2sus!4v1580763233794!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>



</div>




<?php get_footer(); ?>