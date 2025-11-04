<?php
/**
 * About Template
 * Template Name: About
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>



<div id="about-page">

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="about-page-cta" class="cta-container" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">
            
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="cta-content"><?php the_content(); ?></div>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </section>


    <section class="classy-gray-background">
        <div class="container">
            <h2><?php the_field('firm_header') ?></h2>
            <?php the_field('firm_text') ?>
        </div>
    </section>


    <section class="about-help">
        <div class="container">
            <h2><?php the_field('help_header') ?></h2>
            <p><?php the_field('help_sub_header') ?></p>
            <div class="about-help-blocks-container">
                <?php if( have_rows('help_practice_areas') ): ?>
                    <?php while( have_rows('help_practice_areas') ): the_row(); 

                        // vars
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        $link_url = $link['url'];
                        $link_title = $link['title'];

                    ?>
                    
                        
                            <div class="about-help-blocks">
                                <a title="<?php echo $title ?>" href="<?php echo $link_url ?>">
                                    <div class="image-title"  style="background-image: url( <?php echo $image['url']; ?>);">
                                        <p class="title"><?php echo $title ?></p>
                                    </div>

                                    <div class="content-title">
                                        <p class="title"><?php echo $title ?></p>
                                        <div class="about-help-blocks-content"><?php echo $content ?></div>
                                    </div>
                                </a>
                            </div>
                        
                    
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="about-additional-practice-areas">
        <div class="container">
            <p><?php the_field('additional_practice_areas_text') ?></p>
            <div class="list-wrapper">
                <?php if( have_rows('additional_practice_areas') ): ?>
                    <?php while( have_rows('additional_practice_areas') ): the_row(); 

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

    <section class="about-page-michael-skinner-mobile">
    </section>

    <section class="about-page-michael-skinner">
        <div class="container">
            <div class="meet-skinner">
                <h2><?php the_field('meet_michael_skinner_header') ?></h2>
                <?php the_field('meet_michael_skinner_content') ?>

                <?php 
                    $meet_michael_skinner_link = get_field('meet_michael_skinner_link');
                    $meet_michael_skinner_link_url = $meet_michael_skinner_link['url'];
                    $meet_michael_skinner_link_title = $meet_michael_skinner_link['title'];
                ?>
                <a class="btn" href="<?php echo $meet_michael_skinner_link_url ?>"><?php echo $meet_michael_skinner_link_title ?></a>
            </div>
        </div>
    </section>

    <section class="classy-gray-background">
        <div class="container">
            <h2><?php the_field('contact_skinner_law_header') ?></h2>
            <?php the_field('contact_skinner_law_content') ?>
        </div>
    </section>


</div>




<?php get_footer();?>