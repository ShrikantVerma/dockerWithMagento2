<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.service.rss' shared service.

return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'});