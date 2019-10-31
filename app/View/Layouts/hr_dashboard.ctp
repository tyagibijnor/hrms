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
  echo $this->Html->link('Home',array('action' => 'index'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));

  echo $this->Html->link('About Us',array('action' => 'aboutus'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));
  
  echo $this->Html->link('Projects',array('action' => 'projects'),
  			array('style' => 'text-decoration:none;padding: 12px;color:red;'));

  echo $this->Html->link('Vacancies',array('action' => 'vacancies'),
  		array('style' => 'text-decoration:none;padding: 12px;color:red;'));

?>

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