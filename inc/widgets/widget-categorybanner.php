<?php
/**
 * Widget Category
**/
 
add_action('widgets_init', 'register_product_widgetcat');
 
function register_product_widgetcat(){
    register_widget('benignsource_shop_productcat');
}

if( !class_exists( 'benignsource_shop_productcat' ) ) :
class benignsource_shop_productcat extends WP_Widget {
    /**
     * Register Widget with Wordpress
    **/
    public function __construct() {
        parent::__construct(
            'benignsource_shop_productcat', 'BenignSource Product Category Banner', array(
            'description' => __('This widgets show the Category Image its Description and Product of that Category', 'benignsource-shop')
        ));
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        
          $prod_type = array(
            'right_align' => __('Right Align With Category Image', 'benignsource-shop'),
            'left_align' => __('Left Align With Category Image', 'benignsource-shop'),
          );
          $taxonomy     = 'product_cat';
          $empty        = 1;
          $orderby      = 'name';  
          $show_count   = 0;      // 1 for yes, 0 for no
          $pad_counts   = 0;      // 1 for yes, 0 for no
          $hierarchical = 1;      // 1 for yes, 0 for no  
          $title        = '';  
          $empty        = 0;
            $args = array(
              'taxonomy'     => $taxonomy,
              'orderby'      => $orderby,
              'show_count'   => $show_count,
              'pad_counts'   => $pad_counts,
              'hierarchical' => $hierarchical,
              'title_li'     => $title,
              'hide_empty'   => $empty  
            );

      $woocommerce_categories = array();
      $woocommerce_categories_obj = get_categories($args);
        $woocommerce_categories[''] = 'Select Product Category:';
      foreach ($woocommerce_categories_obj as $category) {
        $woocommerce_categories[$category->term_id] = $category->name;
      }
        
        $fields = array(
            
              'product_type' => array(
                  'benignsource_shop_widgets_name' => 'product_alignment',
                  'benignsource_shop_widgets_title' => __('Select the Display Style (Image Alignment)', 'benignsource-shop'),
                  'benignsource_shop_widgets_field_type' => 'select',
                  'benignsource_shop_widgets_field_options' => $prod_type                
              ),

              'product_category' => array(
                  'benignsource_shop_widgets_name' => 'product_category',
                  'benignsource_shop_widgets_title' => __('Select Product Category', 'benignsource-shop'),
                  'benignsource_shop_widgets_field_type' => 'select',
                  'benignsource_shop_widgets_field_options' => $woocommerce_categories                
              ),            
                    
          );

          return $fields;
    }
    
    public function widget($args, $instance){
        extract($args);
        $product_alignment       =   $instance['product_alignment'];
        $product_category   =   $instance['product_category'];
        $product_args =  array(
                      'post_type' => 'product',
                      'tax_query' => array(
                              array(
                                 'taxonomy'  => 'product_cat',
                                 'field'     => 'term_id', 
                                 'terms'     => $product_category                                                                 
                              )),
                      'posts_per_page' => '6'
        );
    
        ?>
<section class="category_product">
<div class="ak-container">
<?php echo $before_widget;?>
<div class="feature-cat-product-wrap">
<div class="feature-cat-image <?php echo $product_alignment;?>">
<?php 
$thumbnail_id = get_woocommerce_term_meta($product_category, 'thumbnail_id', true);
if (!empty($thumbnail_id)) {
$image = wp_get_attachment_image_src($thumbnail_id, 'benignsource-prod-cat-size');
echo '<img src="' . esc_url($image[0]) . '" />';
}?>
<div class="product-cat-desc">
<?php                             
$taxonomy = 'product_cat';
$terms = term_description( $product_category, $taxonomy );
$terms_name = get_term( $product_category, $taxonomy );?>
<h3><?php echo $terms_name->name ?></h3>
<div class="cat_desc"><?php echo $terms; ?></div></div></div>
<div class="feature-cat-product <?php echo $product_alignment;?>">
<?php 
$prod_args = array(
                                                'post_type' => 'product',
                                                'tax_query' => array(array('taxonomy'  => 'product_cat',
                                                                   'field'     => 'term_id', 
                                                                   'terms'     => $product_category                                                                 
                                                                )),
                                                'posts_per_page' => '6'
                                                );
$product_query = new WP_Query($prod_args);
if($product_query->have_posts()):
$count = 1;
while($product_query->have_posts()):$product_query->the_post();
$image_id = get_post_thumbnail_id();
$image = wp_get_attachment_image_src($image_id, 'thumbnail', 'true');?>
<div class="feature-prod-wrap wow flipInY" data-wow-delay="<?php echo $count ?>s">
<?php woocommerce_get_template_part( 'content', 'feat-product' ); ?></div>
<?php
$count+=0.5;
endwhile;
endif;?></div></div>
<?php echo $after_widget;?></div></section>
<?php
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