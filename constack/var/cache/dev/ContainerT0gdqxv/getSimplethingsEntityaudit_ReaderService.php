<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'simplethings_entityaudit.reader' shared service.

return $this->services['simplethings_entityaudit.reader'] = ${($_ = isset($this->services['simplethings_entityaudit.manager']) ? $this->services['simplethings_entityaudit.manager'] : $this->getSimplethingsEntityaudit_ManagerService()) && false ?: '_'}->createAuditReader(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
