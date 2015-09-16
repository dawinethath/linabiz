<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Currencies extends REST_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->entity = $this->input->get_request_header('Entity');
	}
		 
	public function index_get() {
		$requested_data = $this->get('filter');
		$filters = $requested_data['filters'];
		$limit = $this->get('limit') !== false ? $this->get('limit') : 100;
		$page = $this->get('page') !== false ? $this->get('page') : 1;
		$data = array();
		
		$currencies = new Currency(null, $this->entity);
		if(isset($filters)) {
			foreach($filters as $f) {
				if($f['operator'] === 'or') {
					$currencies->or_where($f['field'], $f['value']);
				} elseif($f['operator'] === 'and') {
					$currencies->where($f['field'], $f['value']);
				} else {
					$currencies->where($f['field'], $f['value']);
				}
				
			}
			$this->benchmark->mark('benchmark_start');
			$currencies->get_paged($page, $limit);
			foreach($currencies as $row) {
				$data[] = array(
					'id' => $row->id,
					'code' => $row->code,
					'country'=> $row->country,
					'locale' => $row->locale,
					'rate' => $row->rate
				);
			}
			if(count($data) > 0) {
				$this->benchmark->mark('benchmark_end');
				$this->response(array('results'=>$data, 'msg' => 'result found', 'count'=>$currencies->paged->total_rows, 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 200);
			} else {
				$this->response(array('error'=>'no criteria.', 'msg' => 'no result found'), 200);
			}
		} else {
			$this->benchmark->mark('benchmark_start');
			$currencies->get_paged($page, $limit);
			foreach($currencies as $row) {
				$data[] = array(
					'id' => $row->id,
					'code' => $row->code,
					'country'=> $row->country,
					'locale' => $row->locale,
					'rate' => $row->rate
				);
			}
			if(count($data) > 0) {
				$this->benchmark->mark('benchmark_end');
				$this->response(array('results'=>$data, 'msg' => 'result found', 'count'=>$currencies->paged->total_rows, 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 200);
			} else {
				$this->response(array('error'=>'no result.', 'msg' => 'no result found'), 200);
			}
		}
	}

	public function index_post() {
		$requested_data = json_decode($this->post('models'));
		$data = array();
		$this->benchmark->mark('benchmark_start');
		foreach($requested_data as $res) {
			$currency = new Currency(null, $this->entity);
			$currency->code = $res->code;
			$currency->country= $res->country;
			$currency->locale = $res->locale;
			$currency->rate= $res->rate;
			$currency->enabled = $res->enabled;

			if($currency->save()) {
				$data[] = array(
					'id' => $row->id,
					'code' => $row->code,
					'country'=> $row->country,
					'locale' => $row->locale,
					'rate' => $row->rate
				);
			}
		}
		$this->benchmark->mark('benchmark_end');
		if(count($data) > 0) {
			$this->response(array('results'=>$data, 'msg' => 'result found', 'count'=>count($data), 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 201);
		} else {
			$this->response(array('error'=>'no result.', 'msg' => 'no result found', 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 200);
		}
	}

	public function index_put() {
		$requested_data = json_decode($this->put('models'));
		$data = array();
		$this->benchmark->mark('benchmark_start');
		foreach($requested_data as $res) {
			$currency = new Currency(null, $this->entity);
			$currency->where('id', $res->id)->get();
			$currency->code = $res->code;
			$currency->country= $res->country;
			$currency->locale = $res->locale;
			$currency->rate= $res->rate;
			$currency->enabled = $res->enabled;
			
			if($currency->save()) {
				$data[] = array(
					'id' => $row->id,
					'code' => $row->code,
					'country'=> $row->country,
					'locale' => $row->locale,
					'rate' => $row->rate
				);
			}
		}
		$this->benchmark->mark('benchmark_end');
		if(count($data) > 0) {
			$this->response(array('results'=>$data, 'msg' => 'result found', 'count'=>count($data), 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 201);
		} else {
			$this->response(array('error'=>'no result.', 'msg' => 'no result found', 'generatedIn'=>$this->benchmark->elapsed_time('benchmark_start', 'benchmark_end')), 200);
		}
	}
}