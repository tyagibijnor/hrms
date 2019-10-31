<?php
if(isset($sqldata)) 
	{ ?>
<h2>Vacancy Details</h2>
<table border=2 style="background-color:skyblue">
<tr>
<td>Vacancy Id</td>
<td>Title</td>
<td>Designation</td>
<td>Job Description</td>
<td>Qualification</td>
<td>Exp</td>
<td>AGE</td>
<td>Last Application Date</td>
<td>Status</td>
<td>Action</td>

<?php
// echo "<pre>";
// print_r($sqldata);
for($i=0;$i<sizeof($sqldata);$i++) {
echo "<tr>";

echo "<tr><td>".$sqldata[$i]['Vacancie']['vacancy_id']."</td>";
echo "<td>".$sqldata[$i]['Vacancie']['title']."</td>";
echo "<td>".$sqldata[$i]['Designation']['designation_name']."</td>";
echo "<td>".$sqldata[$i]['Vacancie']['description']."</td>";
echo "<td>".$sqldata[$i]['Vacancie']['qualification']."</td>";
echo "<td>".$sqldata[$i]['Vacancie']['experience']."</td>";
echo "<td>".$sqldata[$i]['Vacancie']['age']."</td>";
echo "<td>".date("m-d-y", strtotime($sqldata[$i]['Vacancie']['last_application_date']))."</td>";
echo "<td>".$sqldata[$i]['StatusVacancy']['value']."</td>";
echo "<td>Test</td>";

echo "</tr>";
}
echo "</table>"; } 