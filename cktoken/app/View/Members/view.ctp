<h1>View all members.</h1>
<ul>
<?php 
	$count = 0;
	foreach($members as $member):
		$count++;
	echo '<li>';
	echo 'First name: ' . $member['Member']['name'];
	echo '<br/>';
	echo 'Last name: ' . $member['Member']['surname']; 
	echo '<br/>';
	echo 'Email: ' . $member['Member']['email'];
	echo '<br/>';
	echo 'Telephone: ' . $member['Member']['phone'];
	echo '<br/>';
	echo 'Address: ' . $member['Member']['address'];
	echo '</li>' ;



	endforeach;
?>


</ul>