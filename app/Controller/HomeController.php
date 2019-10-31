<?php
class HomeController extends AppController {

var $uses = "Applicant";
//	 $components = array('Session');
	var $components = array('Session');
	public function index () {
		
		if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')))
		 {
		 	$SEmployeeID = $this->Session->read('SEmployeeID');
		 	$SDesignationID = $this->Session->read('SDesignationID');
		 	$SUsername = $this->Session->read('SUsername');
		 $this->set('SEmployeeID',$SEmployeeID);
		 $this->set('SDesignationID',$SDesignationID);
		 $this->set('SUsername',$SUsername);
		
		}
		

		$this->set('title','Home');
		$this->layout = 'hrms_layout';
		


	}

	public function hrdashboard()
	{
		$options['joins']=array(
			array(
				'table'=>'status_applicants',
				'alias'=>'ApplicantsStatus',
				'type'=>'left',
				'conditions'=>'Applicant.status = ApplicantsStatus.id'
			),
			array(
				'table'=>'tblgender',
				'alias'=>'GenderStatus',
				'type'=>'left',
				'conditions'=>'Applicant.gender = GenderStatus.id'
			)
			
		);
		$options['fields']=array('Applicant.*,ApplicantsStatus.*,GenderStatus.*');
		
		$this->set('title','Admin Dashboard');
		//$this->layout = 'hr_dashboard';
		
		if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')))
		 {
		 	$SEmployeeID = $this->Session->read('SEmployeeID');
		 	$SDesignationID = $this->Session->read('SDesignationID');
		 	$SUsername = $this->Session->read('SUsername');
		 $this->set('SEmployeeID',$SEmployeeID);
		 $this->set('SDesignationID',$SDesignationID);
		 $this->set('SUsername',$SUsername);
		 $getApplicant = $this->Applicant->find('all',$options);
		 $this->set('getApplicants',$getApplicant);
		 $this->layout = 'hrms_layout';
		}

	}

	public function employeedashboard()
	{
		$this->set('title','Employee Dashboard');
		$this->layout = 'hrms_layout';
		if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')))
		 {
		 	$SEmployeeID = $this->Session->read('SEmployeeID');
		 	$SDesignationID = $this->Session->read('SDesignationID');
		 	$SUsername = $this->Session->read('SUsername');
		 $this->set('SEmployeeID',$SEmployeeID);
		 $this->set('SDesignationID',$SDesignationID);
		 $this->set('SUsername',$SUsername);
		}

	}
}
?>