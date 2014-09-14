<h1>View all members.</h1>
<ul>
<?php 
	$count = 0;
	foreach($Members as $Member):
		$count++;
	echo '<li>';
	echo 'First name: ' . $Member['Member']['name'];
	echo '<br/>';
	echo 'Last name: ' . $Member['Member']['surname']; 
	echo '<br/>';
	echo 'Email: ' . $Member['Member']['email'];
	echo '<br/>';
	echo 'Telephone: ' . $Member['Member']['phone'];
	echo '<br/>';
	echo 'Address: ' . $Member['Member']['address'];
	echo '</li>' ;
	endforeach;
?>
</ul>