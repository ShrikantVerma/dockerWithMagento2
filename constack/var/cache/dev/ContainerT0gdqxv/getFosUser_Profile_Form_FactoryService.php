<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.profile.form.factory' shared service.

return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, 'user_profile', 'Cocorico\\UserBundle\\Form\\Type\\ProfileAboutMeFormType', NULL, array('validation_groups' => $this->parameters['fos_user.profile.form.validation_groups']));
