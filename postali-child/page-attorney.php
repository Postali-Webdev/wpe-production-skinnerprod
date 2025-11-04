<?php
/**
 * Attorney Template
 * Template Name: Attorney
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>



<div id="attorney-page">
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="bio-page-cta" class="cta-container mobile-bio-page-cta" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">
            <div id="yoast-breadcrumbs">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
        </div>
    </section>

    <section id="bio-page-cta" class="cta-container desktop-bio-page-cta" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">

            <div id="yoast-breadcrumbs">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
            
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="cta-content"><?php the_content(); ?></div>
                    <div class="attorney-btn">
                        <a class="btn" href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a>
                        <a class="btn" href="/testimonials/">Read Our Reviews</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </section>




    <section class="bio-more-info">
        <div class="container">
            <?php the_field('about_michael_skinner_section') ?>
        </div>
    </section>


    <section class="about-additional-practice-areas">
        <div class="container">
            <h2>Practice Areas</h2>
            <div class="list-wrapper mike-skinner">
            
                <?php if( have_rows('practice_areas_links') ): ?>
                    <?php while( have_rows('practice_areas_links') ): the_row(); 

                        // vars
                        $practice_area_link = get_sub_field('practice_area_link');
                        $practice_area_link_url = $practice_area_link['url'];
                        $practice_area_link_title = $practice_area_link['title'];

                    ?>
                        <div>
                            <a class="btn" title="<?php echo $practice_area_link_title ?>" href="<?php echo $practice_area_link_url ?>"><div><?php echo $practice_area_link_title ?></div></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div>
        </div>
    </section>


    <section class="information-accordions">
        <div class="accordions container">
            <?php if( have_rows('information_accordions') ): ?>
                <?php while( have_rows('information_accordions') ): the_row(); 

                    // vars
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');

                ?>

                    <div class="traditional-accordions-container">
                        <div class="accordions_title"><h4><?php echo $title ?></h4><span></span></div>
                        <div class="accordions_content">
                            <?php echo $content ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part( 'block', 'reviews' ); ?>



</div>




<?php get_footer();?>