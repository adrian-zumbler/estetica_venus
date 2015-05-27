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

	function view() {
		$this->set('appointments',$this->_getAllAppointment($this));
	}

	function _getAllFeatures($context) {
		$features = $context->Appointment->Feature->find('list',array(
			'fields' => array('id','feature_name')
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

	public function _getAllAppointment($context) {
		return $context->Appointment->find('all');
	}
	
}