<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin_doctrine_orm.block.audit' shared service.

return $this->services['sonata.admin_doctrine_orm.block.audit'] = new \Sonata\DoctrineORMAdminBundle\Block\AuditBlockService('sonata.admin_doctrine_orm.block.audit', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['simplethings_entityaudit.reader']) ? $this->services['simplethings_entityaudit.reader'] : $this->load(__DIR__.'/getSimplethingsEntityaudit_ReaderService.php')) && false ?: '_'});
