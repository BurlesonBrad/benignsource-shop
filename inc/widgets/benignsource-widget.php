<?php
/**
 * BenignSource Premium Custom Widgets
 */

/**
 * Include helper functions that display widget fields in the dashboard
 */
require $benignsource_shop_widget_fields_file_path = benignsource_shop_file_directory('inc/widgets/widget-fields.php');

/**
 * Load Call To Action
 */
require $benignsource_shop_widget_calltoaction_file_path = benignsource_shop_file_directory('inc/widgets/widget-call-simple.php');


/**
 * Load Promo Widget file
 */
require $benignsource_shop_widget_promo_file_path = benignsource_shop_file_directory('inc/widgets/widget-promo.php');

/**
 * Load the WooCommerce Custom Widget file
 */

/**
 * Check if WooCommerce is active
*/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require $benignsource_shop_widget_product2_file_path = benignsource_shop_file_directory('inc/widgets/widget-categorybanner.php');
}

/**
 * Load Call Video
 */
require $benignsource_shop_widget_vidoe_calltoaction_file_path = benignsource_shop_file_directory('inc/widgets/widget-call-video.php');

/**
 * Load Full Promo Widget File
 */
require $benignsource_shop_widget_full_promo_file_path = benignsource_shop_file_directory('inc/widgets/widget-full-promo.php');