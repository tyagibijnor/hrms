<style>
.error-message{ color:brown; }
</style>


<?php 
//echo $deleteEmployee;

echo $this->Html->link('View Employee',array('controller'=>'employees','action' => 'viewemployee'));
if(isset($deleteEmployee)){ ?>
	<div style="padding:5px;margin-left:50px;color: red; width: 450px;">
		<?php
echo "<br>";
echo "You are about to delete user : $deleteEmployee. Please confirm delete";

echo $this->Form->create('Employee',array('type' => 'post')); 
echo $this->Form->Submit('Confirm Delete',array(
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
