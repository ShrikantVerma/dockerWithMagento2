<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.form.type.price' shared service.

return $this->services['cocorico.form.type.price'] = new \Cocorico\CoreBundle\Form\Type\PriceType('EUR', 2, ${($_ = isset($this->services['lexik_currency.converter']) ? $this->services['lexik_currency.converter'] : $this->load(__DIR__.'/getLexikCurrency_ConverterService.php')) && false ?: '_'});
