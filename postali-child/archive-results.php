<?php
/**
 * Results post archive template.
 * @package Postali Child
 * @author Postali LLC
 */
get_header(); ?>

<div id="results-page">

    <section id="testimonials-page-cta" class="cta-container results-page-cta" style="background-image: url( <?php the_field('results_background_image', 'options') ?>);">
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


            <div class="testimonials-cta">
                <h1>Case Results</h1>
                <p class="quote"><?php the_field('results_cta_text', 'option') ?></p>
            </div>
        </div>
    </section>

    <section class="home-results">
        <div class="container">

            
            <ul class="section-results accordions">


            <?php
                    $custom_query = new WP_Query( 
                        array(
                            'post_type' => 'results', 
                            'order' => 'DESC', 
                            'posts_per_page' => 1, 
                            'p'         => 723
                            ) 
                        );
                        if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                        <li>
                            <div class="icon-case-results">
                                <?php 
                                    if( get_field('icon') == 'sex' ) {
                                        echo "<span class='icon-case-results-icons-laptop-img'></span>";
                                    }
                                    if( get_field('icon') == 'assault' ) {
                                        echo '<span class="icon-case-results-icons-gun-img"></span>';
                                    }
                                    if( get_field('icon') == 'dui' ) {
                                        echo '<span class="icon-case-results-icons-police-car-img"></span>';
                                    }
                                    if( get_field('icon') == 'traffic' ) {
                                        echo '<span class="icon-case-results-icons-police-car-img"></span>';
                                    }
                                    if( get_field('icon') == 'expungement' ) {
                                        echo '<span class="icon-case-results-icons-finger-print-img"></span>';
                                    }
                                    if( get_field('icon') == 'theft' ) {
                                        echo '<span class="icon-case-results-icons-money-img"></span>';
                                    }
                                    if( get_field('icon') == 'property' ) {
                                        echo '<span class="icon-case-results-icons-money-img"></span>';
                                    }
                                    if( get_field('icon') == 'white' ) {
                                        echo '<span class="icon-case-results-icons-finger-print-img"></span>';
                                    }
                                ?>
                            </div>
                            
                            
                            <p class="recent-success-title"><?php the_title(); ?></p>

                            <p class="results-case">Result: <?php the_field('result') ?></p>
                            
                            <div class="recent-success-content"><?php the_excerpt(); ?></div>

                                <?php if ( get_field( 'show_more' ) ): ?>
                                    <div class="accordions_title">
                                        <p>Read More ></p>
                                    </div>
                                <?php else: // field_name returned false ?>                                
                                <?php endif; // end of if field_name logic ?>

                            <div class="show-more accordions_content">
                                <?php the_field('show_more') ?>
                            </div>
                            
                        </li>
                <?php endwhile; endif; wp_reset_query();?>
                
                <?php while ( have_posts() ) : the_post(); ?>
               
                    <li>
                        <div class="icon-case-results">
                            <?php 
                                if( get_field('icon') == 'sex' ) {
                                    echo "<span class='icon-case-results-icons-laptop-img'></span>";
                                }
                                if( get_field('icon') == 'assault' ) {
                                    echo '<span class="icon-case-results-icons-gun-img"></span>';
                                }
                                if( get_field('icon') == 'dui' ) {
                                    echo '<span class="icon-case-results-icons-police-car-img"></span>';
                                }
                                if( get_field('icon') == 'traffic' ) {
                                    echo '<span class="icon-case-results-icons-police-car-img"></span>';
                                }
                                if( get_field('icon') == 'expungement' ) {
                                    echo '<span class="icon-case-results-icons-finger-print-img"></span>';
                                }
                                if( get_field('icon') == 'theft' ) {
                                    echo '<span class="icon-case-results-icons-money-img"></span>';
                                }
                                if( get_field('icon') == 'property' ) {
                                    echo '<span class="icon-case-results-icons-money-img"></span>';
                                }
                                if( get_field('icon') == 'white' ) {
                                    echo '<span class="icon-case-results-icons-finger-print-img"></span>';
                                }
                            ?>
                        </div>
                        
                        
                        <p class="recent-success-title"><?php the_title(); ?></p>

                        <p class="results-case">Result: <?php the_field('result') ?></p>
                        
                        <div class="recent-success-content"><?php the_excerpt(); ?></div>

                            <?php if ( get_field( 'show_more' ) ): ?>
                                <div class="accordions_title">
                                    <p>Read More ></p>
                                </div>
                            <?php else: // field_name returned false ?>                                
                            <?php endif; // end of if field_name logic ?>

                        <div class="show-more accordions_content">
                            <?php the_field('show_more') ?>
                        </div>
                        
                    </li>

                    <?php endwhile; wp_reset_postdata(); ?>
                
                </ul>

            </div>

        <?php the_posts_pagination(); ?>

    </section>

</div>

<?php get_footer();
