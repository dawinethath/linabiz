<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends DataMapper {
	protected $created_field = "created_at";
	protected $updated_field = "updated_at";

	public $has_one = array("user",
		'currency' => array(
			'class' => 'currency',
			'other_field' => 'contact'
		),		
		'contact_type' => array(
			'class' => 'contact_type',
			'other_field' => 'contact'
		)
	);

	public $has_many = array(		
		'stock' => array(
			'class' => 'stock',
			'other_field' => 'contact'
		),
		'bill' => array(
			'class' => 'bill',
			'other_field' => 'contact'
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

/* End of file contact.php */
/* Location: ./application/models/contact.php */