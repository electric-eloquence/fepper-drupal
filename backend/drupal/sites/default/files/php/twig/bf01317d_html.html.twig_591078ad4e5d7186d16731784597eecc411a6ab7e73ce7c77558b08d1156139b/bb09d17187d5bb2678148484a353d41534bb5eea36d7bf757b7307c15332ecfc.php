<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_e370ba6194749b6e48446b1ff6f470c0743c09bbaff02eac5af37ce111e5dcb0 extends Twig_Template
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
        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
    <title>";
        // line 32
        echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
    <js-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
  </head>
  <body";
        // line 36
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 38
        echo $this->env->getExtension('drupal_core')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 40
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  62 => 42,  58 => 41,  54 => 40,  49 => 38,  44 => 36,  39 => 34,  35 => 33,  31 => 32,  27 => 31,  22 => 29,  19 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   <body{{ attributes }}>*/
/*     <a href="#main-content" class="visually-hidden focusable">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
