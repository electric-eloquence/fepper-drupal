<?php

/* themes/fepper/templates/block--system-menu-block.html.twig */
class __TwigTemplate_143952786ddbe63efab85d7bc6aedb64d2c96a9d6cb11d694559704b66047ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 2
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 3
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 4
            echo "    ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 5
            echo "  ";
        }
        // line 6
        echo "
  ";
        // line 7
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  <h2";
        // line 8
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true);
        echo "</h2>
  ";
        // line 9
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "  </nav>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  62 => 11,  57 => 14,  55 => 11,  50 => 9,  44 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes|without('role', 'aria-labelledby') }}>*/
/*   {% if not configuration.label_display %}*/
/*     {% set title_attributes = title_attributes.addClass('visually-hidden') %}*/
/*   {% endif %}*/
/* */
/*   {{ title_prefix }}*/
/*   <h2{{ title_attributes }}>{{ configuration.label }}</h2>*/
/*   {{ title_suffix }}*/
/* */
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/*   </nav>*/
/* */
