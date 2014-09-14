<h1>View all users.</h1>
<table class="table--bordered table--striped table--data">
<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Created on</th>
			<th></th>
		</tr>
		<tbody>
			<?php
				$count = 0;
				foreach($Users as $User):
					$count++;

					echo '<tr><td>';
					echo $User['User']['username'];
					echo '</td><td>';
					echo $User['User']['email'];
					echo '</td><td>';
					echo $User['User']['dateCreated'];
					echo '</td><td>';
					echo $this->Html->link("Delete", array('action'=>'delete', $User['User']['id']));
					echo '</td></tr>';
				endforeach;
			?>
		</tbody>
	</thead>
</table>