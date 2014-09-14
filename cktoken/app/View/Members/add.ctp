<h1>Register</h1>

<?php 

	echo $this->Form->create('Member', array('type' => 'post'));

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

	echo $this->Form->end('Submit');
?>