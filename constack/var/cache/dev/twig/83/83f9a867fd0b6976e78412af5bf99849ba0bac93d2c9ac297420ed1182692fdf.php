<?php

/* CocoricoBreadcrumbBundle:Breadcrumbs:index.html.twig */
class __TwigTemplate_43976c78d449f5983e8850c63947a89ba103418448acaf040f32c877e304942d extends Twig_Template
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
        $__internal_e3fd738b1cf599af88b7c4f63d2e6cf23213c1c67579852c4c1589d78d40f41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fd738b1cf599af88b7c4f63d2e6cf23213c1c67579852c4c1589d78d40f41f->enter($__internal_e3fd738b1cf599af88b7c4f63d2e6cf23213c1c67579852c4c1589d78d40f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoBreadcrumbBundle:Breadcrumbs:index.html.twig"));

        $__internal_24335b73fc2a79b429f65a8fd69755bd47d9423eb3a8507836d0511f6150e6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24335b73fc2a79b429f65a8fd69755bd47d9423eb3a8507836d0511f6150e6ea->enter($__internal_24335b73fc2a79b429f65a8fd69755bd47d9423eb3a8507836d0511f6150e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoBreadcrumbBundle:Breadcrumbs:index.html.twig"));

        // line 1
        echo $this->env->getExtension('WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension')->renderBreadcrumbs();
        
        $__internal_e3fd738b1cf599af88b7c4f63d2e6cf23213c1c67579852c4c1589d78d40f41f->leave($__internal_e3fd738b1cf599af88b7c4f63d2e6cf23213c1c67579852c4c1589d78d40f41f_prof);

        
        $__internal_24335b73fc2a79b429f65a8fd69755bd47d9423eb3a8507836d0511f6150e6ea->leave($__internal_24335b73fc2a79b429f65a8fd69755bd47d9423eb3a8507836d0511f6150e6ea_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoBreadcrumbBundle:Breadcrumbs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ wo_render_breadcrumbs() }}", "CocoricoBreadcrumbBundle:Breadcrumbs:index.html.twig", "/cocorico/src/Cocorico/BreadcrumbBundle/Resources/views/Breadcrumbs/index.html.twig");
    }
}
