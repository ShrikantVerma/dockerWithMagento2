<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2152f55af5c66b1fd52d145f2107c228e7e821024d0314ccfa861d74de52bc94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3915b2df4b2432815b73cac35bde120f0443641d05e0eb235ad5a198ef7233ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3915b2df4b2432815b73cac35bde120f0443641d05e0eb235ad5a198ef7233ca->enter($__internal_3915b2df4b2432815b73cac35bde120f0443641d05e0eb235ad5a198ef7233ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_924428c8be1c2da2bac8da10c22dde86673404d3040ec881317872a263123240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924428c8be1c2da2bac8da10c22dde86673404d3040ec881317872a263123240->enter($__internal_924428c8be1c2da2bac8da10c22dde86673404d3040ec881317872a263123240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3915b2df4b2432815b73cac35bde120f0443641d05e0eb235ad5a198ef7233ca->leave($__internal_3915b2df4b2432815b73cac35bde120f0443641d05e0eb235ad5a198ef7233ca_prof);

        
        $__internal_924428c8be1c2da2bac8da10c22dde86673404d3040ec881317872a263123240->leave($__internal_924428c8be1c2da2bac8da10c22dde86673404d3040ec881317872a263123240_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_984e3ad04f2f5c27670b181ee62ee6874aec7077c94c740866d59f89f07371f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984e3ad04f2f5c27670b181ee62ee6874aec7077c94c740866d59f89f07371f4->enter($__internal_984e3ad04f2f5c27670b181ee62ee6874aec7077c94c740866d59f89f07371f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75ddbd9298c1120db1a161d574ee87dcef987fe08a2c32933e19b7b82f689e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ddbd9298c1120db1a161d574ee87dcef987fe08a2c32933e19b7b82f689e93->enter($__internal_75ddbd9298c1120db1a161d574ee87dcef987fe08a2c32933e19b7b82f689e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_75ddbd9298c1120db1a161d574ee87dcef987fe08a2c32933e19b7b82f689e93->leave($__internal_75ddbd9298c1120db1a161d574ee87dcef987fe08a2c32933e19b7b82f689e93_prof);

        
        $__internal_984e3ad04f2f5c27670b181ee62ee6874aec7077c94c740866d59f89f07371f4->leave($__internal_984e3ad04f2f5c27670b181ee62ee6874aec7077c94c740866d59f89f07371f4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dffc4e15ed35459becd4ee9359530dee1158768c2a822632ed195c5b2132a7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffc4e15ed35459becd4ee9359530dee1158768c2a822632ed195c5b2132a7f1->enter($__internal_dffc4e15ed35459becd4ee9359530dee1158768c2a822632ed195c5b2132a7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dea26b95cedeacb3907106a348c62befffbce50a2ac6f98fb906d66f490caa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea26b95cedeacb3907106a348c62befffbce50a2ac6f98fb906d66f490caa01->enter($__internal_dea26b95cedeacb3907106a348c62befffbce50a2ac6f98fb906d66f490caa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dea26b95cedeacb3907106a348c62befffbce50a2ac6f98fb906d66f490caa01->leave($__internal_dea26b95cedeacb3907106a348c62befffbce50a2ac6f98fb906d66f490caa01_prof);

        
        $__internal_dffc4e15ed35459becd4ee9359530dee1158768c2a822632ed195c5b2132a7f1->leave($__internal_dffc4e15ed35459becd4ee9359530dee1158768c2a822632ed195c5b2132a7f1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebd6b295e223499bcbaca51894825e3e2a39aa9fc9c59f06fa55dbdb13ffadea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd6b295e223499bcbaca51894825e3e2a39aa9fc9c59f06fa55dbdb13ffadea->enter($__internal_ebd6b295e223499bcbaca51894825e3e2a39aa9fc9c59f06fa55dbdb13ffadea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b325cc9541c2a67861759b002e070e86ec053390e0c82325169aeb36c0dc6ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b325cc9541c2a67861759b002e070e86ec053390e0c82325169aeb36c0dc6ac9->enter($__internal_b325cc9541c2a67861759b002e070e86ec053390e0c82325169aeb36c0dc6ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b325cc9541c2a67861759b002e070e86ec053390e0c82325169aeb36c0dc6ac9->leave($__internal_b325cc9541c2a67861759b002e070e86ec053390e0c82325169aeb36c0dc6ac9_prof);

        
        $__internal_ebd6b295e223499bcbaca51894825e3e2a39aa9fc9c59f06fa55dbdb13ffadea->leave($__internal_ebd6b295e223499bcbaca51894825e3e2a39aa9fc9c59f06fa55dbdb13ffadea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
