<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Currency extends DataMapper {
	var $table = "currencies";

	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_many = array(		
		'unit' => array(
			'class' => 'unit',
			'other_field' => 'currency'
		),
		'price_list' => array(
			'class' => 'price_list',
			'other_field' => 'currency'
		),
		'stock' => array(
			'class' => 'stock',
			'other_field' => 'currency'
		),
		'bill' => array(
			'class' => 'bill',
			'other_field' => 'currency'
		),
		'bill_line' => array(
			'class' => 'bill_line',
			'other_field' => 'currency'
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

/* End of file currency.php */
/* Location: ./application/models/currency.php */