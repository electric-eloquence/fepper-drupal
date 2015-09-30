<?php

/* core/themes/classy/templates/form/fieldset.html.twig */
class __TwigTemplate_72ff807f6dc7ce3782919ed5b212ace3134a84a9e2b90d7c7536955bc620e91c extends Twig_Template
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
        // line 24
        $context["classes"] = array(0 => "form-item", 1 => "js-form-wrapper", 2 => "form-wrapper");
        // line 30
        echo "<fieldset";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 32
        $context["legend_span_classes"] = array(0 => "fieldset-legend", 1 => ((        // line 34
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((        // line 35
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 38
        echo "  ";
        // line 39
        echo "  <legend";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes", array()), "html", null, true);
        echo ">
    <span";
        // line 40
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes", array()), "addClass", array(0 => (isset($context["legend_span_classes"]) ? $context["legend_span_classes"] : null)), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title", array()), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 43
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 44
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 45
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 48
        echo "    ";
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 49
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 51
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
    ";
        // line 52
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 53
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) {
            // line 56
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 58
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  81 => 56,  78 => 55,  72 => 53,  70 => 52,  65 => 51,  59 => 49,  56 => 48,  50 => 45,  47 => 44,  45 => 43,  37 => 40,  32 => 39,  30 => 38,  28 => 35,  27 => 34,  26 => 32,  21 => 30,  19 => 24,);
    }
}
