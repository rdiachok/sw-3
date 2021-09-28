<?php

namespace App\Models;


class Users
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
        $sql = "SELECT * FROM USERS";

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