<?php namespace App\Models;

use CodeIgniter\Model;

class Model_url extends model{

	protected $table = 'urls';
	protected $primaryKey = 'url_id';
	protected$allowedFields = [
		'url_code','url_address','url_created_at'
	];
	
	
	}
	?>