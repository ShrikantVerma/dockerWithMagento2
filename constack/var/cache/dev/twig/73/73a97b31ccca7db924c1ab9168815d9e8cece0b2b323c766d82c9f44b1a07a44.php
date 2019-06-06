<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_aa29f92681ad914c923b9456a12cbd62415c1b4e623c96d37f53eca98f9b49e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81e2922639a59b52c3451aba559c333906ddf86e52699959e5bab18c0ddb51b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e2922639a59b52c3451aba559c333906ddf86e52699959e5bab18c0ddb51b5->enter($__internal_81e2922639a59b52c3451aba559c333906ddf86e52699959e5bab18c0ddb51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_94ab38a608b4ce7aa5e772fd784e6841f6842dd4784a161a2735279066581cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ab38a608b4ce7aa5e772fd784e6841f6842dd4784a161a2735279066581cce->enter($__internal_94ab38a608b4ce7aa5e772fd784e6841f6842dd4784a161a2735279066581cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_81e2922639a59b52c3451aba559c333906ddf86e52699959e5bab18c0ddb51b5->leave($__internal_81e2922639a59b52c3451aba559c333906ddf86e52699959e5bab18c0ddb51b5_prof);

        
        $__internal_94ab38a608b4ce7aa5e772fd784e6841f6842dd4784a161a2735279066581cce->leave($__internal_94ab38a608b4ce7aa5e772fd784e6841f6842dd4784a161a2735279066581cce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0141a4b73d666fe26bdb4cd0770671de33a6a887ed44ff3cb37dffa060eb3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0141a4b73d666fe26bdb4cd0770671de33a6a887ed44ff3cb37dffa060eb3d4->enter($__internal_a0141a4b73d666fe26bdb4cd0770671de33a6a887ed44ff3cb37dffa060eb3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce4072cd081c842ba806426caa879bae62f2498413903d214cc0f087a8be3bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4072cd081c842ba806426caa879bae62f2498413903d214cc0f087a8be3bf9->enter($__internal_ce4072cd081c842ba806426caa879bae62f2498413903d214cc0f087a8be3bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ce4072cd081c842ba806426caa879bae62f2498413903d214cc0f087a8be3bf9->leave($__internal_ce4072cd081c842ba806426caa879bae62f2498413903d214cc0f087a8be3bf9_prof);

        
        $__internal_a0141a4b73d666fe26bdb4cd0770671de33a6a887ed44ff3cb37dffa060eb3d4->leave($__internal_a0141a4b73d666fe26bdb4cd0770671de33a6a887ed44ff3cb37dffa060eb3d4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b90e35d4767777db02d0eea970a8b1693d0aa9f691fd96dc57ac1e12b3653517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90e35d4767777db02d0eea970a8b1693d0aa9f691fd96dc57ac1e12b3653517->enter($__internal_b90e35d4767777db02d0eea970a8b1693d0aa9f691fd96dc57ac1e12b3653517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4250ae5c8144eaec98d6836c6c8a87574cc58be752d75226530c3e267a928b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4250ae5c8144eaec98d6836c6c8a87574cc58be752d75226530c3e267a928b3->enter($__internal_f4250ae5c8144eaec98d6836c6c8a87574cc58be752d75226530c3e267a928b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4250ae5c8144eaec98d6836c6c8a87574cc58be752d75226530c3e267a928b3->leave($__internal_f4250ae5c8144eaec98d6836c6c8a87574cc58be752d75226530c3e267a928b3_prof);

        
        $__internal_b90e35d4767777db02d0eea970a8b1693d0aa9f691fd96dc57ac1e12b3653517->leave($__internal_b90e35d4767777db02d0eea970a8b1693d0aa9f691fd96dc57ac1e12b3653517_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4c66b2aa2b27611ce3d244a49718648d6a0cf59117db2d1738560769646cc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c66b2aa2b27611ce3d244a49718648d6a0cf59117db2d1738560769646cc58->enter($__internal_f4c66b2aa2b27611ce3d244a49718648d6a0cf59117db2d1738560769646cc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca174438a3a9373a7dc62c6bee6c882f03f63838d1a7e8ec655c8a70fa92e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca174438a3a9373a7dc62c6bee6c882f03f63838d1a7e8ec655c8a70fa92e08->enter($__internal_eca174438a3a9373a7dc62c6bee6c882f03f63838d1a7e8ec655c8a70fa92e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eca174438a3a9373a7dc62c6bee6c882f03f63838d1a7e8ec655c8a70fa92e08->leave($__internal_eca174438a3a9373a7dc62c6bee6c882f03f63838d1a7e8ec655c8a70fa92e08_prof);

        
        $__internal_f4c66b2aa2b27611ce3d244a49718648d6a0cf59117db2d1738560769646cc58->leave($__internal_f4c66b2aa2b27611ce3d244a49718648d6a0cf59117db2d1738560769646cc58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
