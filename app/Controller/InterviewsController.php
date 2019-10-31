<?php 

class InterviewsController extends AppController{


	 var $uses = "InterviewSchedule";
	 var $components = array('Session');
	public function index () {
		$this->set('title','Interview');
		$this->layout = 'hrms_layout';

	}

	public function viewinterviewschedule()
	{
		$this->set('title','View Interview Schedule');
		$this->layout = 'hrms_layout';
	}
	
}