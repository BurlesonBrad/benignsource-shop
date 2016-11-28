<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BenignSource Shop
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
<?php if ( is_active_sidebar( 'footer-1' ) ||  is_active_sidebar( 'footer-2' )) : ?>
<div id="top-footer" class="clearfix columns-<?php echo benignsource_footer_count(); ?>">
<div class="ak-container">
<div class="top-footer-wrap clearfix">
<?php if( is_active_sidebar('footer-1') ): ?>
<div class="top-footer-block">
<?php dynamic_sidebar('footer-1') ?></div>
<?php endif; ?>
<?php if( is_active_sidebar('footer-2') ): ?>
<div class="top-footer-block">
<?php dynamic_sidebar('footer-2') ?></div>
<?php endif; ?></div></div></div> <!-- top footer end -->
<?php endif; ?>
<div class="footermenu">
<nav id="menufoot" class="footer-navigation">
<?php
wp_nav_menu(array(
'theme_location' => 'primary',
'container_class' => 'shop-menu',
'fallback_cb' => 'benignsource_shop_fallback_menu',
));?>
</nav></div><div class="footer-bottom">

<div class="ak-container">
<div class="seal-logo-wrap">
<?php
$payment_one = get_theme_mod('pmlogoone_image');
$payment_two = get_theme_mod('pmlogotwo_image');
$payment_three = get_theme_mod('pmlogothree_image');
$payment_four = get_theme_mod('pmlogofour_image');
$ssl_seal = get_theme_mod('otherssl_image');
$other_seal_one = get_theme_mod('otherone_image');
$other_seal_two = get_theme_mod('othertwo_image');?>
<?php if(!empty($payment_one)) : ?>
<img id="partner_logo1" class="partner-logos" src="<?php echo esc_url($payment_one)?>" alt="<?php _e('Logo One', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($payment_two)) : ?>
<img id="partner_logo2" class="partner-logos" src="<?php echo  esc_url($payment_two)?>" alt="<?php _e('Logo Two', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($payment_three)) : ?>
<img id="partner_logo3" class="partner-logos" src="<?php echo  esc_url($payment_three)?>" alt="<?php _e('Logo Three', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($payment_four)) : ?>
<img id="partner_logo4" class="partner-logos" src="<?php echo  esc_url($payment_four)?>" alt="<?php _e('Logo Four', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($ssl_seal)) : ?>
<img id="ssl_seal" class="partner-logos" src="<?php echo  esc_url($ssl_seal)?>" alt="<?php _e('SSL Seal', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($other_seal_one)) : ?>
<img id="other_seal1" class="partner-logos" src="<?php echo  esc_url($other_seal_one)?>" alt="<?php _e('Seal One', 'benignsource-shop') ?>" />
<?php endif; ?>
<?php if(!empty($other_seal_two)) : ?>
<img id="other_seal2" class="partner-logos" src="<?php echo  esc_url($other_seal_two)?>" alt="<?php _e('Seal Two', 'benignsource-shop') ?>" />
<?php endif; ?></div>
<div class="site-info">
<?php
$copyright = get_theme_mod('benignsource_shop_copyright');
if(!empty($copyright)) :
echo $copyright;
else : 
printf(__('&copy; %1$s %2$s', 'benignsource-shop'), get_the_time("Y"), get_bloginfo('name'));
endif;?> - <?php printf( __( 'WordPress Theme : %1$s by %2$s', 'benignsource-shop' ), 'BenignSource Shop', '<a href="'.esc_url('http://www.benignsource.com' ).'">BenignSource</a>'  );  ?>
</div><!-- .site-info -->
</div></div>
</footer><!-- #colophon -->
</div><!-- #page -->
<div id="ak-top"><i class="fa fa-reply"></i></div>
<?php wp_footer(); ?>
</body>
</html>