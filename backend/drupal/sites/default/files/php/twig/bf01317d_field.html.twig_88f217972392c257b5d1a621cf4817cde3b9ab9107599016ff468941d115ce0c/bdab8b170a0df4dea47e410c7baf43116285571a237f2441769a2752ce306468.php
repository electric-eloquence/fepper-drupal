<?php

/* core/modules/system/templates/field.html.twig */
class __TwigTemplate_65f414aecee3fea8c19c10c9b9f99c5709b4b50d76d3446fc561df21d1919c64 extends Twig_Template
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
        // line 41
        echo "
";
        // line 42
        if ((isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 43
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 44
                echo "    <div";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                echo ">
      ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        <div";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "    </div>
  ";
            } else {
                // line 50
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 51
                    echo "      <div";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "  ";
            }
        } else {
            // line 55
            echo "  <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    <div";
            // line 56
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
    ";
            // line 57
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 58
                echo "      <div>
    ";
            }
            // line 60
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "      <div";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                echo ">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 64
                echo "      </div>
    ";
            }
            // line 66
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 66,  107 => 64,  104 => 63,  93 => 61,  88 => 60,  84 => 58,  82 => 57,  76 => 56,  71 => 55,  67 => 53,  56 => 51,  51 => 50,  47 => 48,  36 => 46,  32 => 45,  27 => 44,  24 => 43,  22 => 42,  19 => 41,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a field.*/
/*  **/
/*  * To override output, copy the "field.html.twig" from the templates directory*/
/*  * to your theme's directory and customize it, just like customizing other*/
/*  * Drupal templates such as page.html.twig or node.html.twig.*/
/*  **/
/*  * Instead of overriding the theming for all fields, you can also just override*/
/*  * theming for a subset of fields using*/
/*  * @link themeable Theme hook suggestions. @endlink For example,*/
/*  * here are some theme hook suggestions that can be used for a field_foo field*/
/*  * on an article node type:*/
/*  * - field--node--field-foo--article.html.twig*/
/*  * - field--node--field-foo.html.twig*/
/*  * - field--node--article.html.twig*/
/*  * - field--field-foo.html.twig*/
/*  * - field--text-with-summary.html.twig*/
/*  * - field.html.twig*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - multiple: TRUE if a field can contain multiple items.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% if label_hidden %}*/
/*   {% if multiple %}*/
/*     <div{{ attributes }}>*/
/*       {% for item in items %}*/
/*         <div{{ item.attributes }}>{{ item.content }}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% else %}*/
/*     {% for item in items %}*/
/*       <div{{ attributes }}>{{ item.content }}</div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* {% else %}*/
/*   <div{{ attributes }}>*/
/*     <div{{ title_attributes }}>{{ label }}</div>*/
/*     {% if multiple %}*/
/*       <div>*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       <div{{ item.attributes }}>{{ item.content }}</div>*/
/*     {% endfor %}*/
/*     {% if multiple %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
