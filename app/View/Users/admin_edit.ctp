<div class="users form">
<?php echo $this->TB->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->TB->input('id', array('label' => false));
		echo $this->TB->input('email');
		echo $this->TB->input('first_name');
		echo $this->TB->input('last_name');
		echo $this->TB->input('billing_address_id');
		echo $this->TB->input('shipping_address_id');
		echo $this->TB->input('verified');
		echo $this->TB->input('code');
		echo $this->TB->input('group', array('options' => array('user' => 'user', 'admin' => 'admin',), 'type' => 'select', 'default' => 'user'));
	?>
	</fieldset>
<?php echo $this->TB->end(__('Save User')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->TB->postLink(__('Delete'), array('action' => 'delete', $this->TB->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->TB->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
