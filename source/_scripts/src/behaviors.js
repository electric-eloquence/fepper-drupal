/**
 * @file
 * Fepper theme-specific Drupal Behaviors.
 */

(function ($) {
  'use strict';

  function mobileNavToggle($togglerParent) {
    var $toggler = $togglerParent.find('> h2 > a');

    $toggler.click(function (e) {
      e.preventDefault();

      $togglerParent.toggleClass('open');

      if (!$togglerParent.hasClass('open')) {
        $toggler.blur();
      }
    });
  }

  Drupal.behaviors.openToggle = {
    attach: function (context) {
      var $searchBlock = $('div[id^="block-"][id$="-search"]', context);
      var $mainMenuBlock = $('nav[id^="block-"][id$="-main-menu"]', context);

      if ($searchBlock.length) {
        mobileNavToggle($searchBlock, context);

        var $searchToggler = $searchBlock.find('> h2 > a');

        $searchToggler.click(function () {
          var searchBlockRect = $searchBlock[0].getBoundingClientRect();

          if ($searchBlock.hasClass('open')) {
            $('#search-block-form', context).css('top', (searchBlockRect.top + searchBlockRect.height) + 'px');
          }
        });
      }

      if ($mainMenuBlock.length) {
        mobileNavToggle($mainMenuBlock, context);

        var $mainMenuToggler = $mainMenuBlock.find('> h2 > a');

        $mainMenuToggler.click(function () {
          var mainMenuBlockRect = $mainMenuBlock[0].getBoundingClientRect();

          if ($mainMenuBlock.hasClass('open')) {
            $mainMenuBlock.children('ul').css('top', (mainMenuBlockRect.top + mainMenuBlockRect.height) + 'px');
          }
        });
      }
    }
  };
})(jQuery);
