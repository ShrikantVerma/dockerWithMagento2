<?php

/* @CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig */
class __TwigTemplate_a89d061822313ebb22f5b9ee75cb6d193009c61cfc6f67f710c8ef66b65216fa extends Twig_Template
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
        $__internal_3cc9390f41a0ad6baed1adbaa6a474c0abcff7df051aa38d98cff1df04c2b11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc9390f41a0ad6baed1adbaa6a474c0abcff7df051aa38d98cff1df04c2b11a->enter($__internal_3cc9390f41a0ad6baed1adbaa6a474c0abcff7df051aa38d98cff1df04c2b11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig"));

        $__internal_1baca296f21d9199ba65c1c5f7a50a938eff7795c4db63813a499910fae5e8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1baca296f21d9199ba65c1c5f7a50a938eff7795c4db63813a499910fae5e8f3->enter($__internal_1baca296f21d9199ba65c1c5f7a50a938eff7795c4db63813a499910fae5e8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig"));

        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("@CocoricoGeo/Common/js/_geocoding_js.html.twig", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", 6)->display(array("map_elt" =>         // line 7
(isset($context["map_elt"]) || array_key_exists("map_elt", $context) ? $context["map_elt"] : (function () { throw new Twig_Error_Runtime('Variable "map_elt" does not exist.', 7, $this->getSourceContext()); })()), "auto_complete_elt" =>         // line 8
(isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 8, $this->getSourceContext()); })()), "default_lat" => ((        // line 9
array_key_exists("default_lat", $context)) ? (_twig_default_filter((isset($context["default_lat"]) || array_key_exists("default_lat", $context) ? $context["default_lat"] : (function () { throw new Twig_Error_Runtime('Variable "default_lat" does not exist.', 9, $this->getSourceContext()); })()))) : ("")), "default_lng" => ((        // line 10
array_key_exists("default_lng", $context)) ? (_twig_default_filter((isset($context["default_lng"]) || array_key_exists("default_lng", $context) ? $context["default_lng"] : (function () { throw new Twig_Error_Runtime('Variable "default_lng" does not exist.', 10, $this->getSourceContext()); })()))) : ("")), "default_zoom" => ((        // line 11
array_key_exists("default_zoom", $context)) ? (_twig_default_filter((isset($context["default_zoom"]) || array_key_exists("default_zoom", $context) ? $context["default_zoom"] : (function () { throw new Twig_Error_Runtime('Variable "default_zoom" does not exist.', 11, $this->getSourceContext()); })()))) : ("")), "display_marker" => (( !        // line 12
array_key_exists("display_marker", $context)) ? (true) : ((isset($context["display_marker"]) || array_key_exists("display_marker", $context) ? $context["display_marker"] : (function () { throw new Twig_Error_Runtime('Variable "display_marker" does not exist.', 12, $this->getSourceContext()); })())))));
        // line 14
        echo "
<script>
    \$(function () {
        var \$searchForm = \$(\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "\").closest(\"form\");

        /*************************************************************************************
         * handleFormSubmission
         */
        handleFormSubmission();
        function handleFormSubmission() {
            \$searchForm.submit(function (e) {
                e.preventDefault();
                \$.when(
                        geocodeFunc(\$(\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
        echo "\").val())
                ).then(
                        geocodeSuccess, geocodeError
                );
            });
        }

        function geocodeSuccess(result) {
            fillAddressFields(result);
            \$searchForm.unbind('submit').submit();
        }

        function geocodeError(result) {
            // TRIGGER MODAL
            var modal = \$('#modal');
            modal.find('.modal-body .title').html('";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico.search.invalidate.address", array(), "cocorico"), "html", null, true);
        echo "');
            modal.modal('show');
        }


        function fillAddressFields(result) {
            var resultLocale = result[locale];
            var extendSearch = ";
        // line 49
        echo ((((array_key_exists("extend_search", $context)) ? (_twig_default_filter((isset($context["extend_search"]) || array_key_exists("extend_search", $context) ? $context["extend_search"] : (function () { throw new Twig_Error_Runtime('Variable "extend_search" does not exist.', 49, $this->getSourceContext()); })()), "")) : (""))) ? ("true") : ("false"));
        echo ";
            var \$zip = \$searchForm.find(\"#location_zip\");

            if (extendSearch) {
                //Google zip inconsistency: P
                //Resolve zip code changing between geocoding requests while extending search.
                var zip = \$zip.val();
                if (zip && resultLocale.postal_code) {
                    //Zip has changed
                    if (zip.substring(0, 2) != resultLocale.postal_code.substring(0, 2)) {
                        \$zip.val(zip.substring(0, 2));//We change zip code to the old value
                        return;
                    }
                }
            }

            \$searchForm.find(\"#page\").val(1);
            \$searchForm.find(\"#location_lat\").val(result.lat);
            \$searchForm.find(\"#location_lng\").val(result.lng);
            \$searchForm.find(\"#location_viewport\").val(result.viewport);
            \$searchForm.find(\"#location_addressType\").val(result.types);
            \$searchForm.find(\"#location_country\").val(resultLocale.country_short);
            \$searchForm.find(\"#location_area\").val(resultLocale.administrative_area_level_1);
            \$searchForm.find(\"#location_department\").val(resultLocale.administrative_area_level_2);
            \$searchForm.find(\"#location_city\").val(resultLocale.locality);
            \$zip.val(resultLocale.postal_code);
            \$searchForm.find(\"#location_route\").val(resultLocale.route);
            \$searchForm.find(\"#location_streetNumber\").val(resultLocale.street_number);
        }

        //Center modal dialog box
        \$('.modal').on('show.bs.modal', centerModal);
        \$(window).on(\"resize\", function () {
            \$('.modal:visible').each(centerModal);
        });
    });
</script>

";
        // line 87
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", 87)->display(array("auto_complete_elt" =>         // line 88
(isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 88, $this->getSourceContext()); })())));
        // line 90
        echo "
";
        // line 91
        $this->loadTemplate("@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", 91)->display(array());
        
        $__internal_3cc9390f41a0ad6baed1adbaa6a474c0abcff7df051aa38d98cff1df04c2b11a->leave($__internal_3cc9390f41a0ad6baed1adbaa6a474c0abcff7df051aa38d98cff1df04c2b11a_prof);

        
        $__internal_1baca296f21d9199ba65c1c5f7a50a938eff7795c4db63813a499910fae5e8f3->leave($__internal_1baca296f21d9199ba65c1c5f7a50a938eff7795c4db63813a499910fae5e8f3_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 91,  126 => 90,  124 => 88,  123 => 87,  82 => 49,  72 => 42,  54 => 27,  41 => 17,  36 => 14,  34 => 12,  33 => 11,  32 => 10,  31 => 9,  30 => 8,  29 => 7,  28 => 6,  25 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
 Javascript geocoding for listing search with place auto completion
#}
{% trans_default_domain 'cocorico_geo' %}

{% include '@CocoricoGeo/Common/js/_geocoding_js.html.twig' with {
'map_elt': map_elt,
'auto_complete_elt': auto_complete_elt,
'default_lat': default_lat|default,
'default_lng': default_lng|default,
'default_zoom': default_zoom|default,
'display_marker': display_marker is not defined ? true : display_marker
} only %}

<script>
    \$(function () {
        var \$searchForm = \$(\"{{ auto_complete_elt }}\").closest(\"form\");

        /*************************************************************************************
         * handleFormSubmission
         */
        handleFormSubmission();
        function handleFormSubmission() {
            \$searchForm.submit(function (e) {
                e.preventDefault();
                \$.when(
                        geocodeFunc(\$(\"{{ auto_complete_elt }}\").val())
                ).then(
                        geocodeSuccess, geocodeError
                );
            });
        }

        function geocodeSuccess(result) {
            fillAddressFields(result);
            \$searchForm.unbind('submit').submit();
        }

        function geocodeError(result) {
            // TRIGGER MODAL
            var modal = \$('#modal');
            modal.find('.modal-body .title').html('{{ 'cocorico.search.invalidate.address' | trans({}, 'cocorico') }}');
            modal.modal('show');
        }


        function fillAddressFields(result) {
            var resultLocale = result[locale];
            var extendSearch = {{ extend_search|default('') ? 'true' : 'false' }};
            var \$zip = \$searchForm.find(\"#location_zip\");

            if (extendSearch) {
                //Google zip inconsistency: P
                //Resolve zip code changing between geocoding requests while extending search.
                var zip = \$zip.val();
                if (zip && resultLocale.postal_code) {
                    //Zip has changed
                    if (zip.substring(0, 2) != resultLocale.postal_code.substring(0, 2)) {
                        \$zip.val(zip.substring(0, 2));//We change zip code to the old value
                        return;
                    }
                }
            }

            \$searchForm.find(\"#page\").val(1);
            \$searchForm.find(\"#location_lat\").val(result.lat);
            \$searchForm.find(\"#location_lng\").val(result.lng);
            \$searchForm.find(\"#location_viewport\").val(result.viewport);
            \$searchForm.find(\"#location_addressType\").val(result.types);
            \$searchForm.find(\"#location_country\").val(resultLocale.country_short);
            \$searchForm.find(\"#location_area\").val(resultLocale.administrative_area_level_1);
            \$searchForm.find(\"#location_department\").val(resultLocale.administrative_area_level_2);
            \$searchForm.find(\"#location_city\").val(resultLocale.locality);
            \$zip.val(resultLocale.postal_code);
            \$searchForm.find(\"#location_route\").val(resultLocale.route);
            \$searchForm.find(\"#location_streetNumber\").val(resultLocale.street_number);
        }

        //Center modal dialog box
        \$('.modal').on('show.bs.modal', centerModal);
        \$(window).on(\"resize\", function () {
            \$('.modal:visible').each(centerModal);
        });
    });
</script>

{% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig'  with {
'auto_complete_elt': auto_complete_elt,
} only %}

{% include '@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig' only %}", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/js/_geocoding_js.html.twig");
    }
}
