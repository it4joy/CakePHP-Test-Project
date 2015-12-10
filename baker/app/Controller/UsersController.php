<?php

class UsersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout');
	}

	public function index() {
		$this->set('users', $this->User->find('all'));
	}
	
	
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Пользователь добавлен', 'default', array(), 'good');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ошибка регистрации', 'default', array(), 'bad');
			}
		}
	}
	

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash('Ошибка авторизации', 'default', array(), 'bad');
			}
		}
	}
	
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

}

?>