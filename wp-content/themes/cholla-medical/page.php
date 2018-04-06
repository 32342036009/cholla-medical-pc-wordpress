<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container-fluid">
<?php if(is_front_page()) : ?>
<div class="container section-main">
<?php else : ?>
  <div class="container inner-page-main">
<?php endif; ?>
    <?php if(!is_front_page()) : ?>
       <div class="inner-page-common">
   <?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
    <?php if(!is_front_page()) : ?>
	  </div><!-- .inner-page-common -->
    <?php endif; ?>
</div><!-- .container -->
</div><!-- .container-fluid -->

<?php get_footer();
