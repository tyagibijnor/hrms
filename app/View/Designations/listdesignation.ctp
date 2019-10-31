<?php
if(isset($sqldata)) 
	{ ?>
<h2>Designation List</h2>
<?php 
echo $this->Html->link('Add New Designation',array('controller'=>'designations','action' => 'adddesignation')); ?>
<table border=2 style="background-color:skyblue">
<tr>
<td>Designation Id</td>
<td>Designation Name</td>
<td>Description</td>

<td>Action</td>

<?php

for($i=0;$i<sizeof($sqldata);$i++) {
echo "<tr><td>".$sqldata[$i]['Designation']['designation_id']."</td>";
echo "<td>".$sqldata[$i]['Designation']['designation_name']."</td>";
echo "<td>".$sqldata[$i]['Designation']['description']."</td>";
echo "<td>Test</td>";
echo "</tr>";
}
echo "</table>"; } 