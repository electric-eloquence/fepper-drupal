(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.openToggle = {
    attach: function (context) {
      $('#block-mainnavigation, #block-searchform')
        .children('h2')
        .click(function () {
          $(this).parents().toggleClass('open');
        }
      );
    }
  };
})(jQuery, Drupal);
