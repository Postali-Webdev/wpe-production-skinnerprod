<?php
/**
 * Form Success Template
 * Template Name: Form Success
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>



<div id="form-success-page">
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="form-page-cta" class="cta-container short-cta" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">
            <div class="parent-page-nav">
                <div id="yoast-breadcrumbs">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h1>FORM SUCCESS</h1>
            <p>Thank you for your submission. Someone will be in contact with you shortly.</p>
        </div>
    </section>

</div>




<?php get_footer();?>