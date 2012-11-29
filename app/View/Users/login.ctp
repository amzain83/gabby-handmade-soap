<h1>Login</h1>
<?php echo $this->Form->create('User'); ?>
<?php echo $this->TB->input('User.email'); ?>
<?php echo $this->TB->input('User.password'); ?>
<?php echo $this->Form->end('Login'); ?>
