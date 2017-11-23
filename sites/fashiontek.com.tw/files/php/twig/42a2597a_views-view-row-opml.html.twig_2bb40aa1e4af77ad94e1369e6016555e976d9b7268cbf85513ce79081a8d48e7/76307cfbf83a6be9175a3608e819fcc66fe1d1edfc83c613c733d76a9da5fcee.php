<?php

/* themes/fashiontek_/templates/views/views-view-row-opml.html.twig */
class __TwigTemplate_ad6f76970961cecdc8e52ff82952c39942487a472d887c4b0adaeb94448a3020 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 12
        echo "    <outline";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo "/>
";
    }

    public function getTemplateName()
    {
        return "themes/fashiontek_/templates/views/views-view-row-opml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display an item in a views OPML feed.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for outline element.*/
/*  **/
/*  * @see template_preprocess_views_view_row_opml()*/
/*  *//* */
/* #}*/
/*     <outline{{ attributes }}/>*/
/* */
