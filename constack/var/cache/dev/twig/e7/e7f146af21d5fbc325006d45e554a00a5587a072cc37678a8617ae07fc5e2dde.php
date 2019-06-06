<?php

/* CocoricoCoreBundle:Frontend\Home:index.html.twig */
class __TwigTemplate_c211dda8fce43c71555ad7340275985f99d798706741f2b2a021d8a25738d9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'theme' => array($this, 'block_theme'),
            'layout' => array($this, 'block_layout'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'markup_jsonld' => array($this, 'block_markup_jsonld'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a0958f57c961bc3520e152f152270cf3998730c11865069f39d77b5b4bde19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0958f57c961bc3520e152f152270cf3998730c11865069f39d77b5b4bde19e->enter($__internal_1a0958f57c961bc3520e152f152270cf3998730c11865069f39d77b5b4bde19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend\\Home:index.html.twig"));

        $__internal_7b008f096f37a7d6e7b8d5596a87206d3643cef2da170b20632c67fa6abac75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b008f096f37a7d6e7b8d5596a87206d3643cef2da170b20632c67fa6abac75e->enter($__internal_7b008f096f37a7d6e7b8d5596a87206d3643cef2da170b20632c67fa6abac75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend\\Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0958f57c961bc3520e152f152270cf3998730c11865069f39d77b5b4bde19e->leave($__internal_1a0958f57c961bc3520e152f152270cf3998730c11865069f39d77b5b4bde19e_prof);

        
        $__internal_7b008f096f37a7d6e7b8d5596a87206d3643cef2da170b20632c67fa6abac75e->leave($__internal_7b008f096f37a7d6e7b8d5596a87206d3643cef2da170b20632c67fa6abac75e_prof);

    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_4723495c01eca9cd8b36a9dc05421363e9180ebedac9e4eb83c423ab214672dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4723495c01eca9cd8b36a9dc05421363e9180ebedac9e4eb83c423ab214672dc->enter($__internal_4723495c01eca9cd8b36a9dc05421363e9180ebedac9e4eb83c423ab214672dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_1b072d3a5fcc9280ff8f633db4531cfa9b7cdb689efac832d31d575b48de3744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b072d3a5fcc9280ff8f633db4531cfa9b7cdb689efac832d31d575b48de3744->enter($__internal_1b072d3a5fcc9280ff8f633db4531cfa9b7cdb689efac832d31d575b48de3744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        // line 4
        echo twig_escape_filter($this->env, (($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.meta_title", array(), "cocorico_meta") . " - ") . (isset($context["cocorico_site_name"]) || array_key_exists("cocorico_site_name", $context) ? $context["cocorico_site_name"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_site_name" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_1b072d3a5fcc9280ff8f633db4531cfa9b7cdb689efac832d31d575b48de3744->leave($__internal_1b072d3a5fcc9280ff8f633db4531cfa9b7cdb689efac832d31d575b48de3744_prof);

        
        $__internal_4723495c01eca9cd8b36a9dc05421363e9180ebedac9e4eb83c423ab214672dc->leave($__internal_4723495c01eca9cd8b36a9dc05421363e9180ebedac9e4eb83c423ab214672dc_prof);

    }

    // line 7
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_b79633f7041281b78bc29c65b43a3e4614f21be649da5159186ee1497871c7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79633f7041281b78bc29c65b43a3e4614f21be649da5159186ee1497871c7ea->enter($__internal_b79633f7041281b78bc29c65b43a3e4614f21be649da5159186ee1497871c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_b63facace0be079f196e65e33a1ed8f9feb0c462db2db0ccf82ab9afd759f1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63facace0be079f196e65e33a1ed8f9feb0c462db2db0ccf82ab9afd759f1c3->enter($__internal_b63facace0be079f196e65e33a1ed8f9feb0c462db2db0ccf82ab9afd759f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.meta_desc", array(), "cocorico_meta"), "html", null, true);
        
        $__internal_b63facace0be079f196e65e33a1ed8f9feb0c462db2db0ccf82ab9afd759f1c3->leave($__internal_b63facace0be079f196e65e33a1ed8f9feb0c462db2db0ccf82ab9afd759f1c3_prof);

        
        $__internal_b79633f7041281b78bc29c65b43a3e4614f21be649da5159186ee1497871c7ea->leave($__internal_b79633f7041281b78bc29c65b43a3e4614f21be649da5159186ee1497871c7ea_prof);

    }

    // line 11
    public function block_theme($context, array $blocks = array())
    {
        $__internal_7c0774ed3aafb64964b2ccbf268d4b3d503a5ca97cbab7661a3fffd26ec939bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0774ed3aafb64964b2ccbf268d4b3d503a5ca97cbab7661a3fffd26ec939bc->enter($__internal_7c0774ed3aafb64964b2ccbf268d4b3d503a5ca97cbab7661a3fffd26ec939bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme"));

        $__internal_4cb946bb971566a8ca79c8b5e19c2f6a1e43dd0eebfd810a9d3749bd309071f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb946bb971566a8ca79c8b5e19c2f6a1e43dd0eebfd810a9d3749bd309071f3->enter($__internal_4cb946bb971566a8ca79c8b5e19c2f6a1e43dd0eebfd810a9d3749bd309071f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme"));

        echo "home-page";
        
        $__internal_4cb946bb971566a8ca79c8b5e19c2f6a1e43dd0eebfd810a9d3749bd309071f3->leave($__internal_4cb946bb971566a8ca79c8b5e19c2f6a1e43dd0eebfd810a9d3749bd309071f3_prof);

        
        $__internal_7c0774ed3aafb64964b2ccbf268d4b3d503a5ca97cbab7661a3fffd26ec939bc->leave($__internal_7c0774ed3aafb64964b2ccbf268d4b3d503a5ca97cbab7661a3fffd26ec939bc_prof);

    }

    // line 13
    public function block_layout($context, array $blocks = array())
    {
        $__internal_609869c45d67810ef8896d6298f8da067bebc4c466ff23a74afa28bae43d69a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609869c45d67810ef8896d6298f8da067bebc4c466ff23a74afa28bae43d69a3->enter($__internal_609869c45d67810ef8896d6298f8da067bebc4c466ff23a74afa28bae43d69a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_23e9f44db88f5fee1740f3569c4fd9b0580f2b8713c3940542dff3eb97500516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e9f44db88f5fee1740f3569c4fd9b0580f2b8713c3940542dff3eb97500516->enter($__internal_23e9f44db88f5fee1740f3569c4fd9b0580f2b8713c3940542dff3eb97500516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 14
        echo "    ";
        $this->loadTemplate("CocoricoCoreBundle:Frontend\\Home:index.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 14, "428384487")->display($context);
        
        $__internal_23e9f44db88f5fee1740f3569c4fd9b0580f2b8713c3940542dff3eb97500516->leave($__internal_23e9f44db88f5fee1740f3569c4fd9b0580f2b8713c3940542dff3eb97500516_prof);

        
        $__internal_609869c45d67810ef8896d6298f8da067bebc4c466ff23a74afa28bae43d69a3->leave($__internal_609869c45d67810ef8896d6298f8da067bebc4c466ff23a74afa28bae43d69a3_prof);

    }

    // line 105
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b791b496a99386938208ca59e559dfb62f0310111afe31d1d796aa6aadbeb331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b791b496a99386938208ca59e559dfb62f0310111afe31d1d796aa6aadbeb331->enter($__internal_b791b496a99386938208ca59e559dfb62f0310111afe31d1d796aa6aadbeb331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4abb283b5212e84d7cd35b199394f96f0e84618fa8749da365316a88d351ed36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abb283b5212e84d7cd35b199394f96f0e84618fa8749da365316a88d351ed36->enter($__internal_4abb283b5212e84d7cd35b199394f96f0e84618fa8749da365316a88d351ed36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 106
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link  href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/high-rank.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_4abb283b5212e84d7cd35b199394f96f0e84618fa8749da365316a88d351ed36->leave($__internal_4abb283b5212e84d7cd35b199394f96f0e84618fa8749da365316a88d351ed36_prof);

        
        $__internal_b791b496a99386938208ca59e559dfb62f0310111afe31d1d796aa6aadbeb331->leave($__internal_b791b496a99386938208ca59e559dfb62f0310111afe31d1d796aa6aadbeb331_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52e1fc0abf8213620e81d4fffb4952f4bfa789dc8160a80fb6cf0c9de287eae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e1fc0abf8213620e81d4fffb4952f4bfa789dc8160a80fb6cf0c9de287eae7->enter($__internal_52e1fc0abf8213620e81d4fffb4952f4bfa789dc8160a80fb6cf0c9de287eae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec62e443cafb0931ca15c70a109ab1bda308f65482e6f8d2e0f85c2a911c557c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec62e443cafb0931ca15c70a109ab1bda308f65482e6f8d2e0f85c2a911c557c->enter($__internal_ec62e443cafb0931ca15c70a109ab1bda308f65482e6f8d2e0f85c2a911c557c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "



    ";
        // line 117
        echo "    ";
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 117)->display(array("map_elt" => "", "auto_complete_elt" => "#location"));
        // line 121
        echo "
    <script>
        // Categories
        \$(function () {

            // Set default favourites in the listing
            setDefaultFavourites();

            initMultiSelect(
                    '#categories',
                    '";
        // line 131
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.all_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "',
                    '";
        // line 132
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.none_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "',
                    '";
        // line 133
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.num_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "'
            );
        });
    </script>
";
        
        $__internal_ec62e443cafb0931ca15c70a109ab1bda308f65482e6f8d2e0f85c2a911c557c->leave($__internal_ec62e443cafb0931ca15c70a109ab1bda308f65482e6f8d2e0f85c2a911c557c_prof);

        
        $__internal_52e1fc0abf8213620e81d4fffb4952f4bfa789dc8160a80fb6cf0c9de287eae7->leave($__internal_52e1fc0abf8213620e81d4fffb4952f4bfa789dc8160a80fb6cf0c9de287eae7_prof);

    }

    // line 139
    public function block_markup_jsonld($context, array $blocks = array())
    {
        $__internal_54f319c74492c8b84774615af01d08f7c1b74f7d11ae59440bae2d6be07be495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f319c74492c8b84774615af01d08f7c1b74f7d11ae59440bae2d6be07be495->enter($__internal_54f319c74492c8b84774615af01d08f7c1b74f7d11ae59440bae2d6be07be495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        $__internal_3909b9296f04b00be4739975e0b87719655c6ceb39b18bfc6e3d4e0bedd2efb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3909b9296f04b00be4739975e0b87719655c6ceb39b18bfc6e3d4e0bedd2efb5->enter($__internal_3909b9296f04b00be4739975e0b87719655c6ceb39b18bfc6e3d4e0bedd2efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        // line 140
        echo "    ";
        $this->displayParentBlock("markup_jsonld", $context, $blocks);
        echo "

    ";
        // line 142
        try {
            $this->loadTemplate("CocoricoSeoBundle:Frontend:Home/_index_markup.jsonld.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 142)->display(array("listings" =>             // line 143
(isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 143, $this->getSourceContext()); })())));
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        
        $__internal_3909b9296f04b00be4739975e0b87719655c6ceb39b18bfc6e3d4e0bedd2efb5->leave($__internal_3909b9296f04b00be4739975e0b87719655c6ceb39b18bfc6e3d4e0bedd2efb5_prof);

        
        $__internal_54f319c74492c8b84774615af01d08f7c1b74f7d11ae59440bae2d6be07be495->leave($__internal_54f319c74492c8b84774615af01d08f7c1b74f7d11ae59440bae2d6be07be495_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Frontend\\Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 143,  218 => 142,  212 => 140,  203 => 139,  188 => 133,  184 => 132,  180 => 131,  168 => 121,  165 => 117,  157 => 112,  148 => 111,  136 => 107,  131 => 106,  122 => 105,  111 => 14,  102 => 13,  84 => 11,  74 => 8,  65 => 7,  55 => 4,  46 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{%- block meta_title -%}
    {{ 'home.meta_title'|trans({}, 'cocorico_meta') ~ \" - \" ~ cocorico_site_name }}
{%- endblock -%}

{%- block meta_description -%}
    {{ 'home.meta_desc'|trans({}, 'cocorico_meta') }}
{%- endblock -%}

{% block theme %}home-page{% endblock %}

{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}

        {% trans_default_domain 'cocorico_home' %}

        {% block sub_header %}
            {#<!-- visual -->#}
            <div class=\"visual text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-lg-8 col-lg-push-2\">
                            <div class=\"title-holder\">
                                <div class=\"title-frame\">
                                    <h1>
                                        {{ 'home.header.title'|trans|raw }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </h1>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        {{ render(controller('CocoricoCoreBundle:Frontend/ListingSearch:searchHomeForm')) }}\t\t\t\t\t\t\t\t\t\t\t\t\t 
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block main %}
            <!-- infoarea -->
            <div class=\"infoarea container\">
                <div class=\"row\">
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/magnifying.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title1'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc1'|trans|raw }}
                            </p>
                        </div>
                    </div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/controler.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title2'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc2'|trans|raw }}
                            </p>
                        </div>
                    </div>
                    <div class=\"clearfix visible-sm\"></div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/hands.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title3'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc3'|trans|raw }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {% include 'CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig'  with {
            'listings': listings
            } only %}

            {{ render(controller('CocoricoCoreBundle:Frontend/Home:rssFeeds')) }}

        {% endblock %}

        {% block modal %}
            {% include 'CocoricoCoreBundle:Frontend/Common:_modal.html.twig' only %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{# MGONZALEZ - ADD CUSTOM CSS FOR HEART IN HIGH RANK #}
{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/high-rank.css') }}\" rel=\"stylesheet\">
{% endblock %}
{# MGONZALEZ - END#}

{% block javascripts %}
    {{ parent() }}



    {#Geocoding #}
    {% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig' with {
    'map_elt': '',
    'auto_complete_elt': '#location'
    } only %}

    <script>
        // Categories
        \$(function () {

            // Set default favourites in the listing
            setDefaultFavourites();

            initMultiSelect(
                    '#categories',
                    '{{ \"multiselect.all_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.none_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.num_selected\"|trans({}, \"cocorico\")|e('js') }}'
            );
        });
    </script>
{% endblock %}

{% block markup_jsonld %}
    {{ parent() }}

    {% include 'CocoricoSeoBundle:Frontend:Home/_index_markup.jsonld.twig' ignore missing with {
    'listings': listings
    } only %}
{% endblock %}
", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Home/index.html.twig");
    }
}


/* CocoricoCoreBundle:Frontend\Home:index.html.twig */
class __TwigTemplate_c211dda8fce43c71555ad7340275985f99d798706741f2b2a021d8a25738d9a3_428384487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 14
        $this->parent = $this->loadTemplate("@CocoricoCore/Frontend/layout.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 14);
        $this->blocks = array(
            'sub_header' => array($this, 'block_sub_header'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CocoricoCore/Frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4c8b66fb5845a643eae3ffe387ff6076c381bdf51f087782d73e5f580912cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c8b66fb5845a643eae3ffe387ff6076c381bdf51f087782d73e5f580912cc8->enter($__internal_a4c8b66fb5845a643eae3ffe387ff6076c381bdf51f087782d73e5f580912cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend\\Home:index.html.twig"));

        $__internal_4f8673585d764c269fbffc259cf74b1f5f76baa3baad9d1213e3277d300b486c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8673585d764c269fbffc259cf74b1f5f76baa3baad9d1213e3277d300b486c->enter($__internal_4f8673585d764c269fbffc259cf74b1f5f76baa3baad9d1213e3277d300b486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend\\Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c8b66fb5845a643eae3ffe387ff6076c381bdf51f087782d73e5f580912cc8->leave($__internal_a4c8b66fb5845a643eae3ffe387ff6076c381bdf51f087782d73e5f580912cc8_prof);

        
        $__internal_4f8673585d764c269fbffc259cf74b1f5f76baa3baad9d1213e3277d300b486c->leave($__internal_4f8673585d764c269fbffc259cf74b1f5f76baa3baad9d1213e3277d300b486c_prof);

    }

    // line 18
    public function block_sub_header($context, array $blocks = array())
    {
        $__internal_854fc2dd6ea23a80bf671879caecbd8d4a38f54dfd417b3d6247672119014b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854fc2dd6ea23a80bf671879caecbd8d4a38f54dfd417b3d6247672119014b76->enter($__internal_854fc2dd6ea23a80bf671879caecbd8d4a38f54dfd417b3d6247672119014b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_header"));

        $__internal_464e666fad2dc14e63f6c51723480dbd4abee717fef834e2272dac065eb864e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464e666fad2dc14e63f6c51723480dbd4abee717fef834e2272dac065eb864e8->enter($__internal_464e666fad2dc14e63f6c51723480dbd4abee717fef834e2272dac065eb864e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_header"));

        // line 19
        echo "            ";
        // line 20
        echo "            <div class=\"visual text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-lg-8 col-lg-push-2\">
                            <div class=\"title-holder\">
                                <div class=\"title-frame\">
                                    <h1>
                                        ";
        // line 27
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.header.title", array(), "cocorico_home");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </h1>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoCoreBundle:Frontend/ListingSearch:searchHomeForm"));
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t 
                    </div>
                </div>
            </div>
        ";
        
        $__internal_464e666fad2dc14e63f6c51723480dbd4abee717fef834e2272dac065eb864e8->leave($__internal_464e666fad2dc14e63f6c51723480dbd4abee717fef834e2272dac065eb864e8_prof);

        
        $__internal_854fc2dd6ea23a80bf671879caecbd8d4a38f54dfd417b3d6247672119014b76->leave($__internal_854fc2dd6ea23a80bf671879caecbd8d4a38f54dfd417b3d6247672119014b76_prof);

    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
        $__internal_0f0c082a0de30c88a183bbce976a300ed7147ea12ff4c3dcc777eeae0ec721b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0c082a0de30c88a183bbce976a300ed7147ea12ff4c3dcc777eeae0ec721b4->enter($__internal_0f0c082a0de30c88a183bbce976a300ed7147ea12ff4c3dcc777eeae0ec721b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_064fd608f46fb392eebd091cb6f935cd001ca640d85a41b5c79bc5d4721c4720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064fd608f46fb392eebd091cb6f935cd001ca640d85a41b5c79bc5d4721c4720->enter($__internal_064fd608f46fb392eebd091cb6f935cd001ca640d85a41b5c79bc5d4721c4720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 41
        echo "            <!-- infoarea -->
            <div class=\"infoarea container\">
                <div class=\"row\">
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/magnifying.svg"), "html", null, true);
        echo "\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">";
        // line 50
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.title1", array(), "cocorico_home");
        echo "</a>
                            </h2>

                            <p>
                                ";
        // line 54
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.desc1", array(), "cocorico_home");
        echo "
                            </p>
                        </div>
                    </div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/controler.svg"), "html", null, true);
        echo "\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">";
        // line 64
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.title2", array(), "cocorico_home");
        echo "</a>
                            </h2>

                            <p>
                                ";
        // line 68
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.desc2", array(), "cocorico_home");
        echo "
                            </p>
                        </div>
                    </div>
                    <div class=\"clearfix visible-sm\"></div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hands.svg"), "html", null, true);
        echo "\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">";
        // line 79
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.title3", array(), "cocorico_home");
        echo "</a>
                            </h2>

                            <p>
                                ";
        // line 83
        echo $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.subinfo.desc3", array(), "cocorico_home");
        echo "
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 90
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 90)->display(array("listings" =>         // line 91
(isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 91, $this->getSourceContext()); })())));
        // line 93
        echo "
            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoCoreBundle:Frontend/Home:rssFeeds"));
        echo "

        ";
        
        $__internal_064fd608f46fb392eebd091cb6f935cd001ca640d85a41b5c79bc5d4721c4720->leave($__internal_064fd608f46fb392eebd091cb6f935cd001ca640d85a41b5c79bc5d4721c4720_prof);

        
        $__internal_0f0c082a0de30c88a183bbce976a300ed7147ea12ff4c3dcc777eeae0ec721b4->leave($__internal_0f0c082a0de30c88a183bbce976a300ed7147ea12ff4c3dcc777eeae0ec721b4_prof);

    }

    // line 98
    public function block_modal($context, array $blocks = array())
    {
        $__internal_57e63c1dd818bc305d7b6cddbec03fc5dcd2c463c47b85cfe08c811356e4cb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e63c1dd818bc305d7b6cddbec03fc5dcd2c463c47b85cfe08c811356e4cb26->enter($__internal_57e63c1dd818bc305d7b6cddbec03fc5dcd2c463c47b85cfe08c811356e4cb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_7eea324623af1e297a6823ff91358a3249b46c444684626202de42050bcd1d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eea324623af1e297a6823ff91358a3249b46c444684626202de42050bcd1d64->enter($__internal_7eea324623af1e297a6823ff91358a3249b46c444684626202de42050bcd1d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 99
        echo "            ";
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_modal.html.twig", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", 99)->display(array());
        // line 100
        echo "        ";
        
        $__internal_7eea324623af1e297a6823ff91358a3249b46c444684626202de42050bcd1d64->leave($__internal_7eea324623af1e297a6823ff91358a3249b46c444684626202de42050bcd1d64_prof);

        
        $__internal_57e63c1dd818bc305d7b6cddbec03fc5dcd2c463c47b85cfe08c811356e4cb26->leave($__internal_57e63c1dd818bc305d7b6cddbec03fc5dcd2c463c47b85cfe08c811356e4cb26_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Frontend\\Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 100,  599 => 99,  590 => 98,  577 => 94,  574 => 93,  572 => 91,  571 => 90,  561 => 83,  554 => 79,  547 => 75,  537 => 68,  530 => 64,  523 => 60,  514 => 54,  507 => 50,  500 => 46,  493 => 41,  484 => 40,  469 => 34,  459 => 27,  450 => 20,  448 => 19,  439 => 18,  408 => 14,  220 => 143,  218 => 142,  212 => 140,  203 => 139,  188 => 133,  184 => 132,  180 => 131,  168 => 121,  165 => 117,  157 => 112,  148 => 111,  136 => 107,  131 => 106,  122 => 105,  111 => 14,  102 => 13,  84 => 11,  74 => 8,  65 => 7,  55 => 4,  46 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{%- block meta_title -%}
    {{ 'home.meta_title'|trans({}, 'cocorico_meta') ~ \" - \" ~ cocorico_site_name }}
{%- endblock -%}

{%- block meta_description -%}
    {{ 'home.meta_desc'|trans({}, 'cocorico_meta') }}
{%- endblock -%}

{% block theme %}home-page{% endblock %}

{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}

        {% trans_default_domain 'cocorico_home' %}

        {% block sub_header %}
            {#<!-- visual -->#}
            <div class=\"visual text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-lg-8 col-lg-push-2\">
                            <div class=\"title-holder\">
                                <div class=\"title-frame\">
                                    <h1>
                                        {{ 'home.header.title'|trans|raw }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </h1>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        {{ render(controller('CocoricoCoreBundle:Frontend/ListingSearch:searchHomeForm')) }}\t\t\t\t\t\t\t\t\t\t\t\t\t 
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block main %}
            <!-- infoarea -->
            <div class=\"infoarea container\">
                <div class=\"row\">
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/magnifying.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title1'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc1'|trans|raw }}
                            </p>
                        </div>
                    </div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/controler.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title2'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc2'|trans|raw }}
                            </p>
                        </div>
                    </div>
                    <div class=\"clearfix visible-sm\"></div>
                    <!-- info-box -->
                    <div class=\"col-xs-12 col-sm-6 col-md-4 info-box\">
                        <img src=\"{{ asset('images/hands.svg') }}\" alt=\"icon description\" class=\"pull-left icon\">

                        <div class=\"textbox\">
                            <h2>
                                <a href=\"#\">{{ 'home.subinfo.title3'|trans|raw }}</a>
                            </h2>

                            <p>
                                {{ 'home.subinfo.desc3'|trans|raw }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {% include 'CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig'  with {
            'listings': listings
            } only %}

            {{ render(controller('CocoricoCoreBundle:Frontend/Home:rssFeeds')) }}

        {% endblock %}

        {% block modal %}
            {% include 'CocoricoCoreBundle:Frontend/Common:_modal.html.twig' only %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{# MGONZALEZ - ADD CUSTOM CSS FOR HEART IN HIGH RANK #}
{% block stylesheets %}
    {{ parent() }}
    <link  href=\"{{ asset('css/high-rank.css') }}\" rel=\"stylesheet\">
{% endblock %}
{# MGONZALEZ - END#}

{% block javascripts %}
    {{ parent() }}



    {#Geocoding #}
    {% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig' with {
    'map_elt': '',
    'auto_complete_elt': '#location'
    } only %}

    <script>
        // Categories
        \$(function () {

            // Set default favourites in the listing
            setDefaultFavourites();

            initMultiSelect(
                    '#categories',
                    '{{ \"multiselect.all_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.none_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.num_selected\"|trans({}, \"cocorico\")|e('js') }}'
            );
        });
    </script>
{% endblock %}

{% block markup_jsonld %}
    {{ parent() }}

    {% include 'CocoricoSeoBundle:Frontend:Home/_index_markup.jsonld.twig' ignore missing with {
    'listings': listings
    } only %}
{% endblock %}
", "CocoricoCoreBundle:Frontend\\Home:index.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Home/index.html.twig");
    }
}
