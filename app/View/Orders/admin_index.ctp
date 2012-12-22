<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('CC_number'); ?></th>
			<th><?php echo $this->Paginator->sort('CC_code'); ?></th>
			<th><?php echo $this->Paginator->sort('CC_type'); ?></th>
			<th><?php echo $this->Paginator->sort('CC_exp_month'); ?></th>
			<th><?php echo $this->Paginator->sort('CC_exp_year'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone2'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('isnew'); ?></th>
			<th><?php echo $this->Paginator->sort('special_request'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_price_dollars'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_dollars'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_dollars'); ?></th>
			<th><?php echo $this->Paginator->sort('total_dollars'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['last_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['BillingAddress']['id'], array('controller' => 'addresses', 'action' => 'view', $order['BillingAddress']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['ShippingAddress']['id'], array('controller' => 'addresses', 'action' => 'view', $order['ShippingAddress']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['CC_number']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['CC_code']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['CC_type']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['CC_exp_month']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['CC_exp_year']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['phone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['phone2']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['email']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['isnew']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['special_request']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_price_dollars']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Shipping']['name'], array('controller' => 'shippings', 'action' => 'view', $order['Shipping']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['discount_dollars']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['tax_dollars']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['total_dollars']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
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
