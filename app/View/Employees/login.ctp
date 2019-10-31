<style>
.error-message{ color:brown; }
label{ 	display:block; }
</style>

<?php 
if(isset($dataarray)) { print_r($dataarray);}
// Form Start
echo $this->Form->create('Employee',array('type' => 'post')); 

echo $this->Form->input('employee_name', array(
					'label' => 'User Name:' ,
					 'id'=>'employee_name',
					 'type' => 'text',
					 'style' => 'margin:15px;padding:5px',
					 'required' => true,
					));

echo $this->Form->input('password', array(
					'label' => 'Password: ' ,
					 'id'=>'password',
					'title' => 'password',
					'type'=>'password',
					'style' => 'margin:15px;padding:5px',
					'required' => true,));

echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
							'style' => 'margin:15px;padding:5px',
							'class' => 'button_class',
							));			
echo $this->Form->end(); //End form
?>
