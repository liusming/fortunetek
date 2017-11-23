!function(a){"use strict";Drupal.behaviors.atFS={attach:function(b,c){var d=c.ajaxPageState.theme,e=c[d].at_slideshows;for(var f in e)if(e.hasOwnProperty(f)){var g=e[f];g.controlnav&&a(g.slideshow_class).addClass("has-pager"),g.directionnav&&a(g.slideshow_class).addClass("has-direction-nav"),g.as_carousel&&a(g.slideshow_class).addClass("is-carousel"),a(g.slideshow_class).flexslider({start:function(b){a(".flexslider").resize().removeClass("loading")},animation:g.animation?g.animation:"slide",direction:g.direction?g.direction:"horizontal",smoothHeight:g.smoothheight?g.smoothheight:!1,slideshowSpeed:g.slideshowspeed?parseFloat(g.slideshowspeed):4e3,animationSpeed:g.animationspeed?parseFloat(g.animationspeed):600,controlNav:g.controlnav?g.controlnav:!1,directionNav:g.directionnav?g.directionnav:!1,itemWidth:g.itemwidth?parseFloat(g.itemwidth):0,itemMargin:g.itemmargin?parseFloat(g.itemmargin):0,minItems:g.minitems?parseFloat(g.minitems):0,maxItems:g.maxitems?parseFloat(g.maxitems):0,move:g.move?parseFloat(g.move):0,pauseOnAction:g.pauseonaction?g.pauseonaction:!1,pauseOnHover:g.pauseonhover?g.pauseonhover:!1,animationLoop:g.animationloop?g.animationloop:!1,reverse:g.reverse?String(g.reverse):!1,randomize:g.randomize?g.randomize:!1,slideshow:g.autostart?g.autostart:!1,initDelay:g.initdelay?parseFloat(g.initdelay):0,easing:g.easing?g.easing:"swing",useCSS:g.usecss?g.usecss:!1,touch:g.touch?g.touch:!1,video:g.video?g.video:!1,prevText:g.prevtext?g.prevtext:"Previous",nextText:g.nexttext?g.nexttext:"Next",selector:g.selector?g.selector:".slides > li"})}}}}(jQuery,Drupal,drupalSettings);

/**
 * @file
 * Adapted from underscore.js with the addition Drupal namespace.
 */

/**
 * Limits the invocations of a function in a given time frame.
 *
 * The debounce function wrapper should be used sparingly. One clear use case
 * is limiting the invocation of a callback attached to the window resize event.
 *
 * Before using the debounce function wrapper, consider first whether the
 * callback could be attached to an event that fires less frequently or if the
 * function can be written in such a way that it is only invoked under specific
 * conditions.
 *
 * @param {function} func
 *   The function to be invoked.
 * @param {number} wait
 *   The time period within which the callback function should only be
 *   invoked once. For example if the wait period is 250ms, then the callback
 *   will only be called at most 4 times per second.
 * @param {bool} immediate
 *   Whether we wait at the beginning or end to execute the function.
 *
 * @return {function}
 *   The debounced function.
 */
Drupal.debounce = function (func, wait, immediate) {

  'use strict';

  var timeout;
  var result;
  return function () {
    var context = this;
    var args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) {
        result = func.apply(context, args);
      }
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) {
      result = func.apply(context, args);
    }
    return result;
  };
};
;
!function(a,b,c){"use strict";function d(d,e){function f(b){e.addClass("is-horizontal");var c=e.find(".is-responsive__list"),d=0;c.find(".is-responsive__item").each(function(){d+=a(this).outerWidth(!0)});var f=c.outerWidth(!0)<=d;1==f?e.removeClass("is-horizontal").addClass("is-vertical"):e.removeClass("is-vertical").addClass("is-horizontal")}var e=a(e);a(c).on("resize.lists",b.debounce(f,150)).trigger("resize.lists")}b.behaviors.atRL={attach:function(b){var c=a(b).find("[data-at-responsive-list]");c.length&&c.once().each(d)}}}(jQuery,Drupal,window);
