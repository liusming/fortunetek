<?php

/* themes/fortune_theme_/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_548203c060f3b7fca7d629ae79d30f3463fcb40b694f7f39189b92814c88d46c extends Twig_Template
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
        $tags = array("set" => 44, "block" => 70);
        $filters = array("clean_class" => 46, "clean_id" => 48);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
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

        // line 44
        $context["classes"] = array(0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 46
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("rm-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 47
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))), 3 => ("rm-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 48
(isset($context["attributes"]) ? $context["attributes"] : null), "id", array()))), 4 => ((        // line 49
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")), 5 => "js-hide");
        // line 53
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 54
        echo "<nav";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">
  <div class=\"rm-block__inner\">

    ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <div";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "rm-toggle"), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo ">
      ";
        // line 59
        $context["rm_label_class"] = (((isset($context["label"]) ? $context["label"] : null)) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 60
        echo "      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\" aria-lable=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "\">
        <svg class=\"rm-toggle__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
          <path d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
        </svg>
        <span class=\"";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rm_label_class"]) ? $context["rm_label_class"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</span>
      </button>
    </div>
    ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 70
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
  </div>
</nav>
";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "      <div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 72,  105 => 71,  102 => 70,  95 => 75,  92 => 70,  87 => 67,  79 => 64,  71 => 60,  69 => 59,  65 => 58,  61 => 57,  52 => 54,  50 => 53,  48 => 49,  47 => 48,  46 => 47,  45 => 46,  44 => 44,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for a responisve menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - module: The module that provided this block plugin.*/
/*  *   - cache: The cache settings.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - block - The full block entity.*/
/*  *   - label_hidden: The hidden block title value if the block was*/
/*  *     configured to hide the title ('label' is empty in this case).*/
/*  *   - module: The module that generated the block.*/
/*  *   - delta: An ID for the block, unique within each module.*/
/*  *   - region: The block region embedding the current block.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'rm-block',*/
/*     'rm-config-provider--' ~ configuration.provider|clean_class,*/
/*     'rm-derivative-plugin--' ~ derivative_plugin_id|clean_class,*/
/*     'rm-id--' ~ attributes.id|clean_id,*/
/*     label ? 'has-title',*/
/*     'js-hide',*/
/*   ]*/
/* %}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav{{ attributes.addClass(classes) }} role="navigation" aria-labelledby="{{ heading_id }}">*/
/*   <div class="rm-block__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     <div{{ title_attributes.addClass('rm-toggle').setAttribute('id', heading_id) }}>*/
/*       {% set rm_label_class = label ? 'rm-toggle__label' : 'visually-hidden' %}*/
/*       <button href="#rm-content" class="rm-toggle__link un-button" role='button' aria-controls="rm-content" aria-expanded="false" aria-lable="{{ configuration.label }}">*/
/*         <svg class="rm-toggle__icon" viewBox="0 0 1792 1792" preserveAspectRatio="xMinYMid meet">*/
/*           <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z"/>*/
/*         </svg>*/
/*         <span class="{{ rm_label_class }}">{{ configuration.label }}</span>*/
/*       </button>*/
/*     </div>*/
/*     {{ title_suffix }}*/
/* */
/*     {# Menu. #}*/
/*     {% block content %}*/
/*       <div class="rm-block__content" id="rm-content">*/
/*         {{ content }}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </nav>*/
/* */
