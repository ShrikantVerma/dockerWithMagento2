<?php

/* @CocoricoCore/Frontend/Common/js/_facebook_js.html.twig */
class __TwigTemplate_75e4f42c8e658b26be589763295f39534bc8bac5de3571df117e4589d4bef470 extends Twig_Template
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
        $__internal_fb0895927af698d1c019905b06836be4b7fd799592f730b02a5ced034ebf5e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0895927af698d1c019905b06836be4b7fd799592f730b02a5ced034ebf5e95->enter($__internal_fb0895927af698d1c019905b06836be4b7fd799592f730b02a5ced034ebf5e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig"));

        $__internal_10aab8dd0ba41e0719527953a628b300c92a4d8ff6af9f01407aa56a3a378167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aab8dd0ba41e0719527953a628b300c92a4d8ff6af9f01407aa56a3a378167->enter($__internal_10aab8dd0ba41e0719527953a628b300c92a4d8ff6af9f01407aa56a3a378167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig"));

        // line 1
        echo "<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: \"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["cocorico_facebook_id"]) || array_key_exists("cocorico_facebook_id", $context) ? $context["cocorico_facebook_id"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_facebook_id" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
            xfbml: true,
            version: 'v2.10',
            cookie: true
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CountryExtension')->getCultureCode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "locale", array())), "html", null, true);
        echo "/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function fb_login() {
        FB.getLoginStatus(function (response) {
            if (response.status === 'connected') {
                // connected
                document.location = \"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
            } else {
                // not_authorized
                FB.login(function (response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                    } else {
//                        alert('Cancelled.');
                    }
                }, {scope: 'email'});
            }
        });
    }
</script>";
        
        $__internal_fb0895927af698d1c019905b06836be4b7fd799592f730b02a5ced034ebf5e95->leave($__internal_fb0895927af698d1c019905b06836be4b7fd799592f730b02a5ced034ebf5e95_prof);

        
        $__internal_10aab8dd0ba41e0719527953a628b300c92a4d8ff6af9f01407aa56a3a378167->leave($__internal_10aab8dd0ba41e0719527953a628b300c92a4d8ff6af9f01407aa56a3a378167_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  58 => 26,  47 => 18,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: \"{{ cocorico_facebook_id }}\",
            xfbml: true,
            version: 'v2.10',
            cookie: true
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/{{ culture_code(app.request.locale) }}/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function fb_login() {
        FB.getLoginStatus(function (response) {
            if (response.status === 'connected') {
                // connected
                document.location = \"{{ url(\"hwi_oauth_service_redirect\", {service: \"facebook\"}) }}\";
            } else {
                // not_authorized
                FB.login(function (response) {
                    if (response.authResponse) {
                        document.location = \"{{ url(\"hwi_oauth_service_redirect\", {service: \"facebook\"}) }}\";
                    } else {
//                        alert('Cancelled.');
                    }
                }, {scope: 'email'});
            }
        });
    }
</script>", "@CocoricoCore/Frontend/Common/js/_facebook_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Common/js/_facebook_js.html.twig");
    }
}
