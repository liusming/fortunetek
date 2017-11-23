<?php

/* themes/fortune_theme_/templates/layout/html.html.twig */
class __TwigTemplate_d5825e211cd47c790a956b8413a13ed80607a182396db93bdb42353a68412c62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 46, "if" => 53);
        $filters = array("raw" => 70, "safe_join" => 71, "clean_class" => 78, "t" => 88);
        $functions = array("attach_library" => 39);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('raw', 'safe_join', 'clean_class', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.fastclick_initialize"), "html", null, true));
        echo "
";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.breakpoints"), "html", null, true));
        echo "
";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/fontfaceobserver")), "html", null, true));
        echo "
";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/base")), "html", null, true));
        echo "
";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary(($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()) . "/color")), "html", null, true));
        echo "
<!DOCTYPE html>
";
        // line 46
        $context["html_classes"] = array(0 => "no-js", 1 => "adaptivetheme");
        // line 51
        echo "<html";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "addClass", array(0 => (isset($context["html_classes"]) ? $context["html_classes"] : null)), "method"), "html", null, true));
        echo ">
  <head>
    ";
        // line 53
        if (((isset($context["touch_icons"]) ? $context["touch_icons"] : null) == true)) {
            // line 54
            echo "      ";
            if ((isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null)) {
                // line 55
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"152x152\" />
      ";
            }
            // line 57
            echo "      ";
            if ((isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null)) {
                // line 58
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"120x120\" />
      ";
            }
            // line 60
            echo "      ";
            if ((isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null)) {
                // line 61
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"76x76\" />
      ";
            }
            // line 63
            echo "      ";
            if ((isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null)) {
                // line 64
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true));
                echo "\" sizes=\"60x60\" />
      ";
            }
            // line 66
            echo "      ";
            if ((isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null)) {
                // line 67
                echo "        <link href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null), "html", null, true));
                echo "\" rel=\"shortcut icon\" />
      ";
            }
            // line 69
            echo "    ";
        }
        // line 70
        echo "    <head-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </head>
  ";
        // line 76
        $context["body_classes"] = array(0 => ((        // line 77
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 78
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => (($this->getAttribute(        // line 79
(isset($context["path_info"]) ? $context["path_info"] : null), "args", array())) ? (("path-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "args", array()))) : ("")), 3 => (($this->getAttribute(        // line 80
(isset($context["path_info"]) ? $context["path_info"] : null), "query", array())) ? (("path-query-" . $this->getAttribute((isset($context["path_info"]) ? $context["path_info"] : null), "query", array()))) : ("")), 4 => ((        // line 81
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 5 => (($this->getAttribute(        // line 82
(isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())))) : ("")), 6 => (($this->getAttribute(        // line 83
(isset($context["theme"]) ? $context["theme"] : null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())))) : ("")), 7 => ((        // line 84
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 87
        echo "  <body";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skip_link_target"]) ? $context["skip_link_target"] : null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 92,  177 => 91,  173 => 90,  169 => 89,  163 => 88,  158 => 87,  156 => 84,  155 => 83,  154 => 82,  153 => 81,  152 => 80,  151 => 79,  150 => 78,  149 => 77,  148 => 76,  143 => 73,  139 => 72,  135 => 71,  130 => 70,  127 => 69,  121 => 67,  118 => 66,  110 => 64,  107 => 63,  99 => 61,  96 => 60,  88 => 58,  85 => 57,  77 => 55,  74 => 54,  72 => 53,  66 => 51,  64 => 46,  59 => 43,  55 => 42,  51 => 41,  47 => 40,  43 => 39,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  * - head_title: A modified version of the page title, for use in the TITLE tag.*/
/*  * - head_title_array: List of text elements that make up the head_title*/
/*  *   variable. May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - touch_icons: bool, true if touch icons extension is enabled.*/
/*  * - touch_rel: string, defaults to apple-touch-icon, or apple-touch-icon-precomposed*/
/*  *   if set in appearance settings.*/
/*  * - touch_icon_ipad_retina: path to ipad retina touch icon.*/
/*  * - touch_icon_iphone_retina: path to iphone retina touch icon.*/
/*  * - touch_icon_ipad: path to ipad touch icon.*/
/*  * - touch_icon_default: path to old iphone touch icon.*/
/*  * - touch_icon_nokia: path to old school nokia touch icon.*/
/*  * - googlefonts_url: URL as supplied by the Google fonts wizard.*/
/*  * - typekit_id: Typekit ID as supplied by the Typekit embed wizard.*/
/*  * - theme: List (array) with two or more items, at least:*/
/*  *   - name: The name of the theme.*/
/*  *   - path: The path to the active theme.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('at_core/at.fastclick_initialize') }}*/
/* {{ attach_library('at_core/at.breakpoints') }}*/
/* {{ attach_library(theme.name ~ '/fontfaceobserver') }}*/
/* {{ attach_library(theme.name ~ '/base') }}*/
/* {{ attach_library(theme.name ~ '/color') }}*/
/* <!DOCTYPE html>*/
/* {%*/
/*   set html_classes = [*/
/*     'no-js',*/
/*     'adaptivetheme',*/
/*   ]*/
/* %}*/
/* <html{{ html_attributes.addClass(html_classes) }}>*/
/*   <head>*/
/*     {% if touch_icons == true %}*/
/*       {% if touch_icon_ipad_retina %}*/
/*         <link href="{{ touch_icon_ipad_retina }}" rel="{{ touch_rel }}" sizes="152x152" />*/
/*       {% endif %}*/
/*       {% if touch_icon_iphone_retina %}*/
/*         <link href="{{ touch_icon_iphone_retina }}" rel="{{ touch_rel }}" sizes="120x120" />*/
/*       {% endif %}*/
/*       {% if touch_icon_ipad %}*/
/*         <link href="{{ touch_icon_ipad }}" rel="{{ touch_rel }}" sizes="76x76" />*/
/*       {% endif %}*/
/*       {% if touch_icon_default %}*/
/*         <link href="{{ touch_icon_default }}" rel="{{ touch_rel }}" sizes="60x60" />*/
/*       {% endif %}*/
/*       {% if touch_icon_nokia %}*/
/*         <link href="{{ touch_icon_nokia }}" rel="shortcut icon" />*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   {%*/
/*     set body_classes = [*/
/*       logged_in ? 'user-logged-in',*/
/*       not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*       path_info.args ? 'path-' ~ path_info.args,*/
/*       path_info.query ? 'path-query-' ~ path_info.query,*/
/*       node_type ? 'node--type-' ~ node_type|clean_class,*/
/*       head_title_array.name ? 'site-name--' ~ head_title_array.name|clean_class,*/
/*       theme.name ? 'theme-name--' ~ theme.name|clean_class,*/
/*       db_offline ? 'db-offline',*/
/*     ]*/
/*   %}*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*     <a href="{{ skip_link_target }}" class="visually-hidden focusable skip-link">{{ 'Skip to main content'|t }}</a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
