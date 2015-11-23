<?php

/* themes/fepper/templates/views-view-list.html.twig */
class __TwigTemplate_2d2151f01d16a1a0e521057d92fb4bcb9199c1e47657de7ba53b61e0ac13b71e extends Twig_Template
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
        // line 21
        echo "<!-- Begin views-view-list -->
";
        // line 22
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 23
            echo "<div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
";
        }
        // line 25
        echo "  ";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 26
            echo "    <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
  ";
        }
        // line 28
        echo "
  <";
        // line 29
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true);
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "attributes", array()), "html", null, true);
        echo ">

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "      <li";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
  </";
        // line 35
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true);
        echo ">

";
        // line 37
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 38
            echo "</div>
";
        }
        // line 40
        echo "<!-- End views-view-list -->
";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/views-view-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 40,  73 => 38,  71 => 37,  66 => 35,  63 => 34,  52 => 32,  48 => 31,  42 => 29,  39 => 28,  33 => 26,  30 => 25,  24 => 23,  22 => 22,  19 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a view template to display a list of rows.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the container.*/
/*  * - rows: A list of rows for this list.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's contents.*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - list: @todo.*/
/*  *   - type: Starting tag will be either a ul or ol.*/
/*  *   - attributes: HTML attributes for the list element.*/
/*  **/
/*  * @see template_preprocess_views_view_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!-- Begin views-view-list -->*/
/* {% if attributes -%}*/
/*   <div{{ attributes }}>*/
/* {% endif %}*/
/*   {% if title %}*/
/*     <h3>{{ title }}</h3>*/
/*   {% endif %}*/
/* */
/*   <{{ list.type }}{{ list.attributes }}>*/
/* */
/*     {% for row in rows %}*/
/*       <li{{ row.attributes }}>{{ row.content }}</li>*/
/*     {% endfor %}*/
/* */
/*   </{{ list.type }}>*/
/* */
/* {% if attributes -%}*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End views-view-list -->*/
/* */
