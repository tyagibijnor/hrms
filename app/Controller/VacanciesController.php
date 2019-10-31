<?php
class VacanciesController extends AppController {


	 //var $uses = "Vacancie";
	 var $uses = array('Vacancie','Designation');
	 var $components = array('Session');
	public function index () {
		$this->set('title','HRMS');
		$this->layout = 'hrms_layout';

	}

	public function addvacancies()
	{
	$all_designation = $this->Designation->find('list',array('fields'=>array('designation_name')));
    $this->set('designation_data',$all_designation);
	$this->set('title','Add Vacancy');
    $this->layout = 'hrms_layout'; 
	if($this->request->is('post')) {
			           	if($this->Vacancie->save($this->request->data)) {
			           		$this->Session->setFlash("Vacancy added Successfully");
            		    }
            		    else {
            		    		$this->Session->setFlash("Failed");	
            		    }

     
		}
	}

	public function viewvacancies()
	{

	$options['joins']=array(
      array(
        'table'=>'designations',
        'alias'=>'Designation',
        'type'=>'left',
        'conditions'=>'Vacancie.designation_id = Designation.designation_id'
      ),
      array(
        'table'=>'status_vacancy',
        'alias'=>'StatusVacancy',
        'type'=>'left',
        'conditions'=>'Vacancie.status = StatusVacancy.id'
      )
  );

    $options['fields']=array('Vacancie.*,Designation.designation_name,StatusVacancy.value');

 	$this->set('title','View Vacancy');
    $this->layout = 'hrms_layout';  
    $qsql = $this->Vacancie->find('all',$options);
    $this->set('sqldata',$qsql);

	
	}
}
?>