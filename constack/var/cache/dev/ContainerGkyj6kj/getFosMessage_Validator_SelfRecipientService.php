<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_message.validator.self_recipient' shared service.

return $this->services['fos_message.validator.self_recipient'] = new \FOS\MessageBundle\Validator\SelfRecipientValidator(${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'});
