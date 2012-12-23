<div class="items view">
	<h1><?php echo h($item['Item']['title']) ?></h1>
	<hr>
	<div class="item-description">
		<?php echo $item['Item']['description'] ?>
	</div>
</div>
<div class="row">
	<div class="span5 offset3">
		<h3><?php echo $this->Number->currency($item['Item']['price_dollars']); ?></h3>
		<?php echo $this->Form->create('Cart', array('url' => array('controller' => 'carts', 'action' => 'add', $item['Item']['id']))); ?>
		<?php echo $this->Form->input('quantity'); ?>
		<?php echo $this->Form->submit('Add To Cart', array('class' => 'btn btn-success')); ?>
		<?php echo $this->Form->end(); ?>
		<?php echo $this->Html->link('Add To Cart', array('controller' => 'carts', 'action' => 'add', $item['Item']['id']), array('class' => 'btn btn-success')); ?>
		<?php /* echo $this->Js->link(
          'Add to Cart',
          array('controller' => 'carts', 'action' => 'add', $item['Item']['id']),
          array(
            'update' => '#mini-cart', 
            'before' => $this->Js->get('#loading')->effect('show'), 
            'complete' => $this->Js->get('#loading')->effect('fadeOut'),
            'evalScript' => true,
            'class' => 'btn btn-success'
          )
    ); */?>
		<?php if($is_admin): ?>
			<?php echo $this->Html->link('Edit Item', array('admin' => true, 'controller' => 'items', 'action' => 'edit', $item['Item']['id']), array('class' => 'btn btn-info')); ?>
		<?php endif; ?>
	</div>
</div>
