<?php
/*
 * @package BenignSource Shop
 */

/*
 * Adds custom classes to the array of body classes.
 */
function benignsource_store_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	$widget_title_style = esc_attr( get_theme_mod( 'benignsource_widget_layout_type' ) );

	if($widget_title_style == 'title_style_two'){
		$classes[] = 'apwidget_title';
	}

	/*
	 * Add Class for WebPage Layout
	*/
	$classes[]= esc_attr( get_theme_mod('benignsource_webpage_layout') );

	return $classes;
}
add_filter( 'body_class', 'benignsource_store_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/*
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function benignsource_store_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}
		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}
		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'benignsource-shop' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'benignsource_store_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 */
function benignsource_store_render_title() {?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
add_action( 'wp_head', 'benignsource_store_render_title' );	
endif;?>