<?php

/* @CocoricoCore/Frontend/Home/form_search_fields.html.twig */
class __TwigTemplate_8688d1ffa836fe363b8ba2668621dae411edaac824e92e570815697e374d67b6 extends Twig_Template
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
        $__internal_7d9d9a52df2847284476941be5f0cdc1d95b0f9a88d4c23ba9c9eb81d39e8481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9d9a52df2847284476941be5f0cdc1d95b0f9a88d4c23ba9c9eb81d39e8481->enter($__internal_7d9d9a52df2847284476941be5f0cdc1d95b0f9a88d4c23ba9c9eb81d39e8481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Home/form_search_fields.html.twig"));

        $__internal_fdfc62f9911fe009b85dbe97f7f2af5de3ddb6a24a338f404cafb7fb440cdaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfc62f9911fe009b85dbe97f7f2af5de3ddb6a24a338f404cafb7fb440cdaa4->enter($__internal_fdfc62f9911fe009b85dbe97f7f2af5de3ddb6a24a338f404cafb7fb440cdaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Home/form_search_fields.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "<legend class=\"hidden\">form-category</legend>
<div class=\"container\">
    <div class=\"keyword clearable\">
        ";
        // line 8
        if ($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoElasticsearchBundle")) {
            // line 9
            echo "            ";
            $this->loadTemplate("@CocoricoElasticsearch/_form_keywords.html.twig", "@CocoricoCore/Frontend/Home/form_search_fields.html.twig", 9)->display($context);
            // line 10
            echo "        ";
        }
        // line 11
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"area\">
                <div class=\"col\">
                    <strong class=\"title\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "categories", array()), 'label');
        echo "
                    </strong>

                    <div class=\"multiselect\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "categories", array()), 'widget');
        echo "
                    </div>
                </div>

                <div class=\"col\">
                    <strong class=\"title\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "location", array()), "address", array()), 'label', array("required" => false));
        // line 29
        echo "
                    </strong>

                    <div class=\"field-holder\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "location", array()), "address", array()), 'errors');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "location", array()), "address", array()), 'widget', array("id" => "location", "attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.form.address.placeholder", array(), "cocorico_listing"))));
        // line 40
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "location", array()), 'rest');
        echo "
                    </div>
                </div>
                <!-- # DLEVASSEUR - ADD btn-recherche class # -->
                <input type=\"submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search", array(), "cocorico_listing"), "html", null, true);
        echo "\" class=\"btn btn-default btn-recherche\">
                <!-- # DLEVASSEUR - END # -->
            </div>
        </div>
    </div>
</div>
";
        // line 52
        echo "
";
        
        $__internal_7d9d9a52df2847284476941be5f0cdc1d95b0f9a88d4c23ba9c9eb81d39e8481->leave($__internal_7d9d9a52df2847284476941be5f0cdc1d95b0f9a88d4c23ba9c9eb81d39e8481_prof);

        
        $__internal_fdfc62f9911fe009b85dbe97f7f2af5de3ddb6a24a338f404cafb7fb440cdaa4->leave($__internal_fdfc62f9911fe009b85dbe97f7f2af5de3ddb6a24a338f404cafb7fb440cdaa4_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Home/form_search_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  89 => 45,  82 => 41,  79 => 40,  77 => 34,  73 => 33,  67 => 29,  65 => 27,  56 => 21,  49 => 17,  41 => 11,  38 => 10,  35 => 9,  33 => 8,  28 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

{#home search form fields without start ane end form#}
{#<fieldset>#}
<legend class=\"hidden\">form-category</legend>
<div class=\"container\">
    <div class=\"keyword clearable\">
        {% if bundleExist('CocoricoElasticsearchBundle') %}
            {% include '@CocoricoElasticsearch/_form_keywords.html.twig' %}
        {% endif %}
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"area\">
                <div class=\"col\">
                    <strong class=\"title\">
                        {{ form_label(form.categories) }}
                    </strong>

                    <div class=\"multiselect\">
                        {{ form_widget(form.categories) }}
                    </div>
                </div>

                <div class=\"col\">
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
                <!-- # DLEVASSEUR - ADD btn-recherche class # -->
                <input type=\"submit\" value=\"{{ 'listing.search'|trans }}\" class=\"btn btn-default btn-recherche\">
                <!-- # DLEVASSEUR - END # -->
            </div>
        </div>
    </div>
</div>
{#</fieldset>#}

", "@CocoricoCore/Frontend/Home/form_search_fields.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Home/form_search_fields.html.twig");
    }
}
