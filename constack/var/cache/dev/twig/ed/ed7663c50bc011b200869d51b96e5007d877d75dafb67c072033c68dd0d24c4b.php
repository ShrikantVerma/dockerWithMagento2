<?php

/* ::base.html.twig */
class __TwigTemplate_73cbd3dfd25a8dfa8ca4eeb7e87144c795e37a3aa0cc3be14bd8732cc74dadd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'open_graph_data' => array($this, 'block_open_graph_data'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'markup_jsonld' => array($this, 'block_markup_jsonld'),
            'theme' => array($this, 'block_theme'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49d72bd6970375c2b3d5affe18c2670c8e686053828dc0ae5f15945ff139b1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d72bd6970375c2b3d5affe18c2670c8e686053828dc0ae5f15945ff139b1c3->enter($__internal_49d72bd6970375c2b3d5affe18c2670c8e686053828dc0ae5f15945ff139b1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b1c30f11cc1c0586ffd679e739dc3f70cd4cbcfa4cea18770d84551b3907625f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c30f11cc1c0586ffd679e739dc3f70cd4cbcfa4cea18770d84551b3907625f->enter($__internal_b1c30f11cc1c0586ffd679e739dc3f70cd4cbcfa4cea18770d84551b3907625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "\">
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        // line 8
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">";
        // line 11
        $this->displayBlock('open_graph_data', $context, $blocks);
        // line 13
        echo "<meta charset=\"utf-8\">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- include the Open and Raleway Sans google font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- include the Raleway google font -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>

    <!-- include HTML5 IE enabling script and stylesheet for IE -->
    <!--[if lt IE 9]>
    <link type=\"text/css\" media=\"all\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ie.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/ie.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("manifest.json"), "html", null, true);
        echo "\">
    <link rel=\"mask-icon\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#d61022\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "
    ";
        // line 53
        echo "    <script>
        (function (w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];
            function p(x, y) {
                if (x == \"ready\") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            }

            var a = {ready: p, bind: p};
            w.\$ = w.jQuery = function (f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document);
    </script>

    ";
        // line 76
        $this->loadTemplate("@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig", "::base.html.twig", 76)->display(array());
        // line 77
        echo "
    ";
        // line 79
        $this->displayBlock('markup_jsonld', $context, $blocks);
        // line 83
        $this->loadTemplate("@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig", "::base.html.twig", 83)->display(array());
        // line 84
        echo "</head>

<body class=\"loading ";
        // line 86
        $this->displayBlock('theme', $context, $blocks);
        echo "\">
<!-- allow a user to go to the main content of the page -->
<noscript>Javascript must be enabled for the correct page display</noscript>

";
        // line 90
        $this->loadTemplate("@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig", "::base.html.twig", 90)->display(array());
        // line 91
        echo "
<div class=\"skip\">
    <a tabindex=\"1\" href=\"#main\">skip to content</a>
</div>

<div id=\"wrapper\">
    ";
        // line 97
        $this->displayBlock('layout', $context, $blocks);
        // line 98
        echo "</div>

<!-- allow a user to go to the top of the page -->
<div class=\"skip\">
    <a href=\"#header\">back to top</a>
</div>

";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "
</body>
</html>
";
        
        $__internal_49d72bd6970375c2b3d5affe18c2670c8e686053828dc0ae5f15945ff139b1c3->leave($__internal_49d72bd6970375c2b3d5affe18c2670c8e686053828dc0ae5f15945ff139b1c3_prof);

        
        $__internal_b1c30f11cc1c0586ffd679e739dc3f70cd4cbcfa4cea18770d84551b3907625f->leave($__internal_b1c30f11cc1c0586ffd679e739dc3f70cd4cbcfa4cea18770d84551b3907625f_prof);

    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_7eca5c681b3d19e4ff7baedb66e822266f5509da6c8d03e03dc6531d31c9d46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eca5c681b3d19e4ff7baedb66e822266f5509da6c8d03e03dc6531d31c9d46d->enter($__internal_7eca5c681b3d19e4ff7baedb66e822266f5509da6c8d03e03dc6531d31c9d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_5a54002ee52d9e9106d4afd7dddfa75633f7f67c30e4119440c2877692016338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a54002ee52d9e9106d4afd7dddfa75633f7f67c30e4119440c2877692016338->enter($__internal_5a54002ee52d9e9106d4afd7dddfa75633f7f67c30e4119440c2877692016338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        // line 6
        echo twig_escape_filter($this->env, ((ucwords(twig_replace_filter(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "requestUri", array()), 4), array("/" => " > ", "-" => " ", "_" => " "))) . " - ") . (isset($context["cocorico_site_name"]) || array_key_exists("cocorico_site_name", $context) ? $context["cocorico_site_name"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_site_name" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_5a54002ee52d9e9106d4afd7dddfa75633f7f67c30e4119440c2877692016338->leave($__internal_5a54002ee52d9e9106d4afd7dddfa75633f7f67c30e4119440c2877692016338_prof);

        
        $__internal_7eca5c681b3d19e4ff7baedb66e822266f5509da6c8d03e03dc6531d31c9d46d->leave($__internal_7eca5c681b3d19e4ff7baedb66e822266f5509da6c8d03e03dc6531d31c9d46d_prof);

    }

    // line 9
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_2c614713a7476819bad9b71bb26d778c34ebc069847a72ca12235e467c4e0020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c614713a7476819bad9b71bb26d778c34ebc069847a72ca12235e467c4e0020->enter($__internal_2c614713a7476819bad9b71bb26d778c34ebc069847a72ca12235e467c4e0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_d06be2e3da61641c4b170f6cc94312c73180e922f1c6d2942570689d13d4fe99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06be2e3da61641c4b170f6cc94312c73180e922f1c6d2942570689d13d4fe99->enter($__internal_d06be2e3da61641c4b170f6cc94312c73180e922f1c6d2942570689d13d4fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (isset($context["cocorico_short_description"]) || array_key_exists("cocorico_short_description", $context) ? $context["cocorico_short_description"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_short_description" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_d06be2e3da61641c4b170f6cc94312c73180e922f1c6d2942570689d13d4fe99->leave($__internal_d06be2e3da61641c4b170f6cc94312c73180e922f1c6d2942570689d13d4fe99_prof);

        
        $__internal_2c614713a7476819bad9b71bb26d778c34ebc069847a72ca12235e467c4e0020->leave($__internal_2c614713a7476819bad9b71bb26d778c34ebc069847a72ca12235e467c4e0020_prof);

    }

    // line 11
    public function block_open_graph_data($context, array $blocks = array())
    {
        $__internal_e0207809ae6dce8c19a8d23af9d513f36a264c70ea5b6f47445cda397af63852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0207809ae6dce8c19a8d23af9d513f36a264c70ea5b6f47445cda397af63852->enter($__internal_e0207809ae6dce8c19a8d23af9d513f36a264c70ea5b6f47445cda397af63852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "open_graph_data"));

        $__internal_453302ff32fb56ee0a4ec49d555284ff041d6dc0432a0bee7a125525a3eb8cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453302ff32fb56ee0a4ec49d555284ff041d6dc0432a0bee7a125525a3eb8cab->enter($__internal_453302ff32fb56ee0a4ec49d555284ff041d6dc0432a0bee7a125525a3eb8cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "open_graph_data"));

        
        $__internal_453302ff32fb56ee0a4ec49d555284ff041d6dc0432a0bee7a125525a3eb8cab->leave($__internal_453302ff32fb56ee0a4ec49d555284ff041d6dc0432a0bee7a125525a3eb8cab_prof);

        
        $__internal_e0207809ae6dce8c19a8d23af9d513f36a264c70ea5b6f47445cda397af63852->leave($__internal_e0207809ae6dce8c19a8d23af9d513f36a264c70ea5b6f47445cda397af63852_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6abea6d2cdf32bd4ab079ed0605977011b28ff102173a4885d40f1c2e2bc56db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abea6d2cdf32bd4ab079ed0605977011b28ff102173a4885d40f1c2e2bc56db->enter($__internal_6abea6d2cdf32bd4ab079ed0605977011b28ff102173a4885d40f1c2e2bc56db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e90cab70030d84327a19acc2fb5094f9274cc786b691c85c6ca781a04a9333b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90cab70030d84327a19acc2fb5094f9274cc786b691c85c6ca781a04a9333b6->enter($__internal_e90cab70030d84327a19acc2fb5094f9274cc786b691c85c6ca781a04a9333b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9507c4f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_all_1.css");
            // line 48
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
            // asset "9507c4f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_bootstrap-datetimepicker_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
            // asset "9507c4f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_bootstrap-multiselect_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
            // asset "9507c4f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_unslider_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
            // asset "9507c4f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_cookie-consent_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
            // asset "9507c4f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all_all-override_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
        } else {
            // asset "9507c4f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9507c4f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/all.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
        ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "    ";
        
        $__internal_e90cab70030d84327a19acc2fb5094f9274cc786b691c85c6ca781a04a9333b6->leave($__internal_e90cab70030d84327a19acc2fb5094f9274cc786b691c85c6ca781a04a9333b6_prof);

        
        $__internal_6abea6d2cdf32bd4ab079ed0605977011b28ff102173a4885d40f1c2e2bc56db->leave($__internal_6abea6d2cdf32bd4ab079ed0605977011b28ff102173a4885d40f1c2e2bc56db_prof);

    }

    // line 79
    public function block_markup_jsonld($context, array $blocks = array())
    {
        $__internal_7a9ac0e1dbad7e4df0b6f5f4a23158803f7c7d1ffb282f43046a573d4ed48c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9ac0e1dbad7e4df0b6f5f4a23158803f7c7d1ffb282f43046a573d4ed48c26->enter($__internal_7a9ac0e1dbad7e4df0b6f5f4a23158803f7c7d1ffb282f43046a573d4ed48c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        $__internal_75757c6592794b84915a60e3ef4343bbbf41b1ef5982d7df0080c519ce843a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75757c6592794b84915a60e3ef4343bbbf41b1ef5982d7df0080c519ce843a97->enter($__internal_75757c6592794b84915a60e3ef4343bbbf41b1ef5982d7df0080c519ce843a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        // line 80
        try {
            $this->loadTemplate("CocoricoSeoBundle:Frontend:Common/_markup.jsonld.twig", "::base.html.twig", 80)->display(array());
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        
        $__internal_75757c6592794b84915a60e3ef4343bbbf41b1ef5982d7df0080c519ce843a97->leave($__internal_75757c6592794b84915a60e3ef4343bbbf41b1ef5982d7df0080c519ce843a97_prof);

        
        $__internal_7a9ac0e1dbad7e4df0b6f5f4a23158803f7c7d1ffb282f43046a573d4ed48c26->leave($__internal_7a9ac0e1dbad7e4df0b6f5f4a23158803f7c7d1ffb282f43046a573d4ed48c26_prof);

    }

    // line 86
    public function block_theme($context, array $blocks = array())
    {
        $__internal_2ca6ab5a34d4fc55b929dcecd37aa1f8fbd7e1ac5c047706da719d254d818b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca6ab5a34d4fc55b929dcecd37aa1f8fbd7e1ac5c047706da719d254d818b44->enter($__internal_2ca6ab5a34d4fc55b929dcecd37aa1f8fbd7e1ac5c047706da719d254d818b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme"));

        $__internal_9bbe2edac8083f9334d5683ded20fcb9bc947b8fd90597ba594f9faba4977719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbe2edac8083f9334d5683ded20fcb9bc947b8fd90597ba594f9faba4977719->enter($__internal_9bbe2edac8083f9334d5683ded20fcb9bc947b8fd90597ba594f9faba4977719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme"));

        
        $__internal_9bbe2edac8083f9334d5683ded20fcb9bc947b8fd90597ba594f9faba4977719->leave($__internal_9bbe2edac8083f9334d5683ded20fcb9bc947b8fd90597ba594f9faba4977719_prof);

        
        $__internal_2ca6ab5a34d4fc55b929dcecd37aa1f8fbd7e1ac5c047706da719d254d818b44->leave($__internal_2ca6ab5a34d4fc55b929dcecd37aa1f8fbd7e1ac5c047706da719d254d818b44_prof);

    }

    // line 97
    public function block_layout($context, array $blocks = array())
    {
        $__internal_f1157b57c0a722b1b09fb0d2b390fe130a483819ebb3f256cc02c33f82445369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1157b57c0a722b1b09fb0d2b390fe130a483819ebb3f256cc02c33f82445369->enter($__internal_f1157b57c0a722b1b09fb0d2b390fe130a483819ebb3f256cc02c33f82445369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_8a454254b3e0eb064e24fa385d05664e6f2b6be47f0e4c466e4f3684713e904e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a454254b3e0eb064e24fa385d05664e6f2b6be47f0e4c466e4f3684713e904e->enter($__internal_8a454254b3e0eb064e24fa385d05664e6f2b6be47f0e4c466e4f3684713e904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_8a454254b3e0eb064e24fa385d05664e6f2b6be47f0e4c466e4f3684713e904e->leave($__internal_8a454254b3e0eb064e24fa385d05664e6f2b6be47f0e4c466e4f3684713e904e_prof);

        
        $__internal_f1157b57c0a722b1b09fb0d2b390fe130a483819ebb3f256cc02c33f82445369->leave($__internal_f1157b57c0a722b1b09fb0d2b390fe130a483819ebb3f256cc02c33f82445369_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a047466c3719da9dc715ffacb17a07fa209c86ea047e072928c54a3ea19ac89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a047466c3719da9dc715ffacb17a07fa209c86ea047e072928c54a3ea19ac89->enter($__internal_0a047466c3719da9dc715ffacb17a07fa209c86ea047e072928c54a3ea19ac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82f7c4fa47e4aee771a567e6494df7f80ab3450cdb96c5ff82b4e47a3894e537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f7c4fa47e4aee771a567e6494df7f80ab3450cdb96c5ff82b4e47a3894e537->enter($__internal_82f7c4fa47e4aee771a567e6494df7f80ab3450cdb96c5ff82b4e47a3894e537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    <script>
        //Global Javascript variables
        var locale = '";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "';
        var locales = ";
        // line 109
        echo json_encode((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 109, $this->getSourceContext()); })()));
        echo ";
        var defaultCurrency = '";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["defaultCurrency"]) || array_key_exists("defaultCurrency", $context) ? $context["defaultCurrency"] : (function () { throw new Twig_Error_Runtime('Variable "defaultCurrency" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
        echo "';
        var currentCurrency = '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["currentCurrency"]) || array_key_exists("currentCurrency", $context) ? $context["currentCurrency"] : (function () { throw new Twig_Error_Runtime('Variable "currentCurrency" does not exist.', 111, $this->getSourceContext()); })()), "html", null, true);
        echo "';
        //Does the app is in day mode or time mode
        var timeUnitIsDay = ";
        // line 113
        echo (((isset($context["timeUnitIsDay"]) || array_key_exists("timeUnitIsDay", $context) ? $context["timeUnitIsDay"] : (function () { throw new Twig_Error_Runtime('Variable "timeUnitIsDay" does not exist.', 113, $this->getSourceContext()); })())) ? ("true") : ("false"));
        echo ";
        var timeUnitAllDay = ";
        // line 114
        echo (((isset($context["timeUnitAllDay"]) || array_key_exists("timeUnitAllDay", $context) ? $context["timeUnitAllDay"] : (function () { throw new Twig_Error_Runtime('Variable "timeUnitAllDay" does not exist.', 114, $this->getSourceContext()); })())) ? ("true") : ("false"));
        echo ";
        var endDayIncluded = ";
        // line 115
        echo (((isset($context["endDayIncluded"]) || array_key_exists("endDayIncluded", $context) ? $context["endDayIncluded"] : (function () { throw new Twig_Error_Runtime('Variable "endDayIncluded" does not exist.', 115, $this->getSourceContext()); })())) ? ("true") : ("false"));
        echo ";
        var isAuthenticated = ";
        // line 116
        echo ((( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->getSourceContext()); })()), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) ? ("true") : ("false"));
        echo ";
        var hoursAvailable = ";
        // line 117
        echo json_encode((isset($context["timeHoursAvailable"]) || array_key_exists("timeHoursAvailable", $context) ? $context["timeHoursAvailable"] : (function () { throw new Twig_Error_Runtime('Variable "timeHoursAvailable" does not exist.', 117, $this->getSourceContext()); })()));
        echo ";
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/i18n/jquery-ui-i18n.min.js\"></script>

    <script type=\"text/javascript\">
        var jqEnabled = window.jQuery && typeof window.jQuery(\"html\") !== 'undefined';
        jqEnabled || document.write('<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>');
        jqEnabled || document.write('<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-ui.min.js"), "html", null, true);
        echo "\"><\\/script>');
        jqEnabled || document.write('<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-ui-i18n.min.js"), "html", null, true);
        echo "\"><\\/script>');
    </script>

    ";
        // line 135
        echo "    <script>
        (function (\$, d) {
            \$.each(readyQ, function (i, f) {
                \$(f)
            });
            \$.each(bindReadyQ, function (i, f) {
                \$(d).bind(\"ready\", f)
            })
        })(jQuery, document)
    </script>

    <script type=\"text/javascript\"
            src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">
        \$.fn.modal || document.write('<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"><\\/script>');
    </script>

    ";
        // line 152
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "45bb9a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_moment_1.js");
            // line 171
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_json2_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.cookie_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.touch-punch_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_hammer_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_bootstrap-multiselect_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_bootstrap-datetimepicker_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_parsley.min_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.unslider_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.caroufredsel.min_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.clearsearch_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.main_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_jquery.main-override_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_common_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_date-time_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
            // asset "45bb9a2_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all_cookie-consent_16.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "45bb9a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_45bb9a2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/all.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 171, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 173
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            if (isAuthenticated) {
                //Unread messages
                getNbUnReadMessages(\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_dashboard_message_nb_unread");
        echo "\");
            }
            //Handle Ajax Unauthorised access
            handleUnauthorisedAjaxAccess(\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_user_login");
        echo "\");
        });
    </script>
";
        
        $__internal_82f7c4fa47e4aee771a567e6494df7f80ab3450cdb96c5ff82b4e47a3894e537->leave($__internal_82f7c4fa47e4aee771a567e6494df7f80ab3450cdb96c5ff82b4e47a3894e537_prof);

        
        $__internal_0a047466c3719da9dc715ffacb17a07fa209c86ea047e072928c54a3ea19ac89->leave($__internal_0a047466c3719da9dc715ffacb17a07fa209c86ea047e072928c54a3ea19ac89_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 181,  580 => 178,  573 => 173,  469 => 171,  465 => 152,  459 => 149,  443 => 135,  437 => 131,  433 => 130,  429 => 129,  414 => 117,  410 => 116,  406 => 115,  402 => 114,  398 => 113,  393 => 111,  389 => 110,  385 => 109,  381 => 108,  377 => 106,  368 => 105,  351 => 97,  334 => 86,  319 => 80,  310 => 79,  300 => 50,  256 => 48,  251 => 39,  242 => 38,  225 => 11,  207 => 9,  197 => 6,  188 => 5,  175 => 185,  173 => 105,  164 => 98,  162 => 97,  154 => 91,  152 => 90,  145 => 86,  141 => 84,  139 => 83,  137 => 79,  134 => 77,  132 => 76,  107 => 53,  104 => 51,  102 => 38,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  70 => 27,  66 => 26,  51 => 13,  49 => 11,  46 => 9,  43 => 8,  41 => 5,  36 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <title>
        {%- block meta_title -%}
            {{ app.request.requestUri|slice(4)|replace({'/': \" > \", '-': \" \", '_': \" \"})|ucwords ~ \" - \" ~ cocorico_site_name }}
        {%- endblock -%}
    </title>
    <meta name=\"description\" content=\"{%- block meta_description -%}{{ cocorico_short_description }}{%- endblock -%}\">

    {%- block open_graph_data -%}{%- endblock -%}

    <meta charset=\"utf-8\">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- include the Open and Raleway Sans google font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- include the Raleway google font -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>

    <!-- include HTML5 IE enabling script and stylesheet for IE -->
    <!--[if lt IE 9]>
    <link type=\"text/css\" media=\"all\" rel=\"stylesheet\" href=\"{{ asset('css/ie.css') }}\">
    <script type=\"text/javascript\" src=\"{{ asset('js/vendor/ie.js') }}\"></script>
    <![endif]-->

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\">
    <link rel=\"mask-icon\" href=\"{{ asset('safari-pinned-tab.svg') }}\" color=\"#d61022\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    {% block stylesheets %}
        {% stylesheets
        'css/all.css'
        'css/vendor/bootstrap-datetimepicker.css'
        'css/vendor/bootstrap-multiselect.css'
        'css/vendor/unslider.css'
        'css/vendor/cookie-consent.css'
        'css/all-override.css'

        filter='cssrewrite, ?minifycsscompressor' output='css/compiled/all.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" media=\"all\">
        {% endstylesheets %}
    {% endblock %}

    {# Safely using .ready() before including jQuery #}
    <script>
        (function (w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];
            function p(x, y) {
                if (x == \"ready\") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            }

            var a = {ready: p, bind: p};
            w.\$ = w.jQuery = function (f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document);
    </script>

    {% include '@CocoricoCore/Frontend/Common/js/_google_analytics_js.html.twig' only %}

    {#Rich snippets used by search engines like google  #}
    {%- block markup_jsonld -%}
        {% include 'CocoricoSeoBundle:Frontend:Common/_markup.jsonld.twig' ignore missing only %}
    {%- endblock -%}

    {% include '@CocoricoCore/Frontend/Common/_cookie_consent_js.html.twig' only %}
</head>

<body class=\"loading {% block theme %}{% endblock %}\">
<!-- allow a user to go to the main content of the page -->
<noscript>Javascript must be enabled for the correct page display</noscript>

{% include '@CocoricoCore/Frontend/Common/js/_google_tag_manager_js.html.twig' only %}

<div class=\"skip\">
    <a tabindex=\"1\" href=\"#main\">skip to content</a>
</div>

<div id=\"wrapper\">
    {% block layout %}{% endblock %}
</div>

<!-- allow a user to go to the top of the page -->
<div class=\"skip\">
    <a href=\"#header\">back to top</a>
</div>

{% block javascripts %}
    <script>
        //Global Javascript variables
        var locale = '{{ app.request.locale }}';
        var locales = {{ locales|json_encode|raw }};
        var defaultCurrency = '{{ defaultCurrency }}';
        var currentCurrency = '{{ currentCurrency }}';
        //Does the app is in day mode or time mode
        var timeUnitIsDay = {{ timeUnitIsDay ? 'true' : 'false' }};
        var timeUnitAllDay = {{ timeUnitAllDay ? 'true' : 'false' }};
        var endDayIncluded = {{ endDayIncluded ? 'true' : 'false' }};
        var isAuthenticated = {{ app.user is not null and is_granted(\"IS_AUTHENTICATED_FULLY\") ? 'true' : 'false' }};
        var hoursAvailable = {{ timeHoursAvailable|json_encode|raw }};
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/i18n/jquery-ui-i18n.min.js\"></script>

    <script type=\"text/javascript\">
        var jqEnabled = window.jQuery && typeof window.jQuery(\"html\") !== 'undefined';
        jqEnabled || document.write('<script src=\"{{ asset('js/vendor/jquery.min.js') }}\"><\\/script>');
        jqEnabled || document.write('<script src=\"{{ asset('js/vendor/jquery-ui.min.js') }}\"><\\/script>');
        jqEnabled || document.write('<script src=\"{{ asset('js/vendor/jquery-ui-i18n.min.js') }}\"><\\/script>');
    </script>

    {#Safely using .ready() before including jQuery #}
    <script>
        (function (\$, d) {
            \$.each(readyQ, function (i, f) {
                \$(f)
            });
            \$.each(bindReadyQ, function (i, f) {
                \$(d).bind(\"ready\", f)
            })
        })(jQuery, document)
    </script>

    <script type=\"text/javascript\"
            src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\">
        \$.fn.modal || document.write('<script src=\"{{ asset('js/vendor/bootstrap.min.js') }}\"><\\/script>');
    </script>

    {% javascripts
    'js/vendor/moment.js'
    'js/vendor/json2.js'
    'js/vendor/jquery.cookie.js'
    'js/vendor/jquery.touch-punch.js'
    'js/vendor/hammer.js'
    'js/vendor/bootstrap-multiselect.js'
    'js/vendor/bootstrap-datetimepicker.js'
    'js/vendor/parsley.min.js'
    'js/vendor/jquery.unslider.js'
    'js/vendor/jquery.caroufredsel.min.js'
    'js/vendor/jquery.clearsearch.js'
    'js/jquery.main.js'
    'js/jquery.main-override.js'
    'js/common.js'
    'js/date-time.js'
    'js/vendor/cookie-consent.js'

    filter=\"?jsqueeze\" output='js/compiled/all.js' %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

    <script type=\"text/javascript\">
        \$(function () {
            if (isAuthenticated) {
                //Unread messages
                getNbUnReadMessages(\"{{ path('cocorico_dashboard_message_nb_unread') }}\");
            }
            //Handle Ajax Unauthorised access
            handleUnauthorisedAjaxAccess(\"{{ path(\"cocorico_user_login\") }}\");
        });
    </script>
{% endblock %}

</body>
</html>
", "::base.html.twig", "/cocorico/app/Resources/views/base.html.twig");
    }
}
