<style>
.error-message{ color:brown; }
</style>


<?php 
echo $this->Html->link('View Employee',array('controller'=>'employees','action' => 'viewemployee'));
if(isset($data)){ ?>
	<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
		<?php
$e = $data[0]['Employee'];
echo "<h3>Delete/Update Employee</h3>";

echo $this->Form->create('Employee',array('type' => 'post')); 
$Designationid = array('HR','Operation'); 
echo "<div style='color:red;font-size: 14px;font-weight: bold;'>";
echo "Employee Id :".$e['employee_id'];
echo "<br>";
echo "Joining Date : ".$e['joining_date'];
echo "<br>";
echo "Username : ".$e['username'];
echo "<br>";
// echo "Designation :";
// echo $this->Form->select('designation_id',$designation_data);
echo "</div>";



echo $this->Form->input('employee_id',array('value'=>$e['employee_id'],'style' => 'margin:12px;padding:1px','title'=>'read only','readonly'=>'red'));

echo $this->Form->input('first_name',array('value'=>$e['first_name'],'style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('last_name',array('value'=>$e['last_name'],'style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('address',array('value'=>$e['address'],
	'style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('contact_no',array('value'=>$e['contact_no'],
	'style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('basic_pay',array('value'=>$e['basic_pay'],
	'style' => 'margin:12px;padding:1px','type'=>'number','required'=>'true'));
echo $this->Form->Submit('Update',array(
							'id' => 'action',
							'name' => 'action',
							'type' => 'submit',
							'label' => false,
							'class' => 'button_class',
							));	
echo "<br>";
echo $this->Form->input('Delete',array(
							'id' => 'action',
							'name' => 'action',
							'type' => 'submit',
							'label' => false,						
							'class' => 'button_class',
							));		
echo $this->Form->end();
}
?>
</div>
