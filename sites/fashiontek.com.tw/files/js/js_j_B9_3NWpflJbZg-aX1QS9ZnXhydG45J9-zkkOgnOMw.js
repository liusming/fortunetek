!function(a){"use strict";Drupal.behaviors.atFS={attach:function(b,c){var d=c.ajaxPageState.theme,e=c[d].at_slideshows;for(var f in e)if(e.hasOwnProperty(f)){var g=e[f];g.controlnav&&a(g.slideshow_class).addClass("has-pager"),g.directionnav&&a(g.slideshow_class).addClass("has-direction-nav"),g.as_carousel&&a(g.slideshow_class).addClass("is-carousel"),a(g.slideshow_class).flexslider({start:function(b){a(".flexslider").resize().removeClass("loading")},animation:g.animation?g.animation:"slide",direction:g.direction?g.direction:"horizontal",smoothHeight:g.smoothheight?g.smoothheight:!1,slideshowSpeed:g.slideshowspeed?parseFloat(g.slideshowspeed):4e3,animationSpeed:g.animationspeed?parseFloat(g.animationspeed):600,controlNav:g.controlnav?g.controlnav:!1,directionNav:g.directionnav?g.directionnav:!1,itemWidth:g.itemwidth?parseFloat(g.itemwidth):0,itemMargin:g.itemmargin?parseFloat(g.itemmargin):0,minItems:g.minitems?parseFloat(g.minitems):0,maxItems:g.maxitems?parseFloat(g.maxitems):0,move:g.move?parseFloat(g.move):0,pauseOnAction:g.pauseonaction?g.pauseonaction:!1,pauseOnHover:g.pauseonhover?g.pauseonhover:!1,animationLoop:g.animationloop?g.animationloop:!1,reverse:g.reverse?String(g.reverse):!1,randomize:g.randomize?g.randomize:!1,slideshow:g.autostart?g.autostart:!1,initDelay:g.initdelay?parseFloat(g.initdelay):0,easing:g.easing?g.easing:"swing",useCSS:g.usecss?g.usecss:!1,touch:g.touch?g.touch:!1,video:g.video?g.video:!1,prevText:g.prevtext?g.prevtext:"Previous",nextText:g.nexttext?g.nexttext:"Next",selector:g.selector?g.selector:".slides > li"})}}}}(jQuery,Drupal,drupalSettings);

/**
 * @file
 * Statistics functionality.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  $(document).ready(function () {
    $.ajax({
      type: 'POST',
      cache: false,
      url: drupalSettings.statistics.url,
      data: drupalSettings.statistics.data
    });
  });
})(jQuery, Drupal, drupalSettings);
;
