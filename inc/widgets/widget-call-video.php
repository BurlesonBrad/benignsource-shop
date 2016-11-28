<?php

/**
 * Testimonial post/page widget
 *
 * @package BenignSource Premium
 */
/**
 * Adds benignsource_shop_Testimonial widget.
 */
add_action('widgets_init', 'register_call_video_widget');

function register_call_video_widget() {
    register_widget('benignsource_call_video');
}

if( !class_exists( 'benignsource_call_video' ) ) :
class benignsource_call_video extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'benignsource_call_video', 'BenignSource Call Video', array(
            'description' => __('A widget that shows Call to Action with Video', 'benignsource-shop')
                )
        );
    }

    /**
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            'call_video_title' => array(
                'benignsource_shop_widgets_name' => 'call_video_title',
                'benignsource_shop_widgets_title' => __('Title', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'title',
            ),
            'call_video_phone' => array(
                'benignsource_shop_widgets_name' => 'call_video_desc',
                'benignsource_shop_widgets_title' => __('Description', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'textarea',
                'benignsource_shop_widgets_row' => '4'
            ),
            'bg_image' => array(
               'benignsource_shop_widgets_name' => 'benign_shop_image',
               'benignsource_shop_widgets_title' => __('Background Upload Image', 'benignsource-shop'),
               'benignsource_shop_widgets_field_type' => 'upload',
            ),
            'call_video_email' => array(
                'benignsource_shop_widgets_name' => 'call_video_iframe',
                'benignsource_shop_widgets_title' => __('Video Iframe', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'iframe_textarea',
                'benignsource_shop_widgets_row' => '4'
            ),
            'call_video_website' => array(
                'benignsource_shop_widgets_name' => 'call_video_btn_text',
                'benignsource_shop_widgets_title' => __('Button Text', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'text',
            ),
            'call_video_address' => array(
                'benignsource_shop_widgets_name' => 'call_video_btn_url',
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
     */
    public function widget($args, $instance) {
        extract($args);
        $call_video_title = $instance['call_video_title'];
        $call_video_desc = $instance['call_video_desc'];
        $call_video_iframe = $instance['call_video_iframe'];
        $call_video_btn_text = $instance['call_video_btn_text'];
        $call_video_btn_url = $instance['call_video_btn_url'];
        $bgfull_image = isset($instance['benign_shop_image'])? $instance['benign_shop_image'] : '';
        echo $before_widget;
?>
<style type="text/css">#bs-call-video { background-image: url(<?php echo $bgfull_image; ?>); }</style>
<div class="call-video clearfix">
<div class="call-wrap-left wow fadeInBounce" data-wow-delay="1s" data-wow-duration="2s">
<?php echo $call_video_iframe ; ?></div>
<div class="call-wrap-right wow fadeIn" data-wow-delay="1.5s">
<h2 class="call-title main-title"><?php echo $call_video_title;?></h2>
<div class="call-desc"><?php echo $call_video_desc;  ?></div>
<a class="bttn call-video-btn" href="<?php echo $call_video_btn_url; ?>"><?php echo $call_video_btn_text; ?></a>
</div></div>
<?php 
echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @return	array Updated safe values to be saved.
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
     */
    public function form($instance) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {
            extract($widget_field);
            $benignsource_shop_widgets_field_value = !empty($instance[$benignsource_shop_widgets_name]) ? esc_attr($instance[$benignsource_shop_widgets_name]) : '';
            benignsource_shop_widgets_show_widget_field($this, $widget_field, $benignsource_shop_widgets_field_value);
        }
    }
}endif;?>
