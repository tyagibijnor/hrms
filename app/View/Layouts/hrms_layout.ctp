<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title; ?>
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body style="background:#ebccff;width:90%;margin:0 auto;">
	<div id="container">
	<div id="header" style="background:#00ff00;height:25px;text-align:center;">
			<h3>Online Human Resource Management System</h3>
	</div>
	<div style="background-color:pink;height:30px;">
<?php	
  echo $this->Html->link('Home',array('controller'=>'home','action' => 'index'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));

  echo $this->Html->link('About Us',array('controller'=>'home','action' => 'index'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));
  
  echo $this->Html->link('Projects',array('controller'=>'home','action' => 'index'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));

  echo $this->Html->link('Vacancies',array('controller'=>'home','action' => 'index'),
  		array('style' => 'text-decoration:none;padding: 12px;color:red;')); 


// Check Session 

if(($this->Session->check('SEmployeeID')) && ($this->Session->check('SDesignationID')) && ($this->Session->check('SUsername')) ) 
	{
	$user = $this->Session->read('SUsername');
	$roleid = $this->Session->read('SDesignationID');
	$empId = $this->Session->read('SEmployeeID');
	if($empId==1) {
					echo $this->Html->link('Dashboard',array('controller'=>'home','action' => 'hrdashboard'), array('style' => 'text-decoration:none;padding: 12px;color:red;')); }
	if($empId > 1) {
					echo $this->Html->link('Dashboard',array('controller'=>'home','action' => 'employeedashboard'), array('style' => 'text-decoration:none;padding: 12px;color:red;')); }				 ?>

					
<div style="float:right;background-color:#cceb83;color:red;height:100ps;width:200px;">				<?php
echo "Welcome : ".$user;
echo "<br>";
echo $this->Html->link('Logout',array('controller'=>'login','action' => 'logout'),
  		array('style' => 'color: blue; font-size: 16px; border: none;cursor: pointer;'));	

	}
else { ?>
<div style="float:right;background-color:#cceb83;color:red;height:100ps;width:200px;">	
<?php 

 		echo $this->Html->link('Login',array('controller'=>'login','action' => 'index'), array('style' => 'color: blue; font-size: 16px; border: none;cursor: pointer;')); 
 	}



?>
</div>
</div>
	<div id="content" style="background:white;min-height:450px;">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
<div id="footer" style="background:#00ff00;height:40px;margin-bottom:5px;text-align:center">
			<p>&copy test@pvtltd</p>
			<?php echo $this->element('sql_dump'); ?>
</div>
	</div>
</body>
</html>