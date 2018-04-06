<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<div class="container-fluid footer-main  <?php if(!is_front_page()){echo "footer-inner-common"; } ?>">
<div class="container common-footer-container">
  <div class="foot-main-wrk">
    <div class="row">
      <div class="col-sm-6 col-xs-12 foot-main-left">
        <ul>
          <li><a href="#">Forms</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Google+</a></li>
        </ul>
      </div>

      <div class="col-sm-6 col-xs-12 foot-main-right">
        <p><?= get_option('twentyseventeen_copyright');  ?></p>
<p style="margin-top: 10px;"><strong>Crafted By:</strong><a rel="nofollow" target="_blank" href="https://greenwebmedia.com" style="text-decoration:none;color:#fff">Greenwebmedia.com</a></p>
      </div>

    </div>
  </div>
</div>
</div>

<div class="footer-strip"></div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/custom-fixed.js"></script>

  <script type="text/javascript">
    $('#carouselFade').carousel();
  </script>

        <script type="text/javascript">
          $('.carousel').carousel({
        pause: "true"
          });
        </script>

              <script type="text/javascript">
              $('.carousel').carousel({
              interval: 1000
              });

              </script>
<?php wp_footer(); ?>

</body>
</html>
