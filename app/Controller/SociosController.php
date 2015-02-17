<?php
App::uses('AppController', 'Controller');
/**
 * Socios Controller
 *
 * @property Socio $Socio
 * @property PaginatorComponent $Paginator
 */
class SociosController extends AppController {

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
		$this->Socio->recursive = 0;
		$this->set('socios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Socio->exists($id)) {
			throw new NotFoundException(__('Invalid socio'));
		}
		$options = array('conditions' => array('Socio.' . $this->Socio->primaryKey => $id));
		$this->set('socio', $this->Socio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Socio->create();
			if ($this->Socio->save($this->request->data)) {
				$this->Session->setFlash(__('The socio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The socio could not be saved. Please, try again.'));
			}
		}
		$localidades = $this->Socio->Localidad->find('list');
		$categorias = $this->Socio->Categoria->find('list');
		$cobradores = $this->Socio->Cobrador->find('list');
		$tipocambios = $this->Socio->Tipocambio->find('list');
		$tipos = $this->Socio->Tipo->find('list');
		$tipodocs = $this->Socio->Tipodoc->find('list');
		$this->set(compact('localidades', 'categorias', 'cobradores', 'tipocambios', 'tipos', 'tipodocs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Socio->exists($id)) {
			throw new NotFoundException(__('Invalid socio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Socio->save($this->request->data)) {
				$this->Session->setFlash(__('The socio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The socio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Socio.' . $this->Socio->primaryKey => $id));
			$this->request->data = $this->Socio->find('first', $options);
		}
		$localidades = $this->Socio->Localidad->find('list');
		$categorias = $this->Socio->Categoria->find('list');
		$cobradores = $this->Socio->Cobrador->find('list');
		$tipocambios = $this->Socio->Tipocambio->find('list');
		$tipos = $this->Socio->Tipo->find('list');
		$tipodocs = $this->Socio->Tipodoc->find('list');
		$this->set(compact('localidades', 'categorias', 'cobradores', 'tipocambios', 'tipos', 'tipodocs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Socio->id = $id;
		if (!$this->Socio->exists()) {
			throw new NotFoundException(__('Invalid socio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Socio->delete()) {
			$this->Session->setFlash(__('The socio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The socio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
