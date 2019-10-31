<html>
<head>
	<title>
		<?php echo $title; ?>
	</title>
</head>
<body style="background:#ECF8E0;width:800px;margin:0 auto;">
	<div id="container">
		<div id="content" style="background:white;margin-bottom:5px;min-height:200px;padding:20px">
			
			<div style="color:red">
				<?php echo $this->Session->flash(); ?>
			</div>
			
			<?php echo $this->fetch('content'); ?>
		
		</div>
	</div>
</body>
</html>