<?php
/**
 * Template Name: Practice Area Landing
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="banner">
	<div class="container">
        <div class="columns">
            <span>
                <p class="small-orange">Staver accident injury lawyers, p.c.</p>
                <div class="spacer-break"></div>
				<h1><?php the_title(); ?></h1>
            </span>
        </div>
    </div>
</section>

<section class="practice-areas">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <?php if( have_rows('practice_areas') ): ?>
                <?php while( have_rows('practice_areas') ): the_row();
                        $practice_name = get_sub_field('practice_area');
                        $practice_link = get_sub_field('practice_area_link');
                        $add_children = get_sub_field('award_description');

                        // Resolve $practice_link to a post ID (handles ID, array/object with ID, or URL)
                        $practice_link_id = 0;
                        if ( is_numeric( $practice_link ) ) {
                            $practice_link_id = (int) $practice_link;
                        } elseif ( is_array( $practice_link ) && ! empty( $practice_link['ID'] ) ) {
                            $practice_link_id = (int) $practice_link['ID'];
                        } elseif ( is_object( $practice_link ) && ! empty( $practice_link->ID ) ) {
                            $practice_link_id = (int) $practice_link->ID;
                        } elseif ( is_string( $practice_link ) && filter_var( $practice_link, FILTER_VALIDATE_URL ) ) {
                            $practice_link_id = url_to_postid( $practice_link );
                        }
                        // optional: debug HTML comment
                        // echo '<!-- practice_link_id: ' . esc_attr( $practice_link_id ) . ' -->';
                    ?>
                    <h2><a href="<?php echo$practice_link; ?>"><?php echo$practice_name; ?></a></h2>
                    <?php if( $add_children = 'automatic' ) { ?>

                    <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => $practice_link_id,
                        ) );
                    ?>

                    <?php } else { ?>
                    
                    <?php } ?>
                    <hr>
                    <span class="spacer-30"></span>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('block', 'footer-contact');?>

<?php get_footer(); ?>