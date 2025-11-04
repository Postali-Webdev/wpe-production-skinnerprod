<?php
/**
 * reviews post archive template.
 * Template Name: reviews
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<div id="testimonials-page">

    <section id="testimonials-page-cta" class="cta-container" style="background-image: url( <?php the_field('testimonials_background_image', 'options') ?>);">

        <div class="container">

            <div class="parent-page-nav">
                <div id="yoast-breadcrumbs">
                    <?php if ( function_exists('yoast_breadcrumb') ) {  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
                </div>
            </div>

            <div class="testimonials-cta">
                <h1>Testimonials</h1>
                <p class="quote"><?php the_field('testimonial_quote', 'option') ?></p>
            </div>

        </div>

    </section>
    
    <section class="testimonial-page-grid">
        
        <div class="container">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="google-schema_single tetimonial-container" itemtype="http://schema.org/Review" itemscope="" itemprop="review">

                    <div class="testimonial-name-date">
                        <div class="name">
                            <p class="google-schema_name" itemtype="http://schema.org/Person" itemprop="author" itemscope=""><span itemprop="name"><?php the_title(); ?></span></p>
                        </div>
                    </div>

                    <div class="testimonial-rating google-schema_met">
                        <div class="google-schema_review-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                            <?php if( get_field('star_numeric') == '1' ): ?>
                                <img src="/wp-content/uploads/2019/12/1-star-icon-gold.png" alt="1 Star Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">1</span>
                            <?php elseif( get_field('star_numeric') == '2'): ?>
                                <img src="/wp-content/uploads/2019/12/2-star-icon-gold.png" alt="2 Stars Review" class="google-schema_star" />
                                <span itemprop="ratingValue">2</span>
                            <?php elseif( get_field('star_numeric') == '3'): ?>
                                <img src="/wp-content/uploads/2019/12/3-star-icon-gold.png" alt="3 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">3</span>
                            <?php elseif( get_field('star_numeric') == '4'): ?>
                                <img src="/wp-content/uploads/2019/12/4-star-icon-gold.png" alt="4 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">4</span>
                            <?php elseif( get_field('star_numeric') == '5'): ?>
                                <img src="/wp-content/uploads/2019/12/5-star-icon-gold.png" alt="5 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">5</span>
                            <?php endif; ?>
                        </div>

                        <div itemprop="itemReviewed" itemtype="https://schema.org/Organization" itemscope="">
                            <meta itemprop="name" content="Skinner Law Firm">
                        </div>
                    </div>

                    <div class="google-schema_excerpt testimonial-quote">
                        <?php the_content(); ?>
                    </div>

                </div>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>

        <?php the_posts_pagination(); ?>
    
    </section>

</div>

<?php get_footer();
