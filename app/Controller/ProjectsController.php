<?php 
class ProjectsController extends AppController {


	 var $uses = "Project";
	 var $components = array('Session');
	 public function index () {
		$this->set('title','Project');
		$this->layout = 'hrms_layout';

	}

	public function addproject () {
		$this->set('title','Add Project');
		$this->layout = 'hrms_layout';
		if($this->request->is('post')) {
			           	if($this->Project->save($this->request->data)) {
			           		$this->Session->setFlash("Project Added");
            		    }
            		    else {
            		    		$this->Session->setFlash("Project Not Added");	
            		    }

     
		}

	}
public function checkattendance()
{
	
}
	public function listproject()
	{

	$options['joins']=array(
      array(
        'table'=>'status_project',
        'alias'=>'StatusProject',
        'type'=>'left',
        'conditions'=>'Project.status = StatusProject.id'
      ));

    $options['fields']=array('Project.*,StatusProject.value');


 	$this->set('title','List Project');
    $this->layout = 'hrms_layout';  
    $viewemployee = $this->Project->find('all',$options);
    $this->set('sqldata',$viewemployee);
	}
	
}