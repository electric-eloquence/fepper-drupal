/**
 * @file
 * Fepper theme-specific Drupal Behaviors.
 */

(function ($) {
  'use strict';

  function mobileNavToggle(toggleSelector, context) {
    var $toggleSelector = $(toggleSelector, context);
    var $toggler = $toggleSelector.find('> h2 > a');

    $toggler.click(function (e) {
      e.preventDefault();

      $toggleSelector.toggleClass('open');

      if (!$toggleSelector.hasClass('open')) {
        $toggler.blur();
      }
    });
  }

  Drupal.behaviors.openToggle = {
    attach: function (context) {
      mobileNavToggle('#block-searchform', context);
      mobileNavToggle('#block-mainnavigation', context);
    }
  };
})(jQuery);
