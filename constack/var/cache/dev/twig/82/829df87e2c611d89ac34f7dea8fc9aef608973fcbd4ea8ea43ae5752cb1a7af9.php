<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_03a60e46d9e2eb271aee9bf403fc59fe4ccdf6aa212f86e2258cf834d68ec387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51087b9af03a012a85fe2f5caf53460788f78246fc6e3418826b6aa5bd8b407a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51087b9af03a012a85fe2f5caf53460788f78246fc6e3418826b6aa5bd8b407a->enter($__internal_51087b9af03a012a85fe2f5caf53460788f78246fc6e3418826b6aa5bd8b407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1b68bb83004f85770c50d333be043addbf84bc21ff6e94d648f35a44222f7d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b68bb83004f85770c50d333be043addbf84bc21ff6e94d648f35a44222f7d8c->enter($__internal_1b68bb83004f85770c50d333be043addbf84bc21ff6e94d648f35a44222f7d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51087b9af03a012a85fe2f5caf53460788f78246fc6e3418826b6aa5bd8b407a->leave($__internal_51087b9af03a012a85fe2f5caf53460788f78246fc6e3418826b6aa5bd8b407a_prof);

        
        $__internal_1b68bb83004f85770c50d333be043addbf84bc21ff6e94d648f35a44222f7d8c->leave($__internal_1b68bb83004f85770c50d333be043addbf84bc21ff6e94d648f35a44222f7d8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8024b80524f2e90e051522370e2864fc52e46a491ebfd61475679ad41a0bd9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8024b80524f2e90e051522370e2864fc52e46a491ebfd61475679ad41a0bd9ec->enter($__internal_8024b80524f2e90e051522370e2864fc52e46a491ebfd61475679ad41a0bd9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c1fa7f9b0264632823d0063999238490b9d9739d97c46b18feb394de0735c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1fa7f9b0264632823d0063999238490b9d9739d97c46b18feb394de0735c85->enter($__internal_9c1fa7f9b0264632823d0063999238490b9d9739d97c46b18feb394de0735c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9c1fa7f9b0264632823d0063999238490b9d9739d97c46b18feb394de0735c85->leave($__internal_9c1fa7f9b0264632823d0063999238490b9d9739d97c46b18feb394de0735c85_prof);

        
        $__internal_8024b80524f2e90e051522370e2864fc52e46a491ebfd61475679ad41a0bd9ec->leave($__internal_8024b80524f2e90e051522370e2864fc52e46a491ebfd61475679ad41a0bd9ec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4a7f5062b76744025881c8222e308c9310c562343ef16d9c7f763c092e621cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a7f5062b76744025881c8222e308c9310c562343ef16d9c7f763c092e621cc->enter($__internal_e4a7f5062b76744025881c8222e308c9310c562343ef16d9c7f763c092e621cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4311ac342b47cd33da79a16748c4f9ae750f14323cf57fb016406e56f8ce201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4311ac342b47cd33da79a16748c4f9ae750f14323cf57fb016406e56f8ce201->enter($__internal_f4311ac342b47cd33da79a16748c4f9ae750f14323cf57fb016406e56f8ce201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f4311ac342b47cd33da79a16748c4f9ae750f14323cf57fb016406e56f8ce201->leave($__internal_f4311ac342b47cd33da79a16748c4f9ae750f14323cf57fb016406e56f8ce201_prof);

        
        $__internal_e4a7f5062b76744025881c8222e308c9310c562343ef16d9c7f763c092e621cc->leave($__internal_e4a7f5062b76744025881c8222e308c9310c562343ef16d9c7f763c092e621cc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ac50aed1c08f3e6ddad9b714755675dc8721734a62d4f71b60540c94474127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ac50aed1c08f3e6ddad9b714755675dc8721734a62d4f71b60540c94474127->enter($__internal_c0ac50aed1c08f3e6ddad9b714755675dc8721734a62d4f71b60540c94474127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61d1f09b6ac30bf8f43e56dc56e55e7cc1909b536ea012a9e53b8e218f6e17da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d1f09b6ac30bf8f43e56dc56e55e7cc1909b536ea012a9e53b8e218f6e17da->enter($__internal_61d1f09b6ac30bf8f43e56dc56e55e7cc1909b536ea012a9e53b8e218f6e17da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_61d1f09b6ac30bf8f43e56dc56e55e7cc1909b536ea012a9e53b8e218f6e17da->leave($__internal_61d1f09b6ac30bf8f43e56dc56e55e7cc1909b536ea012a9e53b8e218f6e17da_prof);

        
        $__internal_c0ac50aed1c08f3e6ddad9b714755675dc8721734a62d4f71b60540c94474127->leave($__internal_c0ac50aed1c08f3e6ddad9b714755675dc8721734a62d4f71b60540c94474127_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/cocorico/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
