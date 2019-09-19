<?php
/**
 * The template for displaying the footer.
 *
 */
?>

<footer>
  <div class="pure-g">
    <div class="pure-u-1-1 pure-u-lg-7-24 l-box">
      <h3 class="logo logo-white-text"><?php bloginfo('name'); ?></h3>
    </div>
    <div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-5-24 l-box">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-left' ) ); ?>
    </div>
    <div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-5-24 l-box">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-right' ) ); ?>
    </div>
    <div class="pure-u-1-1 pure-u-sm-1-3 pure-u-md-2-4 pure-u-lg-7-24 l-box">
      <?php the_field('footer_text', 'option'); ?>
    </div>
  </div>
  <div class="pure-g">
    <div class="pure-u-1-1 l-box text-small">
      Copyright &copy; 2019 Prorenata AB

      <?php
      if ( get_field('privacy_page', 'option') ) {
        printf('| <a href="%s">Intigritetspolicy</a>', get_field('privacy_page', 'option'));
      } ?>

    </div>
  </div>
</footer>

<script>
const showContacForm = function() {
  document.querySelector('#contact-form').classList.add('isActive');
  document.querySelector('body').classList.add('drawer-open');
  return false;
}
const hideContacForm = function() {
  document.querySelector('#contact-form').classList.remove('isActive');
  document.querySelector('body').classList.remove('drawer-open');
  return false;
}
</script>

<div class="drawer" id="contact-form">
  <div class="close" onClick="hideContacForm()">
    <i class="fal fa-times fa-fw"></i>
  </div>
  <div class="drawer-content">
    <div class="pure-g">
      <div class="pure-u-1-1 pure-u-sm-3-5 pure-u-md-1-2 l-box pure-center">
        <?php echo do_shortcode( '[contact-form-7 id="156" title="Kontaktformulär 1"]' ); ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
