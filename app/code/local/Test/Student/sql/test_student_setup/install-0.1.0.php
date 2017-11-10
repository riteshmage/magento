<?php
$installer = $this;
$installer->startSetup();
$installer->createEntityTables(
$this->getTable('test_student/student_entity')
);
$installer->addEntityType('test_student_student',Array(
    'entity_model'          =>'test_student/student',
    'attribute_model'       =>'',
    'table'                 =>'test_student/student_entity',
    'increment_model'       =>'',
    'increment_per_store'   =>'0'
));
$installer->installEntities();
$installer->endSetup();