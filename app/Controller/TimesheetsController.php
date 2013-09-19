<?php
App::uses('AppController', 'Controller');
/**
 * Timesheets Controller
 *
 * @property Timesheet $Timesheet
 */
class TimesheetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Timesheet->recursive = 0;
		$this->set('timesheets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Timesheet->exists($id)) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		$options = array('conditions' => array('Timesheet.' . $this->Timesheet->primaryKey => $id));
		$this->set('timesheet', $this->Timesheet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Timesheet->create();
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Timesheet->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Timesheet->exists($id)) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Timesheet.' . $this->Timesheet->primaryKey => $id));
			$this->request->data = $this->Timesheet->find('first', $options);
		}
		$projects = $this->Timesheet->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Timesheet->delete()) {
			$this->Session->setFlash(__('Timesheet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Timesheet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
