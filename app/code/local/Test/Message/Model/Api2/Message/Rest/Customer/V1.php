<?php
class Test_Message_Model_Api2_Message_Rest_Customer_V1 extends Test_Message_Model_Api2_Message
{
	protected function _create(array $data)
    {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }
    protected function _update(array $data)
    {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);
    }
    protected function _retrieveCollection()
    {
        $this->_critical(self::RESOURCE_METHOD_NOT_ALLOWED);     
    }
    protected function _retrieve()
    {
  
    	$message_data = array();
    	if($this->getRequest()->getPost('message_name'))
    	{
    		$message_name = $this->getRequest()->getPost('message_name');
    		$model = Mage::getModel('message/message')->load($message_name ,'message_name');
    		if($model->getId())
    		{
    			$message_data['name'] = $model->getMessageName();
    			$message_data['description'] = $model->getMessageDescription();
    		}
    		else
    		{
    			$message_data['error'] = 'No Message';
    		}
    	}
    	else
    	{
    		$message_data['error'] = 'No Message';
    	}
    	return $message_data;
    }
}