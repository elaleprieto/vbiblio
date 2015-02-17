<?php
App::uses('AppController', 'Controller');
/**
 * Tipodocs Controller
 *
 * @property Tipodoc $Tipodoc
 * @property PaginatorComponent $Paginator
 */
class TipodocsController extends AppController {

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
		$this->Tipodoc->recursive = 0;
		$this->set('tipodocs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipodoc->exists($id)) {
			throw new NotFoundException(__('Invalid tipodoc'));
		}
		$options = array('conditions' => array('Tipodoc.' . $this->Tipodoc->primaryKey => $id));
		$this->set('tipodoc', $this->Tipodoc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipodoc->create();
			if ($this->Tipodoc->save($this->request->data)) {
				$this->Session->setFlash(__('The tipodoc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipodoc could not be saved. Please, try again.'));
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
		if (!$this->Tipodoc->exists($id)) {
			throw new NotFoundException(__('Invalid tipodoc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipodoc->save($this->request->data)) {
				$this->Session->setFlash(__('The tipodoc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipodoc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tipodoc.' . $this->Tipodoc->primaryKey => $id));
			$this->request->data = $this->Tipodoc->find('first', $options);
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
		$this->Tipodoc->id = $id;
		if (!$this->Tipodoc->exists()) {
			throw new NotFoundException(__('Invalid tipodoc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tipodoc->delete()) {
			$this->Session->setFlash(__('The tipodoc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipodoc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
