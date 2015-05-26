<?php

class AppointmentsController extends AppController {
	public $helpers = array('Form','Html');

	function index() {

	}

	function add() {
		$this->set('features',$this->_getAllFeatures($this));
		$this->set('schedules',$this->_getAllSchedules($this));
		$this->set('user',$this->Auth->user('id'));
		if($this->request->is('post')) {
			if($this->Appointment->create($this->request->data)) {
				$this->Appointment->save();
			}
		}
	}

	function _getAllFeatures($context) {
		$features = $context->Appointment->Feature->find('list',array(
			'fields' => array('id','name')
			)
		);
		return $features;
	}
	public function _getAllSchedules($context) {
		$schedules = $context->Appointment->Schedule->find('list',array(
			'fields' => array('id','schedule_name')
			)
		);
		return $schedules;
	}
}