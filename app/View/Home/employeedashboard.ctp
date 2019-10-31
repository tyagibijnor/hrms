<style>
	.div1{
	border:2px solid black;
	float:left;
	width:200px;
	padding: 1px 2px 3px 6px;
	height:200px;
	text-align: center;

	background-color:#bb99ff;
	}

	.div2{
	border:2px solid black;
	float:left;
	width:200px;
	padding: 1px 2px 3px 6px;
	height:200px;
	background-color:#ffff99;	}
</style>


<br>

<?php 
if($this->Session->check('SEmployeeID'))
{
	$MyId =  $this->Session->read('SEmployeeID');
	
	echo "<table border=2>";
	echo "<tr>";
	echo " <td colspan='2'> Today's Attendance</td></tr>";
	echo "<tr>";
	echo "<td>";
	 echo $this->Html->link('Time In',array('controller'=>'attendance','action' => 'timein',$MyId),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));
	
	echo "</td><td>";
	echo $this->Html->link('Time Out',array('controller'=>'attendance','action' => 'timeout',$MyId),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));
	echo "</td></tr></table>";
	


echo "<div class='div1'>";
echo $this->Html->link('Edit Profile',
array('controller'=>'employees','action' => 'editprofile',$MyId)); 
?>
</div>

<div class="div2">
<?php 
echo $this->Html->link('Attendance',
array('controller'=>'attendance','action' => 'viewattendance',$MyId)); ?>
</div>

<div class="div1"><?php 
echo $this->Html->link('View Project',
array('controller'=>'projects','action' => 'listmyproject',$MyId)); ?>
</div>

<div class="div2">
<?php 
echo $this->Html->link('Leave',
array('controller'=>'leaves','action' => 'applyleave')); ?>
</div>
<?php
}
else {
	echo "Please Login First.";
}
?>
