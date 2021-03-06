<?php echo $this->Ckeditor->load(); ?>
<div class="items form">
<h1>Add/Edit Item</h1>
<?php echo $this->TB->create('Item', array('type' => 'file', 'inputDefaults' => array('class' => 'input-xxlarge'))); ?>
	<?php
		echo $this->TB->input('id', array('type' => 'hidden', 'label' => false));
		echo $this->TB->input('category_id', array('append' => $this->Html->link('ADD', array('controller' => 'categories', 'action' => 'edit'))));
		echo $this->TB->input('sub_category_id', array('append' => $this->Html->link('ADD', array('controller' => 'sub_categories', 'action' => 'edit'))));
		echo $this->TB->input('status_id');
		echo $this->TB->input('Upload.file', array('label' => 'Thumbnail', 'type' => 'file'));
		echo $this->TB->input('title');
		echo $this->TB->input('slug');
		echo $this->TB->input('qty', array('label' => 'Quantity'));
		echo $this->TB->input('price_dollars', array('prepend' => '$', 'class' => 'input-large'));
		echo $this->TB->input('cost_dollars', array('prepend' => '$', 'class' => 'input-large'));
		echo $this->TB->input('shipping_price_dollars', array('prepend' => '$', 'class' => 'input-large', 'default' => 0));
		echo $this->TB->input('short_description');
		//echo $this->TB->input('description', array('class' => 'ckeditor'));
	?>
	<textarea style="width: 100%" rows="15" cols="50" id="ItemDescription" name="data[Item][description]"><?php echo $this->TB->value('Item.description') ?></textarea>
	<?php  ?>
	<?php echo $this->TB->end(__('Save Item')); ?>
</div>
<?php if($this->TB->value('Item.id')): ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->TB->postLink(__('Delete'), array('action' => 'delete', $this->TB->value('Item.id')), null, __('Are you sure you want to delete # %s?', $this->TB->value('Item.id'))); ?></li>
	</ul>
</div>
<?php endif; ?>
<?php echo $this->Ckeditor->replace('ItemDescription'); ?>
