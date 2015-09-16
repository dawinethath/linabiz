<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_many = array(
		'product' => array(
			'class' => 'product',
			'other_field' => 'unit'
		),
		'price_list' => array(
			'class' => 'price_list',
			'other_field' => 'unit'
		),		
		'stock' => array(
			'class' => 'stock',
			'other_field' => 'unit'
		),
		'bill_line' => array(
			'class' => 'bill_line',
			'other_field' => 'unit'
		)		
	);

	public function __construct($id = null, $db = null) {	
		$this->db_params = array(
				'dbdriver' => 'mysql',
				'pconnect' => true,
				'db_debug' => true,
				'cache_on' => false,
				'char_set' => 'utf8',
				'cachedir' => '',
				'dbcollat' => 'utf8_general_ci',
				'hostname' => 'localhost',
				'username' => 'root',
				'password' => '',
				'database' => $db,
				'prefix'   => ''
			);
		parent::__construct($id);
	}	
}

/* End of file unit.php */
/* Location: ./application/models/unit.php */