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
      <img src="<?php echo get_template_directory_uri()?>/assets/di-gasell-webb-white.svg" class="footer-gasell">

      <a href="https://upplysningar.syna.se/Sigill/Detail/100920" target="_blank">
        <img
          style="height: 4rem; width: auto; float: right; display: block; margin-top: -1rem; margin-right: 1rem;"
          alt="Sigillet är utfärdat av kreditupplysningsföretaget AB Syna www.syna.se"
          title="Sigillet är utfärdat av kreditupplysningsföretaget AB Syna"
          src="https://sigill.syna.se/sigill/app/DBSeal.php?cid=100920&sealtype=stor"/>
      </a>

      Copyright &copy; 2019 Prorenata AB
      <?php
      if ( get_field('privacy_page', 'option') ) {
        printf('| <a href="%s">Integritetspolicy</a>', get_field('privacy_page', 'option'));
      } ?>

    </div>
  </div>
</footer>

<script>
const showContacForm = function() {
  document.querySelector('#contact-form').classList.add('isActive');
  document.querySelector('body').classList.add('drawer-open');
  window.history.pushState('Contact',null,location.href + '#kontakt')
  return false;
}
const hideContacForm = function() {
  document.querySelector('#contact-form').classList.remove('isActive');
  document.querySelector('body').classList.remove('drawer-open');
  var baseUrl = location.protocol+'//'+
    location.hostname+
   (location.port?":"+location.port:"")+
    location.pathname+
   (location.search?location.search:"");
  window.history.pushState('Contact',null,baseUrl);
  return false;
}

window.addEventListener('hashchange', function(e){
  if (e.newURL.search('#') == -1) {
    hideContacForm();
  }
})
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

<div class="cookieConsent">
  <div class="cookieConsentMessage"><strong>Vi bjuder på kaka!</strong> Kakorna kommer bland annat från Cloudflare, en tjänst som hjälper sidan ladda snabbare. Du kan läsa mer om hur vi använder kakor i vår <a href="/integritetspolicy/">Intigritetspolicy</a></div>
  <div class="hide"><i class="far fa-times"></i></div>
</div>

<?php wp_footer(); ?>

</body>
</html>
