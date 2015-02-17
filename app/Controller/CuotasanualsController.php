<?php
App::uses('AppController', 'Controller');
/**
 * Cuotasanuals Controller
 *
 * @property Cuotasanual $Cuotasanual
 * @property PaginatorComponent $Paginator
 */
class CuotasanualsController extends AppController {

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
		$this->Cuotasanual->recursive = 0;
		$this->set('cuotasanuals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cuotasanual->exists($id)) {
			throw new NotFoundException(__('Invalid cuotasanual'));
		}
		$options = array('conditions' => array('Cuotasanual.' . $this->Cuotasanual->primaryKey => $id));
		$this->set('cuotasanual', $this->Cuotasanual->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuotasanual->create();
			if ($this->Cuotasanual->save($this->request->data)) {
				$this->Session->setFlash(__('The cuotasanual has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuotasanual could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Cuotasanual->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cuotasanual->exists($id)) {
			throw new NotFoundException(__('Invalid cuotasanual'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cuotasanual->save($this->request->data)) {
				$this->Session->setFlash(__('The cuotasanual has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuotasanual could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cuotasanual.' . $this->Cuotasanual->primaryKey => $id));
			$this->request->data = $this->Cuotasanual->find('first', $options);
		}
		$categorias = $this->Cuotasanual->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cuotasanual->id = $id;
		if (!$this->Cuotasanual->exists()) {
			throw new NotFoundException(__('Invalid cuotasanual'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cuotasanual->delete()) {
			$this->Session->setFlash(__('The cuotasanual has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cuotasanual could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
