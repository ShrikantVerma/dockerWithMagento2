<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'bazinga_geocoder.provider.google_maps' shared service.

return $this->services['bazinga_geocoder.provider.google_maps'] = \Bazinga\GeocoderBundle\ProviderFactory\PluginProviderFactory::createPluginProvider(array(0 => ${($_ = isset($this->services['bazinga_geocoder.provider.google_maps.profiler']) ? $this->services['bazinga_geocoder.provider.google_maps.profiler'] : $this->services['bazinga_geocoder.provider.google_maps.profiler'] = new \Bazinga\GeocoderBundle\Plugin\ProfilingPlugin('google_maps')) && false ?: '_'}), new \Bazinga\GeocoderBundle\ProviderFactory\GoogleMapsFactory(), array('api_key' => 'AIzaSyASijJ05pLq3ha4mKrriQsJcTQUHQgFMd0', 'region' => NULL));