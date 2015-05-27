<?php
	


?>
<h3 style="color: black;">Citas Registradas</h3>
<table class="table table-striped">
	<tr>
		<td>#</td>
		<td>Fecha</td>
		<td>Servicio</td>
		<td>Horario</td>
		<td>Usuario</td>
	</tr>
	<?php
		foreach ($appointments as $appointment) {
			echo '<tr><td>'.
				$appointment['Appointment']['id'].'</td>';
			echo '<td>'.
				$appointment['Appointment']['date'].'</td>';
			echo '<td>'.
				$appointment['Feature']['feature_name'].'</td>';	
			echo '<td>'.
				$appointment['Schedule']['schedule_name'].'</td>';
			echo '<td>'.
				$appointment['User']['first_name']. " " .$appointment['User']['last_name'].'</td></tr>';		
		}

	?>
</table>