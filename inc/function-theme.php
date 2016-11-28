<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function benignsource_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'benignsource-shop' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'benignsource-shop' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'benignsource-shop' ),
		'id'            => 'shop',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s '.benignsource_count_widgets( 'shop' ).'">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );

	register_sidebar( array(
		'name'          => __( 'Header Call To Box', 'benignsource-shop' ),
		'id'            => 'header-callto-action',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s '.benignsource_count_widgets( 'header-callto' ).'">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Promo Widget 1', 'benignsource-shop' ),
		'id'            => 'promo-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget widget %2$s '.benignsource_count_widgets( 'promo-widget-1' ).'">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Product Listing Widget 1', 'benignsource-shop' ),
		'id'            => 'product-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="title-bg"><h2 class="prod-title">',
		'after_title'   => '</h2></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Promo Widget 2', 'benignsource-shop' ),
		'id'            => 'promo-widget-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Product Listing Widget 2', 'benignsource-shop' ),
		'id'            => 'product-widget-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="title-bg"><h2 class="prod-title">',
		'after_title'   => '</h2></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Video Call to Action', 'benignsource-shop' ),
		'id'            => 'call-video',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Product Listing Widget 3', 'benignsource-shop' ),
		'id'            => 'product-widget-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Promo Widget 3', 'benignsource-shop' ),
		'id'            => 'promo-widget-3',
		'description'   => 'You can use widget BS: Icon text block which is what it is designed that it will horizontally allign with 3 row',
		'before_widget' => '<aside id="%1$s" class="widget %2$s '.benignsource_count_widgets( 'promo-widget-3' ).'">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Body Area Top', 'benignsource-shop' ),
		'id'            => 'body-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Body Area Bottom', 'benignsource-shop' ),
		'id'            => 'body-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area 1', 'benignsource-shop' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area 2', 'benignsource-shop' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'benignsource_shop_widgets_init' );

?>
<?php
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

if( is_woocommerce_activated() ){

	if ( ! function_exists( 'benignsource_shop_cart_link' ) ) {
		function benignsource_shop_cart_link() { ?>			
				<a class="cart-contents wcmenucart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'benignsource-shop' ); ?>">
					<i class="fa fa-shopping-cart"></i> [ <?php echo wp_kses_data( sprintf(  WC()->cart->get_cart_contents_count() ) ); ?> / <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> ]
				</a>
			<?php
		}
	}

if ( ! function_exists( 'benignsource_shop_cart_link_fragment' ) ) {
function benignsource_shop_cart_link_fragment( $fragments ) {
global $woocommerce;
ob_start();
benignsource_shop_cart_link();
$fragments['a.cart-contents'] = ob_get_clean();
return $fragments;
		}
	}
	add_filter( 'add_to_cart_fragments', 'benignsource_shop_cart_link_fragment' );
	
}
function benignsource_header_scripts(){
$page_background_option = get_theme_mod('benignsource_background_type');
$show_slider = get_theme_mod('show_slider');
echo "<style>";
echo "html body{";

			if($page_background_option == 'image'):
				echo 'background-color:transparent !important;';
				$background = get_theme_mod('background_image');
			elseif($page_background_option == 'color'): 
				echo 'background:'.esc_attr(get_theme_mod('background_color'));
			elseif($page_background_option == 'pattern'):
				echo 'background-color:transparent !important;';
				echo 'background:url('.get_template_directory_uri().'/inc/images/patterns/'.esc_attr(get_theme_mod("benignsource_background_image_pattern")).'.png)';
			else:
				echo 'background:none;';
			endif;

		echo "}";
if($show_slider == '0'):
echo '#masthead{margin-bottom:40px}';
endif;
if(get_theme_mod('hide_header_cart_link')):
echo ".ap-shop-cart{display:none;}";
endif;
echo "</style>";
}
add_action('wp_head', 'benignsource_header_scripts');

if ( ! function_exists( 'benignsource_footer_count' ) ) {
	function benignsource_footer_count(){
		$count = 0;
		if(is_active_sidebar('footer-1'))
			$count++;

		if(is_active_sidebar('footer-2'))
			$count++;

		if(is_active_sidebar('body-2'))
			$count++;

		if(is_active_sidebar('body-1'))
			$count++;

		return $count;
	}
}

function benignsource_count_widgets( $sidebar_id ) {
	global $_wp_sidebars_widgets;
	if ( empty( $_wp_sidebars_widgets ) ) :
		$_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
	endif;		
	$sidebars_widgets_count = $_wp_sidebars_widgets;		
	if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
		$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
	$widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
	return $widget_classes;
	endif;
}
	/**
	 * Output the WooCommerce Breadcrumb
	 */
function woocommerce_breadcrumb( $args = array() ) {
		$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '&nbsp;',
			'wrap_before' => '<div class="woocommerce-breadcrumb benignsource-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</div>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb', 'benignsource-shop' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();
		if ( $args['home'] ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}
		$args['breadcrumb'] = $breadcrumbs->generate();
		wc_get_template( 'global/breadcrumb.php', $args );
	}


function benignsource_breadcrumbs() {
	global $post;
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '';    
    $home = __('Home', 'benignsource-shop'); // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    $homeLink = home_url();

    if (is_home() || is_front_page()) {

    	if ($showOnHome == 1)
    		echo '<div id="benignsource-breadcrumb"><a href="' . $homeLink . '">' . $home . '</a></div></div>';
    } else {

    	echo '<div id="benignsource-breadcrumb"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    	if (is_category()) {
    		$thisCat = get_category(get_query_var('cat'), false);
    		if ($thisCat->parent != 0)
    			echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
    		echo $before . __('Archive by category','benignsource-shop').' "' . single_cat_title('', false) . '"' . $after;
    	} elseif (is_search()) {
    		echo $before . __('Search results for','benignsource-shop'). '"' . get_search_query() . '"' . $after;
    	} elseif (is_day()) {
    		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
    		echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
    		echo $before . get_the_time('d') . $after;
    	} elseif (is_month()) {
    		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
    		echo $before . get_the_time('F') . $after;
    	} elseif (is_year()) {
    		echo $before . get_the_time('Y') . $after;
    	} elseif (is_single() && !is_attachment()) {
    		if (get_post_type() != 'post') {
    			$post_type = get_post_type_object(get_post_type());
    			$slug = $post_type->rewrite;
    			echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
    			if ($showCurrent == 1)
    				echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    		} else {
    			$cat = get_the_category();
    			$cat = $cat[0];
    			$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
    			if ($showCurrent == 0)
    				$cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
    			echo $cats;
    			if ($showCurrent == 1)
    				echo $before . get_the_title() . $after;
    		}
    	} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
    		$post_type = get_post_type_object(get_post_type());
    		echo $before . $post_type->labels->singular_name . $after;
    	} elseif (is_attachment()) {
    		$parent = get_post($post->post_parent);
    		$cat = get_the_category($parent->ID);
    		$cat = $cat[0];
    		echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
    		echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
    		if ($showCurrent == 1)
    			echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    	} elseif (is_page() && !$post->post_parent) {
    		if ($showCurrent == 1)
    			echo $before . get_the_title() . $after;
    	} elseif (is_page() && $post->post_parent) {
    		$parent_id = $post->post_parent;
    		$breadcrumbs = array();
    		while ($parent_id) {
    			$page = get_page($parent_id);
    			$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
    			$parent_id = $page->post_parent;
    		}
    		$breadcrumbs = array_reverse($breadcrumbs);
    		for ($i = 0; $i < count($breadcrumbs); $i++) {
    			echo $breadcrumbs[$i];
    			if ($i != count($breadcrumbs) - 1)
    				echo ' ' . $delimiter . ' ';
    		}
    		if ($showCurrent == 1)
    			echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    	} elseif (is_tag()) {
    		echo $before . __('Posts tagged','benignsource-shop').' "' . single_tag_title('', false) . '"' . $after;
    	} elseif (is_author()) {
    		global $author;
    		$userdata = get_userdata($author);
    		echo $before . __('Articles posted by ','benignsource-shop'). $userdata->display_name . $after;
    	} elseif (is_404()) {
    		echo $before . 'Error 404' . $after;
    	}

    	if (get_query_var('paged')) {
    		if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
    			echo ' (';
    				echo __('Page', 'benignsource-shop') . ' ' . get_query_var('paged');
    				if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
    					echo ')';
		}
		echo '</div>';
	}
}

function benignsource_letter_count($content, $limit) {
	$striped_content = strip_tags($content);
	$striped_content = strip_shortcodes($striped_content);
	$limit_content = mb_substr($striped_content, 0 , $limit );

	if($limit_content < $content){
		$limit_content .= "..."; 
	}
	return $limit_content;
}

if( is_woocommerce_activated() ){

	function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
		global $post;
		if ( has_post_thumbnail() ) {
			return get_the_post_thumbnail( $post->ID, $size );
		} elseif ( wc_placeholder_img_src() ) {
			$placeholder = benignsource_woocommerce_placeholder_img_src();
			$alt = get_the_title();
			$placeholder_img = '<img src="'.$placeholder.'" alt="'.$alt.'" />';
			return $placeholder_img;
		}
	}

	function benignsource_woocommerce_placeholder_img_src(){
		$placeholder = "";
		$custom_placeholder = get_theme_mod('custom_placeholder');
		if($custom_placeholder!=''){
			$placeholder = $custom_placeholder;
		}
		else{
			$placeholder = wc_placeholder_img_src();
		}
		return $placeholder;
	}
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
	add_filter( 'wc_product_sku_enabled', '__return_true' );


	/**
	 * Display Related Product Number
	*/
	add_filter( 'woocommerce_output_related_products_args', 'benignsource_shop_related_products_args' );
	function benignsource_shop_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // 3 related products
		return $args;
	}

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );	
	add_action( 'woocommerce_after_single_product_summary', 'benignsource_shop_woocommerce_output_upsells', 15 );
	if ( ! function_exists( 'benignsource_shop_woocommerce_output_upsells' ) ) {
		function benignsource_shop_woocommerce_output_upsells() {
			woocommerce_upsell_display( 2,1 );
		}
	}
}


function benignsource_shop_special_nav_class($classes, $item){
	if($item->title == "Cart"){ 
		$classes[] = "ap-shop-cart";
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'benignsource_shop_special_nav_class' , 10 , 2);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

function benignsource_shop_before_top_header_enabled(){
	if(is_user_logged_in() || get_theme_mod('benignsource_ticker_checkbox')===1){
		return true;
	}
	else{
		return false;
	}
}

if ( ! function_exists( 'benignsource_shop_fallback_menu' ) ) {
	function benignsource_shop_fallback_menu(){
		$args = array(
			'menu_class'  => 'shop-menu',
			'echo'        => true,
		);
		wp_page_menu( $args );
	}
}

/**
 * Load Options Plugin Activation
*/
require $benignsource_shop_plugin_activation_file_path = benignsource_shop_file_directory('inc/theme-activation.php');

function benignsource_shop_register_required_plugins() {
	$plugins = array(
		array(
			'name' => 'Protect BenignSource',
			'slug' => 'protect-benignsource',
			'required' => false,
			),
		array(
			'name' => 'Meta Seo BenignSource',
			'slug' => 'meta-seo-benignsource',
			'required' => false,
			),
		array(
			'name' => 'Real Performance BenignSource',
			'slug' => 'real-performance-benignsource',
			'required' => false,
			),	
		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
			'required' => false,
			),        
		array(
			'name' => 'WooCommerce Grid / List toggle',
			'slug' => 'woocommerce-grid-list-toggle',
			'required' => false,
			),
		array(
			'name' => 'YITH WooCommerce Wishlist',
			'slug' => 'yith-woocommerce-wishlist',
			'required' => false,
			),
		array(
			'name' => 'Email Subscribers',
			'slug' => 'email-subscribers',
			'required' => false,
			)
		);
$config = array(
        'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
        'strings' => array(
        	'page_title' => __('Install Required Plugins', 'benignsource-shop'),
        	'menu_title' => __('Install Plugins', 'benignsource-shop'),
            'installing' => __('Installing Plugin: %s', 'benignsource-shop'), // %s = plugin name.
            'oops' => __('Something went wrong with the plugin API.', 'benignsource-shop'),
            'notice_can_install_required' => _n_noop(
            	'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended' => _n_noop(
            	'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_cannot_install' => _n_noop(
            	'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update' => _n_noop(
            	'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update_maybe' => _n_noop(
            	'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_cannot_update' => _n_noop(
            	'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required' => _n_noop(
            	'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
            	'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate' => _n_noop(
            	'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'benignsource-shop'
            ), // %1$s = plugin name(s).
            'install_link' => _n_noop(
            	'Begin installing plugin', 'Begin installing plugins', 'benignsource-shop'
            	),
            'update_link' => _n_noop(
            	'Begin updating plugin', 'Begin updating plugins', 'benignsource-shop'
            	),
            'activate_link' => _n_noop(
            	'Begin activating plugin', 'Begin activating plugins', 'benignsource-shop'
            	),
            'return' => __('Return to Required Plugins Installer', 'benignsource-shop'),
            'plugin_activated' => __('Plugin activated successfully.', 'benignsource-shop'),
            'activated_successfully' => __('The following plugin was activated successfully:', 'benignsource-shop'),
            'plugin_already_active' => __('No action taken. Plugin %1$s was already active.', 'benignsource-shop'), // %1$s = plugin name(s).
            'plugin_needs_higher_version' => __('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'benignsource-shop'), // %1$s = plugin name(s).
            'complete' => __('All plugins installed and activated successfully. %1$s', 'benignsource-shop'), // %s = dashboard link.
            'contact_admin' => __('Please contact the administrator of this site for help.', 'benignsource-shop'),
            'nag_type' => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
            )
);
tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'benignsource_shop_register_required_plugins');

function benignsource_shop_custom_css(){
$benignsource_shop_css = get_theme_mod('benignsource_shop_css'); ?>
<style type="text/css">
<?php echo wp_filter_nohtml_kses($benignsource_shop_css); ?>
</style>
<?php
}
add_action('wp_head','benignsource_shop_custom_css');?>