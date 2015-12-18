<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_one = array(		
		'currency' => array(
			'class' => 'currency',
			'other_field' => 'bill'
		),		
		'contact' => array(
			'class' => 'contact',
			'other_field' => 'bill'
		)
	);

	public $has_many = array(		
		'bill_line' => array(
			'class' => 'bill_line',
			'other_field' => 'bill'
		),
		'stock' => array(
			'class' => 'stock',
			'other_field' => 'bill'
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

/* End of file bill.php */
/* Location: ./application/models/bill.php */