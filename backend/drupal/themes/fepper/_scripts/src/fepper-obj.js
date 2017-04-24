/**
 * Fepper-specific global namespace for browser JavaScripts.
 * Be sure this is loaded before scripts that depend on it. Add additional properties as necessary.
 */
(function () {
  'use strict';

  var FEPPER = {
    breakpoints: {
      lg: {
        maxWidth: window.bp_lg_max || -1,
        minWidth: window.bp_md_max ? window.bp_md_max + 1 : 1025
      },
      md: {
        maxWidth: window.bp_md_max || 1024,
        minWidth: window.bp_sm_max ? window.bp_sm_max + 1 : 768
      },
      sm: {
        maxWidth: window.bp_sm_max || 767,
        minWidth: window.bp_xs_max ? window.bp_xs_max + 1 : 481
      },
      xs: {
        maxWidth: window.bp_xs_max || 480,
        minWidth: window.bp_xx_max ? window.bp_xx_max + 1 : 321
      },
      xx: {
        maxWidth: window.bp_xx_max || 320,
        minWidth: window.bp_xs_min || 0
      }
    }
  };

  window.FEPPER = FEPPER;
})();
