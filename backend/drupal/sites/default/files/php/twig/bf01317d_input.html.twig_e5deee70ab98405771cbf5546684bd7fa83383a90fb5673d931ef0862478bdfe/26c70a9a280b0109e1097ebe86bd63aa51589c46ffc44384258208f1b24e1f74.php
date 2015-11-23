<?php

/* core/modules/system/templates/input.html.twig */
class __TwigTemplate_8e14583e12383b7e2c4589ff5c24c48d38dc575f32b6e66b6cb6ecdb44bd5de2 extends Twig_Template
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
        // line 15
        echo "<input";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo " />";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an 'input' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  **/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <input{{ attributes }} />{{ children }}*/
/* */
