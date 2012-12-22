<div class="items index">
	<h2>Gabby's Handmade Soap Store</h2>
	<div class="paging_sort">
		<span id="sort_toggle" class="checkout" style="cursor:pointer;"><b>Sort By</b> <span id="sort_text">+</span></span>
		<div id="sort" style="display:none;">
			<ul>
				<li><?php echo $this->Paginator->sort('Item.price_dollars', 'Price') ?></li>
				<li><?php echo $this->Paginator->sort('Category.name', 'Category') ?></li>
				<li><?php echo $this->Paginator->sort('SubCategory.name', 'Type') ?></li>
				<li><?php echo $this->Paginator->sort('Item.title', 'Title') ?></li>
			</ul>
		</div>
	</div>
	<ul class="thumbnails">
		<?php foreach($items as $item): ?>
		<li class="span2" style="min-height: 275px;">
			<a href="/items/view/<?php echo $item['Item']['slug'] ?>" class="thumbnail">
				<h3><?php echo $item['Item']['title']; ?></h3><br />
				<?php echo $this->FileUpload->image($item['Upload']['name'], 100); ?><br />
				<?php echo $item['Item']['short_description']; ?><br />
				<?php echo $this->Number->currency($item['Item']['price_dollars']); ?>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php echo $this->element('paging'); ?>
<?php $this->Js->buffer('new SearchToggle({toggle_id: "#sort_toggle", elem_id: "#sort", toggle_text_id: "#sort_text"});'); ?>
