<div class="sales view">
<h2><?php  echo __('Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Item']['id'], array('controller' => 'items', 'action' => 'view', $sale['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Order']['id'], array('controller' => 'orders', 'action' => 'view', $sale['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking Number'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['tracking_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Date'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['shipping_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['ShippingType']['name'], array('controller' => 'shipping_types', 'action' => 'view', $sale['ShippingType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Dollars'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['price_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale'), array('action' => 'edit', $sale['Sale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale'), array('action' => 'delete', $sale['Sale']['id']), null, __('Are you sure you want to delete # %s?', $sale['Sale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shipping Types'), array('controller' => 'shipping_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping Type'), array('controller' => 'shipping_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
