<style>
.error-message{ color:brown; }

</style>
<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
<h3>Add Designation</h3>
<?php 
echo $this->Form->create('Designation',array('type' => 'post')); 

echo $this->Form->input('designation_name',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('description',
	array('style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,						
							'class' => 'button_class',
							));			
echo $this->Form->end();
?>
</div>