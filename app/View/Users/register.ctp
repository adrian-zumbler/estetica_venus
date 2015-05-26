
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('User.username',array(
		'class' => 'form-control',
		'div' => array(
			'class' => 'form-group'
			)
		)
	);
	echo $this->Form->input('User.name',array(
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
	echo $this->Form->input('User.email',array(
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
	echo $this->Form->end('Registrar');
?>