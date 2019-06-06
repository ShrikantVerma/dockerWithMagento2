<?php

/* @CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig */
class __TwigTemplate_476de01329b36d231554f1e6df6da788014544c2b6bcdf6627af99a9354c5678 extends Twig_Template
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
        $__internal_b06961ddb1343b679d6e8f7a43bbd37e5eadc4d8bcd91a3f074bab7f2ba7e2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06961ddb1343b679d6e8f7a43bbd37e5eadc4d8bcd91a3f074bab7f2ba7e2ee->enter($__internal_b06961ddb1343b679d6e8f7a43bbd37e5eadc4d8bcd91a3f074bab7f2ba7e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig"));

        $__internal_62cfc6daeeff91376c4959c0c8a7ab0e1e7829d5f33a50ce4670b94d5f0f9ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cfc6daeeff91376c4959c0c8a7ab0e1e7829d5f33a50ce4670b94d5f0f9ee9->enter($__internal_62cfc6daeeff91376c4959c0c8a7ab0e1e7829d5f33a50ce4670b94d5f0f9ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig"));

        // line 6
        echo "

";
        // line 9
        $context["user_address"] = false;
        // line 10
        $context["user"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array());
        // line 11
        if (( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 12
            echo "    ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "addresses", array()))) {
                // line 13
                echo "        ";
                $context["address"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "addresses", array()), "first", array());
                // line 14
                echo "        ";
                $context["user_address"] = array("zip" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->getSourceContext()); })()), "zip", array()), "city" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->getSourceContext()); })()), "city", array()), "country" => $this->env->getExtension('Cocorico\CoreBundle\Twig\CountryExtension')->countryNameFilter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->getSourceContext()); })()), "country", array())));
                // line 15
                echo "    ";
            }
        }
        // line 17
        echo "
<script>
    \$(function () {
        var html5GeoLocTimeout;
        var userLocation = [];
        guessUserLocation();

        function guessUserLocation() {
            var userAddress = ";
        // line 25
        echo json_encode((isset($context["user_address"]) || array_key_exists("user_address", $context) ? $context["user_address"] : (function () { throw new Twig_Error_Runtime('Variable "user_address" does not exist.', 25, $this->getSourceContext()); })()));
        echo ";

            if (userAddress && userAddress.zip && userAddress.country) {//Database user address
                userLocation = {
                    \"location\": userAddress.zip,
                    \"country\": userAddress.country
                };
                fillAddressField(userLocation);
            } else if (navigator.geolocation) {//HTML5 geolocation
                var timeout = 10000;
                html5GeoLocTimeout = setTimeout(html5GeoLocError, timeout);

                navigator.geolocation.getCurrentPosition(html5GeoLocSuccess, html5GeoLocError, {
                    enableHighAccuracy: true, timeout: timeout, maximumAge: 3600000
                });
            } else {//IP Geolocation
                geoLocateIP();
            }
        }

        /**
         * Try to geo locate user through HTML5 geolocation
         *
         * @param pos
         */
        function html5GeoLocSuccess(pos) {
            clearTimeout(html5GeoLocTimeout);
            var position = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
            var location = false;
            var country = false;

            //Reverse geocoding
            geocoder.geocode({'latLng': position}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var result = results[0];
                    if (result) {
                        \$.each(result.address_components, function (index, object) {
                            \$.each(object.types, function (index, name) {
                                if (name == \"postal_code\" || name == \"administrative_area_level_2_short\") {
                                    if (name == \"postal_code\") {
                                        location = object.long_name;
                                    } else {
                                        var area2 = object.long_name;
                                        if (area2 && area2.match(/\\d+/g) != null) {//is it number in it?
                                            if (!location) {
                                                location = object.long_name;
                                            }
                                        }
                                    }
                                } else if (name == \"country\") {
                                    country = object.long_name;
                                }

                                if (location && country) return false;
                            });
                            if (location && country) return false;
                        });

                        userLocation = {
                            \"location\": location,
                            \"country\": country
                        };
                        fillAddressField(userLocation);
                    }
                }//status OK
            });//geocoder.geocode
        }

        /**
         * HTML5 geolocation is not possible
         *
         * @param error
         */
        function html5GeoLocError(error) {
            clearTimeout(html5GeoLocTimeout);
            geoLocateIP();//IP Geolocation
        }

        /**
         * Geo locate user through his IP
         */
        function geoLocateIP() {
            geoLocateIPFunc(function (location) {
                userLocation = {
                    \"location\": location.cityName, //location.zipCode,
                    \"country\": location.countryName
                };
                fillAddressField(userLocation);
            });
        }

        /**
         * Fill address field after guessing user address
         *
         * @param userLocation
         */
        function fillAddressField(userLocation) {
            var \$location = \$(\"#location\");
            if (!\$location.val()) {
                if (userLocation.location) {
                    \$location.val(userLocation.location + \", \");
                }

                if (userLocation.country) {
                    \$location.val(\$location.val() + userLocation.country);
                }
            }
        }
    });
</script>
";
        
        $__internal_b06961ddb1343b679d6e8f7a43bbd37e5eadc4d8bcd91a3f074bab7f2ba7e2ee->leave($__internal_b06961ddb1343b679d6e8f7a43bbd37e5eadc4d8bcd91a3f074bab7f2ba7e2ee_prof);

        
        $__internal_62cfc6daeeff91376c4959c0c8a7ab0e1e7829d5f33a50ce4670b94d5f0f9ee9->leave($__internal_62cfc6daeeff91376c4959c0c8a7ab0e1e7829d5f33a50ce4670b94d5f0f9ee9_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 25,  48 => 17,  44 => 15,  41 => 14,  38 => 13,  35 => 12,  33 => 11,  31 => 10,  29 => 9,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Guess user location from database user address, geolocation ip or html5 geolocation
If a user location is found then fill search address field with this value
#}
{% trans_default_domain 'cocorico_geo' %}


{#Auto fill location search field#}
{% set user_address = false %}
{% set user = app.user %}
{% if user is not null and is_granted(\"IS_AUTHENTICATED_FULLY\") %}
    {% if user.addresses|length %}
        {% set address = user.addresses.first %}
        {% set user_address = { 'zip': address.zip, 'city': address.city, 'country': address.country|country_name } %}
    {% endif %}
{% endif %}

<script>
    \$(function () {
        var html5GeoLocTimeout;
        var userLocation = [];
        guessUserLocation();

        function guessUserLocation() {
            var userAddress = {{ user_address| json_encode | raw  }};

            if (userAddress && userAddress.zip && userAddress.country) {//Database user address
                userLocation = {
                    \"location\": userAddress.zip,
                    \"country\": userAddress.country
                };
                fillAddressField(userLocation);
            } else if (navigator.geolocation) {//HTML5 geolocation
                var timeout = 10000;
                html5GeoLocTimeout = setTimeout(html5GeoLocError, timeout);

                navigator.geolocation.getCurrentPosition(html5GeoLocSuccess, html5GeoLocError, {
                    enableHighAccuracy: true, timeout: timeout, maximumAge: 3600000
                });
            } else {//IP Geolocation
                geoLocateIP();
            }
        }

        /**
         * Try to geo locate user through HTML5 geolocation
         *
         * @param pos
         */
        function html5GeoLocSuccess(pos) {
            clearTimeout(html5GeoLocTimeout);
            var position = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
            var location = false;
            var country = false;

            //Reverse geocoding
            geocoder.geocode({'latLng': position}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var result = results[0];
                    if (result) {
                        \$.each(result.address_components, function (index, object) {
                            \$.each(object.types, function (index, name) {
                                if (name == \"postal_code\" || name == \"administrative_area_level_2_short\") {
                                    if (name == \"postal_code\") {
                                        location = object.long_name;
                                    } else {
                                        var area2 = object.long_name;
                                        if (area2 && area2.match(/\\d+/g) != null) {//is it number in it?
                                            if (!location) {
                                                location = object.long_name;
                                            }
                                        }
                                    }
                                } else if (name == \"country\") {
                                    country = object.long_name;
                                }

                                if (location && country) return false;
                            });
                            if (location && country) return false;
                        });

                        userLocation = {
                            \"location\": location,
                            \"country\": country
                        };
                        fillAddressField(userLocation);
                    }
                }//status OK
            });//geocoder.geocode
        }

        /**
         * HTML5 geolocation is not possible
         *
         * @param error
         */
        function html5GeoLocError(error) {
            clearTimeout(html5GeoLocTimeout);
            geoLocateIP();//IP Geolocation
        }

        /**
         * Geo locate user through his IP
         */
        function geoLocateIP() {
            geoLocateIPFunc(function (location) {
                userLocation = {
                    \"location\": location.cityName, //location.zipCode,
                    \"country\": location.countryName
                };
                fillAddressField(userLocation);
            });
        }

        /**
         * Fill address field after guessing user address
         *
         * @param userLocation
         */
        function fillAddressField(userLocation) {
            var \$location = \$(\"#location\");
            if (!\$location.val()) {
                if (userLocation.location) {
                    \$location.val(userLocation.location + \", \");
                }

                if (userLocation.country) {
                    \$location.val(\$location.val() + userLocation.country);
                }
            }
        }
    });
</script>
", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_user_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/js/_geocoding_user_js.html.twig");
    }
}
