<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BenignSource Shop
 */
get_header();
?>
<div class="inner">
<main id="main" class="site-main clearfix ">
<?php if( is_active_sidebar('body-1') ): ?>
<div class="bodybottom">
<?php dynamic_sidebar('body-1') ?></div>
<?php endif; ?>
<div id="primary" class="content-area blog_layout1">
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while (have_posts()) : the_post(); ?>
<?php
/* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part('content', get_post_format());?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
<?php else : ?>
<?php get_template_part('content', 'none'); ?>
<?php endif; ?>
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php if( is_active_sidebar('body-2') ): ?>

<div class="bodybottom">
<?php dynamic_sidebar('body-2') ?>
</div><?php endif; ?></main><!-- #main -->
</div>
<?php get_footer();?>