<?php
class Test_Product_Block_Product extends Mage_Catalog_Block_Product_View
{

	public function getCustomName()
	{
		$model=Mage::getModel('catalog/product')->getCustomName();
		return $model;
	}
}