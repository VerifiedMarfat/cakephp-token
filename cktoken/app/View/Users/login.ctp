<h1>Login here.</h1>

<fieldset class="push--ends">
    <legend><?php echo __('Add Member'); ?></legend>
	<?php
	echo $this->Session->flash('auth'); 
	echo $this->Form->create('User'); 
	
	echo $this->Form->input('username');
	echo $this->Form->input('password');

	
?>
</fieldset>
<?php echo $this->Form->submit('Login', array('label' => 'Login', 'class' => 'btn btn__submit')); ?>
<?php echo $this->Form->end(); ?>