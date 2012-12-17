<div class="users form">
<h1>My Account</h1>
<?php echo $this->TB->create('User'); ?>
	<?php
		echo $this->TB->input('User.id', array('label' => false));
		echo $this->TB->input('User.email');
		echo $this->TB->input('User.first_name');
		echo $this->TB->input('User.last_name');
	?>
<?php echo $this->Form->end(__('Update My Account')); ?>
</div>

