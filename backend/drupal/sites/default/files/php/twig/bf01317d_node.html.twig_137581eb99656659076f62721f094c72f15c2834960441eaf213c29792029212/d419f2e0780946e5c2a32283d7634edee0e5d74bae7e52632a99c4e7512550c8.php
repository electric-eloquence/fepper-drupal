<?php

/* themes/fepper/templates/node.html.twig */
class __TwigTemplate_037319235eec24353ba85c1fea60c7e5d8042974e5da4e96a4e94620080558c8 extends Twig_Template
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
        echo "<!-- Begin node -->
<article";
        // line 2
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">

  ";
        // line 4
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 5
        if ((isset($context["page"]) ? $context["page"] : null)) {
            // line 6
            echo "    <h1";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">
      <a href=\"";
            // line 7
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
    </h1>
  ";
        }
        // line 10
        echo "  ";
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 11
            echo "    <h3";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">
      <a href=\"";
            // line 12
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
    </h3>
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 17
        if ((isset($context["page"]) ? $context["page"] : null)) {
            // line 18
            echo "    <footer>
      <div";
            // line 19
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true);
            echo ">
        By ";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true);
            echo " on ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
            echo "
        ";
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 25
        echo "
  <div";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
        echo ">
    ";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    </div>

</article>
<!-- End node -->
";
    }

    public function getTemplateName()
    {
        return "themes/fepper/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  93 => 26,  90 => 25,  83 => 21,  77 => 20,  73 => 19,  70 => 18,  68 => 17,  62 => 15,  54 => 12,  49 => 11,  46 => 10,  38 => 7,  33 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <!-- Begin node -->*/
/* <article{{ attributes }}>*/
/* */
/*   {{ title_prefix }}*/
/*   {% if page %}*/
/*     <h1{{ title_attributes }}>*/
/*       <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h1>*/
/*   {% endif %}*/
/*   {% if not page %}*/
/*     <h3{{ title_attributes }}>*/
/*       <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h3>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   {% if page %}*/
/*     <footer>*/
/*       <div{{ author_attributes }}>*/
/*         By {{ author_name }} on {{ date }}*/
/*         {{ metadata }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/*   <div{{ content_attributes }}>*/
/*     {{ content }}*/
/*     </div>*/
/* */
/* </article>*/
/* <!-- End node -->*/
/* */
