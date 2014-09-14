<h1>View all members.</h1>
<table class="table--bordered table--striped table--data">
<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Created on</th>
			<th></th>
		</tr>
		<tbody>
			<?php
				$count = 0;
				foreach($Members as $Member):
					$count++;

					echo '<tr><td>';
					echo $Member['Member']['name'];
					echo '</td><td>';
					echo $Member['Member']['surname']; 
					echo '</td><td>';
					echo $Member['Member']['email'];
					echo '</td><td>';
					echo $Member['Member']['phone'];
					echo '</td><td>';
					echo $Member['Member']['address'];
					echo '</td><td>';
					echo $Member['Member']['dateCreated'];
					echo '</td><td>';
					echo $this->Html->link("Delete", array('action'=>'delete', $Member['Member']['id']));
					echo '</td></tr>';
					
				endforeach;
			?>
		</tbody>
	</thead>
</table>