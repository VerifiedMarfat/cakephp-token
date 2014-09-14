<h1>Add another user.</h1>
<p><strong>All fields are mandatory.</strong></p>


<?php echo $this->Form->create('User'); ?>
<fieldset class="push--ends">
    <legend><?php echo __('Add Admin'); ?></legend>
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
	?>
</fieldset>
<?php echo $this->Form->submit('Add', array('class' => 'btn btn__submit')); ?>
<?php echo $this->Form->end(); ?>