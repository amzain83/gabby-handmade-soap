<h1>Welcome to Gabby's Handmade Soap</h1>
<h3>Address</h3>
<p>
323 Romero St. N.W. #5<br />
Albuquerque, NM
</p>
<h3>Phone</h3>
<p>(505) 243-7627</p>
<ul class="thumbnails">
	<?php foreach(array(
			'2012-11-03 12.44.32.jpg',
			'253124_285351224914252_1946428809_n.jpg', 
			'377273_285351474914227_2007656544_n.jpg',
			'407290_171208282995214_651017881_n.jpg',
			'416915_171206566328719_2058559641_n.jpg',
			'422771_171208669661842_1204967329_n.jpg',
			'427689_171206889662020_610699313_n.jpg',
			'532290_256668937782481_765964646_n.jpg ',
			'548327_285350281581013_1246117991_n.jpg',
			'75098_285351651580876_82684790_n.jpg',
		) as $file): ?>
		<li><?php echo $this->Html->link($this->FileUpload->image($file, 200), "/files/$file", array('escape' => false)); ?></li>
	<?php endforeach; ?>
</ul>
