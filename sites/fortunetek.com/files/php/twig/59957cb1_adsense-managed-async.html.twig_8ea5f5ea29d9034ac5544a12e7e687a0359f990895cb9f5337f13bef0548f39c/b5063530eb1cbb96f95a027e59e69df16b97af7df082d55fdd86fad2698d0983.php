<?php

/* modules/adsense/templates/adsense-managed-async.html.twig */
class __TwigTemplate_56a3ddc07afffc7d8e88cbeb219f302c4d8efc98ce42d2922f6e5a3af6e03a4b extends Twig_Template
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
<!-- ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true));
        echo " -->
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo "px;height:";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo "px\"
     data-ad-client=\"ca-";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["client"]) ? $context["client"] : null), "html", null, true));
        echo "\"
     data-ad-slot=\"";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slot"]) ? $context["slot"] : null), "html", null, true));
        echo "\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>";
    }

    public function getTemplateName()
    {
        return "modules/adsense/templates/adsense-managed-async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 11,  51 => 10,  46 => 8,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * AdSense asynchronous managed ad HTML code.*/
/*  *//* */
/* #}*/
/* <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/* <!-- {{ format }} -->*/
/* <ins class="adsbygoogle"*/
/*      style="display:inline-block;width:{{ width }}px;height:{{ height }}px"*/
/*      data-ad-client="ca-{{ client }}"*/
/*      data-ad-slot="{{ slot }}"></ins>*/
/* <script>*/
/* (adsbygoogle = window.adsbygoogle || []).push({});*/
/* </script>*/
