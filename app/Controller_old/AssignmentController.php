<?php
class AssignmentController extends AppController {
   
   // Session components
   var $components = array('Session');

	public function index() {

		// Using custom layout
		$this->set('title','Student Details');
		$this->layout = 'assignment_layout';
        
        // Checking form data
		if($this->request->is('post')) {
		$name= $this->request->data['sname'];
		$email= $this->request->data['semail'];
		$contactno= $this->request->data['contactno'];
		$address= $this->request->data['address'];
         
        // Store form values into session
		$this->Session->write('student_name',$name);
		$this->Session->write('student_email',$email);
		$this->Session->write('student_contact',$contactno);
		$this->Session->write('student_address',$address);

		//Redirect to display
		$this->redirect(array('controller'=>'assignment','action'=>'display'));
		
	}

	}

	public function display(){
    
    $this->set('title','Display Details');
	$this->layout = 'assignment_layout';
    // Checking Session
	if($this->Session->check('student_name'))
		{ $this->set('student',$this->Session->read('student_name'));}
	else { $this->set('student',''); }

	if($this->Session->check('student_email'))
		{ $this->set('email',$this->Session->read('student_email'));}
	else { $this->set('email',''); }

	if($this->Session->check('student_contact'))
		{ $this->set('contactno',$this->Session->read('student_contact'));}
	else { $this->set('contactno',''); }

	if($this->Session->check('student_address'))
		{ $this->set('address',$this->Session->read('student_address'));}
	else { $this->set('address',''); }

	}

	}
	