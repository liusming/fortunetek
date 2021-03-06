<?php

/* themes/fortune_theme_/templates/navigation/menu.html.twig */
class __TwigTemplate_276e527a64bedab8599e2d4a0036195335cdbfb671c4817881b0d55a9f41c8b6 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 34, "for" => 45, "spaceless" => 56);
        $filters = array("clean_class" => 38, "render" => 52);
        $functions = array("cycle" => 43, "link" => 58);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for', 'spaceless'),
                array('clean_class', 'render'),
                array('cycle', 'link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, (isset($context["menu_name"]) ? $context["menu_name"] : null))));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 33
                    echo "      ";
                    // line 34
                    $context["menu_classes"] = array(0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((                    // line 38
(isset($context["menu_name"]) ? $context["menu_name"] : null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass((isset($context["menu_name"]) ? $context["menu_name"] : null)))) : ("")));
                    // line 41
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 43
                    echo "      <ul class=\"menu ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["menu_level"]) ? $context["menu_level"] : null)), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("menu-level-" . ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)), "html", null, true));
                    echo "\">
    ";
                }
                // line 45
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        ";
                    // line 47
                    $context["item_classes"] = array(0 => "menu__item", 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", array())) ? ("menu__item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 50
$context["item"], "is_collapsed", array())) ? ("menu__item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", array())) ? ("menu__item--active-trail") : ("")), 4 => ("menu-title-" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('drupal_core')->renderVar($this->getAttribute(                    // line 52
$context["item"], "title", array())))), 5 => (($this->getAttribute(                    // line 53
$context["item"], "original_link", array())) ? (("menu-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute($context["item"], "original_link", array()), "getPluginId", array(), "method")))) : ("")));
                    // line 56
                    echo "        ";
                    ob_start();
                    // line 57
                    echo "          <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
            ";
                    // line 58
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
            ";
                    // line 59
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 60
                        echo "              ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
            ";
                    }
                    // line 62
                    echo "          </li>
        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 64
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  136 => 64,  132 => 62,  126 => 60,  124 => 59,  120 => 58,  115 => 57,  112 => 56,  110 => 53,  109 => 52,  108 => 51,  107 => 50,  106 => 49,  105 => 47,  103 => 46,  98 => 45,  90 => 43,  84 => 41,  82 => 38,  81 => 34,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a menu.*/
/*  * AT adds extra classes including menu-level, and odd*/
/*  * even classes for granular theming of nested menus where*/
/*  * nth-child() or other pseudo classes are tricky.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0, menu_name) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, menu_name) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       {%*/
/*         set menu_classes = [*/
/*           'menu',*/
/*           'odd',*/
/*           'menu-level-1',*/
/*           menu_name ? 'menu-name--' ~ menu_name|clean_class,*/
/*         ]*/
/*       %}*/
/*       <ul{{ attributes.addClass(menu_classes) }}>*/
/*     {% else %}*/
/*       <ul class="menu {{ cycle(["odd", "even"], menu_level) }} {{ 'menu-level-' ~ (menu_level + 1) }}">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         {%*/
/*           set item_classes = [*/
/*             'menu__item',*/
/*             item.is_expanded ? 'menu__item--expanded',*/
/*             item.is_collapsed ? 'menu__item--collapsed',*/
/*             item.in_active_trail ? 'menu__item--active-trail',*/
/*             'menu-title-' ~ item.title|render|clean_class,*/
/*             item.original_link ? 'menu-plugin-id--' ~ item.original_link.getPluginId()|clean_class,*/
/*           ]*/
/*         %}*/
/*         {% spaceless %}*/
/*           <li{{ item.attributes.addClass(item_classes) }}>*/
/*             {{ link(item.title, item.url) }}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endspaceless %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
