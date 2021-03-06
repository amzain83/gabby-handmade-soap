<div class="sales index">
	<h2><?php echo __('Sales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tracking_number'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_date'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('price_dollars'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sales as $sale): ?>
	<tr>
		<td><?php echo h($sale['Sale']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sale['Item']['id'], array('controller' => 'items', 'action' => 'view', $sale['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sale['Order']['id'], array('controller' => 'orders', 'action' => 'view', $sale['Order']['id'])); ?>
		</td>
		<td><?php echo h($sale['Sale']['tracking_number']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['shipping_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sale['ShippingType']['name'], array('controller' => 'shipping_types', 'action' => 'view', $sale['ShippingType']['id'])); ?>
		</td>
		<td><?php echo h($sale['Sale']['description']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['price_dollars']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['created']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sale['Sale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sale['Sale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sale['Sale']['id']), null, __('Are you sure you want to delete # %s?', $sale['Sale']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shipping Types'), array('controller' => 'shipping_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping Type'), array('controller' => 'shipping_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
