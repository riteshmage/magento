<?php

class Test_Student_Model_Resource_Post_Collection
    extends Mage_Eav_Model_Entity_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('student/student');
    }
}