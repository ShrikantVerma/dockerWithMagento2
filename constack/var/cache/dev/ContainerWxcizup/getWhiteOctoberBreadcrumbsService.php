<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'white_october_breadcrumbs' shared service.

$this->services['white_october_breadcrumbs'] = $instance = new \WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs();

$instance->setRouter(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});

return $instance;
