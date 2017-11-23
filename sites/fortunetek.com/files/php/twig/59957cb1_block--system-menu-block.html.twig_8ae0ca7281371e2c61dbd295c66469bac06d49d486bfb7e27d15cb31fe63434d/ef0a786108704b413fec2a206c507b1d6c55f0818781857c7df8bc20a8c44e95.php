<?php

/* themes/fortune_theme_/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_18148886443aeac0f74e560c626a6b2bedd4f704a9ca38d942a3e54e91fc941b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 30, "if" => 44, "block" => 53);
        $filters = array("clean_class" => 33, "clean_id" => 35);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id'),
                array()
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

        // line 28
        echo "
";
        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 33
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 34
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))), 4 => ("block-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 35
(isset($context["attributes"]) ? $context["attributes"] : null), "id", array()))), 5 => ((        // line 36
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 39
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 40
        echo "<nav";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">
  <div class=\"block__inner block-menu__inner\">

    ";
        // line 44
        echo "    ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 45
            echo "      ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <h2";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title", 1 => "block-menu__title"), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo "><span>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</span></h2>
    ";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 53
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
  </div>
</nav>
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "      <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-menu__content"), "method"), "html", null, true));
        echo ">
        ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 55,  104 => 54,  101 => 53,  94 => 58,  91 => 53,  86 => 50,  80 => 49,  76 => 48,  73 => 47,  70 => 46,  67 => 45,  64 => 44,  55 => 40,  53 => 39,  51 => 36,  50 => 35,  49 => 34,  48 => 33,  47 => 30,  44 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme override to display a menu block.*/
/*  **/
/*  * Available variables: A*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* */
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-menu',*/
/*     'block-config-provider--' ~ configuration.provider|clean_class,*/
/*     'block-derivative-plugin--' ~ derivative_plugin_id|clean_class,*/
/*     'block-id--' ~ attributes.id|clean_id,*/
/*     label ? 'has-title'*/
/*   ]*/
/* %}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav{{ attributes.addClass(classes) }} role="navigation" aria-labelledby="{{ heading_id }}">*/
/*   <div class="block__inner block-menu__inner">*/
/* */
/*     {# Label. If not displayed, we still provide it for screen readers. #}*/
/*     {% if not configuration.label_display %}*/
/*       {% set title_attributes = title_attributes.addClass('visually-hidden') %}*/
/*     {% endif %}*/
/* */
/*     {{ title_prefix }}*/
/*     <h2{{ title_attributes.addClass('block__title', 'block-menu__title').setAttribute('id', heading_id) }}><span>{{ configuration.label }}</span></h2>*/
/*     {{ title_suffix }}*/
/* */
/*     {# Menu. #}*/
/*     {% block content %}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-menu__content') }}>*/
/*         {{ content }}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </nav>*/
/* */
