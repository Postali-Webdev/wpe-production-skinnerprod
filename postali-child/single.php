<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */
$blogDefault = get_field('default_blog_image', 'options');
$currentID = get_the_ID();
get_header();?>
<a name="back-top-anchor"></a><!-- Going Back Up! -->


<div id="single-page">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <section id="single-page-cta" class="cta-container">
            <div class="container">

                <div id="yoast-breadcrumbs">
                    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>
                </div>

                <div class="single-author-date-image">
                    
                    <div class="single-author-date">
                        <h1><?php the_title(); ?></h1>
                        <div><img alt="Article Author Michael Skinner" src="/wp-content/uploads/2024/05/michael-skinner-headshot.png"></div>

                        <div>
                            <p>By <a title="About Michael Skinner" href="/about/michael-j-skinner/">Michael Skinner</a></p> 
                            <p class="blog-post-date"><span><?php echo get_the_date( 'd M, Y' ); ?></span></p>
                        </div>
                    </div>

                    <?php if ( has_post_thumbnail() ) { ?> 
                        <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                        <div class="single-article-image" style="background: url('<?php echo esc_attr( $background_img[0] ); ?>' ) no-repeat;"></div>

                        <?php } else { ?>
                        <div class="single-article-image" style="background-image: url( '/wp-content/uploads/2019/11/AdobeStock_198051301.png'); no-repeat;"></div>
                    <?php } ?>
                    
                </div>

            </div>
        </section>

        <section class="cta-container-cut">
        </section>

        <section class="added-cut">
        </section>

        <section class="single-blog-page-article">
            <div class="container">
                <div class="cta-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?> 


    <section class="article-author-blue-background">
        <div class="container">
            <div>
                <img alt="Article Author" src="/wp-content/uploads/2019/11/blog-individual-mike-bio-img.png">
            </div>

            <div>


                <?php if ( get_field( 'author_quote' ) ): ?>

                    <?php the_field('author_quote') ?>

                    <?php else: // field_name returned false ?>

                    <p>Michael J. Skinner, the founder of Skinner Law Firm LLC, is a former prosecutor with the Chester County District Attorney’s Office.</p>

                <?php endif; // end of if field_name logic ?>
            </div>
        </div>
    </section>

    <section class="blog-feed"> 
        <div class="container">
            <h2>Recent Blog Posts</h2>

            <div class="prev-arrow-single"><span class="icon-Margolis_chevronLeft"></span></div>
            <div class="article-container single-article-container">

                <?php
                $other_posts = new WP_Query( array(
                    'showposts' => '6', 
                    'post__not_in' => array($currentID))
                );

                while ( $other_posts->have_posts() ) : $other_posts->the_post(); ?>

                
                    <div class="article">
                        <div class="article-blog-container single-page-blog-feed">

                            <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                                <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                        <div class="article-blog-background-image" style="background-image: url( <?php echo $featImg[0]; ?>);"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a></div>
                                <?php } else { ?>
                                    <div class="article-blog-background-image" style="background-image: url( /wp-content/uploads/2019/11/AdobeStock_198051301.png);"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a></div>
                            <?php } ?>

                            
                            <div class="text-archive">
                                <a class="text-archive-container-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
                                <div class="archive-blog-text">
                                    <p>By <a title="About Michael Skinner" href="/about/michael-j-skinner/">Michael Skinner</a> | </p> <p class="blog-post-date"><span><?php echo get_the_date( 'd M, Y' ); ?></span></p>
                                </div>
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <a class="read-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read Now ></a>
                    </div>
                </a>

                <?php endwhile; ?>


            </div>
            <div class="next-arrow-single"><span class="icon-Margolis_chevronRight"></span></div> 
            
        </div>
    </section>


<?php get_footer(); ?>