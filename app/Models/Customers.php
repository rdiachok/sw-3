<?php

namespace App\Models;

class Customers
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
        $sql = "SELECT d.name as name, d.secondName as sname, d.email as mail,
        t.dateSale as ds, t.isPaid as price
        FROM customers d 
        LEFT join  orders t on d.custumerId = t.seller
        WHERE custumerId = $id";

        if ($result = $conn->query($sql)) {
            $row = $result->fetch_all();
            $this->row = $row;
        }
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}