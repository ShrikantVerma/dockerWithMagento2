<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_991e3454c74f2debe92eac49bbd0785a69e516c59514fb3f8453d1fafa336316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1693eb6548549538292a066fc905b90fb5e5949ec2fa82f9d7f1ae4f11835cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1693eb6548549538292a066fc905b90fb5e5949ec2fa82f9d7f1ae4f11835cd8->enter($__internal_1693eb6548549538292a066fc905b90fb5e5949ec2fa82f9d7f1ae4f11835cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_403cc1e686aba776491c146223369ab32df6b238979a99b69a5b4386cb31647a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403cc1e686aba776491c146223369ab32df6b238979a99b69a5b4386cb31647a->enter($__internal_403cc1e686aba776491c146223369ab32df6b238979a99b69a5b4386cb31647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1693eb6548549538292a066fc905b90fb5e5949ec2fa82f9d7f1ae4f11835cd8->leave($__internal_1693eb6548549538292a066fc905b90fb5e5949ec2fa82f9d7f1ae4f11835cd8_prof);

        
        $__internal_403cc1e686aba776491c146223369ab32df6b238979a99b69a5b4386cb31647a->leave($__internal_403cc1e686aba776491c146223369ab32df6b238979a99b69a5b4386cb31647a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f96a629477cda71db64c4cf6022a3ed6b0b1921c0d54225c4247b0a5cb9ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f96a629477cda71db64c4cf6022a3ed6b0b1921c0d54225c4247b0a5cb9ea69->enter($__internal_6f96a629477cda71db64c4cf6022a3ed6b0b1921c0d54225c4247b0a5cb9ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c96f078da60cc39143cbe8baa7a4003f4a68493fa0c107084e99733425279fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c96f078da60cc39143cbe8baa7a4003f4a68493fa0c107084e99733425279fa->enter($__internal_8c96f078da60cc39143cbe8baa7a4003f4a68493fa0c107084e99733425279fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8c96f078da60cc39143cbe8baa7a4003f4a68493fa0c107084e99733425279fa->leave($__internal_8c96f078da60cc39143cbe8baa7a4003f4a68493fa0c107084e99733425279fa_prof);

        
        $__internal_6f96a629477cda71db64c4cf6022a3ed6b0b1921c0d54225c4247b0a5cb9ea69->leave($__internal_6f96a629477cda71db64c4cf6022a3ed6b0b1921c0d54225c4247b0a5cb9ea69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
