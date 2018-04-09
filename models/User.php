<?php
  include_once('models/Model.php');
  class User extends Model{
    public $connUser;

    public $table = "users";
		public $primaryKey = "id";

    public function __construct(){
      parent::__construct();
    }
  }
 ?>
