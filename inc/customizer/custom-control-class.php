<?php
/**
 * Custom Control Class
*/

if( class_exists( 'WP_Customize_control') ){
class BenignSource_shop_WP_Customize_Switch_Control extends WP_Customize_Control {
public $type = 'switch';
public function render_content() {?>
<label>
<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
<div class="switch_options">
<span class="switch_enable"> <?php _e('Enable', 'benignsource-shop'); ?> </span>
<span class="switch_disable"> <?php _e('Disable', 'benignsource-shop'); ?> </span>  
<input type="hidden" id="enable_prev_next" <?php $this->link(); ?> value="<?php echo $this->value(); ?>" /></div></label>
<?php
}
}
class BenignSource_shop_WP_Customize_Switch_Control_YesNo extends WP_Customize_Control {
public $type = 'switch_yesno';        
public function render_content() {?>
<label>
<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
<div class="switch_options">
<span class="switch_enable"> <?php _e('Yes', 'benignsource-shop'); ?> </span>
<span class="switch_disable"> <?php _e('No', 'benignsource-shop'); ?> </span>  
<input type="hidden" id="enable_prev_next_yn" <?php $this->link(); ?> value="<?php echo $this->value(); ?>" /></div></label>
<?php
}
}
class BenignSource_shop_WP_Customize_Radioimage_Control extends WP_Customize_Control {
public $type = 'radioimage';
public function enqueue() {
wp_enqueue_script( 'jquery-ui-button' );
}
public function render_content() {
$name = '_customize-radio-' . $this->id;?>
<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
<div id="input_<?php echo $this->id; ?>" class="image">
<?php foreach ( $this->choices as $value => $label ) : ?>
<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" id="<?php echo $this->id . $value; ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
<label for="<?php echo $this->id . $value; ?>"><img src="<?php echo esc_html( $label ); ?>"/></label></input>
<?php endforeach; ?></div>
<script>jQuery(document).ready(function($) { $( '[id="input_<?php echo $this->id; ?>"]' ).buttonset(); });</script>
<?php 
}
}
class BenignSource_shop_WP_Category_Checkboxes_Control extends WP_Customize_Control {
public $type = 'category-checkboxes';
public function render_content() {
	        echo '<script src="' . get_template_directory_uri() . '/js/theme-customizer.js"></script>';
	        echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
	        foreach (get_categories() as $category) {
	            echo '<label><input type="checkbox" name="category-' . $category->term_id . '" id="category-' . $category->term_id . '" class="cstmzr-category-checkbox"> ' . $category->cat_name . '</label><br>';
	        }
	        ?>
	        <input type="hidden" id="<?php echo $this->id; ?>" class="cstmzr-hidden-categories" <?php $this->link(); ?> value="<?php echo sanitize_text_field($this->value()); ?>">
<?php
	    }
	}

/**
* BenignSource Shop Premium Features
*/
class BenignSource_shop_Theme_Info_Product_Custom_Control extends WP_Customize_Control{
public function render_content(){ ?>
<label><span class="customize-text_editor_desc button">Premium Features</span></label>
<?php
}
}
if(!class_exists( 'BenignSource_shop_Theme_Info_Custom_Control' )){
		class BenignSource_shop_Theme_Info_Custom_Control extends WP_Customize_Control{
		    public function render_content(){ ?>
<label>
<div class="user_sticky_note">
<span class="sticky_info_row"><a class="button" href="http://www.benignsource.com/demo/" target="_blank">Live Demo</a></span>
<span class="sticky_info_row"><a class="button" href="http://www.benignsource.com/category/documentation/" target="_blank">Documentation</a></span>
<span class="sticky_info_row"><a class="button" href="http://www.benignsource.com/forums/" target="_blank">Support Forum</a></span>
</div>
<h2 class="customize-title">Premium Features</h2>
<span class="customize-text_editor_desc">                  
<img src="<?php echo get_template_directory_uri() ?>/inc/images/feature-premium.jpg"/>
<?php $buy_now = 'http://www.benignsource.com'; ?>
<a href="<?php echo esc_url( $buy_now ); ?>" class="button button-primary buynow" target="_blank"><?php _e('Buy Now','benignsource-shop'); ?></a></span></label>
<?php
}
}}
}?>