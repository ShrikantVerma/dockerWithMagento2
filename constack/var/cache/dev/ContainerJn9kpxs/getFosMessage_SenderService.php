<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_message.sender' shared service.

return $this->services['fos_message.sender'] = new \FOS\MessageBundle\Sender\Sender(${($_ = isset($this->services['fos_message.message_manager']) ? $this->services['fos_message.message_manager'] : $this->getFosMessage_MessageManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.thread_manager']) ? $this->services['fos_message.thread_manager'] : $this->getFosMessage_ThreadManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
