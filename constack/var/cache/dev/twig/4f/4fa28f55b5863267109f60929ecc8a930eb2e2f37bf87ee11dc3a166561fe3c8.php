<?php

/* CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig */
class __TwigTemplate_cd89b1d6e9300ce4a9e0957698e8f9c4d8a8fec53dcafa7aed6cb75fa143fdac extends Twig_Template
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
        $__internal_136dc5006f0223f8088c12abf3158854463f3f4d57e213e2dca6af65481a1865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136dc5006f0223f8088c12abf3158854463f3f4d57e213e2dca6af65481a1865->enter($__internal_136dc5006f0223f8088c12abf3158854463f3f4d57e213e2dca6af65481a1865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig"));

        $__internal_855bfc2c1b91870228a099f4a8cb10ed0b9cfe204776b7ae16cc6bed217fbc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855bfc2c1b91870228a099f4a8cb10ed0b9cfe204776b7ae16cc6bed217fbc70->enter($__internal_855bfc2c1b91870228a099f4a8cb10ed0b9cfe204776b7ae16cc6bed217fbc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig"));

        // line 1
        echo "<section class=\"listing-area col-md-12 tips-section\">
    <div class=\"listing-holder row\">
        <h2 class=\"high-rank-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("home.high.rank.section.header", array(), "cocorico_listing"), "html", null, true);
        echo "</h2>
        <!-- post -->
        <div class=\"slider-secondary\">
            <div class=\"slider-clip\">
                <ul class=\"slides\">";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listingTmp"]) {
            // line 9
            $context["listing"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["listingTmp"], 0, array(), "array");
            // line 10
            echo "                        ";
            $context["listing_translation"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 10, $this->getSourceContext()); })()), "translations", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "locale", array()), array(), "array");
            // line 11
            echo "                        ";
            $context["listing_location"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 11, $this->getSourceContext()); })()), "location", array());
            // line 12
            echo "                        ";
            $context["listing_user"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->getSourceContext()); })()), "user", array());
            // line 13
            echo "                        ";
            // line 15
            echo "                        ";
            $context["price"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->formatPriceFilter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 15, $this->getSourceContext()); })()), "price", array()) / 100), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "locale", array()), 2);
            // line 16
            echo "                        <!-- MGONZALEZ labourPrice vignettes Home page-->
                        ";
            // line 17
            $context["price_labour"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->formatPriceFilter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 17, $this->getSourceContext()); })()), "priceLabour", array()) / 100), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "locale", array()), 2);
            // line 18
            echo "                        ";
            $context["listing_image"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 18, $this->getSourceContext()); })()), "images", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 18, $this->getSourceContext()); })()), "images", array()), 0, array(), "array"), "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["ListingImageConstants"]) || array_key_exists("ListingImageConstants", $context) ? $context["ListingImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "ListingImageConstants" does not exist.', 18, $this->getSourceContext()); })()), "IMAGE_DEFAULT", array())));
            // line 19
            echo "
                        <article class=\"listing-post col-sm-4 col-xs-12\">
                            <div class=\"listing-content\">
                                <a href=\"javascript:void(0)\" id=\"favourite-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 22, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" class=\"favourit\">
                                    <i class=\"icon-heart\"></i>
                                    <span class=\"hidden\">favourit</span>
                                </a>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_show", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 26, $this->getSourceContext()); })()), "slug", array()))), "html", null, true);
            echo "\"
                                   class=\"listing-box\">
                                    <div class=\"frame\">
                                        <div class=\"post-info\">
                                            <div class=\"img-holder\">
                                                <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["ListingImageConstants"]) || array_key_exists("ListingImageConstants", $context) ? $context["ListingImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "ListingImageConstants" does not exist.', 31, $this->getSourceContext()); })()), "IMAGE_FOLDER", array()) . (isset($context["listing_image"]) || array_key_exists("listing_image", $context) ? $context["listing_image"] : (function () { throw new Twig_Error_Runtime('Variable "listing_image" does not exist.', 31, $this->getSourceContext()); })())), "listing_large"), "html", null, true);
            echo "\"
                                                     alt=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 32, $this->getSourceContext()); })()), "title", array()) . " ") . (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new Twig_Error_Runtime('Variable "price" does not exist.', 32, $this->getSourceContext()); })())), "html", null, true);
            echo "\"/>
                                            </div>

                                            <div class=\"box\">
                                                <div class=\"box-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- MGONZALEZ labourPrice vignettes Home page-->
                                                    <div class=\"foot\">
                                                        <div class=\"area\">
                                                            <!-- rating -->
                                                            ";
            // line 41
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 41, $this->getSourceContext()); })()), "averageRating", array())) {
                // line 42
                echo "                                                                ";
                echo $this->env->getExtension('Cocorico\ReviewBundle\Extension\StarRatingTwigExtension')->starRatingFilter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 42, $this->getSourceContext()); })()), "averageRating", array()));
                echo "
                                                            ";
            }
            // line 44
            echo "                                                            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 44, $this->getSourceContext()); })()), "certified", array())) {
                // line 45
                echo "                                                                <span class=\"certified\">
                                                                    <i class=\"icon-ok\"></i>
                                                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.certified", array(), "cocorico_listing"), "html", null, true);
                echo "
                                                                </span>
                                                            ";
            }
            // line 50
            echo "                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_line\">
                                                        <strong class=\"prices_left\">
                                                           ";
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("storage_cost"), "html", null, true);
            echo "
                                                            <strong class=\"price\">";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new Twig_Error_Runtime('Variable "price" does not exist.', 57, $this->getSourceContext()); })()), "html", null, true);
            echo "
                                                                    <small>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method"), null, 0), "html", null, true);
            echo "</small>
                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
                                                            ";
            // line 62
            echo "                                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("per_week"), "html", null, true);
            echo "
                                                            </p>
                                                     
                                                        </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"prices_right\">
                                                          ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("labour_cost"), "html", null, true);
            echo "
                                                            <strong class=\"price\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["price_labour"]) || array_key_exists("price_labour", $context) ? $context["price_labour"] : (function () { throw new Twig_Error_Runtime('Variable "price_labour" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "
                                                                    <small>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method"), null, 0), "html", null, true);
            echo "</small>
                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
                                                               ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("per_pallet"), "html", null, true);
            echo "
                                                            </p>
                                                     
                                                        </strong>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                   
                                                    </div>
                                                    <!-- MGONZALEZ END-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"post-content\">
                                            ";
            // line 86
            $context["image_user"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 86, $this->getSourceContext()); })()), "images", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 86, $this->getSourceContext()); })()), "images", array()), 0, array(), "array"), "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["UserImageConstants"]) || array_key_exists("UserImageConstants", $context) ? $context["UserImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "UserImageConstants" does not exist.', 86, $this->getSourceContext()); })()), "IMAGE_DEFAULT", array())));
            // line 87
            echo "                                            <div class=\"alignleft\">
                                                <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["UserImageConstants"]) || array_key_exists("UserImageConstants", $context) ? $context["UserImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "UserImageConstants" does not exist.', 88, $this->getSourceContext()); })()), "IMAGE_FOLDER", array()) . (isset($context["image_user"]) || array_key_exists("image_user", $context) ? $context["image_user"] : (function () { throw new Twig_Error_Runtime('Variable "image_user" does not exist.', 88, $this->getSourceContext()); })())), "user_xsmall"), "html", null, true);
            echo "\"
                                                     alt=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 89, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
            echo "\"/>
                                            </div>
                                            <div class=\"textbox\">
                                                <h2>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 92, $this->getSourceContext()); })()), "title", array()), "html", null, true);
            echo "</h2>

                                                <p>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_location"]) || array_key_exists("listing_location", $context) ? $context["listing_location"] : (function () { throw new Twig_Error_Runtime('Variable "listing_location" does not exist.', 94, $this->getSourceContext()); })()), "city", array()), "html", null, true);
            echo " </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listingTmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "</ul>
            </div>";
        // line 104
        echo "            <div class=\"slider-secondary-actions\">
                <a href=\"#\" class=\"slider-prev\">Previous Slide</a>

                <a href=\"#\" class=\"slider-next\">Next Slide</a>
            </div>

            <div class=\"slider-secondary-paging\"></div>
        </div>
    </div>
</section>";
        
        $__internal_136dc5006f0223f8088c12abf3158854463f3f4d57e213e2dca6af65481a1865->leave($__internal_136dc5006f0223f8088c12abf3158854463f3f4d57e213e2dca6af65481a1865_prof);

        
        $__internal_855bfc2c1b91870228a099f4a8cb10ed0b9cfe204776b7ae16cc6bed217fbc70->leave($__internal_855bfc2c1b91870228a099f4a8cb10ed0b9cfe204776b7ae16cc6bed217fbc70_prof);

    }

    public function getTemplateName()
    {
        return "CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 104,  214 => 102,  201 => 94,  196 => 92,  190 => 89,  186 => 88,  183 => 87,  181 => 86,  164 => 72,  158 => 69,  154 => 68,  150 => 67,  141 => 62,  135 => 58,  131 => 57,  126 => 56,  121 => 50,  115 => 47,  111 => 45,  108 => 44,  102 => 42,  100 => 41,  88 => 32,  84 => 31,  76 => 26,  69 => 22,  64 => 19,  61 => 18,  59 => 17,  56 => 16,  53 => 15,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  36 => 8,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"listing-area col-md-12 tips-section\">
    <div class=\"listing-holder row\">
        <h2 class=\"high-rank-title\">{{ 'home.high.rank.section.header'|trans({}, 'cocorico_listing') }}</h2>
        <!-- post -->
        <div class=\"slider-secondary\">
            <div class=\"slider-clip\">
                <ul class=\"slides\">
                    {%- for listingTmp in listings -%}
                        {% set listing = listingTmp[0] %}
                        {% set listing_translation = listing.translations[app.request.locale] %}
                        {% set listing_location = listing.location %}
                        {% set listing_user = listing.user %}
                        {# DLEVASSEUR Ajout prix avec décimale 
                        {% set price = (listing.price / 100) | format_price(app.request.locale, 0) %}#}
                        {% set price = (listing.price / 100)  | format_price(app.request.locale, 2) %}
                        <!-- MGONZALEZ labourPrice vignettes Home page-->
                        {% set price_labour = (listing.priceLabour / 100) | format_price(app.request.locale, 2)  %}
                        {% set listing_image = listing.images|length ? listing.images[0].name : ListingImageConstants.IMAGE_DEFAULT %}

                        <article class=\"listing-post col-sm-4 col-xs-12\">
                            <div class=\"listing-content\">
                                <a href=\"javascript:void(0)\" id=\"favourite-{{ listing.id }}\" class=\"favourit\">
                                    <i class=\"icon-heart\"></i>
                                    <span class=\"hidden\">favourit</span>
                                </a>
                                <a href=\"{{ path('cocorico_listing_show', { 'slug': listing_translation.slug }) }}\"
                                   class=\"listing-box\">
                                    <div class=\"frame\">
                                        <div class=\"post-info\">
                                            <div class=\"img-holder\">
                                                <img src=\"{{ (ListingImageConstants.IMAGE_FOLDER ~  listing_image) | imagine_filter('listing_large') }}\"
                                                     alt=\"{{ listing_translation.title ~ \" \" ~ price }}\"/>
                                            </div>

                                            <div class=\"box\">
                                                <div class=\"box-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- MGONZALEZ labourPrice vignettes Home page-->
                                                    <div class=\"foot\">
                                                        <div class=\"area\">
                                                            <!-- rating -->
                                                            {% if listing.averageRating %}
                                                                {{ listing.averageRating | cocorico_star_rating }}
                                                            {% endif %}
                                                            {% if  listing.certified %}
                                                                <span class=\"certified\">
                                                                    <i class=\"icon-ok\"></i>
                                                                    {{ 'listing.search.result.certified'|trans({}, 'cocorico_listing') }}
                                                                </span>
                                                            {% endif %}
                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_line\">
                                                        <strong class=\"prices_left\">
                                                           {# {% for listingListingCategory in listing.listingListingCategories %}
                                                                {{ listingListingCategory.category.translations[app.request.locale].name }},
                                                            {% endfor %}#}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'storage_cost'|trans }}
                                                            <strong class=\"price\">{{ price }}
                                                                    <small>{{ vatInclusionText(app.request.getLocale(), null, 0 ) }}</small>
                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
                                                            {#    par {{ (0)|add_time_unit_text }} #}
                                                            {{ 'per_week'|trans }}
                                                            </p>
                                                     
                                                        </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"prices_right\">
                                                          {{ 'labour_cost'|trans }}
                                                            <strong class=\"price\">{{ price_labour }}
                                                                    <small>{{ vatInclusionText(app.request.getLocale(), null, 0 ) }}</small>
                                                                </strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
                                                               {{ 'per_pallet'|trans }}
                                                            </p>
                                                     
                                                        </strong>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                   
                                                    </div>
                                                    <!-- MGONZALEZ END-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"post-content\">
                                            {% set image_user = listing_user.images|length ? listing_user.images[0].name : UserImageConstants.IMAGE_DEFAULT %}
                                            <div class=\"alignleft\">
                                                <img src=\"{{ (UserImageConstants.IMAGE_FOLDER ~ image_user) | imagine_filter('user_xsmall') }}\"
                                                     alt=\"{{ listing_user.firstName }}\"/>
                                            </div>
                                            <div class=\"textbox\">
                                                <h2>{{ listing_translation.title }}</h2>

                                                <p>{{ listing_location.city }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>
                    {%- endfor -%}
                </ul>
            </div>{# slider-clip #}
            <div class=\"slider-secondary-actions\">
                <a href=\"#\" class=\"slider-prev\">Previous Slide</a>

                <a href=\"#\" class=\"slider-next\">Next Slide</a>
            </div>

            <div class=\"slider-secondary-paging\"></div>
        </div>
    </div>
</section>", "CocoricoCoreBundle:Frontend/Home:_high_rank.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/Home/_high_rank.html.twig");
    }
}
