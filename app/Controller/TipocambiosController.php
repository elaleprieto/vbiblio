<?php
App::uses('AppController', 'Controller');
/**
 * Tipocambios Controller
 *
 * @property Tipocambio $Tipocambio
 * @property PaginatorComponent $Paginator
 */
class TipocambiosController extends AppController {

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
		$this->Tipocambio->recursive = 0;
		$this->set('tipocambios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipocambio->exists($id)) {
			throw new NotFoundException(__('Invalid tipocambio'));
		}
		$options = array('conditions' => array('Tipocambio.' . $this->Tipocambio->primaryKey => $id));
		$this->set('tipocambio', $this->Tipocambio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipocambio->create();
			if ($this->Tipocambio->save($this->request->data)) {
				$this->Session->setFlash(__('The tipocambio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocambio could not be saved. Please, try again.'));
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
		if (!$this->Tipocambio->exists($id)) {
			throw new NotFoundException(__('Invalid tipocambio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipocambio->save($this->request->data)) {
				$this->Session->setFlash(__('The tipocambio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocambio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tipocambio.' . $this->Tipocambio->primaryKey => $id));
			$this->request->data = $this->Tipocambio->find('first', $options);
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
		$this->Tipocambio->id = $id;
		if (!$this->Tipocambio->exists()) {
			throw new NotFoundException(__('Invalid tipocambio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tipocambio->delete()) {
			$this->Session->setFlash(__('The tipocambio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipocambio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
