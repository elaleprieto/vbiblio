<?php
App::uses('AppController', 'Controller');
/**
 * Cobradores Controller
 *
 * @property Cobrador $Cobrador
 * @property PaginatorComponent $Paginator
 */
class CobradoresController extends AppController {

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
		$admin_allowed = array_merge($owner_allowed, $user_allowed, array('add', 'delete', 'edit', 'index', 'search', 'view'));
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
		$this->Cobrador->recursive = 0;
		$this->set('cobradores', $this->Paginator->paginate());
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
		$this->Cobrador->Behaviors->load('Containable');
		$this->Cobrador->recursive = -1;

		$options['conditions'] = array('Cobrador.' . $this->Cobrador->primaryKey => $id);
		$options['contain'] = array('Socio' => array('fields'=>array('id'
			, 'numero_entrada'
			, 'apellido'
			, 'nombre'
			, 'docnumber'
			, 'cuit'
			, 'calle'
			, 'numero'
			, 'piso'
			, 'localidad_name'
			, 'email'
			, 'telefono'
			, 'celular'
			, 'cobranza_domicilio'
			, 'cobranza_localidad'
			, 'cobranza_no_print_rbo'
			, 'cobranza_zona'
			, 'cobranza_recorrido'
			, 'carnet_pago'
			, 'carnet_pedido'
			, 'categoria_id'
			, 'cobrador_id'
			)
		));
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
