<?php

/* @CocoricoCore/Frontend/Common/_currency_switcher.html.twig */
class __TwigTemplate_22f12b3fe7248dfa86ec34385fb2712f3af5cf1bfc57572eb78c16a21ecc0bc4 extends Twig_Template
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
        $__internal_e4e912cad08523f0d093dab1d5e2571b6d7e5b10ae38193016917c42a5c52ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e912cad08523f0d093dab1d5e2571b6d7e5b10ae38193016917c42a5c52ff2->enter($__internal_e4e912cad08523f0d093dab1d5e2571b6d7e5b10ae38193016917c42a5c52ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_currency_switcher.html.twig"));

        $__internal_f410048718ce854bd8a47792477d5bc0e535a553bde906104bddf637b70adf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f410048718ce854bd8a47792477d5bc0e535a553bde906104bddf637b70adf25->enter($__internal_f410048718ce854bd8a47792477d5bc0e535a553bde906104bddf637b70adf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_currency_switcher.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 3, $this->getSourceContext()); })())) > 1)) {
            // line 4
            echo "    <li class=\"dropdown\">
        <a href=\"#\" tabindex=\"9\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            ";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 6, $this->getSourceContext()); })()), (isset($context["currentCurrency"]) || array_key_exists("currentCurrency", $context) ? $context["currentCurrency"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrency" does not exist.', 6, $this->getSourceContext()); })()), array(), "array") . " ") . (isset($context["currentCurrency"]) || array_key_exists("currentCurrency", $context) ? $context["currentCurrency"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrency" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
            echo "
            <span class=\"icon-down-open-mini\"></span>
        </a>

        <ul class=\"dropdown-menu\" role=\"menu\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 11, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["currency"] => $context["symbol"]) {
                // line 12
                echo "<li>
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_currency_switch", array("currency" => $context["currency"])), "html", null, true);
                echo "\">
                        ";
                // line 14
                echo twig_escape_filter($this->env, (($context["symbol"] . " ") . $context["currency"]), "html", null, true);
                echo "
                    </a>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['currency'], $context['symbol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "</ul>
    </li>
";
        }
        
        $__internal_e4e912cad08523f0d093dab1d5e2571b6d7e5b10ae38193016917c42a5c52ff2->leave($__internal_e4e912cad08523f0d093dab1d5e2571b6d7e5b10ae38193016917c42a5c52ff2_prof);

        
        $__internal_f410048718ce854bd8a47792477d5bc0e535a553bde906104bddf637b70adf25->leave($__internal_f410048718ce854bd8a47792477d5bc0e535a553bde906104bddf637b70adf25_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/_currency_switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  52 => 14,  48 => 13,  45 => 12,  41 => 11,  34 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

{% if currencies|length > 1 %}
    <li class=\"dropdown\">
        <a href=\"#\" tabindex=\"9\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            {{ currencies[currentCurrency] ~ \" \" ~ currentCurrency }}
            <span class=\"icon-down-open-mini\"></span>
        </a>

        <ul class=\"dropdown-menu\" role=\"menu\">
            {%- for currency, symbol in currencies -%}
                <li>
                    <a href=\"{{ path('cocorico_currency_switch', { 'currency': currency }) }}\">
                        {{ symbol ~ \" \" ~ currency }}
                    </a>
                </li>
            {%- endfor -%}
        </ul>
    </li>
{% endif %}", "@CocoricoCore/Frontend/Common/_currency_switcher.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_currency_switcher.html.twig");
    }
}
