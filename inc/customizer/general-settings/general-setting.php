<?php
function benignsource_ticker_setting($wp_customize){
  
  $wp_customize->add_section( 'benignsource_widget_header_layout', array(
      'title'           =>      __('Widget Title Layout Settings', 'benignsource-shop'),
      'priority'        =>      '3',
  ));

  $wp_customize->add_setting( 'benignsource_widget_layout_type', array(
      'default'       =>      'title_style_one',
      'sanitize_callback' => 'benignsource_shop_radio_sanitize_widget_layout'
  ));
                          
  $wp_customize->add_control( 'benignsource_widget_layout_type', array(
      'section'       =>      'benignsource_widget_header_layout',
      'label'         =>      __('Widget Title Layout Type', 'benignsource-shop'),
      'description'   =>  __('Theme have two different widget title layout select layout as you want', 'benignsource-shop'),
      'type'          =>      'radio',
      'choices'       =>      array( 
        'title_style_one' => __('Widget Title Style One', 'benignsource-shop'),
        'title_style_two' => __('Widget Title Style Two', 'benignsource-shop') 
  )));


  $wp_customize->add_panel('general_setting', array(
     'priority'         =>      '2',
     'capability'       =>      'edit_theme_options',
     'theme_supports'   =>      '',
     'title'            =>      __( 'General Setting', 'benignsource-shop' ),
     'description'      =>      __( 'This allows to edit the header', 'benignsource-shop' ),
  ));

    

    

//moving default sections to custom panel
      $wp_customize->get_section('title_tagline')->panel = 'general_setting';
      $wp_customize->get_section('header_image')->panel = 'general_setting';
      $wp_customize->get_section('header_image')->title = __( 'Header Logo','benignsource-shop' );
      $wp_customize->remove_section('nav');
      $wp_customize->get_section( 'colors')->panel = 'general_setting';
      $wp_customize->get_section( 'static_front_page')->panel = 'general_setting';
  
      $wp_customize->add_section('background_image', array(
          'title'           =>      __('Background', 'benignsource-shop'),
          'priority'        =>      '40',
          'panel'           => 'general_setting'
      ));


        $wp_customize->add_setting( 'benignsource_background_type', array(
            'default'       =>      'none',
            'sanitize_callback' => 'benignsource_shop_bkg_type'
        ));

        $wp_customize->add_control( 'benignsource_background_type', array(
          'section'       =>      'background_image',
          'label'         =>      __('Select the Background type', 'benignsource-shop'),
          'description'   =>      __('Select the Background type for your website', 'benignsource-shop'),
          'type'          =>      'select',
          'priority'      =>      '2',
          'choices'       =>      array(
            'color' => __('Color', 'benignsource-shop'),
            'image' => __('Image', 'benignsource-shop'),
            'pattern' => __('Pattern', 'benignsource-shop')),
        ));

      $wp_customize->add_setting( 'benignsource_background_image_pattern', array(
          'default'       =>      '',
          'sanitize_callback' => 'benignsource_shop_bkg_pattern'
      ));

      $imagepath =  get_template_directory_uri() . '/inc/images/';                           
      
      $wp_customize->add_control( new BenignSource_shop_WP_Customize_Radioimage_Control( $wp_customize, 'benignsource_background_image_pattern', array(
        'section'       =>      'background_image',
        'label'         =>      __('Background Pattern', 'benignsource-shop'),
        'type'          =>      'radioimage',
        'choices'       =>      array( 
          'pattern1' => $imagepath.'patterns/80X80/pattern1.png',  
          'pattern2' =>  $imagepath.'patterns/80X80/pattern2.png', 
          'pattern3' =>  $imagepath.'patterns/80X80/pattern3.png', 
          'pattern4' => $imagepath.'patterns/80X80/pattern4.png', 
          'pattern5' =>  $imagepath.'patterns/80X80/pattern5.png',  
          'pattern6' => $imagepath.'patterns/80X80/pattern6.png', 
          ))
      ));            

      $wp_customize->add_section('webpage_layout', array(
         'title'            =>       __('Layout Setting', 'benignsource-shop'),
         'priority'         =>      '110',
         'panel'            =>      'general_setting',
      ));

      $wp_customize->add_setting( 'benignsource_webpage_layout', array(
          'default'       =>  'boxed',
          'sanitize_callback' => 'benignsource_shop_radio_sanitize_webpagelayout'
      ));

      $wp_customize->add_control( 'benignsource_webpage_layout', array(
        'section'       =>      'webpage_layout',
        'label'         =>      __('Website Layout', 'benignsource-shop'),
        'description'   =>      __('Make your website either box layout or full width from click away', 'benignsource-shop'),
        'type'          =>      'radio',
        'setting'       =>      'benignsource_webpage_layout',
        'choices'        =>      array(
          'boxed' => __('Boxed Layout', 'benignsource-shop'),
          'fullwidth' => __('Full Width', 'benignsource-shop')
          )
      ));  

  //Custom css section
      $wp_customize->add_section('benignsource_shop_setting', array(
         'priority'         =>      '115',
          'title' => __('Custom CSS Section', 'benignsource-shop'),
          'panel' => 'general_setting',
      ));

      $wp_customize->add_setting( 'benignsource_shop_css', array(
          'default' => '',
          'capability' => 'edit_theme_options',
          'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));
   
      $wp_customize->add_control('benignsource_shop_css', array(
        'type' => 'textarea',
        'label' => __('Custom CSS', 'benignsource-shop'),
        'section' => 'benignsource_shop_setting',
        'setting' => 'benignsource_shop_css',
        'description' => '',
      ));

  //Copyright section
      $wp_customize->add_section('benignsource_shop_copyright_section', array(
         'priority'         =>      '120',
          'title' => __('Footer Copyright', 'benignsource-shop'),
          'panel' => 'general_setting',
      ));

      $wp_customize->add_setting( 'benignsource_shop_copyright', array(
          'default' => '',
          'capability' => 'edit_theme_options',
          'sanitize_callback' => 'benignsource_shop_sanitize_text',
      ));
 
      $wp_customize->add_control('benignsource_shop_copyright', array(
        'type' => 'textarea',
        'label' => __('Copyright Text', 'benignsource-shop'),
        'section' => 'benignsource_shop_copyright_section',
        'setting' => 'benignsource_shop_copyright',
        'description' => '',
      ));

}
add_action( 'customize_register', 'benignsource_ticker_setting' );