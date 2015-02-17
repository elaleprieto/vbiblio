<?php
App::uses('AppController', 'Controller');
/**
 * Cobradors Controller
 *
 * @property Cobrador $Cobrador
 * @property PaginatorComponent $Paginator
 */
class CobradorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cobrador->recursive = 0;
		$this->set('cobradors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cobrador->exists($id)) {
			throw new NotFoundException(__('Invalid cobrador'));
		}
		$options = array('conditions' => array('Cobrador.' . $this->Cobrador->primaryKey => $id));
		$this->set('cobrador', $this->Cobrador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cobrador->create();
			if ($this->Cobrador->save($this->request->data)) {
				$this->Session->setFlash(__('The cobrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cobrador could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cobrador->exists($id)) {
			throw new NotFoundException(__('Invalid cobrador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cobrador->save($this->request->data)) {
				$this->Session->setFlash(__('The cobrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cobrador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cobrador.' . $this->Cobrador->primaryKey => $id));
			$this->request->data = $this->Cobrador->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cobrador->id = $id;
		if (!$this->Cobrador->exists()) {
			throw new NotFoundException(__('Invalid cobrador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cobrador->delete()) {
			$this->Session->setFlash(__('The cobrador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cobrador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
