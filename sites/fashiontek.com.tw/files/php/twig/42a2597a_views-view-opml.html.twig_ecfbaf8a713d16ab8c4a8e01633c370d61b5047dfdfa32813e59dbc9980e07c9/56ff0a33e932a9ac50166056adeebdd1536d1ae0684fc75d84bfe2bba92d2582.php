<?php

/* themes/fashiontek_/templates/views/views-view-opml.html.twig */
class __TwigTemplate_ec659663cae9b346b5c533c188c64ae79de89d6335a8b1e8c316a6a23192b256 extends Twig_Template
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

        // line 14
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<opml version=\"2.0\">
  <head>
    <title>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
    <dateModified>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["updated"]) ? $context["updated"] : null), "html", null, true));
        echo "</dateModified>
  </head>
  <body>
    ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true));
        echo "
  </body>
</opml>
";
    }

    public function getTemplateName()
    {
        return "themes/fashiontek_/templates/views/views-view-opml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 18,  48 => 17,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for feed displays that use the OPML style.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The title of the feed (as set in the view).*/
/*  * - updated: The modified date of the feed.*/
/*  * - items: The feed items themselves.*/
/*  **/
/*  * @see template_preprocess_views_view_opml()*/
/*  *//* */
/* #}*/
/* <?xml version="1.0" encoding="utf-8" ?>*/
/* <opml version="2.0">*/
/*   <head>*/
/*     <title>{{ title }}</title>*/
/*     <dateModified>{{ updated }}</dateModified>*/
/*   </head>*/
/*   <body>*/
/*     {{ items }}*/
/*   </body>*/
/* </opml>*/
/* */
