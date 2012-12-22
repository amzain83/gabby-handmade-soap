<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Order'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('billing_address_id');
		echo $this->Form->input('shipping_address_id');
		echo $this->Form->input('CC_number');
		echo $this->Form->input('CC_code');
		echo $this->Form->input('CC_type');
		echo $this->Form->input('CC_exp_month');
		echo $this->Form->input('CC_exp_year');
		echo $this->Form->input('phone');
		echo $this->Form->input('phone2');
		echo $this->Form->input('email');
		echo $this->Form->input('isnew');
		echo $this->Form->input('special_request');
		echo $this->Form->input('shipping_price_dollars');
		echo $this->Form->input('shipping_id');
		echo $this->Form->input('discount_dollars');
		echo $this->Form->input('tax_dollars');
		echo $this->Form->input('total_dollars');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
