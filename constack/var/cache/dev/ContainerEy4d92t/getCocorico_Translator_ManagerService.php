<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cocorico.translator.manager' shared service.

return $this->services['cocorico.translator.manager'] = new \Cocorico\CoreBundle\Model\Manager\TranslateManager(NULL, 'https://api.cognitive.microsoft.com/sts/v1.0/issueToken', 'http://api.microsofttranslator.com/v2/Http.svc/TranslateArray');