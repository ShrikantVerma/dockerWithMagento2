<?php

/* CocoricoCoreBundle:Form:fields_category.html.twig */
class __TwigTemplate_7498769f79380c2a9823dac46f8b48dfae81ae7b9701f3c852f5260b5bb4bcc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CocoricoCoreBundle:Form:fields.html.twig", "CocoricoCoreBundle:Form:fields_category.html.twig", 1);
        $this->blocks = array(
            '_listing_categories_listingListingCategories_widget' => array($this, 'block__listing_categories_listingListingCategories_widget'),
            'listing_category_widget_options_tree' => array($this, 'block_listing_category_widget_options_tree'),
            '_listing_categories_widget' => array($this, 'block__listing_categories_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CocoricoCoreBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45de6e057b96727c5bee34429c2bf3409b8911fc855102a32c4f4ca42ffd747f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45de6e057b96727c5bee34429c2bf3409b8911fc855102a32c4f4ca42ffd747f->enter($__internal_45de6e057b96727c5bee34429c2bf3409b8911fc855102a32c4f4ca42ffd747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_category.html.twig"));

        $__internal_d4bce49cc010c9cda9c29261886f9fad65795bb943daf3c804f19bf9644bda4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bce49cc010c9cda9c29261886f9fad65795bb943daf3c804f19bf9644bda4e->enter($__internal_d4bce49cc010c9cda9c29261886f9fad65795bb943daf3c804f19bf9644bda4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45de6e057b96727c5bee34429c2bf3409b8911fc855102a32c4f4ca42ffd747f->leave($__internal_45de6e057b96727c5bee34429c2bf3409b8911fc855102a32c4f4ca42ffd747f_prof);

        
        $__internal_d4bce49cc010c9cda9c29261886f9fad65795bb943daf3c804f19bf9644bda4e->leave($__internal_d4bce49cc010c9cda9c29261886f9fad65795bb943daf3c804f19bf9644bda4e_prof);

    }

    // line 6
    public function block__listing_categories_listingListingCategories_widget($context, array $blocks = array())
    {
        $__internal_7d5c26752fceb21cd4c53ca553cdae09bf223bb353c479098e74302168afc032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5c26752fceb21cd4c53ca553cdae09bf223bb353c479098e74302168afc032->enter($__internal_7d5c26752fceb21cd4c53ca553cdae09bf223bb353c479098e74302168afc032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_categories_listingListingCategories_widget"));

        $__internal_e83121163d39da6013ef8e5789c5d44acbae76375ac3420862a703af92df8dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83121163d39da6013ef8e5789c5d44acbae76375ac3420862a703af92df8dfb->enter($__internal_e83121163d39da6013ef8e5789c5d44acbae76375ac3420862a703af92df8dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_categories_listingListingCategories_widget"));

        // line 7
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 7, $this->getSourceContext()); })()) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 7, $this->getSourceContext()); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value_in_choices" does not exist.', 7, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 7, $this->getSourceContext()); })()))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 10, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"hidden\">
        ";
        // line 11
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 12, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 12, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 12, $this->getSourceContext()); })())), "html", null, true);
            echo "</option>";
        }
        // line 14
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 15, $this->getSourceContext()); })());
            // line 16
            $this->displayBlock("listing_category_widget_options_tree", $context, $blocks);
            // line 17
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 17, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 17, $this->getSourceContext()); })())))) {
                // line 18
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 21
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 21, $this->getSourceContext()); })());
        // line 22
        $this->displayBlock("listing_category_widget_options_tree", $context, $blocks);
        // line 23
        echo "</select>";
        
        $__internal_e83121163d39da6013ef8e5789c5d44acbae76375ac3420862a703af92df8dfb->leave($__internal_e83121163d39da6013ef8e5789c5d44acbae76375ac3420862a703af92df8dfb_prof);

        
        $__internal_7d5c26752fceb21cd4c53ca553cdae09bf223bb353c479098e74302168afc032->leave($__internal_7d5c26752fceb21cd4c53ca553cdae09bf223bb353c479098e74302168afc032_prof);

    }

    // line 26
    public function block_listing_category_widget_options_tree($context, array $blocks = array())
    {
        $__internal_0ab7e9ba36d983cbe8c44cc03df0340228a20bb2aa0fef78f07abb2a7e5cb5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab7e9ba36d983cbe8c44cc03df0340228a20bb2aa0fef78f07abb2a7e5cb5a7->enter($__internal_0ab7e9ba36d983cbe8c44cc03df0340228a20bb2aa0fef78f07abb2a7e5cb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_category_widget_options_tree"));

        $__internal_b5e878f5b6030a61a61bec42876e96e835a0243022536fce7d1e292cea9fcebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e878f5b6030a61a61bec42876e96e835a0243022536fce7d1e292cea9fcebf->enter($__internal_b5e878f5b6030a61a61bec42876e96e835a0243022536fce7d1e292cea9fcebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_category_widget_options_tree"));

        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 27, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 28
            echo "        ";
            $context["category"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "data", array());
            // line 29
            echo "        ";
            $context["indent"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->stringRepeatFilter("&#160;&#160;&#160;", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 29, $this->getSourceContext()); })()), "getLvl", array()));
            // line 31
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 31, $this->getSourceContext()); })()), "isLeaf", array())) {
                // line 32
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((isset($context["indent"]) || array_key_exists("indent", $context) ? $context["indent"] : (function () { throw new Twig_Error_Runtime('Variable "indent" does not exist.', 32, $this->getSourceContext()); })()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 32, $this->getSourceContext()); })()), "getName", array(), "method")), "html", null, true);
                echo "\">
                ";
                // line 33
                $context["options"] = $context["choice"];
                // line 34
                $this->displayBlock("listing_category_widget_options_tree", $context, $blocks);
                // line 35
                echo "</optgroup>";
            } else {
                // line 37
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 37, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 38
                echo twig_escape_filter($this->env, ((isset($context["indent"]) || array_key_exists("indent", $context) ? $context["indent"] : (function () { throw new Twig_Error_Runtime('Variable "indent" does not exist.', 38, $this->getSourceContext()); })()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())), "html", null, true);
                echo "
            </option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b5e878f5b6030a61a61bec42876e96e835a0243022536fce7d1e292cea9fcebf->leave($__internal_b5e878f5b6030a61a61bec42876e96e835a0243022536fce7d1e292cea9fcebf_prof);

        
        $__internal_0ab7e9ba36d983cbe8c44cc03df0340228a20bb2aa0fef78f07abb2a7e5cb5a7->leave($__internal_0ab7e9ba36d983cbe8c44cc03df0340228a20bb2aa0fef78f07abb2a7e5cb5a7_prof);

    }

    // line 44
    public function block__listing_categories_widget($context, array $blocks = array())
    {
        $__internal_6b16b189619911017760942905e64b2dbb5197f2ab39397ec236708f71f96798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16b189619911017760942905e64b2dbb5197f2ab39397ec236708f71f96798->enter($__internal_6b16b189619911017760942905e64b2dbb5197f2ab39397ec236708f71f96798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_categories_widget"));

        $__internal_3feedc4ba0adfbfcf84b6adecdf1a7017a580fb4363ae307bd86a9cc83feb17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feedc4ba0adfbfcf84b6adecdf1a7017a580fb4363ae307bd86a9cc83feb17e->enter($__internal_3feedc4ba0adfbfcf84b6adecdf1a7017a580fb4363ae307bd86a9cc83feb17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_listing_categories_widget"));

        // line 45
        echo "    ";
        $this->displayBlock("_listing_categories_listingListingCategories_widget", $context, $blocks);
        echo "
";
        
        $__internal_3feedc4ba0adfbfcf84b6adecdf1a7017a580fb4363ae307bd86a9cc83feb17e->leave($__internal_3feedc4ba0adfbfcf84b6adecdf1a7017a580fb4363ae307bd86a9cc83feb17e_prof);

        
        $__internal_6b16b189619911017760942905e64b2dbb5197f2ab39397ec236708f71f96798->leave($__internal_6b16b189619911017760942905e64b2dbb5197f2ab39397ec236708f71f96798_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Form:fields_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 45,  183 => 44,  158 => 38,  149 => 37,  146 => 35,  144 => 34,  142 => 33,  137 => 32,  135 => 31,  132 => 29,  129 => 28,  112 => 27,  103 => 26,  93 => 23,  91 => 22,  89 => 21,  83 => 18,  81 => 17,  79 => 16,  77 => 15,  75 => 14,  66 => 12,  64 => 11,  56 => 10,  53 => 8,  51 => 7,  42 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CocoricoCoreBundle:Form:fields.html.twig' %}

{% trans_default_domain 'cocorico' %}

{# Categories tree  widget #}
{% block _listing_categories_listingListingCategories_widget -%}
    {% if required and empty_value is none and not empty_value_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} class=\"hidden\">
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('listing_category_widget_options_tree') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('listing_category_widget_options_tree') -}}
    </select>
{%- endblock %}

{% block listing_category_widget_options_tree -%}
    {% for group_label, choice in options %}
        {% set category = choice.data %}
        {% set indent = '&#160;&#160;&#160;'|repeat(category.getLvl) %}

        {%- if not category.isLeaf -%}
            <optgroup label=\"{{ indent  ~ category.getName() }}\">
                {% set options = choice %}
                {{- block('listing_category_widget_options_tree') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>
                {{ indent  ~ choice.label }}
            </option>
        {%- endif -%}
    {% endfor %}
{%- endblock listing_category_widget_options_tree %}

{% block _listing_categories_widget %}
    {{ block('_listing_categories_listingListingCategories_widget') }}
{% endblock %}", "CocoricoCoreBundle:Form:fields_category.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Form/fields_category.html.twig");
    }
}
