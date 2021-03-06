<?php
/**
 * The template for displaying site footer
 *
 * @package marinate
 */
?>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="col-md-12 no-padding a">
                
				<?php get_sidebar('footer'); ?>
                
                <div class="site-info">
                    <div class="container">

						<?php
                            $socialheader = get_theme_mod('marinate_social_ed_footer', '0');
                            $fb = get_theme_mod('marinate_button_url_fb');
                            $tw = get_theme_mod('marinate_button_url_tw');
                            $pin = get_theme_mod('marinate_button_url_pin');
                            $insta = get_theme_mod('marinate_button_url_ins');
                            $gplus = get_theme_mod('marinate_button_url_gp');
                            if ($socialheader) {
                            ?>
                            <ul class="social-networks">
                                <?php if ($fb) { ?><li><a class="facebook" href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                <?php if ($tw) { ?><li><a class="twitter" href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                <?php if ($pin) { ?><li><a class="pinterest" href="<?php echo esc_url($pin); ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
                                <?php if ($insta) { ?><li><a class="instagram" href="<?php echo esc_url($insta); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
                                <?php if ($gplus) { ?><li><a class="google-plus" href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                            </ul>
                            <?php
                            }
                        ?>
<div style = "text-transform: none;">
	
						<p>Magellan Capital is a business consulting and advisory firm serving growth stage companies.  Magellan's core consulting service is to advise growing companies on the ways and sources available to them to raise needed capital.  Some companies hire Magellan to assemble and coordinate the professionals needed to conduct a successful securities offering.</p>
<p>					
Magellan Capital Partners is not an investment advisor or broker-dealer and does not provide services requiring a securities license.  Magellan does not solicit investments nor act as a placement agent, broker dealer, or investment advisor.  </p>
						</div>
<?php //do_action ('marinate_footer'); ?>

                    </div>
                </div>

            </div>
        </footer>
        </div>
    </div>
<?php get_sidebar('offcanvas'); ?>
<?php wp_footer(); ?>
</body>
</html>
