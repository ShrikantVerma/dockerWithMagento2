<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.util.user_manipulator' shared service.

return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(${($_ = isset($this->services['cocorico_user.user_manager']) ? $this->services['cocorico_user.user_manager'] : $this->load(__DIR__.'/getCocoricoUser_UserManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
