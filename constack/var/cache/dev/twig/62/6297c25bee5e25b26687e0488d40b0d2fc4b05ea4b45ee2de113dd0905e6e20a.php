<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_3b48edbcfa788d8eabd7f954dd2ce3bdb9ea69fd92604d78145fdcb2e5491963 extends Twig_Template
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
        $__internal_fccaa83c9def18136725d49c489ad2e32c632141ed962d3dd402d2a49c133bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccaa83c9def18136725d49c489ad2e32c632141ed962d3dd402d2a49c133bc2->enter($__internal_fccaa83c9def18136725d49c489ad2e32c632141ed962d3dd402d2a49c133bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig"));

        $__internal_aa32578a8ebec2583f0cf9e5072a406317e70260098f4608f084727d92b2d99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa32578a8ebec2583f0cf9e5072a406317e70260098f4608f084727d92b2d99d->enter($__internal_aa32578a8ebec2583f0cf9e5072a406317e70260098f4608f084727d92b2d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<ol id=\"";
            echo twig_escape_filter($this->env, (isset($context["listId"]) || array_key_exists("listId", $context) ? $context["listId"] : (function () { throw new Twig_Error_Runtime('Variable "listId" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 4, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "                <li";
                if ((array_key_exists("itemClass", $context) && twig_length_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new Twig_Error_Runtime('Variable "itemClass" does not exist.', 5, $this->getSourceContext()); })())))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new Twig_Error_Runtime('Variable "itemClass" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
                    echo "\"";
                }
                echo " itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    ";
                // line 6
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "url", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 7
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "url", array()), "html", null, true);
                    echo "\" itemprop=\"item\"";
                    if ((array_key_exists("linkRel", $context) && twig_length_filter($this->env, (isset($context["linkRel"]) || array_key_exists("linkRel", $context) ? $context["linkRel"] : (function () { throw new Twig_Error_Runtime('Variable "linkRel" does not exist.', 7, $this->getSourceContext()); })())))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, (isset($context["linkRel"]) || array_key_exists("linkRel", $context) ? $context["linkRel"] : (function () { throw new Twig_Error_Runtime('Variable "linkRel" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                    ";
                }
                // line 9
                echo "                        <span itemprop=\"name\">";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "translate", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "translate", array()) == true))) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "text", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "translationParameters", array()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "text", array()), "html", null, true);
                }
                echo "</span>
                    ";
                // line 10
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "url", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 11
                    echo "                    </a>
                    ";
                }
                // line 13
                echo "                    <meta itemprop=\"position\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\" />

                    ";
                // line 15
                if (( !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 15, $this->getSourceContext()); })())) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 16
                    echo "                        <span class='";
                    echo twig_escape_filter($this->env, (isset($context["separatorClass"]) || array_key_exists("separatorClass", $context) ? $context["separatorClass"] : (function () { throw new Twig_Error_Runtime('Variable "separatorClass" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 18
                echo "                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ol>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_fccaa83c9def18136725d49c489ad2e32c632141ed962d3dd402d2a49c133bc2->leave($__internal_fccaa83c9def18136725d49c489ad2e32c632141ed962d3dd402d2a49c133bc2_prof);

        
        $__internal_aa32578a8ebec2583f0cf9e5072a406317e70260098f4608f084727d92b2d99d->leave($__internal_aa32578a8ebec2583f0cf9e5072a406317e70260098f4608f084727d92b2d99d_prof);

    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 20,  107 => 18,  99 => 16,  97 => 15,  91 => 13,  87 => 11,  85 => 10,  76 => 9,  64 => 7,  62 => 6,  53 => 5,  36 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if wo_breadcrumbs()|length %}
    {%- spaceless -%}
        <ol id=\"{{ listId }}\" class=\"{{ listClass }}\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            {% for b in breadcrumbs %}
                <li{% if itemClass is defined and itemClass|length %} class=\"{{ itemClass }}\"{% endif %} itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    {% if b.url and not loop.last %}
                    <a href=\"{{ b.url }}\" itemprop=\"item\"{% if linkRel is defined and linkRel|length %} rel=\"{{ linkRel }}\"{% endif %}>
                    {% endif %}
                        <span itemprop=\"name\">{% if b.translate is defined and b.translate == true %}{{- b.text | trans(b.translationParameters, translation_domain, locale) -}}{% else %}{{- b.text -}}{% endif %}</span>
                    {% if b.url and not loop.last %}
                    </a>
                    {% endif %}
                    <meta itemprop=\"position\" content=\"{{ loop.index }}\" />

                    {% if separator is not null and not loop.last %}
                        <span class='{{ separatorClass }}'>{{ separator }}</span>
                    {% endif %}
                </li>
            {% endfor %}
        </ol>
    {%- endspaceless -%}
{% endif %}
", "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig", "/cocorico/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views/breadcrumbs.html.twig");
    }
}
