<?php

/* CocoricoCoreBundle:Form:fields_translations.html.twig */
class __TwigTemplate_31795fd5c674bb08786dfc693300e57f534303d64504cee24be338223304b11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translationsForms_widget' => array($this, 'block_a2lix_translationsForms_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd1089ad11fc01f8952751e22cf5df3206244663f35371213129338958925bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1089ad11fc01f8952751e22cf5df3206244663f35371213129338958925bfc->enter($__internal_bd1089ad11fc01f8952751e22cf5df3206244663f35371213129338958925bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_translations.html.twig"));

        $__internal_0c7116cbb04264223525c767d76a031d71b186d4af35351263537b4483243dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7116cbb04264223525c767d76a031d71b186d4af35351263537b4483243dc6->enter($__internal_0c7116cbb04264223525c767d76a031d71b186d4af35351263537b4483243dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Form:fields_translations.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
        
        $__internal_bd1089ad11fc01f8952751e22cf5df3206244663f35371213129338958925bfc->leave($__internal_bd1089ad11fc01f8952751e22cf5df3206244663f35371213129338958925bfc_prof);

        
        $__internal_0c7116cbb04264223525c767d76a031d71b186d4af35351263537b4483243dc6->leave($__internal_0c7116cbb04264223525c767d76a031d71b186d4af35351263537b4483243dc6_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        $__internal_e3d970daa487fb801b0643e825cdcab49af97c74a34098e17061647ae961a4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d970daa487fb801b0643e825cdcab49af97c74a34098e17061647ae961a4e4->enter($__internal_e3d970daa487fb801b0643e825cdcab49af97c74a34098e17061647ae961a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        $__internal_a251b16b9aebcafe9afc3e6647727e622dd62199023d654d41828f9ed42180d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a251b16b9aebcafe9afc3e6647727e622dd62199023d654d41828f9ed42180d1->enter($__internal_a251b16b9aebcafe9afc3e6647727e622dd62199023d654d41828f9ed42180d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    <div role=\"tabpanel\">
        ";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 3, $this->getSourceContext()); })())) > 1)) {
            // line 4
            echo "            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translations_fields"]) {
                // line 7
                echo "                    ";
                $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_fields"], "vars", array()), "name", array());
                // line 8
                echo "                    ";
                // line 9
                echo "                    ";
                $context["tab_link"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, $context["translations_fields"]), "vars", array()), "id", array()) . "-") . (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 9, $this->getSourceContext()); })()));
                // line 10
                echo "
                    <li role=\"presentation\" ";
                // line 11
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 11, $this->getSourceContext()); })()))) {
                    echo "class=\"active\"";
                }
                echo ">
                        <a href=\"#";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["tab_link"]) || array_key_exists("tab_link", $context) ? $context["tab_link"] : (function () { throw new Twig_Error_Runtime('Variable "tab_link" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-toggle=\"tab\" data-text=\"";
                echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            ";
                // line 14
                echo "                            ";
                $context["has_error"] = false;
                // line 15
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translations_fields"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translations_field"]) {
                    if ( !(isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new Twig_Error_Runtime('Variable "has_error" does not exist.', 15, $this->getSourceContext()); })())) {
                        // line 16
                        echo "                                ";
                        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array()), "errors", array()))) {
                            // line 17
                            echo "                                    ";
                            $context["has_error"] = true;
                            // line 18
                            echo "                                    <span class=\"errors\">
                                        <i class=\"icon-error-field\"></i>
                                    </span>
                                ";
                        }
                        // line 22
                        echo "                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translations_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "
                            ";
                // line 24
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 24, $this->getSourceContext()); })())), "html", null, true);
                echo "
                            ";
                // line 25
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_fields"], "vars", array()), "required", array())) {
                    echo "*";
                }
                // line 26
                echo "                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translations_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </ul>
        ";
        }
        // line 31
        echo "
        <!-- Tab panes -->
        <div class=\"tab-content\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translations_fields"]) {
            // line 35
            echo "                ";
            $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_fields"], "vars", array()), "name", array());
            // line 36
            echo "                ";
            // line 37
            echo "                ";
            $context["tab_link"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, $context["translations_fields"]), "vars", array()), "id", array()) . "-") . (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 37, $this->getSourceContext()); })()));
            // line 38
            echo "
                <div role=\"tabpanel\" class=\"tab-pane ";
            // line 39
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "request", array()), "locale", array()) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 39, $this->getSourceContext()); })()))) {
                echo "active";
            }
            echo "\"
                     id=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["tab_link"]) || array_key_exists("tab_link", $context) ? $context["tab_link"] : (function () { throw new Twig_Error_Runtime('Variable "tab_link" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\">

                    ";
            // line 43
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["translations_fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translations_field"]) {
                // line 44
                echo "                        ";
                $context["type"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array()), "block_prefixes", array());
                // line 45
                echo "                        ";
                $context["translation_domain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array(), "any", false, true), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array(), "any", false, true), "translation_domain", array()), "cocorico")) : ("cocorico"));
                // line 46
                echo "                        ";
                $context["placeholder"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "placeholder", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "placeholder", array()), "")) : (""));
                // line 47
                echo "
                        ";
                // line 48
                if (((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 48, $this->getSourceContext()); })()) == "auto")) {
                    // line 49
                    echo "                            ";
                    $context["placeholder"] = (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translations_field"], "vars", array()), "id", array()) . "_placeholder");
                    // line 50
                    echo "                        ";
                }
                // line 51
                echo "
                        ";
                // line 52
                if (!twig_in_filter("hidden", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 52, $this->getSourceContext()); })()))) {
                    // line 53
                    echo "                            <div class=\"field-row\">
                                ";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translations_field"], 'errors');
                    echo "
                                ";
                    // line 55
                    if (!twig_in_filter("textarea", (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 55, $this->getSourceContext()); })()))) {
                        // line 56
                        echo "                                    <span class=\"label\">";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translations_field"], 'label');
                        echo "</span>
                                    <div class=\"field-holder\">
                                        ";
                        // line 58
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translations_field"], 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(                        // line 61
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 61, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 61, $this->getSourceContext()); })())))));
                        // line 63
                        echo "
                                    </div>
                                ";
                    } else {
                        // line 66
                        echo "                                    <span class=\"label block\">";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translations_field"], 'label');
                        echo "</span>
                                    <div class=\"thin-scroll\">
                                        ";
                        // line 68
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translations_field"], 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans(                        // line 71
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 71, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 71, $this->getSourceContext()); })())))));
                        // line 73
                        echo "
                                    </div>
                                ";
                    }
                    // line 76
                    echo "                            </div>
                        ";
                }
                // line 78
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translations_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translations_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </div>
    </div>
";
        
        $__internal_a251b16b9aebcafe9afc3e6647727e622dd62199023d654d41828f9ed42180d1->leave($__internal_a251b16b9aebcafe9afc3e6647727e622dd62199023d654d41828f9ed42180d1_prof);

        
        $__internal_e3d970daa487fb801b0643e825cdcab49af97c74a34098e17061647ae961a4e4->leave($__internal_e3d970daa487fb801b0643e825cdcab49af97c74a34098e17061647ae961a4e4_prof);

    }

    // line 86
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        $__internal_0f67b91413c7e183673fb10dc18462fe0632955e7b20f37204ca7e5532da734c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f67b91413c7e183673fb10dc18462fe0632955e7b20f37204ca7e5532da734c->enter($__internal_0f67b91413c7e183673fb10dc18462fe0632955e7b20f37204ca7e5532da734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        $__internal_dbf58c60e1fb57f246f763577ef16cdc9819f183b1e564eddaf21be4e86c7d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf58c60e1fb57f246f763577ef16cdc9819f183b1e564eddaf21be4e86c7d66->enter($__internal_dbf58c60e1fb57f246f763577ef16cdc9819f183b1e564eddaf21be4e86c7d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        // line 87
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
        
        $__internal_dbf58c60e1fb57f246f763577ef16cdc9819f183b1e564eddaf21be4e86c7d66->leave($__internal_dbf58c60e1fb57f246f763577ef16cdc9819f183b1e564eddaf21be4e86c7d66_prof);

        
        $__internal_0f67b91413c7e183673fb10dc18462fe0632955e7b20f37204ca7e5532da734c->leave($__internal_0f67b91413c7e183673fb10dc18462fe0632955e7b20f37204ca7e5532da734c_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Form:fields_translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  275 => 87,  266 => 86,  253 => 81,  246 => 79,  240 => 78,  236 => 76,  231 => 73,  229 => 71,  228 => 68,  222 => 66,  217 => 63,  215 => 61,  214 => 58,  208 => 56,  206 => 55,  202 => 54,  199 => 53,  197 => 52,  194 => 51,  191 => 50,  188 => 49,  186 => 48,  183 => 47,  180 => 46,  177 => 45,  174 => 44,  169 => 43,  164 => 40,  158 => 39,  155 => 38,  152 => 37,  150 => 36,  147 => 35,  143 => 34,  138 => 31,  134 => 29,  126 => 26,  122 => 25,  118 => 24,  115 => 23,  108 => 22,  102 => 18,  99 => 17,  96 => 16,  90 => 15,  87 => 14,  81 => 12,  75 => 11,  72 => 10,  69 => 9,  67 => 8,  64 => 7,  60 => 6,  56 => 4,  54 => 3,  51 => 2,  42 => 1,  32 => 86,  29 => 85,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block a2lix_translations_widget %}
    <div role=\"tabpanel\">
        {% if locales|length > 1 %}
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% for translations_fields in form %}
                    {% set locale = translations_fields.vars.name %}
                    {#to manage multiple tabset in same page#}
                    {% set tab_link =  (translations_fields|first).vars.id ~ \"-\" ~ locale %}

                    <li role=\"presentation\" {% if app.request.locale == locale %}class=\"active\"{% endif %}>
                        <a href=\"#{{ tab_link }}\" data-toggle=\"tab\" data-text=\"{{ locale }}\">
                            {#error icon in tabs#}
                            {% set has_error = false %}
                            {% for translations_field in translations_fields if not has_error %}
                                {% if translations_field.vars.errors|length %}
                                    {% set has_error = true %}
                                    <span class=\"errors\">
                                        <i class=\"icon-error-field\"></i>
                                    </span>
                                {% endif %}
                            {% endfor %}

                            {{ locale|capitalize }}
                            {% if translations_fields.vars.required %}*{% endif %}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}

        <!-- Tab panes -->
        <div class=\"tab-content\">
            {% for translations_fields in form %}
                {% set locale = translations_fields.vars.name %}
                {#to manage multiple tabset in same page#}
                {% set tab_link =  (translations_fields|first).vars.id ~ \"-\" ~ locale %}

                <div role=\"tabpanel\" class=\"tab-pane {% if app.request.locale == locale %}active{% endif %}\"
                     id=\"{{ tab_link }}\">

                    {#{{ form_errors(translations_fields) }}#}
                    {% for translations_field in translations_fields %}
                        {% set type = translations_field.vars.block_prefixes %}
                        {% set translation_domain = translations_field.vars.translation_domain|default('cocorico') %}
                        {% set placeholder = translations_field.vars.attr.placeholder|default('') %}

                        {% if placeholder == 'auto' %}
                            {% set placeholder = translations_field.vars.id ~ '_placeholder' %}
                        {% endif %}

                        {% if \"hidden\" not in type %}
                            <div class=\"field-row\">
                                {{ form_errors(translations_field) }}
                                {% if \"textarea\" not in type %}
                                    <span class=\"label\">{{ form_label(translations_field) }}</span>
                                    <div class=\"field-holder\">
                                        {{ form_widget(translations_field, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': placeholder|trans({}, translation_domain)
                                            }
                                        }) }}
                                    </div>
                                {% else %}
                                    <span class=\"label block\">{{ form_label(translations_field) }}</span>
                                    <div class=\"thin-scroll\">
                                        {{ form_widget(translations_field, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': placeholder|trans({}, translation_domain)
                                            }
                                        }) }}
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            {% endfor %}

        </div>
    </div>
{% endblock %}

{% block a2lix_translationsForms_widget %}
    {{ block('a2lix_translations_widget') }}
{% endblock %}
", "CocoricoCoreBundle:Form:fields_translations.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Form/fields_translations.html.twig");
    }
}
