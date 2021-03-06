<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_translation.config_factory' shared service.

$a = new \JMS\TranslationBundle\Translation\ConfigBuilder();
$a->setTranslationsDir('/cocorico/app/Resources/translations');
$a->setScanDirs(array(0 => '/cocorico/app', 1 => '/cocorico/app/../src'));
$a->setIgnoredDomains(array());
$a->setDomains(array());
$a->setEnabledExtractors(array('jms_i18n_routing' => true, 'cocorico_breadcrumbs' => true, 'sonata_admin' => true));
$a->setExcludedDirs(array(0 => 'cache', 1 => 'data', 2 => 'logs', 3 => 'Tests'));
$a->setExcludedNames(array(0 => '*TestCase.php', 1 => '*Test.php', 2 => 'TranslationExtension.php'));
$a->setKeepOldTranslations(false);
$a->setLoadResources(array());

return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array('cocorico' => $a));
