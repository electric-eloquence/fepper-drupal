<?php

/* core/themes/seven/templates/install-page.html.twig */
class __TwigTemplate_5e6c0c672fcfdabb2f4abd50f3360a2059111131657d60a1d89595db559cdd0c extends Twig_Template
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
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 16
            echo "      <h1 class=\"page-title\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 18
        echo "  </header>

  ";
        // line 20
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 21
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
    </aside>";
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  <main role=\"main\">
    ";
        // line 27
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 28
            echo "      <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 30
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "
    ";
        // line 31
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
  </main>

  ";
        // line 34
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 35
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 36
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
    </aside>";
            // line 38
            echo "  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 41
            echo "    <footer role=\"contentinfo\">
      ";
            // line 42
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 45
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/install-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 45,  91 => 42,  88 => 41,  86 => 40,  83 => 39,  80 => 38,  76 => 36,  73 => 35,  71 => 34,  65 => 31,  60 => 30,  54 => 28,  52 => 27,  48 => 25,  45 => 24,  41 => 22,  38 => 21,  36 => 20,  32 => 18,  26 => 16,  24 => 15,  19 => 12,);
    }
}
