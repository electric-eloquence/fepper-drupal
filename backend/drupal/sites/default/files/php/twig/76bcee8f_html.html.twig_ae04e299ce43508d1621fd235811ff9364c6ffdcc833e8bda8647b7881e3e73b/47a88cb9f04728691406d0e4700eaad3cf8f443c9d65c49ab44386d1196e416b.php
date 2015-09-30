<?php

/* core/themes/classy/templates/layout/html.html.twig */
class __TwigTemplate_ae04e299ce43508d1621fd235811ff9364c6ffdcc833e8bda8647b7881e3e73b extends Twig_Template
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
        // line 32
        $context["body_classes"] = array(0 => ((        // line 33
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 34
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 35
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 36
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 39
        echo "<!DOCTYPE html>
<html";
        // line 40
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 42
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
        echo "
    <title>";
        // line 43
        echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | "));
        echo "</title>
    ";
        // line 44
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles"]) ? $context["styles"] : null), "html", null, true);
        echo "
    ";
        // line 45
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scripts"]) ? $context["scripts"] : null), "html", null, true);
        echo "
  </head>
  <body";
        // line 47
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 49
        echo $this->env->getExtension('drupal_core')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 51
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 52
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "
    ";
        // line 53
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    ";
        // line 54
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scripts_bottom"]) ? $context["scripts_bottom"] : null), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 54,  68 => 53,  64 => 52,  60 => 51,  55 => 49,  50 => 47,  45 => 45,  41 => 44,  37 => 43,  33 => 42,  28 => 40,  25 => 39,  23 => 36,  22 => 35,  21 => 34,  20 => 33,  19 => 32,);
    }
}
