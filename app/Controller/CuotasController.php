<?php
App::uses('AppController', 'Controller');
/**
 * Cuotas Controller
 *
 * @property Cuota $Cuota
 * @property PaginatorComponent $Paginator
 */
class CuotasController extends AppController {

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
		$this->Cuota->recursive = 0;
		$this->set('cuotas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cuota->exists($id)) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$options = array('conditions' => array('Cuota.' . $this->Cuota->primaryKey => $id));
		$this->set('cuota', $this->Cuota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuota->create();
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		}
		$socios = $this->Cuota->Socio->find('list');
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
		if (!$this->Cuota->exists($id)) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cuota->save($this->request->data)) {
				$this->Session->setFlash(__('The cuota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuota could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cuota.' . $this->Cuota->primaryKey => $id));
			$this->request->data = $this->Cuota->find('first', $options);
		}
		$socios = $this->Cuota->Socio->find('list');
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
		$this->Cuota->id = $id;
		if (!$this->Cuota->exists()) {
			throw new NotFoundException(__('Invalid cuota'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cuota->delete()) {
			$this->Session->setFlash(__('The cuota has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cuota could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
