<?php

/* @CocoricoCore/Frontend/Common/_header.html.twig */
class __TwigTemplate_3a19a4d2cc44e1bc97f495cc2a822aa7dd6f65c45e2cb21b5e8847fc748854b9 extends Twig_Template
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
        $__internal_c8c4090cca57073677c22e9863d939b9a18dd9680ad22ce48368c3082f86d46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c4090cca57073677c22e9863d939b9a18dd9680ad22ce48368c3082f86d46b->enter($__internal_c8c4090cca57073677c22e9863d939b9a18dd9680ad22ce48368c3082f86d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_header.html.twig"));

        $__internal_dd3222abaf729bc8b0471389002328de3c57cfded37d980f58a7d0f34b5de0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3222abaf729bc8b0471389002328de3c57cfded37d980f58a7d0f34b5de0a5->enter($__internal_dd3222abaf729bc8b0471389002328de3c57cfded37d980f58a7d0f34b5de0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_header.html.twig"));

        // line 2
        echo "
<!-- header of the page -->
<header id=\"header\">
    <!-- topbar -->
    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"tel:";
        // line 12
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["cocorico_phone"]) || array_key_exists("cocorico_phone", $context) ? $context["cocorico_phone"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_phone" does not exist.', 12, $this->getSourceContext()); })()), array("(0)" => "", " " => "")), "html", null, true);
        echo "\"
                               tabindex=\"10\">
                                <i class=\"icon-phone\"></i>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["cocorico_phone"]) || array_key_exists("cocorico_phone", $context) ? $context["cocorico_phone"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_phone" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li>
                            <a tabindex=\"11\" href=\"mailto:";
        // line 18
        echo (isset($context["cocorico_contact_mail_obfuscated"]) || array_key_exists("cocorico_contact_mail_obfuscated", $context) ? $context["cocorico_contact_mail_obfuscated"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_contact_mail_obfuscated" does not exist.', 18, $this->getSourceContext()); })());
        echo "\">
                                <i class=\"icon-mail-alt\"></i>";
        // line 19
        echo (isset($context["cocorico_contact_mail_obfuscated"]) || array_key_exists("cocorico_contact_mail_obfuscated", $context) ? $context["cocorico_contact_mail_obfuscated"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_contact_mail_obfuscated" does not exist.', 19, $this->getSourceContext()); })());
        echo "
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- main navigation of the page -->
                <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#bs-example-navbar-collapse-1\" tabindex=\"2\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <!-- page logo -->
                        <a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_home");
        echo "\" tabindex=\"3\">
                        <!-- # DLEVASSEUR - CHANGE SIZE LOGO # -->
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.home.link", array(), "cocorico"), "html", null, true);
        echo "\" width=\"190\"
                                 height=\"50\">
                        <!-- # DLEVASSEUR - END # -->
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.who_we_are.slug", array(), "cocorico"))), "html", null, true);
        echo "\"
                                   tabindex=\"4\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.who_we_are.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_favourite");
        echo "\"
                                   tabindex=\"5\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.favorites.link", array(), "cocorico"), "html", null, true);
        echo "
                                    <span id=\"fav-count\"></span>
                                </a>
                            </li>

                            ";
        // line 66
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->getSourceContext()); })()), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 67
            echo "<li id=\"dashboard-dropdown\" class=\"dropdown\">
                                    <a id=\"dashboard-link\" class=\"dropdown-toggle\"
                                       href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_dashboard_profile_edit_about_me");
            echo "\" tabindex=\"6\"
                                       title=\"My Dashboard\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.dashboard.link", array(), "cocorico"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "user", array()), "firstName", array())), "html", null, true);
            echo ")
                                        <span id=\"nb-unread-msg\"></span>
                                        <span class=\"icon-down-open-mini\"></span>
                                    </a>
                                    ";
            // line 75
            $this->loadTemplate("@CocoricoCore/Frontend/Common/_nav.html.twig", "@CocoricoCore/Frontend/Common/_header.html.twig", 75)->display(array("nav_dashboard_current" => ""));
            // line 76
            echo "                                </li>";
        } else {
            // line 78
            echo "<li>
                                    <a href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_register");
            echo "\" tabindex=\"6\">
                                        ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.register.link", array(), "cocorico"), "html", null, true);
            echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_login");
            echo "\" tabindex=\"7\">
                                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.login.link", array(), "cocorico"), "html", null, true);
            echo "
                                    </a>
                                </li>";
        }
        // line 92
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoCoreBundle:Frontend/Language:switch", array("request" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->getSourceContext()); })()), "request", array()))));
        echo "

                            ";
        // line 95
        echo "                            ";
        $this->loadTemplate("@CocoricoCore/Frontend/Common/_currency_switcher.html.twig", "@CocoricoCore/Frontend/Common/_header.html.twig", 95)->display(array());
        // line 96
        echo "                        </ul>

                        ";
        // line 99
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_new");
        echo "\" class=\"btn btn-primary navbar-right\" tabindex=\"9\">
                            ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.listing.new.link", array(), "cocorico"), "html", null, true);
        echo "
                        </a>
\t\t\t\t\t\t<!-- MGONZALEZ Trouver une surface -->
                        <a href=\"/fr/annonce/resultat-recherche?categories[]=65&categories[]=66&categories[]=72&categories[]=73&categories[]=69&categories[]=68&categories[]=70&categories[]=74&categories[]=71&location[address]=France&location[lat]=46.227638&location[lng]=2.213749000000007&location[viewport]=((41.31433%2C+-5.559099999999944)%2C+(51.1241999%2C+9.662499900000057))&location[country]=FR&location[area]=&location[department]=&location[city]=&location[zip]=&location[route]=&location[streetNumber]=&location[addressType]=country%2Cpolitical&page=1\" class=\"btn btn-primary navbar-right\" tabindex=\"9\">
                            ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.listing.new.link", array(), "cocorico"), "html", null, true);
        echo "
                        </a>
                        <!-- END Trouver une surface -->
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_c8c4090cca57073677c22e9863d939b9a18dd9680ad22ce48368c3082f86d46b->leave($__internal_c8c4090cca57073677c22e9863d939b9a18dd9680ad22ce48368c3082f86d46b_prof);

        
        $__internal_dd3222abaf729bc8b0471389002328de3c57cfded37d980f58a7d0f34b5de0a5->leave($__internal_dd3222abaf729bc8b0471389002328de3c57cfded37d980f58a7d0f34b5de0a5_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 104,  189 => 100,  184 => 99,  180 => 96,  177 => 95,  171 => 92,  165 => 85,  161 => 84,  154 => 80,  150 => 79,  147 => 78,  144 => 76,  142 => 75,  133 => 71,  128 => 69,  124 => 67,  122 => 66,  114 => 60,  110 => 59,  103 => 55,  99 => 54,  85 => 45,  80 => 43,  53 => 19,  49 => 18,  42 => 14,  37 => 12,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico' %}

<!-- header of the page -->
<header id=\"header\">
    <!-- topbar -->
    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"tel:{{ cocorico_phone|replace({'(0)': '', ' ': ''}) }}\"
                               tabindex=\"10\">
                                <i class=\"icon-phone\"></i>{{ cocorico_phone }}
                            </a>
                        </li>
                        <li>
                            <a tabindex=\"11\" href=\"mailto:{{ cocorico_contact_mail_obfuscated|raw }}\">
                                <i class=\"icon-mail-alt\"></i>{{ cocorico_contact_mail_obfuscated|raw }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- main navigation of the page -->
                <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#bs-example-navbar-collapse-1\" tabindex=\"2\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <!-- page logo -->
                        <a class=\"navbar-brand\" href=\"{{ path('cocorico_home') }}\" tabindex=\"3\">
                        <!-- # DLEVASSEUR - CHANGE SIZE LOGO # -->
                            <img src=\"{{ asset('images/logo.png') }}\" alt=\"{{ 'nav.home.link'|trans }}\" width=\"190\"
                                 height=\"50\">
                        <!-- # DLEVASSEUR - END # -->
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.who_we_are.slug'|trans }) }}\"
                                   tabindex=\"4\">{{ 'nav.who_we_are.link'|trans }}
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('cocorico_listing_favourite') }}\"
                                   tabindex=\"5\">{{ 'nav.favorites.link'|trans }}
                                    <span id=\"fav-count\"></span>
                                </a>
                            </li>

                            {# User info #}
                            {%- if app.user is not null and is_granted(\"IS_AUTHENTICATED_FULLY\") -%}
                                <li id=\"dashboard-dropdown\" class=\"dropdown\">
                                    <a id=\"dashboard-link\" class=\"dropdown-toggle\"
                                       href=\"{{ path('cocorico_user_dashboard_profile_edit_about_me') }}\" tabindex=\"6\"
                                       title=\"My Dashboard\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                        {{ 'nav.dashboard.link'|trans }} ({{ app.user.firstName | capitalize }})
                                        <span id=\"nb-unread-msg\"></span>
                                        <span class=\"icon-down-open-mini\"></span>
                                    </a>
                                    {% include '@CocoricoCore/Frontend/Common/_nav.html.twig' with {'nav_dashboard_current':''} only %}
                                </li>
                            {%- else -%}
                                <li>
                                    <a href=\"{{ path('cocorico_user_register') }}\" tabindex=\"6\">
                                        {{ 'nav.register.link'|trans }}
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('cocorico_user_login') }}\" tabindex=\"7\">
                                        {{ 'nav.login.link'|trans }}
                                    </a>
                                </li>
                            {%- endif -%}


                            {# Language switcher. #}
                            {{ render(controller('CocoricoCoreBundle:Frontend/Language:switch', {'request': app.request} )) }}

                            {# Currency switcher #}
                            {% include '@CocoricoCore/Frontend/Common/_currency_switcher.html.twig' only %}
                        </ul>

                        {# New listing link #}
                        <a href=\"{{ path('cocorico_listing_new') }}\" class=\"btn btn-primary navbar-right\" tabindex=\"9\">
                            {{ 'nav.listing.new.link'|trans }}
                        </a>
\t\t\t\t\t\t<!-- MGONZALEZ Trouver une surface -->
                        <a href=\"/fr/annonce/resultat-recherche?categories[]=65&categories[]=66&categories[]=72&categories[]=73&categories[]=69&categories[]=68&categories[]=70&categories[]=74&categories[]=71&location[address]=France&location[lat]=46.227638&location[lng]=2.213749000000007&location[viewport]=((41.31433%2C+-5.559099999999944)%2C+(51.1241999%2C+9.662499900000057))&location[country]=FR&location[area]=&location[department]=&location[city]=&location[zip]=&location[route]=&location[streetNumber]=&location[addressType]=country%2Cpolitical&page=1\" class=\"btn btn-primary navbar-right\" tabindex=\"9\">
                            {{ 'nav.listing.new.link'|trans }}
                        </a>
                        <!-- END Trouver une surface -->
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</header>", "@CocoricoCore/Frontend/Common/_header.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_header.html.twig");
    }
}
