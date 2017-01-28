/**
 * Fepper-specific global namespace for browser JavaScripts.
 * Be sure this is loaded before scripts that depend on it. Add additional properties as necessary.
 */
(function () {
  'use strict';

  window.FEPPER = {
    breakpoints: {
      lg: {
        maxWidth: window.bp_lg_max || -1,
        minWidth: window.bp_md_max ? window.bp_md_max + 1 : 1025
      },
      md: {
        maxWidth: window.bp_md_max || 1024,
        minWidth: window.bp_sm_max ? window.bp_sm_max + 1 : 769
      },
      sm: {
        maxWidth: window.bp_sm_max || 768,
        minWidth: window.bp_xs_max ? window.bp_xs_max + 1 : 481
      },
      xs: {
        maxWidth: window.bp_xs_max || 480,
        minWidth: window.bp_xs_min || 0
      }
    }
  };
})();
