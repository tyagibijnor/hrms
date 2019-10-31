<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
.error-message{ color:brown; }
</style>
<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
	<?php
echo $this->Html->link('View Employee',array('controller'=>'employees','action' => 'viewemployee'));

	?>
<h3>Add Employeent</h3>
<?php 

echo $this->Form->create('Employee',array('type' => 'post')); 
$Designationid = array('HR','Operation'); 

echo "Designation :";
echo $this->Form->select('designation_id',$designation_data);
echo $this->Form->input('first_name',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('last_name',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('address',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('contact_no',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('joining_date',array('style' => 'margin:12px;padding:1px','type'=>'date','id' => 'joining_date'));
echo $this->Form->input('username',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('password',array('style' => 'margin:12px;padding:1px','type'=>'password','required'=>'true'));
echo $this->Form->input('basic_pay',array('style' => 'margin:12px;padding:1px','type'=>'number','required'=>'true'));
echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,
						
							'class' => 'button_class',
							));	
echo $this->Form->end();
?>
</div>

</body>
</html>