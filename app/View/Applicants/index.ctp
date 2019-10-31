<div style="padding:5px;margin-left:50px;background-color: #ccfff5; width: 450px;">
<h3>Applicant Detail</h3>
<?php 


echo $this->Form->create('Applicant',array('type' => 'post')); 

$vacancy_ids = array('1'=>'Designer','2'=>'Developer'); 
$gender = array('Male','Female');
 
echo "Applying For ";
echo $this->Form->select('vacancy_id',$currentvacancy);
echo $this->Form->input('first_name',
	array(
		'style' => 'margin:12px;padding:1px',
		'required'=>'true',
	    'label'=>'First Name:',
	    'title'=>'Input first name'));

echo $this->Form->input('last_name',
		array(
		'style' => 'margin:12px;padding:1px',
		'required'=>'true',
	    'label'=>'Last Name:',
	    'title'=>'Input last name'));

echo $this->Form->input('contact_no',
		array(
		'style' => 'margin:12px;padding:1px',
		'required'=>'true',
	    'label'=>'Contact Num.:',
	    'title'=>'Input contcat number'));

echo $this->Form->input('email',	
	  array(
		'style' => 'margin:12px;padding:1px',
		'required'=>'Email Id:',
	    'label'=>'Email:',
	    'title'=>'Input email id'));

echo $this->Form->input('date_of_birth',
						array('id' => 'date_of_birth',
							'label'=>'Date Of Birth:',
							'dateformat' => 'DMY',
							'minDate' => '-100y',
							'maxDate' => '-3y'));

echo $this->Form->input('qualification',array('label'=>'Qualification','title'=>'Enter Qualification','style' => 'margin:12px;padding:1px','required'=>'true'));
echo "Gender";
echo $this->Form->select('gender',$gender);
echo $this->Form->input('salary_expectation',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('experience',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('comments',array('style' => 'margin:12px;padding:1px','required'=>'true'));
echo $this->Form->input('Submit',array(
							'id' => 'sumbit_button',
							'type' => 'submit',
							'label' => false,						
							'class' => 'button_class',
							));			
echo $this->Form->end();
?>
</div>