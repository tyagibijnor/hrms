<?php
class LoginController extends AppController 
{

	var $uses = "Employee";
	var $components = array('Session');
	public function index () 
	{
		$this->set('title','Login');
		$this->layout = 'hrms_layout';
		if($this->request->is('post'))
		{
        
         $conditions = array(
        		'username'=>$this->request->data['Employee']['username'],
        		'password'=>$this->request->data['Employee']['password']
        	);
         $fields = array('employee_id','designation_id','username');

         $qryResult = $this->Employee->find('all',array('conditions'=>$conditions,'fields'=>$fields,'limit'=>'1'));
        		
        	if($qryResult)
        	 { 
        	 	$EmployeeID = $qryResult[0]['Employee']['employee_id'];
        	 	$DesignationID = $qryResult[0]['Employee']['designation_id'];
        	 	$Username = $qryResult[0]['Employee']['username'];
				 $this->Session->write('SEmployeeID',$EmployeeID);
          		 $this->Session->write('SDesignationID',$DesignationID);
          		 $this->Session->write('SUsername',$Username);
          		 $this->redirect(array('controller'=>'login','action'=>'dashboard'));
          		 
              }
        	
        	else 
        	{
             $this->Session->setFlash('Login Failed.');
             $this->render();
            }
        }

	}

	public function dashboard()
	{
		
	if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')))
	    {
		 	$SEmployeeID = $this->Session->read('SEmployeeID');
		 	$SDesignationID = $this->Session->read('SDesignationID');
		 	$SUsername = $this->Session->read('SUsername');
		   $this->set('SEmployeeID',$SEmployeeID);
		   $this->set('SDesignationID',$SDesignationID);
		   $this->set('SUsername',$SUsername);
		
		if($SDesignationID==1){
		    $this->redirect(array('controller'=>'home','action'=>'hrdashboard'));}
		
		if($SDesignationID !=1){
					$this->redirect(array('controller'=>'home','action'=>'employeedashboard'));	}
		}
		else {
			$this->redirect(array('controller'=>'login','action'=>'index'));
		}
	}

	public function logout()
	{
		if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')))
		 {
		 	$SEmployeeID = $this->Session->delete('SEmployeeID');
		 	$SDesignationID = $this->Session->delete('SDesignationID');
		 	$SUsername = $this->Session->delete('SUsername');
		 $this->set('SEmployeeID','');
		 $this->set('SDesignationID','');
		 $this->set('SUsername','');
		 $this->redirect(array('controller'=>'home','action'=>'index'));
		
		}
	}
}
?>