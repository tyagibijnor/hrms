<?php
class StudentsController extends AppController{
	var $components = array('Session');
	public function index(){
		$var1 = '';
		$var2 = '';
		$var3 = '';
		
		if($this->request->is('post')){ //check if data is posted
			//get submitted data from request object
			$student_name = $this->request->data['name'];
			$student_email = $this->request->data['email'];
			$student_contact = $this->request->data['contactno'];
			
			//write session variables
			$this->Session->write('sess_student_name',$student_name);
			$this->Session->write('sess_student_email',$student_email);
			$this->Session->write('sess_student_contact',$student_contact);
			
			//redirect to display action
			$this->redirect(array('controller'=>'students','action'=>'display'));
		}//end of is('post')
		
		//set title
		$this->set('title' , 'Student Home');		
		//use custom layout
		$this->layout = 'custom_layout';
	}//end of index

	public function display(){
		
		if($this->Session->check('sess_student_name')){
			$student_name = $this->Session->read('sess_student_name');
		}else{
			$student_name = '';
		}		
		if($this->Session->check('sess_student_email')){
			$student_email = $this->Session->read('sess_student_email');
		}else{
			$student_email = '';
		}
		if($this->Session->check('sess_student_contact')){
			$student_contact = $this->Session->read('sess_student_contact');
		}else{
			$student_contact = '';
		}		
		
		//make data available for view
		$this->set('student_name',$student_name);
		$this->set('student_email',$student_email);
		$this->set('student_contact',$student_contact);
		
		//set title
		$this->set('title' , 'Student Information');
		//use custom layout
		$this->layout = 'custom_layout';
	}//end of display
}//End of StudentsController class
?>