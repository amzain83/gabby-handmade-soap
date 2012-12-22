<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Address'); ?></legend>
	<?php
		echo $this->Form->input('name_line');
		echo $this->Form->input('street');
		echo $this->Form->input('street2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?></li>
	</ul>
</div>
