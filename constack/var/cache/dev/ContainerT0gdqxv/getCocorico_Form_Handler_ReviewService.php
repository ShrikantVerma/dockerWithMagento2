<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.form.handler.review' shared service.

return $this->services['cocorico.form.handler.review'] = new \Cocorico\ReviewBundle\Form\Handler\Frontend\ReviewFormHandler(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['cocorico.review.manager']) ? $this->services['cocorico.review.manager'] : $this->load(__DIR__.'/getCocorico_Review_ManagerService.php')) && false ?: '_'});