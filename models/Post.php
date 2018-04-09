<?php
  include_once('models/Model.php');
  class Post extends Model{
    public $connUser;

    public $table = "posts";
	public $primaryKey = "id";

    public function __construct(){
      parent::__construct();
    }
 //    public function find($user){
 //      // Cau lenh truy van co so du lieu
 //      $query = "SELECT * FROM " .$this->table." WHERE user = '$user' ";

 //      // Thuc thi cau lenh truy van co so du lieu
 //      $result = $this->dbconn->query($query)->fetch_assoc();

 //      return $result;
	// }
  }
 ?>
