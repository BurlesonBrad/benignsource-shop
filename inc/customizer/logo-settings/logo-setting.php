<?php
function benignsource_pmlogo_setting($wp_customize){
    $wp_customize->add_panel(
        'pmlogo_setting',
        array(
            'priority' => '60',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Payment/Certification Logo Setting', 'benignsource-shop' ),
            'description' => __( 'This allows to edit the Payment Logo', 'benignsource-shop' ),
            )
        );
    
    $wp_customize->add_section(
        'pmlogo_images',
        array(
          'title' => __('Payment Logo Images', 'benignsource-shop'),
          'priority' => '2',
          'panel' => 'pmlogo_setting', )
        );
    
    $wp_customize->add_setting(
        'pmlogoone_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'pmlogoone_image',
        array(
            'section' => 'pmlogo_images',
            'label' => __('Upload Payment Logo 1 Image', 'benignsource-shop'),
            'type' => 'image',
            )
        ));
    
    $wp_customize->add_setting(
        'pmlogotwo_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'pmlogotwo_image',
        array(
            'section' => 'pmlogo_images',
            'label' => __('Upload Payment Logo 2 Image', 'benignsource-shop'),
            'type' => 'image',
            )
        ));
    
    $wp_customize->add_setting(
        'pmlogothree_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'pmlogothree_image',
        array(
            'section' => 'pmlogo_images',
            'label' => __('Upload Payment Logo 3 Image', 'benignsource-shop'),
            'type' => 'image',
            )
        ));
    
    $wp_customize->add_setting(
        'pmlogofour_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'pmlogofour_image',
        array(
            'section' => 'pmlogo_images',
            'label' => __('Upload Payment Logo 4 Image', 'benignsource-shop'), 'type' => 'image',
            )
        ));
    $wp_customize->add_section(
        'other_images',
        array(
          'title' => __('Other Logo Images', 'benignsource-shop'),
          'priority' => '2',
          'panel' => 'pmlogo_setting', )
        );
    
    $wp_customize->add_setting(
        'othersl_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'otherssl_image',
        array(
            'section' => 'other_images',
            'label' => __('Upload SSL Seal Image', 'benignsource-shop'), 'type' => 'image',
            )
        )); 
    $wp_customize->add_setting(
        'otherone_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'otherone_image',
        array(
            'section' => 'other_images',
            'label' => __('Upload Other Seal 2 Image', 'benignsource-shop'), 'type' => 'image',
            )
        ));
    $wp_customize->add_setting(
        'othertwo_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'othertwo_image',
        array(
            'section' => 'other_images',
            'label' => __('Upload Other Seal 2 Image', 'benignsource-shop'), 'type' => 'image',
            )
        ));
/**
 * Custom Themes Info
*/
    $wp_customize->add_section(
        'benignsource_shop_premium_features',
        array(
          'title'  => __('BenignSource Premium', 'benignsource-shop'),
          'priority' =>  1,
    ));

    $wp_customize->add_setting('theme_info_theme',array(
        'default' => '',
        'sanitize_callback' => 'benignsource_shop_sanitize_text',
    ));

    $wp_customize->add_control( new BenignSource_shop_Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
        'label' => __( 'Shop Premium Features' , 'benignsource-shop' ),
        'section' => 'benignsource_shop_premium_features',
    )));

}
add_action('customize_register', 'benignsource_pmlogo_setting');?>