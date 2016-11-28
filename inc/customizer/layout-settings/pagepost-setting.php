<?php

function benignsource_pagepost_setting($wp_customize){

    $wp_customize->add_section(
        'pagepost_setting',
        array(
          'title'           =>      __('Page/Post Settings', 'benignsource-shop'),
          'description'           =>      __('If not defined from cutom metabox these settings will be applied.', 'benignsource-shop'),
          'priority'        =>      '40',
          )
        );

    
    $wp_customize->add_setting(
        'single_page_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'benignsource_shop_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new BenignSource_shop_WP_Customize_Radioimage_Control(
        $wp_customize,
        'single_page_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Single Page Layout', 'benignsource-shop'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png',
              )
            )
        ));
    $wp_customize->add_setting(
        'single_post_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'benignsource_shop_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new BenignSource_shop_WP_Customize_Radioimage_Control(
        $wp_customize,
        'single_post_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Single Post Layout', 'benignsource-shop'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png', 
              )
            )
        ));
    $wp_customize->add_setting(
        'archive_page_layout',

        array(
            'default'       =>      '',
            'sanitize_callback' => 'benignsource_shop_page_layouts'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control( new BenignSource_shop_WP_Customize_Radioimage_Control(
        $wp_customize,
        'archive_page_layout',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Archive Page Layout', 'benignsource-shop'),
            'type'          =>      'radioimage',
            'choices'       =>      array( 
              'left-sidebar' => $imagepath.'left-sidebar.png',  
              'right-sidebar' => $imagepath.'right-sidebar.png', 
              'both-sidebar' => $imagepath.'both-sidebar.png',
              'no-sidebar' => $imagepath.'no-sidebar.png', 
              )
            )
        ));

    $wp_customize->add_setting(
        'archive_page_view_type',
        
        array(
            'default'       =>      'list',
            'sanitize_callback' => 'benignsource_shop_radio_sanitize_archive_view'
            )
        );
    $imagepath =  get_template_directory_uri() . '/inc/images/';                           
    $wp_customize->add_control(
        'archive_page_view_type',
        array(
            'section'       =>      'pagepost_setting',
            'label'         =>      __('Archive Page Inner View', 'benignsource-shop'),
            'type'          =>      'radio',
            'choices'       =>      array( 
              'list' => __('List', 'benignsource-shop'),
              'grid' => __('Grid', 'benignsource-shop') 
              )
            )
        );
}
add_action('customize_register', 'benignsource_pagepost_setting');?>