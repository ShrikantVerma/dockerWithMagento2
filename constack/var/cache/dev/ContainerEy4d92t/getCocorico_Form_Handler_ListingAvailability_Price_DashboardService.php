<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.form.handler.listing_availability.price.dashboard' shared service.

$this->services['cocorico.form.handler.listing_availability.price.dashboard'] = $instance = new \Cocorico\CoreBundle\Form\Handler\Dashboard\ListingAvailabilityPriceFormHandler();

$instance->setRequest(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
$instance->setListingAvailabilityManager(${($_ = isset($this->services['cocorico.listing_availability.manager']) ? $this->services['cocorico.listing_availability.manager'] : $this->load(__DIR__.'/getCocorico_ListingAvailability_ManagerService.php')) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});

return $instance;