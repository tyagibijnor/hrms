<?php

class ApplicantsController extends AppController{

	 var $uses = array('Applicant','Designation','Vacancie');
     public $helpers = array('Form');
	 public function index () {
		$this->set('title','Send Details');
		$this->layout = 'hrms_layout';
		
	$designation = $this->Designation->find('list',array('fields'=>array('designation_name')),);
	$currentvacancy = $this->Vacancie->find('list',
								array('fields'=>array('title')),
								array('conditions'=>array('status'=>'1')));
		
		$this->set('currentvacancy',$currentvacancy);
		$this->set('designation',$designation);

		if($this->request->is('post')) {
			           	if($this->Applicant->save($this->request->data)) {
			           		$this->Session->setFlash("Applied Successfully");
            		    }
            		    else {
            		    		$this->Session->setFlash("Failed");	
            		    }

     
		}

	}
	
}