<?php
App::uses('AppController', 'Controller');
/**
 * Cuotasmensuals Controller
 *
 * @property Cuotasmensual $Cuotasmensual
 * @property PaginatorComponent $Paginator
 */
class CuotasmensualsController extends AppController {

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
		$this->Cuotasmensual->recursive = 0;
		$this->set('cuotasmensuals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cuotasmensual->exists($id)) {
			throw new NotFoundException(__('Invalid cuotasmensual'));
		}
		$options = array('conditions' => array('Cuotasmensual.' . $this->Cuotasmensual->primaryKey => $id));
		$this->set('cuotasmensual', $this->Cuotasmensual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuotasmensual->create();
			if ($this->Cuotasmensual->save($this->request->data)) {
				$this->Session->setFlash(__('The cuotasmensual has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuotasmensual could not be saved. Please, try again.'));
			}
		}
		$recibos = $this->Cuotasmensual->Recibo->find('list');
		$socios = $this->Cuotasmensual->Socio->find('list');
		$this->set(compact('recibos', 'socios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cuotasmensual->exists($id)) {
			throw new NotFoundException(__('Invalid cuotasmensual'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cuotasmensual->save($this->request->data)) {
				$this->Session->setFlash(__('The cuotasmensual has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuotasmensual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cuotasmensual.' . $this->Cuotasmensual->primaryKey => $id));
			$this->request->data = $this->Cuotasmensual->find('first', $options);
		}
		$recibos = $this->Cuotasmensual->Recibo->find('list');
		$socios = $this->Cuotasmensual->Socio->find('list');
		$this->set(compact('recibos', 'socios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cuotasmensual->id = $id;
		if (!$this->Cuotasmensual->exists()) {
			throw new NotFoundException(__('Invalid cuotasmensual'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cuotasmensual->delete()) {
			$this->Session->setFlash(__('The cuotasmensual has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cuotasmensual could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
