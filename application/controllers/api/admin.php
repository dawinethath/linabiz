<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Admin extends REST_Controller {
	
	function __construct() {
		parent::__construct();
	}

	/* Login section *
	*  @param: username and password *
	*  for admin that could create new company *
	*/
	public function index_get() {
		$request = json_decode($this->get('filters'));
		$limit = $this->get('limit');
		$offset= $this->get('offset');
		if(isset($request)) {
			foreach($request->filters as $v) {
				if(isset($v->operator) && $v->operator === 'like') {
					$this->db->like($v->field, $v->value);
				}
				if(isset($v->operator) && $v->operator === 'or_like') {
					$this->db->or_like($v->field, $v->value);
				}
				if(isset($v->operator) && $v->operator === 'where_in') {
					$this->db->where_in($v->field, $v->value);
				}
				if(isset($v->operator) && $v->operator === 'having') {
					$this->db->having($v->field, $v->value);
				}
				if(isset($v->operator)) {
					$this->db->where($v->field, $v->value);
				}
			}
		}
			
		$this->db->limit($limit, $offset);
		$query = $this->db->get('admins');
		$this->response(array('results'=>$query->result(), 'count'=>1), 200);
	}

	public function index_put() {
		$put = json_decode($this->put('models'));

		foreach($put as $a) {
			$ids[] = $a->id;
			$this->db->where('id', $a->id);
			$this->db->update('admins', array(
				'password' => $this->_encrypt($a->password),
				'updated_at' => date("y-m-d")
			));
		}

		$this->db->flush_cache();
		$this->db->where_in('id', $ids);
		$this->db->from('admins');
		$query = $this->db->get();
		foreach($query->result() as $t) {
			$data[] = array(
				'id' => (int) $t->id,
				'username' => $t->username,
				'password' => $t->password,
				'created_at' => $t->created_at,
				'updated_at' => $t->updated_at
			);
		}
		$this->response(array('results'=>$data, 'count'=>count($ids)), 200);
	}

	public function index_post() {
		$posted = json_decode($this->post('models'));

		foreach($posted as $c) {
			$this->db->insert('admins', array(
				'username'=>$c->username,
				'password'=> $this->_encrypt($c->password),
				'created_at' => date("y-m-d"),
				'updated_at' => date("y-m-d")
			));
			$id = $this->db->insert_id();
			$ids[] = $id;
		}
		$this->db->flush_cache();
		$this->db->where_in('id', $ids);
		$this->db->from('admins');
		$query = $this->db->get();
		foreach($query->result() as $t) {
			$data[] = array(
				'id' => (int) $t->id,
				'username' => $t->username,
				'password' => $t->password,
				'created_at' => $t->created_at,
				'updated_at' => $t->updated_at
			);
		}
		$this->response(array('results'=>$data, 'count'=>count($ids)), 201);
	}

	public function index_delete() {
		$delete = json_decode($this->delete('models'));

		foreach($delete as $c) {
			$this->db->where('id', $c->id);
			$this->db->delete('admins');
			$ids[] = $c->id;
		}
		$this->response(array('results'=>array(), 'count'=>count($ids)), 200);
	}

	public function login_post() {
		$request = json_decode($this->post('filter'));

		foreach($request->filters as $r) {
			if($r->field === 'password') {
				$this->db->where($r->field, $this->_encrypt($r->value));
			}
			if($r->field === 'username') {
				$this->db->where($r->field, $r->value);
			}
		}
		$query = $this->db->get('admins');
		$this->response(array('results'=>$query->result()), 200);
	}

	public function changePass_put() {
		$request = json_decode($this->put('models'));
		$id = '';
		foreach($request as $r) {
			$id = $r->id;
			$this->db->where('id', $id);
			$this->db->update('admins', array('password' => $this->_encrypt($r->password)));
		}
		$this->db->flush_cache();
		$this->db->where('id', $id);
		$query = $this->db->get('admins');
		$this->response(array('results'=>$query->result()), 200);
	}

	// public function index_post() {
	// 	// decode data sent from client back to php array for processing
	// 	$posted = json_decode($this->post('models'));
	// 	$data = $this->admin->addUser($posted);
	// 	$this->reponse(array('results'=>$data), 201);
	// 		// if($admin->save()) {
	// 		// 	$data = array(
	// 		// 		'id' => $admin->id,
	// 		// 		'username' => $admin->username,
	// 		// 		'password' => 'hidden'
	// 		// 	);
	// 		// 	$this->response(array(
	// 		// 		'error' => FALSE,
	// 		// 		'msg' => 'created succesfully',
	// 		// 		'results' => $data
	// 		// 	), 201);
	// 		// } else {
	// 		// 	$this->response(array(
	// 		// 		'error' => TRUE,
	// 		// 		'msg' => 'could not create',
	// 		// 		'results' => array()
	// 		// 	), 200);
	// 		// }
	// }

	// public function index_put() {
	// 	$posted = json_decode($this->put('models'));
	// 	$data = $this->admin->updateUser($posted);
	// 	$this->reponse(array('results'=>$data), 201);
	// }

	// public function index_delete() {
	// 	$posted = json_decode($this->delete('models'));
	// 	foreach($posted as $d) {
	// 		$data[] = $d;
	// 		$this->db->where('id', $d->id);
	// 		$this->db->delete('admins');
	// 	}
	// 	$this->response(array('results'=>$data, 'count'=>count($data)), 200);
	// }

	private function _encrypt($data) {
		$addSalt = $data . $this->config->item('encryption_key');;
		return hash('sha256', $addSalt);
	}
}
