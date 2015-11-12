<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class Contacts extends REST_Controller {
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
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 50;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Contact(null, $this->entity);		

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
		    		}else if($value["operator"]=="search"){
		    			$obj->like("number", $value["value"], "after");
				    	$obj->or_like("surname", $value["value"], "after");
				    	$obj->or_like("name", $value["value"], "after");
				    	$obj->or_like("company", $value["value"], "after");
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

		if(!empty($limit) && !empty($page)){
			$obj->get_paged_iterated($page, $limit);
			$data["count"] = $obj->paged->total_rows;							
		}
		
		if($obj->result_count()>0){
			foreach ($obj as $value) {
				$bal = new Bill(null, $this->entity);
				$bal->select_sum("amount");
				$bal->where("contact_id", $value->id);
				$bal->where("status", 0);

				if($value->contact_type_id==5){
					$bal->where("type", "bill");
				}else{
					$bal->where("type", "invoice");
				}
				$bal->get();

				//Fullname
				$fullname = $value->surname.' '.$value->name;
				if($value->contact_type_id==3 || $value->contact_type_id==5){
					$fullname = $value->company;					
				}

		 		$data["results"][] = array(
		 			"id" 				=> $value->id,											
					"currency_id" 		=> $value->currency_id,
					"user_id"			=> $value->user_id, 	
					"contact_type_id" 	=> $value->contact_type_id, 						
					"number" 			=> $value->number,			
					"surname" 			=> $value->surname,			
					"name" 				=> $value->name,			
					"gender"			=> $value->gender,			
					"dob" 				=> $value->dob,				
					"pob" 				=> $value->pob,						
					"address" 			=> $value->address,
					"family_member"		=> $value->family_member,
					"id_number" 		=> $value->id_number,
					"phone" 			=> $value->phone,
					"email" 			=> $value->email,					
					"job" 				=> $value->job,				
					"company" 			=> $value->company,											
					"image_url" 		=> $value->image_url,		
					"memo" 				=> $value->memo,																							
					"credit_limit" 		=> $value->credit_limit,	
					"status" 			=> $value->status,			
					"registered_date" 	=> $value->registered_date,
					"deleted" 			=> $value->deleted,

					"fullname" 			=> $fullname,
					"fullIdName"		=> $value->number.' '.$fullname,
					"contact_type"		=> $value->contact_type->get_raw()->result(),
					"balance" 			=> floatval($bal->amount)
		 		);
			}
		}

		// //Response Data		
		$this->response($data, 200);			
	}
	
	//POST
	function index_post() {
		$models = json_decode($this->post('models'));

		$number = "";
		foreach ($models as $value) {
			if($number==""){				
				$number = $this->_generate_number();
			}else{
				$last_no = $number;
				$header = substr($last_no, 0, -4);
				$no = intval(substr($last_no, strlen($last_no) - 5));
				$no++;
				$number = $header . str_pad($no, 5, "0", STR_PAD_LEFT);
			}

			$obj = new Contact(null, $this->entity);
						
			$obj->currency_id 	= $value->currency_id;
			$obj->user_id 		= $value->user_id;
			$obj->contact_type_id = $value->contact_type_id;							
			$obj->number		= $number;
			$obj->surname		= $value->surname;
			$obj->name			= $value->name;
			$obj->gender		= $value->gender;
			$obj->dob			= $value->dob!==""?date("Y-m-d", strtotime($value->dob)):"";
			$obj->pob			= $value->pob;
			$obj->address 		= $value->address;				
			$obj->family_member	= $value->family_member;
			$obj->id_number		= $value->id_number;
			$obj->phone 		= $value->phone;
			$obj->email 		= $value->email;				
			$obj->job			= $value->job;
			$obj->company		= $value->company;				
			$obj->image_url		= $value->image_url;
			$obj->memo			= $value->memo;
			$obj->credit_limit	= $value->credit_limit;	
			$obj->status		= $value->status;					
			$obj->registered_date = date("Y-m-d", strtotime($value->registered_date));
			$obj->deleted 		= isset($value->deleted)?$value->deleted:0;			

			if($obj->save()){
				//Respsone
				$data["results"][] = array(
					"id" 				=> $obj->id,											
					"currency_id" 		=> $obj->currency_id,
					"user_id"			=> $obj->user_id, 	
					"contact_type_id" 	=> $obj->contact_type_id, 						
					"number" 			=> $obj->number,			
					"surname" 			=> $obj->surname,			
					"name" 				=> $obj->name,			
					"gender"			=> $obj->gender,			
					"dob" 				=> $obj->dob,				
					"pob" 				=> $obj->pob,						
					"address" 			=> $obj->address,
					"family_member"		=> $obj->family_member,
					"id_number" 		=> $obj->id_number,
					"phone" 			=> $obj->phone,
					"email" 			=> $obj->email,					
					"job" 				=> $obj->job,				
					"company" 			=> $obj->company,											
					"image_url" 		=> $obj->image_url,		
					"memo" 				=> $obj->memo,																							
					"credit_limit" 		=> $obj->credit_limit,	
					"status" 			=> $obj->status,			
					"registered_date" 	=> $obj->registered_date,
					"deleted"			=> $obj->deleted,

					"fullname" 			=> $obj->surname.' '.$obj->name,
					"fullIdName"		=> $obj->number.' '.$obj->surname.' '.$obj->name,
					"contact_types"		=> $obj->contact_type->get_raw()->result()			
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
			$obj = new Contact(null, $this->entity);
			$obj->get_by_id($value->id);

			$obj->currency_id 	= $value->currency_id;
			$obj->user_id 		= $value->user_id;
			$obj->contact_type_id = $value->contact_type_id;							
			$obj->number		= $value->number;
			$obj->surname		= $value->surname;
			$obj->name			= $value->name;
			$obj->gender		= $value->gender;
			$obj->dob			= $value->dob!==""?date("Y-m-d", strtotime($value->dob)):"";
			$obj->pob			= $value->pob;
			$obj->address 		= $value->address;				
			$obj->family_member	= $value->family_member;
			$obj->id_number		= $value->id_number;
			$obj->phone 		= $value->phone;
			$obj->email 		= $value->email;				
			$obj->job			= $value->job;
			$obj->company		= $value->company;				
			$obj->image_url		= $value->image_url;
			$obj->memo			= $value->memo;
			$obj->credit_limit	= $value->credit_limit;	
			$obj->status		= $value->status;					
			$obj->registered_date = date("Y-m-d", strtotime($value->registered_date));
			$obj->deleted 		= $value->deleted;

			if($obj->save()){
				//Results
				$data["results"][] = array(
					"id" 				=> $obj->id,											
					"currency_id" 		=> $obj->currency_id,
					"user_id"			=> $obj->user_id, 	
					"contact_type_id" 	=> $obj->contact_type_id, 						
					"number" 			=> $obj->number,			
					"surname" 			=> $obj->surname,			
					"name" 				=> $obj->name,			
					"gender"			=> $obj->gender,			
					"dob" 				=> $obj->dob,				
					"pob" 				=> $obj->pob,						
					"address" 			=> $obj->address,
					"family_member"		=> $obj->family_member,
					"id_number" 		=> $obj->id_number,
					"phone" 			=> $obj->phone,
					"email" 			=> $obj->email,					
					"job" 				=> $obj->job,				
					"company" 			=> $obj->company,											
					"image_url" 		=> $obj->image_url,		
					"memo" 				=> $obj->memo,																							
					"credit_limit" 		=> $obj->credit_limit,	
					"status" 			=> $obj->status,			
					"registered_date" 	=> $obj->registered_date,
					"deleted" 			=> $obj->deleted,

					"fullname" 			=> $obj->surname.' '.$obj->name,
					"fullIdName"		=> $obj->number.' '.$obj->surname.' '.$obj->name,
					"contact_types"		=> $obj->contact_type->get_raw()->result()
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
			$obj = new Contact(null, $this->entity);
			$obj->where("id", $value->id)->get();
			
			$data["results"][] = array(
				"data"   => $value,
				"status" => $obj->delete()
			);							
		}

		//Response data
		$this->response($data, 200);
	}

	//Generate invoice number
	private function _generate_number(){		
		$header = "VSR";   	
		
		$YY = date("y");
		$MM = date("m");
		$headerWithDate = $header . $YY . $MM;

		$inv = new Contact(null, $this->entity);		
		$inv->order_by('id', 'desc');
		$inv->get();

		$last_no = "";		
		if($inv->result_count()>0){
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
	

	//COMPANY
	function company_get(){
		$filters = $this->get("filter")["filters"];		
		$page 	 = $this->get("page");		
		$limit 	 = $this->get("limit");								
		$sort 	 = $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Company(null, $this->entity);		

		//Sort
		if(!empty($sort) && isset($sort)){					
			foreach ($sort as $value) {
				$obj->order_by($value["field"], $value["dir"]);
			}
		}
		
		//Filter		
		if(!empty($filters) && isset($filters)){			
	    	foreach ($filters as $value) {	    		
	    		$obj->where($value["field"], $value["value"]);	    		
			}									 			
		}		

		if(!empty($limit) && !empty($page)){
			$obj->include_related('currency', array('locale', 'rate'), FALSE);

			$obj->get_paged_iterated($page, $limit);
			$data["count"] = $obj->paged->total_rows;							
		}

		if($obj->result_count()>0){			
			foreach ($obj as $value) {				
				//Results				
				$data["results"][] = array(
					"id" 	=> $value->id,				
					"name" 	=> $value->name,
					"abbr"	=> $value->abbr,
					"currency_id" => $value->currency_id,
					"locale"=> $value->locale,
					"rate"	=> $value->rate			
				);
			}
		}		
		
		//Response Data
		$this->response($data, 200);
	}	

	//GET TYPE
	function type_get() {		
		$filters 	= $this->get("filter")["filters"];		
		$page 		= $this->get('page') !== false ? $this->get('page') : 1;		
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
		$sort 	 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Contact_type(null, $this->entity);		

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

		if(!empty($limit) && !empty($page)){
			$obj->get_paged_iterated($page, $limit);
			$data["count"] = $obj->paged->total_rows;							
		}
		
		if($obj->result_count()>0){
			foreach ($obj as $value) {				
		 		$data["results"][] = array(
		 			"id" 		=> $value->id,
		 			"name" 		=> $value->name,											
					"description" 	=> $value->description
					
		 		);
			}
		}

		// //Response Data		
		$this->response($data, 200);			
	}

	//CURRENCY
	function currency_get(){		
		$obj = new Currency(null, $this->entity);	
		$obj->get();	

		$data = array();
		foreach($obj as $value) {
			$data[] = array(
				"id" 		=> $value->id,
				"code" 		=> $value->code,
				"country" 	=> $value->country,
				"locale" 	=> $value->locale,
				"rate" 		=> $value->rate
			);
		}	
		
		$this->response($data, 200);
	}

	//ACCOUNT
	function account_get(){
		$filter = $this->get('filter')["filters"];
		$obj = new Account(null, $this->entity);		
		
		$obj->where($filter[0]["field"], $filter[0]["value"]);
		$obj->get();	

		$data = array();
		foreach($obj as $value) {
			$data[] = array(
				"id" 	=> $value->id,
				"name" 	=> $value->name
			);
		}		
		
		$this->response($data, 200);
	}

	//EMPLOYEE
	function employee_get(){
		$filters = $this->get("filter")["filters"];			
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Contact(null, $this->entity);
		$obj->where("contact_type_id", 3);
		$obj->get();
				
		foreach ($obj as $value) {				
			//Results				
			$data["results"][] = array(
				"id" 	=> $value->id,				
				"name" 	=> $value->surname.' '.$value->name	
			);
		}				
		
		//Response Data
		$this->response($data, 200);
	}
			
}

/* End of file contacts.php */
/* Location: ./application/controllers/api/contacts.php */