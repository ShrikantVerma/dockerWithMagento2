<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.filter.loader.background' shared service.

return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->load(__DIR__.'/getLiipImagineService.php')) && false ?: '_'});
