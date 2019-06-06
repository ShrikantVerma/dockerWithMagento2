<?php

/* @CocoricoCore/Frontend/ListingResult/_result_listings.html.twig */
class __TwigTemplate_dc1d6669b8a4295b2fd6cc4dee082f5568922a2a1a24f9a3fcec11b302c06f1b extends Twig_Template
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
        $__internal_28aeef9e416449bacfa786d43c8d255aeb891ffcf3e91464a68fc83c59267056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28aeef9e416449bacfa786d43c8d255aeb891ffcf3e91464a68fc83c59267056->enter($__internal_28aeef9e416449bacfa786d43c8d255aeb891ffcf3e91464a68fc83c59267056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig"));

        $__internal_613ab629a6e59c1c82297a0a56567e4fe341dae0df2ce2ba36d05563340ade1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613ab629a6e59c1c82297a0a56567e4fe341dae0df2ce2ba36d05563340ade1c->enter($__internal_613ab629a6e59c1c82297a0a56567e4fe341dae0df2ce2ba36d05563340ade1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig"));

        // line 2
        echo "
<!-- post -->";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listings"]) || array_key_exists("listings", $context) ? $context["listings"] : (function () { throw new Twig_Error_Runtime('Variable "listings" does not exist.', 4, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["listingTmp"]) {
            // line 5
            $context["listing"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["listingTmp"], 0, array(), "array");
            // line 6
            echo "    ";
            $context["listing_translation"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 6, $this->getSourceContext()); })()), "translations", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "locale", array()), array(), "array");
            // line 7
            echo "    ";
            $context["listing_location"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 7, $this->getSourceContext()); })()), "location", array());
            // line 8
            echo "    ";
            $context["listing_user"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 8, $this->getSourceContext()); })()), "user", array());
            // line 9
            echo "    ";
            $context["price"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->formatPriceFilter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 9, $this->getSourceContext()); })()), "price", array()) / 100), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "request", array()), "locale", array()), 0);
            // line 10
            echo "    <!-- MGONZALEZ Afficher priceLabour page de résultats-->
    ";
            // line 11
            $context["price_labour"] = $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->formatPriceFilter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 11, $this->getSourceContext()); })()), "priceLabour", array()) / 100), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "locale", array()), 2);
            // line 12
            echo "    ";
            $context["listing_image"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->getSourceContext()); })()), "images", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 12, $this->getSourceContext()); })()), "images", array()), 0, array(), "array"), "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["ListingImageConstants"]) || array_key_exists("ListingImageConstants", $context) ? $context["ListingImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "ListingImageConstants" does not exist.', 12, $this->getSourceContext()); })()), "IMAGE_DEFAULT", array())));
            // line 13
            echo "    ";
            $context["user_image"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 13, $this->getSourceContext()); })()), "images", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 13, $this->getSourceContext()); })()), "images", array()), 0, array(), "array"), "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["UserImageConstants"]) || array_key_exists("UserImageConstants", $context) ? $context["UserImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "UserImageConstants" does not exist.', 13, $this->getSourceContext()); })()), "IMAGE_DEFAULT", array())));
            // line 14
            echo "
    <article class=\"listing-post col-sm-6 col-xs-12\" data-lid=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\">
        <a href=\"javascript:void(0)\" id=\"favourite-";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 16, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\" class=\"favourit\">
            <i class=\"icon-heart\"></i>
            <span class=\"hidden\">favourit</span>
        </a>
        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_show", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 20, $this->getSourceContext()); })()), "slug", array()))), "html", null, true);
            echo "\"
           class=\"listing-box\">
            <div class=\"frame\">

                <div class=\"post-info\">
                    <div class=\"img-holder\">
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["ListingImageConstants"]) || array_key_exists("ListingImageConstants", $context) ? $context["ListingImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "ListingImageConstants" does not exist.', 26, $this->getSourceContext()); })()), "IMAGE_FOLDER", array()) . (isset($context["listing_image"]) || array_key_exists("listing_image", $context) ? $context["listing_image"] : (function () { throw new Twig_Error_Runtime('Variable "listing_image" does not exist.', 26, $this->getSourceContext()); })())), "listing_large"), "html", null, true);
            echo "\"
                             alt=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 27, $this->getSourceContext()); })()), "title", array()) . " ") . (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new Twig_Error_Runtime('Variable "price" does not exist.', 27, $this->getSourceContext()); })())), "html", null, true);
            echo "\"/>
                    </div>

                    <div class=\"box\">
                        <div class=\"box-holder\">
                            <div class=\"head\">
                                <div class=\"time-price\">
                                    <strong class=\"price\">";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new Twig_Error_Runtime('Variable "price" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
            echo "</strong>

                                    <p>
                                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method")), "html", null, true);
            echo "
                                        / ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->addTimeUnitTextFilter(0), "html", null, true);
            echo "
                                    </p>
                                    <br>
                                                                Mouvement dès
                                                                <strong class=\"price\">";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["price_labour"]) || array_key_exists("price_labour", $context) ? $context["price_labour"] : (function () { throw new Twig_Error_Runtime('Variable "price_labour" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "
                                                                    <small>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\CoreExtension')->vatInclusionText(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "request", array()), "getLocale", array(), "method"), null, 0), "html", null, true);
            echo "</small>
                                                                </strong>
                                                                <p>
                                                                    par palette
                                                                </p>
                                </div>
                            </div>
                            <div class=\"foot\">
                                <div class=\"area\">
                                    <!-- rating -->
                                    ";
            // line 53
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 53, $this->getSourceContext()); })()), "averageRating", array())) {
                // line 54
                echo "                                        ";
                echo $this->env->getExtension('Cocorico\ReviewBundle\Extension\StarRatingTwigExtension')->starRatingFilter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 54, $this->getSourceContext()); })()), "averageRating", array()));
                echo "
                                    ";
            }
            // line 56
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 56, $this->getSourceContext()); })()), "certified", array())) {
                // line 57
                echo "                                        <span class=\"certified\">
                                            <i class=\"icon-ok\"></i>
                                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.certified", array(), "cocorico_listing"), "html", null, true);
                echo "
                                        </span>
                                    ";
            }
            // line 62
            echo "                                </div>
                                <strong class=\"title\">";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 64, $this->getSourceContext()); })()), "listingListingCategories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listingListingCategory"]) {
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listingListingCategory"], "category", array()), "translations", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->getSourceContext()); })()), "request", array()), "locale", array()), array(), "array"), "name", array()), "html", null, true);
                // line 66
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listingListingCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"post-content\">
                    <div class=\"alignleft\">
                        <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["UserImageConstants"]) || array_key_exists("UserImageConstants", $context) ? $context["UserImageConstants"] : (function () { throw new Twig_Error_Runtime('Variable "UserImageConstants" does not exist.', 76, $this->getSourceContext()); })()), "IMAGE_FOLDER", array()) . (isset($context["user_image"]) || array_key_exists("user_image", $context) ? $context["user_image"] : (function () { throw new Twig_Error_Runtime('Variable "user_image" does not exist.', 76, $this->getSourceContext()); })())), "user_xsmall"), "html", null, true);
            echo "\"
                             alt=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_user"]) || array_key_exists("listing_user", $context) ? $context["listing_user"] : (function () { throw new Twig_Error_Runtime('Variable "listing_user" does not exist.', 77, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"textbox\">
                        ";
            // line 80
            if (($this->env->getExtension('Cocorico\CoreBundle\Twig\ExtraBundleExtension')->bundleExist("CocoricoDeliveryBundle") &&  !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->getSourceContext()); })()), "request", array()), "xmlHttpRequest", array()))) {
                // line 81
                echo "                            ";
                $this->loadTemplate("CocoricoDeliveryBundle:Frontend:Listing/_show_delivery.html.twig", "@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig", 81)->display(array("listing_delivery" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 82
(isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 82, $this->getSourceContext()); })()), "delivery", array())));
                // line 84
                echo "                        ";
            }
            // line 85
            echo "
                        <h2>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_translation"]) || array_key_exists("listing_translation", $context) ? $context["listing_translation"] : (function () { throw new Twig_Error_Runtime('Variable "listing_translation" does not exist.', 86, $this->getSourceContext()); })()), "title", array()), "html", null, true);
            echo "</h2>

                        <p>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing_location"]) || array_key_exists("listing_location", $context) ? $context["listing_location"] : (function () { throw new Twig_Error_Runtime('Variable "listing_location" does not exist.', 88, $this->getSourceContext()); })()), "city", array()), "html", null, true);
            echo " </p>

                        ";
            // line 91
            echo "                        ";
            // line 92
            echo "                        ";
            // line 93
            echo "                        ";
            // line 94
            echo "                        ";
            // line 95
            echo "                        ";
            // line 97
            echo "                    </div>
                </div>
            </div>
        </a>
    </article>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.no_results", array(), "cocorico_listing"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listingTmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "<div data-id=\"nb-result-map-drag\"
     style=\"color: transparent\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("listing.search.result.results", array("%nb_results%" => (isset($context["nb_listings"]) || array_key_exists("nb_listings", $context) ? $context["nb_listings"] : (function () { throw new Twig_Error_Runtime('Variable "nb_listings" does not exist.', 107, $this->getSourceContext()); })())), "cocorico_listing"), "html", null, true);
        echo "</div>";
        
        $__internal_28aeef9e416449bacfa786d43c8d255aeb891ffcf3e91464a68fc83c59267056->leave($__internal_28aeef9e416449bacfa786d43c8d255aeb891ffcf3e91464a68fc83c59267056_prof);

        
        $__internal_613ab629a6e59c1c82297a0a56567e4fe341dae0df2ce2ba36d05563340ade1c->leave($__internal_613ab629a6e59c1c82297a0a56567e4fe341dae0df2ce2ba36d05563340ade1c_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 107,  255 => 106,  249 => 103,  240 => 97,  238 => 95,  236 => 94,  234 => 93,  232 => 92,  230 => 91,  225 => 88,  220 => 86,  217 => 85,  214 => 84,  212 => 82,  210 => 81,  208 => 80,  202 => 77,  198 => 76,  188 => 68,  172 => 66,  170 => 65,  153 => 64,  150 => 62,  144 => 59,  140 => 57,  137 => 56,  131 => 54,  129 => 53,  116 => 43,  112 => 42,  105 => 38,  101 => 37,  95 => 34,  85 => 27,  81 => 26,  72 => 20,  65 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  33 => 5,  28 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'cocorico_listing' %}

<!-- post -->
{%- for listingTmp in listings -%}
    {% set listing = listingTmp[0] %}
    {% set listing_translation = listing.translations[app.request.locale] %}
    {% set listing_location = listing.location %}
    {% set listing_user = listing.user %}
    {% set price = (listing.price / 100) | format_price(app.request.locale, 0) %}
    <!-- MGONZALEZ Afficher priceLabour page de résultats-->
    {% set price_labour = (listing.priceLabour / 100) | format_price(app.request.locale, 2)  %}
    {% set listing_image = listing.images|length ? listing.images[0].name : ListingImageConstants.IMAGE_DEFAULT %}
    {% set user_image = listing_user.images|length ? listing_user.images[0].name : UserImageConstants.IMAGE_DEFAULT %}

    <article class=\"listing-post col-sm-6 col-xs-12\" data-lid=\"{{ listing.id }}\">
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
                            <div class=\"head\">
                                <div class=\"time-price\">
                                    <strong class=\"price\">{{ price }}</strong>

                                    <p>
                                        {{ vatInclusionText(app.request.getLocale()) }}
                                        / {{ (0)|add_time_unit_text }}
                                    </p>
                                    <br>
                                                                Mouvement dès
                                                                <strong class=\"price\">{{ price_labour }}
                                                                    <small>{{ vatInclusionText(app.request.getLocale(), null, 0 ) }}</small>
                                                                </strong>
                                                                <p>
                                                                    par palette
                                                                </p>
                                </div>
                            </div>
                            <div class=\"foot\">
                                <div class=\"area\">
                                    <!-- rating -->
                                    {% if listing.averageRating %}
                                        {{ listing.averageRating | cocorico_star_rating }}
                                    {% endif %}
                                    {% if  listing.certified %}
                                        <span class=\"certified\">
                                            <i class=\"icon-ok\"></i>
                                            {{ 'listing.search.result.certified'|trans }}
                                        </span>
                                    {% endif %}
                                </div>
                                <strong class=\"title\">
                                    {%- for listingListingCategory in listing.listingListingCategories -%}
                                        {{ listingListingCategory.category.translations[app.request.locale].name }}
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"post-content\">
                    <div class=\"alignleft\">
                        <img src=\"{{ (UserImageConstants.IMAGE_FOLDER ~ user_image) | imagine_filter('user_xsmall') }}\"
                             alt=\"{{ listing_user.firstName }}\"/>
                    </div>
                    <div class=\"textbox\">
                        {% if bundleExist('CocoricoDeliveryBundle') and not app.request.xmlHttpRequest %}
                            {% include 'CocoricoDeliveryBundle:Frontend:Listing/_show_delivery.html.twig' with {
                            'listing_delivery': listing.delivery
                            } only %}
                        {% endif %}

                        <h2>{{ listing_translation.title }}</h2>

                        <p>{{ listing_location.city }} </p>

                        {#<!--Debug:#}
                        {#accuracy : {{ listingTmp.accuracy|default(-1) }}<br/>#}
                        {#distance : {{ listingTmp.distance|default(-1) }}<br/>#}
                        {#distance_range : {{ listingTmp.distance_range|default(-1) }}<br/>#}
                        {#platformNotation : {{ listing.platformNotation|default(-1) }}<br/>#}
                        {#reallyAvailable : {{ listingTmp.really_available|default(-1) }}<br/>#}
                        {#-->#}
                    </div>
                </div>
            </div>
        </a>
    </article>
{%- else -%}
    {{ 'listing.search.result.no_results'|trans }}
{%- endfor -%}

<div data-id=\"nb-result-map-drag\"
     style=\"color: transparent\">{{ 'listing.search.result.results'|trans({'%nb_results%': nb_listings}) }}</div>", "@CocoricoCore/Frontend/ListingResult/_result_listings.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/_result_listings.html.twig");
    }
}
