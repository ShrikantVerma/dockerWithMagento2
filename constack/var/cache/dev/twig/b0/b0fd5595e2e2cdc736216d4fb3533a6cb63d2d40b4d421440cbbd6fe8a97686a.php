<?php

/* @CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig */
class __TwigTemplate_cb93306cb69494455d8e4bd3dca2a3498cf1967183de071ddcd5da6186dc84ee extends Twig_Template
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
        $__internal_0a6034aa8718f7d5d0c1820f66726c7397754f8482461d5dffdda949da0a6913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6034aa8718f7d5d0c1820f66726c7397754f8482461d5dffdda949da0a6913->enter($__internal_0a6034aa8718f7d5d0c1820f66726c7397754f8482461d5dffdda949da0a6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig"));

        $__internal_e39aa5b1daa59bd68b22cc73b570e515848c2b3297e40b4bb9798dc31f7777a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39aa5b1daa59bd68b22cc73b570e515848c2b3297e40b4bb9798dc31f7777a3->enter($__internal_e39aa5b1daa59bd68b22cc73b570e515848c2b3297e40b4bb9798dc31f7777a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "<script>
    \$(function () {
        window.addEventListener(\"load\", function () {
            window.cookieconsent.initialise({
                \"palette\": {
                    \"popup\": {
                        \"background\": \"#f7f7f7\",
                        \"text\": \"#58595b\"
                    },
                    \"button\": {
                        \"background\": \"#c6ccd2\",
                        \"text\": \"#ffffff\"
                    }
                },
                \"theme\": \"edgeless\",
                \"content\": {
                    \"message\": \"";
        // line 22
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cookie_consent_text", array(), "cocorico"), "js"), "html", null, true);
        echo "\",
                    \"dismiss\": \"";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cookie_consent_ok", array(), "cocorico"), "js"), "html", null, true);
        echo "\",
                    \"link\": \"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cookie_consent_link", array(), "cocorico"), "js"), "html", null, true);
        echo "\"
                }
            })
        });
    });
</script>
";
        
        $__internal_0a6034aa8718f7d5d0c1820f66726c7397754f8482461d5dffdda949da0a6913->leave($__internal_0a6034aa8718f7d5d0c1820f66726c7397754f8482461d5dffdda949da0a6913_prof);

        
        $__internal_e39aa5b1daa59bd68b22cc73b570e515848c2b3297e40b4bb9798dc31f7777a3->leave($__internal_e39aa5b1daa59bd68b22cc73b570e515848c2b3297e40b4bb9798dc31f7777a3_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  50 => 23,  46 => 22,  28 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico' %}

{#\"message\": \"{{ \"cookie_consent_text\"|trans }}\",#}
{#\"dismiss\": \"{{ \"cookie_consent_ok\"|trans }}\",#}
{#\"link\": \"{{ \"cookie_consent_link\"|trans }}\"#}
<script>
    \$(function () {
        window.addEventListener(\"load\", function () {
            window.cookieconsent.initialise({
                \"palette\": {
                    \"popup\": {
                        \"background\": \"#f7f7f7\",
                        \"text\": \"#58595b\"
                    },
                    \"button\": {
                        \"background\": \"#c6ccd2\",
                        \"text\": \"#ffffff\"
                    }
                },
                \"theme\": \"edgeless\",
                \"content\": {
                    \"message\": \"{{ \"cookie_consent_text\"|trans|escape(\"js\") }}\",
                    \"dismiss\": \"{{ \"cookie_consent_ok\"|trans|escape(\"js\") }}\",
                    \"link\": \"{{ \"cookie_consent_link\"|trans|escape(\"js\") }}\"
                }
            })
        });
    });
</script>
", "@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_cookie_consent_js.html.twig");
    }
}
