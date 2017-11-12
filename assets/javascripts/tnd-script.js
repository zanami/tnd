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

        $('[data-toggle="tooltip"]').tooltip();

        $('html, body').animate({
          scrollTop: panel.offset().top
        }, 300);
      });
    }
  }
})(jQuery, Drupal, this, this.document);
