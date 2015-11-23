<?php

/* themes/fepper/templates/region.html.twig */
class __TwigTemplate_1d401003f57f165c8948ab4f1983739fa7885c37bbcdefcf1cd253a76467fb51 extends Twig_Template
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
        echo "<!-- Begin region -->
";
        // line 2
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 3
            echo "  <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    ";
            // line 4
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
    </div>
";
        }
        // line 7
        echo "<!-- End region -->
";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- Begin region -->*/
/* {% if content %}*/
/*   <div{{ attributes }}>*/
/*     {{ content }}*/
/*     </div>*/
/* {% endif %}*/
/* <!-- End region -->*/
/* */
