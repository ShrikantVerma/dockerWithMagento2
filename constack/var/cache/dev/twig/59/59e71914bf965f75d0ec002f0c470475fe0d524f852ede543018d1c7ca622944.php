<?php

/* @CocoricoUser/Frontend/Security/login.html.twig */
class __TwigTemplate_6b0ef2932b8a352f2dcad8711563d9e1e570b55320728d275cee120a240c69b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CocoricoUser/Frontend/Security/login.html.twig", 1);
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
        $__internal_d42c61199b2f260e2f1c79236d2736bbd534fbe7454dbff72e72cd0ff66d9f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42c61199b2f260e2f1c79236d2736bbd534fbe7454dbff72e72cd0ff66d9f70->enter($__internal_d42c61199b2f260e2f1c79236d2736bbd534fbe7454dbff72e72cd0ff66d9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Security/login.html.twig"));

        $__internal_6e11ccced1c28779520b2445ff6f97837b6ba53ca79132a839d4bf4f1326b79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e11ccced1c28779520b2445ff6f97837b6ba53ca79132a839d4bf4f1326b79b->enter($__internal_6e11ccced1c28779520b2445ff6f97837b6ba53ca79132a839d4bf4f1326b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42c61199b2f260e2f1c79236d2736bbd534fbe7454dbff72e72cd0ff66d9f70->leave($__internal_d42c61199b2f260e2f1c79236d2736bbd534fbe7454dbff72e72cd0ff66d9f70_prof);

        
        $__internal_6e11ccced1c28779520b2445ff6f97837b6ba53ca79132a839d4bf4f1326b79b->leave($__internal_6e11ccced1c28779520b2445ff6f97837b6ba53ca79132a839d4bf4f1326b79b_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_c28af23aa625c60a31d4531d0655f08369541372134a8b10bc878e9d1f9a3a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28af23aa625c60a31d4531d0655f08369541372134a8b10bc878e9d1f9a3a2f->enter($__internal_c28af23aa625c60a31d4531d0655f08369541372134a8b10bc878e9d1f9a3a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_db13fa666d675913831683114103664dcdbc454828357776cffc9fcd157c2ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db13fa666d675913831683114103664dcdbc454828357776cffc9fcd157c2ee6->enter($__internal_db13fa666d675913831683114103664dcdbc454828357776cffc9fcd157c2ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    ";
        $this->loadTemplate("@CocoricoUser/Frontend/Security/login.html.twig", "@CocoricoUser/Frontend/Security/login.html.twig", 4, "1057694984")->display($context);
        
        $__internal_db13fa666d675913831683114103664dcdbc454828357776cffc9fcd157c2ee6->leave($__internal_db13fa666d675913831683114103664dcdbc454828357776cffc9fcd157c2ee6_prof);

        
        $__internal_c28af23aa625c60a31d4531d0655f08369541372134a8b10bc878e9d1f9a3a2f->leave($__internal_c28af23aa625c60a31d4531d0655f08369541372134a8b10bc878e9d1f9a3a2f_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoUser/Frontend/Security/login.html.twig";
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
            {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}

            <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                <h1>{{ 'listing.new.signup.title'|trans({},'cocorico_listing') }}</h1>
                {#Login And Register Form#}
                <form class=\"form-signup\" action=\"{{ path(\"cocorico_user_login_check\") }}\"
                      method=\"POST\">
                    {% include '@CocoricoUser/Frontend/Common/_login_register.html.twig' with {
                    'form_registration': false,
                    'form_login': form
                    } only %}

                    <div>
                        <a href=\"{{ path('cocorico_user_resetting_request') }}\">
                            {{ 'user.password_forgotten'|trans }}
                        </a>
                    </div>

                    <div class=\"btn-block text-center\">
                        <button type=\"submit\" class=\"btn btn-default\">{{ 'user.login.submit'|trans }}</button>
                    </div>
                </form>

            </div>
        {% endblock %}

    {% endembed %}
{% endblock layout %}
", "@CocoricoUser/Frontend/Security/login.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Security/login.html.twig");
    }
}


/* @CocoricoUser/Frontend/Security/login.html.twig */
class __TwigTemplate_6b0ef2932b8a352f2dcad8711563d9e1e570b55320728d275cee120a240c69b6_1057694984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("@CocoricoCore/Frontend/layout.html.twig", "@CocoricoUser/Frontend/Security/login.html.twig", 4);
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
        $__internal_c67038539e774abf26573e31ce21dfdce68e3b7fbb74c0e9d087fa4aade8e9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67038539e774abf26573e31ce21dfdce68e3b7fbb74c0e9d087fa4aade8e9be->enter($__internal_c67038539e774abf26573e31ce21dfdce68e3b7fbb74c0e9d087fa4aade8e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Security/login.html.twig"));

        $__internal_fd016b8c5a2f1b90e80b88875c84005c7d69ee23d29316085647adda9f8d9bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd016b8c5a2f1b90e80b88875c84005c7d69ee23d29316085647adda9f8d9bf9->enter($__internal_fd016b8c5a2f1b90e80b88875c84005c7d69ee23d29316085647adda9f8d9bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67038539e774abf26573e31ce21dfdce68e3b7fbb74c0e9d087fa4aade8e9be->leave($__internal_c67038539e774abf26573e31ce21dfdce68e3b7fbb74c0e9d087fa4aade8e9be_prof);

        
        $__internal_fd016b8c5a2f1b90e80b88875c84005c7d69ee23d29316085647adda9f8d9bf9->leave($__internal_fd016b8c5a2f1b90e80b88875c84005c7d69ee23d29316085647adda9f8d9bf9_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_d43f1d73beac00450c46f7fa6bc861c6107ab9ae2afa8a2054b88d481e709ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43f1d73beac00450c46f7fa6bc861c6107ab9ae2afa8a2054b88d481e709ec1->enter($__internal_d43f1d73beac00450c46f7fa6bc861c6107ab9ae2afa8a2054b88d481e709ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4f290bb2e1b12032340001c9285a6f3a2a9e91d6dc79755cf29ea58c2164b4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f290bb2e1b12032340001c9285a6f3a2a9e91d6dc79755cf29ea58c2164b4ff->enter($__internal_4f290bb2e1b12032340001c9285a6f3a2a9e91d6dc79755cf29ea58c2164b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "            ";
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_flash.html.twig", "@CocoricoUser/Frontend/Security/login.html.twig", 9)->display($context);
        // line 10
        echo "
            <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.new.signup.title", array(), "cocorico_listing"), "html", null, true);
        echo "</h1>
                ";
        // line 14
        echo "                <form class=\"form-signup\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_login_check");
        echo "\"
                      method=\"POST\">
                    ";
        // line 16
        $this->loadTemplate("@CocoricoUser/Frontend/Common/_login_register.html.twig", "@CocoricoUser/Frontend/Security/login.html.twig", 16)->display(array("form_registration" => false, "form_login" =>         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })())));
        // line 20
        echo "
                    <div>
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_resetting_request");
        echo "\">
                            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.password_forgotten", array(), "cocorico_user"), "html", null, true);
        echo "
                        </a>
                    </div>

                    <div class=\"btn-block text-center\">
                        <button type=\"submit\" class=\"btn btn-default\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.login.submit", array(), "cocorico_user"), "html", null, true);
        echo "</button>
                    </div>
                </form>

            </div>
        ";
        
        $__internal_4f290bb2e1b12032340001c9285a6f3a2a9e91d6dc79755cf29ea58c2164b4ff->leave($__internal_4f290bb2e1b12032340001c9285a6f3a2a9e91d6dc79755cf29ea58c2164b4ff_prof);

        
        $__internal_d43f1d73beac00450c46f7fa6bc861c6107ab9ae2afa8a2054b88d481e709ec1->leave($__internal_d43f1d73beac00450c46f7fa6bc861c6107ab9ae2afa8a2054b88d481e709ec1_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoUser/Frontend/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 28,  190 => 23,  186 => 22,  182 => 20,  180 => 18,  179 => 16,  173 => 14,  169 => 12,  165 => 10,  162 => 9,  153 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}

        {% trans_default_domain 'cocorico_user' %}

        {% block main %}
            {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}

            <div id=\"form-registerlogin\" class=\"form-signup validate-form\">
                <h1>{{ 'listing.new.signup.title'|trans({},'cocorico_listing') }}</h1>
                {#Login And Register Form#}
                <form class=\"form-signup\" action=\"{{ path(\"cocorico_user_login_check\") }}\"
                      method=\"POST\">
                    {% include '@CocoricoUser/Frontend/Common/_login_register.html.twig' with {
                    'form_registration': false,
                    'form_login': form
                    } only %}

                    <div>
                        <a href=\"{{ path('cocorico_user_resetting_request') }}\">
                            {{ 'user.password_forgotten'|trans }}
                        </a>
                    </div>

                    <div class=\"btn-block text-center\">
                        <button type=\"submit\" class=\"btn btn-default\">{{ 'user.login.submit'|trans }}</button>
                    </div>
                </form>

            </div>
        {% endblock %}

    {% endembed %}
{% endblock layout %}
", "@CocoricoUser/Frontend/Security/login.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Security/login.html.twig");
    }
}
