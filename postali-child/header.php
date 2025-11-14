<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N4JPGSL');</script>
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4JPGSL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if(is_page('70')) { ?>
<link rel="preload" fetchpriority="high" as="image" href="/wp-content/uploads/2019/12/new-hero-homepage-desktop-img.jpg.webp">
<link rel="preload" fetchpriority="high" as="image" href="/wp-content/uploads/2019/12/new-hero-homepage-desktop-img.jpg.jpg">
<?php } ?>

<!-- Add JSON Schema -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');

if ( !empty($global_schema) ): 
    echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('page_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

	<a title="Return To Top" id="scroll_mobile" class="return-top" href="#"><span class="icon-circle-up"></span></a>
	<div class="fake-header"></div>

    <a class="skip-link" href='#main-content'>Skip to Main Content</a>

	<header class="sticky">
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div class="header-consulation">
					<p>Free Consultation:</p>
					<a href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a>
				</div>

				<div id="header-top_menu">
                    <nav role="navigation">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'header-nav'
                        );
                        wp_nav_menu( $args );
                    ?>			
                    </nav>
				</div>

                <div id="header-top_mobile">
                    <div id="menu-icon" class="toggle-nav">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </div>
                </div>
			</div>
		</div>
	</header>

    <span id="main-content"></span>