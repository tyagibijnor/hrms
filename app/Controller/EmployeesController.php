<?php

class EmployeesController extends AppController {
	var $uses = array('Employee','Designation');
  var $components = array('Session');


	public function login(){
		$this->set('title','Login');
		$this->layout = 'hrms_layout';	
		if($this->request->is('post')){
        $username = $this->request->data['Employee']['employee_name'];
        $password = $this->request->data['Employee']['password'];
        $conditions = array('employee_name'=>$username,'login_password'=>$password);
        $flag = $this->Employee->find('all',array('conditions'=>$conditions,'limit'=>'1'));
        if($flag) { $this->Session->setFlash('Login successfully');
          $this->Session->write('loginuser',$username);
          $this->redirect(array('controller'=>'employees','action'=>'dashboard'));
            		  }
        else {
             $this->Session->setFlash('Login Failed.');
             
                              $this->redirect(array('controller'=>'hrms','action'=>'index'));
               		}
           		}
        
}

public function dashboard()
  {
    
    if($this->Session->check('loginuser')) { 
      //print_r($this->Session->read('loginuser'));
        $this->set('adminuser',$this->Session->read('loginuser'));
    }
    $this->set('title','Dashboard');
    $this->layout = 'hrms_layout';
    
  }

  public function addemployee()
  {
    $all_designation = $this->Designation->find('list',array('fields'=>array('designation_name')));
    $this->set('designation_data',$all_designation);
    
    
   $this->set('title','Add Employee');
    $this->layout = 'hrms_layout';  
    if($this->request->is('post')){
        if($this->Employee->save($this->request->data)) {
                    $this->Session->setFlash("Added Successfully");
                    }
                    else {
                        $this->Session->setFlash("Failed"); 
                    }
              }
    
  }

  public function editprofile()
  {
    $this->set('title','Employee');
    $this->layout = 'hrms_layout'; 
    $empid = $this->params->pass[0];
    $casedata = $this->Employee->find('all',array('conditions'=>array('employee_id'=>$empid)));
    $this->set('data',$casedata);

      if($this->request->is('post')){
      $newdata = $this->request->data;
      
      if($newdata['action']=='Update'){
         $record = array('employee_id'=>$this->request->data['Employee']['employee_id'],
                         'first_name'=>$this->request->data['Employee']['first_name'],
                         'last_name'=>$this->request->data['Employee']['last_name'],
                         'address'=>$this->request->data['Employee']['address'],
                         'contact_no'=>$this->request->data['Employee']['contact_no'],
                         'password'=>$this->request->data['Employee']['password']);
         if($this->Employee->save($record))
              { $this->Session->setFlash("Updated Successfully"); }
         else { $this->Session->setFlash("Not Updated."); }   
      } }



  }

  public function updaterecord()
  { 
    $this->set('title','Employee');
    $this->layout = 'hrms_layout';  
    if($this->request->is('post')){
      $newdata = $this->request->data;
      
      if($newdata['action']=='Update'){
         $record = array('employee_id'=>$this->request->data['Employee']['employee_id'],
                         'first_name'=>$this->request->data['Employee']['first_name'],
                         'last_name'=>$this->request->data['Employee']['last_name'],
                         'address'=>$this->request->data['Employee']['address'],
                         'contact_no'=>$this->request->data['Employee']['contact_no'],
                         'basic_pay'=>$this->request->data['Employee']['basic_pay']);
         if($this->Employee->save($record))
              { $this->Session->setFlash("Updated Successfully"); }
         else { $this->Session->setFlash("Not Updated."); }   
      }
      if($newdata['action']=='Delete'){

        $emid=$this->request->data['Employee']['employee_id'];
        $this->redirect(array('controller'=>'employees','action'=>'deleteemployee',$emid));
        
       }      
      
      

    }
    else{
    $all_designation = $this->Designation->find('list',array('fields'=>array('designation_name')));
    $this->set('designation_data',$all_designation);
    $empid = $this->params->pass[0];
    $casedata = $this->Employee->find('all',array('conditions'=>array('employee_id'=>$empid)));
    $this->set('data',$casedata);  
  }


  }

  public function deleteemployee()
  { 
    $this->set('title','Employee');
    $this->layout = 'hrms_layout';  
    $this->set('deleteEmployee',$this->params->pass[0]);
    if($this->request->is('post')){
      
         if($this->Employee->delete($this->params->pass[0]))
          {        
            $this->Session->setFlash("Deleted Successfully"); }
         else {
          $this->Session->setFlash("Not Deleted"); }
              }
    

  }
  

  public function viewemployee()
  {
    $options['joins']=array(
      array(
        'table'=>'designations',
        'alias'=>'Designation',
        'type'=>'left',
        'conditions'=>'Employee.designation_id = Designation.designation_id'
      ),
      array(
        'table'=>'status_status',
        'alias'=>'EmpStatus',
        'type'=>'left',
        'conditions'=>'Employee.status = EmpStatus.id'
      )


    );

    $options['fields']=array('Employee.*,Designation.*,EmpStatus.value');
   $this->set('title','View Employee');
    $this->layout = 'hrms_layout';  
    $viewemployee = $this->Employee->find('all',$options);
    $this->set('employeelist',$viewemployee);
       
  }


}
