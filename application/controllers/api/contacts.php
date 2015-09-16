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
		$limit 		= $this->get('limit') !== false ? $this->get('limit') : 100;								
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
		 			"id" 				=> $value->id,		 			
					"company_id" 		=> $value->company_id,						
					"currency_id" 		=> $value->currency_id,
					"user_id"			=> $value->user_id, 	
					"contact_type_id" 	=> $value->contact_type_id, 						
					"number" 			=> $value->number,			
					"surname" 			=> $value->surname,			
					"name" 				=> $value->name,			
					"gender"			=> $value->gender,			
					"dob" 				=> $value->dob,				
					"pob" 				=> $value->pob,						
					"family_member"		=> $value->family_member,
					"id_number" 		=> $value->id_number,
					"phone" 			=> $value->phone,
					"email" 			=> $value->email,					
					"job" 				=> $value->job,				
					"company" 			=> $value->company,								
					"vat_no" 			=> $value->vat_no,						
					"image_url" 		=> $value->image_url,		
					"memo" 				=> $value->memo,
					"address" 			=> $value->address,																		
					"credit_limit" 		=> $value->credit_limit,	
					"status" 			=> $value->status,			
					"registered_date" 	=> $value->registered_date,

					"fullname" 			=> $value->surname.' '.$value->name,
					"fullIdName"		=> $value->number.' '.$value->surname.' '.$value->name,
					"contact_types"		=> $value->contact_type->get_raw()->result()
		 		);
			}
		}

		// //Response Data		
		$this->response($data, 200);			
	}
	
	//POST
	function index_post() {
		$models = json_decode($this->post('models'));

		foreach ($models as $value) {
			$obj = new Contact(null, $this->entity);
			$obj->company_id 	= $value->company_id;			
			$obj->currency_id 	= $value->currency_id;
			$obj->user_id 		= $value->user_id;
			$obj->contact_type_id = $value->contact_type_id;							
			$obj->number		= $value->number;
			$obj->surname		= $value->surname;
			$obj->name			= $value->name;
			$obj->gender		= $value->gender;
			$obj->dob			= $value->dob!==""?date("Y-m-d", strtotime($value->dob)):"";
			$obj->pob			= $value->pob;				
			$obj->family_member	= $value->family_member;
			$obj->id_number		= $value->id_number;
			$obj->phone 		= $value->phone;
			$obj->email 		= $value->email;				
			$obj->job			= $value->job;
			$obj->company		= $value->company;			
			$obj->vat_no		= $value->vat_no;				
			$obj->image_url		= $value->image_url;
			$obj->memo			= $value->memo;
			$obj->address 		= $value->address;															
			$obj->credit_limit	= $value->credit_limit;			
			$obj->registered_date = date("Y-m-d", strtotime($value->registered_date));			
			$obj->status		= $value->status;

			if($obj->save()){
				//Account Receiveable
				$ar = new Account(null, $this->entity);			
				$ar->get_by_id($value->account_receiveable_id);
				$ar->save($obj);			

				//Revenue account			
				$re = new Account(null, $this->entity);			
				$re->get_by_id($value->revenue_account_id);
				$re->save($obj);

				//Respsone
				$data["results"][] = array(
					"id"				=> $obj->id,
					"company_id" 		=> $obj->company_id, 							
					"currency_id" 		=> $obj->currency_id,
					"user_id"			=> $obj->user_id, 	
					"contact_type_id" 	=> $obj->contact_type_id, 						
					"number" 			=> $obj->number,			
					"surname" 			=> $obj->surname,			
					"name" 				=> $obj->name,			
					"gender"			=> $obj->gender,			
					"dob" 				=> $obj->dob,				
					"pob" 				=> $obj->pob,						
					"family_member"		=> $obj->family_member,
					"id_number" 		=> $obj->id_number,
					"phone" 			=> $obj->phone,
					"email"				=> $obj->email,					
					"job" 				=> $obj->job,				
					"company" 			=> $obj->company,
					"vat_no" 			=> $obj->vat_no,						
					"image_url" 		=> $obj->image_url,		
					"memo" 				=> $obj->memo,
					"address" 			=> $obj->address,															
					"credit_limit" 		=> $obj->credit_limit,	
					"status" 			=> $obj->status,			
					"registered_date" 	=> $obj->registered_date,					

					"account_receiveable_id" => $value->account_receiveable_id,
					"revenue_account_id" => $value->revenue_account_id				
				);				
			}		
		}
		$data["count"] = count($data["results"]);

		$this->response($data, 201);
	}
	
	//PUT
	function index_put() {
		$models = json_decode($this->put("models"));

		if(!empty($models) && isset($models)){
			$ids = array();
			foreach ($models as $key => $value) {
				$ids[] = $value->id;
				$data["status"] = $this->people->update($value->id, $value);
			}
			$data["results"] = $this->people->get_many($ids);
		}else{			
			$put = array(
				"number"					=> $this->put("number"),
				"surname"					=> $this->put("surname"),
				"name"						=> $this->put("name"),
				"gender"					=> $this->put("gender"),
				"dob"						=> $this->put("dob"),
				"pob"						=> $this->put("pob"),
				"phone"						=> $this->put("phone"),
				"email"						=> $this->put("email"),
				"family_member"				=> $this->put("family_member"),
				"memo"						=> $this->put("memo"),
				"image_url"					=> $this->put("image_url"),
				"card_number"				=> $this->put("card_number"),
				"job"						=> $this->put("job"),
				"company"					=> $this->put("company"),
				"vat_no"					=> $this->put("vat_no"),
				"bank_account"				=> $this->put("bank_account"),				
				"zip_code"					=> $this->put("zip_code"),
				"address"					=> $this->put("address"),
				"address2"					=> $this->put("address2"),
				"address3"					=> $this->put("address3"),
				"address4"					=> $this->put("address4"),
				"ship_to"					=> $this->put("ship_to"),
				"latitute"					=> $this->put("latitute"),
				"longtitute"				=> $this->put("longtitute"),				
				"province_id"				=> $this->put("province_id"),
				"district_id"				=> $this->put("district_id"),
				"commune_id"				=> $this->put("commune_id"),
				"village_id"				=> $this->put("village_id"),				
				"ampere_id"					=> $this->put("ampere_id"),
				"phase_id"					=> $this->put("phase_id"),
				"voltage_id"				=> $this->put("voltage_id"),				
				"round_settle"				=> $this->put("round_settle"),			

				"use_electricity"			=> $this->put("use_electricity"),
				"transformer_id"			=> $this->put("transformer_id"),
				"tariff_plan_id"			=> $this->put("tariff_plan_id"),
				"exemption_id" 				=> $this->put("exemption_id"),
				"maintenance_id"			=> $this->put("maintenance_id"),
				"installment_id"			=> $this->put("installment_id"),

				"use_water"					=> $this->put("use_water"),
				"wtransformer_id"			=> $this->put("transformer_id"),
				"wtariff_plan_id"			=> $this->put("tariff_plan_id"),
				"wexemption_id" 			=> $this->put("exemption_id"),
				"wmaintenance_id"			=> $this->put("maintenance_id"),
				"winstallment_id"			=> $this->put("installment_id"),

				"credit_limit"				=> $this->put("credit_limit"),
				"deposit_amount"			=> $this->put("deposit_amount"),
				"balance"					=> $this->put("balance"),
				"currency_code"				=> $this->put("currency_code"),
				"sub_code"					=> $this->put("sub_code"),				
				"class_id"					=> $this->put("class_id"),
				"account_receiveable_id"	=> $this->put("account_receiveable_id"),
				"revenue_account_id"		=> $this->put("revenue_account_id"),
				"account_payable_id"		=> $this->put("account_payable_id"),

				"status"					=> $this->put("status"),
				"registered_date"			=> date("Y-m-d", strtotime($this->put("registered_date"))),
				"people_type_id"			=> $this->put("people_type_id"),
				"parent_type_id"			=> $this->put("parent_type_id"),				
				"parent_id"					=> $this->put("parent_id"),								
				"company_id"				=> $this->put("company_id")
			);
			$data["status"] = $this->people->update($this->put('id'), $put);		
			$data["results"] = $this->people->get($this->put('id'));
		}
		
		$this->response($data, 200);
	}
	
	//DELETE
	function index_delete() {
		$data["results"] = $this->people->get($this->delete("id"));		
		$data["status"] = $this->people->delete($this->delete("id"));

		$this->response($data, 200);
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

	//CONTACT TYPE
	function type_get(){
		$filter = $this->get('filter')["filters"];
		$obj = new Contact_type(null, $this->entity);		
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