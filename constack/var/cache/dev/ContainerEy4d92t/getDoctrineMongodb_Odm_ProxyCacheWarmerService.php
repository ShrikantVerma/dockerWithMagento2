<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_mongodb.odm.proxy_cache_warmer' shared service.

return $this->services['doctrine_mongodb.odm.proxy_cache_warmer'] = new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\ProxyCacheWarmer($this);
