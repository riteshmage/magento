<?php 
class Test_Student_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function filteration($var)
	{
		$data = trim($var);
		$data = stripslashes($var);
		$data = htmlspecialchars($var);
		return $data;
	}
}
