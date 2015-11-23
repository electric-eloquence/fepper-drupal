<?php

/* core/modules/system/templates/menu.html.twig */
class __TwigTemplate_6de0c4cf4d2a0e103d39b56465cd91a19dd8f280baad4414ca8ae623a28e49ac extends Twig_Template
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul>
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      <li";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                    echo ">
        ";
                    // line 41
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true);
                    echo "
        ";
                    // line 42
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 43
                        echo "          ";
                        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)));
                        echo "
        ";
                    }
                    // line 45
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 47,  86 => 45,  80 => 43,  78 => 42,  74 => 41,  69 => 40,  64 => 39,  60 => 37,  54 => 35,  51 => 34,  48 => 33,  45 => 32,  31 => 31,  24 => 29,  21 => 24,  19 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes }}>*/
/*     {% else %}*/
/*       <ul>*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       <li{{ item.attributes }}>*/
/*         {{ link(item.title, item.url) }}*/
/*         {% if item.below %}*/
/*           {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
