<style>
	.div1{
	border:2px solid black;
	float:left;
	width:120px;
	padding: 1px 2px 3px 6px;
	height:120px;
	text-align: center;

	background-color:#bb99ff;
	}

	.div2{
	border:2px solid black;
	float:left;
	width:120px;
	padding: 1px 2px 3px 6px;
	height:120px;
	background-color:#ffff99;	}
</style>

		

		<div>
		<?php
if(isset($getApplicants)) { 	?>
<table border=2 style="background-color:yellow">
<tr>
<td>Id</td>
<td>V.ID</td>
<td>F. Name</td>
<td>L. Name</td>
<td>Contact</td>
<td>Email</td>
<td>DOB</td>
<td>Qua.</td>
<td>Gen</td>
<td>Salary Exp.</td>
<td>Exper.</td>
<td>Comment</td>
<td>Date</td>
<td>Status</td>
<?php
for($i=0;$i<sizeof($getApplicants);$i++) {


echo "<tr><td>".$getApplicants[$i]['Applicant']['applicant_id']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['vacancy_id']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['first_name']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['last_name']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['contact_no']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['email']."</td>";
echo "<td>".date("m-d-y", strtotime($getApplicants[$i]['Applicant']['date_of_birth']))."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['qualification']."</td>";
echo "<td>".$getApplicants[$i]['GenderStatus']['value']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['salary_expectation']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['experience']."</td>";
echo "<td>".$getApplicants[$i]['Applicant']['comments']."</td>";
echo "<td>".date("m-d-y", strtotime($getApplicants[$i]['Applicant']['application_date']))."</td>";
echo "<td>".$getApplicants[$i]['ApplicantsStatus']['value']."</td>";
echo "</tr>";
}
echo "</table>"; } 


?></div>
<br>
<div class="div1">
<?php 
echo $this->Html->link('View Employee',
array('controller'=>'employees','action' => 'viewemployee')); 
?>
</div>

<div class="div2">
<?php 
echo $this->Html->link('Add Employee',
array('controller'=>'employees','action' => 'addemployee')); ?>
</div>

<div class="div1"><?php 
echo $this->Html->link('View Project',
array('controller'=>'projects','action' => 'listproject')); ?>
</div>

<div class="div2">
<?php 
echo $this->Html->link('Add Project',
array('controller'=>'projects','action' => 'addproject')); ?>
</div>

<div class="div1">
<?php 
echo $this->Html->link('View Designation',
array('controller'=>'designations','action' => 'listdesignation')); ?>
</div>

<div class="div2">
<?php echo $this->Html->link('Add Designation',
array('controller'=>'designations','action' => 'adddesignation')); ?>
</div>

<div style="clear:both"></div>

<br>

<div class="div1">
<?php 
echo $this->Html->link('View Vacancies',
array('controller'=>'vacancies','action' => 'viewvacancies')); ?>
</div>

<div class="div2">
<?php echo $this->Html->link('Add Vacancies',
array('controller'=>'vacancies','action' => 'addvacancies')); ?>
</div>

<div class="div1">
<?php echo $this->Html->link('View Attendance',
array('controller'=>'applicants','action' => 'index')); ?>
</div>

<div class="div2">
<?php echo $this->Html->link('View Interview Schedule',
array('controller'=>'applicants','action' => 'index')); ?>
	
</div>
