<?php
class Test_Student_Model_Resource_Setup
    extends Mage_Eav_Model_Entity_Setup
{
    public function getDefaultEntities()
    {
        $entities = array(
            'test_student_student' => array(
                'entity_model' => 'test_student/student',
                'attribute_model' => '',
                'table' => 'test_student/student_entity',
                'attributes' => array(
                    'name' => array(
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Name',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => true,
                        'unique' => false,
                    ),
                    'age' => array(
                        'type' => 'int',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Age',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
                    'weight' => array(
                        'type' => 'decimal',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Weight',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
                    'comment' => array(
                        'type' => 'text',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Comment',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ),
                ),
            )
        );
        return $entities;
    }
}