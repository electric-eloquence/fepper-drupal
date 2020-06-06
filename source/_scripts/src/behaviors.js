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
      var $body = $('body', context);
      var $header = $('.header', context);
      var $searchBlock = $('#region-secondary-menu div[id^="block-"][id$="-search"]', context);
      var $mainMenuBlock = $('nav[id^="block-"][id$="-main-menu"]', context);
      var $userAccountBlock = $('nav[id^="block-"][id$="-account-menu"]', context);

      if ($searchBlock.length) {
        mobileNavToggle($searchBlock, context);

        var $searchToggler = $searchBlock.find('> h2 > a');

        if ($searchToggler.length) {
          $searchToggler.click(function () {
            if ($searchBlock.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $('#search-block-form', context).css('top', cssTop);
            }
            else {
              $('#search-block-form', context).css('top', '');
            }
          });
        }
      }

      if ($mainMenuBlock.length) {
        mobileNavToggle($mainMenuBlock, context);

        var $mainMenuToggler = $mainMenuBlock.find('> h2 > a');

        if ($mainMenuToggler.length) {
          $mainMenuToggler.click(function () {
            if ($mainMenuBlock.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $mainMenuBlock.children('ul').css('top', cssTop);

              if ($userAccountBlock.length) {
                $userAccountBlock.removeClass('open');
                $userAccountBlock.children('ul').css('top', '');
              }
            }
            else {
              $mainMenuBlock.children('ul').css('top', '');
            }
          });
        }
      }

      if ($userAccountBlock.length) {
        mobileNavToggle($userAccountBlock, context);

        var $userAccountToggler = $userAccountBlock.find('> h2 > a');

        if ($userAccountToggler.length) {
          $userAccountToggler.click(function () {
            if ($userAccountBlock.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $userAccountBlock.children('ul').css('top', cssTop);

              if ($mainMenuBlock.length) {
                $mainMenuBlock.removeClass('open');
                $mainMenuBlock.children('ul').css('top', '');
              }
            }
            else {
              $userAccountBlock.children('ul').css('top', '');
            }
          });
        }
      }
    }
  };

  Drupal.behaviors.resetMobileNavBlocks = {
    attach: function (context) {
      $(window).resize(function () {
        var $searchBlock = $('#region-secondary-menu div[id^="block-"][id$="-search"]', context);
        var $mainMenuBlock = $('nav[id^="block-"][id$="-main-menu"]', context);
        var $userAccountBlock = $('nav[id^="block-"][id$="-account-menu"]', context);

        if ($searchBlock.length) {
          $searchBlock.removeClass('open');
          $('#search-block-form', context).css('top', '');
        }

        if ($mainMenuBlock.length) {
          $mainMenuBlock.removeClass('open');
          $mainMenuBlock.children('ul').css('top', '');
        }

        if ($userAccountBlock.length) {
          $userAccountBlock.removeClass('open');
          $userAccountBlock.children('ul').css('top', '');
        }
      });
    }
  };

  Drupal.behaviors.resetFooterHeight = {
    attach: function (context) {
      function resetFooterHeight() {
        var $body = $('body', context);
        var $footer = $('footer[role="contentinfo"]', context);

        $footer.css('height', 'auto');

        var footerHeight = $footer.length ? $footer.outerHeight() + 'px' : '';

        $body.css('padding-bottom', footerHeight);
      }

      resetFooterHeight();

      $(window).resize(function () {
        resetFooterHeight();
      });
    }
  };
})(jQuery);
