<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico_message.thread_manager' shared service.

return $this->services['cocorico_message.thread_manager'] = new \Cocorico\MessageBundle\Model\ThreadManager(${($_ = isset($this->services['fos_message.thread_manager']) ? $this->services['fos_message.thread_manager'] : $this->getFosMessage_ThreadManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.message_manager']) ? $this->services['fos_message.message_manager'] : $this->getFosMessage_MessageManagerService()) && false ?: '_'}, ${($_ = isset($this->services['cocorico_user.mailer.twig_swift']) ? $this->services['cocorico_user.mailer.twig_swift'] : $this->load(__DIR__.'/getCocoricoUser_Mailer_TwigSwiftService.php')) && false ?: '_'}, 10);
