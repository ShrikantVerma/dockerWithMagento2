<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_fb4c2ecdd1982e2610560b2b532cbba01a95ffc1a0584725054b3f899e69e4a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02046be6bd4f2544713fb303389cc96f29f5012dea9c2b85a0660d929fce5844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02046be6bd4f2544713fb303389cc96f29f5012dea9c2b85a0660d929fce5844->enter($__internal_02046be6bd4f2544713fb303389cc96f29f5012dea9c2b85a0660d929fce5844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        $__internal_2204f5d2c20bcd12eebc1d51bd00f8236cb2b44b29423da355c100c7d8738e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2204f5d2c20bcd12eebc1d51bd00f8236cb2b44b29423da355c100c7d8738e64->enter($__internal_2204f5d2c20bcd12eebc1d51bd00f8236cb2b44b29423da355c100c7d8738e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_02046be6bd4f2544713fb303389cc96f29f5012dea9c2b85a0660d929fce5844->leave($__internal_02046be6bd4f2544713fb303389cc96f29f5012dea9c2b85a0660d929fce5844_prof);

        
        $__internal_2204f5d2c20bcd12eebc1d51bd00f8236cb2b44b29423da355c100c7d8738e64->leave($__internal_2204f5d2c20bcd12eebc1d51bd00f8236cb2b44b29423da355c100c7d8738e64_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_bb6b8f5594a21980cc1d04562dbb222655d288f0d25abccec2b2411dba6d38ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6b8f5594a21980cc1d04562dbb222655d288f0d25abccec2b2411dba6d38ce->enter($__internal_bb6b8f5594a21980cc1d04562dbb222655d288f0d25abccec2b2411dba6d38ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        $__internal_02437ac56188a4a38604ad6ed8eed9b037e091728c0d5fd52c4c6b98ba08d833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02437ac56188a4a38604ad6ed8eed9b037e091728c0d5fd52c4c6b98ba08d833->enter($__internal_02437ac56188a4a38604ad6ed8eed9b037e091728c0d5fd52c4c6b98ba08d833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 3, $this->getSourceContext()); })()) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\"]').on(\"click\",function() {
                    var childWin = window.open(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elfinder", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 7, $this->getSourceContext()); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 7, $this->getSourceContext()); })()))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
        
        $__internal_02437ac56188a4a38604ad6ed8eed9b037e091728c0d5fd52c4c6b98ba08d833->leave($__internal_02437ac56188a4a38604ad6ed8eed9b037e091728c0d5fd52c4c6b98ba08d833_prof);

        
        $__internal_bb6b8f5594a21980cc1d04562dbb222655d288f0d25abccec2b2411dba6d38ce->leave($__internal_bb6b8f5594a21980cc1d04562dbb222655d288f0d25abccec2b2411dba6d38ce_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  61 => 6,  57 => 4,  55 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block elfinder_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-type=\"elfinder-input-field\" />
    {% if enable and instance is defined %}
        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                \$('[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]').on(\"click\",function() {
                    var childWin = window.open(\"{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                });
            });
            
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    {% endif %}
{% endblock %}
", "FMElfinderBundle:Form:elfinder_widget.html.twig", "/cocorico/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
