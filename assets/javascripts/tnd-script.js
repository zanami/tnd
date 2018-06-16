/**
 * @file
 * JS for TND.
 */
(function ($, Drupal, window, document, undefined) {

  Drupal.behaviors.tnd_accordion = {
    attach: function(context, setting) {
      $("#accordion-tnd").on("shown.bs.collapse", function () {
        var panel = $(this).find('.in').prev('.panel-heading');
//          var panel = $(this).find('.in');

        $('html, body').animate({
          scrollTop: panel.offset().top
        }, 300);
      });
    }
  }
  Drupal.behaviors.tnd_extlink = {
    attach: function(context, setting) {
       $('.menu-4642 a').each(function(){$(this).attr({ target: "_blank" });});
	$('[data-toggle="tooltip"]').tooltip()
    }
  }
  Drupal.behaviors.tnd_tooltips = {
    attach: function(context, setting) {
       $('[data-tooltip="tooltip"]').tooltip()
    }
  }
})(jQuery, Drupal, this, this.document);
