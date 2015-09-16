<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class Roles extends REST_Controller {
	public $entity;
	function __construct() {
		parent::__construct();
		$this->entity = $this->input->get_request_header('Entity');
	}

	/*
	* get role(s) based on filter, limit and offset
	* param filter, limit, offset
	*/
	function index_get() {
		$filter = $this->get('filter')?$this->get('filter'): null;
		$limit = $this->get('limit');
		$offset = $this->get('offset')?$this->get('offset'):0;
		
		$role = new Role();
	}

	/* 
	* create new role
	*/
	function index_post() {
		$model = json_decode($this->post('models'));

		$r = new Role();
	}

	/*
	* update existing role
	* param: role Id and name
	*/
	function index_put() {
		$model = json_decode($this->put('models'));

		$role = new Role();
	}

	function index_delete() {
		$model = json_decode($this->delete('models'));

		$role = new Role();
	}

	// get all users in this role
	// param: role id
	function user_get() {
		$filter = $this->get('filter')?$this->get('filter'): null;
		$limit = $this->get('limit');
		$offset = $this->get('offset')?$this->get('offset'):0;

		$roles = new Role(null, $this->entity);
		foreach($filter['filters'] as $f) {
			$roles->where($f['field'], $f['value']);
		}
		$users = $roles->user->get_raw();
		$data[] = $users->result(); 
		$this->response(array('results'=>$data), 200);
	}

	// assign user to a role
	function user_post() {
		$model = json_decode($this->post('models'));
		foreach($model as $d) {
			$user = new User(null, $this->entity);
			$user->where('id', $d->user);
			$user->get();

			$role = new Role(null, $this->entity);
			$role->where('id', $d->role);
			$role->get();

			if($user->exists() && $role->exists()) {
				if($user->save($role)){
					$this->response(array('msg'=>'assigned'), 201);
				}
			}
			// $this->response(array('user'=>$user->id), 201);
		}
		// $this->response(array('user'=>$model[0]->user), 201);
	}

	// update user role
	function user_put() {
		$model = json_decode($this->put('models'));
		foreach($model as $d) {
			$user = new User(null, $this->entity);
			$user->where('id', $d->user);
			$user->get();

			$role = new Role(null, $this->entity);
			$role->where('id', $d->role);
			$role->get();

			if($user->exists() && $role->exists()) {
				$user->set_join_field($role, 'role_id', $d->role);
				if($user->save($role)){
					$this->response(array('msg'=>'assigned'), 201);
				}
			}
			// $this->response(array('user'=>$user->id), 201);
		}
		// $this->response(array('user'=>$model[0]->user), 201);
	}

	// remove user from role
	function user_delete() {
		$model = json_decode($this->delete('models'));
	}
}

/* End of file auth.php */
/* Location: ./application/controller/api/role.php */