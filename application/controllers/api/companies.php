<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Companies extends REST_Controller {
	public $entity;
	//CONSTRUCTOR
	function __construct() {
		parent::__construct();
		$this->entity = $this->input->get_request_header('Entity');
	}
	
    function index_get() {
		$filter = $this->get("filter");
		$c = new Company(null, $this->entity);
		if($filter) {		
			$criteria = array();				
			for ($i = 0; $i < count($filter['filters']); ++$i) {
				if(isset($filter['filters'][$i]['operator']) && $filter['filters'][$i]['operator'] === 'or')	{
					$this->db->or_where($filter['filters'][$i]['field'], $filter['filters'][$i]['value']);
				}
				$this->db->where($filter['filters'][$i]['field'], $filter['filters'][$i]['value']);	
				$criteria += array($filter['filters'][$i]['field'] => $filter['filters'][$i]['value']);
			}
			$filterQuery = $this->db->get('companies');
			if($filterQuery->num_rows()) {
				foreach($filterQuery->result() as $r) {
					$data[] = array(
						"id" 				=> $r->id,
						"name"				=> $r->name,
						"parent_id" 		=> $r->parent_id,
						"year_founded" 		=> $r->year_founded,
						"image_url" 		=> $r->image_url,
						"operation_license" => $r->operation_license,
						"mobile"			=> $r->mobile,
						"phone" 			=> $r->phone,
						"address"			=> $r->address,
						"currency" 			=> $r->based_currency,
						"representative" 	=> $r->representative,
						"licenses_held" 	=> $this->license->count_all()
					);
	 			}
 				$this->response(array("status"=>"OK", "results"=>$data), 200);
			} else {
				$this->response(array("status"=>"false", "message"=>"There is no result found.", "results"=>array()), 200);
			}
		} else {
			$this->response(array("status"=>"false", "message"=>"company id is needed.", "results"=>array()), 200);
		}
    }
	
	function index_post() {
		$posted_data =  $this->post('models');
		$ids = array();

		// $u = new User();
		foreach($posted_data as $ row) {
			$c = new Company(null, $this->entity);
			$c->parent_id = $row->parent_id;
			$c->currency_id = $row->currency_id;
			$c->name = $row->name;
			$c->legal_name = $row->legal_name;
			$c->representative = $row->representative;
			$c->email = $row->email;
			$c->mobile = $row->mobile;
			$c->phone = $row->phone;
			$c->address = $row->address;
			$c->year_founded = $row->year_founded;
			$c->fiscal_date = $row->fiscal_date;
			$c->operation_license = $row->operation_license;
			$c->vat_no = $row->vat_no;
			$c->term_of_condition = $row->term_of_condition;
			$c->image_url = $row->image_url;
			if($c->save()){
				$ids[] = $c;
			}			
		}
		foreach($ids as $com) {
			$data[] = array(
				"id" => $com->id,
				"name" => $com->name,
				"legal_name" => $com->legal_name,
				"representative" => $com->representative,
				"email" => $com->email,
				"mobile" => $com->mobile,
				"phone" => $com->phone,
				"address" => $com->address,
				"year_founded" => $com->year_founded,
				"fiscal_date" => $com->fiscal_date,
				"operation_license" => $com->operation_license,
				"vat_no" => $com->vat_no,
				"term_of_condition" => $com->term_of_condition,
				"image_url" => $com->image_url,
			);
 		}

 		$this->response(array('results'=>$data), 201);
	}
	
	function index_put() {
	}

}