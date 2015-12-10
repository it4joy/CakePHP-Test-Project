<?php

class PostsController extends AppController {

	public $uses = array('Category', 'Post');

    public function index() {
		$this->set('posts', $this->Post->find('all'));
    }
	
	
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException('Запись не найдена');
		}
		
		$post = $this->Post->findById($id);
		$this->set('post', $post);
	}
	
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Запись добавлена', 'default', array(), 'good');
				$this->redirect('/');
			} else {
				$this->Session->setFlash('Ошибка добавления записи', 'default', array(), 'bad');
			}
			// debug($this->request-data);
		}
	}
	
	
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException('Такой записи нет');
		}
		
		$post = $this->Post->findById($id);
		$this->set('post', $post);
		if (!$post) {
			throw new NotFoundException('Такой записи нет');
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Запись успешно изменена', 'default', array(), 'good');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ошибка при изменении записи', 'default', array(), 'bad');
			}
		}
		
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	
	
	public function delete($id) {	
		if (!$this->Post->exists($id)) {
			throw new NotFoundException('Такой записи нет');
		}
		
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('Запись удалена', 'default', array(), 'good');
		} else {
			$this->Session->setFlash('Ошибка при удалении записи', 'default', array(), 'bad');
		}
		
		$this->redirect(array('action' => 'index'));
	}

}

?>