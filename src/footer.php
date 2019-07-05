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
      <p>010-330 06 70<br />
        prorenata@prorenata.se</p>
      <p>Skeppsbron 30 <br />
        111 30 Stockholm</p>
      <p>Orgnr. 556827-5555</p>
    </div>
  </div>
  <div class="pure-g">
    <div class="pure-u-1-1 l-box text-small">
      Copyright &copy; 2019 Prorenata AB
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
