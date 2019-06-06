<?php

/* @CocoricoCore/Frontend/Common/_pagination.html.twig */
class __TwigTemplate_d9f4dbc3d8056d16af4b6d96d9a75d17ad57ad732064b064d3c04dc36acdf6fd extends Twig_Template
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
        $__internal_a21d8a57b65dc1abcaa95655638da1624a2a78b4391b239dde563878b7453549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21d8a57b65dc1abcaa95655638da1624a2a78b4391b239dde563878b7453549->enter($__internal_a21d8a57b65dc1abcaa95655638da1624a2a78b4391b239dde563878b7453549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_pagination.html.twig"));

        $__internal_ec8dfd04257c08db670afc1f40806a6be81133f3f516aba3f771332a2ed9218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8dfd04257c08db670afc1f40806a6be81133f3f516aba3f771332a2ed9218c->enter($__internal_ec8dfd04257c08db670afc1f40806a6be81133f3f516aba3f771332a2ed9218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_pagination.html.twig"));

        // line 1
        $context["page_count"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 1, $this->getSourceContext()); })()), "pages_count", array());
        // line 2
        $context["page"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 2, $this->getSourceContext()); })()), "page", array());
        // line 3
        echo "
<nav class=\"nav-pagination text-right\">
    ";
        // line 5
        if (((isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new Twig_Error_Runtime('Variable "page_count" does not exist.', 5, $this->getSourceContext()); })()) > 1)) {
            // line 6
            echo "        <ul class=\"pagination\">
            ";
            // line 7
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->getSourceContext()); })()) > 1)) {
                // line 8
                echo "                <li>
                    <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 9, $this->getSourceContext()); })()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 9, $this->getSourceContext()); })()), "route_params", array()), array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 9, $this->getSourceContext()); })()) - 1)))), "html", null, true);
                echo "\"
                       aria-label=\"Previous\">
                        <i class=\"icon-left-open-mini\"></i>
                        <span class=\"hidden\">previous</span>
                    </a>
                </li>
            ";
            }
            // line 16
            echo "
            ";
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 18, $this->getSourceContext()); })()), "page", array()) - 4), 1), min(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 18, $this->getSourceContext()); })()) + 4), (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new Twig_Error_Runtime('Variable "page_count" does not exist.', 18, $this->getSourceContext()); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "                <li>
                    <a";
                // line 20
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 20, $this->getSourceContext()); })()))) {
                    echo " class=\"active\"";
                }
                // line 21
                echo "                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 21, $this->getSourceContext()); })()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 21, $this->getSourceContext()); })()), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
                echo "\">
                        ";
                // line 22
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 27, $this->getSourceContext()); })()) < (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new Twig_Error_Runtime('Variable "page_count" does not exist.', 27, $this->getSourceContext()); })()))) {
                // line 28
                echo "                <li>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->getSourceContext()); })()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->getSourceContext()); })()), "route_params", array()), array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 29, $this->getSourceContext()); })()) + 1)))), "html", null, true);
                echo "\"
                       aria-label=\"Next\">
                        <i class=\"icon-right-open-mini\"></i>
                        <span class=\"hidden\">next</span>
                    </a>
                </li>
            ";
            }
            // line 36
            echo "        </ul>
    ";
        }
        // line 38
        echo "</nav>";
        
        $__internal_a21d8a57b65dc1abcaa95655638da1624a2a78b4391b239dde563878b7453549->leave($__internal_a21d8a57b65dc1abcaa95655638da1624a2a78b4391b239dde563878b7453549_prof);

        
        $__internal_ec8dfd04257c08db670afc1f40806a6be81133f3f516aba3f771332a2ed9218c->leave($__internal_ec8dfd04257c08db670afc1f40806a6be81133f3f516aba3f771332a2ed9218c_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  101 => 36,  91 => 29,  88 => 28,  86 => 27,  83 => 26,  73 => 22,  68 => 21,  64 => 20,  61 => 19,  56 => 18,  53 => 16,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  33 => 5,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_count = pagination.pages_count %}
{% set page = pagination.page %}

<nav class=\"nav-pagination text-right\">
    {% if page_count > 1 %}
        <ul class=\"pagination\">
            {% if page > 1 %}
                <li>
                    <a href=\"{{ path(pagination.route, pagination.route_params|merge({'page': page - 1})) }}\"
                       aria-label=\"Previous\">
                        <i class=\"icon-left-open-mini\"></i>
                        <span class=\"hidden\">previous</span>
                    </a>
                </li>
            {% endif %}

            {#display p numbers only from p-4 to p+4 but don't go <1 or >pages_count#}
            {% for p in range(max(pagination.page-4, 1), min(page + 4, page_count)) %}
                <li>
                    <a{% if p == page %} class=\"active\"{% endif %}
                            href=\"{{ path(pagination.route, pagination.route_params|merge({'page': p})) }}\">
                        {{ p }}
                    </a>
                </li>
            {% endfor %}

            {% if page < page_count %}
                <li>
                    <a href=\"{{ path(pagination.route, pagination.route_params|merge({'page': page + 1})) }}\"
                       aria-label=\"Next\">
                        <i class=\"icon-right-open-mini\"></i>
                        <span class=\"hidden\">next</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    {% endif %}
</nav>", "@CocoricoCore/Frontend/Common/_pagination.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_pagination.html.twig");
    }
}
