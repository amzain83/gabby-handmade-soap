<div class="subCategories view">
<h2><?php  echo __('Sub Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subCategory['SubCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $subCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subCategory['SubCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subCategory['SubCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subCategory['SubCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Category'), array('action' => 'edit', $subCategory['SubCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Category'), array('action' => 'delete', $subCategory['SubCategory']['id']), null, __('Are you sure you want to delete # %s?', $subCategory['SubCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($subCategory['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Sub Category Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Item Number'); ?></th>
		<th><?php echo __('Price Dollars'); ?></th>
		<th><?php echo __('Cost Dollars'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Shipping Price Dollars'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Cart Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subCategory['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['category_id']; ?></td>
			<td><?php echo $item['sub_category_id']; ?></td>
			<td><?php echo $item['status_id']; ?></td>
			<td><?php echo $item['item_number']; ?></td>
			<td><?php echo $item['price_dollars']; ?></td>
			<td><?php echo $item['cost_dollars']; ?></td>
			<td><?php echo $item['qty']; ?></td>
			<td><?php echo $item['shipping_price_dollars']; ?></td>
			<td><?php echo $item['short_description']; ?></td>
			<td><?php echo $item['description']; ?></td>
			<td><?php echo $item['cart_count']; ?></td>
			<td><?php echo $item['created']; ?></td>
			<td><?php echo $item['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
