<h1>Add users page.</h1>
<div class="users form">
 
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
	    <?php 
	       	echo $this->Form->input('username');
	        echo $this->Form->input('email');

	        echo $this->Form->input('password');
	        echo $this->Form->input('password_confirm', array(
	        	'label' => 'Confirm Password *', 
	        	'maxLength' => 255, 
	        	'title' => 'Confirm password', 
	        	'type'=>'password'
	        ));

	        echo $this->Form->input('role', array(
	            'options' => array( 'admin' => 'Admin', 'mod' => 'Moderator')
	        ));
         
        echo $this->Form->submit('Add User'); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
