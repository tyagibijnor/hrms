<?php
if(isset($employeelist)) 
	{ ?>
<h2>Employee Details</h2>
<?php 
echo $this->Html->link('Add New Employee',array('controller'=>'employees','action' => 'addemployee')); ?>
<table border=2 style="background-color:skyblue">
<tr>
<td>Emp.Id</td>
<td>Designation</td>
<td>F. Name</td>
<td>L. Name</td>
<td>Address</td>
<td>Contcat no.</td>
<td>Joining Date</td>
<td>Username</td>
<td>Basic Pay</td>
<td>Create Date</td>
<td>Status</td>
<td>Action</td>

<?php
// echo "<pre>";
// print_r($employeelist);

for($i=0;$i<sizeof($employeelist);$i++) {
	$id=$employeelist[$i]['Employee']['employee_id'];
echo "<tr><td>".$employeelist[$i]['Employee']['employee_id']."</td>";
echo "<td>".$employeelist[$i]['Designation']['designation_name']."</td>";
echo "<td>".$employeelist[$i]['Employee']['first_name']."</td>";
echo "<td>".$employeelist[$i]['Employee']['last_name']."</td>";
echo "<td>".$employeelist[$i]['Employee']['address']."</td>";
echo "<td>".$employeelist[$i]['Employee']['contact_no']."</td>";
echo "<td>".date("m-d-y", strtotime($employeelist[$i]['Employee']['joining_date']))."</td>";
echo "<td>".$employeelist[$i]['Employee']['username']."</td>";
echo "<td>".$employeelist[$i]['Employee']['basic_pay']."</td>";
echo "<td>".date("m-d-y", strtotime($employeelist[$i]['Employee']['create_date']))."</td>";
echo "<td>".$employeelist[$i]['EmpStatus']['value']."</td>";
echo "<td>";
echo $this->Html->link('Edit/Delete',array('controller'=>'employees','action' => 'updaterecord',$id));
echo "</td>";
echo "</tr>";
}
echo "</table>"; } 