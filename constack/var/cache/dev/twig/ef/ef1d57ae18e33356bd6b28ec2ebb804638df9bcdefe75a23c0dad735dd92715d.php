<?php

/* CocoricoUserBundle:Frontend/Registration:register.html.twig */
class __TwigTemplate_cbeb9dbd7bbc17fdf32a674d6285c4833f6329fdaeef75bde84e9457bc8201dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CocoricoUserBundle:Frontend/Registration:register.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13eb18425a877a57ca3ecb60384b153ab2c94a37da8028127a9ca0bbd8716e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13eb18425a877a57ca3ecb60384b153ab2c94a37da8028127a9ca0bbd8716e2e->enter($__internal_13eb18425a877a57ca3ecb60384b153ab2c94a37da8028127a9ca0bbd8716e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoUserBundle:Frontend/Registration:register.html.twig"));

        $__internal_09e8c60c533f6f191965f3c57100ca59ff03e1394ae131dca3b92d315ca1783f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e8c60c533f6f191965f3c57100ca59ff03e1394ae131dca3b92d315ca1783f->enter($__internal_09e8c60c533f6f191965f3c57100ca59ff03e1394ae131dca3b92d315ca1783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoUserBundle:Frontend/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13eb18425a877a57ca3ecb60384b153ab2c94a37da8028127a9ca0bbd8716e2e->leave($__internal_13eb18425a877a57ca3ecb60384b153ab2c94a37da8028127a9ca0bbd8716e2e_prof);

        
        $__internal_09e8c60c533f6f191965f3c57100ca59ff03e1394ae131dca3b92d315ca1783f->leave($__internal_09e8c60c533f6f191965f3c57100ca59ff03e1394ae131dca3b92d315ca1783f_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_d2399b9dc978ca1a9ffec5022b397681738f759d48fd448251e7df3f151b429d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2399b9dc978ca1a9ffec5022b397681738f759d48fd448251e7df3f151b429d->enter($__internal_d2399b9dc978ca1a9ffec5022b397681738f759d48fd448251e7df3f151b429d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_17945c49c7ed5c1370fad50142ebd1de92509f17e34efe06f5ecc784a1a30ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17945c49c7ed5c1370fad50142ebd1de92509f17e34efe06f5ecc784a1a30ead->enter($__internal_17945c49c7ed5c1370fad50142ebd1de92509f17e34efe06f5ecc784a1a30ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    ";
        $this->loadTemplate("CocoricoUserBundle:Frontend/Registration:register.html.twig", "CocoricoUserBundle:Frontend/Registration:register.html.twig", 4, "575103215")->display($context);
        
        $__internal_17945c49c7ed5c1370fad50142ebd1de92509f17e34efe06f5ecc784a1a30ead->leave($__internal_17945c49c7ed5c1370fad50142ebd1de92509f17e34efe06f5ecc784a1a30ead_prof);

        
        $__internal_d2399b9dc978ca1a9ffec5022b397681738f759d48fd448251e7df3f151b429d->leave($__internal_d2399b9dc978ca1a9ffec5022b397681738f759d48fd448251e7df3f151b429d_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoUserBundle:Frontend/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}

        {% trans_default_domain 'cocorico_user' %}

        {% block main %}
            <div class=\"col-xs-12\">
                {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}
                <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                    <h1>{{ 'listing.new.signup.title'|trans({},'cocorico_listing') }}</h1>

                    <form class=\"form\" action=\"{{ path('cocorico_user_register') }}\" method=\"POST\" autocomplete=\"off\">

                        {% include '@CocoricoUser/Frontend/Common/_login_register.html.twig' with {
                        'form_registration': form,
                        'form_login': false
                        } only %}

                        <div class=\"btn-block text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">{{ 'registration.submit'|trans }}</button>
                        </div>
                    </form>
                </div>
            </div>
        {% endblock %}

    {% endembed %}
{% endblock layout %}", "CocoricoUserBundle:Frontend/Registration:register.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Registration/register.html.twig");
    }
}


/* CocoricoUserBundle:Frontend/Registration:register.html.twig */
class __TwigTemplate_cbeb9dbd7bbc17fdf32a674d6285c4833f6329fdaeef75bde84e9457bc8201dc_575103215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("@CocoricoCore/Frontend/layout.html.twig", "CocoricoUserBundle:Frontend/Registration:register.html.twig", 4);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CocoricoCore/Frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52e1ad5c3b6734ff18e4e694c5594f30a84c53eeda220cf5de4dc77dda7b280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52e1ad5c3b6734ff18e4e694c5594f30a84c53eeda220cf5de4dc77dda7b280->enter($__internal_b52e1ad5c3b6734ff18e4e694c5594f30a84c53eeda220cf5de4dc77dda7b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoUserBundle:Frontend/Registration:register.html.twig"));

        $__internal_b60e96b04acb73749b22523494c96029f14abddf0abc9cb1142827ac75277ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e96b04acb73749b22523494c96029f14abddf0abc9cb1142827ac75277ff0->enter($__internal_b60e96b04acb73749b22523494c96029f14abddf0abc9cb1142827ac75277ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoUserBundle:Frontend/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52e1ad5c3b6734ff18e4e694c5594f30a84c53eeda220cf5de4dc77dda7b280->leave($__internal_b52e1ad5c3b6734ff18e4e694c5594f30a84c53eeda220cf5de4dc77dda7b280_prof);

        
        $__internal_b60e96b04acb73749b22523494c96029f14abddf0abc9cb1142827ac75277ff0->leave($__internal_b60e96b04acb73749b22523494c96029f14abddf0abc9cb1142827ac75277ff0_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_c7ccbd854c04b0d5ea06e4724b44863a88f7ca9dbe72a211bee358f447807699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ccbd854c04b0d5ea06e4724b44863a88f7ca9dbe72a211bee358f447807699->enter($__internal_c7ccbd854c04b0d5ea06e4724b44863a88f7ca9dbe72a211bee358f447807699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8c5c052af62bcf20861e7d587aa6a455c7047b992368bd777366abaf831d5bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5c052af62bcf20861e7d587aa6a455c7047b992368bd777366abaf831d5bb1->enter($__internal_8c5c052af62bcf20861e7d587aa6a455c7047b992368bd777366abaf831d5bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "            <div class=\"col-xs-12\">
                ";
        // line 10
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_flash.html.twig", "CocoricoUserBundle:Frontend/Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "                <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.new.signup.title", array(), "cocorico_listing"), "html", null, true);
        echo "</h1>

                    <form class=\"form\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_register");
        echo "\" method=\"POST\" autocomplete=\"off\">

                        ";
        // line 16
        $this->loadTemplate("@CocoricoUser/Frontend/Common/_login_register.html.twig", "CocoricoUserBundle:Frontend/Registration:register.html.twig", 16)->display(array("form_registration" =>         // line 17
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "form_login" => false));
        // line 20
        echo "
                        <div class=\"btn-block text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("registration.submit", array(), "cocorico_user"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
            </div>
        ";
        
        $__internal_8c5c052af62bcf20861e7d587aa6a455c7047b992368bd777366abaf831d5bb1->leave($__internal_8c5c052af62bcf20861e7d587aa6a455c7047b992368bd777366abaf831d5bb1_prof);

        
        $__internal_c7ccbd854c04b0d5ea06e4724b44863a88f7ca9dbe72a211bee358f447807699->leave($__internal_c7ccbd854c04b0d5ea06e4724b44863a88f7ca9dbe72a211bee358f447807699_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoUserBundle:Frontend/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 22,  176 => 20,  174 => 17,  173 => 16,  168 => 14,  163 => 12,  160 => 11,  158 => 10,  155 => 9,  146 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}

        {% trans_default_domain 'cocorico_user' %}

        {% block main %}
            <div class=\"col-xs-12\">
                {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}
                <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                    <h1>{{ 'listing.new.signup.title'|trans({},'cocorico_listing') }}</h1>

                    <form class=\"form\" action=\"{{ path('cocorico_user_register') }}\" method=\"POST\" autocomplete=\"off\">

                        {% include '@CocoricoUser/Frontend/Common/_login_register.html.twig' with {
                        'form_registration': form,
                        'form_login': false
                        } only %}

                        <div class=\"btn-block text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">{{ 'registration.submit'|trans }}</button>
                        </div>
                    </form>
                </div>
            </div>
        {% endblock %}

    {% endembed %}
{% endblock layout %}", "CocoricoUserBundle:Frontend/Registration:register.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Registration/register.html.twig");
    }
}
