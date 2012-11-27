<div class="sales form">
<?php echo $this->Form->create('Sale'); ?>
	<fieldset>
		<legend><?php echo __('Add Sale'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('tracking_number');
		echo $this->Form->input('shipping_date');
		echo $this->Form->input('shipping_type_id');
		echo $this->Form->input('description');
		echo $this->Form->input('price_dollars');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shipping Types'), array('controller' => 'shipping_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping Type'), array('controller' => 'shipping_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
