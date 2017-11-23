<?php

/* themes/fortune_theme_/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_3d2c34c2ba4ef09fce2a0df0a954beee82fadf7f584c641873cb71b24c098ecc extends Twig_Template
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
        $tags = array("if" => 12, "set" => 15, "for" => 32);
        $filters = array("t" => 29, "length" => 33, "slice" => 33);
        $functions = array("attach_library" => 13);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('t', 'length', 'slice'),
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

        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.responsivelists"), "html", null, true));
            echo "
  ";
            // line 15
            $context["classes"] = array(0 => "breadcrumb", 1 => (( !            // line 17
(isset($context["breadcrumb_title_hidden"]) ? $context["breadcrumb_title_hidden"] : null)) ? ("has-title") : ("")));
            // line 20
            echo "  ";
            // line 21
            $context["title_classes"] = array(0 => ((            // line 22
(isset($context["breadcrumb_title_hidden"]) ? $context["breadcrumb_title_hidden"] : null)) ? ("visually-hidden") : ("")), 1 => "breadcrumb__title");
            // line 26
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <nav class=\"is-responsive is-horizontal\" role=\"navigation\" aria-labelledby=\"system-breadcrumb-title\" data-at-responsive-list>

      <h2";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "setAttribute", array(0 => "id", 1 => "system-breadcrumb-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("You are here:")));
            echo "</h2>

      <ol class=\"breadcrumb__list is-responsive__list\">
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "        ";
                $context["item_text"] = (((twig_length_filter($this->env, $this->getAttribute($context["item"], "text", array())) > 32)) ? ((twig_slice($this->env, $this->getAttribute($context["item"], "text", array()), 0, 32) . "...")) : ($this->getAttribute($context["item"], "text", array())));
                // line 34
                echo "        <li class=\"breadcrumb__list-item is-responsive__item\">
          ";
                // line 35
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 36
                    echo "            <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\" class=\"breadcrumb__link\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_text"]) ? $context["item_text"] : null), "html", null, true));
                    echo "</a>
          ";
                } else {
                    // line 38
                    echo "            <span class=\"breadcrumb__link\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_text"]) ? $context["item_text"] : null), "html", null, true));
                    echo "</span>
          ";
                }
                // line 40
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </ol>

    </nav>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  99 => 40,  93 => 38,  85 => 36,  83 => 35,  80 => 34,  77 => 33,  73 => 32,  65 => 29,  58 => 26,  56 => 22,  55 => 21,  53 => 20,  51 => 17,  50 => 15,  45 => 13,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   {{ attach_library('at_core/at.responsivelists') }}*/
/*   {%*/
/*     set classes = [*/
/*       'breadcrumb',*/
/*       not breadcrumb_title_hidden ? 'has-title',*/
/*     ]*/
/*   %}*/
/*   {%*/
/*     set title_classes = [*/
/*       breadcrumb_title_hidden ? 'visually-hidden',*/
/*       'breadcrumb__title',*/
/*     ]*/
/*   %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     <nav class="is-responsive is-horizontal" role="navigation" aria-labelledby="system-breadcrumb-title" data-at-responsive-list>*/
/* */
/*       <h2{{ title_attributes.addClass(title_classes).setAttribute('id', 'system-breadcrumb-title')}}>{{ 'You are here:'|t }}</h2>*/
/* */
/*       <ol class="breadcrumb__list is-responsive__list">*/
/*       {% for item in breadcrumb %}*/
/*         {% set item_text = item.text|length > 32 ? item.text|slice(0, 32) ~ '...' : item.text %}*/
/*         <li class="breadcrumb__list-item is-responsive__item">*/
/*           {% if item.url %}*/
/*             <a href="{{ item.url }}" class="breadcrumb__link">{{ item_text }}</a>*/
/*           {% else %}*/
/*             <span class="breadcrumb__link">{{ item_text }}</span>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       </ol>*/
/* */
/*     </nav>*/
/*   </div>*/
/* {% endif %}*/
/* */
