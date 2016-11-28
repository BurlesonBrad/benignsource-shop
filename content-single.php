<?php
/**
 * @package BenignSource Root
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
<?php if(has_post_thumbnail()): ?>
<div class="post-thumbnail"><?php the_post_thumbnail('benignsourceblog-big-thumbnail'); ?></div>
<?php endif; ?>
<span class="cat-name"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
<h2 class="post-title"><?php the_title();?></h2>		
<p class="meta-info">
<?php echo __('Posted On', 'benignsource-shop'); ?> 
<?php the_time('F j, Y'); ?> 
<?php echo __('at', 'benignsource-shop'); ?>
<?php the_time('g:i a'); ?> 
<?php echo __('by', 'benignsource-shop'); ?>
<?php the_author_posts_link(); ?> /  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
<div class="content-page"><?php the_content(); ?></div>
<?php
wp_link_pages( array(
'before' => '<div class="page-links">' . __( 'Pages:', 'benignsource-shop' ),
'after'  => '</div>',
) );?></div><!-- .entry-content -->
</article><!-- #post-## -->