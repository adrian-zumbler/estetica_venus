<div class="bg-content" >
<div class="content">
<div class="container">
<?php
	echo $this->Form->create('Appointment');
	?>
	<fieldset>
		
	
		<legend style="color:white;">
            <spam stlye="color: white;"><?php echo __('Registra una cita'); ?><spam>
        </legend>
    
    <?php
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
?>
</fieldset>
<?php
echo $this->Form->end(array('label' => 'Iniciar',
'class' => 'btn btn-1'));
?>
</div>
</div>
</div>
<script type="text/javascript">
	
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker( "option", "dateFormat","yy-mm-dd");

</script>

