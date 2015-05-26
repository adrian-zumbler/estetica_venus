
<?php
	echo $this->Form->create('Appointment');
	echo $this->Form->input('Appointment.feature_id',array(
		'label' => 'Servicio',
		'options' => $features));
	echo $this->Form->input('Appointment.date',array(
		'label' => 'Fecha',
		'id' => 'datepicker',
		'type' => 'text'));
	echo $this->Form->input('Appointment.schedule_id',array(
		'label' => 'Horario',
		'options' => $schedules));
	echo $this->Form->input('Appointment.user_id',array(
		'label' => 'Horario',
		'value' => $user,
		'type' => 'hidden'));
	
	echo $this->Form->end('Registrar cita');
?>

<script type="text/javascript">
	
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker( "option", "dateFormat","yy-mm-dd");

</script>

