<?php
class CustomerController extends AppController{
	var $use = array('customer');

	public function index(){
		//$customer_record = $this->Customer->find('all');
$customer_record = $this->Customer->find('all',array('conditions'=>array('id >'=>'1'),'order'=>array('id DESC')));
		$this->set('customer_data',$customer_record);
		
	}

	public function addcustomer(){
		$customerdata = array(
			'Customer'=>array(
				'customer_name'=>'Rajiv',
				'contact'=>'545455445'
			)
		);
		if($this->Customer->save($customerdata)){
			$newid= $this->Customer->id;
			$this->Session->setFlash('Customer saved - new Id :'.$newid);
		}
		else {
		$this->Session->setFlash('Customer not saved ');	
		}
		
		
	}
	public function updatecustomer(){
		$customerdata = array('id'=>'8','customer_name'=>'Rajiv Kumar');
		if($this->Customer->save($customerdata)){
			$this->Session->setFlash('Customer updated');
		}
		else {
		$this->Session->setFlash('Customer not updated');	
		}
		
		
	}
	
}
?>