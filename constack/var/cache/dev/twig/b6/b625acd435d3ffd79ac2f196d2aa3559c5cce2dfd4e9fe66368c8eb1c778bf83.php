<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36e8d6819d0828586765a1cbf0143d65f933cd0cf8014df148f3b9ce6680d35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57aaafbb892508806237bf900482d6cebd17e0bcf3db63c37fc025b47d8c6958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57aaafbb892508806237bf900482d6cebd17e0bcf3db63c37fc025b47d8c6958->enter($__internal_57aaafbb892508806237bf900482d6cebd17e0bcf3db63c37fc025b47d8c6958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c3f81782f658172da09107d202b96df63d041ae5b04b9c592b1d5616651f6b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f81782f658172da09107d202b96df63d041ae5b04b9c592b1d5616651f6b56->enter($__internal_c3f81782f658172da09107d202b96df63d041ae5b04b9c592b1d5616651f6b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57aaafbb892508806237bf900482d6cebd17e0bcf3db63c37fc025b47d8c6958->leave($__internal_57aaafbb892508806237bf900482d6cebd17e0bcf3db63c37fc025b47d8c6958_prof);

        
        $__internal_c3f81782f658172da09107d202b96df63d041ae5b04b9c592b1d5616651f6b56->leave($__internal_c3f81782f658172da09107d202b96df63d041ae5b04b9c592b1d5616651f6b56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80cffcd9f8ea54704658d3f1ac086f37b3c958b892f3aea9a3ca3f346225ea88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cffcd9f8ea54704658d3f1ac086f37b3c958b892f3aea9a3ca3f346225ea88->enter($__internal_80cffcd9f8ea54704658d3f1ac086f37b3c958b892f3aea9a3ca3f346225ea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc781c9fee92f23bdd566fd7f568a052702a2d1af1ef43f4648310aa49809c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc781c9fee92f23bdd566fd7f568a052702a2d1af1ef43f4648310aa49809c5d->enter($__internal_cc781c9fee92f23bdd566fd7f568a052702a2d1af1ef43f4648310aa49809c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc781c9fee92f23bdd566fd7f568a052702a2d1af1ef43f4648310aa49809c5d->leave($__internal_cc781c9fee92f23bdd566fd7f568a052702a2d1af1ef43f4648310aa49809c5d_prof);

        
        $__internal_80cffcd9f8ea54704658d3f1ac086f37b3c958b892f3aea9a3ca3f346225ea88->leave($__internal_80cffcd9f8ea54704658d3f1ac086f37b3c958b892f3aea9a3ca3f346225ea88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_591ac5dec08a5594b4f4fdebd5fc8c47f8977b5198bdfb725717c237ff409e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591ac5dec08a5594b4f4fdebd5fc8c47f8977b5198bdfb725717c237ff409e3a->enter($__internal_591ac5dec08a5594b4f4fdebd5fc8c47f8977b5198bdfb725717c237ff409e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_539c3bc7db9a823499fafbc759c9cfc9f9e3100dc504cccb70705566a34e5df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539c3bc7db9a823499fafbc759c9cfc9f9e3100dc504cccb70705566a34e5df7->enter($__internal_539c3bc7db9a823499fafbc759c9cfc9f9e3100dc504cccb70705566a34e5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_539c3bc7db9a823499fafbc759c9cfc9f9e3100dc504cccb70705566a34e5df7->leave($__internal_539c3bc7db9a823499fafbc759c9cfc9f9e3100dc504cccb70705566a34e5df7_prof);

        
        $__internal_591ac5dec08a5594b4f4fdebd5fc8c47f8977b5198bdfb725717c237ff409e3a->leave($__internal_591ac5dec08a5594b4f4fdebd5fc8c47f8977b5198bdfb725717c237ff409e3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05f6b33e2e2b08eefef51c5c90fb03622304402dca588ea584341f48c4210b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f6b33e2e2b08eefef51c5c90fb03622304402dca588ea584341f48c4210b49->enter($__internal_05f6b33e2e2b08eefef51c5c90fb03622304402dca588ea584341f48c4210b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c775afe2bdb002d1c017c7d02c7cca0c472433049c6416b414f4977584ed99e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c775afe2bdb002d1c017c7d02c7cca0c472433049c6416b414f4977584ed99e0->enter($__internal_c775afe2bdb002d1c017c7d02c7cca0c472433049c6416b414f4977584ed99e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c775afe2bdb002d1c017c7d02c7cca0c472433049c6416b414f4977584ed99e0->leave($__internal_c775afe2bdb002d1c017c7d02c7cca0c472433049c6416b414f4977584ed99e0_prof);

        
        $__internal_05f6b33e2e2b08eefef51c5c90fb03622304402dca588ea584341f48c4210b49->leave($__internal_05f6b33e2e2b08eefef51c5c90fb03622304402dca588ea584341f48c4210b49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
