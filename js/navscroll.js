// sticky Navigation$(document).scroll(function () {
jQuery(document).ready(function ($) {
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});