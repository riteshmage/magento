<?php
class Test_Student_Model_Student
    extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('test_student/student');
    }
}