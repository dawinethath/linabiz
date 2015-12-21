<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class bills extends REST_Controller {	
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

		$obj = new Bill(null, $this->entity);		

		//Sort
		if(!empty($sort) && isset($sort)){					
			foreach ($sort as $value) {
				$obj->order_by($value["field"], $value["dir"]);
			}
		}
		
		//Filter		
		if(!empty($filters) && isset($filters)){
			$deleted = 0;

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
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{
	    			if($value["field"]=="deleted"){	    			
	    				$deleted = $value["value"];			    				    			
	    			}else{
	    				$obj->where($value["field"], $value["value"]);
	    			}	
	    		}
			}
			
			$obj->where("deleted", $deleted);											 			
		}		

		//Results		
		$obj->get_paged_iterated($page, $limit);
		$data["count"] = $obj->paged->total_rows;	

		if($obj->result_count()>0){			
			foreach ($obj as $value) {
				$data["results"][] = array(
					"id" 				=> $value->id,
					"contact_id"		=> $value->contact_id,
					"biller_id" 		=> $value->biller_id,
					"currency_id" 		=> $value->currency_id,					
					"type"				=> $value->type,								   			   						   
				   	"number" 			=> $value->number,				   	
				   	"amount" 			=> floatval($value->amount),
				   	"paid" 				=> floatval($value->paid),
				   	"paid_usd" 			=> floatval($value->paid_usd),
				   	"paid_khr" 			=> floatval($value->paid_khr),
				   	"changes" 			=> floatval($value->changes),
				   	"discount" 			=> floatval($value->discount),
				   	"fine" 				=> floatval($value->fine),
				   	"rate" 				=> floatval($value->rate),				   	
				   	"memo" 				=> $value->memo,
				   	"address" 			=> $value->address,
				   	"status" 			=> $value->status,
				   	"issued_date" 		=> $value->issued_date,
				   	"due_date" 			=> $value->due_date,
				   	"paid_date" 		=> $value->paid_date,
				   	"deliveried" 		=> $value->deliveried,
				   	"deleted" 			=> $value->deleted,
				   	
				   	"contact" 			=> $value->contact->get_raw()->result(),
				   	"locale" 			=> $value->currency->get()->locale
				);
			}
		}		

		//Response Data		
		$this->response($data, 200);	
	}

	//POST
	function index_post() {
		$models = json_decode($this->post('models'));

		$number = "";
		foreach ($models as $value) {
			if($number==""){				
				$number = $this->_generate_number($value->type);
			}else{
				$last_no = $number;
				$header = substr($last_no, 0, -5);
				$no = intval(substr($last_no, strlen($last_no) - 5));
				$no++;
				$number = $header . str_pad($no, 5, "0", STR_PAD_LEFT);
			}

			$obj = new Bill(null, $this->entity);
			$obj->contact_id 	= $value->contact_id;			
			$obj->biller_id 	= $value->biller_id;
			$obj->currency_id 	= $value->currency_id;
			$obj->type			= $value->type;
			$obj->number		= $number;
			$obj->amount		= $value->amount;			
			$obj->paid			= $value->paid;
			$obj->paid_usd		= $value->paid_usd;
			$obj->paid_khr		= $value->paid_khr;
			$obj->changes		= $value->changes;				
			$obj->discount		= $value->discount;
			$obj->fine			= $value->fine;
			$obj->rate 			= $value->rate;
			$obj->memo 			= $value->memo;				
			$obj->address		= $value->address;
			$obj->status		= $value->status;
			$obj->issued_date	= $value->issued_date;			
			$obj->due_date		= isset($value->due_date)?$value->due_date:"";
			$obj->paid_date 	= isset($value->paid_date)?$value->paid_date:"";
			$obj->delivered 	= isset($value->delivered)?$value->delivered:0;
			$obj->deleted 		= isset($value->deleted)?$value->deleted:0;

			if($obj->save()){				
				$data["results"][] = array(
					"id" 				=> $obj->id,
					"contact_id"		=> $obj->contact_id,
					"biller_id" 		=> $obj->biller_id,
					"currency_id" 		=> $obj->currency_id,
					"reference_id" 		=> $obj->reference_id,
					"type"				=> $obj->type,								   			   						   
				   	"number" 			=> $obj->number,				   	
				   	"amount" 			=> floatval($obj->amount),
				   	"paid" 				=> floatval($obj->paid),
				   	"paid_usd" 			=> floatval($obj->paid_usd),
				   	"paid_khr" 			=> floatval($obj->paid_khr),
				   	"changes" 			=> floatval($obj->changes),
				   	"discount" 			=> floatval($obj->discount),
				   	"fine" 				=> floatval($obj->fine),
				   	"rate" 				=> floatval($obj->rate),				   	
				   	"memo" 				=> $obj->memo,
				   	"address" 			=> $obj->address,
				   	"status" 			=> intval($obj->status),
				   	"issued_date" 		=> $obj->issued_date,
				   	"due_date" 			=> $obj->due_date,
				   	"paid_date" 		=> $obj->paid_date,
				   	"delivered" 		=> $obj->delivered,
				   	"deleted" 			=> $obj->deleted,
				   	
				   	"contact" 			=> $obj->contact->get_raw()->result(),
				   	"locale" 			=> $obj->currency->get()->locale				
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
			$obj = new Bill(null, $this->entity);
			$obj->get_by_id($value->id);

			$obj->contact_id 	= $value->contact_id;			
			$obj->biller_id 	= $value->biller_id;
			$obj->currency_id 	= $value->currency_id;
			$obj->type			= $value->type;
			$obj->number		= $value->number;
			$obj->amount		= $value->amount;
			$obj->paid			= $value->paid;
			$obj->paid_usd		= $value->paid_usd;
			$obj->paid_khr		= $value->paid_khr;
			$obj->changes		= $value->changes;				
			$obj->discount		= $value->discount;
			$obj->fine			= $value->fine;
			$obj->rate 			= $value->rate;
			$obj->memo 			= $value->memo;				
			$obj->address		= $value->address;
			$obj->status		= $value->status;
			$obj->issued_date	= date("Y-m-d", strtotime($value->issued_date));			
			$obj->due_date		= date("Y-m-d", strtotime($value->due_date));
			$obj->paid_date 	= date("Y-m-d", strtotime($value->paid_date));
			$obj->delivered 	= isset($value->delivered)?$value->delivered:0;
			$obj->deleted 		= $value->deleted;			
			
			if($obj->save()){
				//Results
				$data["results"][] = array(
					"id" 				=> $obj->id,
					"contact_id"		=> $obj->contact_id,
					"biller_id" 		=> $obj->biller_id,
					"currency_id" 		=> $obj->currency_id,
					"type"				=> $obj->type,								   			   						   
				   	"number" 			=> $obj->number,				   	
				   	"amount" 			=> floatval($obj->amount),
				   	"paid" 				=> floatval($obj->paid),
				   	"paid_usd" 			=> floatval($obj->paid_usd),
				   	"paid_khr" 			=> floatval($obj->paid_khr),
				   	"changes" 			=> floatval($obj->changes),
				   	"discount" 			=> floatval($obj->discount),
				   	"fine" 				=> floatval($obj->fine),
				   	"rate" 				=> floatval($obj->rate),				   	
				   	"memo" 				=> $obj->memo,
				   	"address" 			=> $obj->address,
				   	"status" 			=> $obj->status,
				   	"issued_date" 		=> $obj->issued_date,
				   	"due_date" 			=> $obj->due_date,
				   	"paid_date" 		=> $obj->paid_date,
				   	"delivered" 		=> $obj->delivered,
				   	"deleted" 			=> $obj->deleted,
				   	
				   	"contact" 			=> $obj->contact->get_raw()->result(),
				   	"locale" 			=> $obj->currency->get()->locale
				);						
			}
		}
		$data["count"] = count($data["results"]);

		$this->response($data, 200);
	}
	
	//DELETE
	function index_delete() {
		$models = json_decode($this->delete('models'));

		foreach ($models as $value) {
			$obj = new Bill(null, $this->entity);
			$obj->get_by_id($value->id);
			
			$data["results"][] = array(
				"data"   => $value,
				"status" => $obj->delete()
			);
							
		}
		$data["count"] = count($data["results"]);
		
		//Response data
		$this->response($data, 200);
	}

	//Generate invoice number
	private function _generate_number($type){		
		$header = "";
    	switch($type){
		case "receipt":
		  	$header = "SR";
		  	break;
		case "so":
		  	$header = "SO";
		  	break;
		case "estimate":
		  	$header = "ES";
		  	break;
		case "po":
		  	$header = "PO";
		  	break;
		case "bill":
		  	$header = "BIL";
		  	break;		
		case "expense":
		  	$header = "EX";
		  	break;
		case "income":
		  	$header = "IN";
		  	break;
		case "invest":
		  	$header = "INT";
		  	break;
		case "witdraw":
		  	$header = "WIT";
		  	break;
		case "salary":
		  	$header = "SLR";
		  	break;						
		default:
		  	$header = "INV";
		}
		
		$YY = date("y");
		$MM = date("m");
		$headerWithDate = $header . $YY . $MM;

		$inv = new Bill(null, $this->entity);
		$inv->where('type', $type);
		$inv->order_by('id', 'desc');
		$inv->get();

		$last_no = "";		
		if(count($inv)>0){
			$last_no = $inv->number;
		}
		$no = 0;
		$curr_YY = 0;
		if(strlen($last_no)>10){
			$no = intval(substr($last_no, strlen($last_no) - 5));
			$curr_YY = intval(substr($last_no, strlen($last_no) - 9, 2));			
		}				 
		
		//Reset invoice number back to 1 for the new year starts
		if(intval($YY)>$curr_YY){
			$no = 1;
		}else{
			$no++;
		}
								
		$number = $headerWithDate . str_pad($no, 5, "0", STR_PAD_LEFT);					
		
		return $number;				
	}
	

	//LINE GET
	function line_get() {		
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Bill_line(null, $this->entity);		

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
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{	    			
	    			$obj->where($value["field"], $value["value"]);	    				    			
	    		}
			}									 			
		}		

		//Results
		if(!empty($limit) && !empty($page)){
			$obj->get_paged_iterated($page, $limit);
			$data["count"] = $obj->paged->total_rows;							
		}
		if($obj->result_count()>0){			
			foreach ($obj as $value) {
				$pl = new Price_list(null, $this->entity);				
				if($value->product_id>0){
					$pl->get_by_product_id($value->product_id);

					$priceList = [];
					foreach ($pl as $p) {
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
				}else{
					$un = new Unit(null, $this->entity);
					$un->get();

					$priceList = [];
					foreach ($un as $u) {
						$priceList[] = array(
							"id" 			=> $u->id,
							"currency_id" 	=> 0,
							"product_id" 	=> 0,
							"unit_id" 		=> $u->id,
							"price" 		=> 0,
							"unit_value" 	=> 0,

							"currency" 		=> "km-KH",
							"unit" 			=> $u->name
						);
					}
				}				

				$data["results"][] = array(
					"id" 			=> $value->id,
					"bill_id" 		=> $value->bill_id,					
					"unit_id" 		=> $value->unit_id,
					"currency_id" 	=> $value->currency_id,
					"product_id" 	=> $value->product_id,						
					"description" 	=> $value->description,
					"quantity" 		=> floatval($value->quantity),
					"price"  		=> floatval($value->price),
					"amount" 		=> floatval($value->amount),
					"rate" 			=> floatval($value->rate),
					"checkout" 		=> floatval($value->checkout),

					"product" 		=> $value->product->get_raw()->result(),
					"unit" 			=> $value->unit->get_raw()->result(),
					"currency" 		=> $value->currency->get_raw()->result(),
					"priceList" 	=> $priceList
				);
			}
		}		

		//Response Data		
		$this->response($data, 200);	
	}

	//LINE POST
	function line_post() {
		$models = json_decode($this->post('models'));

		foreach ($models as $value) {
			$obj = new Bill_line(null, $this->entity);
			$obj->bill_id 		= $value->bill_id;		
			$obj->unit_id 		= $value->unit_id;
			$obj->currency_id 	= $value->currency_id;
			$obj->product_id 	= $value->product_id;							
			$obj->description	= $value->description;
			$obj->quantity		= $value->quantity;
			$obj->price			= $value->price;
			$obj->amount		= $value->amount;
			$obj->rate 			= $value->rate;
			$obj->checkout 		= isset($value->checkout)?$value->checkout:0;			
						
			if($obj->save()){
				$pl = new Price_list(null, $this->entity);				
				if($obj->unit_id>0){
					$pl = $pl->get_by_id($obj->unit_id);
				}else{
					$pl = $pl->get();
				}

				$priceList = [];
				foreach ($pl as $p) {
					$priceList[] = array(
						"id" 			=> $p->id,
						"currency_id" 	=> $p->currency_id,
						"product_id" 	=> $p->product_id,
						"unit_id" 		=> $p->unit_id,
						"price" 		=> floatval($p->price),
						"unit_value" 	=> floatval($p->unit_value),

						"currency" 		=> $p->currency->get_raw()->result(),
						"unit" 			=> $p->unit->get_raw()->result()
					);
				}

				$data["results"][] = array(
					"id" 			=> $obj->id,
					"bill_id" 		=> $obj->bill_id,					
					"unit_id" 		=> $obj->unit_id,
					"currency_id" 	=> $obj->currency_id,
					"product_id" 	=> $obj->product_id,						
					"description" 	=> $obj->description,
					"quantity" 		=> floatval($obj->quantity),
					"price"  		=> floatval($obj->price),
					"amount" 		=> floatval($obj->amount),
					"rate" 			=> floatval($obj->rate),
					"checkout" 		=> floatval($obj->checkout),

					"product" 		=> $obj->product->get_raw()->result(),
					"unit" 			=> $obj->unit->get_raw()->result(),
					"currency" 		=> $obj->currency->get_raw()->result(),
					"priceList" 	=> $priceList				
				);				
			}		
		}
		$data["count"] = count($data["results"]);

		$this->response($data, 201);
	}
	
	//LINE PUT
	function line_put() {
		$models = json_decode($this->put('models'));
		$data["results"] = array();
		$data["count"] = 0;

		foreach ($models as $value) {			
			$obj = new Bill_line(null, $this->entity);
			$obj->get_by_id($value->id);

			$obj->bill_id 		= $value->bill_id;		
			$obj->unit_id 		= $value->unit_id;
			$obj->currency_id 	= $value->currency_id;
			$obj->product_id 	= $value->product_id;							
			$obj->description	= $value->description;
			$obj->quantity		= $value->quantity;
			$obj->price			= $value->price;
			$obj->amount		= $value->amount;
			$obj->rate 			= $value->rate;
			$obj->checkout 		= isset($value->checkout)?$value->checkout:0;

			if($obj->save()){
				$pl = new Price_list(null, $this->entity);				
				if($obj->unit_id>0){
					$pl = $pl->get_by_id($obj->unit_id);
				}else{
					$pl = $pl->get();
				}

				$priceList = [];
				foreach ($pl as $p) {
					$priceList[] = array(
						"id" 			=> $p->id,
						"currency_id" 	=> $p->currency_id,
						"product_id" 	=> $p->product_id,
						"unit_id" 		=> $p->unit_id,
						"price" 		=> floatval($p->price),
						"unit_value" 	=> floatval($p->unit_value),

						"currency" 		=> $p->currency->get_raw()->result(),
						"unit" 			=> $p->unit->get_raw()->result()
					);
				}

				//Results
				$data["results"][] = array(
					"id" 			=> $obj->id,
					"bill_id" 		=> $obj->bill_id,					
					"unit_id" 		=> $obj->unit_id,
					"currency_id" 	=> $obj->currency_id,
					"product_id" 	=> $obj->product_id,						
					"description" 	=> $obj->description,
					"quantity" 		=> floatval($obj->quantity),
					"price"  		=> floatval($obj->price),
					"amount" 		=> floatval($obj->amount),
					"rate" 			=> floatval($obj->rate),
					"checkout" 		=> floatval($obj->checkout),

					"product" 		=> $obj->product->get_raw()->result(),
					"unit" 			=> $obj->unit->get_raw()->result(),
					"currency" 		=> $obj->currency->get_raw()->result(),
					"priceList" 	=> $priceList
				);						
			}
		}
		$data["count"] = count($data["results"]);

		$this->response($data, 200);
	}
	
	//LINE DELETE
	function line_delete() {
		$models = json_decode($this->delete('models'));

		foreach ($models as $value) {
			$obj = new Bill_line(null, $this->entity);
			$obj->get_by_id($value->id);
			
			$data["results"][] = array(
				"data"   => $value,
				"status" => $obj->delete()
			);
							
		}
		$data["count"] = count($data["results"]);

		//Response data
		$this->response($data, 200);
	}

	//RECORD GET	
	function stock_get() {		
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Bill_line(null, $this->entity);		

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
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{	    			
	    			$obj->where($value["field"], $value["value"]);	    				    			
	    		}
			}									 			
		}		

		//Results
		if(!empty($limit) && !empty($page)){
			$obj->get_paged_iterated($page, $limit);
			$data["count"] = $obj->paged->total_rows;							
		}
		if($obj->result_count()>0){			
			foreach ($obj as $value) {
				$pl = new Price_list(null, $this->entity);				
				if($value->product_id>0){
					$pl->get_by_product_id($value->product_id);

					$priceList = [];
					foreach ($pl as $p) {
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
				}else{
					$un = new Unit(null, $this->entity);
					$un->get();

					$priceList = [];
					foreach ($un as $u) {
						$priceList[] = array(
							"id" 			=> $u->id,
							"currency_id" 	=> 0,
							"product_id" 	=> 0,
							"unit_id" 		=> $u->id,
							"price" 		=> 0,
							"unit_value" 	=> 0,

							"currency" 		=> "km-KH",
							"unit" 			=> $u->name
						);
					}
				}				

				$data["results"][] = array(
					"id" 			=> $value->id,
					"bill_id" 		=> $value->bill_id,					
					"unit_id" 		=> $value->unit_id,
					"currency_id" 	=> $value->currency_id,
					"product_id" 	=> $value->product_id,						
					"description" 	=> $value->description,
					"quantity" 		=> floatval($value->quantity),
					"price"  		=> floatval($value->price),
					"amount" 		=> floatval($value->amount),
					"rate" 			=> floatval($value->rate),

					"product" 		=> $value->product->get_raw()->result(),
					"unit" 			=> $value->unit->get_raw()->result(),
					"currency" 		=> $value->currency->get_raw()->result(),
					"priceList" 	=> $priceList
				);
			}
		}		

		//Response Data		
		$this->response($data, 200);	
	}

	//GET OUTSTANDING
	function outstanding_get(){
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;
		
		//Bill
		$bill = new Bill(null, $this->entity);
		if(!empty($filters) && isset($filters)){
			$bill->where($filters[0]["field"], $filters[0]["value"]);
		}
		$bill->where("type", "bill");
		$bill->where("status", 0);
		$bill->where("deleted", 0);
		$data["results"][] = array("totalBill"=>$bill->count());
		
		//SO
		$so = new Bill(null, $this->entity);
		if(!empty($filters) && isset($filters)){
			$so->where($filters[0]["field"], $filters[0]["value"]);
		}
		$so->where("type", "SO");
		$so->where("status", 0);
		$so->where("deleted", 0);		
		$data["results"][] = array("totalSO"=>$so->count());		

		//Invoice
		$inv = new Bill(null, $this->entity);
		if(!empty($filters) && isset($filters)){
			$inv->where($filters[0]["field"], $filters[0]["value"]);
		}
		$inv->where_in("type", array("Invoice"));
		$inv->where_in("status", array(0,2));
		$inv->where("deleted", 0);
		$inv->get();		
		$data["results"][] = array("totalOpenInvoice"=>$inv->result_count());

		//Product
		$p = new Product(null, $this->entity);
		$p->where("status", 1);
		$p->where("on_hand <=", "order_point");
		$p->where("deleted", 0);
		$p->get();
		$data["results"][] = array("totalMinProduct"=>$p->result_count());

		$this->response($data, 200);		
	}

	//GET SALE SUMMARY
	function sale_summary_get(){
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;		

		$sale = new Bill(null, $this->entity);
		$unpaid = new Bill(null, $this->entity);
		$paid = 0;
		$invest = new Bill(null, $this->entity);
		$income = new Bill(null, $this->entity);
		$total_income = 0;
		
		$bill = new Bill(null, $this->entity);
		$unbill = new Bill(null, $this->entity);
		$billed = 0;
		$salary = new Bill(null, $this->entity);
		$witdraw = new Bill(null, $this->entity);
		$expense = new Bill(null, $this->entity);
		$total_expense = 0;

		//Filter		
		if(!empty($filters) && isset($filters)){			
	    	foreach ($filters as $value) {	    				
	    		$sale->where($value["field"], $value["value"]);
	    		$unpaid->where($value["field"], $value["value"]);
	    		$invest->where($value["field"], $value["value"]);
	    		$income->where($value["field"], $value["value"]);

	    		$bill->where($value["field"], $value["value"]);
	    		$unbill->where($value["field"], $value["value"]);
	    		$salary->where($value["field"], $value["value"]);
	    		$witdraw->where($value["field"], $value["value"]);
	    		$expense->where($value["field"], $value["value"]);	    			    		
			}									 			
		}
		
		//Sale
		$sale->select_sum('amount');		
		$sale->where_in("type", ["invoice","receipt"]);		
		$sale->where("deleted", 0);
		$sale->get();		
				
		//Unpaid
		$unpaid->select_sum('amount');		
		$unpaid->where("type", "invoice");
		$unpaid->where("status", 0);
		$unpaid->where("deleted", 0);
		$unpaid->get();		
		
		$paid = floatval($sale->amount) - floatval($unpaid->amount);
		
		//Invest		
		$invest->select_sum('amount');		
		$invest->where("type", "invest");		
		$invest->where("deleted", 0);
		$invest->get();		
		
		//Income
		$income->select_sum('amount');		
		$income->where("type", "income");		
		$income->where("deleted", 0);
		$income->get();
		
		$total_income = $paid + floatval($invest->amount) + floatval($income->amount);
				
		//Bill		
		$bill->select_sum('amount');		
		$bill->where("type", "bill");		
		$bill->where("deleted", 0);
		$bill->get();		
		
		//Unbill
		$unbill->select_sum('amount');		
		$unbill->where("type", "bill");
		$unbill->where("status", 0);
		$unbill->where("deleted", 0);
		$unbill->get();		
		
		$billed = floatval($bill->amount) - floatval($unbill->amount);
		
		//Salary		
		$salary->select_sum('amount');		
		$salary->where("type", "salary");		
		$salary->where("deleted", 0);
		$salary->get();		
		
		//Witdraw		
		$witdraw->select_sum('amount');		
		$witdraw->where("type", "witdraw");		
		$witdraw->where("deleted", 0);
		$witdraw->get();		

		//Expense		
		$expense->select_sum('amount');		
		$expense->where("type", "expense");		
		$expense->where("deleted", 0);
		$expense->get();					

		$total_expense = $billed + floatval($salary->amount) + floatval($witdraw->amount) + floatval($expense->amount);
		
		$total = $total_income - $total_expense;		

		$data["results"][] = array(
			"sale"			=> floatval($sale->amount),
			"unpaid"		=> floatval($unpaid->amount),
			"paid"			=> $paid,
			"invest"		=> floatval($invest->amount),
			"income"		=> floatval($income->amount),
			"total_income"	=> $total_income,

			"bill"			=> floatval($bill->amount),
			"unbill"		=> floatval($unbill->amount),
			"billed"		=> $billed,
			"salary"		=> floatval($salary->amount),
			"witdraw"		=> floatval($witdraw->amount),
			"expense"		=> floatval($expense->amount),
			"total_expense"	=> $total_expense,

			"total"			=> floatval($total)
		);		

		$this->response($data, 200);		
	}

	//GET AMOUNT
	function amount_get() {		
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 50;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = [];
		$data["count"] = 0;

		$obj = new Bill(null, $this->entity);		

		//Sort
		if(!empty($sort) && isset($sort)){					
			foreach ($sort as $value) {
				$obj->order_by($value["field"], $value["dir"]);
			}
		}
		
		//Filter		
		if(!empty($filters) && isset($filters)){
			$deleted = 0;

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
		    		}else{
		    			$obj->where($value["field"].' '.$value["operator"], $value["value"]);
		    		}
	    		}else{
	    			if($value["field"]=="deleted"){	    			
	    				$deleted = $value["value"];			    				    			
	    			}else{
	    				$obj->where($value["field"], $value["value"]);
	    			}	
	    		}
			}
			
			$obj->where("deleted", $deleted);											 			
		}		

		//Results
		$obj->select_sum("amount");		
		$obj->get();
		$data["results"][] = floatval($obj->amount);

		//Response Data		
		$this->response($data, 200);	
	}	
	
}
/* End of file bills.php */
/* Location: ./application/controllers/api/bills.php */