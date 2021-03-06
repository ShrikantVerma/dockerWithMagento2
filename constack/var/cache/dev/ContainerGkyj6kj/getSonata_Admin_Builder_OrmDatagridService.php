<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_datagrid' shared service.

return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.builder.filter.factory']) ? $this->services['sonata.admin.builder.filter.factory'] : $this->load(__DIR__.'/getSonata_Admin_Builder_Filter_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.guesser.orm_datagrid_chain']) ? $this->services['sonata.admin.guesser.orm_datagrid_chain'] : $this->load(__DIR__.'/getSonata_Admin_Guesser_OrmDatagridChainService.php')) && false ?: '_'}, true);
