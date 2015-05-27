<h3 style="color: black;">Usuarios Registrados</h3>
<table class="table table-striped">
	<tr>
		<td>#</td>
		<td>nombre</td>
		<td>Apellido</td>
		<td>Usuario</td>
		<td>Email</td>
		<td>Contraseña</td>
		<td>Tipo Usuario</td>
	</tr>
	<?php
		foreach ($users as $user) {
			echo '<tr><td>'.
				$user['User']['id'].'</td>';
			echo '<td>'.
				$user['User']['first_name'].'</td>';
			echo '<td>'.
				$user['User']['last_name'].'</td>';
			echo '<td>'.
				$user['User']['username'].'</td>';
			echo '<td>'.
				$user['User']['correo'].'</td>';
			echo '<td>'.
				$user['User']['password'].'</td>';				
			echo '<td>'.
				$user['Role']['name'].'</td></tr>';		
		}

	?>
</table>