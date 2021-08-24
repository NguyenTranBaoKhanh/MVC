<?php

use App\Core\Database;


//đã require trong index rồi
class CategoryModel extends Database
{

    function all()
    {
        $sql = 'SELECT * FROM cake_type';
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function store($data){

    }

    function delete($data){

    }

    function update($data){
        
    }

}
