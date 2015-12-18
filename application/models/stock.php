<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_one = array(		
		'contact' => array(
			'class' => 'contact',
			'other_field' => 'stock'
		),
		'currency' => array(
			'class' => 'currency',
			'other_field' => 'stock'
		),		
		'product' => array(
			'class' => 'product',
			'other_field' => 'stock'
		),
		'unit' => array(
			'class' => 'unit',
			'other_field' => 'stock'
		),
		'bill' => array(
			'class' => 'bill',
			'other_field' => 'stock'
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

/* End of file stock.php */
/* Location: ./application/models/stock.php */