<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $item['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $item['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Number'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Dollars'); ?></dt>
		<dd>
			<?php echo h($item['Item']['price_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost Dollars'); ?></dt>
		<dd>
			<?php echo h($item['Item']['cost_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($item['Item']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Price Dollars'); ?></dt>
		<dd>
			<?php echo h($item['Item']['shipping_price_dollars']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cart Count'); ?></dt>
		<dd>
			<?php echo h($item['Item']['cart_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sales'); ?></h3>
	<?php if (!empty($item['Sale'])): ?>
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
		foreach ($item['Sale'] as $sale): ?>
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
<div class="related">
	<h3><?php echo __('Related Uploads'); ?></h3>
	<?php if (!empty($item['Upload'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Upload'] as $upload): ?>
		<tr>
			<td><?php echo $upload['id']; ?></td>
			<td><?php echo $upload['item_id']; ?></td>
			<td><?php echo $upload['name']; ?></td>
			<td><?php echo $upload['size']; ?></td>
			<td><?php echo $upload['type']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, __('Are you sure you want to delete # %s?', $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
