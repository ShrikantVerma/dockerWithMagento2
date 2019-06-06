<?php

/* CocoricoCoreBundle:Frontend/Common:_flash.html.twig */
class __TwigTemplate_10e7cf19e7dd98dcbb6a949f48496f24e914ad3bb2c2326d96d62a502cffad8e extends Twig_Template
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
        $__internal_0e67a29bab49937ca211ffc31988f1e7660ddf5c97185cb5793cb5aca06c24b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e67a29bab49937ca211ffc31988f1e7660ddf5c97185cb5793cb5aca06c24b6->enter($__internal_0e67a29bab49937ca211ffc31988f1e7660ddf5c97185cb5793cb5aca06c24b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend/Common:_flash.html.twig"));

        $__internal_086a2a4f2321c448672fb7ad4e5414ba0b3a641ae6d10b62af34d06a8f4f73bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086a2a4f2321c448672fb7ad4e5414ba0b3a641ae6d10b62af34d06a8f4f73bb->enter($__internal_086a2a4f2321c448672fb7ad4e5414ba0b3a641ae6d10b62af34d06a8f4f73bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend/Common:_flash.html.twig"));

        // line 5
        $context["alt_flashes"] = array(0 => "success_voucher", 1 => "error_voucher");
        // line 6
        echo "
";
        // line 8
        $context["display_alt"] = ((array_key_exists("display_alt", $context)) ? (_twig_default_filter((isset($context["display_alt"]) || array_key_exists("display_alt", $context) ? $context["display_alt"] : (function () { throw new Twig_Error_Runtime('Variable "display_alt" does not exist.', 8, $this->getSourceContext()); })()), false)) : (false));
        // line 9
        echo "
<div class=\"clearfix\"></div>
<div class=\"flashes clearfix\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            echo "
        ";
            // line 14
            $context["type_css"] = $context["type"];
            // line 15
            echo "        ";
            $context["hidden"] = "";
            // line 16
            echo "
        ";
            // line 17
            if (twig_in_filter($context["type"], (isset($context["alt_flashes"]) || array_key_exists("alt_flashes", $context) ? $context["alt_flashes"] : (function () { throw new Twig_Error_Runtime('Variable "alt_flashes" does not exist.', 17, $this->getSourceContext()); })()))) {
                // line 18
                echo "            ";
                if ( !(isset($context["display_alt"]) || array_key_exists("display_alt", $context) ? $context["display_alt"] : (function () { throw new Twig_Error_Runtime('Variable "display_alt" does not exist.', 18, $this->getSourceContext()); })())) {
                    // line 19
                    echo "                ";
                    // line 20
                    echo "                ";
                    $context["hidden"] = "hidden";
                    // line 21
                    echo "            ";
                } else {
                    // line 22
                    echo "                ";
                    // line 23
                    echo "                ";
                    $context["type_css"] = twig_first($this->env, twig_split_filter($this->env, $context["type"], "_"));
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "        ";
            }
            // line 26
            echo "
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type_css"]) || array_key_exists("type_css", $context) ? $context["type_css"] : (function () { throw new Twig_Error_Runtime('Variable "type_css" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
                echo "-new ";
                echo twig_escape_filter($this->env, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new Twig_Error_Runtime('Variable "hidden" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                <i class=\"ico icon-";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["type_css"]) || array_key_exists("type_css", $context) ? $context["type_css"] : (function () { throw new Twig_Error_Runtime('Variable "type_css" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                echo "\">&nbsp;</i>

                <p>
                    ";
                // line 32
                if (($context["type"] == "success")) {
                    // line 33
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("Success", array(), "cocorico"), "html", null, true);
                    echo "! ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    ";
                } elseif ((                // line 34
$context["type"] == "error")) {
                    // line 35
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("Error", array(), "cocorico"), "html", null, true);
                    echo "! ";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    ";
                } else {
                    // line 37
                    echo "                        ";
                    if (!twig_in_filter($context["type"], (isset($context["alt_flashes"]) || array_key_exists("alt_flashes", $context) ? $context["alt_flashes"] : (function () { throw new Twig_Error_Runtime('Variable "alt_flashes" does not exist.', 37, $this->getSourceContext()); })()))) {
                        // line 38
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans($context["type"], array(), "cocorico"), "html", null, true);
                        echo "! ";
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 40
                        echo "                            ";
                        if ( !(isset($context["display_alt"]) || array_key_exists("display_alt", $context) ? $context["display_alt"] : (function () { throw new Twig_Error_Runtime('Variable "display_alt" does not exist.', 40, $this->getSourceContext()); })())) {
                            // line 41
                            echo "                                ";
                            // line 42
                            echo "                                ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "add", array(0 => $context["type"], 1 => $context["message"]), "method"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 44
                            echo "                                ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(twig_capitalize_string_filter($this->env, (isset($context["type_css"]) || array_key_exists("type_css", $context) ? $context["type_css"] : (function () { throw new Twig_Error_Runtime('Variable "type_css" does not exist.', 44, $this->getSourceContext()); })())), array(), "cocorico"), "html", null, true);
                            echo "! ";
                            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 46
                        echo "                        ";
                    }
                    // line 47
                    echo "                    ";
                }
                // line 48
                echo "                </p>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        
        $__internal_0e67a29bab49937ca211ffc31988f1e7660ddf5c97185cb5793cb5aca06c24b6->leave($__internal_0e67a29bab49937ca211ffc31988f1e7660ddf5c97185cb5793cb5aca06c24b6_prof);

        
        $__internal_086a2a4f2321c448672fb7ad4e5414ba0b3a641ae6d10b62af34d06a8f4f73bb->leave($__internal_086a2a4f2321c448672fb7ad4e5414ba0b3a641ae6d10b62af34d06a8f4f73bb_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Frontend/Common:_flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 52,  159 => 51,  151 => 48,  148 => 47,  145 => 46,  137 => 44,  131 => 42,  129 => 41,  126 => 40,  118 => 38,  115 => 37,  107 => 35,  105 => 34,  98 => 33,  96 => 32,  90 => 29,  83 => 28,  79 => 27,  76 => 26,  73 => 25,  70 => 24,  67 => 23,  65 => 22,  62 => 21,  59 => 20,  57 => 19,  54 => 18,  52 => 17,  49 => 16,  46 => 15,  44 => 14,  41 => 13,  37 => 12,  32 => 9,  30 => 8,  27 => 6,  25 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Alternatives flashes to not display on main flashes display (first include).
Alt flashes name must have the form : success_xxx or error_xxx
#}
{% set alt_flashes = ['success_voucher', 'error_voucher' ] %}

{#Does the alternate flash must be displayed#}
{% set display_alt = display_alt|default(false) %}

<div class=\"clearfix\"></div>
<div class=\"flashes clearfix\">
    {% for type, messages in app.session.flashbag.all() %}

        {% set type_css = type %}
        {% set hidden = \"\" %}

        {% if type in alt_flashes %}
            {% if not display_alt %}
                {#Hide main flash display as it's displayed in alt flash #}
                {% set hidden = \"hidden\" %}
            {% else %}
                {#Transform alternate type flash in success or error class #}
                {% set type_css = type|split('_')|first %}
            {% endif %}
        {% endif %}

        {% for message in messages %}
            <div class=\"alert alert-{{ type_css }}-new {{ hidden }}\">
                <i class=\"ico icon-{{ type_css }}\">&nbsp;</i>

                <p>
                    {% if type == 'success' %}
                        {{ 'Success'|trans({}, 'cocorico') }}! {{ message }}
                    {% elseif type == 'error' %}
                        {{ 'Error'|trans({}, 'cocorico') }}! {{ message }}
                    {% else %}
                        {% if type not in alt_flashes %}
                            {{ type|trans({}, 'cocorico') }}! {{ message }}
                        {% else %}
                            {% if not display_alt %}
                                {#Add again to the flash stack because it was removed while accessing all flasbags #}
                                {{ app.session.flashbag.add(type, message) }}
                            {% else %}
                                {{ type_css|capitalize|trans({}, 'cocorico') }}! {{ message }}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                </p>
            </div>
        {% endfor %}
    {% endfor %}
</div>
", "CocoricoCoreBundle:Frontend/Common:_flash.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_flash.html.twig");
    }
}
