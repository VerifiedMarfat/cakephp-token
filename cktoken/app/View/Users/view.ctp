<h1>View all users.</h1>
<ul>
<?php 
	$count = 0;
	foreach($Users as $User):
		$count++;
	echo '<li>';
	echo 'First name: ' . $User['User']['username'];
	echo '<br/>';
	echo 'Email: ' . $User['User']['email'];
	echo '<br/>';
	echo 'Created on: ' . $User['User']['dateCreated'];
	echo '<br/>';
	echo 'Role: ' . $User['User']['role'];
	echo '</li>' ;

	endforeach;
?>


</ul>