<?php
/**
 * Awards Styles
 * @package Postali Parent
 * @author Postali LLC
 */
?>


<section class="awards-banner" id="awards-container">
    <div class="container">
        
        <h2>our awards & memberships</h2>

        <div class="grid-awards" ">
            <div class="prev-arrow-awards"><span class="icon-Margolis_chevronLeft"></span></div>

            <?php if( have_rows('awards', 'options') ): ?>
                <ul class="section-awards slider-nav">
                    <?php while( have_rows('awards', 'options') ):
                        the_row();
                        $image = get_sub_field('badge_image');
                    ?>

                    <li class="award">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </li>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>


            <div class="next-arrow-awards"><span class="icon-Margolis_chevronRight"></span></div> 
        </div>


            <?php if( have_rows('awards', 'options') ): ?>
                <ul class="section-awards slider-for">
                    <?php while( have_rows('awards', 'options') ):
                        the_row();
                        $image = get_sub_field('badge_image');
                        $desc = get_sub_field('description');
                    ?>

                    <li class="award">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php echo $desc; ?>
                    </li>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>


    </div>
</section>