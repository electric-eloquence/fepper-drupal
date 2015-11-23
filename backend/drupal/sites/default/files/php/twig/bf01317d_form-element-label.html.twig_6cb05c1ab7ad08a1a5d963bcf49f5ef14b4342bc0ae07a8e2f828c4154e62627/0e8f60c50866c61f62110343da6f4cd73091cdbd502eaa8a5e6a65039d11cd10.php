<?php

/* core/modules/system/templates/form-element-label.html.twig */
class __TwigTemplate_2ba6e073027652c2295f75a9db3f363fe98854aa6e5f093962add3de82b65123 extends Twig_Template
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
        // line 18
        $context["classes"] = array(0 => (((        // line 19
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 20
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 21
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 3 => ((        // line 22
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 25
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 26
            echo "<label";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 26,  25 => 25,  23 => 22,  22 => 21,  21 => 20,  20 => 19,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     title_display == 'after' ? 'option',*/
/*     title_display == 'invisible' ? 'visually-hidden',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title is not empty or required -%}*/
/*   <label{{ attributes.addClass(classes) }}>{{ title }}</label>*/
/* {%- endif %}*/
/* */
