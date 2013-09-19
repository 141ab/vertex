<?php
App::uses('AppController', 'Controller');
/**
 * Lawyers Controller
 *
 * @property Lawyer $Lawyer
 */
class LawyersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lawyer->recursive = 0;
		$this->set('lawyers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lawyer->exists($id)) {
			throw new NotFoundException(__('Invalid lawyer'));
		}
		$options = array('conditions' => array('Lawyer.' . $this->Lawyer->primaryKey => $id));
		$this->set('lawyer', $this->Lawyer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lawyer->create();
			if ($this->Lawyer->save($this->request->data)) {
				$this->Session->setFlash(__('The lawyer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lawyer could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Lawyer->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lawyer->exists($id)) {
			throw new NotFoundException(__('Invalid lawyer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lawyer->save($this->request->data)) {
				$this->Session->setFlash(__('The lawyer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lawyer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lawyer.' . $this->Lawyer->primaryKey => $id));
			$this->request->data = $this->Lawyer->find('first', $options);
		}
		$clients = $this->Lawyer->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lawyer->id = $id;
		if (!$this->Lawyer->exists()) {
			throw new NotFoundException(__('Invalid lawyer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lawyer->delete()) {
			$this->Session->setFlash(__('Lawyer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lawyer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
