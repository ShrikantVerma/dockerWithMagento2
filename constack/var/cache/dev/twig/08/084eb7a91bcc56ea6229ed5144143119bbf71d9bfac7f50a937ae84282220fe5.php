<?php

/* @CocoricoCore/Frontend/Home/form_search.html.twig */
class __TwigTemplate_3736ff4abfcacaed8f478808b85d52ddd687cb66b57a2fcb10d7ae0377e11424 extends Twig_Template
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
        $__internal_0cc6b228f22af312eb2ce4200a8eec5a4edbe7ae7d1c2343c0fc0fb40db64809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc6b228f22af312eb2ce4200a8eec5a4edbe7ae7d1c2343c0fc0fb40db64809->enter($__internal_0cc6b228f22af312eb2ce4200a8eec5a4edbe7ae7d1c2343c0fc0fb40db64809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Home/form_search.html.twig"));

        $__internal_c2308f9ea8082b356d9f6af524adf67e47655e138d7667dd9f9da5cb60b1a16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2308f9ea8082b356d9f6af524adf67e47655e138d7667dd9f9da5cb60b1a16f->enter($__internal_c2308f9ea8082b356d9f6af524adf67e47655e138d7667dd9f9da5cb60b1a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Home/form_search.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_flash.html.twig", "@CocoricoCore/Frontend/Home/form_search.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-category")));
        echo "

";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'errors');
        echo "

";
        // line 9
        $this->loadTemplate("@CocoricoCore/Frontend/Home/form_search_fields.html.twig", "@CocoricoCore/Frontend/Home/form_search.html.twig", 9)->display(array("form" =>         // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })())));
        // line 12
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_0cc6b228f22af312eb2ce4200a8eec5a4edbe7ae7d1c2343c0fc0fb40db64809->leave($__internal_0cc6b228f22af312eb2ce4200a8eec5a4edbe7ae7d1c2343c0fc0fb40db64809_prof);

        
        $__internal_c2308f9ea8082b356d9f6af524adf67e47655e138d7667dd9f9da5cb60b1a16f->leave($__internal_c2308f9ea8082b356d9f6af524adf67e47655e138d7667dd9f9da5cb60b1a16f_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Home/form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  46 => 12,  44 => 10,  43 => 9,  38 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

{% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}

{{ form_start(form, {'attr': {'class': 'form-category'}}) }}

{{ form_errors(form) }}

{% include '@CocoricoCore/Frontend/Home/form_search_fields.html.twig' with {
    'form': form
} only %}

{{ form_end(form) }}", "@CocoricoCore/Frontend/Home/form_search.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Home/form_search.html.twig");
    }
}
