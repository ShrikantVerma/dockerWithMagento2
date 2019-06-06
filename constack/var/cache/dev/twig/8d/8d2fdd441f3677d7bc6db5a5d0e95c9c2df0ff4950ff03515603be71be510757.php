<?php

/* @CocoricoGeo/Common/js/_geocoding_js.html.twig */
class __TwigTemplate_16aab6894c59b32565aae4c37b10109b9dcd8eacc6ce1c2f3aa94acff1f6d518 extends Twig_Template
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
        $__internal_3fc3f43b91c6b0b630af28e4700549689b6c35e00353977ffdfa475c1343cdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc3f43b91c6b0b630af28e4700549689b6c35e00353977ffdfa475c1343cdfb->enter($__internal_3fc3f43b91c6b0b630af28e4700549689b6c35e00353977ffdfa475c1343cdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoGeo/Common/js/_geocoding_js.html.twig"));

        $__internal_16c334e28baeabe03595bd33240a27e0a1b45e0c9ababe1553a167de321e6909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c334e28baeabe03595bd33240a27e0a1b45e0c9ababe1553a167de321e6909->enter($__internal_16c334e28baeabe03595bd33240a27e0a1b45e0c9ababe1553a167de321e6909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoGeo/Common/js/_geocoding_js.html.twig"));

        // line 9
        echo "
";
        // line 10
        $context["gKey"] = (((isset($context["googlePlaceAPIKey"]) || array_key_exists("googlePlaceAPIKey", $context) ? $context["googlePlaceAPIKey"] : (function () { throw new Twig_Error_Runtime('Variable "googlePlaceAPIKey" does not exist.', 10, $this->getSourceContext()); })())) ? (("&key=" . (isset($context["googlePlaceAPIKey"]) || array_key_exists("googlePlaceAPIKey", $context) ? $context["googlePlaceAPIKey"] : (function () { throw new Twig_Error_Runtime('Variable "googlePlaceAPIKey" does not exist.', 10, $this->getSourceContext()); })()))) : (""));
        // line 11
        echo "
<script type=\"text/javascript\"
        src=\"//maps.googleapis.com/maps/api/js?libraries=places&language=";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo (isset($context["gKey"]) || array_key_exists("gKey", $context) ? $context["gKey"] : (function () { throw new Twig_Error_Runtime('Variable "gKey" does not exist.', 13, $this->getSourceContext()); })());
        echo "\">
</script>
<script type=\"text/javascript\"
        src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/gmap-infobox.js"), "html", null, true);
        echo "\">
</script>
<script type=\"text/javascript\"
        src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/gmap-marker-clusterer.js"), "html", null, true);
        echo "\">
</script>
<script type=\"text/javascript\"
        src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/gmap-marker-with-label.js"), "html", null, true);
        echo "\">
</script>
<style>
    .gmap-marker-label {
        color: #fff;
        font-size: 16px;
    }
</style>
<script>
    var geocoder, map, marker, autoComplete, latlng, boundingBox, markerDraggable;
    var displayMarker = ";
        // line 32
        echo ((( !array_key_exists("display_marker", $context) || (isset($context["display_marker"]) || array_key_exists("display_marker", $context) ? $context["display_marker"] : (function () { throw new Twig_Error_Runtime('Variable "display_marker" does not exist.', 32, $this->getSourceContext()); })()))) ? ("true") : ("false"));
        echo ";
    var markers = {};//Markers on the listing result map
    var markerCluster;//Markers cluster on the listing result map
    var mapDragMode = false; // True when the user drag or zoom the map on listing result page
    var mapIsLoaded = false;//True when the map has been loaded the first time
    var countriesEnabled = ";
        // line 37
        echo json_encode((isset($context["cocorico_listing_countries"]) || array_key_exists("cocorico_listing_countries", $context) ? $context["cocorico_listing_countries"] : (function () { throw new Twig_Error_Runtime('Variable "cocorico_listing_countries" does not exist.', 37, $this->getSourceContext()); })()));
        echo ";

    //Functions
    var initializeGMapFunc, geocodeFunc, geocodeJSONFunc, reverseGeocodeFunc, formatGeocodingResultFunc,
        translateGeocodeResultFunc, refreshMapFunc, refreshMapJSONFunc, setMarkersFunc, extendSearchLocationFunc,
        geoLocateIPFunc;

    \$(function () {
\t//# DLEVASSEUR CHANGE DEFAULT VALUES
        var maxZoom = 12;
        var defaultLat = '";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((array_key_exists("default_lat", $context)) ? (_twig_default_filter((isset($context["default_lat"]) || array_key_exists("default_lat", $context) ? $context["default_lat"] : (function () { throw new Twig_Error_Runtime('Variable "default_lat" does not exist.', 47, $this->getSourceContext()); })()), 46.227638)) : (46.227638)), "js"), "html", null, true);
        echo "';
        var defaultLng = '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((array_key_exists("default_lng", $context)) ? (_twig_default_filter((isset($context["default_lng"]) || array_key_exists("default_lng", $context) ? $context["default_lng"] : (function () { throw new Twig_Error_Runtime('Variable "default_lng" does not exist.', 48, $this->getSourceContext()); })()), 2.213749)) : (2.213749)), "js"), "html", null, true);
        echo "';
        var defaultZoom = ";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((array_key_exists("default_zoom", $context)) ? (_twig_default_filter((isset($context["default_zoom"]) || array_key_exists("default_zoom", $context) ? $context["default_zoom"] : (function () { throw new Twig_Error_Runtime('Variable "default_zoom" does not exist.', 49, $this->getSourceContext()); })()), 4)) : (4)), "js"), "html", null, true);
        echo ";
\t//#END
        var mapElt = \$(\"";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("map_elt", $context)) ? (_twig_default_filter((isset($context["map_elt"]) || array_key_exists("map_elt", $context) ? $context["map_elt"] : (function () { throw new Twig_Error_Runtime('Variable "map_elt" does not exist.', 51, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\");
        var autoCompleteElt = \$(\"";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("auto_complete_elt", $context)) ? (_twig_default_filter((isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 52, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\");
        var markerDraggable = ";
        // line 53
        echo ((( !array_key_exists("marker_draggable", $context) ||  !(isset($context["marker_draggable"]) || array_key_exists("marker_draggable", $context) ? $context["marker_draggable"] : (function () { throw new Twig_Error_Runtime('Variable "marker_draggable" does not exist.', 53, $this->getSourceContext()); })()))) ? ("false") : ("true"));
        echo ";
        var ipInfoDbAPIKey = \"";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("ipInfoDbAPIKey", $context)) ? (_twig_default_filter((isset($context["ipInfoDbAPIKey"]) || array_key_exists("ipInfoDbAPIKey", $context) ? $context["ipInfoDbAPIKey"] : (function () { throw new Twig_Error_Runtime('Variable "ipInfoDbAPIKey" does not exist.', 54, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\";

        mapElt = mapElt.length ? mapElt[0] : false;
        autoCompleteElt = autoCompleteElt.length ? autoCompleteElt[0] : false;

        /**
         * Initialize Google map
         */
        initializeGMapFunc = function () {
            geocoder = new google.maps.Geocoder();

            if (mapElt) {
                latlng = new google.maps.LatLng(defaultLat, defaultLng);
                var mapOptions = {
\t\t\t\t\tmaxZoom: maxZoom,\t\t\t 
                    zoom: defaultZoom,
                    center: latlng,
                    scrollwheel: false,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP
                    }
                };
                map = new google.maps.Map(mapElt, mapOptions);

                if (displayMarker) {
                    marker = new google.maps.Marker({
                        map: map,
                        position: latlng,
                        draggable: markerDraggable,
                        zIndex: 0
                    });

                    if (markerDraggable) {
                        google.maps.event.addListener(marker, 'dragend', function () {
                            //Create and trigger marker dragend event
                            \$.event.trigger({
                                type: \"markerDragendEvt\",
                                markerPosition: marker.getPosition()
                            });
                        });
                    }
                }

                handleMapRefresh();
            }

            if (autoCompleteElt) {
                autoComplete = new google.maps.places.Autocomplete(
                    autoCompleteElt,
                    {types: ['geocode']}
                );

                if (countriesEnabled.length) {
                    autoComplete.setComponentRestrictions(
                        {'country': countriesEnabled}
                    );
                }
            }


        };
        initializeGMapFunc();


        /**
         * Geocoding
         *
         * @param address
         * @param region
         * @param translate
         * @param refreshMap
         *
         * @returns object
         */
        geocodeFunc = function (address, region, translate, refreshMap) {
            var deferred = new \$.Deferred();

            if (!address) {
                deferred.reject(\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("geo.location.address_missing", array(), "cocorico_geo"), "html", null, true);
        echo "\");
            } else {
                var geocodeParams = {};
                geocodeParams['address'] = address;
                geocodeParams['region'] = (typeof region !== 'undefined' && region) ? region : '';

                geocoder.geocode(geocodeParams, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var result = results[0];
//                        console_log(result);
                        //Refresh Map
                        if (typeof refreshMap !== 'undefined' && refreshMap == true) {
                            var geometry = result.geometry;
                            refreshMapFunc(geometry.viewport, geometry.location.lat(), geometry.location.lng());
                        }

                        //Format geocoding
                        var formattedResult = formatGeocodingResultFunc(result);

                        //Translate geocoding
                        if (typeof translate !== 'undefined' && translate == true) {
                            translateGeocodeResultFunc(formattedResult.lat, formattedResult.lng).done(
                                function (resultsTranslated) {
//                                        console_log(\"resultsTranslated\", resultsTranslated);
//                                        console_log(\"formattedResult\", formattedResult);
                                    deferred.resolve(
                                        \$.extend(formattedResult, resultsTranslated)
                                    );
                                }
                            );
                        } else {
                            deferred.resolve(formattedResult);
                        }
                    } else {
                        deferred.reject(\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("geo.location.no_result", array(), "cocorico_geo"), "html", null, true);
        echo "\");
                    }
                });
            }

            return deferred.promise();
        };

        /**
         * Reverse Geocoding
         *
         * @param position
         * @returns object
         */
        reverseGeocodeFunc = function (position) {
            var deferred = new \$.Deferred();

            if (!position) {
                deferred.reject(\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("geo.location.address_missing", array(), "cocorico_geo"), "html", null, true);
        echo "\");
            } else {
                geocoder.geocode({'latLng': position}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var result = results[0];
                        if (result) {
                            //Format geocoding
                            var formattedResult = formatGeocodingResultFunc(result);

                            //Translate geocoding
                            translateGeocodeResultFunc(formattedResult.lat, formattedResult.lng).done(
                                function (resultsTranslated) {
                                    deferred.resolve(
                                        \$.extend(formattedResult, resultsTranslated)
                                    );
                                }
                            );
                        } else {
                            deferred.reject(\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("geo.location.no_result", array(), "cocorico_geo"), "html", null, true);
        echo "\");
                        }
                    } else {
                        deferred.reject(\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("geo.location.no_result", array(), "cocorico_geo"), "html", null, true);
        echo "\");
                    }
                });
            }

            return deferred.promise();
        };

        /**
         * Format Geocoding Result
         *
         * @param result
         * @returns object
         */
        formatGeocodingResultFunc = function (result) {
            if (!result) {
                return {};
            }
            var data = {}, geometry = result.geometry, viewport = geometry.viewport, bounds = geometry.bounds;

            data[locale] = {};
            ";
        // line 227
        echo "            \$.each(result.address_components, function (index, object) {
                //var name = object.types[0];
                \$.each(object.types, function (index, name) {
                    data[locale][name] = object.long_name;
                    data[locale][name + \"_short\"] = object.short_name;
                });
            });

            \$.extend(data, {
                formatted_address: result.formatted_address,
                types: result.types,
                location_type: geometry.location_type || \"PLACES\",
                viewport: viewport,
                bounds: bounds,
                location: geometry.location,
                lat: geometry.location.lat(),
                lng: geometry.location.lng()
            });

            return data;
        };

        /**
         * Translate Geocode Result
         *
         * @param lat
         * @param lng
         * @returns {*}
         */
        translateGeocodeResultFunc = function translateGeoLocations(lat, lng) {
            var promises = [];
            var dataT = {};

            \$.each(locales, function (index, lang) {
                if (lang != locale) {
                    dataT[lang] = {};
                    var deferred = new \$.Deferred();
                    var url = \"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_geo_reverse_geocoding", array("lat" => "0.01", "lng" => "0.02", "lang" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 264, $this->getSourceContext()); })()), "request", array()), "locale", array()))), "html", null, true);
        echo "\";
                    url = url.replace('0.01', lat);
                    url = url.replace('0.02', lng);
                    url = url.replace('";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 267, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "', lang);
                    url += \"?token=";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("rev_geo"), "html", null, true);
        echo "\";
                    \$.getJSON(
                        url,
                        function (queryResult) {

                            if (queryResult.status == 'OK' && queryResult.results.length) {
                                var resultsT = queryResult.results;
                                var resultT = resultsT[0];

                                \$.each(resultT.address_components, function (index, objectT) {
                                    if (objectT) {
                                        \$.each(objectT.types, function (index, name) {
                                            dataT[lang][name] = objectT.long_name;
                                            dataT[lang][name + \"_short\"] = objectT.short_name;
\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t 
                                        });
                                    }
                                });
                                deferred.resolve(dataT);
                            } else {
                                //datasT[lang]=null;
                                ";
        // line 291
        echo "                            }
                        }).fail(function () {

                    });
                    promises.push(deferred);
                }
            });

            return \$.when.apply(undefined, promises).promise();
        };

        /**
         * Refresh map
         *
         * @param viewport
         * @param lat
         * @param lng
         */
        refreshMapFunc = function (viewport, lat, lng) {
            if (mapElt) {
                if (displayMarker) {
                    marker.setVisible(false);
                }

                // If the place has a geometry, then present it on a map.
                if (viewport) {
                    var ne, sw;
                    if (typeof viewport === 'string') {
                        var viewportObject = viewportStringToArray(viewport);
                        if (viewportObject) {
                            ne = new google.maps.LatLng(viewportObject.ne.lat, viewportObject.ne.lng);
                            sw = new google.maps.LatLng(viewportObject.sw.lat, viewportObject.sw.lng);
                            viewport = new google.maps.LatLngBounds(sw, ne);
                        } else {
                            refreshMapJSONFunc(\$(autoCompleteElt).val());
                        }
                    } else {
                        ne = viewport.getNorthEast();
                        sw = viewport.getSouthWest();
                    }

                    if (!mapDragMode) {
                        map.fitBounds(viewport);
                        //fit bounds happens asynchronously, so we have to wait for a bounds_changed event before setting zoom works.
                        google.maps.event.addListenerOnce(map, 'bounds_changed', function (event) {
//                        console_log('bounds_changed' + getBoundsZoomLevel(ne, sw, mapElt));
                            this.setZoom(getBoundsZoomLevel(ne, sw, mapElt));
//                            addNeSwMarkers();
                        });
                    }
                    drawZone(ne, sw);

                    if (displayMarker) {
                        var location = new google.maps.LatLng(lat, lng);
                        marker.setPosition(location);
                        marker.setVisible(true);
                    }
                } else {
                    //Try to get viewport through map api json
                    refreshMapJSONFunc(\$(autoCompleteElt).val());
                }
            }
        };

        /**
         * Add markers to viewport coordinates
         */
        function addNeSwMarkers() {
            var currentMapViewport = map.getBounds();

            var ne2 = currentMapViewport.getNorthEast();
            latlng = new google.maps.LatLng(ne2.lat(), ne2.lng());

            var markerA = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: false,
                zIndex: 0
            });
            markerA.setVisible(true);

            var sw2 = currentMapViewport.getSouthWest();
            latlng = new google.maps.LatLng(sw2.lat(), sw2.lng());
            var markerB = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: false,
                zIndex: 0
            });
            markerB.setVisible(true);
        }


        /**
         * Extend search location
         *
         * @param parentLocationAddress
         * @param parentLocationType
         * @param modalId
         * @param modalMessage
         */
        extendSearchLocationFunc = function (parentLocationAddress, parentLocationType, modalId, modalMessage) {
            if (autoCompleteElt && parentLocationAddress && parentLocationType) {
                var modal = \$(modalId);
                if (modal.length) {
                    modal.find('.modal-body .title').html(modalMessage);
                    modal.modal('show');
                    //Start new search
                    var extSId = setTimeout(function () {
                        \$(autoCompleteElt).val(parentLocationAddress);
                        var searchForm = \$(autoCompleteElt).closest(\"form\");
                        searchForm.submit();
                    }, 3000);

                    //Stop search on modal close
                    modal.on('hidden.bs.modal', function () {
                        clearTimeout(extSId);
                    });
                }
            } else {
                \$('#location_addressType').val();
            }
        };


        /**
         * Convert viewport string to array
         *
         * @param viewport
         */
        function viewportStringToArray(viewport) {
            if (!viewport) {
                return null;
            }

            var matches = viewport.match(/\\(\\((.*?)\\), \\((.*?)\\)\\)/);
            //console_log('viewportStringToArray', matches);

            if (matches.length == 3) {
                var sw = null;
                var ne = null;

                var coordinate = matches[1].split(',');

                if (coordinate.length == 2) {
                    var latitude = parseFloat(coordinate[0].trim());
                    var longitude = parseFloat(coordinate[1].trim());

                    sw = {'lat': latitude, 'lng': longitude};
                }

                coordinate = matches[2].split(',');
                if (coordinate.length == 2) {
                    latitude = parseFloat(coordinate[0].trim());
                    longitude = parseFloat(coordinate[1].trim());

                    ne = {'lat': latitude, 'lng': longitude};
                }

                if (sw && ne) {
                    return {'sw': sw, 'ne': ne};
                }
            }

            return null;
        }

        /**
         * Refresh map json result
         *
         * @param address
         */
        refreshMapJSONFunc = function (address) {
            \$.when(
                geocodeJSONFunc(address)
            ).then(
                function (results) {
                    if (results) {
                        var result = results[0];
                        var geometry = result.geometry;

                        if (geometry.viewport) {
                            if (!mapDragMode) {
                                var ne = geometry.viewport.northeast;
                                var sw = geometry.viewport.southwest;
                                ne = new google.maps.LatLng(ne.lat, ne.lng);
                                sw = new google.maps.LatLng(sw.lat, sw.lng);
                                var viewport = new google.maps.LatLngBounds(sw, ne);

                                map.fitBounds(viewport);
                                map.setZoom(getBoundsZoomLevel(ne, sw, mapElt));
                                drawZone(ne, sw);\t\t\t\t\t\t\t\t\t\t\t\t
                            }
                        } else {
                            map.setCenter(geometry.location);
                            map.setZoom(17);
                        }
                        if (displayMarker) {
                            marker.setPosition(geometry.location);
                            marker.setVisible(true);
                        }

                    }
                }
            );
        };

        /**
         * Json geocoding
         *
         * @param address
         */
        geocodeJSONFunc = function (address) {
            var deferred = new \$.Deferred();
            \$.getJSON(
                \"//maps.googleapis.com/maps/api/geocode/json?address=\" + address + \"&sensor=false&language=\" + \"";
        // line 506
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 506, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo (isset($context["gKey"]) || array_key_exists("gKey", $context) ? $context["gKey"] : (function () { throw new Twig_Error_Runtime('Variable "gKey" does not exist.', 506, $this->getSourceContext()); })());
        echo "\",
                function (queryResult) {
                    if (queryResult.status == 'OK' && queryResult.results.length) {
                        deferred.resolve(queryResult.results);
                    } else {
                        deferred.reject(false);
                    }
                });
            return deferred.promise();
        };


        /**
         * Set markers on map.
         *
         * @param markersGroupedByLocation associative array. First dimension is the lat-lng and can contain multiple listings
         * with same locations
         *      Ex :
         *      markersGroupedByLocation[\"12.789-0.4589\"]=> array(
         *          0 => array(
         *                  'title' => 'Title Marker',
         *                  'price' => '1000',
         *                  ...
         *                  ),
         *          1 => array(
         *                  'title' => 'Other Title Marker',
         *                  'price' => '200',
         *                  ...
         *                  ),
         *         ...
         *      )
         */
        ";
        // line 539
        echo "        setMarkersFunc = function (markersGroupedByLocation) {
            ";
        // line 541
        echo "            var markerTemplate = \$('.info-box-tpl').find('ul').html();

            var image = {
                url: '/images/pin.png',
\t\t\t\t//#DLEVASSEUR CHANGE VALUES 20,32 #}
                size: new google.maps.Size(40,45)
            };

            //Compute InfoBox Y Offset and height
            var infoBoxHeight = 270;
            var infoBoxWidth = 275;
            var offsetY = -infoBoxHeight - 54;

            //Remove markers before adding them
            \$.each(markers, function (index, marker) {
                marker.setMap(null);
                google.maps.event.clearListeners(marker, 'click');
            });
            markers = {};

            //Construct InfoBox for each marker with different location
            \$.each(markersGroupedByLocation, function (cptMarker, markersForOneLocation) {//cptMarker is of form lat-lng
                var markerData = getMarkerData(markersForOneLocation);
                var nbMarkersWithSameLocation = markerData[\"nbMarkersWithSameLocation\"];
                var listingsIdWithSameLocation = markerData[\"listingsIdWithSameLocation\"];
                var infoBoxContent = markerData[\"infoBoxContent\"];

                var \$popupElt = \$(infoBoxContent);
                \$popupElt.find(\"[data-id=info-box]\").css(\"height\", infoBoxHeight + \"px\");

                //Marker
                var firstMarker = markersForOneLocation[0];
                var myLatLng = new google.maps.LatLng(firstMarker['lat'], firstMarker['lng']);
                var marker = new MarkerWithLabel({
                    icon: image,
                    position: myLatLng,
                    zIndex: firstMarker['zindex'],
                    opacity: firstMarker['opacity'],
                    animation: google.maps.Animation.DROP,
                    map: map,
                    labelContent: nbMarkersWithSameLocation.toString(),
\t\t\t\t\t//#DLEVASSEUR CHANGE VALUES 7,28 #}
                    labelAnchor: new google.maps.Point(11, 29),//to change if marker icon change
                    labelClass: \"map-label\"
                });

                //InfoBox
                marker.infobox = new InfoBox({
                    content: \$popupElt[0],//DOM element
                    disableAutoPan: false,
                    maxWidth: infoBoxWidth,
                    pixelOffset: new google.maps.Size(-Math.round(infoBoxWidth / 2), offsetY),
                    zIndex: null,
                    boxStyle: {
                        width: infoBoxWidth + \"px\"
                    },
                    closeBoxURL: \"\",
                    infoBoxClearance: new google.maps.Size(1, 1)
                });
                markers[cptMarker] = marker;

                ////////EVENTS///////
                //Close InfoBox
                \$popupElt.find('.close').on('click', function (e) {
                    e.preventDefault();
                    marker.infobox.close();
                    return false;
                });

                //Open InfoBox on marker click
                google.maps.event.addListener(marker, 'click', (function (cptMarker, nbMarkersWithSameLocation) {
                    return function () {
                        //Close all info box
                        for (var m in markers) {
                            if (markers.hasOwnProperty(m)) {
                                markers[m].infobox.close();
                            }
                        }

                        //Open info box for current marker
                        markers[cptMarker].infobox.open(map, this);

                        //Add slider and pan map
                        setTimeout(function () {
                            //Load images on marker click
                            var \$infoBoxImages = \$popupElt.find(\".img-holder img\");
                            \$.each(\$infoBoxImages, function (i, infoBoxImage) {
                                \$(infoBoxImage).attr(\"src\", \$(infoBoxImage).data(\"src\"));
                            });

                            addSlider(nbMarkersWithSameLocation);
                            map.panTo(myLatLng);
                            map.panBy(0, Math.round(offsetY / 2));
                        }, 5);
                    }
                })(cptMarker, nbMarkersWithSameLocation));

                //Overlay corresponding marker or cluster on listing mouseover
                \$.each(listingsIdWithSameLocation, function (i, listingId) {
                    \$(\"[data-lid=\" + listingId + \"]\").on('mouseenter mouseleave', function (e) {
                        try {
                            if (e.type == 'mouseenter') {
                                marker.labelClass = \"map-label-overlay\";
                                if (marker.cluster) {//setted in clusteringend event below
                                    marker.cluster.clusterIcon_.div_.className = 'cluster cluster-overlay';
                                }
                            } else {
                                marker.labelClass = \"map-label\";
                                if (marker.cluster) {
                                    marker.cluster.clusterIcon_.div_.className = 'cluster';
                                }
                            }
                            marker.label.draw();
                        } catch (e) {
                            //todo: know why projection is null
                        }
                    });
                });

            });//end loop of info boxes construction

            /**
             * Extend map to fit bounds on visible markers if we are not in map dragging mode
             */
            google.maps.event.addListenerOnce(map, 'idle', function () {
                if (!mapDragMode) {
                    var viewport = this.getBounds();
                    var fitBounds = false;
                    for (var m in markers) {
                        if (markers.hasOwnProperty(m)) {
                            if (!viewport.contains(markers[m].getPosition())) {
                                viewport = viewport.extend(markers[m].getPosition());
                                fitBounds = true;
                            }
                        }
                    }
                    if (fitBounds) {
                        map.fitBounds(viewport);
                    }
                }

                mapIsLoaded = true;//Map has been loaded .
            });

            /**
             * Generate info box content for each marker
             * Some markers can have same locations. In this case info box marker are rendered as slider
             *
             */
            function getMarkerData(markersForOneLocation) {
                var infoBoxContent = '';
                var nbMarkersWithSameLocation = 0;
                var listingsIdWithSameLocation = [];

                \$.each(markersForOneLocation, function (i, marker) {
                    var tmpContent = markerTemplate.replace('%title%', marker['title']);\t\t\t\t\t\t\t\t\t\t\t\t\t  
                    tmpContent = tmpContent.replace('%data-src%', marker['image']);
                    tmpContent = tmpContent.replace('%price%', marker['price']);
                    tmpContent = tmpContent.replace('%certified%', marker['certified']);
                    tmpContent = tmpContent.replace('%url%', marker['url']);
                    tmpContent = tmpContent.replace('%category%', marker['category']);
                    tmpContent = tmpContent.replace('%rating1%', marker['rating1']);
                    tmpContent = tmpContent.replace('%rating2%', marker['rating2']);
                    tmpContent = tmpContent.replace('%rating3%', marker['rating3']);
                    tmpContent = tmpContent.replace('%rating4%', marker['rating4']);
                    tmpContent = tmpContent.replace('%rating5%', marker['rating5']);

                    infoBoxContent = infoBoxContent + tmpContent;
                    nbMarkersWithSameLocation++;
                    listingsIdWithSameLocation.push(marker['id']);
                });
                ";
        // line 713
        echo "                infoBoxContent = \$('.info-box-wrapper').html().replace('%info_box_content%', infoBoxContent);

                return {
                    \"infoBoxContent\": infoBoxContent,
                    \"nbMarkersWithSameLocation\": nbMarkersWithSameLocation,
                    \"listingsIdWithSameLocation\": listingsIdWithSameLocation
                };
            }


            function addSlider(nbMarkersWithSameLocation) {
                var options = {
                    infinite: true,
                    arrows: false
                };

                if (nbMarkersWithSameLocation > 1) {
                    options = {
                        infinite: true,
                        arrows: true
                    };
                }
                \$(\".infoBox .popup\").unslider(options);
            }

            //Cluster
            //Remove cluster markers before adding them
            if (typeof markerCluster != 'undefined') {
                markerCluster.clearMarkers();
                markerCluster.repaint();
            }
            markerCluster = new MarkerClusterer(map, markers, {
\t\t\t//#DLEVASSEUR CHANGE VALUES 15 #}
                maxZoom: 10,
                gridSize: 30,
                styles: null,
                zoomOnClick: false,
                calculator: function (markers, numStyles) {
                    var index = 0;
                    var title = \"\";
                    var count = 0;
                    //Compute the number of markers in cluster including markers with same location
                    for (var marker in markers) {
                        if (markers.hasOwnProperty(marker)) {
                            count += parseInt(markers[marker].labelContent);
                        }
                    }
                    count = count.toString();

                    var dv = count;
                    while (dv !== 0) {
                        dv = parseInt(dv / 10, 10);
                        index++;
                    }

                    index = Math.min(index, numStyles);
                    return {
                        text: count,
                        index: index,
                        title: title
                    };
                }
            });

            //Override cluster click
            google.maps.event.addListener(markerCluster, 'click', function (cluster) {
                var mc = cluster.getMarkerClusterer();
                // Zoom into the cluster.
                var mz = mc.getMaxZoom();
                var theBounds = cluster.getBounds();
                mc.getMap().fitBounds(theBounds);
                // There is a fix for Issue 170 here:
                setTimeout(function () {
                    mc.getMap().fitBounds(theBounds);
\t\t\t\t\t//#DLEVASSEUR REMOVE ' #}
                    // Dont zoom beyond the max zoom level
                    if (mz !== null && (mc.getMap().getZoom() > mz)) {
                        mc.getMap().setZoom(mz + 1);
                    }
                }, 100);
            });

            //Associate each marker to its cluster to manage cluster overlay effect on listing mouseover
            google.maps.event.clearListeners(markerCluster, 'clusteringend');
            google.maps.event.addListener(markerCluster, 'clusteringend', function (e) {
                var clusters = this.getClusters();
                for (var i = 0; i < clusters.length; i++) {
                    for (var j = 0; j < clusters[i].markers_.length; j++) {
                        clusters[i].markers_[j].cluster = clusters[i];
                    }
                }
            });
        };//end setMarkersFunc

        /**
         * Geo localisation by ip through IPInfoDB
         * @see http://www.ipinfodb.com/ip_location_api_json.php
         *
         * @param callBack Callback function to call after ip geo location. Do not mix up with the url callback parameter
         */
        geoLocateIPFunc = function (callBack) {
            if (ipInfoDbAPIKey) {
                var countries = \$.parseJSON('";
        // line 815
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, json_encode($this->env->getExtension('Cocorico\CoreBundle\Twig\CountryExtension')->getCountriesTranslated(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 815, $this->getSourceContext()); })()), "request", array()), "locale", array()))), "js"), "html", null, true);
        echo "');
                var url = \"//api.ipinfodb.com/v3/ip-city/?key=\" + ipInfoDbAPIKey + \"&format=json\";

                try {
                    var geoCookie = Cookies.get('_cgl');
                    if (!geoCookie) {//if no cookie IPInfoDB is called
                        \$.ajax({
                            url: url,
                            cache: true,
                            async: true,
//                            jsonp: \"callback\",// Name of the callback parameter. Commented for security reasons
                            //#DLEVASSEUR REMOVE ' #}
\t\t\t\t\t\t\tdataType: \"json\",// Tell jQuery were expecting JSON and no more JSONP for security reasons
                            success: function (location) {
                                if (location.statusCode == 'OK') {
                                    location.countryName = countries[location.countryCode];//country name translated
                                    Cookies.set('_cgl', JSON.stringify(location), {expires: 1, path: '/'});//set geo cookie
                                    callBack(location);
                                }
                            },
                            error: function (e) {
                                //console_log(e.message);
                            }
                        });
                    } else {//Cookie geo value is used instead
                        callBack(JSON.parse(geoCookie));
                    }
                } catch (e) {
                    //console_log(e);
                }
            }
        };

        /**
         * Guess best zoom
         *
         * @param ne
         * @param sw
         * @param mapElt
         * @returns {number}
         */
        function getBoundsZoomLevel(ne, sw, mapElt) {

            var \$mapDiv = \$(mapElt);
            var mapDim = {height: \$mapDiv.height(), width: \$mapDiv.width()};
           //#DLEVASSEUR CHANGE VALUES 256,256 #}
            var WORLD_DIM = {height: 64, width: 64};
\t\t\t//#DLEVASSEUR CHANGE VALUES 21 #}
            var ZOOM_MAX = 10;

            function latRad(lat) {
                var sin = Math.sin(lat * Math.PI / 180);
                var radX2 = Math.log((1 + sin) / (1 - sin)) / 2;
                return Math.max(Math.min(radX2, Math.PI), -Math.PI) / 2;
            }

            function zoom(mapPx, worldPx, fraction) {
                return Math.floor(Math.log(mapPx / worldPx / fraction) / Math.LN2);
            }


            var latFraction = (latRad(ne.lat()) - latRad(sw.lat())) / Math.PI;

            var lngDiff = ne.lng() - sw.lng();
            var lngFraction = ((lngDiff < 0) ? (lngDiff + 360) : lngDiff) / 360;

            var latZoom = zoom(mapDim.height, WORLD_DIM.height, latFraction);
            var lngZoom = zoom(mapDim.width, WORLD_DIM.width, lngFraction);

//            console_log('getBoundsZoomLevel > return', Math.min(latZoom, lngZoom, ZOOM_MAX));

            return Math.min(latZoom, lngZoom, ZOOM_MAX);
        }

        /**
         * Draw zone on map
         *
         * @param ne
         * @param sw
         */
        function drawZone(ne, sw) {
            var strokeOpacity = 0;

            ";
        // line 898
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 898, $this->getSourceContext()); })()), "environment", array()) == "dev")) {
            // line 899
            echo "            strokeOpacity = 0.5;
            ";
        }
        // line 901
        echo "
            var boundingBoxPoints = [
                ne, new google.maps.LatLng(ne.lat(), sw.lng()),
                sw, new google.maps.LatLng(sw.lat(), ne.lng()), ne
            ];

            if (boundingBox) {
                boundingBox.setMap(null);
            }

            boundingBox = new google.maps.Polyline({
                path: boundingBoxPoints,
                strokeColor: '#000',
                strokeOpacity: strokeOpacity,
                strokeWeight: 1
            });
            boundingBox.setMap(map);
        }


        /**
         * Map refresh
         */
        function handleMapRefresh() {
            //Map refresh on tabs shown
            \$('a[href=\"#map\"][data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                resizeMap();
            });

            //Map refresh on resize and orientation change
            google.maps.event.addDomListener(window, \"orientationchange\", function () {
                resizeMap();
            });

            google.maps.event.addDomListener(window, \"resize\", function () {
                resizeMap();
            });
        }

        function resizeMap() {
            var center = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        }
    });

</script>
";
        
        $__internal_3fc3f43b91c6b0b630af28e4700549689b6c35e00353977ffdfa475c1343cdfb->leave($__internal_3fc3f43b91c6b0b630af28e4700549689b6c35e00353977ffdfa475c1343cdfb_prof);

        
        $__internal_16c334e28baeabe03595bd33240a27e0a1b45e0c9ababe1553a167de321e6909->leave($__internal_16c334e28baeabe03595bd33240a27e0a1b45e0c9ababe1553a167de321e6909_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoGeo/Common/js/_geocoding_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1001 => 901,  997 => 899,  995 => 898,  909 => 815,  805 => 713,  632 => 541,  629 => 539,  593 => 506,  376 => 291,  351 => 268,  347 => 267,  341 => 264,  302 => 227,  278 => 205,  272 => 202,  251 => 184,  230 => 166,  193 => 132,  112 => 54,  108 => 53,  104 => 52,  100 => 51,  95 => 49,  91 => 48,  87 => 47,  74 => 37,  66 => 32,  53 => 22,  47 => 19,  41 => 16,  34 => 13,  30 => 11,  28 => 10,  25 => 9,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    Javascript Geocoding Core

    @params map_elt Map element id (Optional)
    @params auto_complete_elt Place Auto Complete element id  (Optional)
    todo: move alll *_js.html.twig to js files
#}
{% trans_default_domain 'cocorico_geo' %}

{% set gKey = googlePlaceAPIKey ? '&key=' ~ googlePlaceAPIKey : '' %}

<script type=\"text/javascript\"
        src=\"//maps.googleapis.com/maps/api/js?libraries=places&language={{ app.request.locale }}{{ gKey|raw }}\">
</script>
<script type=\"text/javascript\"
        src=\"{{ asset('js/vendor/gmap-infobox.js') }}\">
</script>
<script type=\"text/javascript\"
        src=\"{{ asset('js/vendor/gmap-marker-clusterer.js') }}\">
</script>
<script type=\"text/javascript\"
        src=\"{{ asset('js/vendor/gmap-marker-with-label.js') }}\">
</script>
<style>
    .gmap-marker-label {
        color: #fff;
        font-size: 16px;
    }
</style>
<script>
    var geocoder, map, marker, autoComplete, latlng, boundingBox, markerDraggable;
    var displayMarker = {{ display_marker is not defined or display_marker ? \"true\" : \"false\" }};
    var markers = {};//Markers on the listing result map
    var markerCluster;//Markers cluster on the listing result map
    var mapDragMode = false; // True when the user drag or zoom the map on listing result page
    var mapIsLoaded = false;//True when the map has been loaded the first time
    var countriesEnabled = {{ cocorico_listing_countries|json_encode|raw }};

    //Functions
    var initializeGMapFunc, geocodeFunc, geocodeJSONFunc, reverseGeocodeFunc, formatGeocodingResultFunc,
        translateGeocodeResultFunc, refreshMapFunc, refreshMapJSONFunc, setMarkersFunc, extendSearchLocationFunc,
        geoLocateIPFunc;

    \$(function () {
\t//# DLEVASSEUR CHANGE DEFAULT VALUES
        var maxZoom = 12;
        var defaultLat = '{{ (default_lat|default(46.227638))|e('js') }}';
        var defaultLng = '{{ (default_lng|default(2.213749000000007))|e('js') }}';
        var defaultZoom = {{ (default_zoom|default(4))|e('js') }};
\t//#END
        var mapElt = \$(\"{{ map_elt|default('') }}\");
        var autoCompleteElt = \$(\"{{ auto_complete_elt|default('') }}\");
        var markerDraggable = {{ marker_draggable is not defined or not marker_draggable ? \"false\" : \"true\" }};
        var ipInfoDbAPIKey = \"{{ ipInfoDbAPIKey|default('') }}\";

        mapElt = mapElt.length ? mapElt[0] : false;
        autoCompleteElt = autoCompleteElt.length ? autoCompleteElt[0] : false;

        /**
         * Initialize Google map
         */
        initializeGMapFunc = function () {
            geocoder = new google.maps.Geocoder();

            if (mapElt) {
                latlng = new google.maps.LatLng(defaultLat, defaultLng);
                var mapOptions = {
\t\t\t\t\tmaxZoom: maxZoom,\t\t\t 
                    zoom: defaultZoom,
                    center: latlng,
                    scrollwheel: false,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP
                    }
                };
                map = new google.maps.Map(mapElt, mapOptions);

                if (displayMarker) {
                    marker = new google.maps.Marker({
                        map: map,
                        position: latlng,
                        draggable: markerDraggable,
                        zIndex: 0
                    });

                    if (markerDraggable) {
                        google.maps.event.addListener(marker, 'dragend', function () {
                            //Create and trigger marker dragend event
                            \$.event.trigger({
                                type: \"markerDragendEvt\",
                                markerPosition: marker.getPosition()
                            });
                        });
                    }
                }

                handleMapRefresh();
            }

            if (autoCompleteElt) {
                autoComplete = new google.maps.places.Autocomplete(
                    autoCompleteElt,
                    {types: ['geocode']}
                );

                if (countriesEnabled.length) {
                    autoComplete.setComponentRestrictions(
                        {'country': countriesEnabled}
                    );
                }
            }


        };
        initializeGMapFunc();


        /**
         * Geocoding
         *
         * @param address
         * @param region
         * @param translate
         * @param refreshMap
         *
         * @returns object
         */
        geocodeFunc = function (address, region, translate, refreshMap) {
            var deferred = new \$.Deferred();

            if (!address) {
                deferred.reject(\"{{ 'geo.location.address_missing'|trans }}\");
            } else {
                var geocodeParams = {};
                geocodeParams['address'] = address;
                geocodeParams['region'] = (typeof region !== 'undefined' && region) ? region : '';

                geocoder.geocode(geocodeParams, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var result = results[0];
//                        console_log(result);
                        //Refresh Map
                        if (typeof refreshMap !== 'undefined' && refreshMap == true) {
                            var geometry = result.geometry;
                            refreshMapFunc(geometry.viewport, geometry.location.lat(), geometry.location.lng());
                        }

                        //Format geocoding
                        var formattedResult = formatGeocodingResultFunc(result);

                        //Translate geocoding
                        if (typeof translate !== 'undefined' && translate == true) {
                            translateGeocodeResultFunc(formattedResult.lat, formattedResult.lng).done(
                                function (resultsTranslated) {
//                                        console_log(\"resultsTranslated\", resultsTranslated);
//                                        console_log(\"formattedResult\", formattedResult);
                                    deferred.resolve(
                                        \$.extend(formattedResult, resultsTranslated)
                                    );
                                }
                            );
                        } else {
                            deferred.resolve(formattedResult);
                        }
                    } else {
                        deferred.reject(\"{{ 'geo.location.no_result'|trans }}\");
                    }
                });
            }

            return deferred.promise();
        };

        /**
         * Reverse Geocoding
         *
         * @param position
         * @returns object
         */
        reverseGeocodeFunc = function (position) {
            var deferred = new \$.Deferred();

            if (!position) {
                deferred.reject(\"{{ 'geo.location.address_missing'|trans }}\");
            } else {
                geocoder.geocode({'latLng': position}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var result = results[0];
                        if (result) {
                            //Format geocoding
                            var formattedResult = formatGeocodingResultFunc(result);

                            //Translate geocoding
                            translateGeocodeResultFunc(formattedResult.lat, formattedResult.lng).done(
                                function (resultsTranslated) {
                                    deferred.resolve(
                                        \$.extend(formattedResult, resultsTranslated)
                                    );
                                }
                            );
                        } else {
                            deferred.reject(\"{{ 'geo.location.no_result'|trans }}\");
                        }
                    } else {
                        deferred.reject(\"{{ 'geo.location.no_result'|trans }}\");
                    }
                });
            }

            return deferred.promise();
        };

        /**
         * Format Geocoding Result
         *
         * @param result
         * @returns object
         */
        formatGeocodingResultFunc = function (result) {
            if (!result) {
                return {};
            }
            var data = {}, geometry = result.geometry, viewport = geometry.viewport, bounds = geometry.bounds;

            data[locale] = {};
            {# Create a simplified version of the address components. @see also GoogleMapsProvider #}
            \$.each(result.address_components, function (index, object) {
                //var name = object.types[0];
                \$.each(object.types, function (index, name) {
                    data[locale][name] = object.long_name;
                    data[locale][name + \"_short\"] = object.short_name;
                });
            });

            \$.extend(data, {
                formatted_address: result.formatted_address,
                types: result.types,
                location_type: geometry.location_type || \"PLACES\",
                viewport: viewport,
                bounds: bounds,
                location: geometry.location,
                lat: geometry.location.lat(),
                lng: geometry.location.lng()
            });

            return data;
        };

        /**
         * Translate Geocode Result
         *
         * @param lat
         * @param lng
         * @returns {*}
         */
        translateGeocodeResultFunc = function translateGeoLocations(lat, lng) {
            var promises = [];
            var dataT = {};

            \$.each(locales, function (index, lang) {
                if (lang != locale) {
                    dataT[lang] = {};
                    var deferred = new \$.Deferred();
                    var url = \"{{ path('cocorico_geo_reverse_geocoding', {'lat': '0.01', 'lng': '0.02', 'lang': app.request.locale}) }}\";
                    url = url.replace('0.01', lat);
                    url = url.replace('0.02', lng);
                    url = url.replace('{{ app.request.locale }}', lang);
                    url += \"?token={{ csrf_token(\"rev_geo\") }}\";
                    \$.getJSON(
                        url,
                        function (queryResult) {

                            if (queryResult.status == 'OK' && queryResult.results.length) {
                                var resultsT = queryResult.results;
                                var resultT = resultsT[0];

                                \$.each(resultT.address_components, function (index, objectT) {
                                    if (objectT) {
                                        \$.each(objectT.types, function (index, name) {
                                            dataT[lang][name] = objectT.long_name;
                                            dataT[lang][name + \"_short\"] = objectT.short_name;
\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t 
                                        });
                                    }
                                });
                                deferred.resolve(dataT);
                            } else {
                                //datasT[lang]=null;
                                {#deferred.reject(\"{{ 'geo.location.no_result'|trans }}\");#}
                            }
                        }).fail(function () {

                    });
                    promises.push(deferred);
                }
            });

            return \$.when.apply(undefined, promises).promise();
        };

        /**
         * Refresh map
         *
         * @param viewport
         * @param lat
         * @param lng
         */
        refreshMapFunc = function (viewport, lat, lng) {
            if (mapElt) {
                if (displayMarker) {
                    marker.setVisible(false);
                }

                // If the place has a geometry, then present it on a map.
                if (viewport) {
                    var ne, sw;
                    if (typeof viewport === 'string') {
                        var viewportObject = viewportStringToArray(viewport);
                        if (viewportObject) {
                            ne = new google.maps.LatLng(viewportObject.ne.lat, viewportObject.ne.lng);
                            sw = new google.maps.LatLng(viewportObject.sw.lat, viewportObject.sw.lng);
                            viewport = new google.maps.LatLngBounds(sw, ne);
                        } else {
                            refreshMapJSONFunc(\$(autoCompleteElt).val());
                        }
                    } else {
                        ne = viewport.getNorthEast();
                        sw = viewport.getSouthWest();
                    }

                    if (!mapDragMode) {
                        map.fitBounds(viewport);
                        //fit bounds happens asynchronously, so we have to wait for a bounds_changed event before setting zoom works.
                        google.maps.event.addListenerOnce(map, 'bounds_changed', function (event) {
//                        console_log('bounds_changed' + getBoundsZoomLevel(ne, sw, mapElt));
                            this.setZoom(getBoundsZoomLevel(ne, sw, mapElt));
//                            addNeSwMarkers();
                        });
                    }
                    drawZone(ne, sw);

                    if (displayMarker) {
                        var location = new google.maps.LatLng(lat, lng);
                        marker.setPosition(location);
                        marker.setVisible(true);
                    }
                } else {
                    //Try to get viewport through map api json
                    refreshMapJSONFunc(\$(autoCompleteElt).val());
                }
            }
        };

        /**
         * Add markers to viewport coordinates
         */
        function addNeSwMarkers() {
            var currentMapViewport = map.getBounds();

            var ne2 = currentMapViewport.getNorthEast();
            latlng = new google.maps.LatLng(ne2.lat(), ne2.lng());

            var markerA = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: false,
                zIndex: 0
            });
            markerA.setVisible(true);

            var sw2 = currentMapViewport.getSouthWest();
            latlng = new google.maps.LatLng(sw2.lat(), sw2.lng());
            var markerB = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: false,
                zIndex: 0
            });
            markerB.setVisible(true);
        }


        /**
         * Extend search location
         *
         * @param parentLocationAddress
         * @param parentLocationType
         * @param modalId
         * @param modalMessage
         */
        extendSearchLocationFunc = function (parentLocationAddress, parentLocationType, modalId, modalMessage) {
            if (autoCompleteElt && parentLocationAddress && parentLocationType) {
                var modal = \$(modalId);
                if (modal.length) {
                    modal.find('.modal-body .title').html(modalMessage);
                    modal.modal('show');
                    //Start new search
                    var extSId = setTimeout(function () {
                        \$(autoCompleteElt).val(parentLocationAddress);
                        var searchForm = \$(autoCompleteElt).closest(\"form\");
                        searchForm.submit();
                    }, 3000);

                    //Stop search on modal close
                    modal.on('hidden.bs.modal', function () {
                        clearTimeout(extSId);
                    });
                }
            } else {
                \$('#location_addressType').val();
            }
        };


        /**
         * Convert viewport string to array
         *
         * @param viewport
         */
        function viewportStringToArray(viewport) {
            if (!viewport) {
                return null;
            }

            var matches = viewport.match(/\\(\\((.*?)\\), \\((.*?)\\)\\)/);
            //console_log('viewportStringToArray', matches);

            if (matches.length == 3) {
                var sw = null;
                var ne = null;

                var coordinate = matches[1].split(',');

                if (coordinate.length == 2) {
                    var latitude = parseFloat(coordinate[0].trim());
                    var longitude = parseFloat(coordinate[1].trim());

                    sw = {'lat': latitude, 'lng': longitude};
                }

                coordinate = matches[2].split(',');
                if (coordinate.length == 2) {
                    latitude = parseFloat(coordinate[0].trim());
                    longitude = parseFloat(coordinate[1].trim());

                    ne = {'lat': latitude, 'lng': longitude};
                }

                if (sw && ne) {
                    return {'sw': sw, 'ne': ne};
                }
            }

            return null;
        }

        /**
         * Refresh map json result
         *
         * @param address
         */
        refreshMapJSONFunc = function (address) {
            \$.when(
                geocodeJSONFunc(address)
            ).then(
                function (results) {
                    if (results) {
                        var result = results[0];
                        var geometry = result.geometry;

                        if (geometry.viewport) {
                            if (!mapDragMode) {
                                var ne = geometry.viewport.northeast;
                                var sw = geometry.viewport.southwest;
                                ne = new google.maps.LatLng(ne.lat, ne.lng);
                                sw = new google.maps.LatLng(sw.lat, sw.lng);
                                var viewport = new google.maps.LatLngBounds(sw, ne);

                                map.fitBounds(viewport);
                                map.setZoom(getBoundsZoomLevel(ne, sw, mapElt));
                                drawZone(ne, sw);\t\t\t\t\t\t\t\t\t\t\t\t
                            }
                        } else {
                            map.setCenter(geometry.location);
                            map.setZoom(17);
                        }
                        if (displayMarker) {
                            marker.setPosition(geometry.location);
                            marker.setVisible(true);
                        }

                    }
                }
            );
        };

        /**
         * Json geocoding
         *
         * @param address
         */
        geocodeJSONFunc = function (address) {
            var deferred = new \$.Deferred();
            \$.getJSON(
                \"//maps.googleapis.com/maps/api/geocode/json?address=\" + address + \"&sensor=false&language=\" + \"{{ app.request.locale }}{{ gKey|raw }}\",
                function (queryResult) {
                    if (queryResult.status == 'OK' && queryResult.results.length) {
                        deferred.resolve(queryResult.results);
                    } else {
                        deferred.reject(false);
                    }
                });
            return deferred.promise();
        };


        /**
         * Set markers on map.
         *
         * @param markersGroupedByLocation associative array. First dimension is the lat-lng and can contain multiple listings
         * with same locations
         *      Ex :
         *      markersGroupedByLocation[\"12.789-0.4589\"]=> array(
         *          0 => array(
         *                  'title' => 'Title Marker',
         *                  'price' => '1000',
         *                  ...
         *                  ),
         *          1 => array(
         *                  'title' => 'Other Title Marker',
         *                  'price' => '200',
         *                  ...
         *                  ),
         *         ...
         *      )
         */
        {# markersGroupedByLocation are setted in Cocorico/CoreBundle/Controller/Frontend/ListingSearchController.php#}
        setMarkersFunc = function (markersGroupedByLocation) {
            {#Get infobox html template @see Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/_marker.html.twig#}
            var markerTemplate = \$('.info-box-tpl').find('ul').html();

            var image = {
                url: '/images/pin.png',
\t\t\t\t//#DLEVASSEUR CHANGE VALUES 20,32 #}
                size: new google.maps.Size(40,45)
            };

            //Compute InfoBox Y Offset and height
            var infoBoxHeight = 270;
            var infoBoxWidth = 275;
            var offsetY = -infoBoxHeight - 54;

            //Remove markers before adding them
            \$.each(markers, function (index, marker) {
                marker.setMap(null);
                google.maps.event.clearListeners(marker, 'click');
            });
            markers = {};

            //Construct InfoBox for each marker with different location
            \$.each(markersGroupedByLocation, function (cptMarker, markersForOneLocation) {//cptMarker is of form lat-lng
                var markerData = getMarkerData(markersForOneLocation);
                var nbMarkersWithSameLocation = markerData[\"nbMarkersWithSameLocation\"];
                var listingsIdWithSameLocation = markerData[\"listingsIdWithSameLocation\"];
                var infoBoxContent = markerData[\"infoBoxContent\"];

                var \$popupElt = \$(infoBoxContent);
                \$popupElt.find(\"[data-id=info-box]\").css(\"height\", infoBoxHeight + \"px\");

                //Marker
                var firstMarker = markersForOneLocation[0];
                var myLatLng = new google.maps.LatLng(firstMarker['lat'], firstMarker['lng']);
                var marker = new MarkerWithLabel({
                    icon: image,
                    position: myLatLng,
                    zIndex: firstMarker['zindex'],
                    opacity: firstMarker['opacity'],
                    animation: google.maps.Animation.DROP,
                    map: map,
                    labelContent: nbMarkersWithSameLocation.toString(),
\t\t\t\t\t//#DLEVASSEUR CHANGE VALUES 7,28 #}
                    labelAnchor: new google.maps.Point(11, 29),//to change if marker icon change
                    labelClass: \"map-label\"
                });

                //InfoBox
                marker.infobox = new InfoBox({
                    content: \$popupElt[0],//DOM element
                    disableAutoPan: false,
                    maxWidth: infoBoxWidth,
                    pixelOffset: new google.maps.Size(-Math.round(infoBoxWidth / 2), offsetY),
                    zIndex: null,
                    boxStyle: {
                        width: infoBoxWidth + \"px\"
                    },
                    closeBoxURL: \"\",
                    infoBoxClearance: new google.maps.Size(1, 1)
                });
                markers[cptMarker] = marker;

                ////////EVENTS///////
                //Close InfoBox
                \$popupElt.find('.close').on('click', function (e) {
                    e.preventDefault();
                    marker.infobox.close();
                    return false;
                });

                //Open InfoBox on marker click
                google.maps.event.addListener(marker, 'click', (function (cptMarker, nbMarkersWithSameLocation) {
                    return function () {
                        //Close all info box
                        for (var m in markers) {
                            if (markers.hasOwnProperty(m)) {
                                markers[m].infobox.close();
                            }
                        }

                        //Open info box for current marker
                        markers[cptMarker].infobox.open(map, this);

                        //Add slider and pan map
                        setTimeout(function () {
                            //Load images on marker click
                            var \$infoBoxImages = \$popupElt.find(\".img-holder img\");
                            \$.each(\$infoBoxImages, function (i, infoBoxImage) {
                                \$(infoBoxImage).attr(\"src\", \$(infoBoxImage).data(\"src\"));
                            });

                            addSlider(nbMarkersWithSameLocation);
                            map.panTo(myLatLng);
                            map.panBy(0, Math.round(offsetY / 2));
                        }, 5);
                    }
                })(cptMarker, nbMarkersWithSameLocation));

                //Overlay corresponding marker or cluster on listing mouseover
                \$.each(listingsIdWithSameLocation, function (i, listingId) {
                    \$(\"[data-lid=\" + listingId + \"]\").on('mouseenter mouseleave', function (e) {
                        try {
                            if (e.type == 'mouseenter') {
                                marker.labelClass = \"map-label-overlay\";
                                if (marker.cluster) {//setted in clusteringend event below
                                    marker.cluster.clusterIcon_.div_.className = 'cluster cluster-overlay';
                                }
                            } else {
                                marker.labelClass = \"map-label\";
                                if (marker.cluster) {
                                    marker.cluster.clusterIcon_.div_.className = 'cluster';
                                }
                            }
                            marker.label.draw();
                        } catch (e) {
                            //todo: know why projection is null
                        }
                    });
                });

            });//end loop of info boxes construction

            /**
             * Extend map to fit bounds on visible markers if we are not in map dragging mode
             */
            google.maps.event.addListenerOnce(map, 'idle', function () {
                if (!mapDragMode) {
                    var viewport = this.getBounds();
                    var fitBounds = false;
                    for (var m in markers) {
                        if (markers.hasOwnProperty(m)) {
                            if (!viewport.contains(markers[m].getPosition())) {
                                viewport = viewport.extend(markers[m].getPosition());
                                fitBounds = true;
                            }
                        }
                    }
                    if (fitBounds) {
                        map.fitBounds(viewport);
                    }
                }

                mapIsLoaded = true;//Map has been loaded .
            });

            /**
             * Generate info box content for each marker
             * Some markers can have same locations. In this case info box marker are rendered as slider
             *
             */
            function getMarkerData(markersForOneLocation) {
                var infoBoxContent = '';
                var nbMarkersWithSameLocation = 0;
                var listingsIdWithSameLocation = [];

                \$.each(markersForOneLocation, function (i, marker) {
                    var tmpContent = markerTemplate.replace('%title%', marker['title']);\t\t\t\t\t\t\t\t\t\t\t\t\t  
                    tmpContent = tmpContent.replace('%data-src%', marker['image']);
                    tmpContent = tmpContent.replace('%price%', marker['price']);
                    tmpContent = tmpContent.replace('%certified%', marker['certified']);
                    tmpContent = tmpContent.replace('%url%', marker['url']);
                    tmpContent = tmpContent.replace('%category%', marker['category']);
                    tmpContent = tmpContent.replace('%rating1%', marker['rating1']);
                    tmpContent = tmpContent.replace('%rating2%', marker['rating2']);
                    tmpContent = tmpContent.replace('%rating3%', marker['rating3']);
                    tmpContent = tmpContent.replace('%rating4%', marker['rating4']);
                    tmpContent = tmpContent.replace('%rating5%', marker['rating5']);

                    infoBoxContent = infoBoxContent + tmpContent;
                    nbMarkersWithSameLocation++;
                    listingsIdWithSameLocation.push(marker['id']);
                });
                {#Inject html into infobox wrapper @see Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/_marker.html.twig#}
                infoBoxContent = \$('.info-box-wrapper').html().replace('%info_box_content%', infoBoxContent);

                return {
                    \"infoBoxContent\": infoBoxContent,
                    \"nbMarkersWithSameLocation\": nbMarkersWithSameLocation,
                    \"listingsIdWithSameLocation\": listingsIdWithSameLocation
                };
            }


            function addSlider(nbMarkersWithSameLocation) {
                var options = {
                    infinite: true,
                    arrows: false
                };

                if (nbMarkersWithSameLocation > 1) {
                    options = {
                        infinite: true,
                        arrows: true
                    };
                }
                \$(\".infoBox .popup\").unslider(options);
            }

            //Cluster
            //Remove cluster markers before adding them
            if (typeof markerCluster != 'undefined') {
                markerCluster.clearMarkers();
                markerCluster.repaint();
            }
            markerCluster = new MarkerClusterer(map, markers, {
\t\t\t//#DLEVASSEUR CHANGE VALUES 15 #}
                maxZoom: 10,
                gridSize: 30,
                styles: null,
                zoomOnClick: false,
                calculator: function (markers, numStyles) {
                    var index = 0;
                    var title = \"\";
                    var count = 0;
                    //Compute the number of markers in cluster including markers with same location
                    for (var marker in markers) {
                        if (markers.hasOwnProperty(marker)) {
                            count += parseInt(markers[marker].labelContent);
                        }
                    }
                    count = count.toString();

                    var dv = count;
                    while (dv !== 0) {
                        dv = parseInt(dv / 10, 10);
                        index++;
                    }

                    index = Math.min(index, numStyles);
                    return {
                        text: count,
                        index: index,
                        title: title
                    };
                }
            });

            //Override cluster click
            google.maps.event.addListener(markerCluster, 'click', function (cluster) {
                var mc = cluster.getMarkerClusterer();
                // Zoom into the cluster.
                var mz = mc.getMaxZoom();
                var theBounds = cluster.getBounds();
                mc.getMap().fitBounds(theBounds);
                // There is a fix for Issue 170 here:
                setTimeout(function () {
                    mc.getMap().fitBounds(theBounds);
\t\t\t\t\t//#DLEVASSEUR REMOVE ' #}
                    // Dont zoom beyond the max zoom level
                    if (mz !== null && (mc.getMap().getZoom() > mz)) {
                        mc.getMap().setZoom(mz + 1);
                    }
                }, 100);
            });

            //Associate each marker to its cluster to manage cluster overlay effect on listing mouseover
            google.maps.event.clearListeners(markerCluster, 'clusteringend');
            google.maps.event.addListener(markerCluster, 'clusteringend', function (e) {
                var clusters = this.getClusters();
                for (var i = 0; i < clusters.length; i++) {
                    for (var j = 0; j < clusters[i].markers_.length; j++) {
                        clusters[i].markers_[j].cluster = clusters[i];
                    }
                }
            });
        };//end setMarkersFunc

        /**
         * Geo localisation by ip through IPInfoDB
         * @see http://www.ipinfodb.com/ip_location_api_json.php
         *
         * @param callBack Callback function to call after ip geo location. Do not mix up with the url callback parameter
         */
        geoLocateIPFunc = function (callBack) {
            if (ipInfoDbAPIKey) {
                var countries = \$.parseJSON('{{ countries_translated(app.request.locale)|json_encode()|e('js') }}');
                var url = \"//api.ipinfodb.com/v3/ip-city/?key=\" + ipInfoDbAPIKey + \"&format=json\";

                try {
                    var geoCookie = Cookies.get('_cgl');
                    if (!geoCookie) {//if no cookie IPInfoDB is called
                        \$.ajax({
                            url: url,
                            cache: true,
                            async: true,
//                            jsonp: \"callback\",// Name of the callback parameter. Commented for security reasons
                            //#DLEVASSEUR REMOVE ' #}
\t\t\t\t\t\t\tdataType: \"json\",// Tell jQuery were expecting JSON and no more JSONP for security reasons
                            success: function (location) {
                                if (location.statusCode == 'OK') {
                                    location.countryName = countries[location.countryCode];//country name translated
                                    Cookies.set('_cgl', JSON.stringify(location), {expires: 1, path: '/'});//set geo cookie
                                    callBack(location);
                                }
                            },
                            error: function (e) {
                                //console_log(e.message);
                            }
                        });
                    } else {//Cookie geo value is used instead
                        callBack(JSON.parse(geoCookie));
                    }
                } catch (e) {
                    //console_log(e);
                }
            }
        };

        /**
         * Guess best zoom
         *
         * @param ne
         * @param sw
         * @param mapElt
         * @returns {number}
         */
        function getBoundsZoomLevel(ne, sw, mapElt) {

            var \$mapDiv = \$(mapElt);
            var mapDim = {height: \$mapDiv.height(), width: \$mapDiv.width()};
           //#DLEVASSEUR CHANGE VALUES 256,256 #}
            var WORLD_DIM = {height: 64, width: 64};
\t\t\t//#DLEVASSEUR CHANGE VALUES 21 #}
            var ZOOM_MAX = 10;

            function latRad(lat) {
                var sin = Math.sin(lat * Math.PI / 180);
                var radX2 = Math.log((1 + sin) / (1 - sin)) / 2;
                return Math.max(Math.min(radX2, Math.PI), -Math.PI) / 2;
            }

            function zoom(mapPx, worldPx, fraction) {
                return Math.floor(Math.log(mapPx / worldPx / fraction) / Math.LN2);
            }


            var latFraction = (latRad(ne.lat()) - latRad(sw.lat())) / Math.PI;

            var lngDiff = ne.lng() - sw.lng();
            var lngFraction = ((lngDiff < 0) ? (lngDiff + 360) : lngDiff) / 360;

            var latZoom = zoom(mapDim.height, WORLD_DIM.height, latFraction);
            var lngZoom = zoom(mapDim.width, WORLD_DIM.width, lngFraction);

//            console_log('getBoundsZoomLevel > return', Math.min(latZoom, lngZoom, ZOOM_MAX));

            return Math.min(latZoom, lngZoom, ZOOM_MAX);
        }

        /**
         * Draw zone on map
         *
         * @param ne
         * @param sw
         */
        function drawZone(ne, sw) {
            var strokeOpacity = 0;

            {% if app.environment == 'dev' %}
            strokeOpacity = 0.5;
            {% endif %}

            var boundingBoxPoints = [
                ne, new google.maps.LatLng(ne.lat(), sw.lng()),
                sw, new google.maps.LatLng(sw.lat(), ne.lng()), ne
            ];

            if (boundingBox) {
                boundingBox.setMap(null);
            }

            boundingBox = new google.maps.Polyline({
                path: boundingBoxPoints,
                strokeColor: '#000',
                strokeOpacity: strokeOpacity,
                strokeWeight: 1
            });
            boundingBox.setMap(map);
        }


        /**
         * Map refresh
         */
        function handleMapRefresh() {
            //Map refresh on tabs shown
            \$('a[href=\"#map\"][data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                resizeMap();
            });

            //Map refresh on resize and orientation change
            google.maps.event.addDomListener(window, \"orientationchange\", function () {
                resizeMap();
            });

            google.maps.event.addDomListener(window, \"resize\", function () {
                resizeMap();
            });
        }

        function resizeMap() {
            var center = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        }
    });

</script>
", "@CocoricoGeo/Common/js/_geocoding_js.html.twig", "/cocorico/src/Cocorico/GeoBundle/Resources/views/Common/js/_geocoding_js.html.twig");
    }
}
