<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico_contact.form.handler.contact' shared service.

return $this->services['cocorico_contact.form.handler.contact'] = new \Cocorico\ContactBundle\Form\Handler\Frontend\ContactFormHandler(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['cocorico_contact.contact.manager']) ? $this->services['cocorico_contact.contact.manager'] : $this->load(__DIR__.'/getCocoricoContact_Contact_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['cocorico_contact.mailer.twig_swift']) ? $this->services['cocorico_contact.mailer.twig_swift'] : $this->load(__DIR__.'/getCocoricoContact_Mailer_TwigSwiftService.php')) && false ?: '_'});
