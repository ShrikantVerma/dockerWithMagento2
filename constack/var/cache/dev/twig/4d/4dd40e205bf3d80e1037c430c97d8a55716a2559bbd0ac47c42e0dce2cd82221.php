<?php

/* @CocoricoUser/Frontend/Common/_login_register.html.twig */
class __TwigTemplate_62092381ceb874d45bf63aab749faa88bb9dd90847995e5f043e566a5bda42cf extends Twig_Template
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
        $__internal_164fd9905cbbbcbdc15e98f37217e962381567006f7c0eedab164f4dc33ae1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164fd9905cbbbcbdc15e98f37217e962381567006f7c0eedab164f4dc33ae1fd->enter($__internal_164fd9905cbbbcbdc15e98f37217e962381567006f7c0eedab164f4dc33ae1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_login_register.html.twig"));

        $__internal_e5d21d4b38dd128032b9bf8d2542ca3ad7beb952eaded9b91cf0acfee70f2299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d21d4b38dd128032b9bf8d2542ca3ad7beb952eaded9b91cf0acfee70f2299->enter($__internal_e5d21d4b38dd128032b9bf8d2542ca3ad7beb952eaded9b91cf0acfee70f2299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoUser/Frontend/Common/_login_register.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context["login_class"] = " active";
            // line 6
            echo "    ";
            $context["register_class"] = "";
        }
        // line 8
        echo "
";
        // line 9
        if ((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            $context["login_class"] = "";
            // line 12
            echo "    ";
            $context["register_class"] = " active";
        }
        // line 14
        echo "
<div role=\"tabpanel\">
    <!-- Nav tabs -->
    <nav class=\"tabset-holder\">
        <a href=\"#\" class=\"opener\">
            <span class=\"hidden\">opener</span>
            <i class=\"icon-down-open-mini\"></i>
        </a>

        <ul id=\"login-register-tabs\" class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["register_class"]) || array_key_exists("register_class", $context) ? $context["register_class"] : (function () { throw new Twig_Error_Runtime('Variable "register_class" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                ";
        // line 25
        if (((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 25, $this->getSourceContext()); })()) && (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 25, $this->getSourceContext()); })()))) {
            // line 26
            echo "                    <a id=\"register-tab\" href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\"
                       data-text=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signup", array(), "cocorico_user"), "html", null, true);
            echo "\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signup", array(), "cocorico_user"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 31
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_register");
            echo "\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signup", array(), "cocorico_user"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 35
        echo "            </li>
            <li role=\"presentation\" class=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["login_class"]) || array_key_exists("login_class", $context) ? $context["login_class"] : (function () { throw new Twig_Error_Runtime('Variable "login_class" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
                ";
        // line 37
        if (((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 37, $this->getSourceContext()); })()) && (isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 37, $this->getSourceContext()); })()))) {
            // line 38
            echo "                    <a id=\"login-tab\" href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\"
                       data-text=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signin", array(), "cocorico_user"), "html", null, true);
            echo "\">
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signin", array(), "cocorico_user"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_login");
            echo "\">
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("user.signin", array(), "cocorico_user"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 47
        echo "            </li>
        </ul>
    </nav>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        ";
        // line 54
        echo "        ";
        if ((isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 54, $this->getSourceContext()); })())) {
            // line 55
            echo "            ";
            $this->loadTemplate("@CocoricoUser/Frontend/Common/_register.html.twig", "@CocoricoUser/Frontend/Common/_login_register.html.twig", 55)->display(array("form_registration" =>             // line 56
(isset($context["form_registration"]) || array_key_exists("form_registration", $context) ? $context["form_registration"] : (function () { throw new Twig_Error_Runtime('Variable "form_registration" does not exist.', 56, $this->getSourceContext()); })()), "register_class" =>             // line 57
(isset($context["register_class"]) || array_key_exists("register_class", $context) ? $context["register_class"] : (function () { throw new Twig_Error_Runtime('Variable "register_class" does not exist.', 57, $this->getSourceContext()); })())));
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 62
        echo "        ";
        if ((isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 62, $this->getSourceContext()); })())) {
            // line 63
            echo "            ";
            $this->loadTemplate("@CocoricoUser/Frontend/Common/_login.html.twig", "@CocoricoUser/Frontend/Common/_login_register.html.twig", 63)->display(array("form_login" =>             // line 64
(isset($context["form_login"]) || array_key_exists("form_login", $context) ? $context["form_login"] : (function () { throw new Twig_Error_Runtime('Variable "form_login" does not exist.', 64, $this->getSourceContext()); })()), "login_class" =>             // line 65
(isset($context["login_class"]) || array_key_exists("login_class", $context) ? $context["login_class"] : (function () { throw new Twig_Error_Runtime('Variable "login_class" does not exist.', 65, $this->getSourceContext()); })())));
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        ";
        // line 70
        echo "        ";
        $context["targetUrl"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "_security.main.target_path"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "_security.main.target_path"), "method"), "")) : (""));
        // line 71
        echo "        ";
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 71, $this->getSourceContext()); })())) {
            // line 72
            echo "            <input type=\"hidden\" name=\"redirect_to\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 72, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
        } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 73
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->getSourceContext()); })()), "request", array()), "uri", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")) && !twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 73, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "cocorico_listing_availabilities")))) {
            // line 74
            echo "            <input type=\"hidden\" name=\"redirect_to\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\"/>
        ";
        }
        // line 76
        echo "    </div>
</div>

";
        // line 80
        $this->loadTemplate("@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig", "@CocoricoUser/Frontend/Common/_login_register.html.twig", 80)->display(array());
        // line 81
        echo "
<script>
    \$(function () {
        //User type (legal or natural)
        \$('[data-id=person-type] input').each(function (k, personType) {
            toggleCompanyName(personType);
            toggleLabels(personType);

            \$(personType).on('click', function () {
                toggleCompanyName(this);
                toggleLabels(this);
            });
        });


        /**
         * Toggle user company field depending on type user
         * @param personType
         */
        function toggleCompanyName(personType) {
            if (!\$(personType).is(':checked')) {
                return;
            }

            if (\$(personType).val() == 2) {//legal
                \$('[data-id=company-name]').show();
                \$('[data-id=company-name] input').addClass('required');
            } else {//natural
                \$('[data-id=company-name]').hide();
                \$('[data-id=company-name] input').removeClass('required');
            }
        }

        /**
         * Toggle labels fields depending on type user
         * @param personType
         */
        function toggleLabels(personType) {
            if (!\$(personType).is(':checked')) {
                return;
            }

            if (\$(personType).val() == 2) {//legal
                \$('[data-label-legal]').each(function (k, label) {
                    \$(this).attr('data-label-natural', \$(this).text());//memorize label natural text
                    \$(this).text(\$(this).data('label-legal'));//change label text to legal  text

                    if (\$('#' + \$(this).attr('for')).attr('required') || \$(this).hasClass('required')) {//add * for required fields
                        \$(this).text(\$(this).text() + ' *');
                    }
                });
            } else {//natural
                \$('[data-label-legal]').each(function (k, label) {
                    \$(this).text(\$(this).data('label-natural'));//change label text to natural  text
                });
            }
        }

        //Errors
        \$('#form-registerlogin form').parsley({
            errorsContainer: function (ParsleyField) {
                return ParsleyField.\$element
                        .parents('.field-row.validate-row').find('.error-container');
            },
            errorsWrapper: '<div class=\"errors\"></div>',
            errorTemplate: '<span class=\"icon-error-field\"></span>'
        });

        //Activate login tab on page load if login errors
        if (\$(\"#login-errors-wrapper div.flashes\").length) {
            \$('#login-tab').tab('show');
        }

        //Empty login fields on subscribe tab shown
        \$('#login-register-tabs a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            if (e.target.id == \"register-tab\") {
                \$(\"#profile input[type=text]\").val('');
            }
        });
    });
</script>
";
        
        $__internal_164fd9905cbbbcbdc15e98f37217e962381567006f7c0eedab164f4dc33ae1fd->leave($__internal_164fd9905cbbbcbdc15e98f37217e962381567006f7c0eedab164f4dc33ae1fd_prof);

        
        $__internal_e5d21d4b38dd128032b9bf8d2542ca3ad7beb952eaded9b91cf0acfee70f2299->leave($__internal_e5d21d4b38dd128032b9bf8d2542ca3ad7beb952eaded9b91cf0acfee70f2299_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoUser/Frontend/Common/_login_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 81,  188 => 80,  183 => 76,  177 => 74,  175 => 73,  170 => 72,  167 => 71,  164 => 70,  161 => 68,  158 => 67,  156 => 65,  155 => 64,  153 => 63,  150 => 62,  147 => 60,  144 => 59,  142 => 57,  141 => 56,  139 => 55,  136 => 54,  128 => 47,  122 => 44,  117 => 43,  111 => 40,  107 => 39,  104 => 38,  102 => 37,  98 => 36,  95 => 35,  89 => 32,  84 => 31,  78 => 28,  74 => 27,  71 => 26,  69 => 25,  65 => 24,  53 => 14,  49 => 12,  46 => 11,  44 => 10,  42 => 9,  39 => 8,  35 => 6,  32 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_user' %}

{% if form_login %}
    {#{{ form_errors(form_login) }}#}
    {% set login_class= \" active\" %}
    {% set register_class= \"\" %}
{% endif %}

{% if form_registration %}
    {#{{ form_errors(form_registration) }}#}
    {% set login_class= \"\" %}
    {% set register_class= \" active\" %}
{% endif %}

<div role=\"tabpanel\">
    <!-- Nav tabs -->
    <nav class=\"tabset-holder\">
        <a href=\"#\" class=\"opener\">
            <span class=\"hidden\">opener</span>
            <i class=\"icon-down-open-mini\"></i>
        </a>

        <ul id=\"login-register-tabs\" class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"{{ register_class }}\">
                {% if form_login and form_registration %}
                    <a id=\"register-tab\" href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\"
                       data-text=\"{{ 'user.signup'|trans }}\">
                        {{ 'user.signup'|trans }}
                    </a>
                {% else %}
                    <a href=\"{{ path('cocorico_user_register') }}\">
                        {{ 'user.signup'|trans }}
                    </a>
                {% endif %}
            </li>
            <li role=\"presentation\" class=\"{{ login_class }}\">
                {% if form_login and form_registration %}
                    <a id=\"login-tab\" href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\"
                       data-text=\"{{ 'user.signin'|trans }}\">
                        {{ 'user.signin'|trans }}
                    </a>
                {% else %}
                    <a href=\"{{ path('cocorico_user_login') }}\">
                        {{ 'user.signin'|trans }}
                    </a>
                {% endif %}
            </li>
        </ul>
    </nav>

    <!-- Tab panes -->
    <div class=\"tab-content\">
        {#Registration Form#}
        {% if form_registration %}
            {% include '@CocoricoUser/Frontend/Common/_register.html.twig'  with {
            'form_registration' : form_registration,
            'register_class' : register_class
            } only %}
        {% endif %}

        {#Login Form#}
        {% if form_login %}
            {% include '@CocoricoUser/Frontend/Common/_login.html.twig'  with {
            'form_login' : form_login,
            'login_class' : login_class
            } only %}
        {% endif %}

        {#Redirect after login on referer except for some routes #}
        {% set targetUrl =  app.session.get('_security.main.target_path')|default('') %}
        {% if targetUrl %}
            <input type=\"hidden\" name=\"redirect_to\" value=\"{{ targetUrl }}\"/>
        {% elseif app.request.uri != app.request.headers.get('referer') and app.request.get('_route') not in ['cocorico_listing_availabilities'] %}
            <input type=\"hidden\" name=\"redirect_to\" value=\"{{ app.request.headers.get('referer') }}\"/>
        {% endif %}
    </div>
</div>

{#Facebook #}
{% include '@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig' only %}

<script>
    \$(function () {
        //User type (legal or natural)
        \$('[data-id=person-type] input').each(function (k, personType) {
            toggleCompanyName(personType);
            toggleLabels(personType);

            \$(personType).on('click', function () {
                toggleCompanyName(this);
                toggleLabels(this);
            });
        });


        /**
         * Toggle user company field depending on type user
         * @param personType
         */
        function toggleCompanyName(personType) {
            if (!\$(personType).is(':checked')) {
                return;
            }

            if (\$(personType).val() == 2) {//legal
                \$('[data-id=company-name]').show();
                \$('[data-id=company-name] input').addClass('required');
            } else {//natural
                \$('[data-id=company-name]').hide();
                \$('[data-id=company-name] input').removeClass('required');
            }
        }

        /**
         * Toggle labels fields depending on type user
         * @param personType
         */
        function toggleLabels(personType) {
            if (!\$(personType).is(':checked')) {
                return;
            }

            if (\$(personType).val() == 2) {//legal
                \$('[data-label-legal]').each(function (k, label) {
                    \$(this).attr('data-label-natural', \$(this).text());//memorize label natural text
                    \$(this).text(\$(this).data('label-legal'));//change label text to legal  text

                    if (\$('#' + \$(this).attr('for')).attr('required') || \$(this).hasClass('required')) {//add * for required fields
                        \$(this).text(\$(this).text() + ' *');
                    }
                });
            } else {//natural
                \$('[data-label-legal]').each(function (k, label) {
                    \$(this).text(\$(this).data('label-natural'));//change label text to natural  text
                });
            }
        }

        //Errors
        \$('#form-registerlogin form').parsley({
            errorsContainer: function (ParsleyField) {
                return ParsleyField.\$element
                        .parents('.field-row.validate-row').find('.error-container');
            },
            errorsWrapper: '<div class=\"errors\"></div>',
            errorTemplate: '<span class=\"icon-error-field\"></span>'
        });

        //Activate login tab on page load if login errors
        if (\$(\"#login-errors-wrapper div.flashes\").length) {
            \$('#login-tab').tab('show');
        }

        //Empty login fields on subscribe tab shown
        \$('#login-register-tabs a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            if (e.target.id == \"register-tab\") {
                \$(\"#profile input[type=text]\").val('');
            }
        });
    });
</script>
", "@CocoricoUser/Frontend/Common/_login_register.html.twig", "/cocorico/src/Cocorico/UserBundle/Resources/views/Frontend/Common/_login_register.html.twig");
    }
}
