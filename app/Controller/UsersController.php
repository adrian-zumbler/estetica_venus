<?php

class UsersController extends AppController {
	public $helpers = array('Form','Html');

	public function beforeFilter() {
		$this->Auth->allow('register');
	}

	public function index() {

	}

	public function login() {
		if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Usuario y/o contraseña invalido'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}	
	
	public function register() {

		
		if($this->request->is('post')) {
			/*$pass = $this->request->data['User']['password'];
			$confirm = $this->request->data['User']['password_confirm'];
			if($pass != $confirm) {
				$this->redirect('/users/add/');
				$this->Session->setFlash('Las contraseñas no coninciden');
				}
			*/
			if($this->User->create($this->request->data)) {
				$this->User->save();
			}
		}
	}
}

