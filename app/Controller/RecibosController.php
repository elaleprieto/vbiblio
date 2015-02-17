<?php
App::uses('AppController', 'Controller');
/**
 * Recibos Controller
 *
 * @property Recibo $Recibo
 * @property PaginatorComponent $Paginator
 */
class RecibosController extends AppController {

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
		$this->Recibo->recursive = 0;
		$this->set('recibos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recibo->exists($id)) {
			throw new NotFoundException(__('Invalid recibo'));
		}
		$options = array('conditions' => array('Recibo.' . $this->Recibo->primaryKey => $id));
		$this->set('recibo', $this->Recibo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recibo->create();
			if ($this->Recibo->save($this->request->data)) {
				$this->Session->setFlash(__('The recibo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recibo could not be saved. Please, try again.'));
			}
		}
		$socios = $this->Recibo->Socio->find('list');
		$this->set(compact('socios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recibo->exists($id)) {
			throw new NotFoundException(__('Invalid recibo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Recibo->save($this->request->data)) {
				$this->Session->setFlash(__('The recibo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recibo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recibo.' . $this->Recibo->primaryKey => $id));
			$this->request->data = $this->Recibo->find('first', $options);
		}
		$socios = $this->Recibo->Socio->find('list');
		$this->set(compact('socios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recibo->id = $id;
		if (!$this->Recibo->exists()) {
			throw new NotFoundException(__('Invalid recibo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Recibo->delete()) {
			$this->Session->setFlash(__('The recibo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recibo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
