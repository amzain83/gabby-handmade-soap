<div class="shippingTypes view">
<h2><?php  echo __('Shipping Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shippingType['ShippingType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shippingType['ShippingType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shippingType['ShippingType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shippingType['ShippingType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shipping Type'), array('action' => 'edit', $shippingType['ShippingType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shipping Type'), array('action' => 'delete', $shippingType['ShippingType']['id']), null, __('Are you sure you want to delete # %s?', $shippingType['ShippingType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shipping Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($shippingType['Sale'])): ?>
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
		foreach ($shippingType['Sale'] as $sale): ?>
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
