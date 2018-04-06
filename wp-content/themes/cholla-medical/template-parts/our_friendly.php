<?php 
/**
Template Name: Our Friendly

**/
get_header(); ?>
<div class="container-fluid">
    <div class="container inner-page-main">
      <div class="inner-page-common">
        <div class="row">
          <div class="col-sm-8 col-xs-12">
            <div class="inner-page-left staff-wrking">
              <h2>Our Friendly Staff</h2>
                <div class="col-sm-12 col-xs-12">
                      <?php $args = array( 
                  'post_type' => 'our_friendly_staff', 
                  'posts_per_page' => -1 );
                   $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="staff-wrk">
                    <div class="staff-left">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="staff-right">
                        <h4><?php the_title(); ?></h4>
                      <?php the_content(); ?>
                    </div>
                    </div>
                  <?php endwhile; ?>
                </div>  
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 inner-page-right">
            <ul>
              <li><a href="#">Ahwatukee</a></li>
              <li><a href="#">Ahwatukee</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
