<?php
if(isset($sqldata)) 
	{ ?>
<h2>Project Details</h2>
<?php 
echo $this->Html->link('Add New Project',array('controller'=>'projects','action' => 'addproject')); ?>
<table border=2 style="background-color:skyblue">
<tr>
<td>Project.Id</td>
<td>Project Title</td>
<td>Description</td>

<td>Start Date</td>
<td>End Date</td>
<td>Status</td>
<td>Action</td>

<?php
// echo "<pre>";
// print_r($sqldata);
for($i=0;$i<sizeof($sqldata);$i++) {
echo "<tr><td>".$sqldata[$i]['Project']['project_id']."</td>";
echo "<td>".$sqldata[$i]['Project']['project_title']."</td>";
echo "<td>".$sqldata[$i]['Project']['description']."</td>";
echo "<td>".date("m-d-y", strtotime($sqldata[$i]['Project']['start_date']))."</td>";
echo "<td>".date("m-d-y", strtotime($sqldata[$i]['Project']['end_date']))."</td>";
echo "<td>".$sqldata[$i]['StatusProject']['value']."</td>";
echo "<td>Test</td>";
echo "</tr>";
}
echo "</table>"; } 