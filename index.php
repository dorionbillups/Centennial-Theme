<?php
/**
 * This template, index.php, is the main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display posts when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hundred_Stories
 * @since Hundred Stories 1.0
 */

get_header(); ?>
  <div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php hundredstories_content_nav(); ?>
            <?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar();?>
<?php get_footer(); ?>
