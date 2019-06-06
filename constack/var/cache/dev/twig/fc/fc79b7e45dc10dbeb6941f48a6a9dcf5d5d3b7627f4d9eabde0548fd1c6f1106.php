<?php

/* @CocoricoCore/Frontend/Common/language_switcher.html.twig */
class __TwigTemplate_544fea199f04f64eea4fa1867294bdbd7cfc00e07e7224ad992c5d15d8fd57f4 extends Twig_Template
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
        $__internal_be44ffca6de4263b007bdfd15d46a984bdab874b0c44346151882544054894a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be44ffca6de4263b007bdfd15d46a984bdab874b0c44346151882544054894a2->enter($__internal_be44ffca6de4263b007bdfd15d46a984bdab874b0c44346151882544054894a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/language_switcher.html.twig"));

        $__internal_e28ccc2aeac618e5bda7383426adf20ec13c33e2fb2b9c60f71695b562847410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28ccc2aeac618e5bda7383426adf20ec13c33e2fb2b9c60f71695b562847410->enter($__internal_e28ccc2aeac618e5bda7383426adf20ec13c33e2fb2b9c60f71695b562847410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/language_switcher.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["languages_links"]) || array_key_exists("languages_links", $context) ? $context["languages_links"] : (function () { throw new Twig_Error_Runtime('Variable "languages_links" does not exist.', 3, $this->getSourceContext()); })())) > 1)) {
            // line 4
            echo "    <li class=\"dropdown link-flag\">
        <a href=\"#\" tabindex=\"8\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/flags/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "locale", array())) . ".png")), "html", null, true);
            echo "\" alt=\"flag\" class=\"flag\" width=\"16\"
                 height=\"11\">
            <span class=\"icon-down-open-mini\"></span>
        </a>
        <ul class=\"dropdown-menu flag-list\" role=\"menu\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages_links"]) || array_key_exists("languages_links", $context) ? $context["languages_links"] : (function () { throw new Twig_Error_Runtime('Variable "languages_links" does not exist.', 11, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["language"] => $context["link"]) {
                // line 12
                echo "<li>
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">
                        <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/flags/" . $context["language"]) . ".png")), "html", null, true);
                echo "\" alt=\"flag\" class=\"flag\" width=\"16\"
                             height=\"11\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["language"]), "html", null, true);
                echo "
                    </a>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['language'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</ul>
    </li>
";
        }
        
        $__internal_be44ffca6de4263b007bdfd15d46a984bdab874b0c44346151882544054894a2->leave($__internal_be44ffca6de4263b007bdfd15d46a984bdab874b0c44346151882544054894a2_prof);

        
        $__internal_e28ccc2aeac618e5bda7383426adf20ec13c33e2fb2b9c60f71695b562847410->leave($__internal_e28ccc2aeac618e5bda7383426adf20ec13c33e2fb2b9c60f71695b562847410_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/language_switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  57 => 16,  52 => 14,  48 => 13,  45 => 12,  41 => 11,  34 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

{% if languages_links|length > 1 %}
    <li class=\"dropdown link-flag\">
        <a href=\"#\" tabindex=\"8\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
            <img src=\"{{ asset('images/flags/' ~  app.request.locale ~ '.png') }}\" alt=\"flag\" class=\"flag\" width=\"16\"
                 height=\"11\">
            <span class=\"icon-down-open-mini\"></span>
        </a>
        <ul class=\"dropdown-menu flag-list\" role=\"menu\">
            {%- for language, link in languages_links -%}
                <li>
                    <a href=\"{{ link }}\">
                        <img src=\"{{ asset('images/flags/' ~  language ~ '.png') }}\" alt=\"flag\" class=\"flag\" width=\"16\"
                             height=\"11\">
                        {{ language|capitalize }}
                    </a>
                </li>
            {%- endfor -%}
        </ul>
    </li>
{% endif %}", "@CocoricoCore/Frontend/Common/language_switcher.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/language_switcher.html.twig");
    }
}
