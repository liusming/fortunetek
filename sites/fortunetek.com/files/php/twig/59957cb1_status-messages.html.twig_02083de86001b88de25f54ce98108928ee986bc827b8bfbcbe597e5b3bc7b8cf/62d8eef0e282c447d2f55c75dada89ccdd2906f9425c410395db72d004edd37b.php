<?php

/* themes/fortune_theme_/templates/misc/status-messages.html.twig */
class __TwigTemplate_3e7ba2d6c5ee52625439bfc4fa9a8f785d4dbfe49d96bf091c7815c541bd9f71 extends Twig_Template
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
        $tags = array("for" => 27, "set" => 29, "if" => 36);
        $filters = array("without" => 34, "length" => 44, "first" => 51);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('without', 'length', 'first'),
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

        // line 26
        echo "<div data-drupal-messages>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "    ";
            // line 29
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 31
$context["type"]));
            // line 34
            echo "    <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">

      <div class=\"messages__container\"";
            // line 36
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">

        ";
            // line 38
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 39
                echo "          <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
        ";
            }
            // line 41
            echo "
        <span class=\"icon icon-";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["type"], "html", null, true));
            echo "\" aria-hidden=\"true\"></span>

        ";
            // line 44
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 45
                echo "          <ul class=\"messages__list\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 47
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "          </ul>
        ";
            } else {
                // line 51
                echo "          <div class=\"messages__list\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</div>
        ";
            }
            // line 53
            echo "
      </div>

    </div>
    ";
            // line 58
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/fortune_theme_/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 60,  120 => 58,  114 => 53,  108 => 51,  104 => 49,  95 => 47,  91 => 46,  88 => 45,  86 => 44,  81 => 42,  78 => 41,  72 => 39,  70 => 38,  63 => 36,  55 => 34,  53 => 31,  52 => 29,  50 => 28,  46 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  *//* */
/* #}*/
/* <div data-drupal-messages>*/
/*   {% for type, messages in message_list %}*/
/*     {%*/
/*     set classes = [*/
/*     'messages',*/
/*     'messages--' ~ type,*/
/*     ]*/
/*     %}*/
/*     <div role="contentinfo" aria-label="{{ status_headings[type] }}"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>*/
/* */
/*       <div class="messages__container"{% if type == 'error' %} role="alert"{% endif %}>*/
/* */
/*         {% if status_headings[type] %}*/
/*           <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*         {% endif %}*/
/* */
/*         <span class="icon icon-{{ type }}" aria-hidden="true"></span>*/
/* */
/*         {% if messages|length > 1 %}*/
/*           <ul class="messages__list">*/
/*             {% for message in messages %}*/
/*               <li class="messages__item">{{ message }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         {% else %}*/
/*           <div class="messages__list">{{ messages|first }}</div>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*     {# Remove type specific classes. #}*/
/*     {{ attributes.removeClass(classes) }}*/
/*   {% endfor %}*/
/* </div>*/
/* */
