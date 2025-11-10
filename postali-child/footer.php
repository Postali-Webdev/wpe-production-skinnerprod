<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

<section>
    <div class="container">
        <div class="top-footer">
            <div class="footer-left">
                <p id="footer-header">Your Story Just Hasn't Been Told</p>
                <p id="footer-sub-header">Call for a Free Consultation</p>
                <p id="top-footer-phone"><a title="Call Skinner Law Firm" href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a></p>
            </div>
            <div class="footer-right">
                <div class="contact-form-footer">
                    <div id="contact-form-footer-container">
                        <p>Get In Touch</p>
                        <?php echo do_shortcode( '[gravityform id="2" title="false"]' ); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="words-contact-footer">
                <div class="footer-nav">
                    <div>
                        <?php
                            $args = array(
                                'container' => false,
                                'theme_location' => 'footer-nav'
                            );
                            wp_nav_menu( $args );
                        ?>
                    </div>	

                    <div class="social-footer">
                        <a title="Facebook" href="<?php the_field('facebook', 'options') ?>" target="_blank" rel="noopener"><span class="icon-footer-icon-facebook-img"><span class="path1"></span><span class="path2"></span></span></a>
                        <a title="LinkedIn" href="<?php the_field('linkedin', 'options') ?>" target="_blank" rel="noopener"><span class="icon-footer-icon-linkedin-img"><span class="path1"></span><span class="path2"></span></span></a>
                        <a title="Twitter" href="<?php the_field('twitter', 'options') ?>" target="_blank" rel="noopener"><span class="icon-footer-icon-twitter-img"><span class="path1"></span><span class="path2"></span></span></a>
                    </div>
                </div>


                <div class="footer-contact">
                    <div>
                        <span class="icon-footer-icon-location-pin-img"></span>
                        <p><a title="Google My Business" href="<?php the_field('driving_directions_link', 'options') ?>" target="_blank"><?php the_field('street_name', 'options') ?> <br><?php the_field('business_city', 'options') ?>, <?php the_field('business_state', 'options') ?> <?php the_field('business_zip_code', 'options') ?></a></p>
                    </div>

                    <div>
                        <span class="icon-footer-icon-phone-img"></span>
                        <p><strong>Phone:</strong> <a href="tel:<?php the_field('phone', 'options') ?>"><?php the_field('phone', 'options') ?></a></p>
                        <p><strong>Fax:</strong> <?php the_field('fax_number', 'options') ?></p>
                    </div>
                    <div>
                        <span class="icon-footer-icon-clock-img"></span>
                        <p><?php the_field('hours', 'options') ?></p>
                    </div>
                    <div class="map">
                        <iframe src="<?php echo get_field('google_map_iframe_embed','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>


                <div class="copyright-footer">
                    <p>Copyright © 2011 – <?php echo date( "Y"); ?> Skinner Law Firm | <a class="sitemap-footer-link" href="/sitemap/">Sitemap</a></p> <a class="btn" title="Law Pay" href="https://secure.lawpay.com/pages/skinnerlawfirm/operating">Law Pay</a>
                </div>


                <div class="small-text-footer">
                    <p><?php the_field('business_description', 'options') ?></p>
                    <?php if(is_page_template('front-page.php')) { ?>
                    <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:30px 0 0;"></a>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="copyright-footer copyright-footer-tablet">
            <p>Copyright © 2011 – <?php echo date( "Y"); ?> Skinner Law Firm | <a class="sitemap-footer-link" href="/sitemap/">Sitemap</a></p> <a class="btn" title="Law Pay" href="https://secure.lawpay.com/pages/skinnerlawfirm/operating">Law Pay</a>
        </div>


        <div class="small-text-footer small-text-footer-tablet">
            <p><?php the_field('business_description', 'options') ?></p>
        </div>

        
    </div>
</section>

</footer>
<script>(function (w,d,s,v,odl){(w[v]=w[v]||{})['odl']=odl;;
var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
j.src='https://intaker.azureedge.net/widget/chat.min.js';
f.parentNode.insertBefore(j,f);
})(window, document, 'script','Intaker', 'skinnerlaw');
</script>

<script type="text/javascript" src="//cdn.callrail.com/companies/682334974/44e21f6a425c81976f91/12/swap.js"></script>
<?php wp_footer(); ?>
</body>
</html>


