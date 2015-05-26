<?php

class Schedule extends AppModel {
	public $name = 'Schedule';
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'Schedule_id'
			)
		);
}