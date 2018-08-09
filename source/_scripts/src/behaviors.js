/**
 * @file
 * Fepper theme-specific Drupal Behaviors.
 */

(function ($) {
  'use strict';

  // Check for a footer menu block placed before the branding block, since this
  // is the default layout on a fresh Drupal 8 standard install (v8.5.5). Such a
  // layout requires that the mobile search and main menu widgets are pushed an
  // additional distance from the top of the page.
  var $branding = $('[id^="block-"][id$="-branding"]');
  var $brandingPrevSibling;
  var brandingPrevSiblingId;
  var hasFooterMenuInHeader;

  if ($branding.length) {
    $brandingPrevSibling = $branding.prev();
  }

  if ($brandingPrevSibling.length) {
    brandingPrevSiblingId = $brandingPrevSibling.attr('id');
  }

  if (brandingPrevSiblingId) {
    hasFooterMenuInHeader =
      brandingPrevSiblingId.slice(0, 6) === 'block-' && brandingPrevSiblingId.slice(-7) === '-footer';
  }

  // Back to our regularly scheduled program.
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

      // Add an additional class if the footer menu block is placed before the
      // branding block.
      if (hasFooterMenuInHeader) {
        if (!$searchBlock.hasClass('wide')) {
          $searchBlock.addClass('wide');
        }

        if (!$mainMenuBlock.hasClass('wide')) {
          $mainMenuBlock.addClass('wide');
        }
      }

      mobileNavToggle($searchBlock, context);
      mobileNavToggle($mainMenuBlock, context);
    }
  };
})(jQuery);
