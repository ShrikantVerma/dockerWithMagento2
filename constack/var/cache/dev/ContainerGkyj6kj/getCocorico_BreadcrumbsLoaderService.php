<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.breadcrumbs_loader' shared service.

return $this->services['cocorico.breadcrumbs_loader'] = new \Cocorico\BreadcrumbBundle\Services\BreadcrumbsYamlLoader(${($_ = isset($this->services['cocorico.breadcrumbs_yaml_parser']) ? $this->services['cocorico.breadcrumbs_yaml_parser'] : $this->services['cocorico.breadcrumbs_yaml_parser'] = new \Symfony\Component\Yaml\Parser()) && false ?: '_'}, ${($_ = isset($this->services['cocorico.breadcrumbs_yaml_locator']) ? $this->services['cocorico.breadcrumbs_yaml_locator'] : $this->services['cocorico.breadcrumbs_yaml_locator'] = new \Symfony\Component\Config\FileLocator('/cocorico/app/../src/Cocorico/BreadcrumbBundle/Resources/content/')) && false ?: '_'});
