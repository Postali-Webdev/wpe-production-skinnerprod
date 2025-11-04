<?php
/**
 * Areas Served Template
 * Template Name: Areas Served
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>




<div id="parent-page" class="child-page areas-served">


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
                                <p id="parent-cta-location"><?php the_field('child_cta_location') ?></p>
                                <h1><?php the_field('child_cta_header') ?></h1>
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

                                <ul>
                                    <li><a href="#parent-page-cta" title="intro">Intro</a></li>
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