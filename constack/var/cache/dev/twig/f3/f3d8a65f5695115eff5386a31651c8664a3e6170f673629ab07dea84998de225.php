<?php

/* @CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig */
class __TwigTemplate_ee62578eec0dc248c202bcf33d604d6f4267be6d6af14bf701e5c91a88903d25 extends Twig_Template
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
        $__internal_90eaf2d61c863ba9116b07f511f663bfde948b9a36360717730f74a2898c2a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90eaf2d61c863ba9116b07f511f663bfde948b9a36360717730f74a2898c2a54->enter($__internal_90eaf2d61c863ba9116b07f511f663bfde948b9a36360717730f74a2898c2a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig"));

        $__internal_0a2efa0a77b43aafbcf08ef6ea01537e11814f53262fe63968ed826e8db0f576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2efa0a77b43aafbcf08ef6ea01537e11814f53262fe63968ed826e8db0f576->enter($__internal_0a2efa0a77b43aafbcf08ef6ea01537e11814f53262fe63968ed826e8db0f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig"));

        // line 5
        echo "
<script>
    \$(function () {
        var \$searchForm = \$(\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["auto_complete_elt"]) || array_key_exists("auto_complete_elt", $context) ? $context["auto_complete_elt"] : (function () { throw new Twig_Error_Runtime('Variable "auto_complete_elt" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\").closest(\"form\");
        var currentMapLocation;
        var currentMapViewport;
        var currentMapZoom;
        var timeout = 1300;//timeout before new search request is send
        var mapMoveTimer;//To prevent to refresh results each time a move is done on the map
        var progressTimer;
        var \$searchOnDragCB = \$(\"#search-on-drag\");

        //Handle cb change
        handleSearchOnDragCheckBox();
        function handleSearchOnDragCheckBox() {
            \$searchOnDragCB.on('change', function () {
                if (\$(this).is(':checked')) {
                    mapDragMode = true;
                    handleMapDragAndZoom();
                } else {
                    mapDragMode = false;
                    clearListeners();
                }
                //Set actual cb state
                Cookies.set('_csod', (mapDragMode ? '1' : '-1'), {expires: 1, path: '/'});
            });

            //Cb init on load.
            //Get previous cb state
            if (Cookies.get('_csod') == '1') {
                \$searchOnDragCB.prop('checked', true);
            } else if (Cookies.get('_csod') == '-1') {
                \$searchOnDragCB.prop('checked', false);
            } else {
                \$searchOnDragCB.prop('checked', true);
            }
            jcf.replaceAll(\".search-on-drag-cb-wrapper\");
        }

        handleMapDragAndZoom();
        function handleMapDragAndZoom() {
            //Manage listings results refreshing while map dragging
            if (typeof map !== 'undefined') {
                clearListeners();

                google.maps.event.addListener(map, 'dragstart', function () {
                    if (\$searchOnDragCB.is(\":checked\")) {
                        mapDragMode = true;
                    }

                    window.clearTimeout(mapMoveTimer);
                    window.clearTimeout(progressTimer);
                });

                google.maps.event.addListener(map, 'drag', function () {
                    if (mapDragMode) {
                        marker.setPosition(map.getCenter());
                    }
                });
                google.maps.event.addListener(map, 'dragend', function () {
                    if (mapDragMode) {
                        onDragZoomCallback('dragend');
                    }
                });
                //Call onDragZoomCallback on zoom_changed event only when the map is loaded
                google.maps.event.addListener(map, 'zoom_changed', function () {
                    if (mapIsLoaded) {
                        if (\$searchOnDragCB.is(\":checked\")) {
                            mapDragMode = true;
                            onDragZoomCallback('zoom_changed');
                        }
                    }
                });
            }
        }

        /**
         * Refresh results
         */
        function onDragZoomCallback() {
            window.clearTimeout(mapMoveTimer);
            mapMoveTimer = window.setTimeout(function () {
                currentMapLocation = map.getCenter();
                currentMapViewport = map.getBounds();
                currentMapZoom = map.getZoom();
                \$.when(
//                            reverseGeocodeFunc(currentMapLocation)
                        function () {
                            return true;
                        }
                ).then(
                        reverseGeocodeSuccess, reverseGeocodeError
                );
            }, timeout);

            window.clearTimeout(progressTimer);
            progressBar(0, \$(\".search-on-drag-cb-wrapper\"));
        }


        //Clear map listeners
        function clearListeners() {
            google.maps.event.clearListeners(map, 'idle');
            google.maps.event.clearListeners(map, 'bounds_changed');
            google.maps.event.clearListeners(map, 'dragend');
            google.maps.event.clearListeners(map, 'drag');
            google.maps.event.clearListeners(map, 'dragstart');
            google.maps.event.clearListeners(map, 'zoom_changed');
        }

        /**
         * Reverse geocoding while map move
         *
         * @param result
         */
        function reverseGeocodeSuccess(result) {
            setMapDraggable(false);

            //Listings results and pagination blocks
            var title = \"h1[data-id=result-title]\";
            var listings = \".listing-holder.row\";
            var pagination = \".nav-pagination\";

            //Loading
            var \$map = \$(\".map-holder\");
            var marginV = (\$map.height() / 2) - (\$(\".form-category\").height() + 100) + 'px ';
            var marginH = (\$(listings).width() / 2) + 'px';
            \$(listings).html('<img style=\"margin: ' + marginV + marginH + '\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loading.gif"), "html", null, true);
        echo "\" />');

            //Fill search form fields with new dragged map geocoding data
            var \$searchFormOrigin = \$searchForm;//Backup origin search form
            \$searchForm = \$searchForm.clone();//Clone search form
//            fillAddressFields(result);//fill cloned search form

            var \$searchFormCloned = \$searchForm;
            \$searchFormCloned.find(\"#location_lat\").val(currentMapLocation.lat());
            \$searchFormCloned.find(\"#location_lng\").val(currentMapLocation.lng());
            \$searchFormCloned.find(\"#location_viewport\").val(currentMapViewport);
            \$searchFormCloned.find(\"#location_addressType\").val('country,political');
            \$searchFormCloned.find(\"#page\").val(1);
//            \$searchFormCloned.find(\"#location\").val(result.formatted_address);
//            \$searchFormCloned.find(\"#location_country\").val(result[locale].country_short);
            \$searchForm = \$searchFormOrigin;//Restore origin search form

            \$.ajax({
                url: '";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cocorico_listing_search_result");
        echo "',
                type: 'GET',
                data: \$searchFormCloned.serialize(),
                success: function (htmlResponse) {
                    var \$newContent = \$(\$.parseHTML(htmlResponse));

                    //Refresh listing result
                    \$(listings).html(\$newContent.find(listings).html());
                    \$(pagination).html(\$newContent.find(pagination).html());
                    \$(title).find(\"[data-id=title]\").html(\$(\"div[data-id=nb-result-map-drag]\").html());
                    \$(title).find(\"[data-id=nb-result]\").remove();


                    //Refresh main marker position
                    refreshMapFunc(currentMapViewport, currentMapLocation.lat(), currentMapLocation.lng());

                    //Refresh markers
                    setMarkersFunc(\$newContent.find(\"span#data-markers\").data(\"markers\"));

                    \$(window).trigger('load');
                    setMapDraggable(true);
                }
            });
        }

        /**
         * Reverse geocoding error
         *
         * @param result
         */
        function reverseGeocodeError(result) {
            var modal = \$('#modal');
            modal.find('.modal-body .title').html('";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Cocorico\CoreBundle\Twig\TranslationExtension')->trans("cocorico.search.invalidate.address", array(), "cocorico"), "html", null, true);
        echo "');
            modal.modal('show');
        }

        /**
         * Progression bar is extended while results are not refreshed.
         * Allow to not send a new request each time zoom or drag is invoked.
         * We wait timeout seconds after last user action on the map before sending request
         */
        function progressBar(curTime, \$element) {
            var progressBarWidth = Math.round(curTime * \$element.width() / timeout);
            \$element.css('box-shadow', 'inset ' + progressBarWidth + 'px 0 0 0 #c6ccd2');
            if (curTime <= timeout) {
                progressTimer = window.setTimeout(function () {
                    progressBar(curTime + 100, \$element);
                }, 100);
            } else {
                window.clearTimeout(progressTimer);
                \$element.css('box-shadow', 'inset 0 0 0 0 transparent');
            }
        }

        /**
         * Set map draggable or not depending on if the request has been submitted or not
         * The map is no more draggable once the request has been submitted
         *
         * @param draggable boolean
         */
        function setMapDraggable(draggable) {
            if (\"ontouchend\" in document) {
                return;
            }
            var options = {
                disableDoubleClickZoom: !draggable,
                draggable: draggable,
                scrollwheel: false,
                panControl: draggable
            };
            map.setOptions(options);
        }
    });
</script>
";
        
        $__internal_90eaf2d61c863ba9116b07f511f663bfde948b9a36360717730f74a2898c2a54->leave($__internal_90eaf2d61c863ba9116b07f511f663bfde948b9a36360717730f74a2898c2a54_prof);

        
        $__internal_0a2efa0a77b43aafbcf08ef6ea01537e11814f53262fe63968ed826e8db0f576->leave($__internal_0a2efa0a77b43aafbcf08ef6ea01537e11814f53262fe63968ed826e8db0f576_prof);

    }

    public function getTemplateName()
    {
        return "@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 182,  178 => 150,  157 => 132,  30 => 8,  25 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Handle map drag events by refreshing results
#}
{% trans_default_domain 'cocorico_geo' %}

<script>
    \$(function () {
        var \$searchForm = \$(\"{{ auto_complete_elt }}\").closest(\"form\");
        var currentMapLocation;
        var currentMapViewport;
        var currentMapZoom;
        var timeout = 1300;//timeout before new search request is send
        var mapMoveTimer;//To prevent to refresh results each time a move is done on the map
        var progressTimer;
        var \$searchOnDragCB = \$(\"#search-on-drag\");

        //Handle cb change
        handleSearchOnDragCheckBox();
        function handleSearchOnDragCheckBox() {
            \$searchOnDragCB.on('change', function () {
                if (\$(this).is(':checked')) {
                    mapDragMode = true;
                    handleMapDragAndZoom();
                } else {
                    mapDragMode = false;
                    clearListeners();
                }
                //Set actual cb state
                Cookies.set('_csod', (mapDragMode ? '1' : '-1'), {expires: 1, path: '/'});
            });

            //Cb init on load.
            //Get previous cb state
            if (Cookies.get('_csod') == '1') {
                \$searchOnDragCB.prop('checked', true);
            } else if (Cookies.get('_csod') == '-1') {
                \$searchOnDragCB.prop('checked', false);
            } else {
                \$searchOnDragCB.prop('checked', true);
            }
            jcf.replaceAll(\".search-on-drag-cb-wrapper\");
        }

        handleMapDragAndZoom();
        function handleMapDragAndZoom() {
            //Manage listings results refreshing while map dragging
            if (typeof map !== 'undefined') {
                clearListeners();

                google.maps.event.addListener(map, 'dragstart', function () {
                    if (\$searchOnDragCB.is(\":checked\")) {
                        mapDragMode = true;
                    }

                    window.clearTimeout(mapMoveTimer);
                    window.clearTimeout(progressTimer);
                });

                google.maps.event.addListener(map, 'drag', function () {
                    if (mapDragMode) {
                        marker.setPosition(map.getCenter());
                    }
                });
                google.maps.event.addListener(map, 'dragend', function () {
                    if (mapDragMode) {
                        onDragZoomCallback('dragend');
                    }
                });
                //Call onDragZoomCallback on zoom_changed event only when the map is loaded
                google.maps.event.addListener(map, 'zoom_changed', function () {
                    if (mapIsLoaded) {
                        if (\$searchOnDragCB.is(\":checked\")) {
                            mapDragMode = true;
                            onDragZoomCallback('zoom_changed');
                        }
                    }
                });
            }
        }

        /**
         * Refresh results
         */
        function onDragZoomCallback() {
            window.clearTimeout(mapMoveTimer);
            mapMoveTimer = window.setTimeout(function () {
                currentMapLocation = map.getCenter();
                currentMapViewport = map.getBounds();
                currentMapZoom = map.getZoom();
                \$.when(
//                            reverseGeocodeFunc(currentMapLocation)
                        function () {
                            return true;
                        }
                ).then(
                        reverseGeocodeSuccess, reverseGeocodeError
                );
            }, timeout);

            window.clearTimeout(progressTimer);
            progressBar(0, \$(\".search-on-drag-cb-wrapper\"));
        }


        //Clear map listeners
        function clearListeners() {
            google.maps.event.clearListeners(map, 'idle');
            google.maps.event.clearListeners(map, 'bounds_changed');
            google.maps.event.clearListeners(map, 'dragend');
            google.maps.event.clearListeners(map, 'drag');
            google.maps.event.clearListeners(map, 'dragstart');
            google.maps.event.clearListeners(map, 'zoom_changed');
        }

        /**
         * Reverse geocoding while map move
         *
         * @param result
         */
        function reverseGeocodeSuccess(result) {
            setMapDraggable(false);

            //Listings results and pagination blocks
            var title = \"h1[data-id=result-title]\";
            var listings = \".listing-holder.row\";
            var pagination = \".nav-pagination\";

            //Loading
            var \$map = \$(\".map-holder\");
            var marginV = (\$map.height() / 2) - (\$(\".form-category\").height() + 100) + 'px ';
            var marginH = (\$(listings).width() / 2) + 'px';
            \$(listings).html('<img style=\"margin: ' + marginV + marginH + '\" src=\"{{ asset('images/loading.gif') }}\" />');

            //Fill search form fields with new dragged map geocoding data
            var \$searchFormOrigin = \$searchForm;//Backup origin search form
            \$searchForm = \$searchForm.clone();//Clone search form
//            fillAddressFields(result);//fill cloned search form

            var \$searchFormCloned = \$searchForm;
            \$searchFormCloned.find(\"#location_lat\").val(currentMapLocation.lat());
            \$searchFormCloned.find(\"#location_lng\").val(currentMapLocation.lng());
            \$searchFormCloned.find(\"#location_viewport\").val(currentMapViewport);
            \$searchFormCloned.find(\"#location_addressType\").val('country,political');
            \$searchFormCloned.find(\"#page\").val(1);
//            \$searchFormCloned.find(\"#location\").val(result.formatted_address);
//            \$searchFormCloned.find(\"#location_country\").val(result[locale].country_short);
            \$searchForm = \$searchFormOrigin;//Restore origin search form

            \$.ajax({
                url: '{{ path('cocorico_listing_search_result') }}',
                type: 'GET',
                data: \$searchFormCloned.serialize(),
                success: function (htmlResponse) {
                    var \$newContent = \$(\$.parseHTML(htmlResponse));

                    //Refresh listing result
                    \$(listings).html(\$newContent.find(listings).html());
                    \$(pagination).html(\$newContent.find(pagination).html());
                    \$(title).find(\"[data-id=title]\").html(\$(\"div[data-id=nb-result-map-drag]\").html());
                    \$(title).find(\"[data-id=nb-result]\").remove();


                    //Refresh main marker position
                    refreshMapFunc(currentMapViewport, currentMapLocation.lat(), currentMapLocation.lng());

                    //Refresh markers
                    setMarkersFunc(\$newContent.find(\"span#data-markers\").data(\"markers\"));

                    \$(window).trigger('load');
                    setMapDraggable(true);
                }
            });
        }

        /**
         * Reverse geocoding error
         *
         * @param result
         */
        function reverseGeocodeError(result) {
            var modal = \$('#modal');
            modal.find('.modal-body .title').html('{{ 'cocorico.search.invalidate.address' | trans({}, 'cocorico') }}');
            modal.modal('show');
        }

        /**
         * Progression bar is extended while results are not refreshed.
         * Allow to not send a new request each time zoom or drag is invoked.
         * We wait timeout seconds after last user action on the map before sending request
         */
        function progressBar(curTime, \$element) {
            var progressBarWidth = Math.round(curTime * \$element.width() / timeout);
            \$element.css('box-shadow', 'inset ' + progressBarWidth + 'px 0 0 0 #c6ccd2');
            if (curTime <= timeout) {
                progressTimer = window.setTimeout(function () {
                    progressBar(curTime + 100, \$element);
                }, 100);
            } else {
                window.clearTimeout(progressTimer);
                \$element.css('box-shadow', 'inset 0 0 0 0 transparent');
            }
        }

        /**
         * Set map draggable or not depending on if the request has been submitted or not
         * The map is no more draggable once the request has been submitted
         *
         * @param draggable boolean
         */
        function setMapDraggable(draggable) {
            if (\"ontouchend\" in document) {
                return;
            }
            var options = {
                disableDoubleClickZoom: !draggable,
                draggable: draggable,
                scrollwheel: false,
                panControl: draggable
            };
            map.setOptions(options);
        }
    });
</script>
", "@CocoricoCore/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig", "/cocorico/src/Cocorico/CoreBundle/Resources/views/Frontend/ListingResult/js/_geocoding_map_drag_js.html.twig");
    }
}
