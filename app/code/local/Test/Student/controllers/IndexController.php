<?php
class Test_Student_IndexController extends Mage_Core_Controller_Front_Action
{
	public function formAction()
	{
		$this->loadLayout();
		$this->renderLayout();
	}
	public function saveAction()
	{	
		if(!$this->getRequest()->isPost())
		{
			Mage::getSingleton('core/session')->addError('Data not posted');
        	$this->_redirect('student/index/form'); 
		}
		$postData= $this->getRequest()->getParams();
		if(empty($postData))
		{	
			Mage::getSingleton('core/session')->addError('Data not posted');
        	$this->_redirect('student/index/form'); 
		}
		if($this->getRequest()->getParam('student_name'))
		{			
			$tname    = $this->getRequest()->getPost('student_name');
        	$name     = Mage::helper('student')->filteration($tname);  
		}
		if($this->getRequest()->getPost('student_age'))
		{	
       		$tage     = $this->getRequest()->getPost('student_age');
      		$age   	  = Mage::helper('student')->filteration($tage);  
		}
		if ($this->getRequest()->getPost('student_weight'))
		{
       		$tweight  = $this->getRequest()->getPost('student_weight');
        	$weight   = Mage::helper('student')->filteration($tweight);  
		}
		if($this->getRequest()->getPost('comment'))
		{	
        	$tcomment = $this->getRequest()->getPost('comment');
        	$comment  = Mage::helper('student')->filteration($tcomment); 
		}
		if(isset($name) && isset($age) && isset($weight) && isset($comment))
		{
	        $data     =array('name'=>$name,'age'=>$age,'weight'=>$weight,'comment'=>$comment);
	        $model 	  = Mage::getModel('test_student/student');
			$model->addData($data); 	       			
			$model->save();
			Mage::getSingleton('core/session')->addSuccess('Entered data successfully');
			$this->_redirect('student/index/form'); 
		}
		else
		{
			Mage::getSingleton('core/session')->addError('unable to add data to database ');	
		}
	}
}