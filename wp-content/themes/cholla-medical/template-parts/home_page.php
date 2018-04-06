<?php/**
Template Name: Home
**/ ?>
<?php get_header(); ?>
<div class="container-fluid">
    <div class="container section-main">
      
      <div class="row">
        <?php
  			while ( have_posts() ) : the_post();

  				//the_content();

  			endwhile; // End of the loop.
  			?>
  
      </div>
    </div>
  </div>
<?php  get_footer(); ?>