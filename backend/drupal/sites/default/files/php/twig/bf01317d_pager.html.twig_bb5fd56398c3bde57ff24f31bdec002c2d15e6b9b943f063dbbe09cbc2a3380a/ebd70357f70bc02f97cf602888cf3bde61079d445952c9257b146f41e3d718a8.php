<?php

/* core/modules/system/templates/pager.html.twig */
class __TwigTemplate_d231b8d41fc50a5e43f996a4e40a1c06fe86ec412f3469152b2abd89a2b3fd66 extends Twig_Template
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
        // line 34
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 35
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->env->getExtension('drupal_core')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 39
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 40
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 41
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 42
                echo $this->env->getExtension('drupal_core')->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 49
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 50
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 51
                echo $this->env->getExtension('drupal_core')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 52
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 56
            echo "      ";
            // line 57
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array())) {
                // line 58
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            echo "      ";
            // line 61
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
          ";
                // line 63
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 64
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 65
                    echo "          ";
                } else {
                    // line 66
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 67
                    echo "          ";
                }
                // line 68
                echo "          <a href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 70
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 72
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 73
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      ";
            // line 77
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array())) {
                // line 78
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 80
            echo "      ";
            // line 81
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 82
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 83
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 84
                echo $this->env->getExtension('drupal_core')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 85
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 89
            echo "      ";
            // line 90
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 91
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 92
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 93
                echo $this->env->getExtension('drupal_core')->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 94
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 98
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  196 => 94,  192 => 93,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 85,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  149 => 80,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 72,  126 => 70,  116 => 68,  113 => 67,  110 => 66,  107 => 65,  104 => 64,  102 => 63,  97 => 62,  92 => 61,  90 => 60,  86 => 58,  83 => 57,  81 => 56,  74 => 52,  70 => 51,  62 => 50,  59 => 49,  56 => 48,  54 => 47,  47 => 43,  43 => 42,  35 => 41,  32 => 40,  29 => 39,  24 => 36,  21 => 35,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ Previous"*/
/*  *     or "Next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if items %}*/
/*   <nav class="pager" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items js-pager__items">*/
/*       {# Print first item if we are not on the first page. #}*/
/*       {% if items.first %}*/
/*         <li class="pager__item pager__item--first">*/
/*           <a href="{{ items.first.href }}" title="{{ 'Go to first page'|t }}"{{ items.first.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.first.text|default('« First'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Print previous item if we are not on the first page. #}*/
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous">*/
/*           <a href="{{ items.previous.href }}" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('‹ Previous'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Add an ellipsis if there are further previous pages. #}*/
/*       {% if ellipses.previous %}*/
/*         <li class="pager__item pager__item--ellipsis" role="presentation">&hellip;</li>*/
/*       {% endif %}*/
/*       {# Now generate the actual pager piece. #}*/
/*       {% for key, item in items.pages %}*/
/*         <li class="pager__item{{ current == key ? ' is-active' : '' }}">*/
/*           {% if current == key %}*/
/*             {% set title = 'Current page'|t %}*/
/*           {% else %}*/
/*             {% set title = 'Go to page @key'|t({'@key': key}) %}*/
/*           {% endif %}*/
/*           <a href="{{ item.href }}" title="{{ title }}"{{ item.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">*/
/*               {{ current == key ? 'Current page'|t : 'Page'|t }}*/
/*             </span>*/
/*             {{- key -}}*/
/*           </a>*/
/*         </li>*/
/*       {% endfor %}*/
/*       {# Add an ellipsis if there are further next pages. #}*/
/*       {% if ellipses.next %}*/
/*         <li class="pager__item pager__item--ellipsis" role="presentation">&hellip;</li>*/
/*       {% endif %}*/
/*       {# Print next item if we are not on the last page. #}*/
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next">*/
/*           <a href="{{ items.next.href }}" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('Next ›'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Print last item if we are not on the last page. #}*/
/*       {% if items.last %}*/
/*         <li class="pager__item pager__item--last">*/
/*           <a href="{{ items.last.href }}" title="{{ 'Go to last page'|t }}"{{ items.last.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.last.text|default('Last »'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
