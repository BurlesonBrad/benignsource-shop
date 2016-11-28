<?php
/**
 * BenignSource shop functions and definitions
 *
 * @package BenignSource Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'benignsourceshop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function benignsourceshop_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on benignsource shop, use a find and replace
	 * to change 'benignsource-shop' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'benignsource-shop', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    
    add_theme_support( 'woocommerce' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    
    add_image_size('benignsourceprod-cat-size', 562, 492, true);
    
    add_image_size('benignsourceservice-thumbnail', 380, 252, true);
    
    add_image_size('benignsourceblog-big-thumbnail', 760, 300, true);

    add_image_size('benignsourceslider', 1350, 570, true);
    
    
/**
* Registers an editor stylesheet for the theme.
*/
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
	
	
/**
 * Enqueue scripts and styles.
*/
function benignsource_shop_scripts() {

	$font_args = array(
		'family' => 'Open+Sans:400,600,700,300|Oswald:400,700,300|Dosis:400,300,500,600,700|Lato:300,400,700,900',
	);

	wp_enqueue_style('benignsource-shop-google-fonts', add_query_arg($font_args, "//fonts.googleapis.com/css"));

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
	
	

	wp_enqueue_style( 'benignsource-shop-style', get_stylesheet_uri() );

	wp_enqueue_style( 'benignsource-shop-minify-style', get_template_directory_uri() . '/css/responsive.css');		
	
	wp_enqueue_script( 'benignsource-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), '1.5.0', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js',array(),'1.1.2',true);

	

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'benignsource-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'benignsource_shop_scripts' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'benignsource-shop' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'benignsourceshop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'benignsourceshop_setup' );

/**
 * BenignSource Shop Admin Enqueue Js
*/
function benignsourceshop_wp_admin_section() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/inc/css/admin.css' );

    if (function_exists('wp_enqueue_media'))
        wp_enqueue_media();
    wp_enqueue_script( 'benignsource-shop-admin', get_template_directory_uri() . '/inc/js/admin.js', array( 'jquery' ), '20130508', true );
    wp_localize_script('benignsource-shop-admin', 'benignsource_shop_l10n', array(
        'upload' => __('Upload', 'benignsource-shop'),
        'remove' => __('Remove', 'benignsource-shop')
    ));
    
}
add_action( 'admin_enqueue_scripts', 'benignsourceshop_wp_admin_section' );


/**
 * Load Require init file.
*/
require $benignsource_shop_file_directory_init_file_path = trailingslashit( get_template_directory() ).'inc/init.php';

function benignsource_shop_add_upsell() {
	add_theme_page(
		'administrator',
		'benignsource_shop_display_upsell'
	);
}
add_action( 'admin_menu', 'benignsource_shop_add_upsell', 11 );

function benignsource_shop_display_upsell() {
$directory_uri = get_template_directory_uri(); ?>
<div class="wrap">
<div class="theme-browser rendered">
<div class="themes">
<?php
				$themes = benignsourceshop_get_themes( $request );
				$active_theme = wp_get_theme()->get( 'Name' );
				$counter = 1;
				// For currently active theme.
				foreach ( $themes->themes as $theme ) {
					if( $active_theme == $theme->name ) {?>

						<div id="<?php echo $theme->slug; ?>" class="theme active">
							<div class="theme-screenshot">
								<img src="<?php echo $theme->screenshot_url ?>"/>
							</div>
							<h3 class="theme-name" id="benignsource-parallax-name"><strong><?php _e('Active','benignsource-shop'); ?></strong>: <?php echo $theme->name; ?></h3>
							<div class="theme-actions">
								<a class="button button-secondary activate" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php _e('Customize','benignsource-shop'); ?></a>
							</div>
						</div>
					<?php
					$counter++;
					break;
					}
				}

				// For all other themes.
				foreach ( $themes->themes as $theme ) {
					if( $active_theme != $theme->name ) {
						// Set the argument array with author name.
						$args = array(
							'slug' => $theme->slug,
						);
						// Set the $request array.
						$request = array(
							'body' => array(
								'action'  => 'theme_information',
								'request' => serialize( (object)$args )
							)
						);
						$theme_details = benignsourceshop_get_themes( $request );
					?>
						<div id="<?php echo $theme->slug; ?>" class="theme">
							<div class="theme-screenshot">
								<img src="<?php echo $theme->screenshot_url ?>"/>
							</div>

							<h3 class="theme-name"><?php echo $theme->name; ?></h3>

							<div class="theme-actions">
								<?php if( wp_get_theme( $theme->slug )->exists() ) { ?>
									<!-- Show the tick image notifying the theme is already installed. -->
									<img data-toggle="tooltip" title="<?php _e( 'Already installed', 'benignsource-shop' ); ?>" data-placement="bottom" class="theme-exists" src="<?php echo $directory_uri ?>/inc/images/right.png"/>
									<!-- Activate Button -->
									<a  class="button button-secondary activate"
										href="<?php echo wp_nonce_url( admin_url( 'themes.php?action=activate&amp;stylesheet=' . urlencode( $theme->slug ) ), 'switch-theme_' . $theme->slug );?>" ><?php _e('Activate','benignsource-shop') ?></a>
								<?php }else {
									// Set the install url for the theme.
									$install_url = add_query_arg( array(
											'action' => 'install-theme',
											'theme'  => $theme->slug,
										), self_admin_url( 'update.php' ) );
								?>
									<!-- Install Button -->
									<a data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Downloaded ' . number_format( $theme_details->downloaded ) . ' times'; ?>" class="button button-secondary activate" href="<?php echo esc_url( wp_nonce_url( $install_url, 'install-theme_' . $theme->slug ) ); ?>" ><?php _e( 'Install Now', 'benignsource-shop' ); ?></a>
								<?php } ?>

								<a class="button button-primary load-customize hide-if-no-customize" target="_blank" href="<?php echo $theme->preview_url; ?>"><?php _e( 'Live Preview', 'benignsource-shop' ); ?></a>
							</div>
						</div>
						<?php
					}
				}?>
				</div>
			</div>
		</div>
	<?php
}
