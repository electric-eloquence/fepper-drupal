/**
 * @file
 * Fepper theme-specific Drupal Behaviors.
 */

(function ($) {
  'use strict';

  function mobileNavToggle($togglerParent) {
    var $toggler = $togglerParent.find('> h2 > a');

    if ($toggler.length) {
      $toggler.click(function (e) {
        e.preventDefault();

        $togglerParent.toggleClass('open');

        if (!$togglerParent.hasClass('open')) {
          $toggler.blur();
        }
      });
    }
  }

  Drupal.behaviors.toggleMobileNav = {
    attach: function (context) {
      var $searchBlock = $('div[id^="block-"][id$="-search"]', context);
      var $mainMenuBlock = $('nav[id^="block-"][id$="-main-menu"]', context);

      if ($searchBlock.length) {
        mobileNavToggle($searchBlock, context);

        var $searchToggler = $searchBlock.find('> h2 > a');

        if ($searchToggler.length) {
          $searchToggler.click(function () {
            var searchBlockRect = $searchBlock[0].getBoundingClientRect();

            if ($searchBlock.hasClass('open')) {
              $('#search-block-form', context).css('top', searchBlockRect.bottom + 'px');
            }
          });
        }
      }

      if ($mainMenuBlock.length) {
        mobileNavToggle($mainMenuBlock, context);

        var $mainMenuToggler = $mainMenuBlock.find('> h2 > a');

        if ($mainMenuToggler.length) {
          $mainMenuToggler.click(function () {
            var mainMenuBlockRect = $mainMenuBlock[0].getBoundingClientRect();

            if ($mainMenuBlock.hasClass('open')) {
              $mainMenuBlock.children('ul').css('top', mainMenuBlockRect.bottom + 'px');
            }
          });
        }
      }
    }
  };

  Drupal.behaviors.resetSearchBlock = {
    attach: function (context) {
      $(window).resize(function () {
        var $searchBlock = $('div[id^="block-"][id$="-search"]', context);
        var $mainMenuBlock = $('nav[id^="block-"][id$="-main-menu"]', context);

        if ($searchBlock.length) {
          $searchBlock.removeClass('open');
          $('#search-block-form', context).css('top', '0');
        }

        if ($mainMenuBlock.length) {
          $mainMenuBlock.removeClass('open');
          $mainMenuBlock.children('ul').css('top', '0');
        }
      });
    }
  };
})(jQuery);
