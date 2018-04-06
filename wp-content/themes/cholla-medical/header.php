<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(is_page(5)){ echo "Home | Cholla Medical"; } else{ the_title(); } ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel='stylesheet' id='font-open-condensed-css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A700&#038;ver=4.8.3' type='text/css' media='all'>
      <link rel='stylesheet' id='font-open-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C600%2C700&#038;ver=4.8.3' type='text/css' media='all'>
      <link rel='stylesheet' id='font-lobster-css' href='http://fonts.googleapis.com/css?family=Lobster&#038;ver=4.8.3' type='text/css' media='all'>
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"> 
      <link href="<?= get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
      <link href="<?= get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?= get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container-fluid head-top-main">
      <div class="container">
        <div class="row">
  
          <div class="col-sm-5 col-md-6 col-xs-12 header-logo">
            <a href="<?php the_permalink(5); ?>"><img src="<?= get_option('twentyseventeen_header_logo'); ?>"></a>
          </div>
  
          <div class="col-sm-7 col-md-6 col-xs-12">
            <div class="header-top-right">
              <a href="#">
                <h4>Cholla Medical Group</h4>
                <p>10631 S. 51st Street, Suite 3 Phoenix,AZ 85044</p>
              </a>
            </div>
  
            <div class="header-bottom-right">
              <h4>Call Us Today: <a href="tel:418-7246"><?= get_option('twentyseventeen_Phone_Number'); ?></a></h4>
            </div>
  
          </div>
  
        </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container cholla-nav">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
                  <?php wp_nav_menu( array(
                                          'menu'              => 'main',
                                          'theme_location'    => 'primary',
                                          'menu_class'        => 'nav navbar-nav'));  ?>
           </div>
        </div>
      </nav>
      <?php if(is_page(5)) { ?>
            <div class="container slider-main">
                <div id="Carousel" class="carousel slide carousel-fade col-lg-12">
  
                  <div class="carousel-inner">
                    <?php  $sql = get_post_meta(7, '_cycloneslider_metas' , true ); ?>
                    <?php $count = 0; ?> 
                            <?php foreach( $sql as $query){ ?> 
                                      <?php $result = get_post( $sql[$count]['id'] );  ?>
                                      
                                      <?php $path = $result->guid; ?>
                    <div class="item <?php if($count == 0){ echo 'active'; } ?> <?php if($count == 1){ echo ''; } ?>">
                        <img src="http://<?php  echo $path; ?>" alt="" width="100%">
                        <div class="carousel-caption">
                        <div class="welcome-cholla">
                            <h3><?php echo $query['title'];?></h3>
                        </div>
  
                        <div class="we-look">
                          <div class="we-look-left">
                            <h5><?php echo $query['description'];?></h5>
                          </div>  
  
                          <div class="we-look-right">
                            <a href="<?php the_permalink(23); ?>">View Our Services</a>
                          </div>  
  
                        </div>  
                      </div>
                    </div>
                    <?php $count++;
                                         } ?>
                  
  
  
                </div>
  
              </div>
          </div>
  <?php } ?>
  <!--Slider Ends here/////////
  /////////////////////////////////-->
