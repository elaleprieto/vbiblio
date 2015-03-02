<?php
App::uses('AppController', 'Controller');
/**
 * Recibos Controller
 *
 * @property Recibo $Recibo
 * @property PaginatorComponent $Paginator
 */
class RecibosController extends AppController {

	/**************************************************************************************************************
	* Authentication
	**************************************************************************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('logout');
	}

	public function isAuthorized($user = null) {
		$owner_allowed = array();
		$user_allowed = array();
		$admin_allowed = array_merge($owner_allowed, $user_allowed, array('add', 'edit', 'index', 'delete', 'view'));
		$developer_allowed = array_merge($admin_allowed, array());

		# All registered users can:
		if (in_array($this->action, $user_allowed))
			return true;

		# Admin users can:
		// if ($user['rol'] === 'admin')
		if ($user['Rol']['weight'] >= User::ADMIN) 
			if (in_array($this->action, $admin_allowed))
				return true;

		# Developer users can:
		if ($user['Rol']['weight'] >= User::DEVELOPER)
			if (in_array($this->action, $developer_allowed))
				return true;

		# The owner of an user can:
		if (in_array($this->action, $owner_allowed)) {
			$userId = $this->request->params['pass'][0];
			if ($this->Event->isOwnedBy($userId, $user['id']))
				return true;
		}

		return parent::isAuthorized($user);
	}
	/**************************************************************************************************************
	* /authentication
	**************************************************************************************************************/

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
