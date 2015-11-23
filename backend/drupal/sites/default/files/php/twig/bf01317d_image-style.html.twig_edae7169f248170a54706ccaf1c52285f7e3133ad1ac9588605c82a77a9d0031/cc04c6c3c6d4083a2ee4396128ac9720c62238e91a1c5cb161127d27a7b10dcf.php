<?php

/* core/modules/image/templates/image-style.html.twig */
class __TwigTemplate_779bb03daad7797d751ee06bbb5d88ff4c4bb7be67a55843e8bcc2a278cb7c8f extends Twig_Template
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
        // line 20
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an image using a specific image style.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the image, including the following:*/
/*  *   - src: Full URL or relative path to the image file.*/
/*  *   - class: One or more classes to be applied to the image.*/
/*  *   - width: The width of the image (if known).*/
/*  *   - height: The height of the image (if known).*/
/*  *   - title: The title of the image.*/
/*  *   - alt: The alternative text for the image.*/
/*  **/
/*  * @see template_preprocess_image_style()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* */
