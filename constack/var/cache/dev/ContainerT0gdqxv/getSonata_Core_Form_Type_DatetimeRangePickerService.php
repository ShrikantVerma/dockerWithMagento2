<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.form.type.datetime_range_picker' shared service.

return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
