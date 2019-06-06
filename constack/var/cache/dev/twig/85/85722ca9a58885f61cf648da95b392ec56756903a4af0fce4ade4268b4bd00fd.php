<?php

/* @CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig */
class __TwigTemplate_4b2a4049eecaabaec324fbee5f553128a3bbfa6fbeef0eedd58cf751b84995b6 extends Twig_Template
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
        $__internal_2e780c4e62722e01f2321ff738751a5b19e261d446cdf2ade13aa6789c185b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e780c4e62722e01f2321ff738751a5b19e261d446cdf2ade13aa6789c185b4f->enter($__internal_2e780c4e62722e01f2321ff738751a5b19e261d446cdf2ade13aa6789c185b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig"));

        $__internal_e4e57dc9248615694eef6e54985714fd0569c255ff657ccfbe97bef50d37f1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e57dc9248615694eef6e54985714fd0569c255ff657ccfbe97bef50d37f1e2->enter($__internal_e4e57dc9248615694eef6e54985714fd0569c255ff657ccfbe97bef50d37f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig"));

        // line 1
        if ((isset($context["cocorico_google_analytics"]) || array_key_exists("cocorico_google_analytics", $context) ? $context["cocorico_google_analytics"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_google_analytics" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    ";
            // line 3
            echo "    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["cocorico_google_analytics"]) || array_key_exists("cocorico_google_analytics", $context) ? $context["cocorico_google_analytics"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_google_analytics" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "', 'auto');
        ga('send', 'pageview');
    </script>
";
        }
        
        $__internal_2e780c4e62722e01f2321ff738751a5b19e261d446cdf2ade13aa6789c185b4f->leave($__internal_2e780c4e62722e01f2321ff738751a5b19e261d446cdf2ade13aa6789c185b4f_prof);

        
        $__internal_e4e57dc9248615694eef6e54985714fd0569c255ff657ccfbe97bef50d37f1e2->leave($__internal_e4e57dc9248615694eef6e54985714fd0569c255ff657ccfbe97bef50d37f1e2_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if cocorico_google_analytics %}
    {#google analytics#}
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '{{ cocorico_google_analytics }}', 'auto');
        ga('send', 'pageview');
    </script>
{% endif %}", "@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/js/_google_analytics_js.html.twig");
    }
}
