<?php

class LeavesController extends AppController{

	 var $uses = "Leaverequest";
	 var $components = array('Session');
	public function index () {
		$this->set('title','Leave');
		$this->layout = 'hrms_layout';

	}

	public function applyleave () {
		$this->set('title','Apply Leave');
		$this->layout = 'hrms_layout';
		

	}

	public function viewleave () {
		$this->set('title','View Leave');
		$this->layout = 'hrms_layout';
		

	}
	
}