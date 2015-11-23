<?php

/* themes/fepper/templates/block.html.twig */
class __TwigTemplate_b48640aafee52ececfa1920d93bef785ee5fa57befb9e9523f84fa162596f7f4 extends Twig_Template
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
        echo "<!-- Begin block -->
<div";
        // line 2
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 3
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 4
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 5
            echo "    <h2";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 7
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "</div>
<!-- End block -->
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  54 => 8,  48 => 11,  46 => 8,  41 => 7,  33 => 5,  31 => 4,  27 => 3,  23 => 2,  20 => 1,);
    }
}
/* <!-- Begin block -->*/
/* <div{{ attributes }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2{{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% block content %}*/
/*     {{ content }}*/
/*     {% endblock %}*/
/* </div>*/
/* <!-- End block -->*/
/* */
