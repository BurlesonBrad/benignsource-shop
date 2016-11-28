<?php
/**
 * Main include functions ( to support child theme )
 * @since BenignSource Shop 1.0
 *
 */
if( !function_exists('benignsource_shop_file_directory') ){

    function benignsource_shop_file_directory( $file_path ){
        if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ) {
            return trailingslashit( get_stylesheet_directory() ) . $file_path;
        }
        else{
            return trailingslashit( get_template_directory() ) . $file_path;
        }
    }
}

/**
 * Implement the Custom Functions.
*/
require $benignsource_shop_custom_functions_file_path = benignsource_shop_file_directory('inc/function-theme.php');

/**
 * Custom template tags for this theme.
*/
require $benignsource_shop_template_tag_file_path = benignsource_shop_file_directory('inc/core/template-tags.php');

/**
 * Custom functions that act independently of the theme templates.
*/
require $benignsource_shop_extras_file_path = benignsource_shop_file_directory('inc/core/extras.php');

/**
 * Load Jetpack compatibility file.
*/
require $benignsource_shop_jetpack_file_path = benignsource_shop_file_directory('inc/core/jetpack.php');

/**
 * Load General Setting
*/
require $benignsource_shop_custom_header_file_path = benignsource_shop_file_directory('inc/core/custom-header.php');

/**
 * Implement the Custom Metabox feature.
*/
require $benignsource_shop_custom_metabox_file_path = benignsource_shop_file_directory('inc/metabox.php');

/**
 * Customizer additions.
*/
require $benignsource_shop_customizer_file_path = benignsource_shop_file_directory('inc/customizer/customizer.php');

/**
 * Load Custom Widget
*/
require $benignsource_shop_widget_file_path = benignsource_shop_file_directory('inc/widgets/benignsource-widget.php');