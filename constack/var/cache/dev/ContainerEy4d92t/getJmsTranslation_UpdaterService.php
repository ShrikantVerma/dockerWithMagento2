<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_translation.updater' shared service.

$a = ${($_ = isset($this->services['jms_translation.file_source_factory']) ? $this->services['jms_translation.file_source_factory'] : $this->services['jms_translation.file_source_factory'] = new \JMS\TranslationBundle\Translation\FileSourceFactory('/cocorico/app')) && false ?: '_'};
$b = ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};
$c = ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'};

$d = new \Doctrine\Common\Annotations\DocParser();
$d->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
$d->setIgnoreNotImportedAnnotations(true);

$e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
$e->setSourceLanguage('en');
$e->setAddDate(false);
$e->setAddReference(false);

$f = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
$f->setSourceLanguage('en');
$f->setAddDate(false);
$f->setAddReference(false);

return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater(${($_ = isset($this->services['jms_translation.loader_manager']) ? $this->services['jms_translation.loader_manager'] : $this->load(__DIR__.'/getJmsTranslation_LoaderManagerService.php')) && false ?: '_'}, new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($b, $c, array(0 => ${($_ = isset($this->services['cocorico.translator.entity.extractor']) ? $this->services['cocorico.translator.entity.extractor'] : $this->services['cocorico.translator.entity.extractor'] = new \Cocorico\CoreBundle\Translator\EntityExtractor()) && false ?: '_'}, 1 => ${($_ = isset($this->services['cocorico.translator.admin.extractor']) ? $this->services['cocorico.translator.admin.extractor'] : $this->services['cocorico.translator.admin.extractor'] = new \Cocorico\CoreBundle\Translator\AdminExtractor()) && false ?: '_'}, 2 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($d, $a), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($d, $a), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\Twig2FileExtractor($b, $a), 6 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}), 7 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($d, $a))), $c, array('jms_i18n_routing' => new \JMS\I18nRoutingBundle\Translation\RouteTranslationExtractor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['jms_i18n_routing.route_exclusion_strategy']) ? $this->services['jms_i18n_routing.route_exclusion_strategy'] : $this->services['jms_i18n_routing.route_exclusion_strategy'] = new \JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy()) && false ?: '_'}), 'sonata_admin' => ${($_ = isset($this->services['sonata.admin.translator.extractor.jms_translator_bundle']) ? $this->services['sonata.admin.translator.extractor.jms_translator_bundle'] : $this->load(__DIR__.'/getSonata_Admin_Translator_Extractor_JmsTranslatorBundleService.php')) && false ?: '_'}, 'cocorico_breadcrumbs' => ${($_ = isset($this->services['cocorico.translator.breadcrumbs_extractor']) ? $this->services['cocorico.translator.breadcrumbs_extractor'] : $this->load(__DIR__.'/getCocorico_Translator_BreadcrumbsExtractorService.php')) && false ?: '_'})), $c, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $e, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper()) && false ?: '_'}, 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper()) && false ?: '_'}, 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'yaml' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.yaml']) ? $this->services['translation.dumper.yaml'] : $this->services['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml')) && false ?: '_'}, 'yaml'), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper()) && false ?: '_'}, 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper()) && false ?: '_'}, 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper()) && false ?: '_'}, 'ini'), 'json' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper()) && false ?: '_'}, 'json'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter(${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper()) && false ?: '_'}, 'res'), 'xliff' => $f)));
