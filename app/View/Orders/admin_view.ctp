<div class="orders view">
<h2><?php  echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['BillingAddress']['id'], array('controller' => 'addresses', 'action' => 'view', $order['BillingAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['ShippingAddress']['id'], array('controller' => 'addresses', 'action' => 'view', $order['ShippingAddress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CC Number'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CC_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CC Code'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CC_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CC Type'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CC_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CC Exp Month'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CC_exp_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CC Exp Year'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CC_exp_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($order['Order']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($order['Order']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($order['Order']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isnew'); ?></dt>
		<dd>
			<?php echo h($order['Order']['isnew']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Request'); ?></dt>
		<dd>
			<?php echo h($order['Order']['special_request']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Price Dollars'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_price_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Shipping']['name'], array('controller' => 'shippings', 'action' => 'view', $order['Shipping']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Dollars'); ?></dt>
		<dd>
			<?php echo h($order['Order']['discount_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Dollars'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tax_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Dollars'); ?></dt>
		<dd>
			<?php echo h($order['Order']['total_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($order['Sale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Tracking Number'); ?></th>
		<th><?php echo __('Shipping Date'); ?></th>
		<th><?php echo __('Shipping Type Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price Dollars'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($order['Sale'] as $sale): ?>
		<tr>
			<td><?php echo $sale['id']; ?></td>
			<td><?php echo $sale['item_id']; ?></td>
			<td><?php echo $sale['order_id']; ?></td>
			<td><?php echo $sale['tracking_number']; ?></td>
			<td><?php echo $sale['shipping_date']; ?></td>
			<td><?php echo $sale['shipping_type_id']; ?></td>
			<td><?php echo $sale['description']; ?></td>
			<td><?php echo $sale['price_dollars']; ?></td>
			<td><?php echo $sale['created']; ?></td>
			<td><?php echo $sale['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, __('Are you sure you want to delete # %s?', $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
