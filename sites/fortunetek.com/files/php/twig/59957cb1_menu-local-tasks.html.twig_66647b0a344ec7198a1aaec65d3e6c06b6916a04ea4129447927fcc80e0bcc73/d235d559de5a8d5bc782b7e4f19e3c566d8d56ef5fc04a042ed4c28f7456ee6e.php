<?php

/* themes/fortune_theme_/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_e73b2cd37b5f627513f5f4eb81c2e19f59fd6605765a6bab54c6c29ae2709a3d extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array("t" => 23);
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 18
        if (((isset($context["primary"]) ? $context["primary"] : null) || (isset($context["secondary"]) ? $context["secondary"] : null))) {
            // line 19
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("at_core/at.responsivelists"), "html", null, true));
            echo "
";
        }
        // line 21
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 22
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"primary-tabs-title\" data-at-responsive-list>
    <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
    <ul class=\"tabs tabs--primary is-responsive__list\">";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
        // line 27
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 28
            echo "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"secondary-tabs-title\" data-at-responsive-list>
    <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
    <ul class=\"tabs tabs--secondary is-responsive__list\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  71 => 29,  68 => 28,  66 => 27,  60 => 24,  56 => 23,  53 => 22,  51 => 21,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  **/
/*  * @see template_preprocess_menu_local_tasks()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if primary or secondary %}*/
/*   {{ attach_library('at_core/at.responsivelists') }}*/
/* {% endif %}*/
/* {% if primary %}*/
/*   <nav class="is-horizontal is-responsive" role="navigation" aria-labelledby="primary-tabs-title" data-at-responsive-list>*/
/*     <h2 id="primary-tabs-title" class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*     <ul class="tabs tabs--primary is-responsive__list">{{ primary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <nav class="is-horizontal is-responsive" role="navigation" aria-labelledby="secondary-tabs-title" data-at-responsive-list>*/
/*     <h2 id="secondary-tabs-title" class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*     <ul class="tabs tabs--secondary is-responsive__list">{{ secondary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
