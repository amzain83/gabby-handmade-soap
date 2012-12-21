<div class="items view">
	<h1><?php echo h($item['Item']['title']) ?></h1>
	<hr>
	<div class="item-description">
		<?php echo $item['Item']['description'] ?>
	</div>
</div>
<div class="row">
	<div class="span3 offset4">
		<?php echo $this->Html->link('Add To Cart', '#', array('class' => 'btn btn-success')); ?>
		<?php if($is_admin): ?>
			<?php echo $this->Html->link('Edit Item', array('admin' => true, 'controller' => 'items', 'action' => 'edit', $item['Item']['id']), array('class' => 'btn btn-info')); ?>
		<?php endif; ?>
	</div>
</div>
