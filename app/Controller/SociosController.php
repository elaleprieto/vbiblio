<?php
App::uses('AppController', 'Controller');
/**
 * Socios Controller
 *
 * @property Socio $Socio
 * @property PaginatorComponent $Paginator
 */
class SociosController extends AppController {


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
			$socio = $this->request->data;
			// debug($socio);
			// return;
			$socio['Socio']['ingreso'] = $this->_formatearFecha($socio['Socio']['ingreso']); # Se formatea la fecha para guardarla correctamente.
			$socio['Socio']['egreso'] = $this->_formatearFecha($socio['Socio']['egreso']); # Se formatea la fecha para guardarla correctamente.
			$socio['Socio']['nacimiento'] = $this->_formatearFecha($socio['Socio']['nacimiento']); # Se formatea la fecha para guardarla correctamente.

			$this->Socio->create($socio);
			if ($this->Socio->save($socio)) {
				$this->Session->setFlash(__('The socio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The socio could not be saved. Please, try again.'));
			}
		}
		// $localidades = $this->Socio->Localidad->find('list');
		$provincias = $this->Socio->Localidad->Provincia->find('all', array('order'=>'name ASC', 'recursive'=>-1));
		$categorias = $this->Socio->Categoria->find('list');
		$cobradores = $this->Socio->Cobrador->find('list');
		$tipocambios = $this->Socio->Tipocambio->find('list');
		$tipos = $this->Socio->Tipo->find('list');
		$tipodocs = $this->Socio->Tipodoc->find('list');

		$this->set(compact('localidades', 'provincias', 'categorias', 'cobradores', 'tipocambios', 'tipos', 'tipodocs'));
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
			$socio = $this->request->data;
			$socio['Socio']['ingreso'] = $this->_formatearFecha($socio['Socio']['ingreso']); # Se formatea la fecha para guardarla correctamente.
			$socio['Socio']['egreso'] = $this->_formatearFecha($socio['Socio']['egreso']); # Se formatea la fecha para guardarla correctamente.
			$socio['Socio']['nacimiento'] = $this->_formatearFecha($socio['Socio']['nacimiento']); # Se formatea la fecha para guardarla correctamente.

			if ($this->Socio->save($socio)) {
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

/**
 * search method
 *
 * @throws NotFoundException
 * @param string $barCode
 * @return void
 */
	public function search() {
		$this->layout = 'ajax';
		$query = $this->request->query['query'];
		$options['conditions'] = array('apellido LIKE' => "%$query%");
		$options['fields'] = array('id', 'numero_entrada', 'apellido', 'nombre', 'docnumber');
		$options['recursive'] = -1;
		$socios = $this->Socio->find('all', $options);
		$this->set(array('socios' => $socios, '_serialize' => array('socios')));
	}

	public function _formatearFecha($fecha='') {
		if ($fecha != '') {
			return date("Y-m-d", strtotime($fecha)); # Se formatea la fecha para guardarla correctamente.
		}
		else return "0000-00-00";
	}
}
