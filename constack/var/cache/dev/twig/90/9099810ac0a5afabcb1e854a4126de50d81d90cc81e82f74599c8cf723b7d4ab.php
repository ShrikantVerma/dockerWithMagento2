<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_5ebaa4032b1e7289ce9481128c06948e0213681459667a5ea36beb0b39415b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9cfb651fc92d6eb62ae1f43fcda15f1a63b417d29c52f8fe923e58647018989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cfb651fc92d6eb62ae1f43fcda15f1a63b417d29c52f8fe923e58647018989->enter($__internal_f9cfb651fc92d6eb62ae1f43fcda15f1a63b417d29c52f8fe923e58647018989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        $__internal_378ebfb1ac38965de6a33d575f8c3abb699110f1c9abdfa20086e222ca611b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378ebfb1ac38965de6a33d575f8c3abb699110f1c9abdfa20086e222ca611b05->enter($__internal_378ebfb1ac38965de6a33d575f8c3abb699110f1c9abdfa20086e222ca611b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_f9cfb651fc92d6eb62ae1f43fcda15f1a63b417d29c52f8fe923e58647018989->leave($__internal_f9cfb651fc92d6eb62ae1f43fcda15f1a63b417d29c52f8fe923e58647018989_prof);

        
        $__internal_378ebfb1ac38965de6a33d575f8c3abb699110f1c9abdfa20086e222ca611b05->leave($__internal_378ebfb1ac38965de6a33d575f8c3abb699110f1c9abdfa20086e222ca611b05_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_54f39d1d51b936002d8a793708b98e82722283bf1a337a13fbd31ad4d07af056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f39d1d51b936002d8a793708b98e82722283bf1a337a13fbd31ad4d07af056->enter($__internal_54f39d1d51b936002d8a793708b98e82722283bf1a337a13fbd31ad4d07af056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        $__internal_429d9bf3ff1a8a609a4b4f81aa8153e1b01a36b2638e930b6e7fb68340d6210b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429d9bf3ff1a8a609a4b4f81aa8153e1b01a36b2638e930b6e7fb68340d6210b->enter($__internal_429d9bf3ff1a8a609a4b4f81aa8153e1b01a36b2638e930b6e7fb68340d6210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 15, $this->getSourceContext()); })())));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_429d9bf3ff1a8a609a4b4f81aa8153e1b01a36b2638e930b6e7fb68340d6210b->leave($__internal_429d9bf3ff1a8a609a4b4f81aa8153e1b01a36b2638e930b6e7fb68340d6210b_prof);

        
        $__internal_54f39d1d51b936002d8a793708b98e82722283bf1a337a13fbd31ad4d07af056->leave($__internal_54f39d1d51b936002d8a793708b98e82722283bf1a337a13fbd31ad4d07af056_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_6c60dd0b2c032583ef337bdef4eb5e960b41331ff76c3d6960f41e9129cc36ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c60dd0b2c032583ef337bdef4eb5e960b41331ff76c3d6960f41e9129cc36ef->enter($__internal_6c60dd0b2c032583ef337bdef4eb5e960b41331ff76c3d6960f41e9129cc36ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        $__internal_b08404b30a9575cb3a1ef3716aa773b662b67830bce6ff257f4e89a91a214da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08404b30a9575cb3a1ef3716aa773b662b67830bce6ff257f4e89a91a214da9->enter($__internal_b08404b30a9575cb3a1ef3716aa773b662b67830bce6ff257f4e89a91a214da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 25, $this->getSourceContext()); })())) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 34, $this->getSourceContext()); })())) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 34, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b08404b30a9575cb3a1ef3716aa773b662b67830bce6ff257f4e89a91a214da9->leave($__internal_b08404b30a9575cb3a1ef3716aa773b662b67830bce6ff257f4e89a91a214da9_prof);

        
        $__internal_6c60dd0b2c032583ef337bdef4eb5e960b41331ff76c3d6960f41e9129cc36ef->leave($__internal_6c60dd0b2c032583ef337bdef4eb5e960b41331ff76c3d6960f41e9129cc36ef_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_6990564443893bde24050453cdcc01a32d23d96d16cef514aa689e1e24eb86dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6990564443893bde24050453cdcc01a32d23d96d16cef514aa689e1e24eb86dd->enter($__internal_6990564443893bde24050453cdcc01a32d23d96d16cef514aa689e1e24eb86dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        $__internal_fa6907add2c94e78710669350d18506aabf8dd0b7818b366a4da8376e569846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6907add2c94e78710669350d18506aabf8dd0b7818b366a4da8376e569846a->enter($__internal_fa6907add2c94e78710669350d18506aabf8dd0b7818b366a4da8376e569846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 42, $this->getSourceContext()); })()), "pickDate", array(), "array")) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 44, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 44, $this->getSourceContext()); })())));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 48, $this->getSourceContext()); })()), "pickDate", array(), "array")) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
        
        $__internal_fa6907add2c94e78710669350d18506aabf8dd0b7818b366a4da8376e569846a->leave($__internal_fa6907add2c94e78710669350d18506aabf8dd0b7818b366a4da8376e569846a_prof);

        
        $__internal_6990564443893bde24050453cdcc01a32d23d96d16cef514aa689e1e24eb86dd->leave($__internal_6990564443893bde24050453cdcc01a32d23d96d16cef514aa689e1e24eb86dd_prof);

    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_4826fdd4086406539f250081c3de1c6f1465aec185fd6caa02a3dd9043f38452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4826fdd4086406539f250081c3de1c6f1465aec185fd6caa02a3dd9043f38452->enter($__internal_4826fdd4086406539f250081c3de1c6f1465aec185fd6caa02a3dd9043f38452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        $__internal_13a91dc6a933bf9a4e30c4a3b13c598430d700f36bfa51f186521c95a5a4ffde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a91dc6a933bf9a4e30c4a3b13c598430d700f36bfa51f186521c95a5a4ffde->enter($__internal_13a91dc6a933bf9a4e30c4a3b13c598430d700f36bfa51f186521c95a5a4ffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 56, $this->getSourceContext()); })())) {
            // line 57
            echo "            <div class=\"input-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 65
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 65, $this->getSourceContext()); })())) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 65, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_13a91dc6a933bf9a4e30c4a3b13c598430d700f36bfa51f186521c95a5a4ffde->leave($__internal_13a91dc6a933bf9a4e30c4a3b13c598430d700f36bfa51f186521c95a5a4ffde_prof);

        
        $__internal_4826fdd4086406539f250081c3de1c6f1465aec185fd6caa02a3dd9043f38452->leave($__internal_4826fdd4086406539f250081c3de1c6f1465aec185fd6caa02a3dd9043f38452_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  235 => 65,  231 => 63,  225 => 61,  219 => 58,  216 => 57,  213 => 56,  210 => 55,  201 => 54,  182 => 48,  179 => 47,  177 => 46,  172 => 45,  169 => 44,  159 => 42,  156 => 41,  147 => 40,  129 => 34,  125 => 32,  119 => 30,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  95 => 23,  82 => 18,  80 => 17,  75 => 16,  72 => 15,  66 => 13,  63 => 12,  54 => 11,  44 => 54,  41 => 53,  39 => 40,  36 => 39,  34 => 23,  31 => 22,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date {% if not dp_options['pickDate'] %}timepicker{% endif %}' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\">
                <span class=\"fa {% if dp_options['pickDate'] %}fa-calendar{% else %}fa-clock{% endif %}\"></span>
            </span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
", "SonataCoreBundle:Form:datepicker.html.twig", "/cocorico/vendor/sonata-project/core-bundle/src/Resources/views/Form/datepicker.html.twig");
    }
}
