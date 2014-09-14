<h1>Add another user.</h1>
<p><strong>All fields are mandatory.</strong></p>


<?php echo $this->Form->create('User'); ?>
<fieldset class="push--ends">
    <legend><?php echo __('Add User'); ?></legend>
    <?php 
       	echo $this->Form->input('username');
        echo $this->Form->input('email');

        echo $this->Form->input('password');
        echo $this->Form->input('repeat_password', array(
        	'label' => 'Repeat Password', 
        	'maxLength' => 255, 
        	'title' => 'Repeat password', 
        	'type'=>'password'
        ));
     
    echo $this->Form->submit('Add User', array('label' => 'Add User', 'class' => 'btn push-half--ends btn__submit')); 
	?>
</fieldset>
<?php echo $this->Form->end(); ?>