<?php

/* @CocoricoCore/Frontend/ListingResult/result.html.twig */
class __TwigTemplate_5f1a3963d7e17f60b72fc687019ea16e9c01cfd90f825dc01a6ec2bf2f6963bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
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
        $__internal_ade33288523a7b3a29d938d738e5401f9123ba6d60cf44b6c7864ef8413df848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade33288523a7b3a29d938d738e5401f9123ba6d60cf44b6c7864ef8413df848->enter($__internal_ade33288523a7b3a29d938d738e5401f9123ba6d60cf44b6c7864ef8413df848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/result.html.twig"));

        $__internal_fbaf3d72683c1fe1f8e9a920dffff123f33baab841cde3cc044d436ab88f238f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaf3d72683c1fe1f8e9a920dffff123f33baab841cde3cc044d436ab88f238f->enter($__internal_fbaf3d72683c1fe1f8e9a920dffff123f33baab841cde3cc044d436ab88f238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/result.html.twig"));

        // line 5
        $context["location"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_search_request"]) || array_key_exists("listing_search_request", $context) ? $context["listing_search_request"] : (function () { throw new Twig_Error_Runtime('Variable "listing_search_request" does not exist.', 5, $this->getSourceContext()); })()), "location", array());
        // line 8
        $context["seo_title"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.title", array("%listing_search_request%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "address", array())), "cocorico_listing");
        // line 9
        $context["seo_desc"] = "";
        // line 10
        $context["seo_meta_tile"] = (($this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.meta_title", array("%listing_search_request%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 10, $this->getSourceContext()); })()), "address", array())), "cocorico_meta") . " - ") . (isset($context["cocorico_site_name"]) || array_key_exists("cocorico_site_name", $context) ? $context["cocorico_site_name"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_site_name" does not exist.', 10, $this->getSourceContext()); })()));
        // line 11
        $context["seo_meta_desc"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.meta_desc", array("%nb_results%" => (isset($context["nb_listings"]) || array_key_exists("nb_listings", $context) ? $context["nb_listings"] : (function () { throw new Twig_Error_Runtime('Variable "nb_listings" does not exist.', 11, $this->getSourceContext()); })())), "cocorico_meta");
        // line 13
        if (((array_key_exists("seo_content", $context)) ? (_twig_default_filter((isset($context["seo_content"]) || array_key_exists("seo_content", $context) ? $context["seo_content"] : (function () { throw new Twig_Error_Runtime('Variable "seo_content" does not exist.', 13, $this->getSourceContext()); })()), null)) : (null))) {
            // line 14
            $context["seo_title"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seo_content"]) || array_key_exists("seo_content", $context) ? $context["seo_content"] : (function () { throw new Twig_Error_Runtime('Variable "seo_content" does not exist.', 14, $this->getSourceContext()); })()), "title", array());
            // line 15
            $context["seo_desc"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seo_content"]) || array_key_exists("seo_content", $context) ? $context["seo_content"] : (function () { throw new Twig_Error_Runtime('Variable "seo_content" does not exist.', 15, $this->getSourceContext()); })()), "description", array());
            // line 16
            $context["seo_meta_tile"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seo_content"]) || array_key_exists("seo_content", $context) ? $context["seo_content"] : (function () { throw new Twig_Error_Runtime('Variable "seo_content" does not exist.', 16, $this->getSourceContext()); })()), "metaTitle", array());
            // line 17
            $context["seo_meta_desc"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seo_content"]) || array_key_exists("seo_content", $context) ? $context["seo_content"] : (function () { throw new Twig_Error_Runtime('Variable "seo_content" does not exist.', 17, $this->getSourceContext()); })()), "metaDescription", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade33288523a7b3a29d938d738e5401f9123ba6d60cf44b6c7864ef8413df848->leave($__internal_ade33288523a7b3a29d938d738e5401f9123ba6d60cf44b6c7864ef8413df848_prof);

        
        $__internal_fbaf3d72683c1fe1f8e9a920dffff123f33baab841cde3cc044d436ab88f238f->leave($__internal_fbaf3d72683c1fe1f8e9a920dffff123f33baab841cde3cc044d436ab88f238f_prof);

    }

    // line 20
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_969eaee0f4da98e0198f1d569b2f69bba43fcc89c26ed1f13edbeaa5967ddf7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969eaee0f4da98e0198f1d569b2f69bba43fcc89c26ed1f13edbeaa5967ddf7b->enter($__internal_969eaee0f4da98e0198f1d569b2f69bba43fcc89c26ed1f13edbeaa5967ddf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_48e656f27237c2f6cf2080ba9a14e0cb61d0d0fb8d759161a8a2eea610abbebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e656f27237c2f6cf2080ba9a14e0cb61d0d0fb8d759161a8a2eea610abbebb->enter($__internal_48e656f27237c2f6cf2080ba9a14e0cb61d0d0fb8d759161a8a2eea610abbebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        // line 21
        echo twig_escape_filter($this->env, (isset($context["seo_meta_tile"]) || array_key_exists("seo_meta_tile", $context) ? $context["seo_meta_tile"] : (function () { throw new Twig_Error_Runtime('Variable "seo_meta_tile" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_48e656f27237c2f6cf2080ba9a14e0cb61d0d0fb8d759161a8a2eea610abbebb->leave($__internal_48e656f27237c2f6cf2080ba9a14e0cb61d0d0fb8d759161a8a2eea610abbebb_prof);

        
        $__internal_969eaee0f4da98e0198f1d569b2f69bba43fcc89c26ed1f13edbeaa5967ddf7b->leave($__internal_969eaee0f4da98e0198f1d569b2f69bba43fcc89c26ed1f13edbeaa5967ddf7b_prof);

    }

    // line 24
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_98fd4b4d580f6c06e4f9ee031af20363ce335879f71ee34a1bc03df78e5eb7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fd4b4d580f6c06e4f9ee031af20363ce335879f71ee34a1bc03df78e5eb7ba->enter($__internal_98fd4b4d580f6c06e4f9ee031af20363ce335879f71ee34a1bc03df78e5eb7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_daa1c88f3eb766e84427b74796498b87298364aa5f2c9f896866a5399049250e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa1c88f3eb766e84427b74796498b87298364aa5f2c9f896866a5399049250e->enter($__internal_daa1c88f3eb766e84427b74796498b87298364aa5f2c9f896866a5399049250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        // line 25
        echo twig_escape_filter($this->env, (isset($context["seo_meta_desc"]) || array_key_exists("seo_meta_desc", $context) ? $context["seo_meta_desc"] : (function () { throw new Twig_Error_Runtime('Variable "seo_meta_desc" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_daa1c88f3eb766e84427b74796498b87298364aa5f2c9f896866a5399049250e->leave($__internal_daa1c88f3eb766e84427b74796498b87298364aa5f2c9f896866a5399049250e_prof);

        
        $__internal_98fd4b4d580f6c06e4f9ee031af20363ce335879f71ee34a1bc03df78e5eb7ba->leave($__internal_98fd4b4d580f6c06e4f9ee031af20363ce335879f71ee34a1bc03df78e5eb7ba_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c86888b7ab8003ac63c8b91157c7ac57da967d22b6c6d48e08cd991011fc382a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86888b7ab8003ac63c8b91157c7ac57da967d22b6c6d48e08cd991011fc382a->enter($__internal_c86888b7ab8003ac63c8b91157c7ac57da967d22b6c6d48e08cd991011fc382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2317da294adf800d55ff061337b1e071c55c1b07bd161d4e1d0c288353641c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2317da294adf800d55ff061337b1e071c55c1b07bd161d4e1d0c288353641c42->enter($__internal_2317da294adf800d55ff061337b1e071c55c1b07bd161d4e1d0c288353641c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        #map-canvas {
            width: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["listing_search_map_w"]) || array_key_exists("listing_search_map_w", $context) ? $context["listing_search_map_w"] : (function () { throw new Twig_Error_Runtime('Variable "listing_search_map_w" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "px;
            height: ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["listing_search_map_h"]) || array_key_exists("listing_search_map_h", $context) ? $context["listing_search_map_h"] : (function () { throw new Twig_Error_Runtime('Variable "listing_search_map_h" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
        echo "px;
        }
    </style>
";
        
        $__internal_2317da294adf800d55ff061337b1e071c55c1b07bd161d4e1d0c288353641c42->leave($__internal_2317da294adf800d55ff061337b1e071c55c1b07bd161d4e1d0c288353641c42_prof);

        
        $__internal_c86888b7ab8003ac63c8b91157c7ac57da967d22b6c6d48e08cd991011fc382a->leave($__internal_c86888b7ab8003ac63c8b91157c7ac57da967d22b6c6d48e08cd991011fc382a_prof);

    }

    // line 41
    public function block_layout($context, array $blocks = array())
    {
        $__internal_0344d20edd8cb917b360e9721f4ef70039ec9c9385612080d4a22ab599937555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0344d20edd8cb917b360e9721f4ef70039ec9c9385612080d4a22ab599937555->enter($__internal_0344d20edd8cb917b360e9721f4ef70039ec9c9385612080d4a22ab599937555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_09e60aa434cd57e5cd6904c25d77bd7459a67921d5e70a7b60b53e236a2c9a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e60aa434cd57e5cd6904c25d77bd7459a67921d5e70a7b60b53e236a2c9a82->enter($__internal_09e60aa434cd57e5cd6904c25d77bd7459a67921d5e70a7b60b53e236a2c9a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 42
        echo "    ";
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/result.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 42, "748744997")->display($context);
        // line 138
        echo "
";
        
        $__internal_09e60aa434cd57e5cd6904c25d77bd7459a67921d5e70a7b60b53e236a2c9a82->leave($__internal_09e60aa434cd57e5cd6904c25d77bd7459a67921d5e70a7b60b53e236a2c9a82_prof);

        
        $__internal_0344d20edd8cb917b360e9721f4ef70039ec9c9385612080d4a22ab599937555->leave($__internal_0344d20edd8cb917b360e9721f4ef70039ec9c9385612080d4a22ab599937555_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e0e5464ebfdd3da6ad19c9366b20aacc04ad862ccf9781a049bccc70abf4514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0e5464ebfdd3da6ad19c9366b20aacc04ad862ccf9781a049bccc70abf4514->enter($__internal_7e0e5464ebfdd3da6ad19c9366b20aacc04ad862ccf9781a049bccc70abf4514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a791d3ff41686cd5e76dba6d36beb318b3b01993ef15d213e5ce839672118706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a791d3ff41686cd5e76dba6d36beb318b3b01993ef15d213e5ce839672118706->enter($__internal_a791d3ff41686cd5e76dba6d36beb318b3b01993ef15d213e5ce839672118706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 146
        echo "    ";
        $context["extendSearch"] = (((isset($context["nb_listings"]) || array_key_exists("nb_listings", $context) ? $context["nb_listings"] : (function () { throw new Twig_Error_Runtime('Variable "nb_listings" does not exist.', 146, $this->getSourceContext()); })()) < (isset($context["listingSearchMinResult"]) || array_key_exists("listingSearchMinResult", $context) ? $context["listingSearchMinResult"] : (function () { throw new Twig_Error_Runtime('Variable "listingSearchMinResult" does not exist.', 146, $this->getSourceContext()); })())) && (((array_key_exists("listingSearchLocationType", $context)) ? (_twig_default_filter((isset($context["listingSearchLocationType"]) || array_key_exists("listingSearchLocationType", $context) ? $context["listingSearchLocationType"] : (function () { throw new Twig_Error_Runtime('Variable "listingSearchLocationType" does not exist.', 146, $this->getSourceContext()); })()), "viewport")) : ("viewport")) != "distance"));
        // line 147
        echo "
    ";
        // line 149
        echo "    ";
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 149)->display(array("map_elt" => "#map-canvas", "auto_complete_elt" => "#location", "default_lat" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 152
(isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 152, $this->getSourceContext()); })()), "lat", array()), "default_lng" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 153
(isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 153, $this->getSourceContext()); })()), "lng", array()), "extend_search" =>         // line 154
(isset($context["extendSearch"]) || array_key_exists("extendSearch", $context) ? $context["extendSearch"] : (function () { throw new Twig_Error_Runtime('Variable "extendSearch" does not exist.', 154, $this->getSourceContext()); })())));
        // line 156
        echo "
    ";
        // line 158
        echo "    ";
        list($context["parentLocation"], $context["modalMessage"]) =         array("", "");
        // line 159
        echo "    ";
        if ((isset($context["extendSearch"]) || array_key_exists("extendSearch", $context) ? $context["extendSearch"] : (function () { throw new Twig_Error_Runtime('Variable "extendSearch" does not exist.', 159, $this->getSourceContext()); })())) {
            // line 160
            echo "        ";
            $context["parentLocation"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 160, $this->getSourceContext()); })()), "getParentLocation", array(), "method");
            // line 161
            echo "        ";
            $context["modalMessage"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico.search.extended.warning %location%", array("%location%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parentLocation"]) || array_key_exists("parentLocation", $context) ? $context["parentLocation"] : (function () { throw new Twig_Error_Runtime('Variable "parentLocation" does not exist.', 161, $this->getSourceContext()); })()), "address", array())), "cocorico");
            // line 162
            echo "        <script>
            \$(function () {
                var parentLocation = '";
            // line 164
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, json_encode((isset($context["parentLocation"]) || array_key_exists("parentLocation", $context) ? $context["parentLocation"] : (function () { throw new Twig_Error_Runtime('Variable "parentLocation" does not exist.', 164, $this->getSourceContext()); })()), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_HEX_APOS"))), "js"), "html", null, true);
            echo "';
                parentLocation = \$.parseJSON(parentLocation);
                extendSearchLocationFunc(parentLocation.address, parentLocation.type, '#modal', '";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["modalMessage"]) || array_key_exists("modalMessage", $context) ? $context["modalMessage"] : (function () { throw new Twig_Error_Runtime('Variable "modalMessage" does not exist.', 166, $this->getSourceContext()); })()), "html", null, true);
            echo "');
            });
        </script>
    ";
        }
        // line 170
        echo "
    <script>
        \$(function () {
            //Refresh map on load
            refreshMapFunc('";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 174, $this->getSourceContext()); })()), "viewport", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 174, $this->getSourceContext()); })()), "lat", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 174, $this->getSourceContext()); })()), "lng", array()), "html", null, true);
        echo "');

            //Set listings markers on load
            //Set listings markers on load through data-markers attribute
            setMarkersFunc(\$(\"span#data-markers\").data(\"markers\"));

            // Set default favourites in the listing
            setDefaultFavourites();

            // Categories
            initMultiSelect(
                    '#categories',
                    '";
        // line 186
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.all_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "',
                    '";
        // line 187
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.none_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "',
                    '";
        // line 188
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("multiselect.num_selected", array(), "cocorico"), "js"), "html", null, true);
        echo "'
            );

            \$(\".datepicker\").datepicker({
                dateFormat: \"dd/mm/yy\"
            });

            //Listing alert (See form_search.html.twig, common.js)
            var \$dialog = \$(\"div[data-id=listing-alert-dialog]\").initDialogForm(400);

            \$(\"a[data-id=listing-alert]\").on('click', function (e) {
                e.preventDefault();
                \$dialog.openDialog(\$(this).attr(\"href\"), \"\");
                return false;
            });

            //Move seo desc to bottom
            \$(\"[data-id=seo-desc]\").appendTo(\"[data-id=seo-desc-moved]\");

            //Select change submit the form
//            \$(\"select[id^='characteristics_'], select#sort_by\").change(function (e) {
//                \$(this).closest('form').submit();
//            });
//            \$(\".ui-slider\").on(\"slidestop\", function (event, ui) {
//                \$(this).closest('form').submit();
//            });

        });
    </script>
";
        
        $__internal_a791d3ff41686cd5e76dba6d36beb318b3b01993ef15d213e5ce839672118706->leave($__internal_a791d3ff41686cd5e76dba6d36beb318b3b01993ef15d213e5ce839672118706_prof);

        
        $__internal_7e0e5464ebfdd3da6ad19c9366b20aacc04ad862ccf9781a049bccc70abf4514->leave($__internal_7e0e5464ebfdd3da6ad19c9366b20aacc04ad862ccf9781a049bccc70abf4514_prof);

    }

    // line 221
    public function block_markup_jsonld($context, array $blocks = array())
    {
        $__internal_d582d29652bde65f4bb62d3c1528fb6dd767b6cc942b14dcd96bbc536de97ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d582d29652bde65f4bb62d3c1528fb6dd767b6cc942b14dcd96bbc536de97ef4->enter($__internal_d582d29652bde65f4bb62d3c1528fb6dd767b6cc942b14dcd96bbc536de97ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        $__internal_b6a62ee21bca9520e8148a6098c4afcf08c5159c57c23a46bc34b0e65a753fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a62ee21bca9520e8148a6098c4afcf08c5159c57c23a46bc34b0e65a753fc7->enter($__internal_b6a62ee21bca9520e8148a6098c4afcf08c5159c57c23a46bc34b0e65a753fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "markup_jsonld"));

        // line 222
        echo "    ";
        $this->displayParentBlock("markup_jsonld", $context, $blocks);
        echo "

    ";
        // line 224
        try {
            $this->loadTemplate("CocoricoSeoBundle:Frontend:ListingResult/_result_markup.jsonld.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 224)->display(array("listings" =>             // line 225
(isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 225, $this->getSourceContext()); })())));
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        
        $__internal_b6a62ee21bca9520e8148a6098c4afcf08c5159c57c23a46bc34b0e65a753fc7->leave($__internal_b6a62ee21bca9520e8148a6098c4afcf08c5159c57c23a46bc34b0e65a753fc7_prof);

        
        $__internal_d582d29652bde65f4bb62d3c1528fb6dd767b6cc942b14dcd96bbc536de97ef4->leave($__internal_d582d29652bde65f4bb62d3c1528fb6dd767b6cc942b14dcd96bbc536de97ef4_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 225,  309 => 224,  303 => 222,  294 => 221,  254 => 188,  250 => 187,  246 => 186,  227 => 174,  221 => 170,  214 => 166,  209 => 164,  205 => 162,  202 => 161,  199 => 160,  196 => 159,  193 => 158,  190 => 156,  188 => 154,  187 => 153,  186 => 152,  184 => 149,  181 => 147,  178 => 146,  172 => 143,  163 => 142,  152 => 138,  149 => 42,  140 => 41,  126 => 35,  122 => 34,  114 => 30,  105 => 29,  95 => 25,  86 => 24,  76 => 21,  67 => 20,  57 => 1,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  46 => 13,  44 => 11,  42 => 10,  40 => 9,  38 => 8,  36 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% trans_default_domain 'cocorico_listing' %}

{% set location = listing_search_request.location %}

{# SEO #}
{% set seo_title = 'listing.search.result.title'|trans({'%listing_search_request%': location.address }) %}
{% set seo_desc = '' %}
{% set seo_meta_tile = 'listing.search.result.meta_title'|trans({'%listing_search_request%': location.address }, 'cocorico_meta') ~ \" - \" ~ cocorico_site_name %}
{% set seo_meta_desc = 'listing.search.result.meta_desc'|trans({'%nb_results%': nb_listings}, 'cocorico_meta') %}

{% if seo_content|default(null) %}
    {% set seo_title = seo_content.title %}
    {% set seo_desc = seo_content.description %}
    {% set seo_meta_tile = seo_content.metaTitle %}
    {% set seo_meta_desc = seo_content.metaDescription %}
{% endif %}

{%- block meta_title -%}
    {{ seo_meta_tile }}
{%- endblock -%}

{%- block meta_description -%}
    {{ seo_meta_desc }}
{%- endblock -%}
{# END SEO #}

{% block stylesheets %}
    {{ parent() }}

    <style>
        #map-canvas {
            width: {{ listing_search_map_w }}px;
            height: {{ listing_search_map_h }}px;
        }
    </style>
{% endblock %}


{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}
        {% trans_default_domain 'cocorico_listing' %}
        {% block breadcrumbs %}
            <!-- breadcrumbs -->
            {{ render(controller('CocoricoBreadcrumbBundle:Breadcrumbs:index',{
                request: app.request
            })) }}
        {% endblock %}

        {% block main %}
            {#search form with filters#}
            {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}

            {{ form_start(form, {'attr': {'class': 'form-category alt col-xs-12'}}) }}

            {% include '@CocoricoCore/Frontend/Common/form_search_fields.html.twig' with {
                'form': form
            } only %}

            {% include '@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig' with {
                'form': form
            } only %}

            {{ form_end(form) }}
            {#end search form with filters#}

            <h1 data-id=\"result-title\">
                <span data-id=\"title\">{{ seo_title }}</span>
                <small data-id=\"nb-result\">
                    {{ 'listing.search.result.results'|trans({'%nb_results%': nb_listings}) }}
                </small>

                {% if bundleExist('CocoricoListingAlertBundle') %}
                    <div class=\"listing-alert\">
                        <a href=\"{{ path('cocorico_listing_alert_new') }}\" data-id=\"listing-alert\"
                           class=\"btn btn-default\">
                            {{ \"listing.search.result.alert.link\"|trans }}
                        </a>
                    </div>
                    <div data-id=\"listing-alert-dialog\"></div>
                {% endif %}
            </h1>
            {#TO NOT DELETE#}
            <div data-id=\"seo-desc\">
                {{ seo_desc|raw }}
            </div>

            <!-- two-columns -->
            <div class=\"twocolumns row\">
            {# DLEVASSEUR - MAP ON THE RIGHT #}
               <!-- postarea -->
                <section class=\"listing-area col-xs-12 col-sm-8\">
                    <div class=\"listing-holder row\">
                        {% include '@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig'  with {
                        'listings': listings,
                        'nb_listings': nb_listings
                        } only %}
                    </div>
                    {% include '@CocoricoCore/Frontend/Common/_pagination.html.twig' with {
                    'pagination': pagination
                    } only %}

                </section>
\t\t\t\t<!-- maparea -->
                <div class=\"maparea col-xs-12 col-sm-4\">
                    <div class=\"maparea\">
                        <div class=\"checkbox search-on-drag-cb-wrapper\">
                            <input type=\"checkbox\" name=\"search-on-drag\" id=\"search-on-drag\">
                            <label class=\"form-label\" for=\"search-on-drag\">
                                {{ 'search-on-map-drag'|trans }}
                            </label>
                        </div>
                        <div class=\"map-holder\">
                            <div id=\"map-canvas\"></div>
                            {% include '@CocoricoCore/Frontend/ListingResult/_marker.html.twig'  with {
                            'markers': markers,
                            } only %}
                        </div>
                    </div>
                </div>
            {# DLEVASSEUR - END #}
            </div>

            {#TO NOT DELETE#}
            <div data-id=\"seo-desc-moved\"></div>
        {% endblock %}

        {% block modal %}
            {% include 'CocoricoCoreBundle:Frontend/Common:_modal.html.twig' only %}
        {% endblock %}

        {#{% block footer %}#}
        {#{{ parent() }}#}
        {#{% endblock %}#}

    {% endembed %}

{% endblock layout %}


{% block javascripts %}
    {{ parent() }}

    {#Extend search area if not enough results and if location search type is not done by distance #}
    {% set extendSearch = nb_listings < listingSearchMinResult and listingSearchLocationType|default('viewport') != 'distance' %}

    {#Geocoding #}
    {% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig' with {
    'map_elt': '#map-canvas',
    'auto_complete_elt': '#location',
    'default_lat': location.lat,
    'default_lng': location.lng,
    'extend_search': extendSearch
    } only %}

    {#Extend search call#}
    {% set parentLocation, modalMessage = '', '' %}
    {% if extendSearch %}
        {% set parentLocation = location.getParentLocation() %}
        {% set modalMessage = 'cocorico.search.extended.warning %location%'|trans({'%location%': parentLocation.address  }, 'cocorico') %}
        <script>
            \$(function () {
                var parentLocation = '{{ parentLocation|json_encode( constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_HEX_APOS') )|e('js') }}';
                parentLocation = \$.parseJSON(parentLocation);
                extendSearchLocationFunc(parentLocation.address, parentLocation.type, '#modal', '{{ modalMessage }}');
            });
        </script>
    {% endif %}

    <script>
        \$(function () {
            //Refresh map on load
            refreshMapFunc('{{location.viewport }}', '{{ location.lat }}', '{{ location.lng }}');

            //Set listings markers on load
            //Set listings markers on load through data-markers attribute
            setMarkersFunc(\$(\"span#data-markers\").data(\"markers\"));

            // Set default favourites in the listing
            setDefaultFavourites();

            // Categories
            initMultiSelect(
                    '#categories',
                    '{{ \"multiselect.all_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.none_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.num_selected\"|trans({}, \"cocorico\")|e('js') }}'
            );

            \$(\".datepicker\").datepicker({
                dateFormat: \"dd/mm/yy\"
            });

            //Listing alert (See form_search.html.twig, common.js)
            var \$dialog = \$(\"div[data-id=listing-alert-dialog]\").initDialogForm(400);

            \$(\"a[data-id=listing-alert]\").on('click', function (e) {
                e.preventDefault();
                \$dialog.openDialog(\$(this).attr(\"href\"), \"\");
                return false;
            });

            //Move seo desc to bottom
            \$(\"[data-id=seo-desc]\").appendTo(\"[data-id=seo-desc-moved]\");

            //Select change submit the form
//            \$(\"select[id^='characteristics_'], select#sort_by\").change(function (e) {
//                \$(this).closest('form').submit();
//            });
//            \$(\".ui-slider\").on(\"slidestop\", function (event, ui) {
//                \$(this).closest('form').submit();
//            });

        });
    </script>
{% endblock %}



{% block markup_jsonld %}
    {{ parent() }}

    {% include 'CocoricoSeoBundle:Frontend:ListingResult/_result_markup.jsonld.twig' ignore missing with {
    'listings': listings
    } only %}
{% endblock %}", "@CocoricoCore/Frontend/ListingResult/result.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/result.html.twig");
    }
}


/* @CocoricoCore/Frontend/ListingResult/result.html.twig */
class __TwigTemplate_5f1a3963d7e17f60b72fc687019ea16e9c01cfd90f825dc01a6ec2bf2f6963bd_748744997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 42
        $this->parent = $this->loadTemplate("@CocoricoCore/Frontend/layout.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 42);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $__internal_879f4cd0c2cfcf0b9afb4737efba7492ffe47f25bc1e4231ccce0e7db1739e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879f4cd0c2cfcf0b9afb4737efba7492ffe47f25bc1e4231ccce0e7db1739e13->enter($__internal_879f4cd0c2cfcf0b9afb4737efba7492ffe47f25bc1e4231ccce0e7db1739e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/result.html.twig"));

        $__internal_4cff563acf0b66800d3490fb8a6be0169800afd792cb055072a16f30a5116e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cff563acf0b66800d3490fb8a6be0169800afd792cb055072a16f30a5116e08->enter($__internal_4cff563acf0b66800d3490fb8a6be0169800afd792cb055072a16f30a5116e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879f4cd0c2cfcf0b9afb4737efba7492ffe47f25bc1e4231ccce0e7db1739e13->leave($__internal_879f4cd0c2cfcf0b9afb4737efba7492ffe47f25bc1e4231ccce0e7db1739e13_prof);

        
        $__internal_4cff563acf0b66800d3490fb8a6be0169800afd792cb055072a16f30a5116e08->leave($__internal_4cff563acf0b66800d3490fb8a6be0169800afd792cb055072a16f30a5116e08_prof);

    }

    // line 44
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_0c7b1095f1439d8b8b81e48baa0b94e8f3fffddaf632e767ea13455b0c26a435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7b1095f1439d8b8b81e48baa0b94e8f3fffddaf632e767ea13455b0c26a435->enter($__internal_0c7b1095f1439d8b8b81e48baa0b94e8f3fffddaf632e767ea13455b0c26a435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_ee10aa9356acf55e13cc2b8c645da8e170b6e47257de359d4a220073e6c1c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee10aa9356acf55e13cc2b8c645da8e170b6e47257de359d4a220073e6c1c9a5->enter($__internal_ee10aa9356acf55e13cc2b8c645da8e170b6e47257de359d4a220073e6c1c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 45
        echo "            <!-- breadcrumbs -->
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CocoricoBreadcrumbBundle:Breadcrumbs:index", array("request" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 47
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->getSourceContext()); })()), "request", array()))));
        // line 48
        echo "
        ";
        
        $__internal_ee10aa9356acf55e13cc2b8c645da8e170b6e47257de359d4a220073e6c1c9a5->leave($__internal_ee10aa9356acf55e13cc2b8c645da8e170b6e47257de359d4a220073e6c1c9a5_prof);

        
        $__internal_0c7b1095f1439d8b8b81e48baa0b94e8f3fffddaf632e767ea13455b0c26a435->leave($__internal_0c7b1095f1439d8b8b81e48baa0b94e8f3fffddaf632e767ea13455b0c26a435_prof);

    }

    // line 51
    public function block_main($context, array $blocks = array())
    {
        $__internal_3c9c3cac49d469f75e3caae8b6dd50d771bc102886c90e7e1bc062be13b48683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9c3cac49d469f75e3caae8b6dd50d771bc102886c90e7e1bc062be13b48683->enter($__internal_3c9c3cac49d469f75e3caae8b6dd50d771bc102886c90e7e1bc062be13b48683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8760f617dd8d32567ffbe1710d11a9c3e529831733c9cdd14b70679afea2c109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8760f617dd8d32567ffbe1710d11a9c3e529831733c9cdd14b70679afea2c109->enter($__internal_8760f617dd8d32567ffbe1710d11a9c3e529831733c9cdd14b70679afea2c109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 52
        echo "            ";
        // line 53
        echo "            ";
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_flash.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 53)->display($context);
        // line 54
        echo "
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-category alt col-xs-12")));
        echo "

            ";
        // line 57
        $this->loadTemplate("@CocoricoCore/Frontend/Common/form_search_fields.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 57)->display(array("form" =>         // line 58
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })())));
        // line 60
        echo "
            ";
        // line 61
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 61)->display(array("form" =>         // line 62
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })())));
        // line 64
        echo "
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'form_end');
        echo "
            ";
        // line 67
        echo "
            <h1 data-id=\"result-title\">
                <span data-id=\"title\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["seo_title"]) || array_key_exists("seo_title", $context) ? $context["seo_title"] : (function () { throw new Twig_Error_Runtime('Variable "seo_title" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                <small data-id=\"nb-result\">
                    ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.results", array("%nb_results%" => (isset($context["nb_listings"]) || array_key_exists("nb_listings", $context) ? $context["nb_listings"] : (function () { throw new Twig_Error_Runtime('Variable "nb_listings" does not exist.', 71, $this->getSourceContext()); })())), "cocorico_listing"), "html", null, true);
        echo "
                </small>

                ";
        // line 74
        if ($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoListingAlertBundle")) {
            // line 75
            echo "                    <div class=\"listing-alert\">
                        <a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_alert_new");
            echo "\" data-id=\"listing-alert\"
                           class=\"btn btn-default\">
                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.alert.link", array(), "cocorico_listing"), "html", null, true);
            echo "
                        </a>
                    </div>
                    <div data-id=\"listing-alert-dialog\"></div>
                ";
        }
        // line 83
        echo "            </h1>
            ";
        // line 85
        echo "            <div data-id=\"seo-desc\">
                ";
        // line 86
        echo (isset($context["seo_desc"]) || array_key_exists("seo_desc", $context) ? $context["seo_desc"] : (function () { throw new Twig_Error_Runtime('Variable "seo_desc" does not exist.', 86, $this->getSourceContext()); })());
        echo "
            </div>

            <!-- two-columns -->
            <div class=\"twocolumns row\">
            ";
        // line 92
        echo "               <!-- postarea -->
                <section class=\"listing-area col-xs-12 col-sm-8\">
                    <div class=\"listing-holder row\">
                        ";
        // line 95
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 95)->display(array("listings" =>         // line 96
(isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 96, $this->getSourceContext()); })()), "nb_listings" =>         // line 97
(isset($context["nb_listings"]) || array_key_exists("nb_listings", $context) ? $context["nb_listings"] : (function () { throw new Twig_Error_Runtime('Variable "nb_listings" does not exist.', 97, $this->getSourceContext()); })())));
        // line 99
        echo "                    </div>
                    ";
        // line 100
        $this->loadTemplate("@CocoricoCore/Frontend/Common/_pagination.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 100)->display(array("pagination" =>         // line 101
(isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 101, $this->getSourceContext()); })())));
        // line 103
        echo "
                </section>
\t\t\t\t<!-- maparea -->
                <div class=\"maparea col-xs-12 col-sm-4\">
                    <div class=\"maparea\">
                        <div class=\"checkbox search-on-drag-cb-wrapper\">
                            <input type=\"checkbox\" name=\"search-on-drag\" id=\"search-on-drag\">
                            <label class=\"form-label\" for=\"search-on-drag\">
                                ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("search-on-map-drag", array(), "cocorico_listing"), "html", null, true);
        echo "
                            </label>
                        </div>
                        <div class=\"map-holder\">
                            <div id=\"map-canvas\"></div>
                            ";
        // line 116
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/_marker.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 116)->display(array("markers" =>         // line 117
(isset($context["markers"]) || array_key_exists("markers", $context) ? $context["markers"] : (function () { throw new Twig_Error_Runtime('Variable "markers" does not exist.', 117, $this->getSourceContext()); })())));
        // line 119
        echo "                        </div>
                    </div>
                </div>
            ";
        // line 123
        echo "            </div>

            ";
        // line 126
        echo "            <div data-id=\"seo-desc-moved\"></div>
        ";
        
        $__internal_8760f617dd8d32567ffbe1710d11a9c3e529831733c9cdd14b70679afea2c109->leave($__internal_8760f617dd8d32567ffbe1710d11a9c3e529831733c9cdd14b70679afea2c109_prof);

        
        $__internal_3c9c3cac49d469f75e3caae8b6dd50d771bc102886c90e7e1bc062be13b48683->leave($__internal_3c9c3cac49d469f75e3caae8b6dd50d771bc102886c90e7e1bc062be13b48683_prof);

    }

    // line 129
    public function block_modal($context, array $blocks = array())
    {
        $__internal_1bc53a171931c256307bf6c3e05358c29c6f56dda4dade823cc2724e549c8a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc53a171931c256307bf6c3e05358c29c6f56dda4dade823cc2724e549c8a4b->enter($__internal_1bc53a171931c256307bf6c3e05358c29c6f56dda4dade823cc2724e549c8a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_20dbd8fe5850063ba6cbf7189f816e2ff37360f71143faaa91e788e12e8b0992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dbd8fe5850063ba6cbf7189f816e2ff37360f71143faaa91e788e12e8b0992->enter($__internal_20dbd8fe5850063ba6cbf7189f816e2ff37360f71143faaa91e788e12e8b0992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 130
        echo "            ";
        $this->loadTemplate("CocoricoCoreBundle:Frontend/Common:_modal.html.twig", "@CocoricoCore/Frontend/ListingResult/result.html.twig", 130)->display(array());
        // line 131
        echo "        ";
        
        $__internal_20dbd8fe5850063ba6cbf7189f816e2ff37360f71143faaa91e788e12e8b0992->leave($__internal_20dbd8fe5850063ba6cbf7189f816e2ff37360f71143faaa91e788e12e8b0992_prof);

        
        $__internal_1bc53a171931c256307bf6c3e05358c29c6f56dda4dade823cc2724e549c8a4b->leave($__internal_1bc53a171931c256307bf6c3e05358c29c6f56dda4dade823cc2724e549c8a4b_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 131,  787 => 130,  778 => 129,  767 => 126,  763 => 123,  758 => 119,  756 => 117,  755 => 116,  747 => 111,  737 => 103,  735 => 101,  734 => 100,  731 => 99,  729 => 97,  728 => 96,  727 => 95,  722 => 92,  714 => 86,  711 => 85,  708 => 83,  700 => 78,  695 => 76,  692 => 75,  690 => 74,  684 => 71,  679 => 69,  675 => 67,  671 => 65,  668 => 64,  666 => 62,  665 => 61,  662 => 60,  660 => 58,  659 => 57,  654 => 55,  651 => 54,  648 => 53,  646 => 52,  637 => 51,  626 => 48,  624 => 47,  623 => 46,  620 => 45,  611 => 44,  580 => 42,  311 => 225,  309 => 224,  303 => 222,  294 => 221,  254 => 188,  250 => 187,  246 => 186,  227 => 174,  221 => 170,  214 => 166,  209 => 164,  205 => 162,  202 => 161,  199 => 160,  196 => 159,  193 => 158,  190 => 156,  188 => 154,  187 => 153,  186 => 152,  184 => 149,  181 => 147,  178 => 146,  172 => 143,  163 => 142,  152 => 138,  149 => 42,  140 => 41,  126 => 35,  122 => 34,  114 => 30,  105 => 29,  95 => 25,  86 => 24,  76 => 21,  67 => 20,  57 => 1,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  46 => 13,  44 => 11,  42 => 10,  40 => 9,  38 => 8,  36 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% trans_default_domain 'cocorico_listing' %}

{% set location = listing_search_request.location %}

{# SEO #}
{% set seo_title = 'listing.search.result.title'|trans({'%listing_search_request%': location.address }) %}
{% set seo_desc = '' %}
{% set seo_meta_tile = 'listing.search.result.meta_title'|trans({'%listing_search_request%': location.address }, 'cocorico_meta') ~ \" - \" ~ cocorico_site_name %}
{% set seo_meta_desc = 'listing.search.result.meta_desc'|trans({'%nb_results%': nb_listings}, 'cocorico_meta') %}

{% if seo_content|default(null) %}
    {% set seo_title = seo_content.title %}
    {% set seo_desc = seo_content.description %}
    {% set seo_meta_tile = seo_content.metaTitle %}
    {% set seo_meta_desc = seo_content.metaDescription %}
{% endif %}

{%- block meta_title -%}
    {{ seo_meta_tile }}
{%- endblock -%}

{%- block meta_description -%}
    {{ seo_meta_desc }}
{%- endblock -%}
{# END SEO #}

{% block stylesheets %}
    {{ parent() }}

    <style>
        #map-canvas {
            width: {{ listing_search_map_w }}px;
            height: {{ listing_search_map_h }}px;
        }
    </style>
{% endblock %}


{% block layout %}
    {% embed '@CocoricoCore/Frontend/layout.html.twig' %}
        {% trans_default_domain 'cocorico_listing' %}
        {% block breadcrumbs %}
            <!-- breadcrumbs -->
            {{ render(controller('CocoricoBreadcrumbBundle:Breadcrumbs:index',{
                request: app.request
            })) }}
        {% endblock %}

        {% block main %}
            {#search form with filters#}
            {% include 'CocoricoCoreBundle:Frontend/Common:_flash.html.twig' %}

            {{ form_start(form, {'attr': {'class': 'form-category alt col-xs-12'}}) }}

            {% include '@CocoricoCore/Frontend/Common/form_search_fields.html.twig' with {
                'form': form
            } only %}

            {% include '@CocoricoCore/Frontend/ListingResult/form_search_filters.html.twig' with {
                'form': form
            } only %}

            {{ form_end(form) }}
            {#end search form with filters#}

            <h1 data-id=\"result-title\">
                <span data-id=\"title\">{{ seo_title }}</span>
                <small data-id=\"nb-result\">
                    {{ 'listing.search.result.results'|trans({'%nb_results%': nb_listings}) }}
                </small>

                {% if bundleExist('CocoricoListingAlertBundle') %}
                    <div class=\"listing-alert\">
                        <a href=\"{{ path('cocorico_listing_alert_new') }}\" data-id=\"listing-alert\"
                           class=\"btn btn-default\">
                            {{ \"listing.search.result.alert.link\"|trans }}
                        </a>
                    </div>
                    <div data-id=\"listing-alert-dialog\"></div>
                {% endif %}
            </h1>
            {#TO NOT DELETE#}
            <div data-id=\"seo-desc\">
                {{ seo_desc|raw }}
            </div>

            <!-- two-columns -->
            <div class=\"twocolumns row\">
            {# DLEVASSEUR - MAP ON THE RIGHT #}
               <!-- postarea -->
                <section class=\"listing-area col-xs-12 col-sm-8\">
                    <div class=\"listing-holder row\">
                        {% include '@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig'  with {
                        'listings': listings,
                        'nb_listings': nb_listings
                        } only %}
                    </div>
                    {% include '@CocoricoCore/Frontend/Common/_pagination.html.twig' with {
                    'pagination': pagination
                    } only %}

                </section>
\t\t\t\t<!-- maparea -->
                <div class=\"maparea col-xs-12 col-sm-4\">
                    <div class=\"maparea\">
                        <div class=\"checkbox search-on-drag-cb-wrapper\">
                            <input type=\"checkbox\" name=\"search-on-drag\" id=\"search-on-drag\">
                            <label class=\"form-label\" for=\"search-on-drag\">
                                {{ 'search-on-map-drag'|trans }}
                            </label>
                        </div>
                        <div class=\"map-holder\">
                            <div id=\"map-canvas\"></div>
                            {% include '@CocoricoCore/Frontend/ListingResult/_marker.html.twig'  with {
                            'markers': markers,
                            } only %}
                        </div>
                    </div>
                </div>
            {# DLEVASSEUR - END #}
            </div>

            {#TO NOT DELETE#}
            <div data-id=\"seo-desc-moved\"></div>
        {% endblock %}

        {% block modal %}
            {% include 'CocoricoCoreBundle:Frontend/Common:_modal.html.twig' only %}
        {% endblock %}

        {#{% block footer %}#}
        {#{{ parent() }}#}
        {#{% endblock %}#}

    {% endembed %}

{% endblock layout %}


{% block javascripts %}
    {{ parent() }}

    {#Extend search area if not enough results and if location search type is not done by distance #}
    {% set extendSearch = nb_listings < listingSearchMinResult and listingSearchLocationType|default('viewport') != 'distance' %}

    {#Geocoding #}
    {% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig' with {
    'map_elt': '#map-canvas',
    'auto_complete_elt': '#location',
    'default_lat': location.lat,
    'default_lng': location.lng,
    'extend_search': extendSearch
    } only %}

    {#Extend search call#}
    {% set parentLocation, modalMessage = '', '' %}
    {% if extendSearch %}
        {% set parentLocation = location.getParentLocation() %}
        {% set modalMessage = 'cocorico.search.extended.warning %location%'|trans({'%location%': parentLocation.address  }, 'cocorico') %}
        <script>
            \$(function () {
                var parentLocation = '{{ parentLocation|json_encode( constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_HEX_APOS') )|e('js') }}';
                parentLocation = \$.parseJSON(parentLocation);
                extendSearchLocationFunc(parentLocation.address, parentLocation.type, '#modal', '{{ modalMessage }}');
            });
        </script>
    {% endif %}

    <script>
        \$(function () {
            //Refresh map on load
            refreshMapFunc('{{location.viewport }}', '{{ location.lat }}', '{{ location.lng }}');

            //Set listings markers on load
            //Set listings markers on load through data-markers attribute
            setMarkersFunc(\$(\"span#data-markers\").data(\"markers\"));

            // Set default favourites in the listing
            setDefaultFavourites();

            // Categories
            initMultiSelect(
                    '#categories',
                    '{{ \"multiselect.all_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.none_selected\"|trans({}, \"cocorico\")|e('js') }}',
                    '{{ \"multiselect.num_selected\"|trans({}, \"cocorico\")|e('js') }}'
            );

            \$(\".datepicker\").datepicker({
                dateFormat: \"dd/mm/yy\"
            });

            //Listing alert (See form_search.html.twig, common.js)
            var \$dialog = \$(\"div[data-id=listing-alert-dialog]\").initDialogForm(400);

            \$(\"a[data-id=listing-alert]\").on('click', function (e) {
                e.preventDefault();
                \$dialog.openDialog(\$(this).attr(\"href\"), \"\");
                return false;
            });

            //Move seo desc to bottom
            \$(\"[data-id=seo-desc]\").appendTo(\"[data-id=seo-desc-moved]\");

            //Select change submit the form
//            \$(\"select[id^='characteristics_'], select#sort_by\").change(function (e) {
//                \$(this).closest('form').submit();
//            });
//            \$(\".ui-slider\").on(\"slidestop\", function (event, ui) {
//                \$(this).closest('form').submit();
//            });

        });
    </script>
{% endblock %}



{% block markup_jsonld %}
    {{ parent() }}

    {% include 'CocoricoSeoBundle:Frontend:ListingResult/_result_markup.jsonld.twig' ignore missing with {
    'listings': listings
    } only %}
{% endblock %}", "@CocoricoCore/Frontend/ListingResult/result.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/result.html.twig");
    }
}
