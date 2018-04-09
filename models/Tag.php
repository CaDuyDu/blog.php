<?php 
	include_once 'models/Model.php';
	class Tag extends Model{
		public $connTag;

		public $table="tags";
		public $primaryKey="id";
		
		public function __construct()
		{
			parent::__construct();
		}
	}
 ?>