<?php
	include "main.php";

	?>

	<?php

	class Student extends main{
	
		protected $table = "tbl_student";
		private $name;
		private $department;
		private $age;

	public function setName($name){
		$this->name = $name;
	}

	public function setDepartment($department){
		$this->department = $department;
	}

	public function setAge($age){
		$this->age = $age;
	}

	public function insert(){
		$sql = "INSERT into $this->table(name, department, age) values(:name, :department, :age)";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':department', $this->department);
		$stmt->bindParam(':age', $this->age);
		return $stmt->execute();
	}


	public function update($id){
		$sql = "UPDATE $this->table SET name = :name, department = :department, age = :age where id=:id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':department', $this->department);
		$stmt->bindParam(':age', $this->age);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

}


?>