<?php

/* @CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig */
class __TwigTemplate_090e7e663448dc61e3e0acf827bdec719dfac5139283c5659b0b7942f08b03d7 extends Twig_Template
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
        $__internal_ccf1aace125fd0033ed0072e8de52613a6f56422ddf1ab7c9cf418bc98c0a9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf1aace125fd0033ed0072e8de52613a6f56422ddf1ab7c9cf418bc98c0a9c6->enter($__internal_ccf1aace125fd0033ed0072e8de52613a6f56422ddf1ab7c9cf418bc98c0a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig"));

        $__internal_88b80bd9b2a3b9d72345e2d3cb591a491d36286c34fb7a5c4c9ff8e75a5783de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b80bd9b2a3b9d72345e2d3cb591a491d36286c34fb7a5c4c9ff8e75a5783de->enter($__internal_88b80bd9b2a3b9d72345e2d3cb591a491d36286c34fb7a5c4c9ff8e75a5783de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig"));

        // line 2
        echo "
<div id=\"characteristics\" class=\"select-holder\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["characteristics"]) || array_key_exists("characteristics", $context) ? $context["characteristics"] : (function () { throw new Twig_Error_Runtime('Variable "characteristics" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 5
        list($context["listing_characteristic_group"], $context["previous_listing_characteristic_group"]) =         array("", "");
        // line 6
        echo "    <!--@formatter:off-->
    ";
        // line 7
        echo "<ul class=\"list-unstyled\">";
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["characteristics"]) || array_key_exists("characteristics", $context) ? $context["characteristics"] : (function () { throw new Twig_Error_Runtime('Variable "characteristics" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["characteristic"]) {
            // line 9
            echo "        ";
            $context["listing_characteristic_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["characteristic"], "vars", array()), "label_attr", array()), "group", array(), "array");
            // line 10
            echo "        ";
            if (((isset($context["listing_characteristic_group"]) || array_key_exists("listing_characteristic_group", $context) ? $context["listing_characteristic_group"] : (function () { throw new Twig_Error_Runtime('Variable "listing_characteristic_group" does not exist.', 10, $this->getSourceContext()); })()) != (isset($context["previous_listing_characteristic_group"]) || array_key_exists("previous_listing_characteristic_group", $context) ? $context["previous_listing_characteristic_group"] : (function () { throw new Twig_Error_Runtime('Variable "previous_listing_characteristic_group" does not exist.', 10, $this->getSourceContext()); })()))) {
                // line 11
                echo "             ";
                if ((isset($context["previous_listing_characteristic_group"]) || array_key_exists("previous_listing_characteristic_group", $context) ? $context["previous_listing_characteristic_group"] : (function () { throw new Twig_Error_Runtime('Variable "previous_listing_characteristic_group" does not exist.', 11, $this->getSourceContext()); })())) {
                    // line 12
                    echo "                 ";
                    // line 13
                    echo "             ";
                }
                // line 14
                echo "             ";
                // line 15
                echo "             ";
                // line 16
                echo "        ";
            }
            // line 17
            echo "        <li class=\"field-row\">
            ";
            // line 19
            echo "            <div class=\"select-holder\">
             ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["characteristic"], 'widget', array("attr" => array("class" => "form-control no-arrow"), "placeholder" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 24
$context["characteristic"], "vars", array()), "label", array())));
            // line 25
            echo "
            </div>
        </li>
        ";
            // line 28
            $context["previous_listing_characteristic_group"] = (isset($context["listing_characteristic_group"]) || array_key_exists("listing_characteristic_group", $context) ? $context["listing_characteristic_group"] : (function () { throw new Twig_Error_Runtime('Variable "listing_characteristic_group" does not exist.', 28, $this->getSourceContext()); })());
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['characteristic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        echo "</ul>";
        echo "
    <!--@formatter:on-->
</div>";
        
        $__internal_ccf1aace125fd0033ed0072e8de52613a6f56422ddf1ab7c9cf418bc98c0a9c6->leave($__internal_ccf1aace125fd0033ed0072e8de52613a6f56422ddf1ab7c9cf418bc98c0a9c6_prof);

        
        $__internal_88b80bd9b2a3b9d72345e2d3cb591a491d36286c34fb7a5c4c9ff8e75a5783de->leave($__internal_88b80bd9b2a3b9d72345e2d3cb591a491d36286c34fb7a5c4c9ff8e75a5783de_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  83 => 29,  81 => 28,  76 => 25,  74 => 24,  73 => 20,  70 => 19,  67 => 17,  64 => 16,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

<div id=\"characteristics\" class=\"select-holder\">
    {{ form_errors(characteristics) }}
    {% set listing_characteristic_group, previous_listing_characteristic_group = \"\", \"\" %}
    <!--@formatter:off-->
    {{ '<ul class=\"list-unstyled\">' }}
    {% for characteristic in characteristics %}
        {% set listing_characteristic_group =  characteristic.vars.label_attr[\"group\"] %}
        {% if listing_characteristic_group != previous_listing_characteristic_group %}
             {% if previous_listing_characteristic_group %}
                 {#{{ \"</ul>\" }}#}
             {% endif %}
             {#<strong>{{ listing_characteristic_group }}</strong><br />#}
             {#{{ '<ul class=\"list-unstyled\">' }}#}
        {% endif %}
        <li class=\"field-row\">
            {#<span class=\"label\">{{ form_label(characteristic) }}</span>#}
            <div class=\"select-holder\">
             {{ form_widget(characteristic, {
                 'attr': {
                     'class': \"form-control no-arrow\"
                 },
                 'placeholder': characteristic.vars.label
             }) }}
            </div>
        </li>
        {% set previous_listing_characteristic_group =  listing_characteristic_group %}
    {% endfor %}
    {{ \"</ul>\" }}
    <!--@formatter:on-->
</div>", "@CocoricoCore/Frontend/ListingResult/_form_search_characteristics.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/_form_search_characteristics.html.twig");
    }
}
