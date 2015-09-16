<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class Stocks extends REST_Controller {	
	public $entity;
	//CONSTRUCTOR
	function __construct() {
		parent::__construct();
		$this->entity = $this->input->get_request_header('Entity');
	}
	
	//GET 
	function index_get() {		
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Stock(null, $this->entity);		

		//Sort
		if(!empty($sort) && isset($sort)){					
			foreach ($sort as $value) {
				$obj->order_by($value["field"], $value["dir"]);
			}
		}
		
		//Filter		
		if(!empty($filters) && isset($filters)){			
	    	foreach ($filters as $value) {
	    		if(!empty($value["operator"]) && isset($value["operator"])){
		    		if($value["operator"]=="where_in"){
		    			$obj->where_in($value["field"], $value["value"]);
		    		}else if($value["operator"]=="or_where_in"){
		    			$obj->or_where_in($value["field"], $value["value"]);
		    		}else if($value["operator"]=="where_not_in"){
		    			$obj->where_not_in($value["field"], $value["value"]);
		    		}else if($value["operator"]=="or_where_not_in"){
		    			$obj->or_where_not_in($value["field"], $value["value"]);
		    		}else if($value["operator"]=="like"){
		    			$obj->like($value["field"], $value["value"]);
		    		}else if($value["operator"]=="or_like"){
		    			$obj->or_like($value["field"], $value["value"]);
		    		}else if($value["operator"]=="not_like"){
		    			$obj->not_like($value["field"], $value["value"]);
		    		}else if($value["operator"]=="or_not_like"){
		    			$obj->or_not_like($value["field"], $value["value"]);
		    		}else if($value["operator"]=="startswith"){
		    			$obj->like($value["field"], $value["value"], "after");
		    		}else if($value["operator"]=="endswith"){
		    			$obj->like($value["field"], $value["value"], "before");
		    		}else if($value["operator"]=="contains"){
		    			$obj->like($value["field"], $value["value"], "both");
		    		}else if($value["operator"]=="or_where"){
		    			$obj->or_where($value["field"], $value["value"]);
		    		}else if($value["operator"]=="by_category"){
		    			$obj->where_related("product", $value["field"], $value["value"]);
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{
	    			$obj->where($value["field"], $value["value"]);
	    		}
			}									 			
		}		

		//Results
		$obj->get_paged_iterated($page, $limit);
		$data["count"] = $obj->paged->total_rows;								

		if($obj->result_count()>0){			
			foreach ($obj as $value) {							
				$data["results"][] = array(
					"id" 			=> $value->id,					
					"currency_id"	=> $value->currency_id,
					"contact_id"	=> $value->contact_id,
					"product_id" 	=> $value->product_id,
					"unit_id" 		=> $value->unit_id,						
					"quantity" 		=> floatval($value->quantity), 		
					"price" 		=> floatval($value->price),					
					"issued_date" 	=> $value->issued_date,

					"currency"		=> $value->currency->get_raw()->result(),
					"contact"		=> $value->contact->get_raw()->result(),
					"product"		=> $value->product->get_raw()->result(),
					"unit"			=> $value->unit->get_raw()->result()
				);
			}
		}

		//Response Data		
		$this->response($data, 200);		
	}
	
	//POST
	function index_post() {
		$models = json_decode($this->post('models'));

		foreach ($models as $value) {
			$obj = new Stock(null, $this->entity);
			$obj->currency_id 	= $value->currency_id;
			$obj->contact_id 	= $value->contact_id;
			$obj->product_id 	= $value->product_id;			
			$obj->unit_id 		= $value->unit_id;
			$obj->quantity 		= $value->quantity;
			$obj->price 		= $value->price;			
			$obj->issued_date 	= $value->issued_date;
			
			if($obj->save()){				
				//Respsone
				$data["results"][] = array(
					"id" 			=> $obj->id,
					"currency_id"	=> $obj->currency_id,
					"contact_id"	=> $obj->contact_id,
					"product_id" 	=> $obj->product_id,					
					"unit_id"		=> $obj->unit_id, 		
					"quantity" 		=> $obj->quantity, 		
					"price" 		=> $obj->price,					
					"issued_date" 	=> $obj->issued_date,

					"currency"		=> $obj->currency->get_raw()->result(),
					"contact"		=> $obj->contact->get_raw()->result(),
					"product"		=> $obj->product->get_raw()->result(),
					"unit"			=> $obj->unit->get_raw()->result()
				);				
			}			
		}
		$data["count"] = count($data["results"]);
		
		$this->response($data, 201);						
	}

	//PUT
	function index_put() {
		$models = json_decode($this->put('models'));
		$data["results"] = array();
		$data["count"] = 0;

		foreach ($models as $value) {			
			$obj = new Product(null, $this->entity);
			$obj->get_by_id($value->id);

			$obj->currency_id 	= $value->currency_id;
			$obj->contact_id 	= $value->contact_id;
			$obj->product_id 	= $value->product_id;			
			$obj->unit_id 		= $value->unit_id;
			$obj->quantity 		= $value->quantity;
			$obj->price 		= $value->price;			
			$obj->issued_date 	= $value->issued_date;

			if($obj->save()){				
				//Results
				$data["results"][] = array(
					"id" 			=> $obj->id,
					"currency_id"	=> $obj->currency_id,
					"contact_id"	=> $obj->contact_id,
					"product_id" 	=> $obj->product_id,					
					"unit_id"		=> $obj->unit_id, 		
					"quantity" 		=> $obj->quantity, 		
					"price" 		=> $obj->price,					
					"issued_date" 	=> $obj->issued_date,

					"currency"		=> $obj->currency->get_raw()->result(),
					"contact"		=> $obj->contact->get_raw()->result(),
					"product"		=> $obj->product->get_raw()->result(),
					"unit"			=> $obj->unit->get_raw()->result()
				);						
			}
		}
		$data["count"] = count($data["results"]);

		$this->response($data, 200);
	}
	
	//DELETE
	function index_delete() {
		$models = json_decode($this->delete('models'));

		foreach ($models as $key => $value) {
			$obj = new Product(null, $this->entity);
			$obj->where("id", $value->id)->get();
			
			$data["results"][] = array(
				"data"   => $value,
				"status" => $obj->delete()
			);
							
		}

		//Response data
		$this->response($data, 200);
	}    
	
}
/* End of file products.php */
/* Location: ./application/controllers/api/products.php */