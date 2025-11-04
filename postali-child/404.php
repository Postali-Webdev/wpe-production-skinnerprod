<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Child
 * @author Postali LLC
**/
get_header(); ?>

<div id="unfound-page">
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
					<h1 class="post-title">Error - Page Not Found</h1>
				</div>
			</div>
		</div>
	</section>


	<section id="error-page">
		<div class="container">

			<h2>Our apologies, but that page could not be found.</h2>
			<p>The page you are looking for does not exist. It may have been moved or deleted from the site. If you don't see what you're looking for below, you can return back to the homepage and try again.</p>
			<a class="btn" href="/">Back to home page</a>

			<section id="sitemap-page" class="sitemap">
				<div class="container">
					<div class="page-content"><!-- But dat page content, tho -->
						<h2>Other Pages</h2> 		<br>	
						<ul id="pages-list"><?php wp_list_pages("title_li=" ); ?></ul>
					</div><!-- page-content -->]
				</div>
			</section>
			

		</div>
	</section><!-- #content -->
</div>

<?php get_footer();
