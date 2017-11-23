/**
 * @file
 * Parse inline JSON and initialize the drupalSettings global object.
 */

(function () {

  'use strict';

  // Use direct child elements to harden against XSS exploits when CSP is on.
  var settingsElement = document.querySelector('head > script[type="application/json"][data-drupal-selector="drupal-settings-json"], body > script[type="application/json"][data-drupal-selector="drupal-settings-json"]');

  /**
   * Variable generated by Drupal with all the configuration created from PHP.
   *
   * @global
   *
   * @type {object}
   */
  window.drupalSettings = {};

  if (settingsElement !== null) {
    window.drupalSettings = JSON.parse(settingsElement.textContent);
  }
})();
;
window.drupalTranslations = {"strings":{"":{"An AJAX HTTP error occurred.":"\u767c\u751f\u4e00\u500b AJAX HTTP \u932f\u8aa4\u3002","HTTP Result Code: !status":"HTTP \u7d50\u679c\u78bc\uff1a!status","An AJAX HTTP request terminated abnormally.":"\u6709\u500b\u4e0d\u6b63\u5e38\u7d50\u675f\u7684 AJAX HTTP \u8cc7\u6e90\u8acb\u6c42","Debugging information follows.":"\u9644\u4e0a\u5075\u932f\u8cc7\u8a0a\u3002","Path: !uri":"\u8def\u5f91\uff1a!uri","StatusText: !statusText":"\u72c0\u614b\u6587\u5b57\uff1a!statusText","ResponseText: !responseText":"\u56de\u61c9\u6587\u5b57\uff1a!responseText","ReadyState: !readyState":"ReadyState: !readyState","CustomMessage: !customMessage":"\u81ea\u8a02\u8a0a\u606f\uff1a!customMessage","Please wait...":"\u8acb\u7a0d\u7b49...","The response failed verification so will not be processed.":"\u9a57\u8b49\u5931\u6557\uff0c\u4e2d\u6b62\u7a0b\u5e8f\u3002","Changed":"\u5df2\u8b8a\u66f4","Home":"\u9996\u9801","Next":"\u4e0b\u4e00\u9801","closed":"\u95dc\u9589","Cancel":"\u53d6\u6d88","Disabled":"\u505c\u7528","Enabled":"\u555f\u7528","new":"\u65b0","updated":"\u5df2\u66f4\u65b0","Edit":"\u7de8\u8f2f","Link":"\u9023\u7d50","Image":"\u5716\u7247","Save":"\u5132\u5b58","Open":"\u958b\u555f","Sunday":"\u661f\u671f\u65e5","Monday":"\u661f\u671f\u4e00","Tuesday":"\u661f\u671f\u4e8c","Wednesday":"\u661f\u671f\u4e09","Thursday":"\u661f\u671f\u56db","Friday":"\u661f\u671f\u4e94","Saturday":"\u661f\u671f\u516d","Add":"\u65b0\u589e","Continue":"\u7e7c\u7e8c","Done":"\u5b8c\u6210","OK":"\u78ba\u5b9a","Prev":"\u4e0a\u4e00\u9801","Mon":"\u9031\u4e00","Tue":"\u4e8c","Wed":"\u4e09","Thu":"\u56db","Fri":"\u9031\u4e94","Sat":"\u9031\u516d","Sun":"\u5468\u65e5","May":"5 \u6708","Close":"\u95dc\u9589","Add group":"\u65b0\u589e\u7fa4\u7d44","1 new\u0003@count new":"1 \u7bc7\u65b0\u6587\u7ae0\u0003@count \u7bc7\u65b0\u6587\u7ae0","Show":"\u986f\u793a","Select all rows in this table":"\u9078\u53d6\u8868\u683c\u4e2d\u7684\u6240\u6709\u5217","Deselect all rows in this table":"\u53d6\u6d88\u9078\u53d6\u8868\u683c\u4e2d\u7684\u6240\u6709\u5217","Today":"\u4eca\u5929","Jan":"1 \u6708","Feb":"2 \u6708","Mar":"3 \u6708","Apr":"4 \u6708","Jun":"6 \u6708","Jul":"7 \u6708","Aug":"8 \u6708","Sep":"9 \u6708","Oct":"10 \u6708","Nov":"11 \u6708","Dec":"12 \u6708","Extend":"\u64f4\u5c55","Su":"\u65e5","Mo":"\u4e00","Tu":"\u4e8c","We":"\u4e09","Th":"\u56db","Fr":"\u4e94","Sa":"\u516d","Not published":"\u672a\u767c\u8868","Loading...":"\u8f09\u5165\u4e2d...","Apply":"Apply","Hide":"\u96b1\u85cf","1 new comment\u0003@count new comments":"1 \u5247\u65b0\u56de\u61c9\u0003@count \u5247\u65b0\u56de\u61c9","Unlink":"\u53d6\u6d88\u9023\u7d50","Not promoted":"\u672a\u63a8\u85a6\u5230\u9996\u9801","mm\/dd\/yy":"\u6708\u6708\/\u65e5\u65e5\/\u5e74\u5e74","Quick edit":"\u5feb\u901f\u7de8\u8f2f","button":"\u6309\u9215","Edit Link":"\u7de8\u8f2f\u9023\u7d50","Remove group":"\u522a\u9664\u7fa4\u7d44","By @name on @date":"\u7531 @name \u65bc @date \u767c\u8868","By @name":"\u4f9d\u540d\u7a31","Not in menu":"\u4e0d\u5b58\u5728\u9078\u55ae\u4e2d","Alias: @alias":"\u5225\u540d\uff1a@alias","No alias":"\u6c92\u6709\u8def\u5f91\u5225\u540d","@label":"@label","New revision":"\u5efa\u7acb\u4fee\u8a02\u7248\u672c","Drag to re-order":"\u6293\u53d6\u9805\u76ee\u9032\u884c\u91cd\u65b0\u6392\u5217","Discard changes":"\u6368\u68c4\u8b8a\u66f4","New group":"\u65b0\u7684\u7fa4\u7d44","Lock":"\u9396\u4e0a","Saving":"\u4fdd\u5b58\u4e2d","This permission is inherited from the authenticated user role.":"\u6b64\u6b0a\u9650\u7e7c\u627f\u81ea\u8a3b\u518a\u4f7f\u7528\u8005\u89d2\u8272\u3002","No revision":"\u6c92\u6709\u4fee\u8a02\u7248\u672c","Requires a title":"\u9700\u8981\u586b\u5beb\u6a19\u984c","Not restricted":"\u672a\u53d7\u9650\u5236","(active tab)":"(\u4f5c\u7528\u4e2d\u9801\u7c64)","Restricted to certain pages":"\u53d7\u9650\u65bc\u7279\u5b9a\u9801\u9762","The block cannot be placed in this region.":"\u7121\u6cd5\u628a\u5340\u584a\u653e\u5230\u9019\u500b\u5340\u57df\u3002","Hide summary":"\u96b1\u85cf\u6458\u8981","Edit summary":"\u7de8\u8f2f\u6458\u8981","Don\u0027t display post information":"\u4e0d\u8981\u986f\u793a\u6587\u7ae0\u7684\u5f35\u8cbc\u8cc7\u8a0a","Unlock":"\u89e3\u9396","Collapse":"\u647a\u758a","The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.":"\u9078\u64c7\u7684\u6a94\u6848%filename\u7121\u6cd5\u4e0a\u8f09\u3002\u53ea\u6709\u4ee5\u4e0b\u985e\u578b\u7684\u6a94\u6848\u88ab\u5141\u8a31\uff1a%extensions\u3002","Re-order rows by numerical weight instead of dragging.":"\u900f\u904e\u6578\u5b57\u6b0a\u91cd\u65b9\u5f0f\u4f86\u9032\u884c\u91cd\u65b0\u6392\u5e8f\u3002","Show row weights":"\u986f\u793a\u5217\u6b04\u6b0a\u91cd","Hide row weights":"\u96b1\u85cf\u5217\u6b04\u6b0a\u91cd","Apply (all displays)":"\u5957\u7528 (\u6240\u6709\u986f\u793a)","Apply (this display)":"\u5957\u7528 (\u6b64\u986f\u793a)","Revert to default":"\u6062\u5fa9\u5230\u9810\u8a2d\u503c","You have unsaved changes":"\u60a8\u6709\u5c1a\u672a\u5132\u5b58\u7684\u8b8a\u66f4","Needs to be updated":"\u9700\u8981\u66f4\u65b0","Does not need to be updated":"\u4e0d\u9700\u8981\u66f4\u65b0","Show all columns":"\u986f\u793a\u6240\u6709\u6b04\u4f4d","Show table cells that were hidden to make the table fit within a small screen.":"\u986f\u793a\u96b1\u85cf\u7684\u8868\u683c\u683c\u5b50 (\u70ba\u4e86\u8b93\u8868\u683c\u9069\u61c9\u5c0f\u578b\u87a2\u5e55\u800c\u96b1\u85cf\u7684\u683c\u5b50) \u3002","List additional actions":"\u5217\u51fa\u984d\u5916\u52d5\u4f5c","Flag other translations as outdated":"\u5c07\u5176\u4ed6\u7ffb\u8b6f\u6a19\u793a\u70ba\u904e\u671f\u3002","Do not flag other translations as outdated":"\u4e0d\u8981\u5c07\u5176\u4ed6\u7ffb\u8b6f\u6a19\u793a\u70ba\u904e\u671f\u3002","You have unsaved changes.":"\u60a8\u6709\u5c1a\u672a\u5132\u5b58\u7684\u8b8a\u66f4\u3002","No styles configured":"\u672a\u8a2d\u5b9a\u4efb\u4f55\u6a23\u5f0f","@count styles configured":"\u5df2\u8a2d\u5b9a@count \u6a23\u5f0f","@action @title configuration options":"@action @title \u8a2d\u5b9a\u9078\u9805","Tabbing is no longer constrained by the Contextual module.":"\u9801\u7c64\u529f\u80fd (tabbing) \u4e0d\u518d\u53d7\u5236\u65bc\u60c5\u5883\u6a21\u7d44 (Contextual) \u3002","Tabbing is constrained to a set of @contextualsCount and the edit mode toggle.":"\u9801\u7c64\u529f\u80fd (tabbing) \u53d7\u5236\u65bc @contextualsCount \u4ee5\u53ca\u7de8\u8f2f\u6a21\u5f0f\u5207\u63db\u3002","Press the esc key to exit.":"\u6309\u4e0b ESC \u9375\u96e2\u958b\u3002","!tour_item of !total":"!tour_item \/ !total","Uploads disabled":"\u95dc\u9589\u4e0a\u50b3\u529f\u80fd","Uploads enabled, max size: @size @dimensions":"\u555f\u7528\u4e0a\u50b3\u529f\u80fd, \u6700\u5927: @size @dimensions","Discard changes?":"\u53d6\u6d88\u8b8a\u66f4\uff1f","Hide group names":"\u96b1\u85cf\u7fa4\u7d44\u540d\u7a31","Show group names":"\u986f\u793a\u7fa4\u7d44\u540d\u7a31","Press the down arrow key to create a new row.":"\u6309\u5411\u4e0b\u9375\u589e\u52a0\u65b0\u7684\u4e00\u5217\u3002","@name @type.":"@name @type.","Press the down arrow key to activate.":"\u6309\u5411\u4e0b\u9375\u555f\u52d5\u3002","The \u0022@name\u0022 button is currently enabled.":"\u0022@name\u0022 \u6309\u9215\u5df2\u7d93\u555f\u7528\u3002","The \u0022@name\u0022 button is currently disabled.":"\u0022@name\u0022 \u6309\u9215\u73fe\u5728\u95dc\u9589\u3002","Please provide a name for the button group.":"\u8acb\u63d0\u4f9b\u9019\u500b\u6309\u9215\u7fa4\u7d44\u7684\u540d\u7a31\u3002","Button group name":"\u6309\u9215\u7fa4\u7d44\u540d\u7a31","Editing the name of the new button group in a dialog.":"\u5728\u5c0d\u8a71\u6846\u4e2d\u7de8\u8f2f\u9019\u500b\u65b0\u7684\u6309\u9215\u7fa4\u7d44\u540d\u7a31\u3002","Add a CKEditor button group to the end of this row.":"\u5728\u6700\u5e95\u4e0b\u4e00\u884c\u589e\u52a0\u4e00\u500b CkEditor \u6309\u9215\u7fa4\u7d44\u3002","Change text format?":"\u66f4\u6539\u6587\u5b57\u683c\u5f0f\uff1f","Leave preview?":"\u96e2\u958b\u9810\u89bd\uff1f","Leave preview":"\u96e2\u958b\u9810\u89bd","Hide lower priority columns":"\u96b1\u85cf\u8f03\u4f4e\u6b0a\u91cd\u7684\u6b04","Downloads":"\u4e0b\u8f09","Not customizable":"\u7121\u6cd5\u81ea\u8a02","Colorbox":"Colorbox"},"Long month name":{"January":"\u4e00\u6708","February":"\u4e8c\u6708","March":"\u4e09\u6708","April":"\u56db\u6708","May":"\u4e94\u6708","June":"\u516d\u6708","July":"\u4e03\u6708","August":"\u516b\u6708","September":"\u4e5d\u6708","October":"\u5341\u6708","November":"\u5341\u4e00\u6708","December":"\u5341\u4e8c\u6708"}},"pluralFormula":{"0":0,"1":0,"default":1}};;
/**
 * @file
 * Defines the Drupal JavaScript API.
 */

/**
 * A jQuery object, typically the return value from a `$(selector)` call.
 *
 * Holds an HTMLElement or a collection of HTMLElements.
 *
 * @typedef {object} jQuery
 *
 * @prop {number} length=0
 *   Number of elements contained in the jQuery object.
 */

/**
 * Variable generated by Drupal that holds all translated strings from PHP.
 *
 * Content of this variable is automatically created by Drupal when using the
 * Interface Translation module. It holds the translation of strings used on
 * the page.
 *
 * This variable is used to pass data from the backend to the frontend. Data
 * contained in `drupalSettings` is used during behavior initialization.
 *
 * @global
 *
 * @var {object} drupalTranslations
 */

/**
 * Global Drupal object.
 *
 * All Drupal JavaScript APIs are contained in this namespace.
 *
 * @global
 *
 * @namespace
 */
window.Drupal = {behaviors: {}, locale: {}};

// Class indicating that JavaScript is enabled; used for styling purpose.
document.documentElement.className += ' js';

// Allow other JavaScript libraries to use $.
if (window.jQuery) {
  jQuery.noConflict();
}

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it in an anonymous closure.
(function (domready, Drupal, drupalSettings, drupalTranslations) {

  'use strict';

  /**
   * Helper to rethrow errors asynchronously.
   *
   * This way Errors bubbles up outside of the original callstack, making it
   * easier to debug errors in the browser.
   *
   * @param {Error|string} error
   *   The error to be thrown.
   */
  Drupal.throwError = function (error) {
    setTimeout(function () { throw error; }, 0);
  };

  /**
   * Custom error thrown after attach/detach if one or more behaviors failed.
   * Initializes the JavaScript behaviors for page loads and Ajax requests.
   *
   * @callback Drupal~behaviorAttach
   *
   * @param {HTMLDocument|HTMLElement} context
   *   An element to detach behaviors from.
   * @param {?object} settings
   *   An object containing settings for the current context. It is rarely used.
   *
   * @see Drupal.attachBehaviors
   */

  /**
   * Reverts and cleans up JavaScript behavior initialization.
   *
   * @callback Drupal~behaviorDetach
   *
   * @param {HTMLDocument|HTMLElement} context
   *   An element to attach behaviors to.
   * @param {object} settings
   *   An object containing settings for the current context.
   * @param {string} trigger
   *   One of `'unload'`, `'move'`, or `'serialize'`.
   *
   * @see Drupal.detachBehaviors
   */

  /**
   * @typedef {object} Drupal~behavior
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Function run on page load and after an Ajax call.
   * @prop {Drupal~behaviorDetach} detach
   *   Function run when content is serialized or removed from the page.
   */

  /**
   * Holds all initialization methods.
   *
   * @namespace Drupal.behaviors
   *
   * @type {Object.<string, Drupal~behavior>}
   */

  /**
   * Defines a behavior to be run during attach and detach phases.
   *
   * Attaches all registered behaviors to a page element.
   *
   * Behaviors are event-triggered actions that attach to page elements,
   * enhancing default non-JavaScript UIs. Behaviors are registered in the
   * {@link Drupal.behaviors} object using the method 'attach' and optionally
   * also 'detach'.
   *
   * {@link Drupal.attachBehaviors} is added below to the `jQuery.ready` event
   * and therefore runs on initial page load. Developers implementing Ajax in
   * their solutions should also call this function after new page content has
   * been loaded, feeding in an element to be processed, in order to attach all
   * behaviors to the new content.
   *
   * Behaviors should use `var elements =
   * $(context).find(selector).once('behavior-name');` to ensure the behavior is
   * attached only once to a given element. (Doing so enables the reprocessing
   * of given elements, which may be needed on occasion despite the ability to
   * limit behavior attachment to a particular element.)
   *
   * @example
   * Drupal.behaviors.behaviorName = {
   *   attach: function (context, settings) {
   *     // ...
   *   },
   *   detach: function (context, settings, trigger) {
   *     // ...
   *   }
   * };
   *
   * @param {HTMLDocument|HTMLElement} [context=document]
   *   An element to attach behaviors to.
   * @param {object} [settings=drupalSettings]
   *   An object containing settings for the current context. If none is given,
   *   the global {@link drupalSettings} object is used.
   *
   * @see Drupal~behaviorAttach
   * @see Drupal.detachBehaviors
   *
   * @throws {Drupal~DrupalBehaviorError}
   */
  Drupal.attachBehaviors = function (context, settings) {
    context = context || document;
    settings = settings || drupalSettings;
    var behaviors = Drupal.behaviors;
    // Execute all of them.
    for (var i in behaviors) {
      if (behaviors.hasOwnProperty(i) && typeof behaviors[i].attach === 'function') {
        // Don't stop the execution of behaviors in case of an error.
        try {
          behaviors[i].attach(context, settings);
        }
        catch (e) {
          Drupal.throwError(e);
        }
      }
    }
  };

  // Attach all behaviors.
  domready(function () { Drupal.attachBehaviors(document, drupalSettings); });

  /**
   * Detaches registered behaviors from a page element.
   *
   * Developers implementing Ajax in their solutions should call this function
   * before page content is about to be removed, feeding in an element to be
   * processed, in order to allow special behaviors to detach from the content.
   *
   * Such implementations should use `.findOnce()` and `.removeOnce()` to find
   * elements with their corresponding `Drupal.behaviors.behaviorName.attach`
   * implementation, i.e. `.removeOnce('behaviorName')`, to ensure the behavior
   * is detached only from previously processed elements.
   *
   * @param {HTMLDocument|HTMLElement} [context=document]
   *   An element to detach behaviors from.
   * @param {object} [settings=drupalSettings]
   *   An object containing settings for the current context. If none given,
   *   the global {@link drupalSettings} object is used.
   * @param {string} [trigger='unload']
   *   A string containing what's causing the behaviors to be detached. The
   *   possible triggers are:
   *   - `'unload'`: The context element is being removed from the DOM.
   *   - `'move'`: The element is about to be moved within the DOM (for example,
   *     during a tabledrag row swap). After the move is completed,
   *     {@link Drupal.attachBehaviors} is called, so that the behavior can undo
   *     whatever it did in response to the move. Many behaviors won't need to
   *     do anything simply in response to the element being moved, but because
   *     IFRAME elements reload their "src" when being moved within the DOM,
   *     behaviors bound to IFRAME elements (like WYSIWYG editors) may need to
   *     take some action.
   *   - `'serialize'`: When an Ajax form is submitted, this is called with the
   *     form as the context. This provides every behavior within the form an
   *     opportunity to ensure that the field elements have correct content
   *     in them before the form is serialized. The canonical use-case is so
   *     that WYSIWYG editors can update the hidden textarea to which they are
   *     bound.
   *
   * @throws {Drupal~DrupalBehaviorError}
   *
   * @see Drupal~behaviorDetach
   * @see Drupal.attachBehaviors
   */
  Drupal.detachBehaviors = function (context, settings, trigger) {
    context = context || document;
    settings = settings || drupalSettings;
    trigger = trigger || 'unload';
    var behaviors = Drupal.behaviors;
    // Execute all of them.
    for (var i in behaviors) {
      if (behaviors.hasOwnProperty(i) && typeof behaviors[i].detach === 'function') {
        // Don't stop the execution of behaviors in case of an error.
        try {
          behaviors[i].detach(context, settings, trigger);
        }
        catch (e) {
          Drupal.throwError(e);
        }
      }
    }
  };

  /**
   * Encodes special characters in a plain-text string for display as HTML.
   *
   * @param {string} str
   *   The string to be encoded.
   *
   * @return {string}
   *   The encoded string.
   *
   * @ingroup sanitization
   */
  Drupal.checkPlain = function (str) {
    str = str.toString()
      .replace(/&/g, '&amp;')
      .replace(/"/g, '&quot;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;');
    return str;
  };

  /**
   * Replaces placeholders with sanitized values in a string.
   *
   * @param {string} str
   *   A string with placeholders.
   * @param {object} args
   *   An object of replacements pairs to make. Incidences of any key in this
   *   array are replaced with the corresponding value. Based on the first
   *   character of the key, the value is escaped and/or themed:
   *    - `'!variable'`: inserted as is.
   *    - `'@variable'`: escape plain text to HTML ({@link Drupal.checkPlain}).
   *    - `'%variable'`: escape text and theme as a placeholder for user-
   *      submitted content ({@link Drupal.checkPlain} +
   *      `{@link Drupal.theme}('placeholder')`).
   *
   * @return {string}
   *   The formatted string.
   *
   * @see Drupal.t
   */
  Drupal.formatString = function (str, args) {
    // Keep args intact.
    var processedArgs = {};
    // Transform arguments before inserting them.
    for (var key in args) {
      if (args.hasOwnProperty(key)) {
        switch (key.charAt(0)) {
          // Escaped only.
          case '@':
            processedArgs[key] = Drupal.checkPlain(args[key]);
            break;

          // Pass-through.
          case '!':
            processedArgs[key] = args[key];
            break;

          // Escaped and placeholder.
          default:
            processedArgs[key] = Drupal.theme('placeholder', args[key]);
            break;
        }
      }
    }

    return Drupal.stringReplace(str, processedArgs, null);
  };

  /**
   * Replaces substring.
   *
   * The longest keys will be tried first. Once a substring has been replaced,
   * its new value will not be searched again.
   *
   * @param {string} str
   *   A string with placeholders.
   * @param {object} args
   *   Key-value pairs.
   * @param {Array|null} keys
   *   Array of keys from `args`. Internal use only.
   *
   * @return {string}
   *   The replaced string.
   */
  Drupal.stringReplace = function (str, args, keys) {
    if (str.length === 0) {
      return str;
    }

    // If the array of keys is not passed then collect the keys from the args.
    if (!Array.isArray(keys)) {
      keys = [];
      for (var k in args) {
        if (args.hasOwnProperty(k)) {
          keys.push(k);
        }
      }

      // Order the keys by the character length. The shortest one is the first.
      keys.sort(function (a, b) { return a.length - b.length; });
    }

    if (keys.length === 0) {
      return str;
    }

    // Take next longest one from the end.
    var key = keys.pop();
    var fragments = str.split(key);

    if (keys.length) {
      for (var i = 0; i < fragments.length; i++) {
        // Process each fragment with a copy of remaining keys.
        fragments[i] = Drupal.stringReplace(fragments[i], args, keys.slice(0));
      }
    }

    return fragments.join(args[key]);
  };

  /**
   * Translates strings to the page language, or a given language.
   *
   * See the documentation of the server-side t() function for further details.
   *
   * @param {string} str
   *   A string containing the English text to translate.
   * @param {Object.<string, string>} [args]
   *   An object of replacements pairs to make after translation. Incidences
   *   of any key in this array are replaced with the corresponding value.
   *   See {@link Drupal.formatString}.
   * @param {object} [options]
   *   Additional options for translation.
   * @param {string} [options.context='']
   *   The context the source string belongs to.
   *
   * @return {string}
   *   The formatted string.
   *   The translated string.
   */
  Drupal.t = function (str, args, options) {
    options = options || {};
    options.context = options.context || '';

    // Fetch the localized version of the string.
    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.strings && drupalTranslations.strings[options.context] && drupalTranslations.strings[options.context][str]) {
      str = drupalTranslations.strings[options.context][str];
    }

    if (args) {
      str = Drupal.formatString(str, args);
    }
    return str;
  };

  /**
   * Returns the URL to a Drupal page.
   *
   * @param {string} path
   *   Drupal path to transform to URL.
   *
   * @return {string}
   *   The full URL.
   */
  Drupal.url = function (path) {
    return drupalSettings.path.baseUrl + drupalSettings.path.pathPrefix + path;
  };

  /**
   * Returns the passed in URL as an absolute URL.
   *
   * @param {string} url
   *   The URL string to be normalized to an absolute URL.
   *
   * @return {string}
   *   The normalized, absolute URL.
   *
   * @see https://github.com/angular/angular.js/blob/v1.4.4/src/ng/urlUtils.js
   * @see https://grack.com/blog/2009/11/17/absolutizing-url-in-javascript
   * @see https://github.com/jquery/jquery-ui/blob/1.11.4/ui/tabs.js#L53
   */
  Drupal.url.toAbsolute = function (url) {
    var urlParsingNode = document.createElement('a');

    // Decode the URL first; this is required by IE <= 6. Decoding non-UTF-8
    // strings may throw an exception.
    try {
      url = decodeURIComponent(url);
    }
    catch (e) {
      // Empty.
    }

    urlParsingNode.setAttribute('href', url);

    // IE <= 7 normalizes the URL when assigned to the anchor node similar to
    // the other browsers.
    return urlParsingNode.cloneNode(false).href;
  };

  /**
   * Returns true if the URL is within Drupal's base path.
   *
   * @param {string} url
   *   The URL string to be tested.
   *
   * @return {bool}
   *   `true` if local.
   *
   * @see https://github.com/jquery/jquery-ui/blob/1.11.4/ui/tabs.js#L58
   */
  Drupal.url.isLocal = function (url) {
    // Always use browser-derived absolute URLs in the comparison, to avoid
    // attempts to break out of the base path using directory traversal.
    var absoluteUrl = Drupal.url.toAbsolute(url);
    var protocol = location.protocol;

    // Consider URLs that match this site's base URL but use HTTPS instead of HTTP
    // as local as well.
    if (protocol === 'http:' && absoluteUrl.indexOf('https:') === 0) {
      protocol = 'https:';
    }
    var baseUrl = protocol + '//' + location.host + drupalSettings.path.baseUrl.slice(0, -1);

    // Decoding non-UTF-8 strings may throw an exception.
    try {
      absoluteUrl = decodeURIComponent(absoluteUrl);
    }
    catch (e) {
      // Empty.
    }
    try {
      baseUrl = decodeURIComponent(baseUrl);
    }
    catch (e) {
      // Empty.
    }

    // The given URL matches the site's base URL, or has a path under the site's
    // base URL.
    return absoluteUrl === baseUrl || absoluteUrl.indexOf(baseUrl + '/') === 0;
  };

  /**
   * Formats a string containing a count of items.
   *
   * This function ensures that the string is pluralized correctly. Since
   * {@link Drupal.t} is called by this function, make sure not to pass
   * already-localized strings to it.
   *
   * See the documentation of the server-side
   * \Drupal\Core\StringTranslation\TranslationInterface::formatPlural()
   * function for more details.
   *
   * @param {number} count
   *   The item count to display.
   * @param {string} singular
   *   The string for the singular case. Please make sure it is clear this is
   *   singular, to ease translation (e.g. use "1 new comment" instead of "1
   *   new"). Do not use @count in the singular string.
   * @param {string} plural
   *   The string for the plural case. Please make sure it is clear this is
   *   plural, to ease translation. Use @count in place of the item count, as in
   *   "@count new comments".
   * @param {object} [args]
   *   An object of replacements pairs to make after translation. Incidences
   *   of any key in this array are replaced with the corresponding value.
   *   See {@link Drupal.formatString}.
   *   Note that you do not need to include @count in this array.
   *   This replacement is done automatically for the plural case.
   * @param {object} [options]
   *   The options to pass to the {@link Drupal.t} function.
   *
   * @return {string}
   *   A translated string.
   */
  Drupal.formatPlural = function (count, singular, plural, args, options) {
    args = args || {};
    args['@count'] = count;

    var pluralDelimiter = drupalSettings.pluralDelimiter;
    var translations = Drupal.t(singular + pluralDelimiter + plural, args, options).split(pluralDelimiter);
    var index = 0;

    // Determine the index of the plural form.
    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.pluralFormula) {
      index = count in drupalTranslations.pluralFormula ? drupalTranslations.pluralFormula[count] : drupalTranslations.pluralFormula['default'];
    }
    else if (args['@count'] !== 1) {
      index = 1;
    }

    return translations[index];
  };

  /**
   * Encodes a Drupal path for use in a URL.
   *
   * For aesthetic reasons slashes are not escaped.
   *
   * @param {string} item
   *   Unencoded path.
   *
   * @return {string}
   *   The encoded path.
   */
  Drupal.encodePath = function (item) {
    return window.encodeURIComponent(item).replace(/%2F/g, '/');
  };

  /**
   * Generates the themed representation of a Drupal object.
   *
   * All requests for themed output must go through this function. It examines
   * the request and routes it to the appropriate theme function. If the current
   * theme does not provide an override function, the generic theme function is
   * called.
   *
   * @example
   * <caption>To retrieve the HTML for text that should be emphasized and
   * displayed as a placeholder inside a sentence.</caption>
   * Drupal.theme('placeholder', text);
   *
   * @namespace
   *
   * @param {function} func
   *   The name of the theme function to call.
   * @param {...args}
   *   Additional arguments to pass along to the theme function.
   *
   * @return {string|object|HTMLElement|jQuery}
   *   Any data the theme function returns. This could be a plain HTML string,
   *   but also a complex object.
   */
  Drupal.theme = function (func) {
    var args = Array.prototype.slice.apply(arguments, [1]);
    if (func in Drupal.theme) {
      return Drupal.theme[func].apply(this, args);
    }
  };

  /**
   * Formats text for emphasized display in a placeholder inside a sentence.
   *
   * @param {string} str
   *   The text to format (plain-text).
   *
   * @return {string}
   *   The formatted text (html).
   */
  Drupal.theme.placeholder = function (str) {
    return '<em class="placeholder">' + Drupal.checkPlain(str) + '</em>';
  };

})(domready, Drupal, window.drupalSettings, window.drupalTranslations);
;
/**
 * @file
 * Attaches behaviors for Drupal's active link marking.
 */

(function (Drupal, drupalSettings) {

  'use strict';

  /**
   * Append is-active class.
   *
   * The link is only active if its path corresponds to the current path, the
   * language of the linked path is equal to the current language, and if the
   * query parameters of the link equal those of the current request, since the
   * same request with different query parameters may yield a different page
   * (e.g. pagers, exposed View filters).
   *
   * Does not discriminate based on element type, so allows you to set the
   * is-active class on any element: a, li…
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.activeLinks = {
    attach: function (context) {
      // Start by finding all potentially active links.
      var path = drupalSettings.path;
      var queryString = JSON.stringify(path.currentQuery);
      var querySelector = path.currentQuery ? "[data-drupal-link-query='" + queryString + "']" : ':not([data-drupal-link-query])';
      var originalSelectors = ['[data-drupal-link-system-path="' + path.currentPath + '"]'];
      var selectors;

      // If this is the front page, we have to check for the <front> path as
      // well.
      if (path.isFront) {
        originalSelectors.push('[data-drupal-link-system-path="<front>"]');
      }

      // Add language filtering.
      selectors = [].concat(
        // Links without any hreflang attributes (most of them).
        originalSelectors.map(function (selector) { return selector + ':not([hreflang])'; }),
        // Links with hreflang equals to the current language.
        originalSelectors.map(function (selector) { return selector + '[hreflang="' + path.currentLanguage + '"]'; })
      );

      // Add query string selector for pagers, exposed filters.
      selectors = selectors.map(function (current) { return current + querySelector; });

      // Query the DOM.
      var activeLinks = context.querySelectorAll(selectors.join(','));
      var il = activeLinks.length;
      for (var i = 0; i < il; i++) {
        activeLinks[i].classList.add('is-active');
      }
    },
    detach: function (context, settings, trigger) {
      if (trigger === 'unload') {
        var activeLinks = context.querySelectorAll('[data-drupal-link-system-path].is-active');
        var il = activeLinks.length;
        for (var i = 0; i < il; i++) {
          activeLinks[i].classList.remove('is-active');
        }
      }
    }
  };

})(Drupal, drupalSettings);
;
(function () {

  'use strict';

  function findActiveStep(steps) {
    for (var i = 0; i < steps.length; i++) {
      if (steps[i].className === 'is-active') {
        return i + 1;
      }
    }
    // The final "Finished" step is never "active".
    if (steps[steps.length - 1].className === 'done') {
      return steps.length;
    }
    return 0;
  }

  function installStepsSetup() {
    var steps = document.querySelectorAll('.task-list li');
    if (steps.length) {
      var header = document.querySelector('header[role="banner"]');
      var stepIndicator = document.createElement('div');
      stepIndicator.className = 'step-indicator';
      stepIndicator.innerHTML = findActiveStep(steps) + '/' + steps.length;
      header.appendChild(stepIndicator);
    }
  }

  if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', installStepsSetup);
  }

})();
;