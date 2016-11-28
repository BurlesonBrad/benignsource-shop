<?php

  function benignsource_shop_sanitize_text( $input ) {
      return wp_kses_post( force_balance_tags( $input ) );
  }
  
  function benignsource_shop_radio_sanitize_webpagelayout($input) {
    $valid_keys = array(
       'boxed' => __('Boxed', 'benignsource-shop'),
       'fullwidth' => __('Full Width', 'benignsource-shop')
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }

  function benignsource_shop_radio_sanitize_archive_view($input) {
    $valid_keys = array(
       'list' => __('List', 'benignsource-shop'),
       'grid' => __('Grid', 'benignsource-shop')
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }

  function benignsource_shop_blog_layout($input) {
    $valid_keys = array( 
              		'blog_layout1' => __('Blog Image Large', 'benignsource-shop'),
              		'blog_layout2' => __('Blog Image Medium', 'benignsource-shop'),
                    'blog_layout3' => __('Blog Image Medium Alternate', 'benignsource-shop'),
              		'blog_layout4' => __('Blog Full Content', 'benignsource-shop'),
              		);
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }

  function benignsource_shop_bkg_type($input) {
    $valid_keys = array(
      'color' => __('Color', 'benignsource-shop'),
      'image' => __('Image', 'benignsource-shop'),
      'pattern' => __('Pattern', 'benignsource-shop')
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }

  function benignsource_shop_bkg_pattern($input) {
      $imagepath =  get_template_directory_uri() . '/inc/images/';
      $valid_keys = array( 
              		'pattern1' => $imagepath.'patterns/80X80/pattern1.png',  
              		'pattern2' =>  $imagepath.'patterns/80X80/pattern2.png', 
              		'pattern3' =>  $imagepath.'patterns/80X80/pattern3.png', 
              		'pattern4' => $imagepath.'patterns/80X80/pattern4.png', 
              		'pattern5' =>  $imagepath.'patterns/80X80/pattern5.png',  
             		'pattern6' => $imagepath.'patterns/80X80/pattern6.png', 
              		);
        if ( array_key_exists( $input, $valid_keys ) ) {
           return $input;
        } else {
           return '';
        }
  }
   
  function benignsource_shop_page_layouts($input) {
    $imagepath =  get_template_directory_uri() . '/inc/images/';
    $valid_keys = array(
      'left-sidebar' => $imagepath.'left-sidebar.png',  
      'right-sidebar' => $imagepath.'right-sidebar.png', 
       'both-sidebar' => $imagepath.'both-sidebar.png',
      'no-sidebar' => $imagepath.'no-sidebar.png',
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }
   
  function benignsource_shop_slider_transition_sanitize($input) {
    $valid_keys = array(
      'true' => __('Fade', 'benignsource-shop'),
      'false' => __('Slide', 'benignsource-shop'),
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }

 

  function benignsource_shop_radio_sanitize_widget_layout($input) {
    $valid_keys = array(
      'title_style_one' => __('Widget Title Style One', 'benignsource-shop'),
      'title_style_two' => __('Widget Title Style Two', 'benignsource-shop')  
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  } 
      
  function benignsource_shop_radio_sanitize_enabledisable($input) {
    $valid_keys = array(
      'enable'=>__('Enable', 'benignsource-shop'),
      'disable'=>__('Disable', 'benignsource-shop')
    );
    if ( array_key_exists( $input, $valid_keys ) ) {
       return $input;
    } else {
       return '';
    }
  }
   
  function benignsource_shop_radio_sanitize_yesno($input) {
    $valid_keys = array(
      'yes'=>__('Yes', 'benignsource-shop'),
      'no'=>__('No', 'benignsource-shop')
      );
    if ( array_key_exists( $input, $valid_keys ) ) {
     return $input;
    } else {
     return '';
    }
  }
   
  function benignsource_shop_checkbox_sanitize($input) {
    if ( $input == 1 ) {
       return 1;
    } else {
       return '';
    }
  }
    
  function benignsource_shop_integer_sanitize($input){
      return intval( $input );
  }