<?php
class DesignationsController extends AppController {

	//var $uses = "Designation";
	var $components = array('Session');
	public function index () {
		$this->set('title','Designation');
		$this->layout = 'hrms_layout';

	}

	public function adddesignation () {
		$this->set('title','Add Designation');
		$this->layout = 'hrms_layout';
		if($this->request->is('post')) {
			           	if($this->Designation->save($this->request->data)) {
			           		$this->Session->setFlash("Designation Added");
            		    }
            		    else {
            		    		$this->Session->setFlash("Not Added");	
            		    }

     
		}

	}

	public function listdesignation()
	{
 	$this->set('title','List Designation');
    $this->layout = 'hrms_layout';  
    $array = $this->Designation->find('all');
    $this->set('sqldata',$array);
	}
	
}
?>