<?php

class Appointment extends AppModel {
	public $name = 'Appointment';
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'),
		'Schedule' => array(
			'className' => 'Schedule',
			'foreignKey' => 'schedule_id'),
		'Feature' => array(
			'className' => 'Feature',
			'foreignKey' => 'feature_id')
		);
	


}