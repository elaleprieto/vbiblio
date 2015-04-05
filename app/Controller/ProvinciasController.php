<?php
App::uses('AppController', 'Controller');
/**
 * Provincias Controller
 *
 * @property Provincia $Provincia
 * @property PaginatorComponent $Paginator
 */
class ProvinciasController extends AppController {

		/**************************************************************************************************************
		* Authentication
		**************************************************************************************************************/
		public function beforeFilter() {
			parent::beforeFilter();
		}

		public function isAuthorized($user = null) {
			$owner_allowed = array();
			$user_allowed = array();
			$admin_allowed = array_merge($owner_allowed, $user_allowed, array('index','getLocalidades'));
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
	public $components = array('Paginator', 'RequestHandler');

/**
 * getLocalidades method
 *
 * @return void
 */
	public function getLocalidades($id = null) {
		if($id = $this->request->query['id']) {
			$this->Provincia->Localidad->recursive = -1;
			$options['fields'] = array('id', 'name');
			$options['conditions'] = array('provincia_id'=>$id);
			$localidades = $this->Provincia->Localidad->find('all', $options);
			$this->set(array('localidades' => $localidades, '_serialize' => array('localidades')));
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Provincia->recursive = 0;
		$this->set('provincias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Provincia->exists($id)) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		$options = array('conditions' => array('Provincia.' . $this->Provincia->primaryKey => $id));
		$this->set('provincia', $this->Provincia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provincia->create();
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash(__('The provincia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provincia could not be saved. Please, try again.'));
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
		if (!$this->Provincia->exists($id)) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash(__('The provincia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provincia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provincia.' . $this->Provincia->primaryKey => $id));
			$this->request->data = $this->Provincia->find('first', $options);
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
		$this->Provincia->id = $id;
		if (!$this->Provincia->exists()) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Provincia->delete()) {
			$this->Session->setFlash(__('The provincia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The provincia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
