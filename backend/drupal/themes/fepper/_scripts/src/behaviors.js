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

  Drupal.behaviors.closeExpandedMenuOnTablet = {
    attach: function (context) {
      var $html = $('html', context);

      if ($html.data('closeExpandedMenuOnTabletAttached')) {
        return;
      }

      // On wider mobile viewports (phablets and tablets), touching ".expanded" links will expand nested menus.
      // The following listener removes the focus from those links, thereby closing their expanded menus.
      $('body', context).click(function () {});

      $html.data('closeExpandedMenuOnTabletAttached', true);
    }
  };

  Drupal.behaviors.toggleMobileNav = {
    attach: function (context) {
      var $html = $('html', context);

      if ($html.data('toggleMobileNavAttached')) {
        return;
      }

      var $body = $('body', context);
      var $header = $('.header', context);
      var $blockAccountMenu = $('nav[id^="block-"][id$="-account-menu"]', context);
      var $blockMainMenu = $('nav[id^="block-"][id$="-main-menu"]', context);
      var $blockSearch = $('#region-secondary-menu div[id^="block-"][id$="-search"]', context);

      if ($blockAccountMenu.length) {
        mobileNavToggle($blockAccountMenu, context);

        var $togglerAccountMenu = $blockAccountMenu.find('> h2 > a');

        if ($togglerAccountMenu.length) {
          $togglerAccountMenu.click(function () {
            if ($blockAccountMenu.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $blockAccountMenu.children('ul').css('top', cssTop);

              if ($blockMainMenu.length) {
                $blockMainMenu.removeClass('open');
                $blockMainMenu.children('ul').css('top', '');
              }
            }
            else {
              $blockAccountMenu.children('ul').css('top', '');
            }
          });
        }
      }

      if ($blockMainMenu.length) {
        mobileNavToggle($blockMainMenu, context);

        var $togglerMainMenu = $blockMainMenu.find('> h2 > a');

        if ($togglerMainMenu.length) {
          $togglerMainMenu.click(function () {
            if ($blockMainMenu.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $blockMainMenu.children('ul').css('top', cssTop);

              if ($blockAccountMenu.length) {
                $blockAccountMenu.removeClass('open');
                $blockAccountMenu.children('ul').css('top', '');
              }
            }
            else {
              $blockMainMenu.children('ul').css('top', '');
            }
          });
        }
      }

      if ($blockSearch.length) {
        mobileNavToggle($blockSearch, context);

        var $togglerSearch = $blockSearch.find('> h2 > a');

        if ($togglerSearch.length) {
          $togglerSearch.click(function () {
            if ($blockSearch.hasClass('open')) {
              var cssTop = 'calc(' + $body.css('padding-top') + ' + ' + $header.outerHeight() + 'px)';

              $('#search-block-form', context).css('top', cssTop);
            }
            else {
              $('#search-block-form', context).css('top', '');
            }
          });
        }
      }

      $html.data('toggleMobileNavAttached', true);
    }
  };

  Drupal.behaviors.resetMobileNavBlocks = {
    attach: function (context) {
      var $html = $('html', context);

      if ($html.data('resetMobileNavBlocksAttached')) {
        return;
      }

      $(window).resize(function () {
        var $blockAccountMenu = $('nav[id^="block-"][id$="-account-menu"]', context);
        var $blockMainMenu = $('nav[id^="block-"][id$="-main-menu"]', context);
        var $blockSearch = $('#region-secondary-menu div[id^="block-"][id$="-search"]', context);

        if ($blockAccountMenu.length) {
          $blockAccountMenu.removeClass('open');
          $blockAccountMenu.children('ul').css('top', '');
        }

        if ($blockMainMenu.length) {
          $blockMainMenu.removeClass('open');
          $blockMainMenu.children('ul').css('top', '');
        }

        if ($blockSearch.length) {
          $blockSearch.removeClass('open');
          $('#search-block-form', context).css('top', '');
        }
      });

      $html.data('resetMobileNavBlocksAttached', true);
    }
  };

  Drupal.behaviors.resetFooterHeight = {
    attach: function (context) {
      var $html = $('html', context);

      if ($html.data('resetFooterHeightAttached')) {
        return;
      }

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

      $html.data('resetFooterHeightAttached', true);
    }
  };
})(jQuery);
