<?php

/* @CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig */
class __TwigTemplate_7c0ca5080919ea1049277b2d586b719ac81a4bb5222c0fc04be71479b6f123ab extends Twig_Template
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
        $__internal_6c2873d66d1e71ce12b7984a2be326c2f7be9aaed7df3e634bb10d208d9dc12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2873d66d1e71ce12b7984a2be326c2f7be9aaed7df3e634bb10d208d9dc12e->enter($__internal_6c2873d66d1e71ce12b7984a2be326c2f7be9aaed7df3e634bb10d208d9dc12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig"));

        $__internal_b6e4c5116953393f7b7d282eab777a09b8e0b8a800dc33587ec3d11c8e12e9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e4c5116953393f7b7d282eab777a09b8e0b8a800dc33587ec3d11c8e12e9a2->enter($__internal_b6e4c5116953393f7b7d282eab777a09b8e0b8a800dc33587ec3d11c8e12e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig"));

        // line 1
        if ((isset($context["cocorico_google_tag_manager"]) || array_key_exists("cocorico_google_tag_manager", $context) ? $context["cocorico_google_tag_manager"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_google_tag_manager" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    <!-- Google Tag Manager -->
    <noscript>
        <iframe src=\"//www.googletagmanager.com/ns.html?id=";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["cocorico_google_tag_manager"]) || array_key_exists("cocorico_google_tag_manager", $context) ? $context["cocorico_google_tag_manager"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_google_tag_manager" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "\" height=\"0\" width=\"0\"
                style=\"display:none;visibility:hidden\">
        </iframe>
    </noscript>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["cocorico_google_tag_manager"]) || array_key_exists("cocorico_google_tag_manager", $context) ? $context["cocorico_google_tag_manager"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_google_tag_manager" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "');
    </script>
    <!-- End Google Tag Manager -->
";
        }
        
        $__internal_6c2873d66d1e71ce12b7984a2be326c2f7be9aaed7df3e634bb10d208d9dc12e->leave($__internal_6c2873d66d1e71ce12b7984a2be326c2f7be9aaed7df3e634bb10d208d9dc12e_prof);

        
        $__internal_b6e4c5116953393f7b7d282eab777a09b8e0b8a800dc33587ec3d11c8e12e9a2->leave($__internal_b6e4c5116953393f7b7d282eab777a09b8e0b8a800dc33587ec3d11c8e12e9a2_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if cocorico_google_tag_manager %}
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src=\"//www.googletagmanager.com/ns.html?id={{ cocorico_google_tag_manager }}\" height=\"0\" width=\"0\"
                style=\"display:none;visibility:hidden\">
        </iframe>
    </noscript>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '{{ cocorico_google_tag_manager }}');
    </script>
    <!-- End Google Tag Manager -->
{% endif %}", "@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/js/_google_tag_manager_js.html.twig");
    }
}
