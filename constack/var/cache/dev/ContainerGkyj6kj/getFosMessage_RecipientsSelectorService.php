<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_message.recipients_selector' shared service.

return $this->services['fos_message.recipients_selector'] = new \FOS\MessageBundle\FormType\RecipientsType(new \FOS\MessageBundle\DataTransformer\RecipientsDataTransformer(${($_ = isset($this->services['fos_user.user_to_username_transformer']) ? $this->services['fos_user.user_to_username_transformer'] : $this->load(__DIR__.'/getFosUser_UserToUsernameTransformerService.php')) && false ?: '_'}));
