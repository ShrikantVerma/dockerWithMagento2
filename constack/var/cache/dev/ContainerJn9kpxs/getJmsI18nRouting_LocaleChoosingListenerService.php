<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_i18n_routing.locale_choosing_listener' shared service.

return $this->services['jms_i18n_routing.locale_choosing_listener'] = new \JMS\I18nRoutingBundle\EventListener\LocaleChoosingListener('fr', $this->parameters['jms_i18n_routing.locales'], ${($_ = isset($this->services['jms_i18n_routing.locale_resolver.default']) ? $this->services['jms_i18n_routing.locale_resolver.default'] : $this->services['jms_i18n_routing.locale_resolver.default'] = new \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver('hl')) && false ?: '_'});