<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.security.interactive_login_listener' shared service.

return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(${($_ = isset($this->services['cocorico_user.user_manager']) ? $this->services['cocorico_user.user_manager'] : $this->load(__DIR__.'/getCocoricoUser_UserManagerService.php')) && false ?: '_'});
