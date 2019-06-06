<?php

/* @CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig */
class __TwigTemplate_feb159f971992a3054b174e21bfa76189a3d7c19dcfe9956f601b67d66730064 extends Twig_Template
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
        $__internal_aceb12eed1c9f7a12541eab4eb8d29e8043312e3592462e8ba42c993d93b0cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceb12eed1c9f7a12541eab4eb8d29e8043312e3592462e8ba42c993d93b0cc2->enter($__internal_aceb12eed1c9f7a12541eab4eb8d29e8043312e3592462e8ba42c993d93b0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig"));

        $__internal_d03dccebc794c786f8d9cea202b1d79f149736f371d94e3c99c6741bdf310d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03dccebc794c786f8d9cea202b1d79f149736f371d94e3c99c6741bdf310d12->enter($__internal_d03dccebc794c786f8d9cea202b1d79f149736f371d94e3c99c6741bdf310d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig"));

        // line 2
        echo "
<div class=\"sub-holder\" id=\"search-container\">
    <!-- range-area -->
    <div class=\"range-area\">
        <!-- range-holder -->
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "price_range", array()), 'widget');
        echo "

        ";
        // line 9
        if ($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoDeliveryBundle")) {
            // line 10
            echo "            ";
            $this->loadTemplate("@CocoricoDelivery/Frontend/ListingResult/_form_delivery.html.twig", "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig", 10)->display(array("delivery" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delivery", array())));
            // line 13
            echo "        ";
        }
        // line 14
        echo "    </div>

    <div class=\"selection-holder\">
        ";
        // line 17
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig", "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig", 17)->display(array("characteristics" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "characteristics", array())));
        // line 20
        echo "
        <div class=\"select-holder\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "sort_by", array()), 'widget', array("attr" => array("class" => "form-control no-arrow")));
        // line 26
        echo "
        </div>
    </div>

    ";
        // line 30
        if ($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoListingCategoryFieldBundle")) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoListingCategoryFieldBundle:Frontend/ListingSearchCategoriesFields:categoriesSearchForm"));
            echo "
        ";
            // line 33
            echo "        ";
            twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "categories_fields", array()), "setRendered", array(), "method");
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <div class=\"selection-holder btn-block text-right\">
        <button type=\"submit\" class=\"btn btn-default\" style=\"padding: 6px 14px 6px;\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.filter", array(), "cocorico_listing"), "html", null, true);
        echo "
        </button>
    </div>
</div>";
        
        $__internal_aceb12eed1c9f7a12541eab4eb8d29e8043312e3592462e8ba42c993d93b0cc2->leave($__internal_aceb12eed1c9f7a12541eab4eb8d29e8043312e3592462e8ba42c993d93b0cc2_prof);

        
        $__internal_d03dccebc794c786f8d9cea202b1d79f149736f371d94e3c99c6741bdf310d12->leave($__internal_d03dccebc794c786f8d9cea202b1d79f149736f371d94e3c99c6741bdf310d12_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  79 => 35,  76 => 34,  73 => 33,  68 => 31,  66 => 30,  60 => 26,  58 => 22,  54 => 20,  52 => 18,  51 => 17,  46 => 14,  43 => 13,  41 => 11,  39 => 10,  37 => 9,  32 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

<div class=\"sub-holder\" id=\"search-container\">
    <!-- range-area -->
    <div class=\"range-area\">
        <!-- range-holder -->
        {{ form_widget(form.price_range) }}

        {% if bundleExist('CocoricoDeliveryBundle') %}
            {% include '@CocoricoDelivery/Frontend/ListingResult/_form_delivery.html.twig' with {
                'delivery' : form.delivery
            } only %}
        {% endif %}
    </div>

    <div class=\"selection-holder\">
        {% include '@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig' with {
            'characteristics' : form.characteristics
        } only %}

        <div class=\"select-holder\">
            {{ form_widget(form.sort_by, {
                'attr': {
                    'class': \"form-control no-arrow\"
                }
            }) }}
        </div>
    </div>

    {% if bundleExist('CocoricoListingCategoryFieldBundle') %}
        {{ render(controller('CocoricoListingCategoryFieldBundle:Frontend/ListingSearchCategoriesFields:categoriesSearchForm')) }}
        {#categories_fields form is already rendred in above controller#}
        {% do form.categories_fields.setRendered() %}
    {% endif %}

    <div class=\"selection-holder btn-block text-right\">
        <button type=\"submit\" class=\"btn btn-default\" style=\"padding: 6px 14px 6px;\">
            {{ 'listing.filter'|trans }}
        </button>
    </div>
</div>", "@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/form_search_filters.html.twig");
    }
}
