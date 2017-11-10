<?php
class Test_Student_Model_Resource_Student
        extends Mage_Eav_Model_Entity_Abstract
{
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('test_student_student');
        $this->setConnection(
            $resource->getConnection('student_read'),
            $resource->getConnection('student_write')
        );
    }
}
