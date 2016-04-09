/**
 * @file
 * Fepper theme-specific Drupal Behaviors.
 */

(function ($) {
  'use strict';

  Drupal.behaviors.openToggle = {
    attach: function (context) {
      $('#block-mainnavigation, #block-searchform', context)
        .children('h2')
        .click(function () {
          $(this).parents().toggleClass('open');
        }
      );
    }
  };
})(jQuery);
