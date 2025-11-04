<?php
/**
 * Banner Styles
 * @package Postali Parent
 * @author Postali LLC
 */
// WP_Query arguments
$topics = get_field('testimonials_topic');
$args = array (
	'post_type'              => array( 'testimonials' ),
	'post_status'            => array( 'publish' ),
	'posts_per_page'         => '-1',
	'order'                  => 'ASC',
	'orderby'                => 'rand'
);
$avg_rating = 0; 
$testi_topic = new WP_Query( $args );
?>

<section class="section-testimonials">

    <div class="container">

<div class="slider-grid reviews-slider-grid">
    <div class="prev-arrow"><span class="icon-Margolis_chevronLeft"></span></div>
        <?php if( $testi_topic->have_posts() ) : ?>
    <div class="testimonials-slides reviews-slides">
        <?php while( $testi_topic->have_posts() ) :?>

        <?php $testi_topic->the_post(); 
            $star_num = get_field('star_numeric');
            $avg_rating += $star_num;
        ?>
            <div class="google-schema_single" itemtype="http://schema.org/Review" itemscope="" itemprop="review">
                
                <div class="testimonial">
                    <p class="quote-slider">
                        <?php $the_quote = get_field('quote'); ?>
                        <?php echo wp_trim_words( $the_quote, 6, '...' ); ?>
                    </p>
                    <div class="google-schema_excerpt"><p><?php the_excerpt(); ?></p></div>
                </div>
                
                <div id="google_schema_absolute">
                    <div class="google-schema_meta">

                        <div class="google-schema_review-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">

                            <?php if( get_field('star_numeric') == '1' ): ?>
                                <img src="/wp-content/uploads/2019/12/1-star-icon-blue.png" alt="1 Star Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">1</span>
                            <?php elseif( get_field('star_numeric') == '2'): ?>
                                <img src="/wp-content/uploads/2019/12/2-star-icon-blue.png" alt="2 Stars Review" class="google-schema_star" />
                                <span itemprop="ratingValue">2</span>
                            <?php elseif( get_field('star_numeric') == '3'): ?>
                                <img src="/wp-content/uploads/2019/12/3-star-icon-blue.png" alt="3 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">3</span>
                            <?php elseif( get_field('star_numeric') == '4'): ?>
                                <img src="/wp-content/uploads/2019/12/4-star-icon-blue.png" alt="4 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">4</span>
                            <?php elseif( get_field('star_numeric') == '5'): ?>
                                <img src="/wp-content/uploads/2019/12/5-star-icon-blue.png" alt="5 Stars Review" class="google-schema_stars" />
                                <span itemprop="ratingValue">5</span>
                            <?php endif; ?>

                        </div>

                    </div>
                    
                    <div itemprop="itemReviewed" itemtype="https://schema.org/Organization" itemscope="">
                        <meta itemprop="name" content="Skinner Law Firm">
                    </div>

                </div>

                <div class="date_name">
                    <p class="google-schema_date"><?php the_field('date_of_review'); ?></p>
                    <p class="google-schema_name" itemtype="http://schema.org/Person" itemprop="author" itemscope=""><span itemprop="name"><?php the_title(); ?></span></p>
                </div>

            </div>
        <?php endwhile; wp_reset_postdata(); ?>

</div>

        <div class="next-arrow"><span class="icon-Margolis_chevronRight"></span></div> 
</div>

        <div class="aggregate-rating" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
        <span class="google-schema_average">Average <span itemprop="ratingValue"><?php echo $avg_rating / $testi_topic->found_posts; ?></span> out of <span  itemprop="bestRating">5</span> rating based on <span itemprop="ratingCount"><?php echo $testi_topic->found_posts ?></span> Reviews</span>
        <div itemprop="itemReviewed" itemtype="https://schema.org/Organization" itemscope="">
            <meta itemprop="name" content="Anderson Injury Lawyers Accident Injury Lawyers, P.C.">
        </div>
    </div>


    
    <?php endif ?>
 
    <a class="btn" title="Read More Testimonials" href="/testimonials/">See All Reviews</a>

</div>


</section>