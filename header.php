<?php
/**
 * @package BenignSource Shop
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="mastheads" class="site-header headertwo" role="banner">
<div class="before-top-header">
<div class="ak-container clearfix">
<?php if ( benignsource_shop_before_top_header_enabled() ): ?>      
<?php endif; ?>                
</div></div>
<div class="top-header clearfix">
<div class="ak-container clearfix">
<div id="site-branding" class="clearfix">
<?php benignsource_shop_admin_header_image() ?></div><!-- .site-branding -->
<div class="headertwo-wrap"><!-- Cart Link -->
<?php
if (is_woocommerce_activated()){
echo '<div class="view-cart">'; 
echo benignsource_shop_cart_link();
echo '</div>';
}?>
<?php
if (function_exists('YITH_WCWL')) {
$wishlist_url = YITH_WCWL()->get_wishlist_url();
?><a class="quick-wishlist" href="<?php echo $wishlist_url; ?>" title="Wishlist"><i class="fa fa-heart"></i>
<?php echo "(" . yith_wcwl_count_products() . ")"; ?></a>
<?php
}?>
<div class="login-woocommerce">
<?php
if (is_user_logged_in()) {
global $current_user;
wp_get_current_user();?>
<a href="<?php echo wp_logout_url( home_url() ); ?>" class="logout">
<?php _e(' Logout', 'benignsource-shop'); ?></a>
<?php
} else {
?><a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="account">
<?php _e('Login', 'benignsource-shop'); ?></a>
<?php } ?></div>
<!-- if enabled from customizer -->
<?php if (!get_theme_mod('hide_header_product_search')) { ?>
<div class="search-form">
<?php get_search_form(); ?>
</div><?php } ?>
</div></div></div>
<section class="home_navigation">
<div class="inner_home">
<div class="ak-container clearfix">
<div class="right-header-main clearfix">
<div class="right-header clearfix">
<!-- if enabled from customizer -->
<div id="toggle">
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
</div>
<div class="clearfix"></div>
<div id="menu">
<?php
if (is_page('checkout') && get_theme_mod('hide_navigation_checkout')) {
} else {
?>
<nav id="site-navigation" class="main-navigation" role="navigation">
<a class="menu-toggle"><?php _e('Menu', 'benignsource-shop'); ?></a>
<?php
wp_nav_menu(array(
'theme_location' => 'primary',
'container_class' => 'shop-menu',
'fallback_cb' => 'benignsource_shop_fallback_menu',
));?>
</nav><!-- #site-navigation -->
<?php } ?>
<?php
if (is_user_logged_in()) {
global $current_user;
wp_get_current_user();?>
<div class="welcome-user">
<span class="line"><span class="avatar"><?php echo get_avatar( $id_or_email, $size = 40, $default, $alt, $args ); ?></span></span>
<span class="line">|</span>
<?php _e('Welcome', 'benignsource-shop'); ?>
<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="my-account">
<span class="user-name"><?php echo $current_user->display_name; ?></span></a>
<?php _e('!', 'benignsource-shop'); ?></div>
<?php } ?></div></div> <!-- right-header -->
</div> <!-- right-header-main -->
</div></div></section><!--Home Navigation-->
</header><!-- #masthead -->
<div id="content" class="site-content">