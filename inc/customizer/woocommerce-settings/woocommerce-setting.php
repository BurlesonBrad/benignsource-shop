<?php

function benignsource_woocommerce_setting($wp_customize){
    $wp_customize->add_panel(
                            'woocommerce_setting',
                            array(
                                    'priority'        =>      '30',
                                    'capability' => 'edit_theme_options',
                            	    'theme_supports' => '',
                            	    'title' => __( 'Woocommerce Setting', 'benignsource-shop' )
                                  )
                            );
    
    $wp_customize->add_section(
                                'woocommerce_setting',
                                array(
                                      'title'           =>      __('Woocommerce Setting', 'benignsource-shop'),
                                      'priority'        =>      '2',
                                      'panel' => 'woocommerce_setting', )
                                );
                                
    $wp_customize->add_setting(
                                'custom_placeholder',
                                array(
                                        'default'       =>      '',
                                        'sanitize_callback' => 'esc_url_raw'
                                      )
                               );
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
                                'custom_placeholder',
                                array(
                                        'section'       =>      'woocommerce_setting',
                                        'label'         =>      __('Custom Placeholder', 'benignsource-shop'),
                                        'type'          =>      'image',
                                        'description'   => 'Upload a custom placeholder to be displayed when there is no product image.',
                                        )
                                ));

    $wp_customize->add_setting(
                                'hide_header_product_search',
                                array(
                                        'default'       =>      '0',
                                        'sanitize_callback' => 'benignsource_shop_integer_sanitize'
                                      )
                               );
    $wp_customize->add_control(new BenignSource_shop_WP_Customize_Switch_Control_YesNo(
                                $wp_customize,
                                'hide_header_product_search',
                                array(
                                        'section'       =>      'woocommerce_setting',
                                        'label'         =>      __('Hide Header Product Search', 'benignsource-shop'),
                                        'type'          =>      'switch_yesno',
                                        'output'        =>      array('Yes', 'No')
                                      ))
                              );
}
add_action('customize_register', 'benignsource_woocommerce_setting');?>