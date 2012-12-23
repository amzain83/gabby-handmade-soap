<h1>Admin</h1>
<div class="navbar">
	<div class="navbar-inner">
		<ul class="nav">
			<li class="<?php echo $this->Soap->admin_active('addresses'); ?>"><?php echo $this->Html->link('Addresses', array('plugin' => null, 'admin' => true, 'controller' => 'addresses')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('categories'); ?>"><?php echo $this->Html->link('Categories', array('plugin' => null, 'admin' => true, 'controller' => 'categories')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('items'); ?>"><?php echo $this->Html->link('Items', array('plugin' => null, 'admin' => true, 'controller' => 'items')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('orders'); ?>"><?php echo $this->Html->link('Orders', array('plugin' => null, 'admin' => true, 'controller' => 'orders')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('sub_categories'); ?>"><?php echo $this->Html->link('Sub Categories', array('plugin' => null, 'admin' => true, 'controller' => 'sub_categories')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('statues'); ?>"><?php echo $this->Html->link('Statuses', array('plugin' => null, 'admin' => true, 'controller' => 'statuses')) ?></li>
			<li class="<?php echo $this->Soap->admin_active('users'); ?>"><?php echo $this->Html->link('Users', array('plugin' => null, 'admin' => true, 'controller' => 'users')) ?></li>
		</ul>
	</div>
</div>
<hr />

