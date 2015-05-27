<?php

class Role extends AppModel {
	public $name = 'Role';
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'role_id')
		);
}