<?php
/**
 * Search results template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>


<div id="search-page">

    
    <section id="form-page-cta" class="cta-container short-cta" style="background-image: url( <?php the_field('results_background_image', 'options') ?>);">
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
                    <h1 class="post-title"><?php printf( esc_html__( 'Search results for "%s"', 'postali' ), get_search_query() ); ?></h1>
                </div>
            </div>
        </div>
    </section>


    <section id="off-set-height" class="search-results">

        <div class="container">


            <?php if ( have_posts() ) : ?>

            <div class="content-left reports-archive search-results-page">
                <?php while ( have_posts() ) : the_post(); ?>


                <div class="search-result-container">
                    <div class="default-page-content"><!-- But dat page content, tho -->
                        <a class="blog-feed-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <h2><?php the_title(); ?></h2></a>
                        <p class="the_excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                    </div><!-- page-content -->
                    <a class="btn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                       Visit Page
                    </a>
                </div>

                <?php endwhile; ?>

            </div>

            <?php else : ?>

                <p><?php printf( esc_html__( 'Our apologies but there\'s nothing that matches your search for "%s"', 'postali' ), get_search_query() ); ?><br> Would you like to search again?</p>
                <div class="custom-search-bar"><?php get_search_form(); ?></div>

            <?php endif; ?>

            <?php if (function_exists("pagination")) {
                pagination($the_query->max_num_pages);
            } ?>
        </div>

    </section><!-- #content -->


</div>



<?php get_footer();
