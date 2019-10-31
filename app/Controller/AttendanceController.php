<?php
class AttendanceController extends AppController {


	 var $uses = "Attendance";
	 var $components = array('Session');
	 public function index () {
	   $this->set('title','Attendance');
	   $this->layout = 'hrms_layout';
	   if(
	   	($this->Session->check('SEmployeeID',$EmployeeID)) && 
       ($this->Session->check('SDesignationID',$DesignationID)) && 
       ($this->Session->check('SUsername',$Username)))
       {
       	$this->set('userid',$this->Session->read('SEmployeeID',$EmployeeID));

       }

	}

	public function checkattendance()
	{
        $this->set('title','Attendance');
	    $this->layout = 'hrms_layout';
	}

	public function viewattendance()
	{
      $this->set('title','Attendance');
	  $this->layout = 'hrms_layout';

	}
	public function timein()
	{
      $this->set('title','Attendance');
	  $this->layout = 'hrms_layout';
       $this->redirect(array('controller'=>'home','action'=>'employeedashboard'));

	}
	public function timeout()
	{
		$this->set('title','Attendance');
	  $this->layout = 'hrms_layout';
	   $this->redirect(array('controller'=>'home','action'=>'employeedashboard'));    

	}

	

}
?>