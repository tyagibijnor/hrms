<style>
.error-message{ color:brown; }

</style>
<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
<h3>Add Vacancy Details</h3>
<?php 
//print_r($designation_data);
echo $this->Form->create('Vacancie',array('type' => 'post')); 
$status = array('1'=>'Active','2'=>'Inactive'); 
$designation_id = array('1'=>'HR','2'=>'Operation');
echo $this->Form->input('title',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('description',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo "Designation";
echo $this->Form->select('designation_id',$designation_data);
echo $this->Form->input('qualification',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('experience',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('age',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('last_application_date',array('style' => 'margin:12px;padding:1px','type'=>'date','id' => 'last_application_date'));
echo "Status";
echo $this->Form->select('status',$status);
echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,						
							'class' => 'button_class',
							));			
echo $this->Form->end();
?>
</div>