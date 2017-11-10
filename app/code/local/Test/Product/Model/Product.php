<?php
class Test_Product_Model_Product extends Mage_Catalog_Model_Product
{
	public function getCustomName()
	{	
		$name = Mage::registry('current_product')->getName();
		$description = Mage::registry('current_product')->getDescription();
		return "Name:-".$name."Description:-".$description;
	}
}