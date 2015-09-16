<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_line extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_one = array(				
		'bill' => array(
			'class' => 'bill',
			'other_field' => 'bill_line'
		),
		'currency' => array(
			'class' => 'currency',
			'other_field' => 'bill_line'
		),
		'product' => array(
			'class' => 'product',
			'other_field' => 'bill_line'
		),
		'unit' => array(
			'class' => 'unit',
			'other_field' => 'bill_line'
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

/* End of file bill_line.php */
/* Location: ./application/models/bill_line.php */