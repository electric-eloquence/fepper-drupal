<?php

/* core/modules/system/templates/block--system-branding-block.html.twig */
class __TwigTemplate_be01fa75a25d525d42e4f20f2a453b591b0bd07e2a1a6b443b0dbfda7d493c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/modules/system/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 20
            echo "    <a href=\"";
            echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" />
    </a>
  ";
        }
        // line 24
        echo "  ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 25
            echo "    <a href=\"";
            echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
            echo "</a>
  ";
        }
        // line 27
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 27,  52 => 25,  49 => 24,  41 => 21,  34 => 20,  31 => 19,  28 => 18,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if site_name %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*   {% endif %}*/
/*   {{ site_slogan }}*/
/* {% endblock %}*/
/* */
