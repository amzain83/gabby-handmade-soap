<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Gabby's Handmande Soap :: <?php echo $title_for_layout; ?>
	</title>
	<!-- <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet"> -->
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('/bootstrap/css/bootstrap.min.css');
		echo $this->Google->load('jquery');
		echo $this->Google->load('jqueryui');
		echo $this->Html->css('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<div class="header">
	<h1 class="text-super-indent">Gabby's Handmade Soap</h1>
	<div class="login-wrapper">
		<iframe src="//www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Gabbys-Handmade-Soap/161712387278137&amp;send=false&amp;layout=button_count&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=191175227562292" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;"></iframe>
		<iframe frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=webtechnick"  style="width:62px; height:20px;"></iframe>
		<?php if(empty($user)): ?>
			<div class="logged-out">
				<a href="/login" class="btn btn-danger btn-mini">Login</a>
				<a href="/register" class="btn btn-danger btn-mini">Register</a>
			</div>
		<?php else: ?>
			<div class="logged-in">
				<a href="/account" class="btn btn-info btn-mini"><i class="icon-user icon-white"></i> <?php echo $user['email'] ?></a>
				<a href="/logout" class="btn btn-danger btn-mini">Logout</a>
				<?php if($is_admin): ?><a href="/admin" class="btn btn-mini">Admin</a><?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<div class="search content">
	<div class="span10 offset3" style="padding-left: 20px;">
		<?php echo $this->Form->create('Search',array('url' => array('plugin' => null, 'admin' => false, 'controller' => 'items', 'action' => 'index'), 'class' => 'form-inline')); ?>
			<input type="text" name="data[Search][filter]" class="input-xxlarge" placeholder="Search">
			<button type="submit" class="btn btn-success">Search</button>
			<a href="/pages/search_help" class="btn btn-info">Help</a>
		</form>
	</div>
</div>

<div class="body-outer">
	<div class="body-inner content pt30">
		<div class="span2 offset1">
			<div id="mini-cart">
				
			</div>
			<a href="" class="btn btn-danger"><i class="icon-shopping-cart icon-white"></i> Checkout</a>
			<ul class="nav nav-white nav-stacked nav-large mt20">
				<li><a href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
		<div class="span10" style="padding-left: 10px;">
			<div id="flash">
				<?php echo $this->Session->flash(); ?>
			</div>
			<div id="content_for_body">
				<?php if(strpos($this->request->here, 'admin')): ?>
					<?php echo $this->element('admin_nav'); ?>
				<?php endif; ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-inner">
		<div style="padding-left:12px;">&copy; 2012 Copyright. Gabby's Handmade Soap</div>
		<ul class="nav nav-pills nav-white mt10">
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="http://www.webtechnick.com" target="_blank">WebTechNick</a></li>
		</ul>
	</div>
</div>
<?php
echo $this->Html->script('jquery.class');
echo $this->Html->script('search_toggle');
echo $this->Html->script('/bootstrap/js/bootstrap.min.js');
echo $this->Js->buffer("
	jQuery('.header').click(function(){location.href = '/'});
	jQuery('#advanced-button').click(function(){jQuery('#search_advanced').toggle(); return false;});
"); 
echo $this->Js->writeBuffer(); 
?>
</body>
</html>
