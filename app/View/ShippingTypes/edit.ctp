<div class="shippingTypes form">
<?php echo $this->Form->create('ShippingType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shipping Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ShippingType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ShippingType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shipping Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
