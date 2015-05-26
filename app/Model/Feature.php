<?php

class Feature extends AppModel {
	public $name = 'Feature';
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'feature_id'));
}