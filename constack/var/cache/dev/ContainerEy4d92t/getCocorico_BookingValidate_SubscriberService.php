<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.booking_validate.subscriber' shared service.

return $this->services['cocorico.booking_validate.subscriber'] = new \Cocorico\CoreBundle\Event\BookingValidateSubscriber(${($_ = isset($this->services['cocorico.booking_bank_wire.manager']) ? $this->services['cocorico.booking_bank_wire.manager'] : $this->load(__DIR__.'/getCocorico_BookingBankWire_ManagerService.php')) && false ?: '_'});
