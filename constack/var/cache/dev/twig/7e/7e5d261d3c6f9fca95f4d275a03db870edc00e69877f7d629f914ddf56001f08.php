<?php

/* @CocoricoCore/Frontend/Common/_footer.html.twig */
class __TwigTemplate_f7c9e125332af12572e3e2b3ed6d71f7148cb3cede462109746a4baba41ae937 extends Twig_Template
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
        $__internal_0e34624523daf92ead8bf56818df3f6484266aad81a329cf1a77e1911a5c3c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e34624523daf92ead8bf56818df3f6484266aad81a329cf1a77e1911a5c3c9d->enter($__internal_0e34624523daf92ead8bf56818df3f6484266aad81a329cf1a77e1911a5c3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_footer.html.twig"));

        $__internal_b29ce6272402c2050a69a66e6284ddfeb77aac66d0a76be845d2110906667d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29ce6272402c2050a69a66e6284ddfeb77aac66d0a76be845d2110906667d23->enter($__internal_b29ce6272402c2050a69a66e6284ddfeb77aac66d0a76be845d2110906667d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/_footer.html.twig"));

        // line 2
        echo "
<!-- bottom-container -->
<div class=\"bottom-container\">
    <!-- footer-aside -->
    <aside class=\"aside-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- contact-info -->
                    <div class=\"contact-info pull-right\">
                        <strong class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.contact_us.title", array(), "cocorico"), "html", null, true);
        echo "</strong>
                        <ul class=\"list-unstyled\">
                            <li>
                                <address><i class=\"icon-location\"></i>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cocorico_address"]) || array_key_exists("cocorico_address", $context) ? $context["cocorico_address"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_address" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "</address>
                            </li>
                            <li>
                                <a href=\"tel:";
        // line 18
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["cocorico_phone"]) || array_key_exists("cocorico_phone", $context) ? $context["cocorico_phone"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_phone" does not exist.', 18, $this->getSourceContext()); })()), array("(0)" => "", " " => "")), "html", null, true);
        echo "\">
                                    <i class=\"icon-phone\"></i>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cocorico_phone"]) || array_key_exists("cocorico_phone", $context) ? $context["cocorico_phone"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_phone" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"mailto:";
        // line 23
        echo (isset($context["cocorico_contact_mail_obfuscated"]) || array_key_exists("cocorico_contact_mail_obfuscated", $context) ? $context["cocorico_contact_mail_obfuscated"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_contact_mail_obfuscated" does not exist.', 23, $this->getSourceContext()); })());
        echo "\">
                                    <i class=\"icon-mail-alt\"></i>
                                    ";
        // line 25
        echo (isset($context["cocorico_contact_mail_obfuscated"]) || array_key_exists("cocorico_contact_mail_obfuscated", $context) ? $context["cocorico_contact_mail_obfuscated"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_contact_mail_obfuscated" does not exist.', 25, $this->getSourceContext()); })());
        echo "
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- navarea -->
                    <nav class=\"navarea\">
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.about.title", array(), "cocorico"), "html", null, true);
        echo "</li>
                            <li>
                                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.who_we_are.slug", array(), "cocorico"))), "html", null, true);
        echo "\">
                                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.who_we_are.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.how_it_works.slug", array(), "cocorico"))), "html", null, true);
        echo "\">
                                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.how_it_works.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.the_team.slug", array(), "cocorico"))), "html", null, true);
        echo "\">
                                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.the_team.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                        </ul>
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.help.title", array(), "cocorico"), "html", null, true);
        echo "</li>
                            <li>
                                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.faq.slug", array(), "cocorico"))), "html", null, true);
        echo "\">
                                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.faq.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_contact_new");
        echo "\">
                                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.contact_us.link", array(), "cocorico"), "html", null, true);
        echo "
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </aside>


    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoCMSBundle:Frontend/Footer:index", array("request" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 71
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->getSourceContext()); })()), "request", array()))));
        // line 72
        echo "

    <!-- footer of the page -->
    <footer id=\"footer\" class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_page_show", array("slug" => $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("nav.legal_notices.slug", array(), "cocorico"))), "html", null, true);
        echo "\"
                   class=\"by pull-right\">
                    ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.legal_notices.link", array(), "cocorico"), "html", null, true);
        echo "
                </a>

                <a href=\"http://www.cocolabs.io/fr/\"
                   class=\"by pull-right credit\" target=\"_blank\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/marketplace-solutions.png"), "html", null, true);
        echo "\" width=\"45\" height=\"15\"
                         alt=\"creation marketplace\">
                </a>

                <p>
                    &copy; ";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("footer.all_right_reserved", array(), "cocorico"), "html", null, true);
        echo "
                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_home");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["cocorico_site_name"]) || array_key_exists("cocorico_site_name", $context) ? $context["cocorico_site_name"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_site_name" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
                </p>
            </div>
        </div>
    </footer>
</div>";
        
        $__internal_0e34624523daf92ead8bf56818df3f6484266aad81a329cf1a77e1911a5c3c9d->leave($__internal_0e34624523daf92ead8bf56818df3f6484266aad81a329cf1a77e1911a5c3c9d_prof);

        
        $__internal_b29ce6272402c2050a69a66e6284ddfeb77aac66d0a76be845d2110906667d23->leave($__internal_b29ce6272402c2050a69a66e6284ddfeb77aac66d0a76be845d2110906667d23_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 91,  181 => 90,  173 => 85,  165 => 80,  160 => 78,  152 => 72,  150 => 71,  149 => 70,  135 => 59,  131 => 58,  124 => 54,  120 => 53,  115 => 51,  107 => 46,  103 => 45,  96 => 41,  92 => 40,  85 => 36,  81 => 35,  76 => 33,  65 => 25,  60 => 23,  53 => 19,  49 => 18,  43 => 15,  37 => 12,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico' %}

<!-- bottom-container -->
<div class=\"bottom-container\">
    <!-- footer-aside -->
    <aside class=\"aside-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <!-- contact-info -->
                    <div class=\"contact-info pull-right\">
                        <strong class=\"title\">{{ 'footer.contact_us.title'|trans }}</strong>
                        <ul class=\"list-unstyled\">
                            <li>
                                <address><i class=\"icon-location\"></i>{{ cocorico_address }}</address>
                            </li>
                            <li>
                                <a href=\"tel:{{ cocorico_phone|replace({'(0)': '', ' ': ''}) }}\">
                                    <i class=\"icon-phone\"></i>{{ cocorico_phone }}
                                </a>
                            </li>
                            <li>
                                <a href=\"mailto:{{ cocorico_contact_mail_obfuscated|raw }}\">
                                    <i class=\"icon-mail-alt\"></i>
                                    {{ cocorico_contact_mail_obfuscated|raw }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- navarea -->
                    <nav class=\"navarea\">
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">{{ 'footer.about.title'|trans }}</li>
                            <li>
                                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.who_we_are.slug'|trans }) }}\">
                                    {{ 'footer.who_we_are.link'|trans }}
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.how_it_works.slug'|trans }) }}\">
                                    {{ 'footer.how_it_works.link'|trans }}
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.the_team.slug'|trans }) }}\">
                                    {{ 'footer.the_team.link'|trans }}
                                </a>
                            </li>
                        </ul>
                        <ul class=\"list-unstyled pull-left\">
                            <li class=\"title\">{{ 'footer.help.title'|trans }}</li>
                            <li>
                                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.faq.slug'|trans }) }}\">
                                    {{ 'footer.faq.link'|trans }}
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('cocorico_contact_new') }}\">
                                    {{ 'footer.contact_us.link'|trans }}
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </aside>


    {{ render(controller('CocoricoCMSBundle:Frontend/Footer:index',{
        request: app.request
    })) }}

    <!-- footer of the page -->
    <footer id=\"footer\" class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <a href=\"{{ path('cocorico_page_show', { 'slug': 'nav.legal_notices.slug'|trans }) }}\"
                   class=\"by pull-right\">
                    {{ 'footer.legal_notices.link'|trans }}
                </a>

                <a href=\"http://www.cocolabs.io/fr/\"
                   class=\"by pull-right credit\" target=\"_blank\">
                    <img src=\"{{ asset('images/marketplace-solutions.png') }}\" width=\"45\" height=\"15\"
                         alt=\"creation marketplace\">
                </a>

                <p>
                    &copy; {{ \"now\"|date(\"Y\") }} {{ 'footer.all_right_reserved'|trans }}
                    <a href=\"{{ path('cocorico_home') }}\">{{ cocorico_site_name }}</a>
                </p>
            </div>
        </div>
    </footer>
</div>", "@CocoricoCore/Frontend/Common/_footer.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/_footer.html.twig");
    }
}
