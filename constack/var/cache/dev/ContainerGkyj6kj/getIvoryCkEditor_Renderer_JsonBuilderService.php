<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory_ck_editor.renderer.json_builder' shared service.

return $this->services['ivory_ck_editor.renderer.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});