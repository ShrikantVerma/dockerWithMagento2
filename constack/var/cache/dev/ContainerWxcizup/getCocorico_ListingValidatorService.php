<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.listing_validator' shared service.

return $this->services['cocorico.listing_validator'] = new \Cocorico\CoreBundle\Validator\Constraints\ListingValidator(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 24, 1, 1, 100, array());
