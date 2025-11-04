<?php
/**
 * Parent Template
 * Template Name: Parent
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>



<div id="parent-page">

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="parent-page-cta" class="cta-container">
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
            

                    <div class="parent-cta-container">
                        <div class="parent-cta-content">
                            <div>
                                <p id="parent-cta-location"><?php the_field('parent_cta_location') ?></p>
                                <h1><?php the_field('parent_cta_header') ?></h1>
                            </div>
                            <div class="attorney-btn">
                                <a class="btn" href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a>
                                <a class="btn" href="/testimonials/">Read Our Reviews</a>
                            </div>
                            <div class="the-content">
                                <?php the_content(); ?>
                            </div>
                        </div>


                        <div class="image-nav">
                            <div class="parent-cta-featured" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
                            </div>

                            <div class="on-page-nav">
                                <p class="nav-title">
                                    On This Page
                                </p>
                                
                                <ul id="on-page-nav">
                                    <li><a href="#parent-page-cta" title="intro">Intro</a></li>
                                    <li><a href="#<?php the_field('mid_content_section_url') ?>" title=""><?php the_field('mid_content_title') ?></a></li>
                                    <li><a href="#<?php the_field('last_content_section_url') ?>" title=""><?php the_field('last_content_title') ?></a></li>
                                    <?php if( have_rows('more_content') ): ?>
                                        <?php while( have_rows('more_content') ): the_row(); 

                                            // vars
                                            $section_title = get_sub_field('section_title');
                                            $section_url = get_sub_field('section_url');

                                        ?>
                                            <li><a href="#<?php echo $section_url ?>" title="<?php echo $section_title ?>"><?php echo $section_title ?></a></li>
                                            
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>


                    </div>

                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </section>

    <section class="cta-container-cut">
    </section>

    <section class="cta-container-cut-white">
    </section>


    <section class="deeper-topics">
        <div class="container">
            <?php dynamic_sidebar( 'Parent and Child Deeper Topics' ); ?>
        </div>
    </section>

    <section id="<?php the_field('mid_content_section_url') ?>" class="mid-content">
        <div class="container">
            <?php the_field('mid_content') ?>
        </div>
    </section>

    <?php get_template_part( 'block', 'awards' ); ?>

    <section id="<?php the_field('last_content_section_url') ?>" class="last-content">
        <div class="container">
            <?php the_field('last_content_intro') ?>
                <?php if( have_rows('information_accordions') ): ?>
                    <?php while( have_rows('information_accordions') ): the_row(); 

                        // vars
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');

                    ?>

                        <div class="traditional-accordions-container accordions">
                            <div class="accordions_title"><h3><?php echo $title ?></h3><span></span></div>
                            <div class="accordions_content">
                                <?php echo $content ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php the_field('last_content') ?>
        </div>
    </section>

    <?php get_template_part( 'block', 'reviews' ); ?>

    <section class="more-content">
        <div class="container">
            <?php if( have_rows('more_content') ): ?>
                <?php while( have_rows('more_content') ): the_row(); 

                    // vars
                    $content = get_sub_field('content');
                    $section_url = get_sub_field('section_url');

                ?>
                    <div id="<?php echo $section_url ?>">
                        <?php echo $content ?>
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>



</div>




<?php get_footer();?>