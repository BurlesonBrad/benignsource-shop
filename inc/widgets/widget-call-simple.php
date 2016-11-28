<?php

/**
 * Testimonial post/page widget
 *
 * @package BenignSource Premium
 */
/**
 * Adds benignsource_shop_Testimonial widget.
 */
add_action('widgets_init', 'register_call_simple_widget');

function register_call_simple_widget() {
    register_widget('benignsource_call_simple');
}

if( !class_exists( 'benignsource_call_simple' ) ) :
    class benignsource_call_simple extends WP_Widget {

        /**
         * Register widget with WordPress.
         */
        public function __construct() {
            parent::__construct(
                'benignsource_call_simple', 'BenignSource Call to Action', array(
                'description' => __('A widget that shows Simple Call to Action', 'benignsource-shop')
                    )
            );
        }

        /**
         * Helper function that holds widget fields
         * Array is used in update and form functions
         */
        private function widget_fields() {
            $fields = array(
                'call_simple_title' => array(
                    'benignsource_shop_widgets_name' => 'call_simple_title',
                    'benignsource_shop_widgets_title' => __('Title', 'benignsource-shop'),
                    'benignsource_shop_widgets_field_type' => 'title'
                ),
                'call_simple_phone' => array(
                    'benignsource_shop_widgets_name' => 'call_simple_desc',
                    'benignsource_shop_widgets_title' => __('Description', 'benignsource-shop'),
                    'benignsource_shop_widgets_field_type' => 'textarea',
                    'benignsource_shop_widgets_row' => '4'
                ),
                'call_simple_website' => array(
                    'benignsource_shop_widgets_name' => 'call_simple_btn_text',
                    'benignsource_shop_widgets_title' => __('Button Text', 'benignsource-shop'),
                    'benignsource_shop_widgets_field_type' => 'text',
                ),
                'call_simple_font_awesome' => array(
                    'benignsource_shop_widgets_name' => 'call_simple_font_awsome',
                    'benignsource_shop_widgets_title' => __('Enter Fontawesome Class to show in button', 'benignsource-shop'),
                    'benignsource_shop_widgets_field_type' => 'text',
                ),
                'call_simple_address' => array(
                    'benignsource_shop_widgets_name' => 'call_simple_btn_url',
                    'benignsource_shop_widgets_title' => __('Button Url', 'benignsource-shop'),
                    'benignsource_shop_widgets_field_type' => 'text'
                    
                )
                
            );

            return $fields;
        }

        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance) {
            extract($args);
            if($instance!=null){
                $call_simple_title = $instance['call_simple_title'];
                $call_simple_desc = $instance['call_simple_desc'];
                $call_simple_btn_text = $instance['call_simple_btn_text'];
                $call_simple_btn_url = $instance['call_simple_btn_url'];
                $call_simple_font_class = $instance['call_simple_font_awsome'];
            }
            else
            {
                $call_simple_title = "";
                $call_simple_desc = "";
                $call_simple_btn_text = "";
                $call_simple_btn_url = "";
                $call_simple_font_class = "";
            }
            echo $before_widget; ?>            
<div class="call-banner clearfix">
<div class="banner-text wow fadeInLeft" data-wow-delay="0.5s">
<h1 class="widget-title"><?php echo $call_simple_title;?></h1>                        
<div class="call-desc_simple"><?php echo $call_simple_desc;  ?></div>
</div>
<div class="banner-btn wow fadeInRight" data-wow-delay="0.5s">
<a class="btn" href="<?php echo $call_simple_btn_url; ?>"><i class="fa <?php echo $call_simple_font_class; ?>"></i><?php echo $call_simple_btn_text; ?></a>
</div></div>
<?php 
echo $after_widget;
}

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         */
        public function update($new_instance, $old_instance) {
            $instance = $old_instance;

            $widget_fields = $this->widget_fields();

            // Loop through fields
            foreach ($widget_fields as $widget_field) {

                extract($widget_field);

                // Use helper function to get updated field values
                $instance[$benignsource_shop_widgets_name] = benignsource_shop_widgets_updated_field_value($widget_field, $new_instance[$benignsource_shop_widgets_name]);
            }

            return $instance;
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         */
        public function form($instance) {
            $widget_fields = $this->widget_fields();

            // Loop through fields
            foreach ($widget_fields as $widget_field) {

                // Make array elements available as variables
                extract($widget_field);
                $benignsource_shop_widgets_field_value = !empty($instance[$benignsource_shop_widgets_name]) ? esc_attr($instance[$benignsource_shop_widgets_name]) : '';
                benignsource_shop_widgets_show_widget_field($this, $widget_field, $benignsource_shop_widgets_field_value);
            }
        }
    }
endif;?>
