<?php

/* @CocoricoCore/Frontend/Common/form_search_fields.html.twig */
class __TwigTemplate_2a86510e5a3b3a8817881f9f830b539a3610bfaedb0888d93de89923b8efb99d extends Twig_Template
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
        $__internal_b37af5f90802631db781270e94677a47161a2993a165d0f66f26bac9559c5929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37af5f90802631db781270e94677a47161a2993a165d0f66f26bac9559c5929->enter($__internal_b37af5f90802631db781270e94677a47161a2993a165d0f66f26bac9559c5929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/form_search_fields.html.twig"));

        $__internal_bdec52d296e68afb64e329c57d1e1eeb90881935b9876732f7a46397e5036213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdec52d296e68afb64e329c57d1e1eeb90881935b9876732f7a46397e5036213->enter($__internal_bdec52d296e68afb64e329c57d1e1eeb90881935b9876732f7a46397e5036213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/form_search_fields.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<fieldset>
    <legend class=\"hidden\">form-category</legend>
    <div class=\"form-holder\">
        <div class=\"keyword clearable\">
            ";
        // line 8
        if ($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoElasticsearchBundle")) {
            // line 9
            echo "                ";
            $this->loadTemplate("@CocoricoElasticsearch/_form_keywords.html.twig", "@CocoricoCore/Frontend/Common/form_search_fields.html.twig", 9)->display($context);
            // line 10
            echo "            ";
        }
        // line 11
        echo "        </div>
        <div class=\"col categories\">
            <strong class=\"title\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "categories", array()), 'label');
        echo "
            </strong>

            <div class=\"multiselect\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "categories", array()), 'widget');
        echo "
            </div>
        </div>


        <div class=\"col location\">
            <strong class=\"title\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "location", array()), "address", array()), 'label', array("required" => false));
        // line 27
        echo "
            </strong>

            <div class=\"field-holder\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "location", array()), "address", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "location", array()), "address", array()), 'widget', array("id" => "location", "attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.form.address.placeholder", array(), "cocorico_listing"))));
        // line 38
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "location", array()), 'rest');
        echo "
            </div>
        </div>

        <div class=\"col time\">
            ";
        // line 45
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "date_range", array()), 'widget');
        echo "

            ";
        // line 47
        if (((isset($context["timeUnitFlexibility"]) || array_key_exists("timeUnitFlexibility", $context) ? $context["timeUnitFlexibility"] : (function () { throw new Twig_Error_Runtime('Variable "timeUnitFlexibility" does not exist.', 47, $this->getSourceContext()); })()) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "flexibility", array(), "any", true, true))) {
            // line 48
            echo "                <div class=\"col flexibility\">
                    <strong class=\"title\">
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "flexibility", array()), 'label');
            echo "
                    </strong>

                    <div class=\"input-append field-holder\">
                        ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "flexibility", array()), 'errors');
            echo "
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "flexibility", array()), 'widget', array("attr" => array("class" => "no-arrow")));
            // line 59
            echo "
                        <small>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing_search.form.flexibility_day", array(), "cocorico_listing"), "html", null, true);
            echo "</small>
                    </div>
                </div>
            ";
        }
        // line 64
        echo "
            ";
        // line 65
        if ( !(isset($context["timeUnitIsDay"]) || array_key_exists("timeUnitIsDay", $context) ? $context["timeUnitIsDay"] : (function () { throw new Twig_Error_Runtime('Variable "timeUnitIsDay" does not exist.', 65, $this->getSourceContext()); })())) {
            // line 66
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "time_range", array()), 'widget');
            echo "
            ";
        }
        // line 68
        echo "        </div>

        <input type=\"submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search", array(), "cocorico_listing"), "html", null, true);
        echo "\" class=\"btn btn-default\">
    </div>
</fieldset>";
        
        $__internal_b37af5f90802631db781270e94677a47161a2993a165d0f66f26bac9559c5929->leave($__internal_b37af5f90802631db781270e94677a47161a2993a165d0f66f26bac9559c5929_prof);

        
        $__internal_bdec52d296e68afb64e329c57d1e1eeb90881935b9876732f7a46397e5036213->leave($__internal_bdec52d296e68afb64e329c57d1e1eeb90881935b9876732f7a46397e5036213_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/form_search_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 70,  135 => 68,  129 => 66,  127 => 65,  124 => 64,  117 => 60,  114 => 59,  112 => 55,  108 => 54,  101 => 50,  97 => 48,  95 => 47,  89 => 45,  81 => 39,  78 => 38,  76 => 32,  72 => 31,  66 => 27,  64 => 25,  54 => 18,  47 => 14,  42 => 11,  39 => 10,  36 => 9,  34 => 8,  28 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

{#search form fields without start ane end form#}
<fieldset>
    <legend class=\"hidden\">form-category</legend>
    <div class=\"form-holder\">
        <div class=\"keyword clearable\">
            {% if bundleExist('CocoricoElasticsearchBundle') %}
                {% include '@CocoricoElasticsearch/_form_keywords.html.twig' %}
            {% endif %}
        </div>
        <div class=\"col categories\">
            <strong class=\"title\">
                {{ form_label(form.categories) }}
            </strong>

            <div class=\"multiselect\">
                {{ form_widget(form.categories) }}
            </div>
        </div>


        <div class=\"col location\">
            <strong class=\"title\">
                {{ form_label(form.location.address, null, {
                    'required': false
                }) }}
            </strong>

            <div class=\"field-holder\">
                {{ form_errors(form.location.address) }}
                {{ form_widget(form.location.address, {
                    'id': 'location',
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'listing.search.form.address.placeholder'|trans
                    }
                } ) }}
                {{ form_rest(form.location) }}
            </div>
        </div>

        <div class=\"col time\">
            {#In case of modification don't forget to add fields \"start, end AND nb_days\" #}
            {{ form_widget(form.date_range) }}

            {% if timeUnitFlexibility and form.flexibility is defined %}
                <div class=\"col flexibility\">
                    <strong class=\"title\">
                        {{ form_label(form.flexibility) }}
                    </strong>

                    <div class=\"input-append field-holder\">
                        {{ form_errors(form.flexibility) }}
                        {{ form_widget(form.flexibility, {
                            'attr': {
                                'class' : 'no-arrow'
                            }
                        }) }}
                        <small>{{ 'listing_search.form.flexibility_day'|trans }}</small>
                    </div>
                </div>
            {% endif %}

            {% if not timeUnitIsDay %}
                {{ form_widget(form.time_range) }}
            {% endif %}
        </div>

        <input type=\"submit\" value=\"{{ 'listing.search'|trans }}\" class=\"btn btn-default\">
    </div>
</fieldset>", "@CocoricoCore/Frontend/Common/form_search_fields.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/form_search_fields.html.twig");
    }
}
