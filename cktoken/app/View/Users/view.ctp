<h1>View all users.</h1>
<ul>
<?php 
	$count = 0;
	foreach($Users as $User):
		$count++;
	echo '<li>';
	echo 'Username: ' . $User['User']['username'];
	echo '<br/>';
	echo 'Email: ' . $User['User']['email'];
	echo '<br/>';
	echo 'Created on: ' . $User['User']['dateCreated'];
	echo '</li>' ;

	echo $this->Html->link("Delete", array('action'=>'delete', $User['User']['id']));

	endforeach;
?>


</ul>