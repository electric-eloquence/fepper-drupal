<?php

/* core/modules/views/templates/views-view-fields.html.twig */
class __TwigTemplate_9df38f0f9603a3a6283c54fa471a299f668c77a3b2d6ebfd1be88761a40c061a extends Twig_Template
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "separator", array()), "html", null, true);
            // line 36
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 37
                echo "<";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true);
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_attributes", array()), "html", null, true);
                echo ">";
            }
            // line 39
            if ($this->getAttribute($context["field"], "label", array())) {
                // line 40
                if ($this->getAttribute($context["field"], "label_element", array())) {
                    // line 41
                    echo "<";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true);
                    echo "</";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true);
                    echo ">";
                } else {
                    // line 43
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true);
                }
            }
            // line 46
            if ($this->getAttribute($context["field"], "element_type", array())) {
                // line 47
                echo "<";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true);
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_attributes", array()), "html", null, true);
                echo ">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true);
                echo "</";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true);
                echo ">";
            } else {
                // line 49
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true);
            }
            // line 51
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 52
                echo "</";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true);
                echo ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 52,  68 => 51,  65 => 49,  55 => 47,  53 => 46,  48 => 43,  37 => 41,  35 => 40,  33 => 39,  27 => 37,  25 => 36,  23 => 35,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default view template to display all the fields in a row.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view in use.*/
/*  * - fields: A list of fields, each one contains:*/
/*  *   - content: The output of the field.*/
/*  *   - raw: The raw data for the field, if it exists. This is NOT output safe.*/
/*  *   - class: The safe class ID to use.*/
/*  *   - handler: The Views field handler controlling this field.*/
/*  *   - inline: Whether or not the field should be inline.*/
/*  *   - wrapper_element: An HTML element for a wrapper.*/
/*  *   - wrapper_attributes: List of attributes for wrapper element.*/
/*  *   - separator: An optional separator that may appear before a field.*/
/*  *   - label: The field's label text.*/
/*  *   - label_element: An HTML element for a label wrapper.*/
/*  *   - label_attributes: List of attributes for label wrapper.*/
/*  *   - label_suffix: Colon after the label.*/
/*  *   - element_type: An HTML element for the field content.*/
/*  *   - element_attributes: List of attributes for HTML element for field content.*/
/*  *   - has_label_colon: A boolean indicating whether to display a colon after*/
/*  *     the label.*/
/*  *   - element_type: An HTML element for the field content.*/
/*  *   - element_attributes: List of attributes for HTML element for field content.*/
/*  * - row: The raw result from the query, with all data it fetched.*/
/*  **/
/*  * @see template_preprocess_views_view_fields()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% for field in fields -%}*/
/*   {{ field.separator }}*/
/*   {%- if field.wrapper_element -%}*/
/*     <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>*/
/*   {%- endif %}*/
/*   {%- if field.label -%}*/
/*     {%- if field.label_element -%}*/
/*       <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>*/
/*     {%- else -%}*/
/*       {{ field.label }}{{ field.label_suffix }}*/
/*     {%- endif %}*/
/*   {%- endif %}*/
/*   {%- if field.element_type -%}*/
/*     <{{ field.element_type }}{{ field.element_attributes }}>{{ field.content }}</{{ field.element_type }}>*/
/*   {%- else -%}*/
/*     {{ field.content }}*/
/*   {%- endif %}*/
/*   {%- if field.wrapper_element -%}*/
/*     </{{ field.wrapper_element }}>*/
/*   {%- endif %}*/
/* {%- endfor %}*/
/* */
