<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
<h3>Add Project</h3>
<?php 
$Statusvalue = array('Finished','In-Progress');
echo $this->Form->create('Project',array('type' => 'post')); 

echo $this->Form->input('project_title',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('description',array('style' => 'margin:12px;padding:1px','required'=>'true'));

echo $this->Form->input('start_date',array('style' => 'margin:12px;padding:1px','type'=>'date','id' => 'start_date'));
echo $this->Form->input('end_date',array('style' => 'margin:12px;padding:1px','type'=>'date','id' => 'end_date'));
echo "Status";
echo $this->Form->select('status',$Statusvalue,array('style' => 'margin:12px;padding:1px'));
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