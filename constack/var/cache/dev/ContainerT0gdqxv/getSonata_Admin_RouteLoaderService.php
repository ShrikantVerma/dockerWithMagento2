<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route_loader' shared service.

return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, array(0 => 'sonata.admin.listing', 1 => 'sonata.admin.booking', 2 => 'sonata.admin.listing_characteristic', 3 => 'sonata.admin.listing_characteristic_group', 4 => 'sonata.admin.listing_characteristic_type', 5 => 'sonata.admin.listing_characteristic_value', 6 => 'sonata.admin.listing_category', 7 => 'sonata.admin.booking_bank_wire', 8 => 'sonata.admin.booking_payin_refund', 9 => 'sonata.admin.booking_user_address', 10 => 'sonata.admin.user_address', 11 => 'sonata.user.admin.user', 12 => 'sonata.admin.page', 13 => 'sonata.admin.footer', 14 => 'sonata.admin.thread', 15 => 'sonata.admin.message', 16 => 'sonata.admin.contact', 17 => 'sonata.admin.review', 18 => 'sonata.admin.parameter'), $this);