<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //disallow direct access to this file

require APPPATH.'/libraries/REST_Controller.php';

class Categories extends REST_Controller {	
	public $entity;
	//CONSTRUCTOR
	function __construct() {
		parent::__construct();
		$this->entity = $this->input->get_request_header('Entity');
	}
	
	//GET 
	function index_get() {		
		$filters = $this->get("filter")["filters"];		
		$page 	= $this->get('page');		
		$limit 	= $this->get('limit');							
		$sort 	= $this->get("sort");		
		$data["results"] = array();
		$data["count"] = 0;

		$obj = new Category(null, $this->entity);		

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
				//Results				
				$data["results"][] = array(
					"id" 	=> $value->id,
					"name" 	=> $value->name,
					"sub_of"=> $value->sub_of							
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
			$obj = new Meter(null, $this->entity);
			$obj->company_id 	= $value->company_id;
			$obj->utility_id 	= $value->utility_id;
			$obj->location_id 	= $value->location_id;
			$obj->electricity_box_id = $value->electricity_box_id;
			$obj->contact_id 	= $value->contact_id;
			$obj->item_id 		= $value->item_id;
			$obj->reactive_of 	= $value->reactive_of;
			$obj->backup_of 	= $value->backup_of;
			$obj->number 		= $value->number;
			$obj->multiplier 	= $value->multiplier;
			$obj->max_number 	= $value->max_number;
			$obj->ear_sealed 	= $value->ear_sealed;
			$obj->cover_sealed 	= $value->cover_sealed;
			$obj->memo 			= $value->memo;
			$obj->status 		= $value->status;
			$obj->date_used 	= date("Y-m-d", strtotime($value->date_used));
			
			if($obj->save()){
				//Ampere			
				$a = new Electricity_unit(null, $this->entity);
				$a->get_by_id($value->amperes->id);
				$a->save($obj);
				$amperes = array("id"=>$a->id, "name"=>$a->name);

				//Phase			
				$p = new Electricity_unit(null, $this->entity);
				$p->get_by_id($value->phases->id);
				$p->save($obj);
				$phases = array("id"=>$p->id, "name"=>$p->name);

				//Voltage			
				$v = new Electricity_unit(null, $this->entity);
				$v->get_by_id($value->voltages->id);
				$v->save($obj);
				$voltages = array("id"=>$v->id, "name"=>$v->name);

				//Tariff
				$tariffs = array();
				$tariff_id = intval($value->tariffs->id);
				if($tariff_id>0){
					$t = new Fee(null, $this->entity);
					$t->get_by_id($tariff_id);
					$t->save($obj);
					$tariffs = array("id"=>$t->id, "name"=>$t->name, "amount"=>$t->amount);			
				}			
				
				//Exemption
				$exemptions = array();
				$exemption_id = intval($value->exemptions->id);
				if($exemption_id>0){
					$e = new Fee(null, $this->entity);
					$e->get_by_id($exemption_id);
					$e->save($obj);
					$exemptions = array("id"=>$e->id, "name"=>$e->name, "amount"=>$e->amount);			
				}

				//Maintenance
				$maintenances = array();
				$maintenance_id = intval($value->maintenances->id);
				if($maintenance_id>0){
					$m = new Fee(null, $this->entity);
					$m->get_by_id($maintenance_id);
					$m->save($obj);
					$maintenances = array("id"=>$m->id, "name"=>$m->name, "amount"=>$m->amount);			
				}

				//Respsone
				$data["results"][] = array(
					"id" 			=> $obj->id,
					"company_id" 	=> $obj->company_id, 		
					"utility_id" 	=> $obj->utility_id, 		
					"location_id" 	=> $obj->location_id,
					"electricity_box_id"=> $obj->electricity_box_id, 	
					"contact_id" 	=> $obj->contact_id,
					"item_id" 		=> $obj->item_id,
					"reactive_of"	=> $obj->reactive_of,			
					"backup_of" 	=> $obj->backup_of, 						
					"number" 		=> $obj->number,			
					"multiplier" 	=> $obj->multiplier,			
					"max_number" 	=> $obj->max_number,											
					"ear_sealed"	=> $obj->ear_sealed=="true"?true:false,
					"cover_sealed" 	=> $obj->cover_sealed=="true"?true:false,					
					"memo" 			=> $obj->memo,		
					"status" 		=> $obj->status,
					"date_used" 	=> $obj->date_used,

					"item_name"		=> $obj->item->get()->name,
					"electricity_box_number" => $obj->electricity_box->get()->number,

					"amperes" 		=> $amperes,
					"phases" 		=> $phases,
					"voltages" 		=> $voltages,				

					"tariffs" 		=> $tariffs,
					"exemptions" 	=> $exemptions,
					"maintenances" 	=> $maintenances
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
			$obj = new Meter(null, $this->entity);
			$obj->get_by_id($value->id);

			$obj->company_id 	= $value->company_id;
			$obj->utility_id 	= $value->utility_id;
			$obj->location_id 	= $value->location_id;
			$obj->electricity_box_id = $value->electricity_box_id;
			$obj->contact_id 	= $value->contact_id;
			$obj->item_id 		= $value->item_id;
			$obj->reactive_of 	= $value->reactive_of;
			$obj->backup_of 	= $value->backup_of;
			$obj->number 		= $value->number;
			$obj->multiplier 	= $value->multiplier;
			$obj->max_number 	= $value->max_number;
			$obj->ear_sealed 	= $value->ear_sealed;
			$obj->cover_sealed 	= $value->cover_sealed;
			$obj->memo 			= $value->memo;
			$obj->status 		= $value->status;
			$obj->date_used 	= date("Y-m-d", strtotime($value->date_used));

			if($obj->save()){				
				//Ampere
				$amperes = array();
				$a = $obj->electricity_unit->get_by_type("ampere");
				if($a->exists()){
					$a->set_join_field($obj, "electricity_unit_id", $value->amperes->id);
					$a->save();

					$a = $obj->electricity_unit->get_by_type("ampere");
					$amperes = array("id"=>$a->id, "name"=>$a->name);
				}

				//Phase
				$phases = array();
				$p = $obj->electricity_unit->get_by_type("phase");
				if($p->exists()){
					$p->set_join_field($obj, "electricity_unit_id", $value->phases->id);
					$p->save();

					$p = $obj->electricity_unit->get_by_type("phase");
					$phases = array("id"=>$p->id, "name"=>$p->name);
				}		

				//Voltage
				$voltages = array();
				$v = $obj->electricity_unit->get_by_type("voltage");
				if($v->exists()){
					$v->set_join_field($obj, "electricity_unit_id", $value->voltages->id);
					$v->save();

					$v = $obj->electricity_unit->get_by_type("voltage");
					$voltages = array("id"=>$v->id, "name"=>$v->name);
				}		

				//Tariff
				$tariffs = array("id"=>0);
				$tariff_id = intval($value->tariffs->id);			
				if($tariff_id>0){
					$t = $obj->fee->get_by_type("tariff");
					if($t->exists()){
						$t->set_join_field($obj, "fee_id", $tariff_id);
						$t->save();

						$t = $obj->fee->get_by_type("tariff");
					}else{
						$t = new Fee(null, $this->entity);
						$t->get_by_id($tariff_id);
						$t->save($obj);
					}
					$tariffs = array("id"=>$t->id, "name"=>$t->name, "amount"=>$t->amount);			
				}else{						
					$t = $obj->fee->get_by_type("tariff");
					if($t->exists()){
					    $t->delete($obj);
					}
				}
				
				//Exemption
				$exemptions = array("id"=>0);
				$exemption_id = intval($value->exemptions->id);			
				if($exemption_id>0){
					$e = $obj->fee->get_by_type("exemption");
					if($e->exists()){
						$e->set_join_field($obj, "fee_id", $exemption_id);
						$e->save();

						$e = $obj->fee->get_by_type("exemption");
					}else{
						$e = new Fee(null, $this->entity);
						$e->get_by_id($exemption_id);
						$e->save($obj);
					}
					$exemptions = array("id"=>$e->id, "name"=>$e->name, "amount"=>$e->amount);			
				}else{						
					$e = $obj->fee->get_by_type("exemption");
					if($e->exists()){
					    $e->delete($obj);
					}
				}
				
				//Maintenance
				$maintenances = array("id"=>0);
				$maintenance_id = intval($value->maintenances->id);
				if($maintenance_id>0){
					$m = $obj->fee->get_by_type("maintenance");
					if($m->exists()){
						$m->set_join_field($obj, "fee_id", $maintenance_id);
						$m->save();

						$m = $obj->fee->get_by_type("maintenance");
					}else{
						$m = new Fee(null, $this->entity);
						$m->get_by_id($maintenance_id);
						$m->save($obj);
					}			
					$maintenances = array("id"=>$m->id, "name"=>$m->name, "amount"=>$m->amount);			
				}else{						
					$m = $obj->fee->get_by_type("maintenance");
					if($m->exists()){
					    $m->delete($obj);
					}
				}

				//Results
				$data["results"][] = array(
					"id" 			=> $obj->id,
					"company_id" 	=> $obj->company_id, 		
					"utility_id" 	=> $obj->utility_id, 		
					"location_id" 	=> $obj->location_id,
					"electricity_box_id"=> $obj->electricity_box_id, 	
					"contact_id" 	=> $obj->contact_id,
					"item_id" 		=> $obj->item_id,
					"reactive_of"	=> $obj->reactive_of,			
					"backup_of" 	=> $obj->backup_of, 						
					"number" 		=> $obj->number,			
					"multiplier" 	=> $obj->multiplier,			
					"max_number" 	=> $obj->max_number,											
					"ear_sealed"	=> $obj->ear_sealed=="true"?true:false,
					"cover_sealed" 	=> $obj->cover_sealed=="true"?true:false,					
					"memo" 			=> $obj->memo,		
					"status" 		=> $obj->status,
					"date_used" 	=> $obj->date_used,

					"item_name"		=> $obj->item->get()->name,
					"electricity_box_number" => $obj->electricity_box->get()->number,

					"amperes" 		=> $amperes,
					"phases" 		=> $phases,
					"voltages" 		=> $voltages,				

					"tariffs" 		=> $tariffs,
					"exemptions" 	=> $exemptions,
					"maintenances" 	=> $maintenances
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
			$obj = new Meter(null, $this->entity);
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
/* End of file categories.php */
/* Location: ./application/controllers/api/categories.php */