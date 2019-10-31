<?php

class HelloController extends AppController {

	var $components = array('Math');

	public function index()
	{   
		$this->set('first_name','Amit');
		$this->render('/Students/display');
	}

	public function index1()
	{   
		$this->set('var','Amit');
		$this->render();
		$this->set('var1','Amit kumar');
				
	}
	public function detail()
	{   
		$ip = $this->request->clientIp(); 
		$this->set('var1',$ip);
		$this->render();
				
	}

	public function test()
	{   
		//$this->redirect(array('controller'=>'students','action'=>'index'));
		$this->redirect('/students/index');

	}

	public function geturlid()
	{   
		$dataarray = array();
		

		if($this->request->is('post')) {
		$var1= $this->request->query('i');
		$var2= $this->request->query('n');
		$this->set('id',$var1);
		$this->set('name',$var2);
		// $this->render();
			$dataarray = $this->request->data;
			$this->set('dataarray',$dataarray);
			//$this->set('dataarray',$this->Math->add(2,3));
			$this->set('title','Welcome');
		    $this->layout = 'test_layout';

			$this->render();


	}


	}
}