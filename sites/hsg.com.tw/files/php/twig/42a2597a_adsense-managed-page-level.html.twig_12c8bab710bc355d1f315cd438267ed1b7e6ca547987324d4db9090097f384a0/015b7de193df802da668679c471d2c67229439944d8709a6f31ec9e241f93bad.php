<?php

/* modules/adsense/templates/adsense-managed-page-level.html.twig */
class __TwigTemplate_8372b52572286409c89ddc076f5d7b4de19e51292474d8048874f4eeb063cb37 extends Twig_Template
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

        // line 7
        echo "<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: \"ca-";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["client"]) ? $context["client"] : null), "html", null, true));
        echo "\",
    enable_page_level_ads: true
  });
</script>";
    }

    public function getTemplateName()
    {
        return "modules/adsense/templates/adsense-managed-page-level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * AdSense page level ad HTML code.*/
/*  *//* */
/* #}*/
/* <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/* <script>*/
/*   (adsbygoogle = window.adsbygoogle || []).push({*/
/*     google_ad_client: "ca-{{ client }}",*/
/*     enable_page_level_ads: true*/
/*   });*/
/* </script>*/
