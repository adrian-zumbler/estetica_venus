<div class="bg-content" >
<div class="content">
<div class="container">
<?php
	echo $this->Form->create('User');?>

	<fieldset>
        <legend style="color:white;">
            <?php echo __('Rellena el formulario'); ?>
        </legend>
    <?php    
	echo $this->Form->input('User.username',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	echo $this->Form->input('User.first_name',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	echo $this->Form->input('User.last_name',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	echo $this->Form->input('User.password',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	/*echo $this->Form->input('password_confirm',array(
		'label' => 'Confirmar Contraseña',
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);*/
	echo $this->Form->input('User.correo',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	echo $this->Form->input('User.role_id',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			),
		'value'=> '2',
		'type' => 'hidden'
		)
	);
	
	echo $this->Session->flash();
	
	
?></fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar',
'class' => 'btn btn-1'));?>
</div>
</div>
</div>