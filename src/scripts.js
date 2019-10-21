var $ = jQuery;

$('.module-slides').slick({
  dots: true,
  infinite: true,
  speed: 300,
  centerMode: true,
  variableWidth: true,
  nextArrow: '<div class="slick-arrow-next"><i class="fal fa-arrow-right fa-fw"></i></div>',
  prevArrow: '<div class="slick-arrow-prev"><i class="fal fa-arrow-left fa-fw"></i></div>'
})


/**
  * Source Cookie Code: https://www.w3schools.com/js/js_cookies.asp
  */

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(document).on('ready', function() {

  $('.cookieConsent').on('click', function() {
    setCookie('pnr_cookieConsent', true, 365)
    $('.cookieConsent').removeClass('visible')
  })

  var cookieConsent = getCookie('pnr_cookieConsent')
  if (!cookieConsent) {
    $('.cookieConsent').addClass('visible')
  }
})
