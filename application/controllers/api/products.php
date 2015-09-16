<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class Products extends REST_Controller {	
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

		$obj = new Product(null, $this->entity);		

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
		    		}else if($value["operator"]=="by_vendor"){
		    			$obj->where_related("contact", "id", $value["value"]);
		    		}else if($value["operator"]=="search"){
		    			$obj->like("sku", $value["value"], "after");
				    	$obj->or_like("name", $value["value"], "after");
				    	$obj->or_like("description", $value["value"], "both");
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{
	    			$obj->where($value["field"], $value["value"]);
	    		}
			}									 			
		}		

		//Result		
		$obj->get_paged_iterated($page, $limit);
		$data["count"] = $obj->paged->total_rows;				

		if($obj->result_count()>0){			
			foreach ($obj as $value) {	
				
				$priceList = array();				
				foreach ($value->price_list->get() as $p) {
					$priceList[] = array(
						"id" 			=> $p->id,
						"currency_id" 	=> $p->currency_id,
						"product_id" 	=> $p->product_id,
						"unit_id" 		=> $p->unit_id,
						"price" 		=> floatval($p->price),
						"unit_value" 	=> floatval($p->unit_value),

						"locale" 		=> $p->currency->get()->locale,
						"unit" 			=> $p->unit->get()->name
					); 
				}

				$cost = array();
				foreach ($value->stock->order_by("issued_date", "desc")->get() as $c) {
					$cost = array(
						"id" 		=> $c->id,
						"quantity" 	=> floatval($c->quantity),
						"price" 	=> floatval($c->price),

						"locale"	=> $c->currency->get()->locale,
						"unit" 		=> $c->unit->get()->name
					);
				}
							
				$data["results"][] = array(
					"id" 			=> $value->id,					
					"category_id" 	=> $value->category_id,
					"unit_id"		=> $value->unit_id,						
					"sku" 			=> $value->sku, 		
					"name" 			=> $value->name,
					"description"	=> $value->description,					
					"on_hand" 		=> floatval($value->on_hand),					
					"order_point" 	=> floatval($value->order_point),
					"favorite" 		=> $value->favorite,
					"image_url" 	=> $value->image_url, 	
					"status" 		=> $value->status,

					"unit" 			=> $value->unit->get()->name,
					"cost"			=> $cost,
					"price_lists"	=> $priceList					
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
			$obj = new Product(null, $this->entity);			
			$obj->category_id 	= $value->category_id;			
			$obj->unit_id 		= $value->unit_id;
			$obj->sku 			= $value->sku;
			$obj->name 			= $value->name;
			$obj->description 	= $value->description;			
			$obj->on_hand 		= $value->on_hand;			
			$obj->order_point 	= $value->order_point;
			$obj->favorite 		= $value->favorite;
			$obj->image_url 	= $value->image_url;
			$obj->status 		= $value->status;

			if($obj->save()){				
				//Respsone
				$data["results"][] = array(
					"id" 			=> $obj->id,					
					"category_id" 	=> $obj->category_id,
					"unit_id"		=> $obj->unit_id,						
					"sku" 			=> $obj->sku, 		
					"name" 			=> $obj->name,
					"description"	=> $obj->description,					
					"on_hand" 		=> floatval($obj->on_hand),					
					"order_point" 	=> intval($obj->order_point),
					"favorite" 		=> $obj->favorite,
					"image_url" 	=> $obj->image_url, 	
					"status" 		=> $obj->status,

					"unit" 			=> $obj->unit->get()->name
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

			$obj->category_id 	= $value->category_id;			
			$obj->unit_id 		= $value->unit_id;
			$obj->sku 			= $value->sku;
			$obj->name 			= $value->name;
			$obj->description 	= $value->description;			
			$obj->on_hand 		= $value->on_hand;			
			$obj->order_point 	= $value->order_point;
			$obj->favorite 		= $value->favorite;
			$obj->image_url 	= $value->image_url;
			$obj->status 		= $value->status;

			if($obj->save()){				
				//Results
				$data["results"][] = array(
					"id" 			=> $obj->id,					
					"category_id" 	=> $obj->category_id,
					"unit_id"		=> $obj->unit_id,						
					"sku" 			=> $obj->sku, 		
					"name" 			=> $obj->name,
					"description"	=> $obj->description,					
					"on_hand" 		=> floatval($obj->on_hand),					
					"order_point" 	=> intval($obj->order_point),
					"favorite" 		=> $obj->favorite,
					"image_url" 	=> $obj->image_url, 	
					"status" 		=> intval($obj->status),

					"unit" 			=> $obj->unit->get()->name
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