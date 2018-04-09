<?php
include_once('models/Connection.php');
	class Model{

    public $table = "";
	public $primaryKey = "id";

	public $dbconn = null;

    public function __construct(){
      $connection = new Connection();
      $this->dbconn = $connection->conn;
    }

	public function All(){
      	$data = array();
      // Cau lenh truy van co so du lieu
    	$query = "SELECT * FROM " . $this->table." ORDER BY " . $this->primaryKey." DESC";
    	
    	// Thuc thi cau lenh truy van co so du lieu
    	$result = $this->dbconn->query($query);

      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      }

      return $data;
		}

	public function find($id){
      // Cau lenh truy van co so du lieu
      $query = "SELECT * FROM " .$this->table." WHERE " .$this->primaryKey." = '$id' ";

      // Thuc thi cau lenh truy van co so du lieu
      $result = $this->dbconn->query($query)->fetch_assoc();

      return $result;
	}

    // Chèn dữ liệu vào csdl
	public function insert($data){

		$fields = "";
		$values = "";

		foreach ($data as $key => $value) {
			$fields .= ",$key";
			$values .= ",'".$value."'";
		}

		$fields = trim($fields,",");
		$values = trim($values,",");
		$sql = "INSERT INTO ".$this->table."(".$fields.") VALUES (".$values.")";
		
		$status = $this->dbconn->query($sql);

		$last_id = $this->dbconn->insert_id;

		$data = $this->find($last_id);

		return $data;
	}

		// Sửa dữ liệu
	public function update($data){
		$sql = "";

		foreach ($data as $key => $value) {
			$sql .= ",$key = '".$value."'";
		}

		$sql = trim($sql,',');

		$query = "UPDATE ".$this->table." SET ".$sql." WHERE ".$this->primaryKey."=".$data['id'];

		$status = $this->dbconn->query($query);

		$data = $this->find($data['id']);

		return $data;
	}

	public function delete($id){

		$query = "DELETE FROM ".$this->table." WHERE ".$this->primaryKey." = " . $id;
		$status = $this->dbconn->query($query);

		return $status;
	}

	public function page($numb){
				
	 	// Cau lenh truy van co so du lieu
		$query = "SELECT COUNT(*) as num_row FROM ".$this->table;
		// Thuc thi cau lenh truy van co so du lieu
		$result = $this->dbconn->query($query);
		$num_row= $result->fetch_assoc();
		$num_page=CEIL(($num_row['num_row']/$numb));
		return $num_page;
		
	}

	public function dataPage($start,$numb){
		$data = array();

		$query = "SELECT * FROM $this->table  ORDER BY id DESC LIMIT $start,$numb";
		$result = $this->dbconn->query($query);
		while($row = $result->fetch_assoc()){
			$data[]=$row;
		}
		return $data;
	}

	public function countView($id){
		    	$data = array();
      // Cau lenh truy van co so du lieu
    	$query = "UPDATE $this->table SET count_view = count_view + 1 WHERE id = $id";
    	
    	// Thuc thi cau lenh truy van co so du lieu
    	$result = $this->dbconn->query($query);

  //     while($row = $result->fetch_assoc()) {
  //       $data[] = $row;
  //     }

  //     return $data;
		// }
	}
}
