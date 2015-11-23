<?php

/* themes/fepper/templates/page.html.twig */
class __TwigTemplate_170cab53fba449f22f3aa4e31ad0577493be2d4ba2188f83efa6927a582474cb extends Twig_Template
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
        // line 1
        echo "<!-- Begin page -->
<div class=\"layout-container\">

  <header class=\"header cf\" role=\"banner\">
    ";
        // line 5
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </header>

  ";
        // line 8
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "

  ";
        // line 11
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "

  ";
        // line 13
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

  ";
        // line 15
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    <div class=\"layout-content\">
      ";
        // line 21
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </div>

    ";
        // line 24
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 25
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 26
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 31
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 32
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 35
        echo "
  </main>

  ";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 39
            echo "    <footer role=\"contentinfo\">
      ";
            // line 40
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 43
        echo "
</div>
<!-- End page -->
";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  100 => 40,  97 => 39,  95 => 38,  90 => 35,  84 => 32,  81 => 31,  79 => 30,  76 => 29,  70 => 26,  67 => 25,  65 => 24,  59 => 21,  50 => 15,  45 => 13,  40 => 11,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!-- Begin page -->*/
/* <div class="layout-container">*/
/* */
/*   <header class="header cf" role="banner">*/
/*     {{ page.header }}*/
/*   </header>*/
/* */
/*   {{ page.primary_menu }}*/
/*   {{ page.secondary_menu }}*/
/* */
/*   {{ page.breadcrumb }}*/
/* */
/*   {{ page.highlighted }}*/
/* */
/*   {{ page.help }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>*/
/* */
/*     <div class="layout-content">*/
/*       {{ page.content }}*/
/*     </div>*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="layout-sidebar-first" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="layout-sidebar-second" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* <!-- End page -->*/
/* */
