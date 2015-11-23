<?php

/* core/modules/views/templates/views-view-field.html.twig */
class __TwigTemplate_a16abbfb51b10b1528c33cb5f316620542df7dc0be368dd7d26fe3f54c9347db extends Twig_Template
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
        // line 23
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a single field in a view.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view that the field belongs to.*/
/*  * - field: The field handler that can process the input.*/
/*  * - row: The raw result of the database query that generated this field.*/
/*  * - output: The processed output that will normally be used.*/
/*  **/
/*  * When fetching output from the row this construct should be used:*/
/*  * data = row[field.field_alias]*/
/*  **/
/*  * The above will guarantee that you'll always get the correct data, regardless*/
/*  * of any changes in the aliasing that might happen if the view is modified.*/
/*  **/
/*  * @see template_preprocess_views_view_field()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ output -}}*/
/* */
