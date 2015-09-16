<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_one = array(		
		'category' => array(
			'class' => 'category',
			'other_field' => 'product'
		),		
		'unit' => array(
			'class' => 'unit',
			'other_field' => 'product'
		),
		'bill_line' => array(
			'class' => 'bill_line',
			'other_field' => 'product'
		)
	);

	public $has_many = array(		
		'stock' => array(
			'class' => 'stock',
			'other_field' => 'product'
		),		
		'price_list' => array(
			'class' => 'price_list',
			'other_field' => 'product'
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

/* End of file product.php */
/* Location: ./application/models/product.php */