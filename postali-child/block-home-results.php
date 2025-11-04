<?php
/**
 * Results Styles
 * @package Postali Parent
 * @author Postali LLC
 */
// WP_Query arguments
$results = get_field('result_topic');
$results_args = array (
	'post_type'              => array( 'results' ),
	'post_status'            => array( 'publish' ),
    'posts_per_page'         => 4,
    'order'	=> 'DESC',
    'orderby'  => 'rand'
);
$avg_rating = 0; 
$the_results = new WP_Query( $results_args );
?>




<section class="home-results">
    <div class="container">

        <p class="results-slider_header">Our Recent Successes</p>
            <?php if( $the_results->have_posts() ) : ?>
                <ul class="section-results">
                    <?php while ( $the_results->have_posts() ) : $the_results->the_post(); ?>
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
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        <a href="/results/">
            <p class="btn">
                See More
            </p>
        </a>

    </div>

</section>


