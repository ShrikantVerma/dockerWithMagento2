<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.listing_image_upload_listener' shared service.

return $this->services['cocorico.listing_image_upload_listener'] = new \Cocorico\CoreBundle\Listener\ListingImageUploadListener(${($_ = isset($this->services['cocorico.listing.manager']) ? $this->services['cocorico.listing.manager'] : $this->load(__DIR__.'/getCocorico_Listing_ManagerService.php')) && false ?: '_'});
