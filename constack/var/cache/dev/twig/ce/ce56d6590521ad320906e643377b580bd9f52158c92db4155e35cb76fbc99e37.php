<?php

/* @CocoricoCore/Frontend/layout.html.twig */
class __TwigTemplate_bf38c04dcbd230215e3f117ec5eb9bf812e6d65a4c62656593b8b405f197635d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
            'header' => array($this, 'block_header'),
            'sub_header' => array($this, 'block_sub_header'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d3abd80228564832500092f89d3555660f0234f72e30056c8a6f1e5155402a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d3abd80228564832500092f89d3555660f0234f72e30056c8a6f1e5155402a->enter($__internal_a0d3abd80228564832500092f89d3555660f0234f72e30056c8a6f1e5155402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/layout.html.twig"));

        $__internal_28e05d492c960f9d15e8e4fa0a3c9439551776f7de7c2d3e718d9093fd9744ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e05d492c960f9d15e8e4fa0a3c9439551776f7de7c2d3e718d9093fd9744ae->enter($__internal_28e05d492c960f9d15e8e4fa0a3c9439551776f7de7c2d3e718d9093fd9744ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/layout.html.twig"));

        // line 1
        $this->displayBlock('layout', $context, $blocks);
        
        $__internal_a0d3abd80228564832500092f89d3555660f0234f72e30056c8a6f1e5155402a->leave($__internal_a0d3abd80228564832500092f89d3555660f0234f72e30056c8a6f1e5155402a_prof);

        
        $__internal_28e05d492c960f9d15e8e4fa0a3c9439551776f7de7c2d3e718d9093fd9744ae->leave($__internal_28e05d492c960f9d15e8e4fa0a3c9439551776f7de7c2d3e718d9093fd9744ae_prof);

    }

    public function block_layout($context, array $blocks = array())
    {
        $__internal_e0756dce437f06f2ebd48352621b72e56d602896e3678f60a16ca11b47eb12c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0756dce437f06f2ebd48352621b72e56d602896e3678f60a16ca11b47eb12c0->enter($__internal_e0756dce437f06f2ebd48352621b72e56d602896e3678f60a16ca11b47eb12c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_7ce35c52a8bb93cc9e61d8f439d6e7e4d0c8ebd62a84832b8b382dac0b132cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce35c52a8bb93cc9e61d8f439d6e7e4d0c8ebd62a84832b8b382dac0b132cd4->enter($__internal_7ce35c52a8bb93cc9e61d8f439d6e7e4d0c8ebd62a84832b8b382dac0b132cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 2
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('sub_header', $context, $blocks);
        // line 7
        echo "
    <!-- contain main informative part of the site -->
    <main id=\"main\" role=\"main\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 12
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 13
        echo "
                ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "            </div>
        </div>
        ";
        // line 18
        echo "        ";
        $this->displayBlock('modal', $context, $blocks);
        // line 19
        echo "    </main>

    ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_7ce35c52a8bb93cc9e61d8f439d6e7e4d0c8ebd62a84832b8b382dac0b132cd4->leave($__internal_7ce35c52a8bb93cc9e61d8f439d6e7e4d0c8ebd62a84832b8b382dac0b132cd4_prof);

        
        $__internal_e0756dce437f06f2ebd48352621b72e56d602896e3678f60a16ca11b47eb12c0->leave($__internal_e0756dce437f06f2ebd48352621b72e56d602896e3678f60a16ca11b47eb12c0_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_770bf4d43e94bc03f8a59bdf6e2a145c630deb468fa65d010cb5a8254e11bc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770bf4d43e94bc03f8a59bdf6e2a145c630deb468fa65d010cb5a8254e11bc2a->enter($__internal_770bf4d43e94bc03f8a59bdf6e2a145c630deb468fa65d010cb5a8254e11bc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d781b580e0d9c46737658280995e25cb25e9f1b1baf9a4cd58eadbb7de5fe9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d781b580e0d9c46737658280995e25cb25e9f1b1baf9a4cd58eadbb7de5fe9d2->enter($__internal_d781b580e0d9c46737658280995e25cb25e9f1b1baf9a4cd58eadbb7de5fe9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "        ";
        $this->loadTemplate("@CocoricoCore/Frontend/Common/_header.html.twig", "@CocoricoCore/Frontend/layout.html.twig", 3)->display(array());
        // line 4
        echo "    ";
        
        $__internal_d781b580e0d9c46737658280995e25cb25e9f1b1baf9a4cd58eadbb7de5fe9d2->leave($__internal_d781b580e0d9c46737658280995e25cb25e9f1b1baf9a4cd58eadbb7de5fe9d2_prof);

        
        $__internal_770bf4d43e94bc03f8a59bdf6e2a145c630deb468fa65d010cb5a8254e11bc2a->leave($__internal_770bf4d43e94bc03f8a59bdf6e2a145c630deb468fa65d010cb5a8254e11bc2a_prof);

    }

    // line 6
    public function block_sub_header($context, array $blocks = array())
    {
        $__internal_5edebebd54387e96c10f1b80b282fdab4874e912f9edf28136bbd454c26f713e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edebebd54387e96c10f1b80b282fdab4874e912f9edf28136bbd454c26f713e->enter($__internal_5edebebd54387e96c10f1b80b282fdab4874e912f9edf28136bbd454c26f713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_header"));

        $__internal_65133118690bb46c65f6f83ce2252077531b193065c2ffb7460e86863ba1b0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65133118690bb46c65f6f83ce2252077531b193065c2ffb7460e86863ba1b0de->enter($__internal_65133118690bb46c65f6f83ce2252077531b193065c2ffb7460e86863ba1b0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_header"));

        
        $__internal_65133118690bb46c65f6f83ce2252077531b193065c2ffb7460e86863ba1b0de->leave($__internal_65133118690bb46c65f6f83ce2252077531b193065c2ffb7460e86863ba1b0de_prof);

        
        $__internal_5edebebd54387e96c10f1b80b282fdab4874e912f9edf28136bbd454c26f713e->leave($__internal_5edebebd54387e96c10f1b80b282fdab4874e912f9edf28136bbd454c26f713e_prof);

    }

    // line 12
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_432f99404ddd3b57fe01da72d5e0ec007a2837f4e8b01c488be3047143352325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432f99404ddd3b57fe01da72d5e0ec007a2837f4e8b01c488be3047143352325->enter($__internal_432f99404ddd3b57fe01da72d5e0ec007a2837f4e8b01c488be3047143352325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_85c5eb81815c2f36073c84aa0efe69bb09164a3cee4a85c24fc4782a27c9087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c5eb81815c2f36073c84aa0efe69bb09164a3cee4a85c24fc4782a27c9087f->enter($__internal_85c5eb81815c2f36073c84aa0efe69bb09164a3cee4a85c24fc4782a27c9087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_85c5eb81815c2f36073c84aa0efe69bb09164a3cee4a85c24fc4782a27c9087f->leave($__internal_85c5eb81815c2f36073c84aa0efe69bb09164a3cee4a85c24fc4782a27c9087f_prof);

        
        $__internal_432f99404ddd3b57fe01da72d5e0ec007a2837f4e8b01c488be3047143352325->leave($__internal_432f99404ddd3b57fe01da72d5e0ec007a2837f4e8b01c488be3047143352325_prof);

    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        $__internal_eae8d69f769eb6e59267835ea4328386fe8e7a8bbe2432842f886209444a6e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae8d69f769eb6e59267835ea4328386fe8e7a8bbe2432842f886209444a6e40->enter($__internal_eae8d69f769eb6e59267835ea4328386fe8e7a8bbe2432842f886209444a6e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_504cd40bbaeef5e658a7ab7653de1de9904774d24817b429b4f0eb7498b9cd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504cd40bbaeef5e658a7ab7653de1de9904774d24817b429b4f0eb7498b9cd34->enter($__internal_504cd40bbaeef5e658a7ab7653de1de9904774d24817b429b4f0eb7498b9cd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_504cd40bbaeef5e658a7ab7653de1de9904774d24817b429b4f0eb7498b9cd34->leave($__internal_504cd40bbaeef5e658a7ab7653de1de9904774d24817b429b4f0eb7498b9cd34_prof);

        
        $__internal_eae8d69f769eb6e59267835ea4328386fe8e7a8bbe2432842f886209444a6e40->leave($__internal_eae8d69f769eb6e59267835ea4328386fe8e7a8bbe2432842f886209444a6e40_prof);

    }

    // line 18
    public function block_modal($context, array $blocks = array())
    {
        $__internal_146f1583bfd5293a7bc428d834ec3c2682c4bda1680bafda074c8ab8f45f821c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146f1583bfd5293a7bc428d834ec3c2682c4bda1680bafda074c8ab8f45f821c->enter($__internal_146f1583bfd5293a7bc428d834ec3c2682c4bda1680bafda074c8ab8f45f821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_dc155d0945ea5900c4d141474e742f2a885682fc122dbd851b557a10055d097d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc155d0945ea5900c4d141474e742f2a885682fc122dbd851b557a10055d097d->enter($__internal_dc155d0945ea5900c4d141474e742f2a885682fc122dbd851b557a10055d097d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_dc155d0945ea5900c4d141474e742f2a885682fc122dbd851b557a10055d097d->leave($__internal_dc155d0945ea5900c4d141474e742f2a885682fc122dbd851b557a10055d097d_prof);

        
        $__internal_146f1583bfd5293a7bc428d834ec3c2682c4bda1680bafda074c8ab8f45f821c->leave($__internal_146f1583bfd5293a7bc428d834ec3c2682c4bda1680bafda074c8ab8f45f821c_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_65be9c8f0392f5a2b94a2dc1ad89702fb98ec0009b08488129883343d8e501c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65be9c8f0392f5a2b94a2dc1ad89702fb98ec0009b08488129883343d8e501c3->enter($__internal_65be9c8f0392f5a2b94a2dc1ad89702fb98ec0009b08488129883343d8e501c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_64b015325f3345fefa42e582a9af429e900f82093d34255d621766ef8511b40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b015325f3345fefa42e582a9af429e900f82093d34255d621766ef8511b40c->enter($__internal_64b015325f3345fefa42e582a9af429e900f82093d34255d621766ef8511b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "        ";
        $this->loadTemplate("@CocoricoCore/Frontend/Common/_footer.html.twig", "@CocoricoCore/Frontend/layout.html.twig", 22)->display(array());
        // line 23
        echo "    ";
        
        $__internal_64b015325f3345fefa42e582a9af429e900f82093d34255d621766ef8511b40c->leave($__internal_64b015325f3345fefa42e582a9af429e900f82093d34255d621766ef8511b40c_prof);

        
        $__internal_65be9c8f0392f5a2b94a2dc1ad89702fb98ec0009b08488129883343d8e501c3->leave($__internal_65be9c8f0392f5a2b94a2dc1ad89702fb98ec0009b08488129883343d8e501c3_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 23,  192 => 22,  183 => 21,  166 => 18,  149 => 14,  132 => 12,  115 => 6,  105 => 4,  102 => 3,  93 => 2,  83 => 21,  79 => 19,  76 => 18,  72 => 15,  70 => 14,  67 => 13,  65 => 12,  58 => 7,  56 => 6,  53 => 5,  50 => 2,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block layout %}
    {% block header %}
        {% include '@CocoricoCore/Frontend/Common/_header.html.twig' only %}
    {% endblock %}

    {% block sub_header %}{% endblock %}

    <!-- contain main informative part of the site -->
    <main id=\"main\" role=\"main\">
        <div class=\"container\">
            <div class=\"row\">
                {% block breadcrumbs %}{% endblock %}

                {% block main %}{% endblock %}
            </div>
        </div>
        {#popin#}
        {% block modal %}{% endblock %}
    </main>

    {% block footer %}
        {% include '@CocoricoCore/Frontend/Common/_footer.html.twig' only %}
    {% endblock %}
{% endblock %}
", "@CocoricoCore/Frontend/layout.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/layout.html.twig");
    }
}
