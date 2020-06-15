<?php
	include 'Database.php';

	abstract class main{
		protected $table;
		abstract public function insert();
		abstract public function update($id);

	public function readById($id){
		$sql = "SELECT * from $this->table where id=:id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}


	public function readAll(){
		$sql = "SELECT *from  $this->table";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();

	}

	public function delete($id){
		$sql = "DELETE from $this->table where id=:id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

	}

?>