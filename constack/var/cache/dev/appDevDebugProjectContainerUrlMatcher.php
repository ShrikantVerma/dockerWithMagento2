<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            if (0 === strpos($pathinfo, '/_uploader')) {
                // _uploader_progress_listing_images
                if ('/_uploader/listing_images/progress' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not__uploader_progress_listing_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.listing_images:progress',  '_format' => 'json',  '_route' => '_uploader_progress_listing_images',);
                }
                not__uploader_progress_listing_images:

                // _uploader_upload_listing_images
                if ('/_uploader/listing_images/upload' === $pathinfo) {
                    if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                        goto not__uploader_upload_listing_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.listing_images:upload',  '_format' => 'json',  '_route' => '_uploader_upload_listing_images',);
                }
                not__uploader_upload_listing_images:

                // _uploader_progress_user_images
                if ('/_uploader/user_images/progress' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not__uploader_progress_user_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.user_images:progress',  '_format' => 'json',  '_route' => '_uploader_progress_user_images',);
                }
                not__uploader_progress_user_images:

                // _uploader_upload_user_images
                if ('/_uploader/user_images/upload' === $pathinfo) {
                    if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                        goto not__uploader_upload_user_images;
                    }

                    return array (  '_controller' => 'oneup_uploader.controller.user_images:upload',  '_format' => 'json',  '_route' => '_uploader_upload_user_images',);
                }
                not__uploader_upload_user_images:

            }

        }

        elseif (0 === strpos($pathinfo, '/en')) {
            if (0 === strpos($pathinfo, '/en/booking')) {
                // en__RG__cocorico_booking_new
                if (preg_match('#^/en/booking/(?P<listing_id>\\d+)/(?P<start>[^/]++)/(?P<end>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__cocorico_booking_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_booking_new')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingController::newAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_booking_new:

                // en__RG__cocorico_booking_payment_new
                if (0 === strpos($pathinfo, '/en/booking/payment') && preg_match('#^/en/booking/payment/(?P<booking_id>\\d+)/new$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__cocorico_booking_payment_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_booking_payment_new')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPaymentController::newAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_booking_payment_new:

                // en__RG__cocorico_booking_price
                if (preg_match('#^/en/booking/(?P<listing_id>\\d+)/price$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_en__RG__cocorico_booking_price;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_booking_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPriceController::getBookingPriceAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_booking_price:

            }

            // en__RG__cocorico_currency_switch
            if (0 === strpos($pathinfo, '/en/currency') && preg_match('#^/en/currency/(?P<currency>EUR|USD|GBP|CHF|CAD|JPY|RUB|RUB|AUD)/switch$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__cocorico_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_currency_switch')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\CurrencyController::switchAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_currency_switch:

            // en__RG__cocorico_home
            if ('/en' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\HomeController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_home',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'en__RG__cocorico_home'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/en/l')) {
                // en__RG__cocorico_language_translate
                if ('/en/language/translate' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_en__RG__cocorico_language_translate;
                    }

                    return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\LanguageController::translateDataAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_language_translate',);
                }
                not_en__RG__cocorico_language_translate:

                if (0 === strpos($pathinfo, '/en/listing')) {
                    // en__RG__cocorico_listing_availabilities
                    if (0 === strpos($pathinfo, '/en/listing-availabilities') && preg_match('#^/en/listing\\-availabilities/(?P<listing_id>\\d+)/(?P<start>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<end>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_listing_availabilities;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_availabilities')), array (  '_format' => 'json',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingAvailabilityController::indexAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_listing_availabilities:

                    if (0 === strpos($pathinfo, '/en/listing/new')) {
                        // en__RG__cocorico_dashboard_listing_new_categories
                        if ('/en/listing/new_categories' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                                $allow = array_merge($allow, array('POST', 'GET'));
                                goto not_en__RG__cocorico_dashboard_listing_new_categories;
                            }

                            return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingCategoriesController::newCategoriesAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_listing_new_categories',);
                        }
                        not_en__RG__cocorico_dashboard_listing_new_categories:

                        // en__RG__cocorico_listing_new
                        if ('/en/listing/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_en__RG__cocorico_listing_new;
                            }

                            return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_new',);
                        }
                        not_en__RG__cocorico_listing_new:

                    }

                    // en__RG__cocorico_listing_show
                    if (preg_match('#^/en/listing/(?P<slug>[a-z0-9-]+)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_listing_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_show')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::showAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_listing_show:

                    // en__RG__cocorico_listing_favourite
                    if ('/en/listing/favourite' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_listing_favourite;
                        }

                        return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingFavouriteController::indexFavouriteAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_favourite',);
                    }
                    not_en__RG__cocorico_listing_favourite:

                    // en__RG__cocorico_listing_search_result
                    if ('/en/listing/search_result' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_listing_search_result;
                        }

                        return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::searchAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_listing_search_result',);
                    }
                    not_en__RG__cocorico_listing_search_result:

                    // en__RG__cocorico_listing_similar
                    if (0 === strpos($pathinfo, '/en/listing/similar_result') && preg_match('#^/en/listing/similar_result(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_listing_similar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_similar')), array (  'id' => NULL,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::similarListingAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_listing_similar:

                    // en__RG__cocorico_listing_image_delete
                    if (0 === strpos($pathinfo, '/en/listing_image') && preg_match('#^/en/listing_image/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_en__RG__cocorico_listing_image_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_listing_image_delete')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::deleteAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_listing_image_delete:

                }

                elseif (0 === strpos($pathinfo, '/en/login')) {
                    // en__RG__cocorico_user_login
                    if ('/en/login' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_login',);
                    }

                    // en__RG__cocorico_user_login_check
                    if ('/en/login-check' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_login_check',);
                    }

                }

                // en__RG__cocorico_user_logout
                if ('/en/logout' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_logout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/en/dashboard')) {
                if (0 === strpos($pathinfo, '/en/dashboard/asker/booking')) {
                    // en__RG__cocorico_dashboard_booking_asker
                    if (preg_match('#^/en/dashboard/asker/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_booking_asker;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::indexAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_asker:

                    // en__RG__cocorico_dashboard_booking_show_asker
                    if (preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_booking_show_asker;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_show_asker:

                    // en__RG__cocorico_dashboard_booking_edit_asker
                    if (preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/edit/(?P<type>cancel)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_booking_edit_asker;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_edit_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::editAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_edit_asker:

                    // en__RG__cocorico_dashboard_booking_show_voucher
                    if (preg_match('#^/en/dashboard/asker/booking/(?P<id>\\d+)/show\\-voucher$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_booking_show_voucher;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_voucher')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showVoucherAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_show_voucher:

                    if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin')) {
                        // en__RG__cocorico_dashboard_booking_payin_asker
                        if (preg_match('#^/en/dashboard/asker/booking\\-payin(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__cocorico_dashboard_booking_payin_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::indexAction',  '_locale' => 'en',));
                        }
                        not_en__RG__cocorico_dashboard_booking_payin_asker:

                        // en__RG__cocorico_dashboard_booking_payin_show_bill_asker
                        if (preg_match('#^/en/dashboard/asker/booking\\-payin/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__cocorico_dashboard_booking_payin_show_bill_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::showBillAction',  '_locale' => 'en',));
                        }
                        not_en__RG__cocorico_dashboard_booking_payin_show_bill_asker:

                        if (0 === strpos($pathinfo, '/en/dashboard/asker/booking-payin-refund')) {
                            // en__RG__cocorico_dashboard_booking_payin_refund_asker
                            if (preg_match('#^/en/dashboard/asker/booking\\-payin\\-refund(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_en__RG__cocorico_dashboard_booking_payin_refund_asker;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_refund_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::indexAction',  '_locale' => 'en',));
                            }
                            not_en__RG__cocorico_dashboard_booking_payin_refund_asker:

                            // en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker
                            if (preg_match('#^/en/dashboard/asker/booking\\-payin\\-refund/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::showBillAction',  '_locale' => 'en',));
                            }
                            not_en__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker:

                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/en/dashboard/offerer/booking')) {
                    if (0 === strpos($pathinfo, '/en/dashboard/offerer/booking-bank-wire')) {
                        // en__RG__cocorico_dashboard_booking_bank_wire_offerer
                        if (preg_match('#^/en/dashboard/offerer/booking\\-bank\\-wire(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__cocorico_dashboard_booking_bank_wire_offerer;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_bank_wire_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::indexAction',  '_locale' => 'en',));
                        }
                        not_en__RG__cocorico_dashboard_booking_bank_wire_offerer:

                        // en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer
                        if (preg_match('#^/en/dashboard/offerer/booking\\-bank\\-wire/(?P<id>\\d+)/show\\-bill$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::showBillAction',  '_locale' => 'en',));
                        }
                        not_en__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer:

                    }

                    // en__RG__cocorico_dashboard_booking_offerer
                    if (preg_match('#^/en/dashboard/offerer/booking(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_booking_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::indexAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_offerer:

                    // en__RG__cocorico_dashboard_booking_show_offerer
                    if (preg_match('#^/en/dashboard/offerer/booking/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_booking_show_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_show_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::showAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_show_offerer:

                    // en__RG__cocorico_dashboard_booking_edit_offerer
                    if (preg_match('#^/en/dashboard/offerer/booking/(?P<id>\\d+)/edit/(?P<type>accept|refuse)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_booking_edit_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_booking_edit_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::editAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_booking_edit_offerer:

                }

                elseif (0 === strpos($pathinfo, '/en/dashboard/listing')) {
                    // en__RG__cocorico_dashboard_listing_edit_availabilities_prices
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_prices$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_availabilities_prices;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availabilities_prices')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilitiesPricesAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_availabilities_prices:

                    // en__RG__cocorico_dashboard_listing_edit_availability_price
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_price$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_availability_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilityPriceAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_availability_price:

                    // en__RG__cocorico_dashboard_listing_new_availability_price
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_price$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_new_availability_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_new_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::newAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_new_availability_price:

                    // en__RG__cocorico_dashboard_listing_edit_availabilities_status
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/edit_availabilities_status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_availabilities_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availabilities_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilitiesStatusAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_availabilities_status:

                    // en__RG__cocorico_dashboard_listing_edit_availability_status
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/edit_availability_status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_availability_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilityStatusAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_availability_status:

                    // en__RG__cocorico_dashboard_listing_new_availability_status
                    if (preg_match('#^/en/dashboard/listing/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/new_availability_status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_new_availability_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_new_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::newAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_new_availability_status:

                    // en__RG__cocorico_dashboard_listing_edit_categories_ajax
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_categories_ajax$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_categories_ajax;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_categories_ajax')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesAjaxController::editCategoriesAjaxAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_categories_ajax:

                    // en__RG__cocorico_dashboard_listing_edit_categories
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_categories$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_categories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_categories')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesController::editCategoriesAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_categories:

                    // en__RG__cocorico_dashboard_listing_edit_characteristic
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_characteristic$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_characteristic;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_characteristic')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCharacteristicController::editCharacteristicAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_characteristic:

                    // en__RG__cocorico_dashboard_listing_edit_status
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_status$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_en__RG__cocorico_dashboard_listing_edit_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editStatusAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_status:

                    // en__RG__cocorico_dashboard_listing_edit_price
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_price$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editPriceAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_price:

                    // en__RG__cocorico_dashboard_listing_edit_duration
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_duration$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_en__RG__cocorico_dashboard_listing_edit_duration;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_duration')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editDurationAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_duration:

                    // en__RG__cocorico_dashboard_listing
                    if (preg_match('#^/en/dashboard/listing(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_listing;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::indexAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing:

                    // en__RG__cocorico_dashboard_listing_edit_discount
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_discount$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_discount;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_discount')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDiscountController::editDiscountAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_discount:

                    // en__RG__cocorico_dashboard_listing_duplicate
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/duplicate$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_listing_duplicate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_duplicate')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDuplicateController::duplicateAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_duplicate:

                    // en__RG__cocorico_dashboard_listing_edit_images
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_images$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_images;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_images')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingImageController::editImagesAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_images:

                    // en__RG__cocorico_dashboard_listing_edit_location
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_location$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_location;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_location')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingLocationController::editLocationAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_location:

                    // en__RG__cocorico_dashboard_listing_edit_presentation
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/edit_presentation$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST'));
                            goto not_en__RG__cocorico_dashboard_listing_edit_presentation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_edit_presentation')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPresentationController::editPresentationAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_edit_presentation:

                    // en__RG__cocorico_dashboard_listing_price_simulator
                    if (preg_match('#^/en/dashboard/listing/(?P<id>\\d+)/price_simulator$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_en__RG__cocorico_dashboard_listing_price_simulator;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_listing_price_simulator')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPriceSimulatorController::priceSimulatorAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_listing_price_simulator:

                }

                elseif (0 === strpos($pathinfo, '/en/dashboard/user/edit-')) {
                    // en__RG__cocorico_user_dashboard_profile_edit_about_me
                    if ('/en/dashboard/user/edit-about-me' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_user_dashboard_profile_edit_about_me;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileAboutMeController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_about_me',);
                    }
                    not_en__RG__cocorico_user_dashboard_profile_edit_about_me:

                    // en__RG__cocorico_user_dashboard_profile_edit_bank_account
                    if ('/en/dashboard/user/edit-bank-account' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_user_dashboard_profile_edit_bank_account;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileBankAccountController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_bank_account',);
                    }
                    not_en__RG__cocorico_user_dashboard_profile_edit_bank_account:

                    // en__RG__cocorico_user_dashboard_profile_edit_contact
                    if ('/en/dashboard/user/edit-contact' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_user_dashboard_profile_edit_contact;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileContactController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_edit_contact',);
                    }
                    not_en__RG__cocorico_user_dashboard_profile_edit_contact:

                }

                // en__RG__cocorico_user_dashboard_profile_switch
                if ('/en/dashboard/user/profile-switch' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__cocorico_user_dashboard_profile_switch;
                    }

                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileController::profileSwitchAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_dashboard_profile_switch',);
                }
                not_en__RG__cocorico_user_dashboard_profile_switch:

                if (0 === strpos($pathinfo, '/en/dashboard/message')) {
                    // en__RG__cocorico_dashboard_message
                    if (preg_match('#^/en/dashboard/message(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_message;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message')), array (  'page' => 1,  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::indexAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_message:

                    // en__RG__cocorico_dashboard_message_new
                    if (preg_match('#^/en/dashboard/message/(?P<slug>[a-z0-9-]+)/new$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_message_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_new')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::newThreadAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_message_new:

                    // en__RG__cocorico_dashboard_message_thread_view
                    if (0 === strpos($pathinfo, '/en/dashboard/message/conversation') && preg_match('#^/en/dashboard/message/conversation/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_thread_view')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::threadAction',  '_locale' => 'en',));
                    }

                    // en__RG__cocorico_dashboard_message_thread_delete
                    if (0 === strpos($pathinfo, '/en/dashboard/message/delete') && preg_match('#^/en/dashboard/message/delete/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_message_thread_delete')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::deleteAction',  '_locale' => 'en',));
                    }

                    // en__RG__cocorico_dashboard_message_nb_unread
                    if ('/en/dashboard/message/get-nb-unread-messages' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_message_nb_unread;
                        }

                        return array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::nbUnReadMessagesAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_message_nb_unread',);
                    }
                    not_en__RG__cocorico_dashboard_message_nb_unread:

                }

                elseif (0 === strpos($pathinfo, '/en/dashboard/review')) {
                    // en__RG__cocorico_dashboard_review_new
                    if (0 === strpos($pathinfo, '/en/dashboard/review/new') && preg_match('#^/en/dashboard/review/new/(?P<booking_id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_en__RG__cocorico_dashboard_review_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_dashboard_review_new')), array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::newAction',  '_locale' => 'en',));
                    }
                    not_en__RG__cocorico_dashboard_review_new:

                    // en__RG__cocorico_dashboard_reviews_made
                    if ('/en/dashboard/review/reviews-made' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_reviews_made;
                        }

                        return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::madeReviewsAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_reviews_made',);
                    }
                    not_en__RG__cocorico_dashboard_reviews_made:

                    // en__RG__cocorico_dashboard_reviews_received
                    if ('/en/dashboard/review/reviews-received' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_en__RG__cocorico_dashboard_reviews_received;
                        }

                        return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::receivedReviewsAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_dashboard_reviews_received',);
                    }
                    not_en__RG__cocorico_dashboard_reviews_received:

                }

            }

            elseif (0 === strpos($pathinfo, '/en/media/cache/resolve')) {
                // en__RG__liip_imagine_filter_runtime
                if (preg_match('#^/en/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__liip_imagine_filter_runtime;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',  '_locale' => 'en',));
                }
                not_en__RG__liip_imagine_filter_runtime:

                // en__RG__liip_imagine_filter
                if (preg_match('#^/en/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__liip_imagine_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',  '_locale' => 'en',));
                }
                not_en__RG__liip_imagine_filter:

            }

            elseif (0 === strpos($pathinfo, '/en/user')) {
                // en__RG__cocorico_user_profile_show
                if (preg_match('#^/en/user/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__cocorico_user_profile_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_profile_show')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ProfileController::showAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_user_profile_show:

                // en__RG__cocorico_user_image
                if ('/en/user_image' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__cocorico_user_image;
                    }

                    $ret = array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_image',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'en__RG__cocorico_user_image'));
                    }

                    return $ret;
                }
                not_en__RG__cocorico_user_image:

            }

            elseif (0 === strpos($pathinfo, '/en/register')) {
                // en__RG__cocorico_user_register
                if ('/en/register' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_register',);
                }

                // en__RG__cocorico_user_register_confirmation
                if (0 === strpos($pathinfo, '/en/register-confirmation') && preg_match('#^/en/register\\-confirmation/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__cocorico_user_register_confirmation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_register_confirmation')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_user_register_confirmation:

                // en__RG__cocorico_user_register_confirmed
                if ('/en/register-confirmed' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_register_confirmed',);
                }

            }

            // en__RG__cocorico_user_registration_check_email
            if ('/en/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__cocorico_user_registration_check_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_registration_check_email',);
            }
            not_en__RG__cocorico_user_registration_check_email:

            // en__RG__cocorico_contact_new
            if ('/en/contact/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__cocorico_contact_new;
                }

                return array (  '_controller' => 'Cocorico\\ContactBundle\\Controller\\Frontend\\ContactController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_contact_new',);
            }
            not_en__RG__cocorico_contact_new:

            if (0 === strpos($pathinfo, '/en/password-resetting-')) {
                // en__RG__cocorico_user_resetting_request
                if ('/en/password-resetting-request' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_request',);
                }

                // en__RG__cocorico_user_resetting_reset
                if (0 === strpos($pathinfo, '/en/password-resetting-reset') && preg_match('#^/en/password\\-resetting\\-reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_user_resetting_reset')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::resetAction',  '_locale' => 'en',));
                }

                // en__RG__cocorico_user_resetting_send_email
                if ('/en/password-resetting-send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_en__RG__cocorico_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_send_email',);
                }
                not_en__RG__cocorico_user_resetting_send_email:

                // en__RG__cocorico_user_resetting_check_email
                if ('/en/password-resetting-check-email' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__cocorico_user_resetting_check_email',);
                }

            }

            // en__RG__cocorico_page_show
            if (0 === strpos($pathinfo, '/en/page') && preg_match('#^/en/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__cocorico_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_page_show')), array (  '_controller' => 'Cocorico\\PageBundle\\Controller\\Frontend\\PageController::showAction',  '_locale' => 'en',));
            }
            not_en__RG__cocorico_page_show:

            if (0 === strpos($pathinfo, '/en/admin/resetting')) {
                // en__RG__sonata_user_admin_resetting_request
                if ('/en/admin/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__sonata_user_admin_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_user_admin_resetting_request',);
                }
                not_en__RG__sonata_user_admin_resetting_request:

                // en__RG__sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/en/admin/resetting/reset') && preg_match('#^/en/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_en__RG__sonata_user_admin_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',  '_locale' => 'en',));
                }
                not_en__RG__sonata_user_admin_resetting_reset:

                // en__RG__sonata_user_admin_resetting_send_email
                if ('/en/admin/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_en__RG__sonata_user_admin_resetting_send_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_user_admin_resetting_send_email',);
                }
                not_en__RG__sonata_user_admin_resetting_send_email:

                // en__RG__sonata_user_admin_resetting_check_email
                if ('/en/admin/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__sonata_user_admin_resetting_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_user_admin_resetting_check_email',);
                }
                not_en__RG__sonata_user_admin_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/en/oauth/connect')) {
                // en__RG__hwi_oauth_service_redirect
                if (preg_match('#^/en/oauth/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'en',));
                }

                // en__RG__hwi_oauth_connect
                if ('/en/oauth/connect' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'en',  '_route' => 'en__RG__hwi_oauth_connect',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'en__RG__hwi_oauth_connect'));
                    }

                    return $ret;
                }

                // en__RG__hwi_oauth_connect_service
                if (0 === strpos($pathinfo, '/en/oauth/connect/service') && preg_match('#^/en/oauth/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',  '_locale' => 'en',));
                }

                // en__RG__hwi_oauth_connect_registration
                if (0 === strpos($pathinfo, '/en/oauth/connect/registration') && preg_match('#^/en/oauth/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',  '_locale' => 'en',));
                }

            }

            // en__RG__hwi_facebook_login
            if ('/en/oauth/fb-login' === $pathinfo) {
                return array (  '_locale' => 'en',  '_route' => 'en__RG__hwi_facebook_login',);
            }

            // en__RG__ef_connect
            if (0 === strpos($pathinfo, '/en/efconnect') && preg_match('#^/en/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'en',));
            }

            // en__RG__elfinder
            if (0 === strpos($pathinfo, '/en/elfinder') && preg_match('#^/en/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'en',));
            }

            if (0 === strpos($pathinfo, '/en/geocoding')) {
                // en__RG__cocorico_geo_create
                if (preg_match('#^/en/geocoding/(?P<id>\\d+)/create$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_en__RG__cocorico_geo_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_geo_create')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::createAction',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_geo_create:

                // en__RG__cocorico_geo_reverse_geocoding
                if (preg_match('#^/en/geocoding/(?P<lat>[0-9.-]+)/(?P<lng>[0-9.-]+)/(?P<lang>en|fr)/reverse_geocoding$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__cocorico_geo_reverse_geocoding;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__cocorico_geo_reverse_geocoding')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::reverseGeocode',  '_locale' => 'en',));
                }
                not_en__RG__cocorico_geo_reverse_geocoding:

            }

        }

        elseif (0 === strpos($pathinfo, '/fr')) {
            if (0 === strpos($pathinfo, '/fr/reservation')) {
                // fr__RG__cocorico_booking_new
                if (preg_match('#^/fr/reservation/(?P<listing_id>\\d+)/(?P<start>[^/]++)/(?P<end>[^/]++)/creer$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__cocorico_booking_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_booking_new')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingController::newAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_booking_new:

                // fr__RG__cocorico_booking_price
                if (preg_match('#^/fr/reservation/(?P<listing_id>\\d+)/prix$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__cocorico_booking_price;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_booking_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPriceController::getBookingPriceAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_booking_price:

            }

            // fr__RG__cocorico_booking_payment_new
            if (0 === strpos($pathinfo, '/fr/booking/payment') && preg_match('#^/fr/booking/payment/(?P<booking_id>\\d+)/new$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__cocorico_booking_payment_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_booking_payment_new')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\BookingPaymentController::newAction',  '_locale' => 'fr',));
            }
            not_fr__RG__cocorico_booking_payment_new:

            // fr__RG__cocorico_currency_switch
            if (0 === strpos($pathinfo, '/fr/devise') && preg_match('#^/fr/devise/(?P<currency>EUR|USD|GBP|CHF|CAD|JPY|RUB|RUB|AUD)/changer$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__cocorico_currency_switch;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_currency_switch')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\CurrencyController::switchAction',  '_locale' => 'fr',));
            }
            not_fr__RG__cocorico_currency_switch:

            // fr__RG__cocorico_home
            if ('/fr' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\HomeController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_home',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fr__RG__cocorico_home'));
                }

                return $ret;
            }

            // fr__RG__cocorico_language_translate
            if ('/fr/langage/traduire' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fr__RG__cocorico_language_translate;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\LanguageController::translateDataAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_language_translate',);
            }
            not_fr__RG__cocorico_language_translate:

            // fr__RG__cocorico_dashboard_listing_new_categories
            if ('/fr/listing/new_categories' === $pathinfo) {
                if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                    $allow = array_merge($allow, array('POST', 'GET'));
                    goto not_fr__RG__cocorico_dashboard_listing_new_categories;
                }

                return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingCategoriesController::newCategoriesAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_dashboard_listing_new_categories',);
            }
            not_fr__RG__cocorico_dashboard_listing_new_categories:

            if (0 === strpos($pathinfo, '/fr/annonce')) {
                // fr__RG__cocorico_listing_availabilities
                if (0 === strpos($pathinfo, '/fr/annonce-disponibilitee') && preg_match('#^/fr/annonce\\-disponibilitee/(?P<listing_id>\\d+)/(?P<start>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<end>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_listing_availabilities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_listing_availabilities')), array (  '_format' => 'json',  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingAvailabilityController::indexAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_listing_availabilities:

                // fr__RG__cocorico_listing_new
                if ('/fr/annonce/creer' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__cocorico_listing_new;
                    }

                    return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::newAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_listing_new',);
                }
                not_fr__RG__cocorico_listing_new:

                // fr__RG__cocorico_listing_show
                if (preg_match('#^/fr/annonce/(?P<slug>[a-z0-9-]+)/voir$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_listing_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_listing_show')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingController::showAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_listing_show:

                // fr__RG__cocorico_listing_favourite
                if ('/fr/annonce/favorite' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_listing_favourite;
                    }

                    return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingFavouriteController::indexFavouriteAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_listing_favourite',);
                }
                not_fr__RG__cocorico_listing_favourite:

                // fr__RG__cocorico_listing_search_result
                if ('/fr/annonce/resultat-recherche' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_listing_search_result;
                    }

                    return array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::searchAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_listing_search_result',);
                }
                not_fr__RG__cocorico_listing_search_result:

                // fr__RG__cocorico_listing_similar
                if (0 === strpos($pathinfo, '/fr/annonce/resultat-similaire') && preg_match('#^/fr/annonce/resultat\\-similaire(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_listing_similar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_listing_similar')), array (  'id' => NULL,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Frontend\\ListingSearchController::similarListingAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_listing_similar:

                // fr__RG__cocorico_listing_image_delete
                if (0 === strpos($pathinfo, '/fr/annonce-image') && preg_match('#^/fr/annonce\\-image/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_fr__RG__cocorico_listing_image_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_listing_image_delete')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::deleteAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_listing_image_delete:

            }

            elseif (0 === strpos($pathinfo, '/fr/admin/resetting')) {
                // fr__RG__sonata_user_admin_resetting_request
                if ('/fr/admin/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__sonata_user_admin_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_user_admin_resetting_request',);
                }
                not_fr__RG__sonata_user_admin_resetting_request:

                // fr__RG__sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/fr/admin/resetting/reset') && preg_match('#^/fr/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__sonata_user_admin_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',  '_locale' => 'fr',));
                }
                not_fr__RG__sonata_user_admin_resetting_reset:

                // fr__RG__sonata_user_admin_resetting_send_email
                if ('/fr/admin/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__sonata_user_admin_resetting_send_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_user_admin_resetting_send_email',);
                }
                not_fr__RG__sonata_user_admin_resetting_send_email:

                // fr__RG__sonata_user_admin_resetting_check_email
                if ('/fr/admin/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__sonata_user_admin_resetting_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_user_admin_resetting_check_email',);
                }
                not_fr__RG__sonata_user_admin_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord')) {
                if (0 === strpos($pathinfo, '/fr/tableau-de-bord/demandeur')) {
                    if (0 === strpos($pathinfo, '/fr/tableau-de-bord/demandeur/reservation')) {
                        // fr__RG__cocorico_dashboard_booking_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/reservation(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::indexAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_asker:

                        // fr__RG__cocorico_dashboard_booking_show_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/reservation/(?P<id>\\d+)/voir$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_fr__RG__cocorico_dashboard_booking_show_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_show_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_show_asker:

                        // fr__RG__cocorico_dashboard_booking_edit_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/reservation/(?P<id>\\d+)/editer/(?P<type>cancel)$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_fr__RG__cocorico_dashboard_booking_edit_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_edit_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::editAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_edit_asker:

                        // fr__RG__cocorico_dashboard_booking_show_voucher
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/reservation/(?P<id>\\d+)/voir\\-recu$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_show_voucher;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_show_voucher')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingController::showVoucherAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_show_voucher:

                    }

                    elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/demandeur/remboursement')) {
                        // fr__RG__cocorico_dashboard_booking_payin_refund_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/remboursement(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_payin_refund_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_payin_refund_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::indexAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_payin_refund_asker:

                        // fr__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/remboursement/(?P<id>\\d+)/voir\\-facture$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinRefundController::showBillAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_payin_refund_show_bill_asker:

                    }

                    elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/demandeur/paiement')) {
                        // fr__RG__cocorico_dashboard_booking_payin_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/paiement(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_payin_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_payin_asker')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::indexAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_payin_asker:

                        // fr__RG__cocorico_dashboard_booking_payin_show_bill_asker
                        if (preg_match('#^/fr/tableau\\-de\\-bord/demandeur/paiement/(?P<id>\\d+)/voir\\-facture$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fr__RG__cocorico_dashboard_booking_payin_show_bill_asker;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_payin_show_bill_asker')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Asker\\BookingPayinController::showBillAction',  '_locale' => 'fr',));
                        }
                        not_fr__RG__cocorico_dashboard_booking_payin_show_bill_asker:

                    }

                }

                elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/offreur/virement')) {
                    // fr__RG__cocorico_dashboard_booking_bank_wire_offerer
                    if (preg_match('#^/fr/tableau\\-de\\-bord/offreur/virement(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_booking_bank_wire_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_bank_wire_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::indexAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_booking_bank_wire_offerer:

                    // fr__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer
                    if (preg_match('#^/fr/tableau\\-de\\-bord/offreur/virement/(?P<id>\\d+)/voir\\-facture$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingBankWireController::showBillAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_booking_bank_wire_show_bill_offerer:

                }

                elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/offreur/reservation')) {
                    // fr__RG__cocorico_dashboard_booking_offerer
                    if (preg_match('#^/fr/tableau\\-de\\-bord/offreur/reservation(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_booking_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_offerer')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::indexAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_booking_offerer:

                    // fr__RG__cocorico_dashboard_booking_show_offerer
                    if (preg_match('#^/fr/tableau\\-de\\-bord/offreur/reservation/(?P<id>\\d+)/voir$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_booking_show_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_show_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::showAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_booking_show_offerer:

                    // fr__RG__cocorico_dashboard_booking_edit_offerer
                    if (preg_match('#^/fr/tableau\\-de\\-bord/offreur/reservation/(?P<id>\\d+)/editer/(?P<type>accept|refuse)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_booking_edit_offerer;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_booking_edit_offerer')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\BookingController::editAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_booking_edit_offerer:

                }

                elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/annonce')) {
                    // fr__RG__cocorico_dashboard_listing_edit_availabilities_prices
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/editer\\-dispo\\-prix$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_availabilities_prices;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_availabilities_prices')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilitiesPricesAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_availabilities_prices:

                    // fr__RG__cocorico_dashboard_listing_edit_availability_price
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/editer\\-dispo\\-prix$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_availability_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::editAvailabilityPriceAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_availability_price:

                    // fr__RG__cocorico_dashboard_listing_new_availability_price
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/creer\\-dispo\\-prix$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_new_availability_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_new_availability_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityPriceController::newAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_new_availability_price:

                    // fr__RG__cocorico_dashboard_listing_edit_availabilities_status
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/editer\\-dispo\\-status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_availabilities_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_availabilities_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilitiesStatusAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_availabilities_status:

                    // fr__RG__cocorico_dashboard_listing_edit_availability_status
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/(?P<start_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/(?P<end_time>([01]?[0-9]|2[0-3]):[0-5][0-9])/editer\\-dispo\\-status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_availability_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::editAvailabilityStatusAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_availability_status:

                    // fr__RG__cocorico_dashboard_listing_new_availability_status
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<listing_id>\\d+)/(?P<day>[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))/creer\\-dispo\\-status$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_new_availability_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_new_availability_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingAvailabilityStatusController::newAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_new_availability_status:

                    // fr__RG__cocorico_dashboard_listing_edit_categories_ajax
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-categories\\-ajax$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_categories_ajax;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_categories_ajax')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesAjaxController::editCategoriesAjaxAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_categories_ajax:

                    // fr__RG__cocorico_dashboard_listing_edit_categories
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-categories$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_categories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_categories')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCategoriesController::editCategoriesAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_categories:

                    // fr__RG__cocorico_dashboard_listing_edit_characteristic
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-characteristiques$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_characteristic;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_characteristic')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingCharacteristicController::editCharacteristicAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_characteristic:

                    // fr__RG__cocorico_dashboard_listing_edit_status
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-status$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_fr__RG__cocorico_dashboard_listing_edit_status;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_status')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editStatusAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_status:

                    // fr__RG__cocorico_dashboard_listing_edit_price
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-prix$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_price;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_price')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editPriceAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_price:

                    // fr__RG__cocorico_dashboard_listing_edit_duration
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-durees$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_fr__RG__cocorico_dashboard_listing_edit_duration;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_duration')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::editDurationAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_duration:

                    // fr__RG__cocorico_dashboard_listing
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_listing;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing')), array (  'page' => 1,  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingController::indexAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing:

                    // fr__RG__cocorico_dashboard_listing_edit_discount
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-reductions$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_discount;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_discount')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDiscountController::editDiscountAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_discount:

                    // fr__RG__cocorico_dashboard_listing_duplicate
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/dupliquer$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_listing_duplicate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_duplicate')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingDuplicateController::duplicateAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_duplicate:

                    // fr__RG__cocorico_dashboard_listing_edit_images
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-images$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_images;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_images')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingImageController::editImagesAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_images:

                    // fr__RG__cocorico_dashboard_listing_edit_location
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-adresse$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_location;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_location')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingLocationController::editLocationAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_location:

                    // fr__RG__cocorico_dashboard_listing_edit_presentation
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/editer\\-presentation$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'PUT', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'PUT', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_listing_edit_presentation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_edit_presentation')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPresentationController::editPresentationAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_edit_presentation:

                    // fr__RG__cocorico_dashboard_listing_price_simulator
                    if (preg_match('#^/fr/tableau\\-de\\-bord/annonce/(?P<id>\\d+)/simulation\\-prix$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_fr__RG__cocorico_dashboard_listing_price_simulator;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_listing_price_simulator')), array (  '_controller' => 'Cocorico\\CoreBundle\\Controller\\Dashboard\\Offerer\\ListingPriceSimulatorController::priceSimulatorAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_listing_price_simulator:

                }

                elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/profil-utilisateur/editer-')) {
                    // fr__RG__cocorico_user_dashboard_profile_edit_about_me
                    if ('/fr/tableau-de-bord/profil-utilisateur/editer-a-propos-de-moi' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_user_dashboard_profile_edit_about_me;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileAboutMeController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_dashboard_profile_edit_about_me',);
                    }
                    not_fr__RG__cocorico_user_dashboard_profile_edit_about_me:

                    // fr__RG__cocorico_user_dashboard_profile_edit_bank_account
                    if ('/fr/tableau-de-bord/profil-utilisateur/editer-coordonnees-bancaire' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_user_dashboard_profile_edit_bank_account;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileBankAccountController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_dashboard_profile_edit_bank_account',);
                    }
                    not_fr__RG__cocorico_user_dashboard_profile_edit_bank_account:

                    // fr__RG__cocorico_user_dashboard_profile_edit_contact
                    if ('/fr/tableau-de-bord/profil-utilisateur/editer-contact' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_user_dashboard_profile_edit_contact;
                        }

                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileContactController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_dashboard_profile_edit_contact',);
                    }
                    not_fr__RG__cocorico_user_dashboard_profile_edit_contact:

                }

                // fr__RG__cocorico_user_dashboard_profile_switch
                if ('/fr/tableau-de-bord/profil-utilisateur/changer-de-profil' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__cocorico_user_dashboard_profile_switch;
                    }

                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Dashboard\\ProfileController::profileSwitchAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_dashboard_profile_switch',);
                }
                not_fr__RG__cocorico_user_dashboard_profile_switch:

                if (0 === strpos($pathinfo, '/fr/tableau-de-bord/message')) {
                    // fr__RG__cocorico_dashboard_message
                    if (preg_match('#^/fr/tableau\\-de\\-bord/message(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_message;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_message')), array (  'page' => 1,  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::indexAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_message:

                    // fr__RG__cocorico_dashboard_message_new
                    if (preg_match('#^/fr/tableau\\-de\\-bord/message/(?P<slug>[a-z0-9-]+)/creer$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_message_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_message_new')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::newThreadAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_message_new:

                    // fr__RG__cocorico_dashboard_message_thread_view
                    if (0 === strpos($pathinfo, '/fr/tableau-de-bord/message/conversation') && preg_match('#^/fr/tableau\\-de\\-bord/message/conversation/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_message_thread_view')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::threadAction',  '_locale' => 'fr',));
                    }

                    // fr__RG__cocorico_dashboard_message_thread_delete
                    if (0 === strpos($pathinfo, '/fr/tableau-de-bord/message/supprimer') && preg_match('#^/fr/tableau\\-de\\-bord/message/supprimer/(?P<threadId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_message_thread_delete')), array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::deleteAction',  '_locale' => 'fr',));
                    }

                    // fr__RG__cocorico_dashboard_message_nb_unread
                    if ('/fr/tableau-de-bord/message/nombres-de-message' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_message_nb_unread;
                        }

                        return array (  '_controller' => 'Cocorico\\MessageBundle\\Controller\\Dashboard\\MessageController::nbUnReadMessagesAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_dashboard_message_nb_unread',);
                    }
                    not_fr__RG__cocorico_dashboard_message_nb_unread:

                }

                elseif (0 === strpos($pathinfo, '/fr/tableau-de-bord/revue')) {
                    // fr__RG__cocorico_dashboard_review_new
                    if (0 === strpos($pathinfo, '/fr/tableau-de-bord/revue/creer') && preg_match('#^/fr/tableau\\-de\\-bord/revue/creer/(?P<booking_id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fr__RG__cocorico_dashboard_review_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_dashboard_review_new')), array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::newAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_dashboard_review_new:

                    // fr__RG__cocorico_dashboard_reviews_made
                    if ('/fr/tableau-de-bord/revue/revues-effectuees' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_reviews_made;
                        }

                        return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::madeReviewsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_dashboard_reviews_made',);
                    }
                    not_fr__RG__cocorico_dashboard_reviews_made:

                    // fr__RG__cocorico_dashboard_reviews_received
                    if ('/fr/tableau-de-bord/revue/revues-recues' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_dashboard_reviews_received;
                        }

                        return array (  '_controller' => 'Cocorico\\ReviewBundle\\Controller\\Dashboard\\ReviewController::receivedReviewsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_dashboard_reviews_received',);
                    }
                    not_fr__RG__cocorico_dashboard_reviews_received:

                }

            }

            elseif (0 === strpos($pathinfo, '/fr/media/cache/resolve')) {
                // fr__RG__liip_imagine_filter_runtime
                if (preg_match('#^/fr/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__liip_imagine_filter_runtime;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',  '_locale' => 'fr',));
                }
                not_fr__RG__liip_imagine_filter_runtime:

                // fr__RG__liip_imagine_filter
                if (preg_match('#^/fr/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__liip_imagine_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',  '_locale' => 'fr',));
                }
                not_fr__RG__liip_imagine_filter:

            }

            elseif (0 === strpos($pathinfo, '/fr/mot-de-passe-reinitialisation-')) {
                // fr__RG__cocorico_user_resetting_request
                if ('/fr/mot-de-passe-reinitialisation-demande' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_resetting_request',);
                }

                // fr__RG__cocorico_user_resetting_send_email
                if ('/fr/mot-de-passe-reinitialisation-envoi-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__cocorico_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_resetting_send_email',);
                }
                not_fr__RG__cocorico_user_resetting_send_email:

                // fr__RG__cocorico_user_resetting_check_email
                if ('/fr/mot-de-passe-reinitialisation-verification-email' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_resetting_check_email',);
                }

                // fr__RG__cocorico_user_resetting_reset
                if (0 === strpos($pathinfo, '/fr/mot-de-passe-reinitialisation-reinitialiser') && preg_match('#^/fr/mot\\-de\\-passe\\-reinitialisation\\-reinitialiser/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_user_resetting_reset')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ResettingController::resetAction',  '_locale' => 'fr',));
                }

            }

            // fr__RG__cocorico_user_profile_show
            if (0 === strpos($pathinfo, '/fr/profil-utilisateur') && preg_match('#^/fr/profil\\-utilisateur/(?P<id>\\d+)/voir$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__cocorico_user_profile_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_user_profile_show')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\ProfileController::showAction',  '_locale' => 'fr',));
            }
            not_fr__RG__cocorico_user_profile_show:

            // fr__RG__cocorico_page_show
            if (0 === strpos($pathinfo, '/fr/page') && preg_match('#^/fr/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__cocorico_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_page_show')), array (  '_controller' => 'Cocorico\\PageBundle\\Controller\\Frontend\\PageController::showAction',  '_locale' => 'fr',));
            }
            not_fr__RG__cocorico_page_show:

            if (0 === strpos($pathinfo, '/fr/i')) {
                if (0 === strpos($pathinfo, '/fr/inscription')) {
                    // fr__RG__cocorico_user_register
                    if ('/fr/inscription' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_register',);
                    }

                    // fr__RG__cocorico_user_register_confirmation
                    if (0 === strpos($pathinfo, '/fr/inscription-confirmation') && preg_match('#^/fr/inscription\\-confirmation/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__cocorico_user_register_confirmation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_user_register_confirmation')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__cocorico_user_register_confirmation:

                    // fr__RG__cocorico_user_register_confirmed
                    if ('/fr/inscription-confirmee' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::confirmedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_register_confirmed',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/fr/identification')) {
                    // fr__RG__cocorico_user_login
                    if ('/fr/identification' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_login',);
                    }

                    // fr__RG__cocorico_user_login_check
                    if ('/fr/identification-verification' === $pathinfo) {
                        return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::checkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_login_check',);
                    }

                }

                // fr__RG__cocorico_user_image
                if ('/fr/images-utilisateur' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_user_image;
                    }

                    $ret = array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\UserImageController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_image',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'fr__RG__cocorico_user_image'));
                    }

                    return $ret;
                }
                not_fr__RG__cocorico_user_image:

            }

            // fr__RG__cocorico_user_registration_check_email
            if ('/fr/verifier-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fr__RG__cocorico_user_registration_check_email;
                }

                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\RegistrationController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_registration_check_email',);
            }
            not_fr__RG__cocorico_user_registration_check_email:

            // fr__RG__cocorico_user_logout
            if ('/fr/deconnexion' === $pathinfo) {
                return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Frontend\\SecurityController::logoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_user_logout',);
            }

            if (0 === strpos($pathinfo, '/fr/oauth/connect')) {
                // fr__RG__hwi_oauth_service_redirect
                if (preg_match('#^/fr/oauth/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'fr',));
                }

                // fr__RG__hwi_oauth_connect
                if ('/fr/oauth/connect' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'fr',  '_route' => 'fr__RG__hwi_oauth_connect',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'fr__RG__hwi_oauth_connect'));
                    }

                    return $ret;
                }

                // fr__RG__hwi_oauth_connect_service
                if (0 === strpos($pathinfo, '/fr/oauth/connect/service') && preg_match('#^/fr/oauth/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',  '_locale' => 'fr',));
                }

                // fr__RG__hwi_oauth_connect_registration
                if (0 === strpos($pathinfo, '/fr/oauth/connect/registration') && preg_match('#^/fr/oauth/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',  '_locale' => 'fr',));
                }

            }

            // fr__RG__hwi_facebook_login
            if ('/fr/oauth/fb-login' === $pathinfo) {
                return array (  '_locale' => 'fr',  '_route' => 'fr__RG__hwi_facebook_login',);
            }

            // fr__RG__ef_connect
            if (0 === strpos($pathinfo, '/fr/efconnect') && preg_match('#^/fr/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'fr',));
            }

            // fr__RG__elfinder
            if (0 === strpos($pathinfo, '/fr/elfinder') && preg_match('#^/fr/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',  '_locale' => 'fr',));
            }

            // fr__RG__cocorico_contact_new
            if ('/fr/contact/creer' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__cocorico_contact_new;
                }

                return array (  '_controller' => 'Cocorico\\ContactBundle\\Controller\\Frontend\\ContactController::newAction',  '_locale' => 'fr',  '_route' => 'fr__RG__cocorico_contact_new',);
            }
            not_fr__RG__cocorico_contact_new:

            if (0 === strpos($pathinfo, '/fr/geocoding')) {
                // fr__RG__cocorico_geo_create
                if (preg_match('#^/fr/geocoding/(?P<id>\\d+)/create$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__cocorico_geo_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_geo_create')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::createAction',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_geo_create:

                // fr__RG__cocorico_geo_reverse_geocoding
                if (preg_match('#^/fr/geocoding/(?P<lat>[0-9.-]+)/(?P<lng>[0-9.-]+)/(?P<lang>en|fr)/reverse_geocoding$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__cocorico_geo_reverse_geocoding;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__cocorico_geo_reverse_geocoding')), array (  '_controller' => 'Cocorico\\GeoBundle\\Controller\\GeocodingController::reverseGeocode',  '_locale' => 'fr',));
                }
                not_fr__RG__cocorico_geo_reverse_geocoding:

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'sonata_admin_redirect'));
                }

                return $ret;
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/contact')) {
                // admin_cocorico_contact_contact_list
                if ('/admin/contact/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_list',  '_route' => 'admin_cocorico_contact_contact_list',);
                }

                // admin_cocorico_contact_contact_batch
                if ('/admin/contact/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_batch',  '_route' => 'admin_cocorico_contact_contact_batch',);
                }

                // admin_cocorico_contact_contact_edit
                if (preg_match('#^/admin/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_contact_contact_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_edit',));
                }

                // admin_cocorico_contact_contact_show
                if (preg_match('#^/admin/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_contact_contact_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_show',));
                }

                // admin_cocorico_contact_contact_export
                if ('/admin/contact/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.contact',  '_sonata_name' => 'admin_cocorico_contact_contact_export',  '_route' => 'admin_cocorico_contact_contact_export',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/l')) {
                if (0 === strpos($pathinfo, '/admin/listing')) {
                    // admin_cocorico_core_listing_list
                    if ('/admin/listing/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_list',  '_route' => 'admin_cocorico_core_listing_list',);
                    }

                    // admin_cocorico_core_listing_batch
                    if ('/admin/listing/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_batch',  '_route' => 'admin_cocorico_core_listing_batch',);
                    }

                    // admin_cocorico_core_listing_edit
                    if (preg_match('#^/admin/listing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listing_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_edit',));
                    }

                    // admin_cocorico_core_listing_show
                    if (preg_match('#^/admin/listing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listing_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_show',));
                    }

                    // admin_cocorico_core_listing_export
                    if ('/admin/listing/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing',  '_sonata_name' => 'admin_cocorico_core_listing_export',  '_route' => 'admin_cocorico_core_listing_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/listing-characteristic')) {
                        // admin_cocorico_core_listingcharacteristic_list
                        if ('/admin/listing-characteristic/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_list',  '_route' => 'admin_cocorico_core_listingcharacteristic_list',);
                        }

                        // admin_cocorico_core_listingcharacteristic_create
                        if ('/admin/listing-characteristic/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_create',  '_route' => 'admin_cocorico_core_listingcharacteristic_create',);
                        }

                        // admin_cocorico_core_listingcharacteristic_batch
                        if ('/admin/listing-characteristic/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_batch',  '_route' => 'admin_cocorico_core_listingcharacteristic_batch',);
                        }

                        // admin_cocorico_core_listingcharacteristic_edit
                        if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_edit',));
                        }

                        // admin_cocorico_core_listingcharacteristic_delete
                        if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_delete',));
                        }

                        // admin_cocorico_core_listingcharacteristic_show
                        if (preg_match('#^/admin/listing\\-characteristic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristic_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_show',));
                        }

                        // admin_cocorico_core_listingcharacteristic_export
                        if ('/admin/listing-characteristic/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristic_export',  '_route' => 'admin_cocorico_core_listingcharacteristic_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/listing-characteristic-')) {
                            if (0 === strpos($pathinfo, '/admin/listing-characteristic-group')) {
                                // admin_cocorico_core_listingcharacteristicgroup_list
                                if ('/admin/listing-characteristic-group/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_list',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_list',);
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_create
                                if ('/admin/listing-characteristic-group/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_create',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_create',);
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_batch
                                if ('/admin/listing-characteristic-group/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_batch',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_batch',);
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_edit
                                if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_edit',));
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_delete
                                if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_delete',));
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_show
                                if (preg_match('#^/admin/listing\\-characteristic\\-group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicgroup_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_show',));
                                }

                                // admin_cocorico_core_listingcharacteristicgroup_export
                                if ('/admin/listing-characteristic-group/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_group',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicgroup_export',  '_route' => 'admin_cocorico_core_listingcharacteristicgroup_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/listing-characteristic-type')) {
                                // admin_cocorico_core_listingcharacteristictype_list
                                if ('/admin/listing-characteristic-type/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_list',  '_route' => 'admin_cocorico_core_listingcharacteristictype_list',);
                                }

                                // admin_cocorico_core_listingcharacteristictype_create
                                if ('/admin/listing-characteristic-type/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_create',  '_route' => 'admin_cocorico_core_listingcharacteristictype_create',);
                                }

                                // admin_cocorico_core_listingcharacteristictype_batch
                                if ('/admin/listing-characteristic-type/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_batch',  '_route' => 'admin_cocorico_core_listingcharacteristictype_batch',);
                                }

                                // admin_cocorico_core_listingcharacteristictype_edit
                                if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_edit',));
                                }

                                // admin_cocorico_core_listingcharacteristictype_delete
                                if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_delete',));
                                }

                                // admin_cocorico_core_listingcharacteristictype_show
                                if (preg_match('#^/admin/listing\\-characteristic\\-type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristictype_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_show',));
                                }

                                // admin_cocorico_core_listingcharacteristictype_export
                                if ('/admin/listing-characteristic-type/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_type',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristictype_export',  '_route' => 'admin_cocorico_core_listingcharacteristictype_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/listing-characteristic-value')) {
                                // admin_cocorico_core_listingcharacteristicvalue_list
                                if ('/admin/listing-characteristic-value/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_list',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_list',);
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_create
                                if ('/admin/listing-characteristic-value/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_create',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_create',);
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_batch
                                if ('/admin/listing-characteristic-value/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_batch',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_batch',);
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_edit
                                if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_edit',));
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_delete
                                if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_delete',));
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_show
                                if (preg_match('#^/admin/listing\\-characteristic\\-value/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcharacteristicvalue_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_show',));
                                }

                                // admin_cocorico_core_listingcharacteristicvalue_export
                                if ('/admin/listing-characteristic-value/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_characteristic_value',  '_sonata_name' => 'admin_cocorico_core_listingcharacteristicvalue_export',  '_route' => 'admin_cocorico_core_listingcharacteristicvalue_export',);
                                }

                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/listing-category')) {
                        // admin_cocorico_core_listingcategory_list
                        if ('/admin/listing-category/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_list',  '_route' => 'admin_cocorico_core_listingcategory_list',);
                        }

                        // admin_cocorico_core_listingcategory_create
                        if ('/admin/listing-category/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_create',  '_route' => 'admin_cocorico_core_listingcategory_create',);
                        }

                        // admin_cocorico_core_listingcategory_batch
                        if ('/admin/listing-category/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_batch',  '_route' => 'admin_cocorico_core_listingcategory_batch',);
                        }

                        // admin_cocorico_core_listingcategory_edit
                        if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_edit',));
                        }

                        // admin_cocorico_core_listingcategory_delete
                        if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_delete',));
                        }

                        // admin_cocorico_core_listingcategory_show
                        if (preg_match('#^/admin/listing\\-category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_listingcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_show',));
                        }

                        // admin_cocorico_core_listingcategory_export
                        if ('/admin/listing-category/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.listing_category',  '_sonata_name' => 'admin_cocorico_core_listingcategory_export',  '_route' => 'admin_cocorico_core_listingcategory_export',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ('/admin/login_check' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_security_check;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/booking')) {
                // admin_cocorico_core_booking_list
                if ('/admin/booking/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_list',  '_route' => 'admin_cocorico_core_booking_list',);
                }

                // admin_cocorico_core_booking_batch
                if ('/admin/booking/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_batch',  '_route' => 'admin_cocorico_core_booking_batch',);
                }

                // admin_cocorico_core_booking_edit
                if (preg_match('#^/admin/booking/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_booking_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_edit',));
                }

                // admin_cocorico_core_booking_show
                if (preg_match('#^/admin/booking/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_booking_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_show',));
                }

                // admin_cocorico_core_booking_export
                if ('/admin/booking/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking',  '_sonata_name' => 'admin_cocorico_core_booking_export',  '_route' => 'admin_cocorico_core_booking_export',);
                }

                if (0 === strpos($pathinfo, '/admin/booking-')) {
                    if (0 === strpos($pathinfo, '/admin/booking-bank-wire')) {
                        // admin_cocorico_core_bookingbankwire_list
                        if ('/admin/booking-bank-wire/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_list',  '_route' => 'admin_cocorico_core_bookingbankwire_list',);
                        }

                        // admin_cocorico_core_bookingbankwire_batch
                        if ('/admin/booking-bank-wire/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_batch',  '_route' => 'admin_cocorico_core_bookingbankwire_batch',);
                        }

                        // admin_cocorico_core_bookingbankwire_edit
                        if (preg_match('#^/admin/booking\\-bank\\-wire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingbankwire_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_edit',));
                        }

                        // admin_cocorico_core_bookingbankwire_show
                        if (preg_match('#^/admin/booking\\-bank\\-wire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingbankwire_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_show',));
                        }

                        // admin_cocorico_core_bookingbankwire_export
                        if ('/admin/booking-bank-wire/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking_bank_wire',  '_sonata_name' => 'admin_cocorico_core_bookingbankwire_export',  '_route' => 'admin_cocorico_core_bookingbankwire_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/booking-payin-refund')) {
                        // admin_cocorico_core_bookingpayinrefund_list
                        if ('/admin/booking-payin-refund/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_list',  '_route' => 'admin_cocorico_core_bookingpayinrefund_list',);
                        }

                        // admin_cocorico_core_bookingpayinrefund_batch
                        if ('/admin/booking-payin-refund/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_batch',  '_route' => 'admin_cocorico_core_bookingpayinrefund_batch',);
                        }

                        // admin_cocorico_core_bookingpayinrefund_edit
                        if (preg_match('#^/admin/booking\\-payin\\-refund/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingpayinrefund_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_edit',));
                        }

                        // admin_cocorico_core_bookingpayinrefund_show
                        if (preg_match('#^/admin/booking\\-payin\\-refund/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookingpayinrefund_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_show',));
                        }

                        // admin_cocorico_core_bookingpayinrefund_export
                        if ('/admin/booking-payin-refund/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking_payin_refund',  '_sonata_name' => 'admin_cocorico_core_bookingpayinrefund_export',  '_route' => 'admin_cocorico_core_bookingpayinrefund_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/booking-user-address')) {
                        // admin_cocorico_core_bookinguseraddress_list
                        if ('/admin/booking-user-address/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.booking_user_address',  '_sonata_name' => 'admin_cocorico_core_bookinguseraddress_list',  '_route' => 'admin_cocorico_core_bookinguseraddress_list',);
                        }

                        // admin_cocorico_core_bookinguseraddress_batch
                        if ('/admin/booking-user-address/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.booking_user_address',  '_sonata_name' => 'admin_cocorico_core_bookinguseraddress_batch',  '_route' => 'admin_cocorico_core_bookinguseraddress_batch',);
                        }

                        // admin_cocorico_core_bookinguseraddress_edit
                        if (preg_match('#^/admin/booking\\-user\\-address/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookinguseraddress_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.booking_user_address',  '_sonata_name' => 'admin_cocorico_core_bookinguseraddress_edit',));
                        }

                        // admin_cocorico_core_bookinguseraddress_show
                        if (preg_match('#^/admin/booking\\-user\\-address/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_core_bookinguseraddress_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.booking_user_address',  '_sonata_name' => 'admin_cocorico_core_bookinguseraddress_show',));
                        }

                        // admin_cocorico_core_bookinguseraddress_export
                        if ('/admin/booking-user-address/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.booking_user_address',  '_sonata_name' => 'admin_cocorico_core_bookinguseraddress_export',  '_route' => 'admin_cocorico_core_bookinguseraddress_export',);
                        }

                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                if (0 === strpos($pathinfo, '/admin/user-address')) {
                    // admin_cocorico_user_useraddress_list
                    if ('/admin/user-address/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user_address',  '_sonata_name' => 'admin_cocorico_user_useraddress_list',  '_route' => 'admin_cocorico_user_useraddress_list',);
                    }

                    // admin_cocorico_user_useraddress_batch
                    if ('/admin/user-address/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user_address',  '_sonata_name' => 'admin_cocorico_user_useraddress_batch',  '_route' => 'admin_cocorico_user_useraddress_batch',);
                    }

                    // admin_cocorico_user_useraddress_edit
                    if (preg_match('#^/admin/user\\-address/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_user_useraddress_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user_address',  '_sonata_name' => 'admin_cocorico_user_useraddress_edit',));
                    }

                    // admin_cocorico_user_useraddress_show
                    if (preg_match('#^/admin/user\\-address/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_user_useraddress_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user_address',  '_sonata_name' => 'admin_cocorico_user_useraddress_show',));
                    }

                    // admin_cocorico_user_useraddress_export
                    if ('/admin/user-address/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user_address',  '_sonata_name' => 'admin_cocorico_user_useraddress_export',  '_route' => 'admin_cocorico_user_useraddress_export',);
                    }

                }

                // admin_cocorico_user_user_list
                if ('/admin/user/list' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_list',  '_route' => 'admin_cocorico_user_user_list',);
                }

                // admin_cocorico_user_user_batch
                if ('/admin/user/batch' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_batch',  '_route' => 'admin_cocorico_user_user_batch',);
                }

                // admin_cocorico_user_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_user_user_edit')), array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_edit',));
                }

                // admin_cocorico_user_user_export
                if ('/admin/user/export' === $pathinfo) {
                    return array (  '_controller' => 'Cocorico\\UserBundle\\Controller\\Admin\\UserAdminController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_cocorico_user_user_export',  '_route' => 'admin_cocorico_user_user_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/page')) {
                // admin_cocorico_page_page_list
                if ('/admin/page/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_list',  '_route' => 'admin_cocorico_page_page_list',);
                }

                // admin_cocorico_page_page_create
                if ('/admin/page/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_create',  '_route' => 'admin_cocorico_page_page_create',);
                }

                // admin_cocorico_page_page_batch
                if ('/admin/page/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_batch',  '_route' => 'admin_cocorico_page_page_batch',);
                }

                // admin_cocorico_page_page_edit
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_edit',));
                }

                // admin_cocorico_page_page_delete
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_delete',));
                }

                // admin_cocorico_page_page_show
                if (preg_match('#^/admin/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_page_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_show',));
                }

                // admin_cocorico_page_page_export
                if ('/admin/page/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.page',  '_sonata_name' => 'admin_cocorico_page_page_export',  '_route' => 'admin_cocorico_page_page_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/parameter')) {
                // admin_cocorico_config_parameter_list
                if ('/admin/parameter/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_list',  '_route' => 'admin_cocorico_config_parameter_list',);
                }

                // admin_cocorico_config_parameter_batch
                if ('/admin/parameter/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_batch',  '_route' => 'admin_cocorico_config_parameter_batch',);
                }

                // admin_cocorico_config_parameter_edit
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_edit',));
                }

                // admin_cocorico_config_parameter_show
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_show',));
                }

                // admin_cocorico_config_parameter_export
                if ('/admin/parameter/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_export',  '_route' => 'admin_cocorico_config_parameter_export',);
                }

                // admin_cocorico_config_parameter_history
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history',));
                }

                // admin_cocorico_config_parameter_history_view_revision
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history_view_revision',));
                }

                // admin_cocorico_config_parameter_history_compare_revisions
                if (preg_match('#^/admin/parameter/(?P<id>[^/]++)/history/(?P<base_revision>[^/]++)/(?P<compare_revision>[^/]++)/compare$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_config_parameter_history_compare_revisions')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyCompareRevisionsAction',  '_sonata_admin' => 'sonata.admin.parameter',  '_sonata_name' => 'admin_cocorico_config_parameter_history_compare_revisions',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/footer')) {
                // admin_cocorico_cms_footer_list
                if ('/admin/footer/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_list',  '_route' => 'admin_cocorico_cms_footer_list',);
                }

                // admin_cocorico_cms_footer_create
                if ('/admin/footer/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_create',  '_route' => 'admin_cocorico_cms_footer_create',);
                }

                // admin_cocorico_cms_footer_batch
                if ('/admin/footer/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_batch',  '_route' => 'admin_cocorico_cms_footer_batch',);
                }

                // admin_cocorico_cms_footer_edit
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_edit',));
                }

                // admin_cocorico_cms_footer_delete
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_delete',));
                }

                // admin_cocorico_cms_footer_show
                if (preg_match('#^/admin/footer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_cms_footer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_show',));
                }

                // admin_cocorico_cms_footer_export
                if ('/admin/footer/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.footer',  '_sonata_name' => 'admin_cocorico_cms_footer_export',  '_route' => 'admin_cocorico_cms_footer_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/thread')) {
                // admin_cocorico_message_thread_list
                if ('/admin/thread/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_list',  '_route' => 'admin_cocorico_message_thread_list',);
                }

                // admin_cocorico_message_thread_batch
                if ('/admin/thread/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_batch',  '_route' => 'admin_cocorico_message_thread_batch',);
                }

                // admin_cocorico_message_thread_edit
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_thread_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_edit',));
                }

                // admin_cocorico_message_thread_show
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_thread_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_show',));
                }

                // admin_cocorico_message_thread_export
                if ('/admin/thread/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.thread',  '_sonata_name' => 'admin_cocorico_message_thread_export',  '_route' => 'admin_cocorico_message_thread_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/message')) {
                // admin_cocorico_message_message_list
                if ('/admin/message/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_list',  '_route' => 'admin_cocorico_message_message_list',);
                }

                // admin_cocorico_message_message_batch
                if ('/admin/message/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_batch',  '_route' => 'admin_cocorico_message_message_batch',);
                }

                // admin_cocorico_message_message_edit
                if (preg_match('#^/admin/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_message_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_edit',));
                }

                // admin_cocorico_message_message_show
                if (preg_match('#^/admin/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_message_message_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_show',));
                }

                // admin_cocorico_message_message_export
                if ('/admin/message/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.message',  '_sonata_name' => 'admin_cocorico_message_message_export',  '_route' => 'admin_cocorico_message_message_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/review')) {
                // admin_cocorico_review_review_list
                if ('/admin/review/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_list',  '_route' => 'admin_cocorico_review_review_list',);
                }

                // admin_cocorico_review_review_batch
                if ('/admin/review/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_batch',  '_route' => 'admin_cocorico_review_review_batch',);
                }

                // admin_cocorico_review_review_edit
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_review_review_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_edit',));
                }

                // admin_cocorico_review_review_show
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cocorico_review_review_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_show',));
                }

                // admin_cocorico_review_review_export
                if ('/admin/review/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.review',  '_sonata_name' => 'admin_cocorico_review_review_export',  '_route' => 'admin_cocorico_review_review_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/__translations')) {
                // jms_translation_update_message
                if (0 === strpos($pathinfo, '/admin/__translations/api/configs') && preg_match('#^/admin/__translations/api/configs/(?P<config>[^/]++)/domains/(?P<domain>[^/]++)/locales/(?P<locale>[^/]++)/messages$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_jms_translation_update_message;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jms_translation_update_message')), array (  'id' => NULL,  '_controller' => 'JMS\\TranslationBundle\\Controller\\ApiController::updateMessageAction',));
                }
                not_jms_translation_update_message:

                // jms_translation_index
                if ('/admin/__translations' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'JMS\\TranslationBundle\\Controller\\TranslateController::indexAction',  '_route' => 'jms_translation_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'jms_translation_index'));
                    }

                    return $ret;
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
