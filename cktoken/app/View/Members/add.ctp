<h1>Register</h1>

<?php echo $this->Form->create('Member', array('type' => 'post')); ?>

<fieldset class="push--ends">
    <legend><?php echo __('Add Member'); ?></legend>
	<?php

		echo $this->Form->input('name', array(
			'label'	=> 'First name',
			'type'	=> 'text',
			'required'	=> true,
		));

		echo $this->Form->input('surname', array(
			'label'	=> 'Last name',
			'type'	=> 'text',
			'required'	=> true,
		));

		echo $this->Form->input('email', array(
			'label'	=> 'Email address',
			'type'	=> 'email',
			'required'	=> true,
		));

		echo $this->Form->input('phone', array(
			'label'	=> 'Telephone',
			'type'	=> 'number',
			'required'	=> true
		));

		echo $this->Form->input('address', array(
			'label'     => 'Address',
			'type'      => 'text',
			'required'	=> true,
			'minLength' => '10'
		));

		echo $this->Form->hidden('status', array(
			'value'	=> '1'
		));
	?>	
</fieldset>
<?php echo $this->Form->submit('Add', array('class' => 'btn btn__submit')); ?>
<?php echo $this->Form->end(); ?>