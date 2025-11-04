<?php
/**
 * Sitemap
 * Template Name: Sitemap
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div id="sitemap-page">

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

                <div class="testimonials-cta">
                    <h1>Sitemap</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="sitemap-page" class="sitemap">
        <div class="container">
            <div class="page-content"><!-- But dat page content, tho -->
                <h2>Pages</h2> 		<br>	
                <ul id="pages-list"><?php wp_list_pages("title_li=" ); ?></ul>
            </div><!-- page-content -->

            <div class="blog-post">
                <h2>Blog Posts</h2> 	<br>	
                <ul id="blogs-list"><?php wp_get_archives('type=postbypost'); ?></ul>
            </div><!-- page sidebar -->
        </div>
    </section>


</div>


<?php get_footer(); ?>