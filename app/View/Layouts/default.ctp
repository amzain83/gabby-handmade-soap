<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Gabby's Handmande Soap :: <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('soap-style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
	<div id="container">
		<div id="header">
			<?php echo $this->Html->image('title_image.png'); ?>
		</div>
		<div id="main">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<div id="content_for_body">
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
			<div id="menu">
				<?php echo $this->Html->image('bubble_left.png'); ?>
				<div id="menu_content">
					MENU
				</div>
			</div>
		</div>
		<div id="footer"></div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
