<?php

/* themes/fepper/templates/views-view.html.twig */
class __TwigTemplate_154a3a0276c6b72338e2e0dbef851f697e6a51332fc3b6a280897008353596a5 extends Twig_Template
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
        // line 2
        $context["classes"] = array(0 => ((        // line 3
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 6
        echo "<!-- Begin views-view -->
<div";
        // line 7
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 9
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 10
            echo "    <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
  ";
        }
        // line 12
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 14
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 15
            echo "    <header>
      ";
            // line 16
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true);
        echo "

  ";
        // line 23
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
        echo "
  ";
        // line 24
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
        echo "
  ";
        // line 25
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true);
        echo "

  ";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true);
        echo "
  ";
        // line 28
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true);
        echo "

  ";
        // line 30
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 31
            echo "    <footer>
      ";
            // line 32
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
        echo "
</div>
<!-- End views-view -->
";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  103 => 35,  97 => 32,  94 => 31,  92 => 30,  87 => 28,  83 => 27,  78 => 25,  74 => 24,  70 => 23,  65 => 21,  61 => 20,  58 => 19,  52 => 16,  49 => 15,  47 => 14,  41 => 12,  35 => 10,  33 => 9,  29 => 8,  25 => 7,  22 => 6,  20 => 3,  19 => 2,);
    }
}
/* {%*/
/*   set classes = [*/
/*     dom_id ? 'js-view-dom-id-' ~ dom_id,*/
/*   ]*/
/* %}*/
/* <!-- Begin views-view -->*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if title %}*/
/*     <h1>{{ title }}</h1>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   {% if header %}*/
/*     <header>*/
/*       {{ header }}*/
/*     </header>*/
/*   {% endif %}*/
/* */
/*   {{ exposed }}*/
/*   {{ attachment_before }}*/
/* */
/*   {{ rows }}*/
/*   {{ empty }}*/
/*   {{ pager }}*/
/* */
/*   {{ attachment_after }}*/
/*   {{ more }}*/
/* */
/*   {% if footer %}*/
/*     <footer>*/
/*       {{ footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/*   {{ feed_icons }}*/
/* </div>*/
/* <!-- End views-view -->*/
/* */
