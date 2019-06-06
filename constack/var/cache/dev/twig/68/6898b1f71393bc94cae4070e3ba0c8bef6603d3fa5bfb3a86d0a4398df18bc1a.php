<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_eb433116d98d0868a8cd26ee6f89178e0385f678fb9a5f7b51e2bea4c1ea2b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b904bf14de45a113ab1b9128187a9ab84d806a2bd3face13068e26a6e65397e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b904bf14de45a113ab1b9128187a9ab84d806a2bd3face13068e26a6e65397e->enter($__internal_7b904bf14de45a113ab1b9128187a9ab84d806a2bd3face13068e26a6e65397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        $__internal_1613ddc31724f6d5950747a99c84cb5a877d88e60a911e1c937f1ef7e4c5a462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1613ddc31724f6d5950747a99c84cb5a877d88e60a911e1c937f1ef7e4c5a462->enter($__internal_1613ddc31724f6d5950747a99c84cb5a877d88e60a911e1c937f1ef7e4c5a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_7b904bf14de45a113ab1b9128187a9ab84d806a2bd3face13068e26a6e65397e->leave($__internal_7b904bf14de45a113ab1b9128187a9ab84d806a2bd3face13068e26a6e65397e_prof);

        
        $__internal_1613ddc31724f6d5950747a99c84cb5a877d88e60a911e1c937f1ef7e4c5a462->leave($__internal_1613ddc31724f6d5950747a99c84cb5a877d88e60a911e1c937f1ef7e4c5a462_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_4e32a7cec8becf831f815d8688d68dd0ba78dc23d2b323dde35ba1d3fc341f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e32a7cec8becf831f815d8688d68dd0ba78dc23d2b323dde35ba1d3fc341f05->enter($__internal_4e32a7cec8becf831f815d8688d68dd0ba78dc23d2b323dde35ba1d3fc341f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        $__internal_9a23d1272c4c573eb9512ad942bd5c6239356f9b84b3457fdfcc8f917af0319f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a23d1272c4c573eb9512ad942bd5c6239356f9b84b3457fdfcc8f917af0319f->enter($__internal_9a23d1272c4c573eb9512ad942bd5c6239356f9b84b3457fdfcc8f917af0319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"editable\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 16
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 18, $this->getSourceContext()); })())) > 0)) {
            // line 19
            echo "    <div class=\"readonly\">
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) || array_key_exists("read_only_choices", $context) ? $context["read_only_choices"] : (function () { throw new Twig_Error_Runtime('Variable "read_only_choices" does not exist.', 22, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 23
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9a23d1272c4c573eb9512ad942bd5c6239356f9b84b3457fdfcc8f917af0319f->leave($__internal_9a23d1272c4c573eb9512ad942bd5c6239356f9b84b3457fdfcc8f917af0319f_prof);

        
        $__internal_4e32a7cec8becf831f815d8688d68dd0ba78dc23d2b323dde35ba1d3fc341f05->leave($__internal_4e32a7cec8becf831f815d8688d68dd0ba78dc23d2b323dde35ba1d3fc341f05_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 23,  71 => 22,  66 => 20,  63 => 19,  61 => 18,  56 => 16,  52 => 15,  49 => 14,  47 => 13,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "/cocorico/vendor/sonata-project/user-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
