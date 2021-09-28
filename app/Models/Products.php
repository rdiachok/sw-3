<?php

namespace App\Models;



class Products
{

	protected $row;

	// GET METHODS
	public function getRow()
	{
		return $this->row;
	}



	// SET METHODS
	public function setRow(string $row)
	{
		$this->row = $row;
	}



	// CRUD OPERATIONS
	public function create(array $data)
	{
	}

	public function read(int $id)
	{
		include 'dbconnect.php';
		$sql = "SELECT d.name as name, d.secondName as sname, t.name as prod,
		t.manufacturer as company, t.price as price
		FROM users d 
		LEFT join  products t on d.custumerId = t.userWhoADD";

		if ($result = $conn->query($sql)) {
			$row = $result->fetch_all();
			$this->row = $row;
		} else {
			$this->row = 'Oops(';
		}
		$conn->close();
	}

	public function update(int $id, array $data)
	{
	}

	public function delete(int $id)
	{
	}
}