<?php
/**
 * Blog post archive template.
 * Template Name: Archives
 * @package Postali Parent
 * @author Postali LLC
 */
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array (
	'post_type' => 'post',
    'posts_per_page' => 7,
    'paged' => $paged
);
$the_query = new WP_Query($args);
$blogDefault = get_field('default_blog_image', 'options');
get_header(); ?>
<a name="back-top-anchor"></a><!-- Going Back Up! -->


<?php $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>

<section id="blog-page-cta" class="cta-container" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
	<div class="container">
		<h1>Legal Blog</h1>
		<div>
			<p id="recent">Most Recent Post</p>
			<a class="blog-feed-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <h2><?php the_title(); ?></h2></a>
			<p id="date-category"><span><?php echo get_the_date( 'm-d-Y' ); ?></span> | <span><?php the_category( ', ' ); ?></span></p>
			<div class="the_excerpt"><?php the_excerpt(); ?></div>
			<a class="btn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				Read More
			</a>
		</div>
	</div>
<?php endwhile; ?>


	<section id="blog-text-below-cta" class="about-text-below-cta" style="background-image: url( <?php the_field('blog_text_below_cta_image', 'options') ?>);">
		<div class="container">
			<?php the_field('blog_text_below_cta', 'options') ?>
		</div>
	</section>


	<section class="most-recent-category">
		<div class="container">
			<div>
			<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC'
				) );
				
				foreach( $categories as $category ) {
					$category_link = sprintf( 
						'<a href="%1$s" alt="%2$s">%3$s</a>',
						esc_url( get_category_link( $category->term_id ) ),
						esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
						esc_html( $category->name )
					);
					
					echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
				} 
			?>
			</div>
			<div>

			</div>
		</div>
	</section>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
if ( $post->ID == $do_not_duplicate ) continue;?>
	<?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
		<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
		<div class="image-blog" style="background: url('<?php echo esc_attr( $background_img[0] ); ?>' ) no-repeat;"></div>
	<?php } else { ?>
		<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
		<div class="image-blog" style="background: url('<?php echo $blogDefault; ?>' ) no-repeat;"></div>
	<?php } ?>
	<div class="text-blog">
		<p class="blog-topic"><?php the_category( ', ' ); ?></p>
		<span><?php echo get_the_date( 'm-d-Y' ); ?></span>
		<a class="blog-feed-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <h2><?php the_title(); ?></h2></a>
		<a class="btn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			Read More
		</a>
	</div>
<?php endwhile; endif; ?>


	<?php if (function_exists("pagination")) {
		pagination($the_query->max_num_pages);
	} ?>

    <!-- Contact Form Footer and Text -->
    <?php get_template_part( 'block', 'contact' ); ?>


<?php get_footer();
