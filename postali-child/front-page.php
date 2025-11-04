<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div id="front-page">


    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="front-page-cta" class="cta-container" style="background-image: url( <?php echo $backgroundImg[0]; ?>);">
        <div class="container">
            <h1><?php the_field('cta_header_one') ?></h1>
            <p class="sub-title"><?php the_field('cta_sub_title') ?></p>

            <a class="btn home-cta-phone" href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a>

            <div>
                <a title="Skinner Law Firm Awards" href="#awards-container"><img alt="Skinner Law Firm Awards" src="/wp-content/uploads/2019/11/homepage-hero-view-our-awards-img.png"></a>
                <a title="Skinner Law Firm Reviews" href="/testimonials/"><img alt="Skinner Law Firm Reviews" src="/wp-content/uploads/2019/11/homepage-hero-see-our-reviews-img.png"></a>
            </div>
        </div>
    </section>



    <section class="home-promise">
        <div class="container">
            <div class="promise-container">
                <?php $our_promise_image = get_field('our_promise_image'); ?>
                
                <div class="home-skinner-image">
                    <img src="<?php echo $our_promise_image['url']; ?>" alt="<?php echo $our_promise_image['alt']; ?>" />    
                </div>

                <div class="home-skinner-video">
                    <p class="promise-title">
                        <?php the_field('our_promise_title') ?>
                    </p>

                    <div>
                        <?php the_field('our_promise_text') ?>
                        <a class="btn" href="/about/">Discover Our Firm</a>
                    </div>

                    <div class="home-promise-video">
                        
                        <?php $our_promise_video_image = get_field('our_promise_video_image'); ?>
                        <div class="lightbox-play video" style="background-image: url( <?php echo $our_promise_video_image['url']; ?>);"><a class="bold" href="<?php the_field('our_promise_video') ?>" data-featherlight="iframe" data-featherlight-iframe-width="900" data-featherlight-iframe-height="506" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true" aria-hidden="true" title="Watch video"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-law-firm-section">
        <div class="container">
            <h2>At Skinner Law Firm LLC</h2>

            <div class="home-law-firm">
                <div>
                    <h3><?php the_field('section_one_header') ?></h3>
                    <?php the_field('section_one_text') ?>
                </div>
                <div>
                    <h3><?php the_field('section_two_header') ?></h3>
                    <?php the_field('section_two_text') ?>
                </div>
                <div>
                    <h3><?php the_field('section_three_header') ?></h3>
                    <?php the_field('section_three_text') ?>
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part( 'block', 'testimonials' ); ?>


    <section class="home-criminal-def">
        <div class="container">
            <h2><?php the_field('west_chester_blue_header') ?></h2>
            <p><?php the_field('west_chester_text') ?></p>
            <div class="blue-text"><?php the_field('west_chester_blue_text') ?></div>
        </div>
    </section>

    <section class="home-cases">
        <div class="container">

            <div class="cases-sidebar">
                <h3>Cases We Handle</h3>
                <?php if( have_rows('cases_we_handle_repeater') ): ?>
                    <?php while( have_rows('cases_we_handle_repeater') ): the_row(); 

                        // vars
                        $number = get_sub_field('number');
                        $section_name = get_sub_field('section_name');

                    ?>
                        <div>
                            <a class="showSingle btn" target="<?php echo $number; ?>"><?php echo $section_name; ?></a>
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="cases-info">
                <?php if( have_rows('cases_we_handle_repeater') ): ?>
                    <?php while( have_rows('cases_we_handle_repeater') ): the_row(); 

                        // vars
                        $number = get_sub_field('number');
                        $section_name = get_sub_field('section_name');
                        $section_text = get_sub_field('section_text');
                        $section_link = get_sub_field('section_link');
                        $section_link_url = $section_link['url'];
                        $section_link_title = $section_link['title'];

                    ?>
                        <div id="div<?php echo $number; ?>" class="targetDiv">
                            <h4 class="section-name-header"><?php echo $section_name; ?></h4>
                            <?php echo $section_text; ?>
                            <a class="btn" title="<?php echo $section_link_title ?>" href="<?php echo esc_url($section_link_url); ?>"><?php echo $section_link_title ?></a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>


    </section>


    <section class="home-crime-accused">
        <div class="container">
            <div class="accused-top">
                <h2>Have You Been Accused of a Crime?</h2>
                <?php the_field('accused_text') ?>
            </div>

            <div class="accused-accordions">
                <div class="accused-options">
                    <p target="20" class="accused-para active-accused">Next Steps</p>
                    <p target="21" class="accused-para">Common Legal Terms</p>
                </div>
            </div>


            <div id="div20" class="next-steps-container accused-container-show">
                <div class="accordions">

                    <?php if( have_rows('next_steps') ): ?>

                        <?php while( have_rows('next_steps') ): the_row(); 

                            // vars
                            $next_step_header = get_sub_field('next_step_header');
                            $next_step_text = get_sub_field('next_step_text');
                            $next_step_link = get_sub_field('next_step_link');

                            ?>
                            <div class="acc-container">
                                <div class="accordions_title"><h4><?php echo $next_step_header ?></h4><span></span></div>
                                <div class="accordions_content">
                                    <?php echo $next_step_text ?>

                                    <?php $post_object = get_sub_field('next_step_link'); ?>
                                    <?php if( $post_object ): ?>
                                        <?php // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        ?>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>


            <div id="div21" class="common-legal-container accused-container-show">
                <div class="accordions">

                    <?php if( have_rows('common_legal_terms') ): ?>

                        <?php while( have_rows('common_legal_terms') ): the_row(); 

                            // vars
                            $common_legal_terms_header = get_sub_field('common_legal_terms_header');
                            $common_legal_terms_text = get_sub_field('common_legal_terms_text');
                            $common_legal_terms_link = get_sub_field('common_legal_terms_link');

                            ?>
                            <div class="acc-container">
                                <div class="accordions_title"><h4><?php echo $common_legal_terms_header ?></h4><span></span></div>
                                <div class="accordions_content">
                                    <?php echo $common_legal_terms_text ?>


                                    <?php $post_object = get_sub_field('common_legal_terms_link'); ?>
                                    <?php if( $post_object ): ?>
                                        <?php // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        ?>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>

                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>


    <section class="home-skinner-side-container">
        <section class="home-skinner-side">
            <div class="container">
                <h3><?php the_field('home_skinner_side_header') ?></h3>
                <?php the_field('home_skinner_side_text') ?>
                <?php
                    $home_skinner_side_link = get_field('home_skinner_side_link');
                    $home_skinner_side_link_url = $home_skinner_side_link['url'];
                    $home_skinner_side_link_title = $home_skinner_side_link['title'];
                ?>
                <a class="btn" title="<?php echo $home_skinner_side_link_title ?>" href="<?php echo esc_url($home_skinner_side_link_url); ?>"><?php echo $home_skinner_side_link_title ?></a>
            </div>
        </section>
    </section>


    <?php get_template_part( 'block', 'home-results' ); ?>


    <?php get_template_part( 'block', 'awards' ); ?>


</div><!-- #front-page -->




<?php get_footer();?>