<?php
/**
 * Blog post author archive template.
 * Template Name: Author Archives
 * @package Postali Parent
 * @author Postali LLC
 */
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array (
	'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged
);
$the_query = new WP_Query( $args );
get_header(); ?>



<div id="blog-index-page">

<?php if ( $the_query->have_posts() ) : ?>
    <section id="blog-page-cta" class="cta-container" style="background-image: url( '/wp-content/uploads/2019/11/blog-hero-img.png');">
        <div class="container">

            <div id="yoast-breadcrumbs">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>

            <h1>Author: <?php the_author() ?></h1>
            <div class="contact-cta-content"><?php the_field('blog_page_cta', 'options') ?></div>
        </div>
    </section>

    <section class="archive-page">

        <div class="container">

            
            <div class="article-container index-article-container">
            
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                
                    <div class="article">
                        <div class="article-slider">
                            <div class="article-blog-container">

                                <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                                    <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                        <div class="article-blog-background-image" style="background-image: url( <?php echo $featImg[0]; ?>);"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="article-blog-background-image" style="background-image: url( /wp-content/uploads/2019/11/AdobeStock_198051301.png);">><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a></div>
                                <?php } ?>

                                <div class="text-archive">
                                    <a class="text-archive-container-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
                                    <div class="archive-blog-text">
                                        <p>By <a title="About Michael Skinner" href="/about/michael-j-skinner/">Michael Skinner</a> | </p> <p class="blog-post-date"><span><?php echo get_the_date( 'd M, Y' ); ?></span></p>
                                    </div>
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <a class="read-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                Read Now >
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
            
        
        </div>

        
    </section>
    <?php endif; ?> 
</div>



<?php get_footer();
