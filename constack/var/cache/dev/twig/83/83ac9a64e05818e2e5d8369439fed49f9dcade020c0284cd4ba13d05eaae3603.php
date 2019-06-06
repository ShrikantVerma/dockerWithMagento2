<?php

/* @CocoricoUser/Frontend/Common/_login.html.twig */
class __TwigTemplate_f1d56654da3e734c5198efeb607a5188fc56ab118db7aa9e901a12291214bece extends Twig_Template
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
        $__internal_41288d72bd051291447c4763d5965af3d59b89fad29d7c17743aae44d620d13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41288d72bd051291447c4763d5965af3d59b89fad29d7c17743aae44d620d13a->enter($__internal_41288d72bd051291447c4763d5965af3d59b89fad29d7c17743aae44d620d13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_login.html.twig"));

        $__internal_b20fa9b6d5b42d5fc7148acac0fa362b9149b38464419563100ec9f1f97d8538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20fa9b6d5b42d5fc7148acac0fa362b9149b38464419563100ec9f1f97d8538->enter($__internal_b20fa9b6d5b42d5fc7148acac0fa362b9149b38464419563100ec9f1f97d8538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_login.html.twig"));

        // line 2
        echo "
<div role=\"tabpanel\" class=\"tab-pane";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["login_class"]) || array_key_exists("login_class", $context) ? $context["login_class"] : (function () { throw new Twig_Error_Runtime('Variable "login_class" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"profile\">

    <div id=\"login-errors-wrapper\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 6, $this->getSourceContext()); })()), 'errors');
        echo "
    </div>

    <div class=\"tab-holder\">
        <div class=\"column\">
            <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.login.subtitle", array(), "cocorico_user"), "html", null, true);
        echo "</h3>

            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 13, $this->getSourceContext()); })()), "_username", array()), 'errors');
        echo "

            <div class=\"field-row\">
                <span class=\"label\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 16, $this->getSourceContext()); })()), "_username", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 19, $this->getSourceContext()); })()), "_username", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("assert.not_blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("assert.invalid", array(), "validators"))));
        // line 25
        echo "
                </div>
            </div>

            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 29, $this->getSourceContext()); })()), "_password", array()), 'errors');
        echo "
            <div class=\"field-row\">
                <span class=\"label\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 31, $this->getSourceContext()); })()), "_password", array()), 'label');
        echo "</span>

                <div class=\"field-holder\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 34, $this->getSourceContext()); })()), "_password", array()), 'widget', array("attr" => array("class" => "form-control required", "data-parsley-required-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("assert.not_blank", array(), "validators"), "data-parsley-invalid-message" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("assert.invalid", array(), "validators"))));
        // line 40
        echo "
                </div>
            </div>

        </div>

        <div class=\"column\">
            <h3>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.facebook.login.title", array(), "cocorico_user"), "html", null, true);
        echo "</h3>
            <a href=\"#\" onclick=\"fb_login();\" class=\"btn-facebook\">
                <i class=\"icon-facebook\"></i>
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.facebook.login", array(), "cocorico_user"), "html", null, true);
        echo "
            </a>

            <div id=\"fb-root\"></div>
        </div>
    </div>
</div>

";
        // line 61
        echo "
";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 62, $this->getSourceContext()); })()), 'rest');
        
        $__internal_41288d72bd051291447c4763d5965af3d59b89fad29d7c17743aae44d620d13a->leave($__internal_41288d72bd051291447c4763d5965af3d59b89fad29d7c17743aae44d620d13a_prof);

        
        $__internal_b20fa9b6d5b42d5fc7148acac0fa362b9149b38464419563100ec9f1f97d8538->leave($__internal_b20fa9b6d5b42d5fc7148acac0fa362b9149b38464419563100ec9f1f97d8538_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoUser/Frontend/Common/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 62,  106 => 61,  95 => 50,  89 => 47,  80 => 40,  78 => 34,  72 => 31,  67 => 29,  61 => 25,  59 => 19,  53 => 16,  47 => 13,  42 => 11,  34 => 6,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_user' %}

<div role=\"tabpanel\" class=\"tab-pane{{ login_class }}\" id=\"profile\">

    <div id=\"login-errors-wrapper\">
        {{ form_errors(form_login) }}
    </div>

    <div class=\"tab-holder\">
        <div class=\"column\">
            <h3>{{ 'user.login.subtitle'|trans }}</h3>

            {{ form_errors(form_login._username) }}

            <div class=\"field-row\">
                <span class=\"label\">{{ form_label(form_login._username) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_login._username, {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-required-message': 'assert.not_blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'assert.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

            {{ form_errors(form_login._password) }}
            <div class=\"field-row\">
                <span class=\"label\">{{ form_label(form_login._password) }}</span>

                <div class=\"field-holder\">
                    {{ form_widget(form_login._password, {
                        'attr': {
                            'class': \"form-control required\",
                            'data-parsley-required-message': 'assert.not_blank'|trans({},'validators'),
                            'data-parsley-invalid-message': 'assert.invalid'|trans({}, 'validators')
                        }
                    }) }}
                </div>
            </div>

        </div>

        <div class=\"column\">
            <h3>{{ 'user.facebook.login.title'|trans }}</h3>
            <a href=\"#\" onclick=\"fb_login();\" class=\"btn-facebook\">
                <i class=\"icon-facebook\"></i>
                {{ 'user.facebook.login'|trans }}
            </a>

            <div id=\"fb-root\"></div>
        </div>
    </div>
</div>

{#<label for=\"remember_me\">{{ 'user.login.remember_me'|trans }}</label>#}
{#<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>#}
{#</div>#}

{{ form_rest(form_login) }}", "@CocoricoUser/Frontend/Common/_login.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Common/_login.html.twig");
    }
}
