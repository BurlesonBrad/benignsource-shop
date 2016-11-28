<?php
/**
 * Full Width Promo Widget
 * @package BenignSource Shop
 */
 
/**
 * Adds benignsource_shop_full_widget Promo.
 */
add_action('widgets_init', 'register_full_promo_widget');

function register_full_promo_widget() {
    register_widget('benignsource_shop_full_promo');
}

if( !class_exists( 'benignsource_shop_full_promo' ) ) :
class benignsource_shop_full_promo extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'benignsource_shop_full_promo', 'BenignSource Promo Widget', array(
                'description' => __('A widget that Gives Full Width Promo of the object', 'benignsource-shop')
                )
            );
    }
    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            'promo_title' => array(
                'benignsource_shop_widgets_name' => 'promo_title',
                'benignsource_shop_widgets_title' => __('Title', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'text',
                ),
            
            'promo_image' => array(
                'benignsource_shop_widgets_name' => 'promo_image',
                'benignsource_shop_widgets_title' => __('Upload Image', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'upload',
                ),

            'promo_style' => array(
                'benignsource_shop_widgets_name' => 'promo_style',
                'benignsource_shop_widgets_title' => __('Select FullWidth Style', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'select',
                'benignsource_shop_widgets_field_options' => array('style_one' => 'Style One', 'style_two' => 'Style Two')                
            ),

            'promo_title_sub' => array(
                'benignsource_shop_widgets_name' => 'promo_title_sub',
                'benignsource_shop_widgets_title' => __('Sub Title', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'text',
                ),
            
            'promo_desc' => array(
                'benignsource_shop_widgets_name' => 'promo_desc',
                'benignsource_shop_widgets_title' => __('Enter Promo Desc', 'benignsource-shop'),
                'benignsource_shop_widgets_field_type' => 'textarea',   
                'benignsource_shop_widgets_row' =>'4',
                ),

            'promo_link_btn' => array(
                'benignsource_shop_widgets_name' => 'promo_link_btn',
                'benignsource_shop_widgets_title' => __('Enter Promo Button Text', 'benignsource-shop' ),
                'benignsource_shop_widgets_field_type' => 'text'
                ),
            
            'promo_link' => array(
                'benignsource_shop_widgets_name' => 'promo_link',
                'benignsource_shop_widgets_title' => __('Enter Promo Link', 'benignsource-shop' ),
                'benignsource_shop_widgets_field_type' => 'url'
                ),
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
        if($instance!=null){        
            $promo_title = $instance['promo_title'];
            $promo = $instance['promo_image'];
            $promo_title_sub = $instance['promo_title_sub'];
            $promo_desc = $instance['promo_desc'];
            $promo_style = isset($instance['promo_style']) ? $instance['promo_style'] : 'style_one';
            if(isset($instance['promo_link_btn'])){
                $promo_link_btn = $instance['promo_link_btn'];            }
            $promo_link = $instance['promo_link'];

            echo $before_widget; 
            ?>
<div class="promo-widget-wrap-full <?php echo $promo_style; ?>">
<a href="<?php echo $promo_link?>">
<div class="promo-image">
<?php if (!empty($promo)): ?>
<img src = "<?php echo $promo; ?>" alt="<?php echo $promo_title; ?>" />
<?php endif; ?>
<div class="caption wow fadeIn" data-wow-delay="1s">
<?php if (!empty($promo_title)): ?>
<h4 class="widget-title"><?php echo $promo_title; ?></h4>
<?php endif; ?>
<?php if (!empty($promo_title_sub)): ?>
<div class="promo-desc-title"><?php echo $promo_title_sub; ?></div>
<?php endif; ?> 
<?php if (!empty($promo_desc)): ?>
<div class="promo-desc"><?php echo $promo_desc; ?></div>
<?php endif; ?> 
<?php if (!empty($promo_link_btn)): ?>
<span class="btn promo-link-btn"><?php echo $promo_link_btn; ?></span>
<?php endif; ?></div></div></a></div>        
<?php 
echo $after_widget;
    }
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